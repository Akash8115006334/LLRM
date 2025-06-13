<?php

use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminAchievementsControllers;
use App\Http\Controllers\Admin\AdminAddedFacilitiesControllers;
use App\Http\Controllers\Admin\AdminAddmissionSectionController;
use App\Http\Controllers\Admin\AdminBlogsControllers;
use App\Http\Controllers\Admin\AdminClubsControllers;
use App\Http\Controllers\Admin\AdminCollegeMapControllers;
use App\Http\Controllers\Admin\AdminCommunityControllers;
use App\Http\Controllers\Admin\AdminCounterControllers;
use App\Http\Controllers\Admin\AdminCoursesControllers;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEventsControllers;
use App\Http\Controllers\Admin\AdminFacultiesController;
use App\Http\Controllers\Admin\AdminFeeStructureController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminInfrastructureDetailsControllers;
use App\Http\Controllers\Admin\AdminLaboratoriesControllers;
use App\Http\Controllers\Admin\AdminLandCompletionControllers;
use App\Http\Controllers\Admin\AdminLiberaryControllers;
use App\Http\Controllers\Admin\AdminMajorCellsControllers;
use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\AdminNCTEControllers;
use App\Http\Controllers\Admin\AdminOtherFacilitiesControllers;
use App\Http\Controllers\Admin\AdminPolicyController;
use App\Http\Controllers\Admin\AdminPublicationControllers;
use App\Http\Controllers\Admin\AdminReviewsController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminTermsController;
use App\Http\Controllers\Admin\AdminUndertakingController;
use App\Http\Controllers\Admin\AdminWorkshopControllers;
use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\Website\AboutPageController;
use App\Http\Controllers\Website\AddedFacilitiesControllers;
use App\Http\Controllers\Website\BlogsControllers;
use App\Http\Controllers\Website\ClubsPageController;
use App\Http\Controllers\Website\CollegeMapControllers;
use App\Http\Controllers\Website\CommunityWorkPageController;
use App\Http\Controllers\Website\PolicyPageController;
use App\Http\Controllers\Website\TermsPageController;
use App\Http\Controllers\Website\ContactPageController;
use App\Http\Controllers\Website\CoursesControllers;
use App\Http\Controllers\Website\EnquiryController;
use App\Http\Controllers\Website\EventControllers;
use App\Http\Controllers\Website\FacultiePageController;
use App\Http\Controllers\Website\GalleryPageController;
use App\Http\Controllers\Website\HomePageController;
use App\Http\Controllers\Website\InfrastructreDetailsControllers;
use App\Http\Controllers\Website\LaboratoriesDetailsControllers;
use App\Http\Controllers\Website\LandCompletionControllers;
use App\Http\Controllers\Website\LiberaryDetailsControllers;
use App\Http\Controllers\Website\MajorCellsPageController;
use App\Http\Controllers\Website\ManagementPageController;
use App\Http\Controllers\Website\NCTEPageController;
use App\Http\Controllers\Website\OtherFacilitiesControllers;
use App\Http\Controllers\Website\PublicationPageController;
use App\Http\Controllers\Website\UndertakingPageController;
use App\Http\Controllers\Website\WorkshopsSeminarsControllers;
use App\Models\CollegeMap;
use App\Models\InfrastructureDetails;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Whoops\Inspector\InspectorFactory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Without Login OR Guest Login
 */
