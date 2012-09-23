<?php

namespace Gicsdr\ArmatucanastaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gicsdr\ArmatucanastaBundle\Entity\Conversion;
use Gicsdr\ArmatucanastaBundle\Form\ConversionType;

/**
 * Conversion controller.
 *
 */
class ConversionController extends Controller
{
    /**
     * Lists all Conversion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GicsdrArmatucanastaBundle:Conversion')->findAll();

        return $this->render('GicsdrArmatucanastaBundle:Conversion:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Conversion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Conversion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conversion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Conversion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Conversion entity.
     *
     */
    public function newAction()
    {
        $entity = new Conversion();
        $form   = $this->createForm(new ConversionType(), $entity);

        return $this->render('GicsdrArmatucanastaBundle:Conversion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Conversion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Conversion();
        $form = $this->createForm(new ConversionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conversion_show', array('id' => $entity->getId())));
        }

        return $this->render('GicsdrArmatucanastaBundle:Conversion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Conversion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Conversion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conversion entity.');
        }

        $editForm = $this->createForm(new ConversionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Conversion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Conversion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Conversion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Conversion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ConversionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conversion_edit', array('id' => $id)));
        }

        return $this->render('GicsdrArmatucanastaBundle:Conversion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Conversion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GicsdrArmatucanastaBundle:Conversion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Conversion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('conversion'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
