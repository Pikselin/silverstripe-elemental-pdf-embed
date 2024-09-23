<?php

namespace Pikselin\Elemental\PDFEmbed;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\TextField;

/**
 * Class \Pikselin\Elemental\ElementalPDFEmbed
 *
 * @property string $ElementAnchors
 */
class ElementalPDFEmbed extends BaseElement
{
    private static $db = [
        'EmbedCode' => 'Text'
    ];
    private static $has_one = [];
    private static $singular_name = 'PDF embed block';
    private static $icon = 'font-icon-chart-line';
    private static $inline_editable = true;
    private static $table_name = 'ElementalPDFEmbedBlock';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

            $EmbedCode = TextField::create('EmbedCode', 'Embed code');
            $Explain = LiteralField::create('explain', '<p>This block will embed a PDF presentation on the page. Enter the HTML/JS Snippet in here. <a href="https://help.issuu.com/hc/en-us/articles/5772743714587-Embed-Your-Publication">See here for how to embed for issuu.com based presentations</a></p>');

            $fields->addFieldToTab('Root.Main', $Explain);
            $fields->addFieldToTab('Root.Main', $EmbedCode);

        return $fields;
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'PDF embed block');
    }

    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = 'PDF embed block';

        return $blockSchema;
    }
}
