<?php

$rules = [
	"general.is_site_clear_or_rubble" => "required",
	"foundation.foundation_type" => "required",
	"foundation.is_continuous_lintel_beam" => "required",

	"images.general.building_sketch_plan_image" => "image",
	"images.foundation.image" => "image",
	"images.roof.roof_shape_image" => "image",
	"images.roof.roof_structure_image" => "image",
	"images.roof.roofing_material_image" => "image",
	"images.roof.covering_tied_image" => "image",
	"images.roof.structure_connection_image" => "image",
	"images.roof.roof_condition_image" => "image",
	"images.roof.gable_wall_damage_image" => "image",
	"images.roof.parapets_image" => "image",
	"images.roof.parapets_damage_image" => "image",
	"images.roof.pediments_damage_image" => "image",
	'load_bearing' => [
		// Select field and Textbox fields
		"piece_assessment.storey.%s.load_bearing.corner_failure" => "required",
		"piece_assessment.storey.%s.load_bearing.corner_separation" => "required",
		"piece_assessment.storey.%s.load_bearing.cracking_evidence" => "required",
		"piece_assessment.storey.%s.load_bearing.diagonal_cracking" => "required",
		"piece_assessment.storey.%s.load_bearing.masonry_deteriorated" => "required",
		"piece_assessment.storey.%s.load_bearing.out_plane_failure" => "required",
		"piece_assessment.storey.%s.load_bearing.wall_collapsed" => "required",
		"piece_assessment.storey.%s.load_bearing.wall_delamination" => "required",
		"piece_assessment.storey.%s.load_bearing.wall_height" => "required|numeric",
		"piece_assessment.storey.%s.load_bearing.wall_panel_length" => "required|numeric",
		"piece_assessment.storey.%s.load_bearing.wall_panel_principal_direction" => "required",
		"piece_assessment.storey.%s.load_bearing.wall_thickness" => "required|numeric",
		"piece_assessment.storey.%s.load_bearing.width_opening_multiple_storey" => "required",
		"piece_assessment.storey.%s.load_bearing.width_opening_single_storey" => "required",

		// Group checkbox Fields
		"multiple_choice.piece_assessment-storey-%s-load_bearing-masonry_wall_type" => "required",
		"multiple_choice.piece_assessment-storey-%s-load_bearing-seismic_enhancement" => "required",
		"multiple_choice.piece_assessment-storey-%s-load_bearing-retrofitted" => "required",

		//Image upload fields
		"images.piece_assessment.storey.%s.load_bearing.stone_type_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.wall_panel_principal_direction_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.wall_thickness_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.wall_panel_length_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.wall_height_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.width_opening_single_storey_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.width_opening_multiple_storey_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.wall_collapsed_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.corner_separation_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.cracking_evidence_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.extent_of_cracking_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.diagonal_cracking_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.extent_of_in_plane_wall_damage_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.out_plane_failure_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.wall_delamination_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.masonry_deteriorated_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.seismic_enhancement_image" => "image",
		"images.piece_assessment.storey.%s.load_bearing.retrofitted_image" => "image",
	],
	'rc_frame' => [
		// Select field and Textbox fields
		"piece_assessment.storey.%s.rc_frame.beam_column_joint_damage" => "required",
		"piece_assessment.storey.%s.rc_frame.breadth_long_direction" => "numeric",
		"piece_assessment.storey.%s.rc_frame.breadth_short_direction" => "numeric",
		"piece_assessment.storey.%s.rc_frame.construction_sequence" => "required",
		"piece_assessment.storey.%s.rc_frame.cracking_evidence" => "required",
		"piece_assessment.storey.%s.rc_frame.depth_long_direction" => "numeric",
		"piece_assessment.storey.%s.rc_frame.depth_short_direction" => "numeric",
		"piece_assessment.storey.%s.rc_frame.diagonal_cracking" => "required",
		"piece_assessment.storey.%s.rc_frame.effective_height_unrestrained" => "required",
		"piece_assessment.storey.%s.rc_frame.exterior_infill_wall_thickness" => "numeric",
		"piece_assessment.storey.%s.rc_frame.external_masonry_offset" => "required",
		"piece_assessment.storey.%s.rc_frame.infill_panel_out_of_plane" => "required",
		"piece_assessment.storey.%s.rc_frame.infill_wall_material" => "required",
		"piece_assessment.storey.%s.rc_frame.interior_infill_wall_thickness" => "numeric",
		"piece_assessment.storey.%s.rc_frame.long_direction" => "numeric",
		"piece_assessment.storey.%s.rc_frame.masonry_offset_wall_height" => "numeric",
		"piece_assessment.storey.%s.rc_frame.masonry_offset_wall_thickness" => "numeric",
		"piece_assessment.storey.%s.rc_frame.perimeter_cracking" => "required",
		"piece_assessment.storey.%s.rc_frame.rc_beam_damage" => "required",
		"piece_assessment.storey.%s.rc_frame.rc_column_damage" => "required",
		"piece_assessment.storey.%s.rc_frame.short_column_damage_list" => "required",
		"piece_assessment.storey.%s.rc_frame.short_direction" => "numeric",
		"piece_assessment.storey.%s.rc_frame.two_or_more_bay" => "required",
		"piece_assessment.storey.%s.rc_frame.two_or_more_line_concrete_frame" => "required",
		"piece_assessment.storey.%s.rc_frame.wall_panel_length" => "numeric",
		"piece_assessment.storey.%s.rc_frame.walls_storey_height" => "numeric",

		// Group checkbox Fields
		"multiple_choice.piece_assessment-storey-0-rc_frame-general_condition" => "required",
		"multiple_choice.piece_assessment-storey-0-rc_frame-retrofitted_evidence" => "required",

		//Image upload fields
		"images.piece_assessment.storey.%s.rc_frame.infill_wall_material_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.construction_sequence_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.masonry_offset_wall_height_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.column_size_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.beam_span_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.effective_height_unrestrained_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.short_column_damage_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.beam_column_joint_damage_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.rc_column_damage_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.rc_beam_damage_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.cracking_evidence_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.extent_of_cracking_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.diagonal_cracking_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.extent_of_diagonal_cracking_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.perimeter_cracking_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.general_condition_image" => "image",
		"images.piece_assessment.storey.%s.rc_frame.retrofitted_evidence_image" => "image",
	],
	'steel_frame' => [
		// Select field and Textbox fields
		"piece_assessment.storey.%s.steel_frame.cracking_evidence" => "required",
		"piece_assessment.storey.%s.steel_frame.diagonal_cracking" => "required",
		"piece_assessment.storey.%s.steel_frame.infill_wall_partially_masonry" => "required",
		"piece_assessment.storey.%s.steel_frame.masonry_built" => "required",
		"piece_assessment.storey.%s.steel_frame.masonry_deteriorated" => "required",
		"piece_assessment.storey.%s.steel_frame.out_plane_failure" => "required",
		"piece_assessment.storey.%s.steel_frame.overall_quality" => "required",
		"piece_assessment.storey.%s.steel_frame.stone_type" => "required",
		"piece_assessment.storey.%s.steel_frame.wall_collapsed" => "required",
		"piece_assessment.storey.%s.steel_frame.wall_height" => "numeric",
		"piece_assessment.storey.%s.steel_frame.wall_panel_length" => "numeric",
		"piece_assessment.storey.%s.steel_frame.wall_thickness" => "numeric",

		// Group checkbox Fields
		"multiple_choice.piece_assessment-storey-%s-steel_frame-wall_type" => "required",
		"multiple_choice.piece_assessment-storey-%s-steel_frame-steel_structure_damage" => "required",
		"multiple_choice.piece_assessment-storey-%s-steel_frame-steel_structure_condition" => "required",
		"multiple_choice.piece_assessment-storey-%s-steel_frame-seismic_enhancement" => "required",
		"multiple_choice.piece_assessment-storey-%s-steel_frame-retrofitted_evidence" => "required",

		//Image upload fields
		"images.piece_assessment.storey.%s.steel_frame.stone_type_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.wall_thickness_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.wall_panel_length_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.wall_height_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.combined_width_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.steel_structure_damage_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.steel_structure_condition_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.wall_collapsed_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.cracking_evidence_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.extent_of_cracking_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.diagonal_cracking_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.extent_of_inplane_wall_damage_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.corner_separation_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.out_plane_failure_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.wall_delamination_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.masonry_deteriorated_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.seismic_enhancement_image" => "image",
		"images.piece_assessment.storey.%s.steel_frame.retrofitted_evidence_image" => "image",
	],
	'timber_frame' => [
		// Select field and Textbox fields
		"piece_assessment.storey.%s.timber_frame.combined_width" => "required",
		"piece_assessment.storey.%s.timber_frame.corner_separation" => "required",
		"piece_assessment.storey.%s.timber_frame.cracking_evidence" => "required",
		"piece_assessment.storey.%s.timber_frame.diagonal_cracking" => "required",
		"piece_assessment.storey.%s.timber_frame.infill_wall_made_canes_bamboos" => "required",
		"piece_assessment.storey.%s.timber_frame.infill_wall_partially_masonry" => "required",
		"piece_assessment.storey.%s.timber_frame.masonry_built" => "required",
		"piece_assessment.storey.%s.timber_frame.masonry_deteriorated" => "required",
		"piece_assessment.storey.%s.timber_frame.out_plane_failure" => "required",
		"piece_assessment.storey.%s.timber_frame.overall_quality" => "required",
		"piece_assessment.storey.%s.timber_frame.frame_reusable" => "required",
		"piece_assessment.storey.%s.timber_frame.type_of_structure" => "required",
		"piece_assessment.storey.%s.timber_frame.wall_collapsed" => "required",
		"piece_assessment.storey.%s.timber_frame.wall_delamination" => "required",
		"piece_assessment.storey.%s.timber_frame.wall_height" => "numeric",
		"piece_assessment.storey.%s.timber_frame.wall_panel_length" => "numeric",
		"piece_assessment.storey.%s.timber_frame.wall_thickness" => "numeric",

		// Group checkbox Fields
		"multiple_choice.piece_assessment-storey-%s-timber_frame-condition_structure" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-cross_section" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-hardwood_types" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-retrofitted_evidence" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-seismic_enhancement" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-softwood_types" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-structure_damage" => "required",
		"multiple_choice.piece_assessment-storey-%s-timber_frame-timber_species" => "required",

		//Image upload fields
		"images.piece_assessment.storey.%s.timber_frame.type_of_structure_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.cross_section_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.connection_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.masonry_built_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.masonry_wall_type_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.wall_thickness_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.wall_panel_length_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.combined_width_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.structure_damage_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.condition_structure_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.wall_collapsed_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.cracking_evidence_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.extent_of_cracking_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.diagonal_cracking_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.extent_of_diagonal_cracking_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.corner_separation_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.out_plane_failure_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.wall_delamination_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.masonry_deteriorated_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.seismic_enhancement_image" => "image",
		"images.piece_assessment.storey.%s.timber_frame.retrofitted_evidence_image" => "image",
	],
];
$array_string = print_r($rules, true);
echo "<pre>";
$strings = "'custom' => ";
$strings .= var_export(print_r_reverse(trim($array_string)), true);
$newstring = str_replace("array (", "[", $strings);
$newstring2 = str_replace(")", "]", $newstring);
echo $newstring2;

