<?php $__env->startSection("content"); ?>
    <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
        <div class="grid grid-cols-1 2xl:grid-cols-5 gap-5 xl:gap-7 mb-12 md:mb-14 xl:mb-16">
            <div class="2xl:-me-14 grid grid-cols-1 gap-3">
                <?php $__currentLoopData = topCategories(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="flex justify-between items-center bg-gray-200 rounded-md px-5 2xl:px-3.5 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3.5 transition hover:bg-gray-100" href="">
                        <div class="flex items-center">
                            <div class="inline-flex flex-shrink-0 w-60px h-60px">
                                <img alt="<?php echo e($c->title); ?>" src="<?php echo e(asset($c->image ? 'uploads/' . $c->image()->first()->img : "images/no_img.jpg")); ?>" class="bg-gray-300 object-cover rounded-full">
                            </div>
                            <h3 class="text-sm md:text-base 2xl:text-sm 3xl:text-base text-heading capitalize ps-2.5 md:ps-4 2xl:ps-3 3xl:ps-4"><?php echo e($c->title); ?></h3>
                        </div>
                        <div class="flex items-center">
                            <div class="text-xs font-medium w-5 h-5 flex flex-shrink-0 justify-center items-center bg-gray-350 rounded 2xl:me-2">20</div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="hidden 2xl:block text-sm text-heading" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="heightFull col-span-full row-span-full 2xl:row-auto 2xl:col-span-4 2xl:ms-14">
                <div class="carouselWrapper relative -mx-0 ">
                    <div class="swiper-container home-slider" data-item="1" dir="ltr">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2">
                                <div class="mx-auto xl:h-full">
                                    <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ1MCIgaGVpZ2h0PSI4MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/></div>
                                            <img alt="Hero Banner Three" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="0">
                                <div class="mx-auto xl:h-full">
                                    <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ1MCIgaGVpZ2h0PSI4MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/></div>
                                            <img alt="Hero Banner One" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1">
                                <div class="mx-auto xl:h-full">
                                    <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ1MCIgaGVpZ2h0PSI4MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/></div>
                                            <img alt="Hero Banner Two" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2">
                                <div class="mx-auto xl:h-full">
                                    <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ1MCIgaGVpZ2h0PSI4MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/></div>
                                            <img alt="Hero Banner Three" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0">
                                <div class="mx-auto xl:h-full">
                                    <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                            <div style="box-sizing:border-box;display:block;max-width:100%"><img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ1MCIgaGVpZ2h0PSI4MDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/></div>
                                            <img alt="Hero Banner One" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 md:gap-14 xl:gap-7 xl:grid-cols-7 2xl:grid-cols-9 mb-12 md:mb-14 xl:mb-7">
            <div class="xl:col-span-5 2xl:col-span-7 border border-gray-300 rounded-lg pt-6 md:pt-7 lg:pt-9 xl:pt-7 2xl:pt-9 px-4 md:px-5 lg:px-7 pb-5 lg:pb-7">
                <div class="flex items-center justify-between -mt-2 lg:-mt-2.5 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                    <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">Top Products</h3>
                    <a class="text-xs lg:text-sm xl:text-base text-heading mt-0.5 lg:mt-1" href="">See All Product</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-5 xl:gap-7 xl:-mt-1.5 2xl:mt-0">
                    <?php $__currentLoopData = $topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group box-border overflow-hidden flex rounded-md cursor-pointer flex-row items-center transition-transform ease-linear bg-gray-200 pe-2 lg:pe-3 2xl:pe-4" role="button" title="Maniac Red Boys">
                            <div class="flex flex-shrink-0 w-32 sm:w-44 md:w-40 lg:w-52 2xl:w-56 3xl:w-64">
                                <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0;">
                                    <div style="box-sizing: border-box; display: block; max-width: 100%;">
                                        <img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjY1IiBoZWlnaHQ9IjI2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="max-width: 100%; display: block; margin: 0; border: none; padding: 0;">
                                    </div>
                                    <img alt="Maniac Red Boys" src="<?php echo e($p->getProductDetail->firstImage()); ?>" decoding="async" class="bg-gray-300 object-cover rounded-s-md rounded-s-md transition duration-200 ease-linear transform group-hover:scale-105" style="position: absolute; inset: 0; box-sizing: border-box; padding: 0; border: none; margin: auto; display: block; width: 0; height: 0; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                </div>
                            </div>
                            <div class="w-full overflow-hidden ps-3.5 sm:ps-5 md:ps-4 xl:ps-5 2xl:ps-6 3xl:ps-10">
                                <h2 class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg md:mb-1.5">
                                    <?php echo e($p->title); ?>

                                </h2>
                                <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">Sporty essentials, these Under Armour athletic shorts are smooth and lightweight in moisture-wicking material.</p>
                                <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-s-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                                    <span class="inline-block"><?php echo e($p->getProductDetail->price); ?></span>
                                    <del class="sm:text-base font-normal text-gray-800">$20.00</del>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="flex flex-col border border-gray-300 rounded-lg pt-6 sm:pt-7 lg:pt-8 xl:pt-7 2xl:pt-9 px-4 md:px-5 lg:px-7 pb-6 lg:pb-7 false col-span-full xl:col-span-2 row-span-full xl:row-auto">
                <div class="flex items-center justify-between -mt-2 lg:-mt-2.5 mb-4 md:mb-5 lg:mb-6 xl:mb-5 2xl:mb-6 3xl:mb-8">
                    <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">Flash Sale</h3>
                </div>
                <div class="heightFull 2xl:pt-1.5 3xl:pt-0">
                    <div class="carouselWrapper relative  ">
                        <div class="swiper-container flash-sale swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" dir="ltr">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-912px, 0px, 0px);">
                                <?php $__currentLoopData = $flashSale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 276px; margin-right: 28px;">
                                        <div class="h-full flex flex-col justify-between">
                                            <div class="mb-5 sm:mb-7 lg:mb-8 2xl:mb-10 3xl:mb-12">
                                                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pe-0 md:pb-1 flex-col items-start bg-white" role="button" title="Polarised Wayfarer Sunglasses">
                                                    <div class="flex mb-3 md:mb-3.5 pb-0 false">
                                                        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                            <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzMwIiBoZWlnaHQ9IjMzMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
                                                            <img alt="Polarised Wayfarer Sunglasses" src="<?php echo e($f->getProductDetail->firstImage()); ?>" decoding="async" class="bg-gray-300 object-cover rounded-s-md rounded-md transition duration-150 ease-linear transform group-hover:scale-105" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                        </div>
                                                    </div>
                                                    <div class="w-full overflow-hidden ps-0 false">
                                                        <h2 class="text-heading font-semibold truncate mb-1 md:mb-1.5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg">Polarised Wayfarer Sunglasses</h2>
                                                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">This item is only exchangeable for the same or a different size, if available, and cannot be returned</p>
                                                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-s-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3"><span class="inline-block"><?php echo e($f->getProductDetail->price); ?></span><del class="sm:text-base font-normal text-gray-800">$35.00</del></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex justify-between items-center mb-2.5 md:mb-3 xl:mb-2.5 2xl:mb-4">
                                                    <div class="text-body text-xs md:text-sm leading-6 md:leading-7">Sold :&nbsp;<span class="text-heading">180</span></div>
                                                    <div class="text-body text-xs md:text-sm leading-6 md:leading-7">Available :&nbsp;<span class="text-heading">140</span></div>
                                                </div>
                                                <div class="relative w-full h-2.5 lg:h-3 2xl:h-4 bg-gray-100 rounded-full overflow-hidden">
                                                    <div class="absolute h-full bg-heading" style="width: 56%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="flex items-center w-full absolute top-2/4 z-10">
                            <button aria-label="prev-button" class="prev-button -top-12 md:-top-14 lg:-top-28 2xl:-top-32 w-7 h-7 md:w-7 md:h-7 lg:w-8 lg:h-8 text-sm md:text-base lg:text-lg text-black flex items-center justify-center rounded-full text-gray-0 bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none start-0 transform shadow-navigation -translate-x-1/2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path></svg>
                            </button>
                            <button aria-label="next-button" class="next-button -top-12 md:-top-14 lg:-top-28 2xl:-top-32 w-7 h-7 lg:w-8 lg:h-8 text-sm md:text-base lg:text-lg text-black flex items-center justify-center rounded-full bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none end-0 transform shadow-navigation translate-x-1/2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-12 md:mb-12 lg:mb-14 pb-0.5 xl:pb-1.5">
            <div class="carouselWrapper relative  ">
                <div class="swiper-container layout2" dir="ltr">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2">
                            <div class="mx-auto">
                                <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%">
                                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjM2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                        </div>
                                        <img alt="Kid&#x27;s Collection" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                    </div>
                                    <div class="absolute top-0 -start-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-40 group-hover:animate-shine"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0">
                            <div class="mx-auto">
                                <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%">
                                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjM2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                        </div>
                                        <img alt="Men&#x27;s Collection" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                    </div>
                                    <div class="absolute top-0 -start-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-40 group-hover:animate-shine"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1">
                            <div class="mx-auto">
                                <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%">
                                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjM2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                        </div>
                                        <img alt="Women&#x27;s Collection" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                    </div>
                                    <div class="absolute top-0 -start-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-40 group-hover:animate-shine"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2">
                            <div class="mx-auto">
                                <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%">
                                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjM2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                        </div>
                                        <img alt="Kid&#x27;s Collection" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                    </div>
                                    <div class="absolute top-0 -start-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-40 group-hover:animate-shine"></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0">
                            <div class="mx-auto">
                                <a class="h-full group flex justify-center relative overflow-hidden" href="">
                                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                        <div style="box-sizing:border-box;display:block;max-width:100%">
                                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjM2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                        </div>
                                        <img alt="Men&#x27;s Collection" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                    </div>
                                    <div class="absolute top-0 -start-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-40 group-hover:animate-shine"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center w-full absolute top-2/4 z-10">
                    <button aria-label="prev-button" class="layout2-prev-button w-7 h-7 md:w-7 md:h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 text-sm md:text-base lg:text-xl 3xl:text-2xl text-black flex items-center justify-center rounded-full text-gray-0 bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none start-0 transform shadow-navigation -translate-x-1/2">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path></svg>
                    </button>
                    <button aria-label="next-button" class="layout2-next-button w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 text-sm md:text-base lg:text-xl 3xl:text-2xl text-black flex items-center justify-center rounded-full bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none end-0 transform shadow-navigation translate-x-1/2">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="mb-10 md:mb-11 lg:mb-12 xl:mb-14 lg:pb-1 xl:pb-0">
            <div class="flex items-center justify-between -mt-2 lg:-mt-2.5 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">Shop By Category</h3>
            </div>
            <div class="carouselWrapper relative  ">
                <div class="swiper-container shopByCategory" dir="ltr">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-wrapper">

                        <?php $__currentLoopData = topCategories(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <a class="group flex justify-center text-center flex-col" href="">
                                    <div class="relative inline-flex mb-3.5 md:mb-4 lg:mb-5 xl:mb-6 mx-auto rounded-full">
                                        <div class="flex">
                                            <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                                <div style="box-sizing:border-box;display:block;max-width:100%">
                                                    <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgwIiBoZWlnaHQ9IjE4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                                </div>
                                                <img alt="Woman" src="<?php echo e(asset($c->image ? 'uploads/' . $c->image()->first()->img : "images/no_img.jpg")); ?>" decoding="async" class="object-cover bg-gray-300 rounded-full" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                                            </div>
                                        </div>
                                        <div class="absolute top left bg-black w-full h-full opacity-0 transition-opacity duration-300 group-hover:opacity-30 rounded-full"></div>
                                        <div class="absolute top left h-full w-full flex items-center justify-center">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-white text-base sm:text-xl lg:text-2xl xl:text-3xl transform opacity-0 scale-0 transition-all duration-300 ease-in-out group-hover:opacity-100 group-hover:scale-100" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z"></path></svg>
                                        </div>
                                    </div>
                                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize">
                                        <?php echo e($c->title); ?></h4>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="flex items-center w-full absolute top-2/4 z-10">
                    <button aria-label="prev-button" class="shopByCategory-prev-button -mt-8 md:-mt-10 w-7 h-7 md:w-7 md:h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 text-sm md:text-base lg:text-xl 3xl:text-2xl text-black flex items-center justify-center rounded-full text-gray-0 bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none start-0 transform shadow-navigation -translate-x-1/2">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path></svg>
                    </button>
                    <button aria-label="next-button" class="shopByCategory-next-button -mt-8 md:-mt-10 w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 text-sm md:text-base lg:text-xl 3xl:text-2xl text-black flex items-center justify-center rounded-full bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none end-0 transform shadow-navigation translate-x-1/2">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-300 mb-12 lg:mb-14 xl:mb-16 pb-0.5 lg:pb-1 xl:pb-0"></div>
        <div class="mb-9 md:mb-9 lg:mb-10 xl:mb-12">
            <div class="flex items-center justify-between -mt-2 lg:-mt-2.5 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">Best Sellers</h3>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-x-3 md:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8">
                <?php $__currentLoopData = $bestSellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pe-0 pb-2 lg:pb-3 flex-col items-start bg-white transition duration-200 ease-in-out transform hover:-translate-y-1 hover:md:-translate-y-1.5 hover:shadow-product" role="button" title="Nike Black">
                        <div class="flex mb-3 md:mb-3.5">
                            <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                <div style="box-sizing:border-box;display:block;max-width:100%">
                                    <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                </div>
                                <img alt="Nike Black" src="<?php echo e($b->getProductDetail->firstImage()); ?>" decoding="async" class="bg-gray-300 object-cover rounded-s-md w-full rounded-md transition duration-200 ease-in group-hover:rounded-b-none" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                            </div>
                        </div>
                        <div class="w-full overflow-hidden ps-0 lg:ps-2.5 xl:ps-4 pe-2.5 xl:pe-4">
                            <h2 class="text-heading font-semibold truncate mb-1 text-sm md:text-base"><?php echo e($b->title); ?></h2>
                            <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-s-2 lg:text-lg lg:mt-2.5">
                                <span class="inline-block"><?php echo e($b->getProductDetail->price); ?></span>
                                <del class="sm:text-base font-normal text-gray-800">$15.00</del>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mx-auto mb-12 lg:mb-14 xl:mb-16 pb-0.5 lg:pb-1 xl:pb-0">
            <a class="h-full group flex justify-center relative overflow-hidden h-28 sm:h-auto" href="">
                <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                    <div style="box-sizing:border-box;display:block;max-width:100%">
                        <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgwMCIgaGVpZ2h0PSIyNzAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/>
                    </div>
                    <img alt="Holiday Offers" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover w-full rounded-md" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                </div>
            </a>
        </div>
        <div class="mb-9 md:mb-9 lg:mb-10 xl:mb-12">
            <div class="flex items-center justify-between -mt-2 lg:-mt-2.5 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">New Arrivals</h3>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-x-3 md:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8">
                <?php $__currentLoopData = $newArrivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pe-0 pb-2 lg:pb-3 flex-col items-start bg-white transition duration-200 ease-in-out transform hover:-translate-y-1 hover:md:-translate-y-1.5 hover:shadow-product" role="button" title="Armani Veni Vidi Vici">
                        <div class="flex mb-3 md:mb-3.5">
                            <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                                <div style="box-sizing:border-box;display:block;max-width:100%">
                                    <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                                </div>
                                <img alt="Armani Veni Vidi Vici" src="<?php echo e($n->getProductDetail->firstImage()); ?>" decoding="async" class="bg-gray-300 object-cover rounded-s-md w-full rounded-md transition duration-200 ease-in group-hover:rounded-b-none" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                            </div>
                        </div>
                        <div class="w-full overflow-hidden ps-0 lg:ps-2.5 xl:ps-4 pe-2.5 xl:pe-4">
                            <h2 class="text-heading font-semibold truncate mb-1 text-sm md:text-base"><?php echo e($n->title); ?></h2>
                            <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">Fendi began life in 1925 as a fur and leather speciality store in Rome.</p>
                            <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-s-2 lg:text-lg lg:mt-2.5">
                                <span class="inline-block"><?php echo e($n->getProductDetail->price); ?></span>
                                <del class="sm:text-base font-normal text-gray-800">$20.00</del>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="border-t border-gray-300 mb-12 lg:mb-14 xl:mb-16 pb-0.5 lg:pb-1 xl:pb-0"></div>
        <div class="mb-11 md:mb-11 lg:mb-12 xl:mb-14 lg:pb-1 xl:pb-0">
            <div class="flex items-center justify-between -mt-2 lg:-mt-2.5 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold">Top Brands</h3>
            </div>
            <div class="carouselWrapper relative  ">
                <div class="swiper-container brandSwiper" dir="ltr">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $topBrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide swiper-slide-next">
                                <a class="group flex justify-center text-center flex-col" href="">
                                    <div class="relative inline-flex mb-3.5 md:mb-4 lg:mb-5 xl:mb-6 mx-auto rounded-md">
                                        <div class="flex">
                                            <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                                                <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjE5OCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
                                                <img alt="Blaze Fashion" src="<?php echo e(asset($t->image ? 'uploads/' . $t->image()->first()->img : "images/no_img.jpg")); ?>" decoding="async" class="object-cover bg-gray-300 rounded-md" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize">
                                        <?php echo e($t->title); ?>

                                    </h4>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="flex items-center w-full absolute top-2/4 z-10">
                    <button aria-label="prev-button" class="brandSwiper-prev-button -mt-8 md:-mt-12 w-7 h-7 md:w-7 md:h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 text-sm md:text-base lg:text-xl 3xl:text-2xl text-black flex items-center justify-center rounded-full text-gray-0 bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none start-0 transform shadow-navigation -translate-x-1/2">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path></svg>
                    </button>
                    <button aria-label="next-button" class="brandSwiper-next-button -mt-8 md:-mt-12 w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 text-sm md:text-base lg:text-xl 3xl:text-2xl text-black flex items-center justify-center rounded-full bg-white absolute transition duration-250 hover:bg-gray-900 hover:text-white focus:outline-none end-0 transform shadow-navigation translate-x-1/2">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="mb-12 md:mb-14 xl:mb-16 pb-0.5 lg:pt-1 xl:pt-0 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7">
            <a class="group text-center flex flex-col justify-between sm:even:flex-col-reverse sm:last:hidden lg:last:flex border sm:border-0 border-gray-300 overflow-hidden rounded-md pb-4 sm:pb-0" href="">
                <div class="flex mx-auto flex-col relative">
                    <div class="flex">
                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="box-sizing:border-box;display:block;max-width:100%">
                                <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjU4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                            </div>
                            <img alt="New Spring Knits" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover sm:rounded-md transition duration-200 ease-in-out group-hover:opacity-90" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                        </div>
                    </div>
                    <div class="overflow-hidden absolute bottom-3.5 lg:bottom-5 end-3.5 lg:end-5 p-2">
                        <span class="inline-block text-[13px] md:text-sm leading-4 cursor-pointer transition ease-in-out duration-300 font-semibold text-center rounded-md bg-white text-heading shadow-navigation py-3 lg:py-4 px-4 lg:px-6 hover:bg-heading hover:text-white transform lg:translate-y-full lg:opacity-0 lg:group-hover:opacity-100 lg:group-hover:translate-y-0">View Collection</span>
                    </div>
                </div>
                <div class="pt-3.5 lg:pt-4 xl:pt-5 3xl:pt-7 px-4 sm:px-0">
                    <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold mb-1.5 lg:mb-2.5 2xl:mb-3 3xl:mb-3.5">New Spring Knits</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7 xl:px-10 3xl:px-20">Endlessly versatile new styles that say yes to spring. The season’s looking bright.</p>
                </div>
            </a>
            <a class="group text-center flex flex-col justify-between sm:even:flex-col-reverse sm:last:hidden lg:last:flex border sm:border-0 border-gray-300 overflow-hidden rounded-md pb-4 sm:pb-0" href="">
                <div class="flex mx-auto flex-col relative">
                    <div class="flex">
                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="box-sizing:border-box;display:block;max-width:100%">
                                <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjU4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                            </div>
                            <img alt="Down To The Core" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover sm:rounded-md transition duration-200 ease-in-out group-hover:opacity-90" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                        </div>
                    </div>
                    <div class="overflow-hidden absolute bottom-3.5 lg:bottom-5 end-3.5 lg:end-5 p-2">
                        <span class="inline-block text-[13px] md:text-sm leading-4 cursor-pointer transition ease-in-out duration-300 font-semibold text-center rounded-md bg-white text-heading shadow-navigation py-3 lg:py-4 px-4 lg:px-6 hover:bg-heading hover:text-white transform lg:translate-y-full lg:opacity-0 lg:group-hover:opacity-100 lg:group-hover:translate-y-0">View Collection</span>
                    </div>
                </div>
                <div class="sm:pb-4 md:pb-5 lg:pb-4 2xl:pb-5 3xl:pb-6 pt-3.5 sm:pt-0.5 lg:pt-1 px-4 sm:px-0">
                    <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold mb-1.5 lg:mb-2.5 2xl:mb-3 3xl:mb-3.5">Down To The Core</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7 xl:px-10 3xl:px-20">Endlessly versatile new styles that say yes to spring. The season’s looking bright.</p>
                </div>
            </a>
            <a class="group text-center flex flex-col justify-between sm:even:flex-col-reverse sm:last:hidden lg:last:flex border sm:border-0 border-gray-300 overflow-hidden rounded-md pb-4 sm:pb-0" href="">
                <div class="flex mx-auto flex-col relative">
                    <div class="flex">
                        <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                            <div style="box-sizing:border-box;display:block;max-width:100%">
                                <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTgwIiBoZWlnaHQ9IjU4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="/>
                            </div>
                            <img alt="New Winter Knits" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" class="bg-gray-300 object-cover sm:rounded-md transition duration-200 ease-in-out group-hover:opacity-90" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                        </div>
                    </div>
                    <div class="overflow-hidden absolute bottom-3.5 lg:bottom-5 end-3.5 lg:end-5 p-2">
                        <span class="inline-block text-[13px] md:text-sm leading-4 cursor-pointer transition ease-in-out duration-300 font-semibold text-center rounded-md bg-white text-heading shadow-navigation py-3 lg:py-4 px-4 lg:px-6 hover:bg-heading hover:text-white transform lg:translate-y-full lg:opacity-0 lg:group-hover:opacity-100 lg:group-hover:translate-y-0">View Collection</span>
                    </div>
                </div>
                <div class="pt-3.5 lg:pt-4 xl:pt-5 3xl:pt-7 px-4 sm:px-0">
                    <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold mb-1.5 lg:mb-2.5 2xl:mb-3 3xl:mb-3.5">New Winter Knits</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7 xl:px-10 3xl:px-20">Endlessly versatile new styles that say yes to spring. The season’s looking bright.</p>
                </div>
            </a>
        </div>
        <div class="mb-12 md:mb-14 xl:mb-16 bg-gray-200 feature-block-wrapper border border-gray-300 rounded-md w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-10 md:gap-12 xl:gap-0 overflow-hidden py-12 xl:py-0 sm:px-4 md:px-8 lg:px-16 xl:px-0">
            <div class="text-center border-gray-300 xl:border-l xl:first:border-s-0 px-4 sm:px-2.5 2xl:px-8 3xl:px-12 xl:py-12">
                <div class="mb-3.5 md:mb-5 xl:mb-3.5 2xl:mb-5 w-14 md:w-auto mx-auto">
                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                        <div style="box-sizing:border-box;display:block;max-width:100%">
                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzgiIGhlaWdodD0iNzgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/>
                        </div>
                        <img alt="Guaranteed Savings" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                    </div>
                </div>
                <div class="-mb-1">
                    <h3 class="text-heading text-base md:text-lg font-semibold mb-1.5 md:mb-2">Guaranteed Savings</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7">If you don’t make your membership fee in savings, we’ll refund the difference</p>
                </div>
            </div>
            <div class="text-center border-gray-300 xl:border-l xl:first:border-s-0 px-4 sm:px-2.5 2xl:px-8 3xl:px-12 xl:py-12">
                <div class="mb-3.5 md:mb-5 xl:mb-3.5 2xl:mb-5 w-14 md:w-auto mx-auto">
                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                        <div style="box-sizing:border-box;display:block;max-width:100%">
                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzgiIGhlaWdodD0iNzgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/>
                        </div>
                        <img alt="Try it risk-free" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                    </div>
                </div>
                <div class="-mb-1">
                    <h3 class="text-heading text-base md:text-lg font-semibold mb-1.5 md:mb-2">Try it risk-free</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7">If you don’t make your membership fee in savings, we’ll refund the difference</p>
                </div>
            </div>
            <div class="text-center border-gray-300 xl:border-l xl:first:border-s-0 px-4 sm:px-2.5 2xl:px-8 3xl:px-12 xl:py-12">
                <div class="mb-3.5 md:mb-5 xl:mb-3.5 2xl:mb-5 w-14 md:w-auto mx-auto">
                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                        <div style="box-sizing:border-box;display:block;max-width:100%">
                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzgiIGhlaWdodD0iNzgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/>
                        </div>
                        <img alt="Super Fast Delivery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                    </div>
                </div>
                <div class="-mb-1">
                    <h3 class="text-heading text-base md:text-lg font-semibold mb-1.5 md:mb-2">Super Fast Delivery</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7">If you don’t make your membership fee in savings, we’ll refund the difference</p>
                </div>
            </div>
            <div class="text-center border-gray-300 xl:border-l xl:first:border-s-0 px-4 sm:px-2.5 2xl:px-8 3xl:px-12 xl:py-12">
                <div class="mb-3.5 md:mb-5 xl:mb-3.5 2xl:mb-5 w-14 md:w-auto mx-auto">
                    <div style="display:inline-block;max-width:100%;overflow:hidden;position:relative;box-sizing:border-box;margin:0">
                        <div style="box-sizing:border-box;display:block;max-width:100%">
                            <img style="max-width:100%;display:block;margin:0;border:none;padding:0" alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzgiIGhlaWdodD0iNzgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+"/>
                        </div>
                        <img alt="1000+ products priced at cost" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%"/>
                    </div>
                </div>
                <div class="-mb-1">
                    <h3 class="text-heading text-base md:text-lg font-semibold mb-1.5 md:mb-2">1000+ products priced at cost</h3>
                    <p class="text-body text-xs md:text-sm leading-6 md:leading-7">If you don’t make your membership fee in savings, we’ll refund the difference</p>
                </div>
            </div>
        </div>
        <div class="bg-linen px-5 sm:px-8 md:px-16 2xl:px-24 flex flex-col xl:flex-row justify-center xl:justify-between items-center rounded-lg bg-gray-200 py-10 md:py-14 lg:py-16">
            <div class="-mt-1.5 lg:-mt-2 xl:-mt-0.5 text-center xl:text-start mb-7 md:mb-8 lg:mb-9 xl:mb-0">
                <h3 class="text-heading text-lg md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10 font-bold mb-2 md:mb-2.5 lg:mb-3 xl:mb-3.5">Get Expert Tips In Your Inbox</h3>
                <p class="text-body text-xs md:text-sm leading-6 md:leading-7">Subscribe to our newsletter and stay updated.</p>
            </div>
            <form class="flex-shrink-0 w-full sm:w-96 md:w-[545px]" novalidate="">
                <div class="flex flex-col sm:flex-row items-start justify-end">
                    <div class="w-full">
                        <input type="email" id="subscription_email" name="subscription_email" placeholder="Write your email here" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-xs lg:text-sm font-body rounded-md placeholder-body min-h-12 transition duration-200 ease-in-out bg-white border-gray-300 focus:outline-none focus:border-heading h-11 md:h-12 px-4 lg:px-7 h-12 lg:h-14 text-center sm:text-start bg-white" autoComplete="off" spellcheck="false" aria-invalid="false"/>
                    </div>
                    <button data-variant="flat" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none bg-heading text-white px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-gray-600 hover:shadow-cart mt-3 sm:mt-0 w-full sm:w-auto sm:ms-2 md:h-full flex-shrink-0">
                        <span class="lg:py-0.5">Subscribe</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="Toastify"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("front/layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MONSTER\Desktop\LRVLPROJECT\ecommerce\resources\views/front/index.blade.php ENDPATH**/ ?>