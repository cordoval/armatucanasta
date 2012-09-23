<?php

namespace Gicsdr\ArmatucanastaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gicsdr\ArmatucanastaBundle\Entity\Plato;
use Gicsdr\ArmatucanastaBundle\Form\PlatoType;

/**
 * Plato controller.
 *
 */
class PlatoController extends Controller
{
    /**
     * Lists all Plato entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GicsdrArmatucanastaBundle:Plato')->findAll();

        return $this->render('GicsdrArmatucanastaBundle:Plato:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Plato entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Plato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Plato:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Plato entity.
     *
     */
    public function newAction()
    {
        $entity = new Plato();
        $form   = $this->createForm(new PlatoType($this->getCocina()), $entity);

        return $this->render('GicsdrArmatucanastaBundle:Plato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Plato entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Plato();
        $form = $this->createForm(new PlatoType($this->getCocina()), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plato_show', array('id' => $entity->getId())));
        }

        return $this->render('GicsdrArmatucanastaBundle:Plato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Plato entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Plato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plato entity.');
        }

        $editForm = $this->createForm(new PlatoType($this->getCocina()), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Plato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Plato entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Plato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PlatoType($this->getCocina()), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plato_edit', array('id' => $id)));
        }

        return $this->render('GicsdrArmatucanastaBundle:Plato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Plato entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GicsdrArmatucanastaBundle:Plato')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Plato entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plato'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

 	public function getCocina()
    {
        $em = $this->getDoctrine()->getManager();
        $cocinas = $em->getRepository('GicsdrArmatucanastaBundle:Cocina')->findAll();
        $cocinas_arr = array();
        foreach($cocinas as $cocina)
        {
            $cocinas_arr[$cocina->getId()] = $cocina->getDescripcion();
        }
        return $cocinas_arr;
    }
}
