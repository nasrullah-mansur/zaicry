<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'Admin\DashboardController@index')->name('admin');

/*Slider route*/
Route::get('/slider', 'Admin\SliderController@index')->name('admin.slider');
Route::get('/slider/create', 'Admin\SliderController@create')->name('slider.create');
Route::post('/slider/store', 'Admin\SliderController@store')->name('slider.store');
Route::get('/slider/{id}/edit', 'Admin\SliderController@edit')->name('slider.edit');
Route::put('/slider/{id}/update', 'Admin\SliderController@update')->name('slider.update');
Route::get('/slider/{id}/delete', 'Admin\SliderController@destroy')->name('slider.destroy');

/*Service route*/
Route::get('/service', 'Admin\ServiceController@index')->name('admin.service');
Route::get('/service/create', 'Admin\ServiceController@create')->name('service.create');
Route::post('/service/store', 'Admin\ServiceController@store')->name('service.store');
Route::get('/service/{id}/edit', 'Admin\ServiceController@edit')->name('service.edit');
Route::put('/service/{id}/update', 'Admin\ServiceController@update')->name('service.update');
Route::get('/service/{id}/delete', 'Admin\ServiceController@destroy')->name('service.destroy');

// service_box route
Route::get('/servicebox', 'Admin\ServiceBoxController@index')->name('admin.servicebox');
Route::get('/servicebox/create', 'Admin\ServiceBoxController@create')->name('servicebox.create');
Route::post('/servicebox/store', 'Admin\ServiceBoxController@store')->name('servicebox.store');
Route::get('/servicebox/{id}/edit', 'Admin\ServiceBoxController@edit')->name('servicebox.edit');
Route::put('/servicebox/{id}/update', 'Admin\ServiceBoxController@update')->name('servicebox.update');
Route::get('/servicebox/{id}/delete', 'Admin\ServiceBoxController@destroy')->name('servicebox.destroy');

// choose us route
Route::get('/chooseus', 'Admin\ChooseusController@index')->name('admin.chooseus');
Route::get('/chooseus/create', 'Admin\ChooseusController@create')->name('chooseus.create');
Route::post('/chooseus/store', 'Admin\ChooseusController@store')->name('chooseus.store');
Route::get('/chooseus/{id}/edit', 'Admin\ChooseusController@edit')->name('chooseus.edit');
Route::put('/chooseus/{id}/update', 'Admin\ChooseusController@update')->name('chooseus.update');
Route::get('/chooseus/{id}/delete', 'Admin\ChooseusController@destroy')->name('chooseus.destroy');

// workprocess route
Route::get('/workprocess', 'Admin\WorkProcessController@index')->name('admin.workprocess');
Route::get('/workprocess/create', 'Admin\WorkProcessController@create')->name('workprocess.create');
Route::post('/workprocess/store', 'Admin\WorkProcessController@store')->name('workprocess.store');
Route::get('/workprocess/{id}/edit', 'Admin\WorkProcessController@edit')->name('workprocess.edit');
Route::put('/workprocess/{id}/update', 'Admin\WorkProcessController@update')->name('workprocess.update');
Route::get('/workprocess/{id}/delete', 'Admin\WorkProcessController@destroy')->name('workprocess.destroy');

// workprocess project route
Route::get('/workproject', 'Admin\WorkprocessprojectController@index')->name('admin.workprocessproject');
Route::get('/workproject/create', 'Admin\WorkprocessprojectController@create')->name('workprocessproject.create');
Route::post('/workproject/store', 'Admin\WorkprocessprojectController@store')->name('workprocessproject.store');
Route::get('/workproject/{id}/edit', 'Admin\WorkprocessprojectController@edit')->name('workprocessproject.edit');
Route::put('/workproject/{id}/update', 'Admin\WorkprocessprojectController@update')->name('workprocessproject.update');
Route::get('/workproject/{id}/delete', 'Admin\WorkprocessprojectController@destroy')->name('workprocessproject.destroy');

// latestproject route
Route::get('/latestproject/create', 'Admin\LatestprojectController@create')->name('latestproject.create');
Route::post('/latestproject/store', 'Admin\LatestprojectController@store')->name('latestproject.store');
Route::put('/latestproject/{id}/update', 'Admin\LatestprojectController@update')->name('latestproject.update');


