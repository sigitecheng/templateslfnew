@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
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
    height: 100vh;
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


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

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
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
            }
        </style>
        <div class="badge"><i class="fas fa-edit me-2"></i>Create New </div></label>
    {{-- <select id="entries" onchange="showEntries()">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        </select> --}}
</div>
<div class="search-entries">
    <style>
        .search-container {
            position: relative;
            display: inline-block;
        }
        .search-container input {
            border-radius: 15px;
            padding: 2px 5px 2px 25px; /* Extra padding for the icon */
        }
        .search-container .fa-search {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
    <div class="search-container">
        <input
            type="text"
            id="searchInput"
            onkeyup="searchEntries()"
            placeholder="  Search..">
        <i class="fas fa-search"></i>
    </div>

    <script>
        function searchEntries() {
            // Your JavaScript function for searching entries
        }
    </script>
</div>
</div>


<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
        
                th, td {
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    color: black;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
        
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
        
                th {
                    /* background-color: #4CAF50; */
                    /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
                    background-color:  #FFCB0F;
                    color: black;
                }
            </style>
             <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemilik</th>
                        <th>Klasifikasi & Kualifikasi <br> Tenaga Ahli Terampil</th>
                        <th>No Registrasi</th>
                        <th>Masa Berlaku</th>
                        <th>Asosiasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- @foreach ($collection as $item) --}}
                    
                {{-- @endforeach --}}
                <tbody>

                    {{-- ============================================ --}}
                    <tr>
                        <td>1</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>No Data</td>
                        <td>
                        <div class="button-container" style="border-radius: 10px;">
                                <a href="view.html" class="icon-button" title="View" style="border-radius: 10px;">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="update.html" class="icon-button" title="Update" style="border-radius: 10px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="delete.html" class="icon-button" title="Delete" style="border-radius: 10px;">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>

                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    {{-- ============================================ --}}
                    
                    
                </tbody>
            </table>
        </div>




                
                </div>


                
            </div>
            @include('backend.00_dashboard.part.menufooter')
        </div>
        </div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    