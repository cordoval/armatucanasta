<?php

namespace Gicsdr\ArmatucanastaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gicsdr\ArmatucanastaBundle\Entity\Ingrediente;
use Gicsdr\ArmatucanastaBundle\Form\IngredienteType;

/**
 * Ingrediente controller.
 *
 */
class IngredienteController extends Controller
{
    /**
     * Lists all Ingrediente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GicsdrArmatucanastaBundle:Viewingrediente')->findAll();

        return $this->render('GicsdrArmatucanastaBundle:Ingrediente:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Ingrediente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Ingrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ingrediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Ingrediente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Ingrediente entity.
     *
     */
    public function newAction()
    {
        $entity = new Ingrediente();
        $form   = $this->createForm(new IngredienteType($this->getUnidades(), $this->getInsumos()), $entity);

        return $this->render('GicsdrArmatucanastaBundle:Ingrediente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Ingrediente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Ingrediente();
        $form = $this->createForm(new IngredienteType($this->getUnidades(), $this->getInsumos()), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ingrediente_show', array('id' => $entity->getId())));
        }

        return $this->render('GicsdrArmatucanastaBundle:Ingrediente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ingrediente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Ingrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ingrediente entity.');
        }

        $editForm = $this->createForm(new IngredienteType($this->getUnidades(), $this->getInsumos()), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GicsdrArmatucanastaBundle:Ingrediente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Ingrediente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GicsdrArmatucanastaBundle:Ingrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ingrediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new IngredienteType($this->getUnidades(), $this->getInsumos()), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ingrediente_edit', array('id' => $id)));
        }

        return $this->render('GicsdrArmatucanastaBundle:Ingrediente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ingrediente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GicsdrArmatucanastaBundle:Ingrediente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ingrediente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ingrediente'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    public function getUnidades()
    {
        $em = $this->getDoctrine()->getManager();
        $unidades = $em->getRepository('GicsdrArmatucanastaBundle:Unidad')->findAll();
        $unidades_arr = array();
        foreach($unidades as $unidad)
        {
            $unidades_arr[$unidad->getId()] = $unidad->getDescbreve();
        }
        return $unidades_arr;
    }
    public function getInsumos()
    {
        $em = $this->getDoctrine()->getManager();
        $insumos = $em->getRepository('GicsdrArmatucanastaBundle:Insumo')->findAll();
        $insumos_arr = array();
        foreach($insumos as $insumo)
        {
            $insumos_arr[$insumo->getId()] = $insumo->getDescripcion();
        }
        return $insumos_arr;
    }
}
