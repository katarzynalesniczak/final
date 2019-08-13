<?php

namespace MetCardBundle\Controller;

use MetCardBundle\Entity\Data;
use MetCardBundle\Entity\Diagnosis;
use MetCardBundle\Entity\Examination;
use MetCardBundle\Entity\History;
use MetCardBundle\Entity\Proceedings;
use MetCardBundle\Form\DataType;
use MetCardBundle\Form\DiagnosisType;
use MetCardBundle\Form\ExaminationType;
use MetCardBundle\Form\ProceedingsType;
use MetCardBundle\Form\RescueTeamType;
use Symfony\Component\HttpFoundation\Request;
use MetCardBundle\Entity\RescueTeam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use MetCardBundle\Form\HistoryType;


class MetCardController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function MetCardAction(Request $request)
    {
        $team = new RescueTeam();
        $form = $this->createForm(RescueTeamType::class, $team);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $team = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();
            return $this->redirectToRoute('history', ['id' => $team->getId()]);
        }
        return $this->render('@MetCard/MetCard/homepage.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/history", name="history")
     */
    public function historyAction(Request $request)
    {
        $history = new History();
        $form = $this->createForm(HistoryType::class, $history);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $history = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($history);
            $em->flush();
            return $this->redirectToRoute('examination', ['id' => $history->getId()]);
        }
        return $this->render('@MetCard/MetCard/history.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/examination", name="examination")
     */
    public function examinationAction(Request $request)
    {
        $examination = new Examination();
        $form = $this->createForm(ExaminationType::class, $examination);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $examination = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($examination);
            $em->flush();
            return $this->redirectToRoute('diagnosis', ['id' => $examination->getId()]);
        }
        return $this->render('@MetCard/MetCard/examination.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/diagnosis", name="diagnosis")
     */
    public function diagnosisAction(Request $request)
    {
        $diagnosis = new Diagnosis();
        $form = $this->createForm(DiagnosisType::class, $diagnosis);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $diagnosis = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($diagnosis);
            $em->flush();
            return $this->redirectToRoute('proceedings', ['id' => $diagnosis->getId()]);
        }
        return $this->render('@MetCard/MetCard/diagnosis.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/proceedings", name="proceedings")
     */
    public function proceedingsAction(Request $request)
    {
        $proceedings = new Proceedings();
        $form = $this->createForm(ProceedingsType::class, $proceedings);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $proceedings = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($proceedings);
            $em->flush();
            return $this->redirectToRoute('data', ['id' => $proceedings->getId()]);
        }
        return $this->render('@MetCard/MetCard/proceedings.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/dataAndTransfer", name="data")
     */

    public function dataAndTransferAction(Request $request)
    {
        $data = new Data();
        $form = $this->createForm(DataType::class, $data);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('@MetCard/MetCard/dataAndTransfer.html.twig', array('form' => $form->createView()));
    }
}
