<?php

declare(strict_types=1);

namespace Controller\User;

use Exception;
use Framework\BaseController;
use Service\User\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LogoutUserController extends BaseController
{
    /**
     * Выходим из системы
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function action(Request $request): Response
    {
        (new Security($request->getSession()))->logout();

        return $this->redirect('index');
    }
}
