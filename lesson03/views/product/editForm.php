<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= $baseUrl . "public/" ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <form action="<?= $baseUrl . "product-save-edit"?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $model->id ?>">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Tên sp</label>
                        <input type="text" name="name" id=""
                         value="<?= $model->name ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select name="cate_id" id="" class="form-control">
                            <?php foreach ($cates as $c):?>
                                <option 
                                    <?php if($c->id == $model->cate_id):?>
                                        selected
                                    <?php endif?>
                                    value="<?= $c->id?>"><?= $c->cate_name?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sp</label>
                        <input type="number" name="price" id=""
                            value="<?= $model->price ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Sao đánh giá sp</label>
                        <input type="number" name="star" 
                            value="<?= $model->star ?>" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Lượt xem sp</label>
                        <input type="number" name="views" 
                            value="<?= $model->views ?>" id="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img-preview">
                        <?php
                        $imgDefault = $model->image != null ? $model->image : "images/default-img.png";
                        ?>
                        <img src="<?= $imgDefault ?>" " alt="" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sp</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="short_desc" id="" rows="10" class="form-control"><?= $model->short_desc ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <textarea name="detail" id="" rows="15" class="form-control"><?= $model->detail ?></textarea>
                    </div>
                </div>
                <div class="justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    <a href="<?= $baseUrl ?>" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>