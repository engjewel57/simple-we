 <?php
require_once 'vendor/autoload.php';
USE APP\classes\Product;
require_once 'vendor/autoload.php';
USE APP\classes\Category;
USE APP\classes\Card;
USE APP\classes\Slider;
USE APP\classes\FullName;

$category=new Category();
$categories =$category->getALLCategory();

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        $slider =new Slider();
        $sliders = $slider->getALLSlider();

        $card =new Card();
        $cards = $card->getALLCard();

        $product=new product();
        $products  =$product->getALLProduct();
        include 'page/home.php';
    }
    elseif ($_GET['page']=='about')
    {
        include 'page/about.php';
    }
    elseif ($_GET['page']=='category')
    {
        $id=$_GET['id'];
        $product=new  Product();
        $products =$product->getALLProductByCategory($id);
        include 'page/category.php';
    }
    elseif ($_GET['page']=='detail')
    {
        $id            = $_GET['id'];
        $product       = new Product();
        $singleProduct = $product->getProductById($id);
        include 'page/detail.php';
    }
    elseif ($_GET['page']=='full-name')
    {
        include 'page/full-name.php';
    }
}
elseif (isset($_POST['btn']))
{
    if ($_POST['btn'] =='Submit')
    {
        $fullName =new  FullName($_POST);
        $result = $fullName->makeFullName();
        include 'page/full-name.php';
    }
}