//<?php

class gw2integration_hook_profile_hook extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'profile' => 
  array (
    0 => 
    array (
      'selector' => '#elProfileInfoColumn > div.ipsAreaBackground_light.ipsPad',
      'type' => 'add_inside_start',
      'content' => '{{$gw2Data = new \IPS\gw2integration\GW2Data($member, true);}}{{if $gw2Data->account != null}}
{{\IPS\Output::i()->cssFiles = array_merge( \IPS\Output::i()->cssFiles, \IPS\Theme::i()->css( \'style.css\', \'gw2integration\', \'front\' ) );}}
  <div class="ipsWidget ipsWidget_vertical cProfileSidebarBlock ipsBox ipsSpacer_bottom">
      <h2 class="ipsWidget_title ipsType_reset">GW2 Integration</h2>
      <div class="ipsWidget_inner ipsPad">
        {template="accountOverview" group="global" app="gw2integration" location="front" params="$gw2Data->account, $gw2Data->pvpStats, $gw2Data->seasonStats, false"}
      </div>
  </div>
{{endif}}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */






























}