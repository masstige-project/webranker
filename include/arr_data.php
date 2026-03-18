<?

$site_title = "웹랭커"; 

$P_lang = "ko"; 

$P_company_name = "매스티지"; 

$P_addr1 = "서울 강서구 등촌동 629-6, 더리브아너비즈타워 11층";
$P_addr2 = "";

$P_tel1 = "";
$P_tel2 = "";

$P_fax1 = "";
$P_fax2 = "";

$P_email1 = "";
$P_email2 = "";

$P_business_no = "123-12-12345";  

$nav_alert = "알림내역";
$nav_login = "로그인";

// 네비게이션 메뉴명
$nav_1 = "홈";
$nav_2 = "투표하기";
$nav_3 = "웹랭킹";
$nav_3_1 = "전체";
$nav_3_2 = "연도별";
$nav_3_3 = "월별";
$nav_4 = "웹랭커";
$nav_4_1 = "주간 순위정보";
$nav_5 = "커뮤니티";
$nav_5_1 = "리소스";
$nav_5_2 = "Q&A";
$nav_5_3 = "자유";
$nav_5_4 = "디지털 인사이트";
$nav_6 = "서비스 소개";

$nav_policy = "홈페이지 정책";
$nav_policy_1 = "개인정보처리방침";
$nav_policy_2 = "이용약관";
$nav_policy_3 = "이메일무단수집거부";

// 네비게이션 하이퍼링크
$nav_1_href = "../main/main.html";
$nav_2_href = "../vote/vote_list.html";
$nav_3_href = "../ranking/ranking_list.html";
$nav_3_1_href = "../ranking/ranking_list.html";
$nav_3_2_href = "../ranking/ranking_list.html?type=year";
$nav_3_3_href = "../ranking/ranking_list.html?type=month";
$nav_4_href = "../web_ranker/web_ranker_list.html";
$nav_4_1_href = "../web_ranker/web_ranker_list.html";
$nav_5_href = "../community/community.html";
$nav_5_1_href = "../community/community.html?tab=resource";
$nav_5_2_href = "../community/community.html?tab=qa";
$nav_5_3_href = "../community/community.html?tab=free";
$nav_5_4_href = "../community/community.html?tab=insight";
$nav_6_href = "../service/service_intro.html";

// 검색 결과용 — 카테고리별 (사용자 선정 웹 랭킹)
$search_web_ranking_cards = [
    ['label' => '엔터테인먼트', 'title' => '와이피얼라이언스', 'type' => 'agency', 'name' => '매스티지', 'view' => 123, 'comment' => 45, 'desc' => '엔터테인먼트 웹 서비스'],
    ['label' => 'IT서비스', 'title' => '예손커뮤니케이션', 'type' => 'freelancer', 'name' => '예손커뮤니케이션', 'view' => 88, 'comment' => 12, 'desc' => 'IT 커뮤니케이션'],
    ['label' => '통신', 'title' => '웰랑', 'type' => 'agency', 'name' => '거인소프트', 'view' => 200, 'comment' => 30, 'desc' => '통신 서비스'],
    ['label' => '뷰티', 'title' => '톰 THOME', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 150, 'comment' => 20, 'desc' => '뷰티 브랜드'],
    ['label' => '쇼핑', 'title' => '카카오쇼핑', 'type' => 'agency', 'name' => '카카오', 'view' => 400, 'comment' => 90, 'desc' => '카카오 연계 쇼핑'],
    ['label' => '금융', 'title' => '토스', 'type' => 'agency', 'name' => '토스', 'view' => 500, 'comment' => 100, 'desc' => '금융 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
    ['label' => '소셜', 'title' => '인스타그램', 'type' => 'freelancer', 'name' => '매스티지', 'view' => 180, 'comment' => 60, 'desc' => '소셜 앱'],
];
// 월간 웹 랭커 순위
$search_web_ranker_monthly_cards = [
    ['title' => '와이피얼라이언스', 'type' => 'agency', 'desc' => '브랜드 아이덴티티와 사용자 경험을 중심으로 기획된 프로젝트입니다.'],
    ['title' => '카카오뱅크 리뉴얼', 'type' => 'freelancer', 'desc' => '카카오뱅크 스타일의 모던 뱅킹 UI 레퍼런스입니다.'],
    ['title' => '웰랑', 'type' => 'agency', 'desc' => '통신사 웹 디자인 사례입니다.'],
    ['title' => '네이버 웹툰', 'type' => 'agency', 'desc' => '콘텐츠 플랫폼 UI입니다.'],
    ['title' => '멜론 뮤직', 'type' => 'freelancer', 'desc' => '뮤직 스트리밍 서비스 UI입니다.'],
    ['title' => '쿠팡', 'type' => 'agency', 'desc' => '이커머스 앱·웹 디자인 사례입니다.'],
];
// 디자이너 선정 주간 모바일 랭킹
$search_mobile_ranking_cards = [
    ['title' => '카카오톡 채널', 'type' => 'agency', 'desc' => '모바일 메신저 연동 서비스 디자인입니다.'],
    ['title' => '배달의민족', 'type' => 'freelancer', 'desc' => '푸드 딜리버리 앱 UI입니다.'],
    ['title' => '야놀자', 'type' => 'agency', 'desc' => '여행 예약 모바일 앱입니다.'],
    ['title' => '토스', 'type' => 'agency', 'desc' => '간편 송금 앱 인터페이스입니다.'],
    ['title' => '인스타그램', 'type' => 'agency', 'desc' => '소셜 미디어 모바일 UI입니다.'],
    ['title' => '유튜브', 'type' => 'freelancer', 'desc' => '동영상 플랫폼 앱 디자인입니다.'],
];
// 디자인 인사이트
$search_insight_cards = [
    ['title' => '카카오 디자인 시스템 분석', 'desc' => '카카오 스타일 가이드와 컴포넌트 구조를 살펴봅니다.', 'name' => '매스티지', 'date' => '2026.01.15', 'tag' => 'uiux'],
    ['title' => '디자인 시스템 속도 올리는 피그마 플러그인', 'desc' => 'Figma 플러그인 모음', 'name' => '매스티지', 'date' => '2026.01.01', 'tag' => 'design'],
    ['title' => '사용자 리서치 기초 가이드', 'desc' => 'UX 리서치 실무 팁', 'name' => '예손커뮤니케이션', 'date' => '2026.01.02', 'tag' => 'uiux'],
    ['title' => '인터랙션 디자인 트렌드', 'desc' => '2026 모션 디자인', 'name' => '거인소프트', 'date' => '2026.01.03', 'tag' => 'design'],
    ['title' => '타이포그래피 선택 가이드', 'desc' => '웹·앱 폰트 선정 방법', 'name' => '매스티지', 'date' => '2026.01.04', 'tag' => 'design'],
    ['title' => '접근성 디자인 체크리스트', 'desc' => 'WCAG 기준 실전 적용', 'name' => '오늘의인테리어디자인', 'date' => '2026.01.05', 'tag' => 'uiux'],
];

?>
