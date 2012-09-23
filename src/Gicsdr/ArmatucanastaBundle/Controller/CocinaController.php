<?php

namespace Gicsdr\ArmatucanastaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gicsdr\ArmatucanastaBundle\Entity\Cocina;
use Gicsdr\ArmatucanastaBundle\Form\CocinaType;

/**
 * Cocina controller.
 *
 */
class CocinaController extends Controller
{
    /**
     * Lists all Cocina entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GicsdrArmatucanastaBundle:Cocina')->findAll();

        return $this->render('GicsdrArmatucanastaBundle:Cocina:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Cocina entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Cocina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cocina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Cocina:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Cocina entity.
     *
     */
    public function newAction()
    {
        $entity = new Cocina();
        $form   = $this->createForm(new CocinaType(), $entity);

        return $this->render('GicsdrArmatucanastaBundle:Cocina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Cocina entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Cocina();
        $form = $this->createForm(new CocinaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cocina_show', array('id' => $entity->getId())));
        }

        return $this->render('GicsdrArmatucanastaBundle:Cocina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cocina entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Cocina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cocina entity.');
        }

        $editForm = $this->createForm(new CocinaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Cocina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cocina entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Cocina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cocina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CocinaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cocina_edit', array('id' => $id)));
        }

        return $this->render('GicsdrArmatucanastaBundle:Cocina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cocina entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GicsdrArmatucanastaBundle:Cocina')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cocina entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cocina'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
