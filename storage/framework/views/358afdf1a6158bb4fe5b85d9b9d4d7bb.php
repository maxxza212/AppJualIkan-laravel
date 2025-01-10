

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Keranjang Belanja</h2></br>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row">
        <?php if($carts->isEmpty()): ?>
            <div class="col-12 text-center">
                <p>Keranjang Anda kosong.</p>
            </div>
        <?php else: ?>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo e($cart->product_image); ?>" class="card-img-top" alt="<?php echo e($cart->product_name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($cart->product_name); ?></h5>
                            <p class="card-text">Jumlah: <?php echo e($cart->quantity); ?></p>
                            <form action="<?php echo e(route('cart.remove', $cart->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Tambahkan tombol Checkout di sini -->
            <div class="col-12 text-center mt-4">
                <a href="https://wa.me/085742800718" class="btn btn-lg" style="background-color: #006786e0; color: white; border: none; text-decoration: none;">Checkout</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pelanggan.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AppTokoIkan\resources\views/pelanggan/page/keranjang.blade.php ENDPATH**/ ?>