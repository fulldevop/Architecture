<?php

declare(strict_types=1);

namespace Controller\User;

use Exception;
use Framework\BaseController;
use Service\User\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationUserController extends BaseController
{
    /**
     * Производим аутентификацию и авторизацию
     * @param Request $request
     * @return Response
     */
    public function action(Request $request): Response
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            $user = new Security($request->getSession());

            $isAuthenticationSuccess = $user->authentication(
                $request->request->get('login'),
                $request->request->get('password')
            );

            if ($isAuthenticationSuccess) {
                return $this->render(
                    'user/authentication_success.html.php',
                    ['user' => $user->getUser()]
                );
            }
            $error = 'Неправильный логин и/или пароль';
        }

        return $this->render(
            'user/authentication.html.php',
            ['error' => $error ?? '']
        );
    }
}
