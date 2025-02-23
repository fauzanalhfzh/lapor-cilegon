<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Interfaces\ReportCategoryRepositoryInterface;
use App\Interfaces\ReportRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ReportRepositoryInterface $reportRepository;
    private ReportCategoryRepositoryInterface $reportCategoryRepository;

    public function __construct(
        ReportCategoryRepositoryInterface $reportCategoryRepository,
        ReportRepositoryInterface $reportRepository
        )
    {
        $this->reportRepository = $reportRepository;
        $this->reportCategoryRepository = $reportCategoryRepository;
    }

    public function index()
    {
        $reports = $this->reportRepository->getLatestReports();
        $categories = $this->reportCategoryRepository->getAllReportCategories();

        return view('pages.app.home', compact('categories', 'reports'));
    }

    public function notifications()
    {
        return view('pages.app.notifications');
    }
}
