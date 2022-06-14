<?php
    namespace App\Controller;

    use App\Form\PDFType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController extends AbstractController {

        /**
         * @Route("/index", name="index")
         * @return Response
         */
        public function index(): Response {
            $form = $this->createForm(PDFType::class);
            return $this->render('pages/index.html.twig', [
                "form" => $form->createView()
            ]);
        }
    }