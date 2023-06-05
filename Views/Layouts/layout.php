<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    if (isset($title)) {
        echo $title;
    } else {
        echo "Trang chủ";
    }
    ?>
     </title>
    <link rel="stylesheet" href="/public/style/output.css">
</head>
<body>
    <?php require_once "Views/Components/header.php"; ?>
    <main class="pt-[68px] dark:bg-slate-700">
        <div class="container mx-auto min-h-[calc(100vh-257px-68px)] pb-5">

            <?php require_once $view; ?>
        </div>
    </main>
    <?php require_once "Views/Components/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>