echo "</pre>";
function print_r_reverse(&$output) {
	$expecting = 0; // 0=nothing in particular, 1=array open paren '(', 2=array element or close paren ')'
	$lines = explode("\n", $output);

	$result = null;
	$topArray = null;
	$arrayStack = [];
	$matches = null;
	while (!empty($lines) && $result === null) {
		$line = array_shift($lines);
		$trim = trim($line);
		if ($trim == 'Array') {
			if ($expecting == 0) {
				$topArray = [];
				$expecting = 1;
			} else {
				trigger_error("Unknown array.");
			}
		} else if ($expecting == 1 && $trim == '(') {
			$expecting = 2;
		} else if ($expecting == 2 && preg_match('/^\[(.+?)\] \=\> (.+)$/', $trim, $matches)) // array element
		{
			list($fullMatch, $key, $element) = $matches;

			if (strpos($key, '.') !== false) {
				$new_key = str_replace("%s", "*", $key);
				assignArrayByPath($topArray, $new_key, $element);
				if (trim($element) == 'Array') {
					$newTopArray = &$topArray;
					$arrayStack[] = &$topArray;
					$topArray = &$newTopArray;
					$expecting = 1;
				}
			} else if
			(trim($element) == 'Array') {
				$new_key = str_replace("%s", "*", $key);
				$topArray[$new_key] = [];
				$newTopArray = &$topArray[$new_key];
				$arrayStack[] = &$topArray;
				$topArray = &$newTopArray;
				$expecting = 1;
			} else {
				assignArrayByPath($topArray, $key, $element);
			}
		} else if ($expecting == 2 && $trim == ')') // end current array
		{
			if (empty($arrayStack)) {
				$result = $topArray;
			} else // pop into parent array
			{
				// safe array pop
				$keys = array_keys($arrayStack);

				$lastKey = array_pop($keys);
				$temp = &$arrayStack[$lastKey];
				unset($arrayStack[$lastKey]);
				$topArray = &$temp;
			}
		}
		// Added this to allow for multi line strings.
		else if (!empty($trim) && $expecting == 2) {
			// Expecting close parent or element, but got just a string
			$topArray[$key] .= "\n" . $line;
		} else if (!empty($trim)) {
			$result = $line;
		}
	}

	$output = implode("\n", $lines);
	return $result;
}

/**
 * @param string $output : The output of a multiple print_r calls, separated by newlines
 * @return mixed[] : parseable elements of $output
 */
function print_r_reverse_multiple($output) {
	$result = [];
	while (($reverse = print_r_reverse($output)) !== NULL) {
		$result[] = $reverse;
	}
	return $result;
}

function assignArrayByPath(&$arr, $path, $value, $separator = '.') {
	$keys = explode($separator, $path);

	foreach ($keys as $key) {
		$arr = &$arr[$key];
	}
	if (strpos($value, "|") !== false) {
		$lists = explode("|", $value);
		foreach ($lists as $valuenew) {
			$arr[$valuenew] = "message";
		}
	} else {
		$arr[$value] = "message";
	}
}
