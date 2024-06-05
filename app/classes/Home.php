<?php


namespace App\classes;

use App\classes\Blog;
use App\classes\Feature;
use App\classes\Gallery;
use App\classes\News;
use App\classes\Slider;
use App\classes\Article;


class Home
{
    public $blog, $blogs, $slider, $sliders, $slide,
        $feature, $features, $galleries, $gallery,
        $newses, $news, $articles, $article;

    public function __construct()
    {
        session_start();
    }


    public function index()
    {
        $this->slider = new Slider();
        $this->sliders = $this->slider->getAllSliderData();

        $this->feature = new Feature();
        $this->features = $this->feature->getAllFeatureData();

        $this->blog = new Blog();
        $this->blogs = $this->blog->getAllBlogData();

        $this->gallery = new Gallery();
        $this->galleries = $this->gallery->getAllGalleryData();

        $this->news = new News();
        $this->newses = $this->news->getAllNewsData();

        $this->article = new Article();
        $this->articles = $this->article->getAllArticleData();

        return view('home', [
            'blogs' => $this->blogs,
            'sliders' => $this->sliders,
            'features' => $this->features,
            'galleries' => $this->galleries,
            'newses' => $this->newses,
            'articles' => $this->articles,
        ]);

    }

    public function about()
    {
        if (isset($_SESSION['id'])) {
            return view('about');
        } else {
            header("Location:action.php?page=login&&message=Please login for access dashboard");
        }
    }

    public function gallery()
    {
        if (isset($_SESSION['id'])) {
            $this->gallery = new Gallery();
            $this->galleries = $this->gallery->getAllGalleryData();
            return view('gallery', ['galleries' => $this->galleries]);
        } else {
            header("Location:action.php?page=login&&message=Please login for access dashboard");
        }
    }

    public function contact()
    {
        if (isset($_SESSION['id'])) {
            return view('contact');
        } else {
            header("Location:action.php?page=login&&message=Please login for access dashboard");
        }
    }

    public function career()
    {
        if (isset($_SESSION['id'])) {
            return view('career');
        } else {
            header("Location:action.php?page=login&&message=Please login for access dashboard");
        }
    }


    public function detail($id)
    {
        $this->slider = new Slider();
        $this->slide = $this->slider->getSliderById($id);
        return view('detail', ['slide' => $this->slide]);
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("Location:action.php?page=home");
    }

    public function dashboard()
    {
        if (isset($_SESSION['id'])) {
            return view('dashboard');
        } else {
            header("Location:action.php?page=login&&message=Please login for access dashboard");
        }
    }


    public function blogDetail($id)
    {
        $this->blog = new Blog();
        $this->singleBlog = $this->blog->getBlogById($id);
        return view('blog-detail', ['singleBlog' => $this->singleBlog]);
    }

    public function singleNews($id)
    {
        $this->news = new News();
        $this->singleNews = $this->news->getNewsById($id);
        return view('single-news', ['singleNews' => $this->singleNews]);
    }

    public function singleArticle($id)
    {
        $this->article = new Article();
        $this->singleArticle = $this->article->getArticleById($id);
        return view('single-article', ['singleArticle' => $this->singleArticle]);
    }

}