Route::get('/admin/login',  [AdminController::class, 'index'])->name('adminLogin');
Route::post('/admin/login',  [AdminController::class, 'validateLogin'])->name('adminLogin');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('adminDashboard');
    Route::get('/admin/setting', [AdminSettingController::class, 'index'])->name('adminSetting');
    Route::post('/admin/setting', [AdminController::class, 'updateInfo'])->name('updateUserInfo');
    Route::post('/admin/update-password', [AdminController::class, 'updatePassword'])->name('updatePassword');
    Route::post('/admin/update-media', [AdminSettingController::class, 'updateMedia'])->name('updateMedia');
    Route::post('/admin/website-setting', [AdminSettingController::class, 'websiteSetting'])->name('websiteSetting');
    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('homePage');
    Route::post('/admin/home', [AdminHomeController::class, 'addHomeSliderImage'])->name('addHomeSliderImage');
    Route::post('/admin/home-about', [AdminHomeController::class, 'addHomeAboutUs'])->name('addHomeAboutUs');
    Route::delete('/admin/home/delete/{id}', [AdminHomeController::class, 'deleteHomeSliderImage'])->name('deleteHomeSliderImage');
    Route::get('/admin/about', [AdminAboutController::class, 'index'])->name('websiteAbout');
    Route::post('/admin/why-choose-us', [AdminAboutController::class, 'addWhyChooseUs'])->name('addWhyChooseUs');
    Route::post('/admin/our-mission', [AdminAboutController::class, 'addOurMission'])->name('addOurMission');
    Route::post('/admin/our-vission', [AdminAboutController::class, 'addOurVission'])->name('addOurVission');
    Route::post('/admin/our-campus', [AdminAboutController::class, 'addOurCampus'])->name('addOurCampus');
    Route::get('/admin/managment-member', [AdminManagementController::class, 'index'])->name('websiteManagmentMember');
    Route::post('/admin/managment-section', [AdminManagementController::class, 'addManagementSection'])->name('addManagementSection');
    Route::post('/admin/managment-member', [AdminManagementController::class, 'addManagementMember'])->name('addManagementMember');
    Route::get('/admin/managment-member/edit/{id}', [AdminManagementController::class, 'editManagmentMember'])->name('editManagmentMember');
    Route::post('/admin/managment-member/edit/{id}', [AdminManagementController::class, 'editManagmentMember'])->name('editManagmentMember');
    Route::delete('/admin/managment-member/delete/{id}', [AdminManagementController::class, 'deleteManagmentMember'])->name('deleteManagmentMember');
    Route::get('/admin/faculties', [AdminFacultiesController::class, 'index'])->name('websiteFaculties');
    Route::post('/admin/faculties-section', [AdminFacultiesController::class, 'addFacultiesSection'])->name('addFacultiesSection');
    Route::post('/admin/faculties-member', [AdminFacultiesController::class, 'addFaculties'])->name('addFaculties');
    Route::get('/admin/faculties-member/edit/{id}', [AdminFacultiesController::class, 'editFaculties'])->name('editFaculties');
    Route::post('/admin/faculties-member/edit/{id}', [AdminFacultiesController::class, 'editFaculties'])->name('editFaculties');
    Route::delete('/admin/faculties-member/delete/{id}', [AdminFacultiesController::class, 'deleteFaculties'])->name('deleteFaculties');
    Route::get('/admin/counters', [AdminCounterControllers::class, 'index'])->name('websiteCounters');
    Route::post('/admin/counters', [AdminCounterControllers::class, 'addCounters'])->name('addCounters');

    Route::get('/admin/publication', [AdminPublicationControllers::class, 'index'])->name('websitePublication');
    Route::post('/admin/publication-section', [AdminPublicationControllers::class, 'updatePublicatonSection'])->name('updatePublicatonSection');
    Route::post('/admin/publication', [AdminPublicationControllers::class, 'addPublication'])->name('addPublication');
    Route::get('/admin/publication/edit/{id}', [AdminPublicationControllers::class, 'editPublication'])->name('editPublication');
    Route::post('/admin/publication/edit/{id}', [AdminPublicationControllers::class, 'editPublication'])->name('editPublication');
    Route::delete('/admin/publication/delete/{id}', [AdminPublicationControllers::class, 'deletePublication'])->name('deletePublication');

    Route::get('/admin/Undertaking', [AdminUndertakingController::class, 'index'])->name('websiteUndertaking');
    Route::post('/admin/Undertaking-section', [AdminUndertakingController::class, 'updateUndertakingSection'])->name('updateUndertakingSection');
    Route::post('/admin/Undertaking', [AdminUndertakingController::class, 'addUndertaking'])->name('addUndertaking');
    Route::get('/admin/Undertaking/edit/{id}', [AdminUndertakingController::class, 'editUndertaking'])->name('editUndertaking');
    Route::post('/admin/Undertaking/edit/{id}', [AdminUndertakingController::class, 'editUndertaking'])->name('editUndertaking');
    Route::delete('/admin/Undertaking/delete/{id}', [AdminUndertakingController::class, 'deleteUndertaking'])->name('deleteUndertaking');

    Route::get('/admin/fee-structure', [AdminFeeStructureController::class, 'index'])->name('websitefeeStructure');
    Route::post('/admin/fee-structure-section', [AdminFeeStructureController::class, 'updatefeeStructureSection'])->name('updatefeeStructureSection');
    Route::post('/admin/fee-structure', [AdminFeeStructureController::class, 'addfeeStructure'])->name('addfeeStructure');
    Route::get('/admin/fee-structure/edit/{id}', [AdminFeeStructureController::class, 'editfeeStructure'])->name('editfeeStructure');
    Route::post('/admin/fee-structure/edit/{id}', [AdminFeeStructureController::class, 'editfeeStructure'])->name('editfeeStructure');
    Route::delete('/admin/fee-structure/delete/{id}', [AdminFeeStructureController::class, 'deletefeeStructure'])->name('deletefeeStructure');



    Route::get('/admin/community', [AdminCommunityControllers::class, 'index'])->name('websiteCommunity');
    Route::post('/admin/community-section', [AdminCommunityControllers::class, 'editCommunity'])->name('editCommunity');

    Route::get('/admin/clubs', [AdminClubsControllers::class, 'index'])->name('websiteClubs');
    Route::post('/admin/clubs-section', [AdminClubsControllers::class, 'editClub'])->name('editClub');

    Route::get('/admin/major-cells', [AdminMajorCellsControllers::class, 'index'])->name('websiteMajor');
    Route::post('/admin/major-cells', [AdminMajorCellsControllers::class, 'editMajorCell'])->name('editMajorCell');

    Route::get('/admin/NCTE', [AdminNCTEControllers::class, 'index'])->name('websiteNCTE');
    Route::post('/admin/NCTE', [AdminNCTEControllers::class, 'editNcteRevised'])->name('editNcteRevised');
    Route::delete('/admin/NCTE/delete/{id}', [AdminNCTEControllers::class, 'deleteNcteRevised'])->name('deleteNcteRevised');

    Route::get('/admin/achievements', [AdminAchievementsControllers::class, 'index'])->name('websiteAchievements');
    Route::post('/admin/achievements', [AdminAchievementsControllers::class, 'editAchievement'])->name('editAchievement');

    Route::get('/admin/infrastructure-details', [AdminInfrastructureDetailsControllers::class, 'index'])->name('websiteInfrastructureDetails');
    Route::post('/admin/infrastructure-details', [AdminInfrastructureDetailsControllers::class, 'editInfrastructureDetails'])->name('editInfrastructureDetails');

    Route::get('/admin/land-completion', [AdminLandCompletionControllers::class, 'index'])->name('websiteLandCompletion');
    Route::post('/admin/land-completion', [AdminLandCompletionControllers::class, 'editLandCompletion'])->name('editLandCompletion');

    Route::get('/admin/college-map', [AdminCollegeMapControllers::class, 'index'])->name('websiteCollegeMap');
    Route::post('/admin/college-map', [AdminCollegeMapControllers::class, 'editCollegeMap'])->name('editCollegeMap');
    //
    Route::get('/admin/liberary-details', [AdminLiberaryControllers::class, 'index'])->name('websiteLiberaryDetials');
    Route::post('/admin/liberary-details', [AdminLiberaryControllers::class, 'updateLiberaryDetials'])->name('updateLiberaryDetials');
    Route::post('/admin/add-liberary-details', [AdminLiberaryControllers::class, 'addLiberaryDetials'])->name('addLiberaryDetials');
    Route::get('/admin/liberary-details/edit/{id}', [AdminLiberaryControllers::class, 'editLiberaryDetials'])->name('editLiberaryDetials');
    Route::post('/admin/liberary-details/edit/{id}', [AdminLiberaryControllers::class, 'editLiberaryDetials'])->name('editLiberaryDetials');
    Route::delete('/admin/liberary-details/delete/{id}', [AdminLiberaryControllers::class, 'deleteLiberaryDetials'])->name('deleteLiberaryDetials');

    Route::get('/admin/laboratories', [AdminLaboratoriesControllers::class, 'index'])->name('websiteLaboratories');
    Route::post('/admin/laboratories', [AdminLaboratoriesControllers::class, 'addLaboratories'])->name('addLaboratories');
    Route::get('/admin/laboratories/edit/{id}', [AdminLaboratoriesControllers::class, 'editLaboratories'])->name('editLaboratories');
    Route::post('/admin/laboratories/edit/{id}', [AdminLaboratoriesControllers::class, 'editLaboratories'])->name('editLaboratories');
    Route::delete('/admin/laboratories/delete/{id}', [AdminLaboratoriesControllers::class, 'deleteLaboratories'])->name('deleteLaboratories');

    Route::get('/admin/workshops', [AdminWorkshopControllers::class, 'index'])->name('websiteWorkshops');
    Route::post('/admin/workshops', [AdminWorkshopControllers::class, 'editWorkshops'])->name('editWorkshops');

    Route::get('/admin/OtherFacilities', [AdminOtherFacilitiesControllers::class, 'index'])->name('websiteOtherFacilities');
    Route::post('/admin/OtherFacilities', [AdminOtherFacilitiesControllers::class, 'updateOtherFacilities'])->name('updateOtherFacilities');
    Route::post('/admin/add-OtherFacilities', [AdminOtherFacilitiesControllers::class, 'addOtherFacilities'])->name('addOtherFacilities');
    Route::get('/admin/OtherFacilities/edit/{id}', [AdminOtherFacilitiesControllers::class, 'editOtherFacilities'])->name('editOtherFacilities');
    Route::post('/admin/OtherFacilities/edit/{id}', [AdminOtherFacilitiesControllers::class, 'editOtherFacilities'])->name('editOtherFacilities');
    Route::delete('/admin/OtherFacilities/delete/{id}', [AdminOtherFacilitiesControllers::class, 'deleteOtherFacilities'])->name('deleteOtherFacilities');

    Route::get('/admin/addedFacilities', [AdminAddedFacilitiesControllers::class, 'index'])->name('websiteAddedFacilities');
    Route::post('/admin/addedFacilities', [AdminAddedFacilitiesControllers::class, 'updateaddedFacilities'])->name('updateaddedFacilities');
    Route::post('/admin/add-addedFacilities', [AdminAddedFacilitiesControllers::class, 'addaddedFacilities'])->name('addaddedFacilities');
    Route::get('/admin/addedFacilities/edit/{id}', [AdminAddedFacilitiesControllers::class, 'editaddedFacilities'])->name('editaddedFacilities');
    Route::post('/admin/addedFacilities/edit/{id}', [AdminAddedFacilitiesControllers::class, 'editaddedFacilities'])->name('editaddedFacilities');
    Route::delete('/admin/addedFacilities/delete/{id}', [AdminAddedFacilitiesControllers::class, 'deleteaddedFacilities'])->name('deleteaddedFacilities');
    //Events
    Route::get('/admin/event-categories', [AdminEventsControllers::class, 'showEventCategories'])->name('showEventCategories');
    Route::post('/admin/add-event-categories', [AdminEventsControllers::class, 'addEventCategories'])->name('addEventCategories');
    Route::get('/admin/event-categories/edit/{id}', [AdminEventsControllers::class, 'editEventCategories'])->name('editEventCategories');
    Route::post('/admin/event-categories/edit/{id}', [AdminEventsControllers::class, 'editEventCategories'])->name('editEventCategories');
    Route::delete('/admin/event-categories/delete/{id}', [AdminEventsControllers::class, 'deleteEventsCategory'])->name('deleteEventsCategory');

    Route::get('/admin/event-details', [AdminEventsControllers::class, 'showEventDetails'])->name('showEventDetails');
    Route::post('/admin/add-event-details', [AdminEventsControllers::class, 'addEventDetails'])->name('addEventDetails');
    Route::get('/admin/event-details/edit/{id}', [AdminEventsControllers::class, 'editEventDetails'])->name('editEventDetails');
    Route::post('/admin/event-details/edit/{id}', [AdminEventsControllers::class, 'editEventDetails'])->name('editEventDetails');
    Route::delete('/admin/event-details/delete/{id}', [AdminEventsControllers::class, 'deleteEventDetails'])->name('deleteEventDetails');

    //Event Ends

    //Blogs
    Route::get('/admin/blog-categories', [AdminBlogsControllers::class, 'showBlogCategories'])->name('showBlogCategories');
    Route::post('/admin/add-blog-categories', [AdminBlogsControllers::class, 'addBlogCategories'])->name('addBlogCategories');
    Route::post('/admin/add-blog-tags', [AdminBlogsControllers::class, 'addBlogTags'])->name('addBlogTags');
    Route::get('/admin/blog-tags/edit/{id}', [AdminBlogsControllers::class, 'editBlogTags'])->name('editBlogTags');
    Route::post('/admin/blog-tags/edit/{id}', [AdminBlogsControllers::class, 'editBlogTags'])->name('editBlogTags');
    Route::get('/admin/blog-categories/edit/{id}', [AdminBlogsControllers::class, 'editBlogCategories'])->name('editBlogCategories');
    Route::post('/admin/blog-categories/edit/{id}', [AdminBlogsControllers::class, 'editBlogCategories'])->name('editBlogCategories');
    Route::delete('/admin/blog-tags/delete/{id}', [AdminBlogsControllers::class, 'deleteBlogsTags'])->name('deleteBlogsTags');
    Route::delete('/admin/blog-categories/delete/{id}', [AdminBlogsControllers::class, 'deleteBlogsCategory'])->name('deleteBlogsCategory');

    Route::get('/admin/blog-details', [AdminBlogsControllers::class, 'showBlogDetails'])->name('showBlogDetails');
    Route::post('/admin/add-blog-details', [AdminBlogsControllers::class, 'addBlogDetails'])->name('addBlogDetails');
    Route::get('/admin/blog-details/edit/{id}', [AdminBlogsControllers::class, 'editBlogDetails'])->name('editBlogDetails');
    Route::post('/admin/blog-details/edit/{id}', [AdminBlogsControllers::class, 'editBlogDetails'])->name('editBlogDetails');
    Route::delete('/admin/blog-details/delete/{id}', [AdminBlogsControllers::class, 'deleteBlogDetails'])->name('deleteBlogDetails');

    //Blog Ends
    //Courses
    Route::get('/admin/courses-details', [AdminCoursesControllers::class, 'showCoursesDetails'])->name('showCoursesDetails');
    Route::post('/admin/add-courses-details', [AdminCoursesControllers::class, 'addCoursesDetails'])->name('addCoursesDetails');
    Route::get('/admin/courses-details/edit/{id}', [AdminCoursesControllers::class, 'editCoursesDetails'])->name('editCoursesDetails');
    Route::post('/admin/courses-details/edit/{id}', [AdminCoursesControllers::class, 'editCoursesDetails'])->name('editCoursesDetails');
    Route::delete('/admin/courses-details/delete/{id}', [AdminCoursesControllers::class, 'deleteCoursesDetails'])->name('deleteCoursesDetails');
    //courses

    //Addmission Section
    Route::get('/admin/addmission-steps-section', [AdminAddmissionSectionController::class, 'index'])->name('websiteAddmissionSteps');
    Route::post('/admin/addmission-steps-section', [AdminAddmissionSectionController::class, 'updateAddmissionStepsSection'])->name('updateAddmissionStepsSection');
    Route::post('/admin/addmission-info-section', [AdminAddmissionSectionController::class, 'updateAddmissionInfoSection'])->name('updateAddmissionInfoSection');
    Route::post('/admin/addmission-steps', [AdminAddmissionSectionController::class, 'addAddmissionSteps'])->name('addAddmissionSteps');
    Route::delete('/admin/addmission-steps/delete/{id}', [AdminAddmissionSectionController::class, 'deleteAddAddmissionSteps'])->name('deleteAddAddmissionSteps');

    Route::get('/admin/reviews', [AdminReviewsController::class, 'index'])->name('reviewsPage');
    Route::post('/admin/reviews-section', [AdminReviewsController::class, 'updateReviewsSection'])->name('updateReviewsSection');
    Route::post('/admin/reviews', [AdminReviewsController::class, 'addReviewsSection'])->name('addReviewsSection');
    Route::get('/admin/reviews/edit/{id}', [AdminReviewsController::class, 'editStudentReviews'])->name('editStudentReviews');
    Route::post('/admin/reviews/edit/{id}', [AdminReviewsController::class, 'editStudentReviews'])->name('updateStudentReviews');
    Route::delete('/admin/reviews/delete/{id}', [AdminReviewsController::class, 'deleteStudentReviews'])->name('deleteStudentReviews');
    Route::get('/admin/gallery', [AdminGalleryController::class, 'index'])->name('websiteGallery');
    Route::post('/admin/gallery', [AdminGalleryController::class, 'addSliderImage'])->name('addSliderImage');
    Route::post('/admin/gallery-section', [AdminGalleryController::class, 'updateGallerySection'])->name('updateGallerySection');
    Route::post('/admin/gallery-card', [AdminGalleryController::class, 'addGalleryCard'])->name('addGalleryCard');
    Route::delete('/admin/gallery/delete/{id}', [AdminGalleryController::class, 'deleteSliderImage'])->name('deleteSliderImage');
    Route::get('/admin/gallery-card/edit/{id}', [AdminGalleryController::class, 'editSliderCard'])->name('editSliderCard');
    Route::post('/admin/gallery-card/edit/{id}', [AdminGalleryController::class, 'editSliderCard'])->name('updateSliderCard');
    Route::delete('/admin/gallery-card/delete/{id}', [AdminGalleryController::class, 'deleteSliderCard'])->name('deleteSliderCard');
    Route::get('/admin/terms', [AdminTermsController::class, 'index'])->name('websiteTerms');
    Route::post('/admin/terms', [AdminTermsController::class, 'addTerms'])->name('addTerms');
    Route::get('/admin/policy', [AdminPolicyController::class, 'index'])->name('websitePolicy');
    Route::post('/admin/policy', [AdminPolicyController::class, 'addPolices'])->name('addPolices');
    Route::get('/logout', [AdminController::class, 'logout'])->name('adminLogout');
});

