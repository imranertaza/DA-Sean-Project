<main id="main" class="work-details">
    <div class="container-fluid">
        <div class="swiper project-slide">
            <div class="swiper-wrapper">
                <?php
                $allImg = work_all_image($works->work_id);
                foreach ($allImg as $val) {
                    ?>
                    <div class="swiper-slide">
                        <div class="item">
                            <a class="glightbox"
                               href="<?php echo image_view_url('uploads/work_img', $works->slug, $val->image, 'no_img.jpg', 'img-fluid w-100'); ?>"><?php echo image_view('uploads/work_img', $works->slug, $val->image, 'no_img.jpg', 'img-fluid w-100'); ?></a>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="slide-arrow">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="swiper-pagination"></div>

        </div>
        <div class="controls">
            <a class="scrollto" title="" href="#project-details">
                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <path d="M1 1h18M1 7h18M1 13h18M1 19h11"></path>
                    </g>
                </svg>
            </a>
            <div class="modal-btn" data-bs-toggle="modal" data-bs-target="#projectItem">
                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path d="M0 0h4v4H0zM0 8h4v4H0zM0 16h4v4H0zM8 0h4v4H8zM8 8h4v4H8zM8 16h4v4H8zM16 0h4v4h-4zM16 8h4v4h-4zM16 16h4v4h-4z"></path>
                    </g>
                </svg>
            </div>
            <div class="fullscreen-btn">
                <svg class="icon-open" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <path d="M1 1h5M1 1v5M2 2l4.5962 4.5962M19 1v5M19 1h-5M18 2l-4.5962 4.5962M19 19h-5M19 19v-5M18 18l-4.5962-4.5962M1 19v-5M1 19h5M2 18l4.5962-4.5962"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div class="modal" id="projectItem" tabindex="-1" aria-labelledby="projectItem" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <p class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </p>
                    <div class="project-list-items">
                        <?php foreach ($allImg as $val) { ?>
                            <div class="project-item">
                                <?php echo image_view('uploads/work_img', $works->slug, 'thum_' . $val->image, 'thum_no_img.jpg', 'img-fluid'); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <section id="project-details" class="project-details">
                <div class="container">
                    <h1><?php echo $works->project_name; ?></h1>
                    <p><?php echo $works->news_description; ?></p>
                </div>
            </section>

            <section id="project-tag" class="project-tag">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <h3 style="margin: 0px 0px 0px 10px !important;">Project Name</h3>
                        </div>
                        <div class="col-md-8">
                            <p style="margin: 0px 10px 0px 0px !important;"><?php echo $works->project_name; ?></p>
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
        </div>
        <div class="col-md-3"></div>
    </div>
</main>