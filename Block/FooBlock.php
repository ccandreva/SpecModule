<?php
/**
 * Copyright Zikula Foundation 2015 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\SpecModule\Block;

use Symfony\Component\HttpFoundation\Request;
use Zikula\SpecModule\Block\Form\Type\FooBlockType;
use Zikula\Core\AbstractBlockHandler;

/**
 * Example block to demonstrate usage of AbstractBlockHandler and Symfony Form.
 *
 * Class FooBlock
 * @package Zikula\SpecModule\Block
 */
class FooBlock extends AbstractBlockHandler
{
    // getType() intentionally unimplemented for demonstration purposes.

    public function display(array $properties)
    {
        $content = nl2br(implode("\n", $properties));

        return $this->renderView('ZikulaSpecModule:Block:foo.html.twig', ['content' => $content]);
    }

    public function modify(Request $request, array $properties)
    {
        $defaults = [
            'sentence' => 'The cheesecake exploded.',
            'status' => true,
            'more' => '',
        ];
        $vars = array_merge($defaults, $properties);
        $form = $this->createForm('Zikula\SpecModule\Block\Form\Type\FooBlockType', $vars);
        $form->handleRequest($request);
        if ($form->isValid()) {

            return $form->getData();
        }

        return $this->renderView('ZikulaBlocksModule:Block:default_modify.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}