Route::get('/', [HomePageController::class, 'homePage'])->name('home');

Route::get('/about-us', [AboutPageController::class, 'aboutPage'])->name('about-us');

Route::get('/contact', [ContactPageController::class, 'contactPage'])->name('contact');

Route::get('/gallery', [GalleryPageController::class, 'galleryPage'])->name('gallery');

Route::get('/privacy-policy', [PolicyPageController::class, 'policyPage'])->name('policy');

Route::get('/terms-conditions', [TermsPageController::class, 'termsPage'])->name('terms');

Route::get('/our-facultie', [FacultiePageController::class, 'facultiePage'])->name('facultie');

Route::get('/our-management-member', [ManagementPageController::class, 'managementPage'])->name('management');

Route::get('/publication', [PublicationPageController::class, 'publicationPage'])->name('publication');

Route::get('/undertaking', [UndertakingPageController::class, 'undertakingPage'])->name('undertaking');

Route::get('/fees-structure', [UndertakingPageController::class, 'feesStructurePage'])->name('feesStructure');

Route::get('/community-work', [CommunityWorkPageController::class, 'communityWorkPage'])->name('community-work');

Route::get('/clubs', [ClubsPageController::class, 'clubsPage'])->name('clubs');

Route::get('/ncte-revised', [NCTEPageController::class, 'ncteRevisedPage'])->name('ncte-revised');

