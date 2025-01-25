<?php

namespace App\Security;

use app\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\RedirectResponse;  // Correction de l'importation

class LoginAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    private RouterInterface $router;
    private CsrfTokenManagerInterface $csrfTokenManager;
    private RequestStack $requestStack;

    public function __construct(RouterInterface $router, CsrfTokenManagerInterface $csrfTokenManager, RequestStack $requestStack)
    {
        $this->router = $router;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->requestStack = $requestStack;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');
        $csrfToken = $request->request->get('_csrf_token');

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $csrfToken),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): Response
{
    // Par exemple, si le firewallName est 'main', vous pourriez décider d'une redirection différente
    if ($firewallName === 'main') {
        // Logique spéciale pour ce pare-feu
    }

    // Récupérer l'utilisateur à partir du token
    $user = $token->getUser();

    // Vérifier si l'utilisateur a des rôles
    if ($user instanceof Utilisateur) {
        $roles = $user->getRole();
    } else {
        $roles = [];
    }

    // Rediriger en fonction des rôles
    if (in_array('ROLE_ADMIN', $roles, true)) {
        return new RedirectResponse($this->router->generate('admin_menu'));
    }

    if (in_array('ROLE_EMPLOYEE', $roles, true)) {
        return new RedirectResponse($this->router->generate('employee_menu'));
    }

    if (in_array('ROLE_VETERINAIRE', $roles, true)) {
        return new RedirectResponse($this->router->generate('veterinaire_menu'));
    }

}


    



    protected function getLoginUrl(Request $request): string
    {
        return $this->router->generate('app_login');
    }
}

