<?php

namespace Fazland\NotifireBundle\Tests\VariableRenderer;

use Fazland\NotifireBundle\VariableRenderer\MailgunRenderer;

/**
 * @author Massimiliano Braglia <massimiliano.braglia@fazland.com>
 */
class MailgunRendererTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $renderer = new MailgunRenderer();

        $variableName = 'variable_name';
        $expected = '%recipient.variable_name%';

        $this->assertEquals($expected, $renderer->render($variableName));
    }
}
