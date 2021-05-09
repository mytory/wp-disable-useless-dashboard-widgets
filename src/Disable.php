<?php
namespace Mytory\WpDisableUselessDashboardWidgets;
/**
 * Mytory Board의 확장팩 성격의 좋아요 모듈.
 * Class MytoryLike
 */
class Disable {
	public function __construct() {
		add_action( 'wp_dashboard_setup', [ $this, 'disable' ] );
	}

	public function disable() {
        // PHP 버전업 경고
		remove_meta_box( 'dashboard_php_nag', 'dashboard', 'normal' );

		// 사이트 건강 체크
		remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );

		// 워드프레스 이벤트와 뉴스
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    }
}