//latest project slider
Route::get('/latestprojectslider', 'Admin\LatestprojectsliderController@index')->name('admin.latestprojectslider');
Route::get('/latestprojectslider/create', 'Admin\LatestprojectsliderController@create')->name('latestprojectslider.create');
Route::post('/latestprojectslider/store', 'Admin\LatestprojectsliderController@store')->name('latestprojectslider.store');
Route::get('/latestprojectslider/{id}/edit', 'Admin\LatestprojectsliderController@edit')->name('latestprojectslider.edit');
Route::put('/latestprojectslider/{id}/update', 'Admin\LatestprojectsliderController@update')->name('latestprojectslider.update');
Route::get('/latestprojectslider/{id}/delete', 'Admin\LatestprojectsliderController@destroy')->name('latestprojectslider.destroy');

//pricing area
Route::get('/pricingarea', 'Admin\PricingAreaController@index')->name('admin.pricingarea');
Route::get('/pricingarea/create', 'Admin\PricingAreaController@create')->name('pricingarea.create');
Route::post('/pricingarea/store', 'Admin\PricingAreaController@store')->name('pricingarea.store');
Route::get('/pricingarea/{id}/edit', 'Admin\PricingAreaController@edit')->name('pricingarea.edit');
Route::put('/pricingarea/{id}/update', 'Admin\PricingAreaController@update')->name('pricingarea.update');
Route::get('/pricingarea/{id}/delete', 'Admin\PricingAreaController@destroy')->name('pricingarea.destroy');

//pricing Table
Route::get('/pricingtable', 'Admin\PricingTableController@index')->name('admin.pricingtable');
Route::get('/pricingtable/create', 'Admin\PricingTableController@create')->name('pricingtable.create');
Route::post('/pricingtable/store', 'Admin\PricingTableController@store')->name('pricingtable.store');
Route::get('/pricingtable/{id}/edit', 'Admin\PricingTableController@edit')->name('pricingtable.edit');
Route::put('/pricingtable/{id}/update', 'Admin\PricingTableController@update')->name('pricingtable.update');
Route::get('/pricingtable/{id}/delete', 'Admin\PricingTableController@destroy')->name('pricingtable.destroy');

//Testimonial
Route::get('/testimonial', 'Admin\TestimonialController@index')->name('admin.testimonial');
Route::get('/testimonial/create', 'Admin\TestimonialController@create')->name('testimonial.create');
Route::post('/testimonial/store', 'Admin\TestimonialController@store')->name('testimonial.store');
Route::get('/testimonial/{id}/edit', 'Admin\TestimonialController@edit')->name('testimonial.edit');
Route::put('/testimonial/{id}/update', 'Admin\TestimonialController@update')->name('testimonial.update');
Route::get('/testimonial/{id}/delete', 'Admin\TestimonialController@destroy')->name('testimonial.destroy');

//Testimonial
Route::get('/testimonialslider', 'Admin\TestimonialSliderController@index')->name('admin.testimonialslider');
Route::get('/testimonialslider/create', 'Admin\TestimonialSliderController@create')->name('testimonialslider.create');
Route::post('/testimonialslider/store', 'Admin\TestimonialSliderController@store')->name('testimonialslider.store');
Route::get('/testimonialslider/{id}/edit', 'Admin\TestimonialSliderController@edit')->name('testimonialslider.edit');
Route::put('/testimonialslider/{id}/update', 'Admin\TestimonialSliderController@update')->name('testimonialslider.update');
Route::get('/testimonialslider/{id}/delete', 'Admin\TestimonialSliderController@destroy')->name('testimonialslider.destroy');

//category
Route::get('/categories', 'Admin\CategoriesController@index')->name('categories.index');
Route::get('/categories/create', 'Admin\CategoriesController@create')->name('categories.create');
Route::post('/categories/store', 'Admin\CategoriesController@store')->name('categories.store');
Route::get('/categories/{id}/edit', 'Admin\CategoriesController@edit')->name('categories.edit');
Route::put('/categories/{id}/update', 'Admin\CategoriesController@update')->name('categories.update');
Route::get('/categories/{id}/delete', 'Admin\CategoriesController@destroy')->name('categories.destroy');

//tag
Route::get('/tags', 'Admin\TagsController@index')->name('tags.index');
Route::get('/tags/create', 'Admin\TagsController@create')->name('tags.create');
Route::post('/tags/store', 'Admin\TagsController@store')->name('tags.store');
Route::get('/tags/{id}/edit', 'Admin\TagsController@edit')->name('tags.edit');
Route::put('/tags/{id}/update', 'Admin\TagsController@update')->name('tags.update');
Route::get('/tags/{id}/delete', 'Admin\TagsController@destroy')->name('tags.destroy');

