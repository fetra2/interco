<?php
   namespace App\Controller;

   use Symfony\Component\Routing\Annotation\Route;
   use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   use Symfony\Component\HttpFoundation\Response;
   use Twig\Environment;
   use App\Entity\Users;
   use App\Repository\TblvalidationRepository;

class PageController extends AbstractController{
      /**
       * @Route("/page", name="page")
      */
      public function suivre(){
         return $this->render('page.html.twig', [
            'page' => 'Suivi'
         ]);
      }

      /**
       * @Route("/res", name="showvalidation", methods="POST")
      */
      //, methods="POST"
      public function showTblValidation(TblvalidationRepository $tblvalidationrepository){
         //$tblvalidation = $tblvalidationrepository->findAllValidation();
         //$tblvalidation = $tblvalidationrepository->findAllValidationInnerJoin();
         $tblvalidation = $tblvalidationrepository->findAllLastValidationForEachCodique();
         if (!$tblvalidation) {
            throw $this->createNotFoundException('La table est vide');
         }
         dump($tblvalidation);
         /*******Raha toa ka ato no manao filtrage ny valin'ny sql:
          * maka ny tblValidation rht
          */
            /*$codique = array();
            $tblvalidationOnePerCodique = array();
            foreach ($tblvalidation as $key => $value) {
               $temp=array();
               foreach ($value as $key2 => $value2) {
                  if (is_numeric($value2)) {
                     if (in_array($value2, $codique)) {
                        goto here;
                     }
                  }
                  $temp[$key2]=$value2;
                  if ($key2=='codique') {
                     array_push($codique, $value2);
                  }
               }
               $tblvalidationOnePerCodique[$key]=$temp;
               here:
            }
            dump($tblvalidationOnePerCodique);//a retourner
            */
         /** end */
         //return $this->render('show.html.twig',
         return $this->render('show.html.twig',
         [ 'controller_name' => 'PageController', 'results' => $tblvalidation
         ]);
      }

      /**
       * @Route("/page/{slug}", name="showdetailsvalidation")
      */
      public function showTblValidationDetails(TblvalidationRepository $tblvalidationrepository, $slug){
         $tblvalidation = $tblvalidationrepository->findAllLastValidationForOneCodique($slug);
         if (!$tblvalidation) {
            throw $this->createNotFoundException('La table est vide');
         }
         dump($tblvalidation);
         return $this->render('detailsvalidation.html.twig',
         [ 'controller_name' => 'PageController', 'results' => $tblvalidation
         ]);
      }

      /**
       * @Route("/resapi", name="showvalidationapi")
      */
      public function showTblValidationapi(TblvalidationRepository $tblvalidationrepository){
         //$tblvalidation = $tblvalidationrepository->findAllValidation();
         //$tblvalidation = $tblvalidationrepository->findAllValidationInnerJoin();
         $tblvalidation = $tblvalidationrepository->findAllLastValidationForEachCodique();
         if (!$tblvalidation) {
            throw $this->createNotFoundException('La table est vide');
         }
         
         return $this->render('showapi.html.twig',
         [ 'controller_name' => 'PageController', 'results' => $tblvalidation
         ]);
      }

   }
