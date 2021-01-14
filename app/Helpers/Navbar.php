<?php

use App\Entities\Category;
use App\Entities\Post;
use App\Entities\Project;

function navbarMenuItemsDefinition()
{
    // dd($arrItem);
    return [
        [
            'label' => 'Nhà đất bán',
            'route_name' => 'posts.get.posts',
            'parameter' => 'nha-dat-ban',
            'items' => (function () {
                $items = [];
                $categorySellHouse = Category::whereSlug(Post::SELL_HOUSE)->first();
                $categories = Category::query()->where('destination_entity', Post::class)->where('parent_id',$categorySellHouse->id)->get();
                foreach ($categories as $category) {
                    $items[] = [
                        'label' => $category->name,
                        'route_name' => 'posts.get.posts',
                        'parameter' => ['categorySlug' => $category->slug],
                        'items' => [],
                    ];
                }

                return $items;
            })()    
        ],
        [
            'label' => 'Nhà đất cho thuê',
            'route_name' => 'posts.get.posts',
            'parameter' => 'nha-dat-cho-thue',
            'items' => (function () {
                $items = [];
                $categorySellHouse = Category::whereSlug(Post::LEASE_HOUSE)->first();
                $categories = Category::query()->where('destination_entity', Post::class)->where('parent_id',$categorySellHouse->id)->get();
                foreach ($categories as $category) {
                    $items[] = [
                        'label' => $category->name,
                        'route_name' => 'posts.get.posts',
                        'parameter' => ['categorySlug' => $category->slug],
                        'items' => [],
                    ];
                }

                return $items;
            })()    
        ],
        [
            'label' => 'Dự án',
            'parameter' => '',
            'route_name' => 'pages.project.project_landing',
            'items' => (function () {
                $items = [];
                $categories = Category::query()->where('destination_entity', Project::class)->get();
                foreach ($categories as $category) {
                    $items[] = [
                        'label' => $category->name,
                        'route_name' => 'pages.project.show_projects_in_category',
                        'parameter' => ['categorySlug' => $category->slug],
                        'items' => [],
                    ];
                }

                return $items;
            })(),
        ],
        [
            'label' => 'Cần mua - Cần thuê',
            'route_name' => '',
            'parameter' => '',
            'items' => [
                [
                    'label' => 'Nhà đất cần mua',
                    'route_name' => '',
                    'parameter' => 'nha-dat-can-mua',
                    'items' => (function () {
                        $items = [];
                        $categorySellHouse = Category::whereSlug(Post::HOUSE_BUY)->first();
                        $categories = Category::query()->where('destination_entity', Post::class)->where('parent_id',$categorySellHouse->id)->get();
                        foreach ($categories as $category) {
                            $items[] = [
                                'label' => $category->name,
                                'route_name' => 'posts.get.posts',
                                'parameter' => ['categorySlug' => $category->slug],
                                'items' => [],
                            ];
                        }
        
                        return $items;
                    })()
                ],
                [
                    'label' => 'Nhà đất cần thuê',
                    'route_name' => '',
                    'parameter' => 'nha-dat-can-thue',
                    'items' => (function () {
                        $items = [];
                        $categorySellHouse = Category::whereSlug(Post::HOUSE_RENT)->first();
                        $categories = Category::query()->where('destination_entity', Post::class)->where('parent_id',$categorySellHouse->id)->get();
                        foreach ($categories as $category) {
                            $items[] = [
                                'label' => $category->name,
                                'route_name' => 'posts.get.posts',
                                'parameter' => ['categorySlug' => $category->slug],
                                'items' => [],
                            ];
                        }
        
                        return $items;
                    })() 
                ],
            ],
        ],
        [
            'label' => 'Tin tức',
            'route_name' => 'news.index',
            'parameter' => '',
            'items' => [
                [
                    'label' => 'BĐS & Covid-19',
                    'route_name' => 'category.show',
                    'parameter' => 'bds-covid-19',
                    'items' => []
                ],
                [
                    'label' => 'Tin thị trường',
                    'parameter' => 'tin-thi-truong',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Interaktive Story',
                    'parameter' => 'interaktivestory',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Phân tích - Nhận định',
                    'parameter' => 'phan-tich-nhan-dinh',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Chính sách - Quản lý',
                    'parameter' => 'chinh-sach-quan-ly',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Thông tin quy hoạch',
                    'parameter' => 'thong-tin-quy-hoach',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Bất động sản thế giới',
                    'parameter' => 'bds-the-gioi',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Tài chính - Chứng khoán - BĐS',
                    'parameter' => 'tai-chinh-chung-khoan-bds',
                    'route_name' => 'category.show',
                    'items' => []
                ],
                [
                    'label' => 'Tư vấn luật',
                    'parameter' => 'tu-van-luat',
                    'route_name' => 'category.show',
                    'items' => [
                        [
                            'label' => 'Trình tự, thủ tục',
                            'parameter' => 'trinh-tu-thu-tuc',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Quyền sở hữu',
                            'parameter' => 'quyen-so-huu',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Tranh chấp',
                            'parameter' => 'tranh-chap',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Xây dựng - Hoàn công',
                            'parameter' => 'xay-dung-hoan-cong',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Nghĩa vụ tài chính',
                            'parameter' => 'nghia-vu-tai-chinh',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Các vấn đề có yếu tố nước ngoài',
                            'parameter' => 'cac-van-de-co-yeu-to-nuoc-ngoai',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                    ]
                ],
                [
                    'label' => 'Lời khuyên',
                    'parameter' => 'loi-khuyen',
                    'route_name' => 'category.show',
                    'items' => [
                        [
                            'label' => 'Lời khuyên cho người mua',
                            'parameter' => 'loi-khuyen-cho-nguoi-mua',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Lời khuyên cho người bán',
                            'parameter' => 'loi-khuyen-cho-nguoi-ban',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Lời khuyên cho nhà đầu tư',
                            'parameter' => 'loi-khuyen-cho-nha-dau-tu',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Lời khuyên cho người thuê',
                            'parameter' => 'loi-khuyen-cho-nguoi-thue',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                        [
                            'label' => 'Lời khuyên cho người cho thuê',
                            'parameter' => 'loi-khuyen-cho-nguoi-cho-thue',
                            'route_name' => 'category.show',
                            'items' => []
                        ],
                    ]
                ],
            ],
        ],

        [
            'label' => 'Nội - Ngoại thất',
            'route_name' => '',
            'parameter' => '',
            'items' => [
                [
                    'label' => 'Nội thất',
                    'route_name' => '',
                    'parameter' => '',
                    'items' => [
                        [
                            'label' => 'Toàn cảnh ngôi nhà',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phòng khách',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phòng ngủ',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phòng bếp',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phòng tắm',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phòng trẻ em',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Nội thất văn phòng',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Khách sạn, Nhà hàng, Showroom',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                    ]
                ],
                [
                    'label' => 'Ngoại thất',
                    'route_name' => '',
                    'parameter' => '',
                    'items' => []
                ],
                [
                    'label' => 'Xây dựng',
                    'route_name' => '',
                    'parameter' => '',
                    'items' => [
                        [
                            'label' => 'Vật liệu xây dựng',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Kiến thức xây dựng',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Giải pháp xây dựng',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                    ]
                ],
                [
                    'label' => 'Kiến trúc',
                    'route_name' => '',
                    'parameter' => '',
                    'items' => [
                        [
                            'label' => 'Tư vấn thiết kế',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Kiến trúc xưa và nay',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Thế giới kiến trúc',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Nhà đẹp',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Thư viện mẫu nhà',
                            'route_name' => '',
                            'parameter' => '',
                            'items' => [
                                [
                                    'label' => 'Nhà phố',
                                    'route_name' => '',
                                    'parameter' => '',
                                    'items' => []
                                ],
                                [
                                    'label' => 'Biệt thự',
                                    'route_name' => '',
                                    'parameter' => '',
                                    'items' => []
                                ],
                                [
                                    'label' => 'Chung cư',
                                    'route_name' => '',
                                    'parameter' => '',
                                    'items' => []
                                ],
                                [
                                    'label' => 'Văn phòng',
                                    'route_name' => '',
                                    'parameter' => '',
                                    'items' => []
                                ],
                            ]
                        ],
                    ]
                ],
                [
                    'label' => 'Tư vấn nội ngoại thất',
                    'route_name' => '',
                    'items' => []
                ],
                [
                    'label' => 'Mách bạn',
                    'route_name' => '',
                    'items' => []
                ],
                [
                    'label' => 'Mua sắm',
                    'route_name' => '',
                    'items' => []
                ],
            ],
        ],

        [
            'label' => 'Phong thủy',
            'route_name' => '',
            'items' => [
                [
                    'label' => 'Phong thủy toàn cảnh',
                    'route_name' => '',
                    'items' => []
                ],
                [
                    'label' => 'Tư vấn phong thủy',
                    'route_name' => '',
                    'items' => []
                ],
                [
                    'label' => 'Phong thủy nhà ở',
                    'route_name' => '',
                    'items' => [
                        [
                            'label' => 'Phong thủy phòng ngủ',
                            'route_name' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phong thủy phòng khách',
                            'route_name' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phong thủy phòng bếp',
                            'route_name' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phong thủy phòng tắm',
                            'route_name' => '',
                            'items' => []
                        ],
                        [
                            'label' => 'Phong thủy cửa chính, sân vườn',
                            'route_name' => '',
                            'items' => []
                        ],
                    ]
                ],
                [
                    'label' => 'Phong thủy văn phòng',
                    'route_name' => '',
                    'items' => []
                ],
                [
                    'label' => 'Phong thủy theo tuổi',
                    'route_name' => '',
                    'items' => []
                ],
            ],
        ],

        [
            'label' => 'Danh bạ',
            'route_name' => '',
            'items' => [
                [
                    'label' => 'Nhà môi giới',
                    'route_name' => '',
                    'items' => []
                ],
                [
                    'label' => 'Doanh nghiệp',
                    'route_name' => '',
                    'items' => []
                ],
            ],
        ],
    ];
}
