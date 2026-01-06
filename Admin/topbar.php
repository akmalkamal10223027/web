<div class="flex justify-between items-center bg-white px-8 py-4 border-b">

    <h2 class="text-xl font-semibold text-slate-800">
        Dashboard Admin
    </h2>

    <div class="flex items-center gap-4">
        <span class="text-sm text-slate-600">
            Login sebagai: <b><?= $_SESSION['admin']; ?></b>
        </span>

        <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium">
            Logout
        </a>
    </div>

</div>