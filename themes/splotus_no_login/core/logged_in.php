<dialog id="loggedin" class="mdl-dialog">
     <button  class="i mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon close" data-dismiss="dialog"><i class="material-icons">clear</i></button>
    <h3 class="mdl-dialog__title">You are already logged in, <? echo $user;?>!</h3>
    <h3 class="mdl-dialog__sub_title wow fadeIn">Perhaps you meant to <a href="<? echo wp_logout_url( network_home_url() ); ?>" style="font-weight: bold;">logout <i class="fa fa-sign-out" aria-hidden="true"></i>
</a></h3>
</dialog>
<button class="logged-in" style="display:none;"></button>