@extends('layout.app')

@section('pageTitle', 'الطلاب')

@section('content')


<div class="fixed top-0 w-screen z-50 flex px-32 py-4 border-b bg-white backdrop-blur-xl bg-opacity-40 justify-between items-center">
    <h2 class="text-2xl leading-tight text-gray-700 font-semibold flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        <span class="mr-1">
            الطلاب
        </span>
    </h2>
    <a href="{{ route('view_new')}}" class="bg-blue-50 text-blue-500 px-3 py-1 rounded-xl border border-blue-200 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
          </svg>
        <span class="mr-1">
            اضافة طالب
        </span>
    </a>
</div>

    <div class="container mx-auto px-4 sm:px-8 max-w-5xl mt-10 mb-40">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full border rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    اسم الطالب
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    القسم
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    رقم الهوية
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    الدراسة
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    تاريخ الاصدار
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    تاريخ الانتهاء
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                    حالة الطالب
                                </th>
                                <th scope="col"
                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i=0; $i<1; $i++)

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <a href="#" class="block relative">
                                                <img alt="profil"
                                                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUSExIVFhIVFRUaFRUXFxkXFRoYFhoXGBYWExcYHSggGBolHRUVITEiJSkrLi4uFx8zODYsNygtLisBCgoKDg0OGhAQGCslHR8tLS0tLTcrLS0tKy0tLS0tKystLSs1LS0tLS0tLS0tLS0tKy0tLS0uLS0tLS0tLTctLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAAAQcEBgIDBQj/xABBEAACAQICBwUECAQFBQEAAAAAAQIDEQQhBRIxQVFhcQYHIoGRE6GxwRQjMkKC0eHwUmJysjNzkqLxNEODk8Ik/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAECAwQF/8QAIxEBAQEAAgIBBAMBAAAAAAAAAAECETEDBCESExQiQVFhMv/aAAwDAQACEQMRAD8AtcAAAAAAAAlEEoAAAAAAAAAYukdI0qEderNRj730SzfkdmNxUaVOVWbtCEW5PkvmUbprtPUxuJcpLwRdoQ+7FJ5Pg5cyutcLZzysTF942Hg8qc3C9tZ2jfpF5+tjK0b2/wAHWdtdwfCVl8yqMXKOaeTe++Xm1d/I1zE1oa32k2t/6lJutLiPqKE01dNNPY1sORQnZLvAr4PVpySnQurqz1kr5uLvkXlo7HQr0oVqctanNXi/z4M0l5ZWcMkAEoAAAAAEAkAQCSAAAAAAAAAAAAAAAAABJBIAAAAAAAAGnd7FZw0dNp2bnTXvu7+hSujZO+Sbinm/l8Npfnb3Rv0jR+IppXkqbnBL+Kn40vPVt5lW9h9GRlSjdX1nf13mHm19M5dPr4+u8PHxGBdVrUctbd/xme1o3u0rVoqVWcad/wCVOVvK2ZYujdDU4ZpRTPVtFK7klbizn+7q9Oz7OJ/qlu1XYirho60Fr01bNfa/ErWSLF7oK8voUqU9tKq0v6ZpSXvcvcZWnakalKooyjJOLWTur232OrunpJYJSf8AiVJynJfy3cIeTUG/M18G7fiub2fHJ8xugAOpxgAAAAAAAAAAgAAAAAAAAAAAAAAAEoAAAAAAAAAAeL2vw0p4aTg2pU5Rmrfy7fc2/IqzRWjK06cqcJNarnrWbTbUrZpZ22O195dkopqzV09qK2x+EeBxjipeCqlOD4ZuLj1WrH/Uc/nze3Z62pf1rycJovFUJa6r1NXXWTvbVbSWTe3M9rtR2cniKip+0k4qCkldLN3Ta428D8zI03joU6XtZvWaatFWT4XS3s5YXtTQryinGVNKKanO0bO1rLfc5ebbzw7fpknDBwnZV0Ia2u1LJK+e7xe7We+2RtPYnCKFCLve8KS6KMcl/u955GlcXaEpKWteLs9t1tyNu0ZhPY0oU7t6sYpt7W0kn8DbwT6tcub2rM5+n+2UADseeAAAAAAAAAAAQSQAAAAAAAAAAAAAlAAAAAAAAAAAANR7ysC5YZV4/aoSu+cJuMZJeeq/wm3FYdte11aWM+g0Yx+jpqNedrycvtOKbyik0lsvdMrufrV/Hz9U4axh60a7VWcpeG3hSUnfpJWew9zCVqddOn7OtqO93L2UIvdd6kdvO5ruO0dOjV1qVlfbF7Oq4Cni8ZVerklfe27bnkcnEs7ehPJrPxw2XszTdbFQwutrUqV5SfFRzSfXJepa5U+Ip1MBhlVoTtWU4SlOST1/EtaMlwcbq3w2llaE0nDFUIV4bJxu1e+rL70XzTujfwcXNscnsczUl/pnAA2c4AAAAAAAAAABBJAAAAAAAAAAAACSCQAAAAAAAGwBxqVFFOUmlFK7bdklxbexGq6f7e4bD3jTft6q3QfgT/mqbPS/kVj2g7QYjFtyrTvFZxpRyprhaO983dl5i1FrdO0/eYoSdPBxU2ttad9S/wDJHbLq7LkysqOOn7V1G25yk5Sb3tvWbfmIQy5s6a9O+X7s9r97L/ROOETVl5jfcLiKeKpKcWm07SW9dfzMuMYUYOpN5RWbtsS+LPD7t9EzqYnVi8o0p6yyV1dJL1afkbl2k7KVnhqzaioxhKbu73UFrWSV88jzt+CzfE6ej4/PLjm9qx092qliaii46tKz1Enndb59V6GRoXTOJw6+prTgm7uKd43yzcXeLdsr23I8/EYWLWSzjmrcbbDJpQy9D0sYmZ9M6edvd1eb2sTs/wB46yhi4vlWgsv/ACQWx84+hvej8fSrwVSlOM4PeuPBranyZ8/N2klueXnu93wMvBY6rQlrUakqcuMXa9t0lskuTIvjl6RNL/BWWge8eopxp4qMXBu0qsVqyjfZKcVk1xtbLiWYnfNbDK5s7Wl5SACEgAAAAAQSQAAAAAAAAAAAAkgkAAAAAAFYd5/ahubwNN+GOq674vKSp9Fk3zstzLE0tj44ejUry+zThKVuLSyiubdl5nzvUrynN1Zu8pzbm+c3dv1ZfE+Va76bV2t6OGJexb2zrh/idItP1Vjntk3wX7+Zso5TjsOKWXS6fRnPcRTdnbcwNu7q7rGrVu70Z3VrZpxbW3PJPMtvtC4fQ8RJ7PYVdu7wsqDu0lq6SocH7VP/ANU/yLb7Yf8AR4n/ACaj9Iu3vsZb/wCl50+f5r4/v4HYvkcUviTDibM3Vi43vbba66o5KetFPlc5zZ00I2TXCTt55/MJL7Xz/RFr91+mfa4d4eb8dC2rzpv7P+lpx6apUyeduDv+Xv8Ager2X0z9ExVOtfwfZqc4SfifllJf0orqcxM+F8ghO+azT2Mk52gAAAAAEMkhgAAAAAAAAAAARIAAAAAABoHe5pDVpUcMn/jTcpf00krJ/ikn+EqeGcH1s+T3M2rvO0n7XSDinlQUILr9qb9ZW/Cavio6rcttOatLlwZtnpS9mEu3J78l57zutZdf38jG0XXs5wbzys+JlYrJLh+hadIqYbBKN1zTucaUzsas2vNEobN3cu+kKHL2r2Nf9qfHbtLa7XL/APDiv8if9rKr7q43x6v92lVa6+GP/wBMtntFG+ExC40Kv9jMt/8AS+enz9OS2Ky5eW0lHTrbCVI2UcqkjgnbPe7XOFQa2RA6Kk7Sdtrsl++Rz5cLL8zpjnNu3Tq/37jKhTtZer4shK6u7zSLrYGnd3lSbpS/BbV/2OBspXndJiVbEUr53pzS6qUZNekPVFhmOpxV4AAqkAAAhkhgQAAAAAAAAAEBIAAAAASiDH0li/Y0alW1/Z05ztx1IuVvcB876drOpWqVn9+rUk+KvJuz6XscnNNJcV5MwniNSclUzjNtvq9skZFOF4at7x2xmn7nwZvFK86mtWo1yVuh681rU/3uPEeVXbe6fyPY0dUunEZKwlUt6npSzSkjz8fT1X1M3CT8BMQ3Xuqp2x7ys/o83saycqdmWtptXw1dcaNX+xlXd0tFfS6kluoS4750+PQtfHxvSmuNOfvizLfa+enza923Znlvz2Ppb3iJN8v0fxYSy4GygjhV2eZKb3HXXb4gddCfillv2t9NhkOtbc290V8XwMPCyeu+F/kehGUl04EQbP3WQmsepN5ypVFJbksmsuqRcpTXd3jNTH0sv8SM4Z7rrWT9YJeZcplvtfPQACiQAACGSQwAAAAAAAAAAAkAAAAANV7ytLxoYGpBqUpV4ypQUeMou8nyS+KNqK47501TwsvuqdVPk5KDXujImdirKUnZJ60VuyTXnvInh5Qu01zWWrLqtzO2VZSy1X1Tz9yaudWJozav7Neni91jVRk6A0Yq1HHVtTKjh4ShK32Je1hddXCNRdLmJgq1pLmWD2B0XVp6J0jUrxcKNelOVOLybUac1Kok9ifhtfbq34FaKTRXNWseppRXjc44GfhFaetTvyOOhqUqj9nCLlNvwxSu2+Rpz8q8LI7oM69d5ZUo8N8v0LVrvwy/pfwZWfdLTkq+JjNNSjCmnGS1Ws5WTVlbYWbNZPozHXa86fNiTsuDXFX81bIEefxIvtNmbjY6MXLYjIo8TCxE7yYtIYBpNt55+nrkel7W2xN83a3rv8jF03oeo60NbUjH6NhLZp7aFO90vva2ttz2brEx0TCK58bL5Fc23pNnHbKoYmpTnGrCWrKElKMtmazXU+hMLW14Qna2vGMrf1JP5nzRVWrk848djXVLJrnZeZ9G6AhNYWgqkteao09aWTu9VXd1t6ldpjPABmsAAAQySAAAAAAAAAAAAkEEgAAAKx78KdT2eGal9Tr1FKPGo4p05PpGNX15lnGv9u9DfS8FVpxV6kVr0uOvC7SXVXj+ImCicFUXmbXojQqqRU6jeq84xTtdcZNbuRo1Kbju2eq68DcdE6T1qcbNpJJNcLK1insb1M/q39XGda/ZtdFSjhquFT+pqwnGzvLV11aTjd5LPZs9SvNK9ma1N+GLnHc4/NbTbaWkmvvXye0509KR2bvz/bOPPl3n+Xdvw+PX8cK/w0ZKMoSTTs9vI7dBYuVGrGpD7S3cb5Ned7G/1sRRnnOMZLjb1zR01cLhYq9KnBVL5O12uabN/wAqWcWOf8Oy8yvXo6el7SMbxU2lG622224u13b9SwsPpGE/Deztsf728jStH6HpRjGUM7q7qPOTfI9ijBbNia3vN9TDHkub8NvL487nypFy2r9/A4VZZdciyu0fZehL6xXik81HntbXz29TCw/ZmnFJqlrvnn7vnY677meOvlyz09W9zhpuFwNWcfq4OW6+yN+ryPa0N2UUXrVXrP8Ahs9VPm2s/wB7TaaSjBpPJRytvW9p+hjy0vCKed2vhdtehy+T2N7+OnV4/Wxj57rIeEgoNON4701lw2Giaaw6pVHFfZecej3eX5GyV9L32b3+hqen8Y5zhFZyzslt8TSSS4t7CfVus7/yo9uZ1j/YwvZuc4xj4pSaio/xOTskuedj6E7PYB4fC0KEpa0qVKEG+LjFJ25XK/7vuw1RVIYvFRcHCTlTpNeNyX2Zz/hSd2ltyT62gd2ry8yAAKpAAAIJIAAAAAAAAAAAASQAJAAAAAeXpfs7hcTGUatCDcts1FKonxU0r3/eZpuG7rFSm3DFy9m3nCVJN8vEpJX52LGBFnM4qZbLzFTdq+zcsFT9tKrB09ZR2NSu72Vtm57zTq2l6a3+iZvvffifqaNFbXKU3+HViv7pFRRpXK/YzWs9jT2np6CzTl6Hp6I0zTrTjBNqTkklqs1SeHyOvR+IlSqRqQdpQkpRfNfEjXr5Wz7OuVxUsTqKc4yaUdkVnayzy57PImppx0ldJznJXkrZ36/dXLfY8ju509OrXnGpqNqOtGUVa2s7OPlde83bSmiaE4yqOCTSbvDw3dvvJZMw+xY3/Jzb18PGodo6bp/XRvKX3Vklyvtb5nXie09HD0vs+zu7RcpN3e3NbbbSuaPaqpHN04t8taKv0uePpHG1cRLWqSu1sWyK46q3bF6Fs+vrn5Rr2cyfq3DE9pKMpOTrKTd73Ut/wMV6coO/BLg0arSwonSew1/Gyxvtaq5+wug8Ni8PHEy1pXlNal7RWq7Z2zeVn5m44TQGFpVHVp4ajCo/vxpxU/KVro0nuVxl6Feg3nTqRklynHVfvpv1LHLzEz0x1u67oACVQAAAABAAAAAAAAAAAAAAAABIAAAAAABSPevj/aaQnTvlRpUoW5y+sb9KkfQ0+LRINc9K1Mzz2swCaRvHdVG9eru8Eef3v+Cy9LJqlNJ7nd8iAY67Xj57hsXkZdCJANYpWbGIcEAXQ2zunxvs9Iam6tTqx81aom/9DXmXWAY67WgACqQAACAAAAAAACAAB//Z"
                                                    class="mx-auto object-cover rounded-full h-10 w-10 " />
                                            </a>
                                        </div>
                                        <div class="mr-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                علي كريم
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        هندسة الحاسبات
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        DF343W
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        الصباحية
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        22/01/2021
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        22/01/2021
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            مستمر
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div>
                                        <a href="#" class="text-blue-600 hover:text-indigo-900">
                                            تعديل
                                        </a>
                                        |
                                        <a href="#" class="text-red-600 hover:text-indigo-900">
                                            حذف
                                        </a>

                                    </div>
                                </td>
                            </tr>
                                
                            @endfor

                        </tbody>
                    </table>
                    <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                        <div class="flex items-center">
                            <button type="button"
                                class="w-full p-4 border text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 border text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                1
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                2
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                3
                            </button>
                            <button type="button"
                                class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                4
                            </button>

                            <button type="button"
                                class="w-full p-4 border-t border-b border-l text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @include('layout.navbar')


@endsection
