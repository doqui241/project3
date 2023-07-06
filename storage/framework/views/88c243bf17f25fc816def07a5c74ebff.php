
<?php $__env->startSection('content'); ?>
    
    <img src="https://res.cloudinary.com/dpobeimdp/image/upload/v1688358523/image_2_mzjbow.svg" id="damsen-logo">
    <p id="damsen-name" class="tilte-custom">Đầm sen <br> park</p>
    <div class="row infomation-form-container">
        <div class="col-8 infomation-item">
            <div id="index-content">
                <p>Chào mừng đến với Little And Little</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima officia necessitatibus doloribus placeat,
                    ab voluptates laborum sequi consectetur accusamus explicabo commodi numquam magni quo praesentium
                    tempora assumenda deserunt totam consequatur.</p>
            </div>
        </div>
        <div class="col-4 form-item">
            <form action="" method="post" id="index-form">
                <?php echo csrf_field(); ?>
                <div class="form-caption-container form-caption-container-index">
                    <div class="form-caption text-center p-2 text-white">Vé của bạn</div>
                </div>

                <select name="ticket" id="ticket" class="form-control mt-3">
                  <option value="">Gói gia đình</option>
                </select>
                <div class="row">
                    <div class="col-5">
                        <input class="form-control mt-3 pe-0" placeholder="Số lượng vé" type="number" name="quantity"
                            id="quantity" required>
                        
                    </div>
                    <div class="col-7 ps-0">
                        <input class="form-control mt-3" placeholder="Ngày đặt vé" type="date" name="date_order"
                            id="date_order" required>
                      
                    </div>
                </div>
                <input class="form-control mt-3" placeholder="Họ và tên" type="text" name="name" id="name"
                    required>
                <input class="form-control mt-3" placeholder="Số điện thoại" type="text" name="phone" id="phone"
                    required>
              
                <input class="form-control mt-3" placeholder="Email" type="email" name="email" id="email" required>
                <div class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary mt-3" type="submit">Đặt vé</button>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo e(asset('js/checkDateIndex.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Alta\project3\resources\views/index.blade.php ENDPATH**/ ?>