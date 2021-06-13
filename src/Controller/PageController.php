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
         return $this->render('show.html.twig', [
            'page' => 'Suivi'
         ]);
      }

      /**
       * @Route("/res", name="showvalidation")
      */
      public function showTblValidation(TblvalidationRepository $tblvalidationvepository){
         //$tblvalidation = $tblvalidationvepository->findAllValidation();
         //$tblvalidation = $tblvalidationvepository->findAllValidationInnerJoin();
         $tblvalidation = $tblvalidationvepository->findAllLastValidationForEachCodique();
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
         return $this->render('show.html.twig',
         [ 'controller_name' => 'PageController', 'results' => $tblvalidation
         ]);
      }




   }