//posts
Route::get('/posts', 'Admin\PostsController@index')->name('posts.index');
Route::get('/posts/create', 'Admin\PostsController@create')->name('posts.create');
Route::post('/posts/store', 'Admin\PostsController@store')->name('posts.store');
Route::get('/posts/{id}/edit', 'Admin\PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}/update', 'Admin\PostsController@update')->name('posts.update');
Route::get('/posts/{id}/delete', 'Admin\PostsController@destroy')->name('posts.destroy');

//jobs
Route::get('/jobs', 'Admin\JobsController@index')->name('jobs.index');
Route::get('/jobs/create', 'Admin\JobsController@create')->name('jobs.create');
Route::post('/jobs/store', 'Admin\JobsController@store')->name('jobs.store');
Route::get('/jobs/{id}/edit', 'Admin\JobsController@edit')->name('jobs.edit');
Route::put('/jobs/{id}/update', 'Admin\JobsController@update')->name('jobs.update');
Route::get('/jobs/{id}/delete', 'Admin\JobsController@destroy')->name('jobs.destroy');

//users
Route::get('/user', 'Admin\UserController@index')->name('user.index');
Route::get('/user/create', 'Admin\UserController@create')->name('user.create');
Route::post('/user/store', 'Admin\UserController@store')->name('user.store');
Route::get('/user/{id}/edit', 'Admin\UserController@edit')->name('user.edit')->middleware('password.confirm');
Route::put('/user/{id}/update', 'Admin\UserController@update')->name('user.update');
Route::get('/user/{id}/delete', 'Admin\UserController@destroy')->name('user.destroy');

//Admin
Route::get('/adminuser', 'Admin\AdminUserController@index')->name('adminuser.index');
Route::get('/adminuser/create', 'Admin\AdminUserController@create')->name('adminuser.create');
Route::post('/adminuser/store', 'Admin\AdminUserController@store')->name('adminuser.store');
Route::get('/adminuser/{id}/edit', 'Admin\AdminUserController@edit')->name('adminuser.edit')->middleware('password.confirm');
Route::put('/adminuser/{id}/update', 'Admin\AdminUserController@update')->name('adminuser.update');
Route::get('/adminuser/{id}/delete', 'Admin\AdminUserController@destroy')->name('adminuser.destroy');

//page
Route::get('/page', 'Admin\PageController@index')->name('pages.index');
Route::get('/page/create', 'Admin\PageController@create')->name('pages.create');
Route::post('/page/store', 'Admin\PageController@store')->name('pages.store');
Route::get('/page/{id}/edit', 'Admin\PageController@edit')->name('pages.edit');
Route::put('/page/{id}/update', 'Admin\PageController@update')->name('pages.update');
Route::get('/page/{id}/delete', 'Admin\PageController@destroy')->name('pages.destroy');

//subscribers
Route::get('/subscriber', 'Admin\SubscriberController@index')->name('subscribers.index');
Route::get('/subscriber/create', 'Admin\SubscriberController@create')->name('subscribers.create');
Route::post('/subscriber/store', 'Admin\SubscriberController@store')->name('subscribers.store');
Route::get('/subscriber/{id}/edit', 'Admin\SubscriberController@edit')->name('subscribers.edit');
Route::put('/subscriber/{id}/update', 'Admin\SubscriberController@update')->name('subscribers.update');
Route::get('/subscriber/{id}/delete', 'Admin\SubscriberController@destroy')->name('subscribers.destroy');
Route::get('/subscriber/sendmail', 'Admin\SubscriberController@sendMail')->name('subscribers.mail');
Route::post('/subscriber/sendmail', 'Admin\SubscriberController@sendMailToAll')->name('subscribers.mailsent');

//site identity
Route::get('/site', 'Admin\SiteIdentityController@index')->name('sites.index');
Route::get('/site/create', 'Admin\SiteIdentityController@create')->name('sites.create');
Route::post('/site/store', 'Admin\SiteIdentityController@store')->name('sites.store');
Route::get('/site/{id}/edit', 'Admin\SiteIdentityController@edit')->name('sites.edit');
Route::put('/site/{id}/update', 'Admin\SiteIdentityController@update')->name('sites.update');
Route::get('/site/{id}/delete', 'Admin\SiteIdentityController@destroy')->name('sites.destroy');