Route::get('/major-cells', [MajorCellsPageController::class, 'majorCellsPage'])->name('major-cells');

Route::get('/college-map', [CollegeMapControllers::class, 'collegeMapPage'])->name('college-map');

Route::get('/infrastructure-details', [InfrastructreDetailsControllers::class, 'infrastructureDetailsPage'])->name('infrastructure-details');

Route::get('/land-completion-certificate', [LandCompletionControllers::class, 'landCompletionPage'])->name('land-completion-certificate');

Route::get('/liberary-details', [LiberaryDetailsControllers::class, 'liberaryDetailsPage'])->name('liberary-details');
Route::get('/laboratories', [LaboratoriesDetailsControllers::class, 'laboratoriesPage'])->name('laboratories');
Route::get('/workshops-seminars', [WorkshopsSeminarsControllers::class, 'workshopsSeminarsPage'])->name('workshops-seminars');
Route::get('/other-facilities', [OtherFacilitiesControllers::class, 'otherFacilitiesPage'])->name('other-facilities');
Route::get('/added-facilities', [AddedFacilitiesControllers::class, 'addedFacilitiesPage'])->name('added-facilities');
Route::get('/courses', [CoursesControllers::class, 'courses'])->name('courses');
Route::get('/courses-details/{id}', [CoursesControllers::class, 'coursesDetails'])->name('courses-details');

Route::get('/events', [EventControllers::class, 'event'])->name('events');
Route::get('/events-details/{id}', [EventControllers::class, 'eventDetails'])->name('events-details');

Route::get('/blogs', [BlogsControllers::class, 'blogs'])->name('blogs');
Route::get('/blogs-details/{id}', [BlogsControllers::class, 'blogsDetails'])->name('blogs-details');
// ENQUIRY FORM
Route::match(["get", "post"], "/enquiry", [EnquiryController::class, "enquiry_form"])->name("enquiry");

// Routes
Route::match(["get", "post"], "/contact-enquiry", [EnquiryController::class, "contact_form"])->name("contact-enquiry");

Route::get('/create-storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage symbolic link created successfully!';
});
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Cache cleared successfully!';
});
