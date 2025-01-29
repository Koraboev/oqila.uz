<?php
    $first_name   = !empty($_POST['first-name']) ? $_POST['first-name'] : '';
    $phone_number = !empty($_POST['phone-number']) ? $_POST['phone-number'] : '';
    $company_name = !empty($_POST['company-name']) ? $_POST['company-name'] : '';

    $show_x_button = empty($first_name.$phone_number.$company_name) ? true : false;
?>

<form method='post' action='<?=get_qoute_url()?>' id='email-order-form'>

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><?php the_quote_field('form-title') ?></h5>

                <?php if($show_x_button): ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <?php endif ?>
                
            </div>
        
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="form-group">
                                <label for="first-name"><?php the_quote_field('form-first-name') ?>: * </label>
                                <input type="text" class="form-control" id="first-name" name="first-name" value="<?=$first_name?>" required>
                            </div>

                            <div class="form-group">
                                <label for="phone-number"><?php the_quote_field('form-phone-number') ?>: * </label>
                                <input type="tel" class="form-control" id="phone-number" name="phone-number" value="<?=$phone_number?>" required>
                            </div>


                            <div class="form-group">
                                <label for="company-name"><?php the_quote_field('form-company-name') ?>:</label>
                                <input type="text" class="form-control" id="company-name" name="company-name" value="<?=$company_name?>">
                            </div>

                            <input type="hidden" name="service-url" value="<?=get_current_url()?>">
                            <input type="hidden" name="seo-keywords" value="">
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="modal-footer">
                <button id="conversion_counter" class="btn btn-primary cs-btn-one btn-gradient-color g-recaptcha" data-sitekey="<?=SITE_KEY?>" data-callback="onSubmit">
                    <?php the_quote_field('form-submit-btn-label') ?>
                </button>
            </div>

        </div>
    </div>

</form>
