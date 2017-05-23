        <?php
        $nom = isset($input_nom)?$input_nom:"";
        $prenom = isset($input_prenom)?$input_prenom:"";
        $email = isset($input_email)?$input_email:"";
        $message = isset($input_message)?$input_message:"";
        ?>
        <h1 class="text-center titre-contact">Contact</h1>
        <p class="text-center titre-contact">Si vous avez une question ou une suggestion, n'hésitez pas à nous contacter.</p>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 form-contact">
                <form action="<?php echo base_url('MainTulipe/contact_form'); ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" name="nom" value="<?php echo $nom ?>" id="contact-nom" placeholder="Votre nom" class="form-control input-contact" style="width: 100%;">
                            <input type="text" name="email" value="<?php echo $email ?>" id="contact-email" placeholder="Votre email" class="form-control input-contact" style="width: 100%;">
                        </div>
                        <div class="col-md-8">
                            <textarea name="message" value="<?php echo $message ?>" rows="5" type="text" class="form-control" placeholder="Votre message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-large btn-block btn-danger btnContact" value="Envoyer">
                        </div>
                    </div>
                </form>
                <?php echo validation_errors("<p class='alert alert-dissmissable alert-danger'>"); ?>
            </div>
        </div>

<!--<form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-sm-2 control-label" for="inputName">Nom</label>

        <div class="col-sm-10">
            <input type="Name" class="form-control" id="inputName" placeholder="Votre Nom" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="inputEmail">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Votre Email" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="inputMessage">Message</label>
        <div class="col-sm-10">
            <textarea type="Message" class="form-control" id="inputMessage" placeholder="Votre Message" rows="5"></textarea>
        </div>
    </div>
</form>
<div class="g-recaptcha" data-sitekey="6Lc-ciIUAAAAABvG3Am8WEGWiB6RtcadyBXiYOPv"></div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Envoyer</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
    </div>
</div>-->
