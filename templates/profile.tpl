
<div class="row" style="margin-top:50px;">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{$name}</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{$avatar}" class="img-circle img-responsive"> </div>


                    <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>{$name_title}:</td>
                                    <td>{$name}</td>
                                </tr>
                                <tr>
                                    <td>{$login_title}:</td>
                                    <td>{$login}</td>
                                </tr>
                                <tr>
                                    <td>{$email_title}</td>
                                    <td><a href="mailto:info@support.com">{$email}</a></td>
                                </tr>                     
                            </tbody>
                        </table>

                        <a href="functions.php?logout=1" class="btn btn-primary center-block">{$logout_title}</a>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="functions.php?lang=ru" class="btn btn-primary {$ru_active}">рус</a>
                <a href="functions.php?lang=en" class="btn btn-primary {$en_active}">en</a>
            </div>
        </div>
    </div>
</div>
