<?
include get_template_directory() . '/inc/api.php';
require get_template_directory() . '/inc/constants.php';
$twohun = 199;
?>
<paper-dialog id="purchase_outside" modal class="paper-dialog" style="overflow:auto;">
    <h3 class="mdl-dialog__title">Purchase Access to 'How to go Outside'</h3>
    <hr>
   <? if ($visitor['adcredit'] > $twohun){?> <p>You are about to purchase access to this page for <span style="font-weight: bold;">ϟ200</span>, After purchasing you will have ϟ<span class="c_after__outside"></span> credits.</p>
    <form action="" method="post" class="purchase-form">
	   <div class="buttons">
	<paper-button onclick="location.href='<?php echo $swxUrl?>'" dialog-dismiss>Cancel</paper-button>
	<paper-button class="purchase green" dialog-confirm raised autofocus dialog-dismiss>Purchase</paper-button>
</div>
    <input type="hidden" name="oauth_token" value="<?=$accessToken;?>">
    <input type="hidden" name="primary_group_id" value="21">
    <input type="hidden" name="scope" value="post admincp">
    <input type="hidden" name="_xfToken" value="<?=$visitor['csrf_token_page']?>" />
    <input type="hidden" name="_xfConfirm" value="1" />
    <input type="hidden" name="_xfResponseType" value="json">
  </form><? } else {?>
  <h3 class="mdl-dialog__sub_title">You currently only have ϟ<?=$credits?> & this page costs ϟ200.00 to access, Come back when you have enough funds...</h3>
  <div class="buttons">
	<paper-button onclick="location.href='<?php echo $swxUrl?>'" dialog-dismiss>Go Back</paper-button>
	<paper-button onclick="location.href='<?php echo $forumUrl?>/threads/780'">Learn how to obtain ϟ</paper-button>
</div>
       <? }?>
</paper-dialog>