//show hide setting
Route::get('/showhide', 'Admin\ShowhideController@index')->name('showhides.index');
Route::post('/showhideslider', 'Admin\ShowhideController@slider')->name('showhides.slider');
Route::post('/showhideservice', 'Admin\ShowhideController@service')->name('showhides.service');
Route::post('/showhidechooseus', 'Admin\ShowhideController@chooseus')->name('showhides.chooseus');
Route::post('/showhidechooseus', 'Admin\ShowhideController@chooseus')->name('showhides.chooseus');
Route::post('/showhideprogressarea', 'Admin\ShowhideController@progressarea')->name('showhides.progressarea');
Route::post('/showhidecasestudyarea', 'Admin\ShowhideController@casestudy')->name('showhides.casestudy');
Route::post('/showhidepricingarea', 'Admin\ShowhideController@pricingarea')->name('showhides.pricingarea');
Route::post('/showhideblog', 'Admin\ShowhideController@blog')->name('showhides.blog');
Route::post('/showhidetestimonial', 'Admin\ShowhideController@testimonial')->name('showhides.testimonial');
Route::post('/showhidesubscriber', 'Admin\ShowhideController@subscriber')->name('showhides.subscriber');



//pages inside
//service page

Route::get('/service-page/create', 'Admin\ServicepageController@create')->name('servicepage.create');
Route::post('/service-page/store', 'Admin\ServicepageController@store')->name('servicepage.store');
Route::put('/service-page/{id}/update', 'Admin\ServicepageController@update')->name('servicepage.update');

Route::get('/terms-page/create', 'Admin\TermsPageController@create')->name('termspage.create');
Route::post('/terms-page/store', 'Admin\TermsPageController@store')->name('termspage.store');
Route::put('/terms-page/{id}/update', 'Admin\TermsPageController@update')->name('termspage.update');

Route::get('/faq/create', 'Admin\FaqController@create')->name('faq.create');
Route::post('/faq/store', 'Admin\FaqController@store')->name('faq.store');
Route::put('/faq/{id}/update', 'Admin\FaqController@update')->name('faq.update');

//Faqtab
Route::get('/faqtab', 'Admin\FaqTabsController@index')->name('faqtab.index');
Route::get('/faqtab/create', 'Admin\FaqTabsController@create')->name('faqtab.create');
Route::post('/faqtab/store', 'Admin\FaqTabsController@store')->name('faqtab.store');
Route::get('/faqtab/{id}/edit', 'Admin\FaqTabsController@edit')->name('faqtab.edit');
Route::put('/faqtab/{id}/update', 'Admin\FaqTabsController@update')->name('faqtab.update');
Route::get('/faqtab/{id}/delete', 'Admin\FaqTabsController@destroy')->name('faqtab.destroy');

//Team
Route::get('/team/create', 'Admin\TeamController@create')->name('team.create');
Route::post('/team/store', 'Admin\TeamController@store')->name('team.store');
Route::put('/team/{id}/update', 'Admin\TeamController@update')->name('team.update');

//Team member
Route::get('/teammember', 'Admin\TeamMemberController@index')->name('teammember.index');
Route::get('/teammember/create', 'Admin\TeamMemberController@create')->name('teammember.create');
Route::post('/teammember/store', 'Admin\TeamMemberController@store')->name('teammember.store');
Route::get('/teammember/{id}/edit', 'Admin\TeamMemberController@edit')->name('teammember.edit');
Route::put('/teammember/{id}/update', 'Admin\TeamMemberController@update')->name('teammember.update');
Route::get('/teammember/{id}/delete', 'Admin\TeamMemberController@destroy')->name('teammember.destroy');

//comingsoon
Route::get('/comingsoon/create', 'Admin\CommingSoonController@create')->name('commingsoon.create');
Route::post('/comingsoon/store', 'Admin\CommingSoonController@store')->name('commingsoon.store');
Route::put('/comingsoon/{id}/update', 'Admin\CommingSoonController@update')->name('commingsoon.update');

//about us
Route::get('/about-us/create', 'Admin\AboutUsPageController@create')->name('aboutuspage.create');
Route::post('/about-us/store', 'Admin\AboutUsPageController@store')->name('aboutuspage.store');
Route::put('/about-us/{id}/update', 'Admin\AboutUsPageController@update')->name('aboutuspage.update');

//about us
Route::get('/contact/create', 'Admin\ContactController@create')->name('contact.create');
Route::post('/contact/store', 'Admin\ContactController@store')->name('contact.store');
Route::put('/contact/{id}/update', 'Admin\ContactController@update')->name('contact.update');

//jobs
Route::get('/jobspage/create', 'Admin\JobsPageController@create')->name('jobspage.create');
Route::post('/jobspage/store', 'Admin\JobsPageController@store')->name('jobspage.store');
Route::put('/jobspage/{id}/update', 'Admin\JobsPageController@update')->name('jobspage.update');

