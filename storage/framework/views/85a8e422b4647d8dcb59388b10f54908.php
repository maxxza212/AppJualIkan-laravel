

<?php $__env->startSection('title', 'Daftar Produk'); ?> <!-- Menentukan judul halaman -->

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h1>Daftar Produk</h1>
        <div class="row">
            <!-- Produk 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('assets/super delta.png')); ?>" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Super Delta</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="<?php echo e(asset('assets/super delta.png')); ?>">
                        </form>
                        <?php else: ?>
                        <p class="text-danger">Silakan <a href="<?php echo e(route('login')); ?>">login</a> untuk menambahkan produk ke keranjang.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Tambahkan produk lain di sini -->
             <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('assets/Halfmoon.png')); ?>" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Halfmoon</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="<?php echo e(asset('assets/super delta.png')); ?>">
                        </form>
                        <?php else: ?>
                        <p class="text-danger">Silakan <a href="<?php echo e(route('login')); ?>">login</a> untuk menambahkan produk ke keranjang.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('assets/duble tail.png')); ?>" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Duble Tail</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="<?php echo e(asset('assets/super delta.png')); ?>">
                        </form>
                        <?php else: ?>
                        <p class="text-danger">Silakan <a href="<?php echo e(route('login')); ?>">login</a> untuk menambahkan produk ke keranjang.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('assets/Plakat.png')); ?>" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Plakat</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="<?php echo e(asset('assets/super delta.png')); ?>">
                        </form>
                        <?php else: ?>
                        <p class="text-danger">Silakan <a href="<?php echo e(route('login')); ?>">login</a> untuk menambahkan produk ke keranjang.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('assets/serit.png')); ?>" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Crown Tail</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="<?php echo e(asset('assets/super delta.png')); ?>">
                        </form>
                        <?php else: ?>
                        <p class="text-danger">Silakan <a href="<?php echo e(route('login')); ?>">login</a> untuk menambahkan produk ke keranjang.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo e(asset('assets/rosetail.png')); ?>" class="card-img-top" alt="Super Delta">
                    <div class="card-body">
                        <h5 class="card-title">Rosetail</h5>
                        <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                        <p class="text-success">Sisa Stok: <strong>1</strong></p> <!-- Menampilkan sisa stok -->
                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_name" value="Super Delta">
                            <input type="hidden" name="product_image" value="<?php echo e(asset('assets/super delta.png')); ?>">
                        </form>
                        <?php else: ?>
                        <p class="text-danger">Silakan <a href="<?php echo e(route('login')); ?>">login</a> untuk menambahkan produk ke keranjang.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTokoIkan\resources\views/admin/page/product.blade.php ENDPATH**/ ?>