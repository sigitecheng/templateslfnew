<?php echo $__env->make('backend.00_dashboard.part.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.00_dashboard.part.menuheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.00_dashboard.part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 140vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">


            

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
            .badge {
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                /* margin-right: 10px; */
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
            }
            .badge-kuota {
                background: linear-gradient(to right, blue, blue);
                color: white;
                padding: 5px 5px;
                border-radius: 10px;
                display: inline-block;
                font-size: 12px;
                /* margin-right: 10px; */
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge-kuota:hover {
                background: white;
                color: black;
            }
           
            .badge-mulai {
                background: linear-gradient(to right, red, red);
                color: white;
                padding: 5px 5px;
                border-radius: 10px;
                display: inline-block;
                font-size: 12px;
                /* margin-right: 10px; */
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge-mulai:hover {
                background: white;
                color: black;
            }
           
            .badge-selesai {
                background: linear-gradient(to right, green, green);
                color: white;
                padding: 5px 5px;
                border-radius: 10px;
                display: inline-block;
                font-size: 12px;
                /* margin-right: 10px; */
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge-selesai:hover {
                background: white;
                color: black;
            }

            .badge-plus {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 15px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
                margin-left: 350px;
            }
            .badge-plus:hover {
                background: white;
                color: black;
            }
        </style>
        <!-- <div class="badge"><i class="fas fa-edit me-2"></i>Create New </div></label> -->
        <button id="previewBtn" class="badge" style="border: none; font-size:15px; cursor:pointer;">
            <i class="fas fa-folder-open" style="margin-right: 5px;"></i>Dokumentasi Acara Pelatihan Sertifikasi Pekerja Konstruksi
        </button>
        
                        

                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->

    
</div>
</div>



<?php echo $__env->make('tambahan.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
        
                th, td {
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    color: black;
                    font-size: 12px;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
        
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                    font-size: 12px;
                }
        
                th {
                    /* background-color: #4CAF50; */
                    /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
                    background-color:  #FFCB0F;
                    color: black;
                    font-size: 14px;
                }
            </style>
             <table>
                <thead>
                    <tr>
                        <th style="width:10%; font-size:12px">NO</th>
                        <th style="width:700px; font-size:12px">DOKUMENTASI KEGIATAN</th>
                        <th style="width:200px; font-size:12px">FOTO</th>
                        <th style="width:200px; font-size:12px">VIEW ACARA</th>
                        
                    </tr>
                </thead>
                <tbody>

                    
                    <?php
                $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                    ?>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <td style="font-size: 12px;"><?php echo e($loop->iteration + $start - 1); ?></td>
                        <td style="font-size: 12px; text-align:left;"><?php echo e($item->judul_kegiatan); ?></td>
                        <td style="font-size: 12px; text-align:center; width:250px;" >
                                <img style="width: 50%" src="<?php echo e(asset('storage/' . $item->berita1)); ?>" alt="">

                        </td>

                        <style>
                            .btn-gallery {
                            padding: 5px 10px;
                            border-radius: 10px;
                            color: white;
                            background-color: green;
                            border: none;
                            cursor: pointer;
                            transition: background-color 0.3s, color 0.3s;
                            font-size: 12px;
                        }

                        .btn-gallery:hover {
                            background: white;
                            color: black;
                        }

                        </style>

                        <td style="font-size: 12px; text-align: center;">
                            <a href="/acarapelatihan/<?php echo e($item->judul_kegiatan); ?>" style="text-decoration: none; background: inherit;">
                                <button class="btn-gallery" style="text-align: center;">
                                    GALERY
                                </button>
                            </a>
                        </td>
                        
                        
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    
                    
                    
                </tbody>
            </table>


        </div>

        <div class="pagination-container" style="margin-top: 75px; margin-bottom:75px; display: flex; flex-direction: column; align-items: center;">
                <div class="pagination-info mb-2" style="margin-bottom: 10px; color:orange; font-weight: 500;">
                    Data Ke <?php echo e($data->firstItem()); ?> Sampai <?php echo e($data->lastItem()); ?> Dari <?php echo e($data->total()); ?> Jumlah <?php echo e($title); ?>

                </div>
                    <ul class="pagination" style="display: flex; padding-left: 0; list-style: none;">
                        <li class="page-item <?php echo e($data->onFirstPage() ? 'disabled' : ''); ?>" style="margin-right: 5px;">
                            <a class="page-link" href="<?php echo e($data->previousPageUrl()); ?>" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 20px 0px 0px 20px;"><i class="fas fa-arrow-left" style="margin-right:10px;"></i>Previous</a>
                        </li>

                        <?php $__currentLoopData = $data->getUrlRange($data->currentPage() - 0, $data->currentPage() + 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="page-item <?php echo e($page == $data->currentPage() ? 'active' : ''); ?>" style="margin-right: 5px;">
                                <a class="page-link" href="<?php echo e($url); ?>" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; "><?php echo e($page); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <li class="page-item <?php echo e($data->hasMorePages() ? '' : 'disabled'); ?>" style="margin-right: 5px;">
                            <a class="page-link" href="<?php echo e($data->nextPageUrl()); ?>" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 0px 20px 20px 0px;">Next <i class="fas fa-arrow-right" style="margin-left:10px;"></i></a>
                        </li>
                    </ul>

            </div>
            
        </div>
    </div>
    
                <hr style="border:0; height:5px; background-color:navy; margin: 20px 0px;">
                <?php echo $__env->make('backend.00_dashboard.part.menufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    <?php echo $__env->make('backend.00_dashboard.part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/02_berita/04_acarapelatihan/index.blade.php ENDPATH**/ ?>