<?php

$classes = array_keys( array(
	'OOUI\\ButtonElement' => __DIR__ . '/lib/oojs-ui/php/elements/ButtonElement.php',
	'OOUI\\ButtonGroupWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/ButtonGroupWidget.php',
	'OOUI\\ButtonInputWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/ButtonInputWidget.php',
	'OOUI\\ButtonWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/ButtonWidget.php',
	'OOUI\\CheckboxInputWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/CheckboxInputWidget.php',
	'OOUI\\Element' => __DIR__ . '/lib/oojs-ui/php/Element.php',
	'OOUI\\ElementMixin' => __DIR__ . '/lib/oojs-ui/php/ElementMixin.php',
	'OOUI\\Exception' => __DIR__ . '/lib/oojs-ui/php/Exception.php',
	'OOUI\\FieldLayout' => __DIR__ . '/lib/oojs-ui/php/layouts/FieldLayout.php',
	'OOUI\\FieldsetLayout' => __DIR__ . '/lib/oojs-ui/php/layouts/FieldsetLayout.php',
	'OOUI\\FlaggedElement' => __DIR__ . '/lib/oojs-ui/php/elements/FlaggedElement.php',
	'OOUI\\FormLayout' => __DIR__ . '/lib/oojs-ui/php/layouts/FormLayout.php',
	'OOUI\\GridLayout' => __DIR__ . '/lib/oojs-ui/php/layouts/GridLayout.php',
	'OOUI\\GroupElement' => __DIR__ . '/lib/oojs-ui/php/elements/GroupElement.php',
	'OOUI\\HtmlSnippet' => __DIR__ . '/lib/oojs-ui/php/HtmlSnippet.php',
	'OOUI\\IconElement' => __DIR__ . '/lib/oojs-ui/php/elements/IconElement.php',
	'OOUI\\IconWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/IconWidget.php',
	'OOUI\\IndicatorElement' => __DIR__ . '/lib/oojs-ui/php/elements/IndicatorElement.php',
	'OOUI\\IndicatorWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/IndicatorWidget.php',
	'OOUI\\InputWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/InputWidget.php',
	'OOUI\\LabelElement' => __DIR__ . '/lib/oojs-ui/php/elements/LabelElement.php',
	'OOUI\\LabelWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/LabelWidget.php',
	'OOUI\\Layout' => __DIR__ . '/lib/oojs-ui/php/Layout.php',
	'OOUI\\MediaWikiTheme' => __DIR__ . '/lib/oojs-ui/php/themes/MediaWikiTheme.php',
	'OOUI\\PanelLayout' => __DIR__ . '/lib/oojs-ui/php/layouts/PanelLayout.php',
	'OOUI\\RadioInputWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/RadioInputWidget.php',
	'OOUI\\Tag' => __DIR__ . '/lib/oojs-ui/php/Tag.php',
	'OOUI\\TextInputWidget' => __DIR__ . '/lib/oojs-ui/php/widgets/TextInputWidget.php',
	'OOUI\\Theme' => __DIR__ . '/lib/oojs-ui/php/Theme.php',
	'OOUI\\TitledElement' => __DIR__ . '/lib/oojs-ui/php/elements/TitledElement.php',
	'OOUI\\Widget' => __DIR__ . '/lib/oojs-ui/php/Widget.php',
) );

$output = array();

foreach( $classes as $class ) {
	list( $throwaway, $className ) = explode( '\\', $class, 2 );
	$suffix = 'Widget';

	if ( substr( $className, 0 - strlen( $suffix ) ) === $suffix && $className !== $suffix ) {
		$type = strtolower( substr( $className, 0, 0 - strlen( $suffix ) ) );
		$output[$type] = $class;
	}
}

print var_export( $output, true ) . "\n";
