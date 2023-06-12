<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Quản lý bài viết</h5>
        <div>
            <a class="btn btn-primary" href="">Thêm bài viết</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bài viết</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Tóm tắt</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($patients as $patient){
                ?>
                            <tr>
                                <th scope="row"><?= $patient->getId(); ?></th>
                                <th scope="row"><?= $patient->getTitle(); ?></th>
                                <th scope="row"><?= $patient->getSummary(); ?></th>
                                <th scope="row"><?= $patient->getContent(); ?></th>
                                <td><i class="bi bi-pencil-square"></i></td>
                                <td><i class="bi bi-trash"></i></td>
                    </tr>
                <?php
                }
                ?>
                
                
            </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>