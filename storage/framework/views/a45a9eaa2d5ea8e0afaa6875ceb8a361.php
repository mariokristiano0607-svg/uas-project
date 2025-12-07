<?php $__env->startSection('content'); ?>
<div class="p-8 max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-white mb-8">Profile</h1>

    <div class="space-y-8">
        <!-- Update Profile -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 p-8">
            <h2 class="text-xl font-semibold text-white mb-6">Informasi Profile</h2>
            <form method="POST" action="<?php echo e(route('profile.update')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-300 mb-2">Nama</label>
                        <input type="text" name="name" value="<?php echo e(old('name', auth()->user()->name)); ?>"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-purple-500">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div>
                        <label class="block text-gray-300 mb-2">Email</label>
                        <input type="email" name="email" value="<?php echo e(old('email', auth()->user()->email)); ?>"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-purple-500">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-400 text-sm mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                            class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-3 px-8 rounded-lg transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>

        <!-- Change Password -->
        <div class="bg-gray-800 rounded-xl border border-gray-700 p-8">
            <h2 class="text-xl font-semibold text-white mb-6">Ganti Password</h2>
            <form method="POST" action="<?php echo e(route('password.update')); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>

                <div class="space-y-5">
                    <div>
                        <label class="block text-gray-300 mb-2">Password Lama</label>
                        <input type="password" name="current_password"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Password Baru</label>
                        <input type="password" name="password"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white">
                    </div>
                    <div>
                        <label class="block text-gray-300 mb-2">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                            class="bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold py-3 px-8 rounded-lg transition">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\final-project\final-project\resources\views/profile/edit.blade.php ENDPATH**/ ?>