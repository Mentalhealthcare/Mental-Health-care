<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */
namespace Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Tag;

use Google\Web_Stories_Dependencies\AmpProject\Extension;
use Google\Web_Stories_Dependencies\AmpProject\Format;
use Google\Web_Stories_Dependencies\AmpProject\Html\Attribute;
use Google\Web_Stories_Dependencies\AmpProject\Layout;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\AttributeList;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Identifiable;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\SpecRule;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Tag;
/**
 * Tag class AmpVideo.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read string $tagName
 * @property-read array<array> $attrs
 * @property-read array<string> $attrLists
 * @property-read string $specUrl
 * @property-read array<array<string>> $ampLayout
 * @property-read array<string> $disallowedAncestor
 * @property-read array<string> $htmlFormat
 * @property-read array<string> $requiresExtension
 */
final class AmpVideo extends Tag implements Identifiable
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'AMP-VIDEO';
    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [SpecRule::TAG_NAME => Extension::VIDEO, SpecRule::ATTRS => [Attribute::POSTER => []], SpecRule::ATTR_LISTS => [AttributeList\ExtendedAmpGlobal::ID, AttributeList\AmpVideoCommon::ID, AttributeList\LightboxableElements::ID], SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/', SpecRule::AMP_LAYOUT => [SpecRule::SUPPORTED_LAYOUTS => [Layout::FILL, Layout::FIXED, Layout::FIXED_HEIGHT, Layout::FLEX_ITEM, Layout::INTRINSIC, Layout::NODISPLAY, Layout::RESPONSIVE]], SpecRule::DISALLOWED_ANCESTOR => ['AMP-STORY'], SpecRule::HTML_FORMAT => [Format::AMP, Format::AMP4ADS], SpecRule::REQUIRES_EXTENSION => [Extension::VIDEO]];
}
