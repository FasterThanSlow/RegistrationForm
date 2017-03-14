<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">{$sign_in_title}</div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" method="post" action="functions.php" class="form-horizontal" role="form">
                <div id="signupalert" style="display:{if isset($error_display)}{$error_display}{else}none{/if}" class="alert alert-danger">
                    <p>{$error_title}</p>
                    <span></span>
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" required type="text" class="form-control" name="login" value="" placeholder="{$username_title}">                                        
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" required type="password" class="form-control" name="password" placeholder="{$password_title}">
                </div>


                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button id="btn-login" href="#" name="authorization" value="authorization" class="btn btn-success">{$sign_in_title}</button>                                      
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            {$sign_up_description}
                            <a href="index.php?view=reg">
                                {$sign_up_title}
                            </a>
                        </div>
                    </div>
                </div>    
            </form>     
        </div>

        <div class="panel-footer">
            <a href="functions.php?lang=ru" class="btn btn-primary {$ru_active}">рус</a>
            <a href="functions.php?lang=en" class="btn btn-primary {$en_active}">en</a>
        </div>
    </div>  
</div>

