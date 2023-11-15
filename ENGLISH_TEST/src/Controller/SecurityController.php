<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\ProjectAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class SecurityController extends AbstractController
{
    // AUTH
    #[Route(path: '/authenticator', name: 'authenticator')]
    public function authenticator(AuthenticationUtils $authenticationUtils): Response
    {
        $registrationForm = $this->createForm(RegistrationFormType::class)->createView();
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/authenticator.html.twig', [
            'registrationForm' => $registrationForm,
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    // LOGOUT
    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    // REGISTER
    #[Route('/register', name: 'register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, ProjectAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        // Création d'une nouvelle instance d'utilisateur
        $user = new User();

        // Création d'un formulaire à partir de RegisterType et association avec l'utilisateur
        $registrationForm = $this->createForm(RegistrationFormType::class, $user);
        $registrationForm->handleRequest($request);

        if ($registrationForm->isSubmitted() && $registrationForm->isValid()) {
            // Hashage du mot de passe en utilisant UserPasswordHasherInterface
            $hashedPassword = $userPasswordHasher->hashPassword($user, $registrationForm->get('plainPassword')->getData());
            $user->setPassword($hashedPassword);

            // Persistance de l'utilisateur en base de données
            $entityManager->persist($user);
            $entityManager->flush();
            // Tu peux ajouter ici d'autres actions, par exemple, envoyer un e-mail de confirmation.

            // Authentification de l'utilisateur après inscription
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        // Affichage du formulaire d'inscription en cas d'erreur ou de chargement initial
        return $this->render('security/authenticator.html.twig', [
            'registrationForm' => $registrationForm->createView(),
        ]);
    }
}