//job facilities
Route::get('/job-facility', 'Admin\JobFacilitiesController@index')->name('jobsfacility.index');
Route::get('/job-facility/create', 'Admin\JobFacilitiesController@create')->name('jobsfacility.create');
Route::post('/job-facility/store', 'Admin\JobFacilitiesController@store')->name('jobsfacility.store');
Route::get('/job-facility/{id}/edit', 'Admin\JobFacilitiesController@edit')->name('jobsfacility.edit');
Route::put('/job-facility/{id}/update', 'Admin\JobFacilitiesController@update')->name('jobsfacility.update');
Route::get('/job-facility/{id}/delete', 'Admin\JobFacilitiesController@destroy')->name('jobsfacility.destroy');

//portfolio category
Route::get('/portfolio-categories', 'Admin\PortfolioCategoryController@index')->name('portfoliocategories.index');
Route::get('/portfolio-categories/create', 'Admin\PortfolioCategoryController@create')->name('portfoliocategories.create');
Route::post('/portfolio-categories/store', 'Admin\PortfolioCategoryController@store')->name('portfoliocategories.store');
Route::get('/portfolio-categories/{id}/edit', 'Admin\PortfolioCategoryController@edit')->name('portfoliocategories.edit');
Route::put('/portfolio-categories/{id}/update', 'Admin\PortfolioCategoryController@update')->name('portfoliocategories.update');
Route::get('/portfolio-categories/{id}/delete', 'Admin\PortfolioCategoryController@destroy')->name('portfoliocategories.destroy');

//portfolio
Route::get('/portfolio', 'Admin\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/create', 'Admin\PortfolioController@create')->name('portfolio.create');
Route::post('/portfolio/store', 'Admin\PortfolioController@store')->name('portfolio.store');
Route::get('/portfolio/{id}/edit', 'Admin\PortfolioController@edit')->name('portfolio.edit');
Route::put('/portfolio/{id}/update', 'Admin\PortfolioController@update')->name('portfolio.update');
Route::get('/portfolio/{id}/delete', 'Admin\PortfolioController@destroy')->name('portfolio.destroy');

// menu
Route::get('/menu', 'Admin\MenuController@index')->name('menu.index');

//pages inside
//single blog page setting
Route::get('/singlepagesetting/create', 'Admin\SinglePageSettingController@create')->name('singlepagesettings.create');
Route::post('/singlepagesetting/store', 'Admin\SinglePageSettingController@store')->name('singlepagesettings.store');
Route::put('/singlepagesetting/{id}/update', 'Admin\SinglePageSettingController@update')->name('singlepagesettings.update');

//blog page setting
Route::get('/blogpagesetting/create', 'Admin\BlogPageSettingController@create')->name('blogpagesetting.create');
Route::post('/blogpagesetting/store', 'Admin\BlogPageSettingController@store')->name('blogpagesetting.store');
Route::put('/blogpagesetting/{id}/update', 'Admin\BlogPageSettingController@update')->name('blogpagesetting.update');

//basic setting
Route::get('/basicsetting/create', 'Admin\BasicSettingController@create')->name('basicsettings.create');
Route::post('/basicsetting/store', 'Admin\BasicSettingController@store')->name('basicsettings.store');
Route::put('/basicsetting/{id}/update', 'Admin\BasicSettingController@update')->name('basicsettings.update');

//seo setting
Route::get('/seo/create', 'Admin\SeoController@create')->name('seos.create');
Route::post('/seo/store', 'Admin\SeoController@store')->name('seos.store');
Route::put('/seo/{id}/update', 'Admin\SeoController@update')->name('seos.update');

//seo setting
Route::get('/css/create', 'Admin\CustomCssController@create')->name('css.create');
Route::post('/css/store', 'Admin\CustomCssController@store')->name('css.store');
Route::put('/css/{id}/update', 'Admin\CustomCssController@update')->name('css.update');

//preloader setting
Route::get('/preloader/create', 'Admin\PreloaderController@create')->name('preloader.create');
Route::post('/preloader/store', 'Admin\PreloaderController@store')->name('preloader.store');
Route::put('/preloader/{id}/update', 'Admin\PreloaderController@update')->name('preloader.update');

Route::get('/preloadericon/create', 'Admin\PreloaderController@preloaderSetup')->name('preloadericon.create');
Route::put('/preloadericon/{id}/update', 'Admin\PreloaderController@preloaderEdit')->name('preloadericon.update');

//home page
Route::post('/selecthomepage', 'Admin\HomePageVersionController@index')->name('selecthomepage');
