<?php

use App\WorkingProcessProject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AboutUsPageSeeder::class);
        $this->call(AdminMenuSeeder::class);
        $this->call(AdminMenuItemSeeder::class);
        $this->call(BasicSettingSeeder::class);
        $this->call(BlogPageSettingSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ChooseUsSeeder::class);
        $this->call(ChooseUsExperienceSeeder::class);
        $this->call(CommingSoonSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(FaqTabSeeder::class);
        $this->call(JobsSeeder::class);
        $this->call(JobsFacilitesSeeder::class);
        $this->call(JobsPageSeeder::class);
        $this->call(LatestProjectSeeder::class);
        $this->call(LatestProjectSliderSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(PortfolioCategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(PostTagSeeder::class);
        $this->call(PreloaderSeeder::class);
        $this->call(PricingAreaSeeder::class);
        $this->call(PricingSeeder::class);
        $this->call(PricingButtonSeeder::class);
        $this->call(SeoSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceChildSeeder::class);
        $this->call(ServicePageSeeder::class);
        $this->call(SiteSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(TeamMembersSeeder::class);
        $this->call(TermsSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TestimonialSliderSeeder::class);
        $this->call(WorkingProcessProjectSeeder::class);
        $this->call(WorkingProcessSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(HomePageversionSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(BlogSingleSeeder::class);
    }
}
