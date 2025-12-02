<?php
/**
 * FV画像取得ヘルパー関数
 *
 * @package Portfolio
 */

if ( ! function_exists( 'portfolio_get_image_url' ) ) {
	/**
	 * カスタマイザーから画像URLを取得
	 *
	 * @param string $setting_name カスタマイザーの設定名
	 * @param string $size 画像サイズ
	 * @return string|false 画像URL、取得できない場合はfalse
	 */
	function portfolio_get_image_url( $setting_name, $size = 'full' ) {
		$image_id = get_theme_mod( $setting_name );
		if ( ! $image_id ) {
			return false;
		}
		$image_url = wp_get_attachment_image_url( $image_id, $size );
		return $image_url ? $image_url : false;
	}
}

if ( ! function_exists( 'portfolio_get_page_fv_image_id' ) ) {
	/**
	 * ページのFV画像IDを取得
	 * 優先順位: ACFオプションページ > カスタマイザー > アイキャッチ画像
	 *
	 * @return int|false 画像ID、取得できない場合はfalse
	 */
	function portfolio_get_page_fv_image_id() {
		// アーカイブページの場合
		if ( is_post_type_archive( 'project' ) ) {
			// ACFオプションページから取得
			$fv_image_id = get_field( 'fv_image_project_archive', 'option' );
			if ( $fv_image_id ) {
				if ( is_array( $fv_image_id ) ) {
					return isset( $fv_image_id['ID'] ) ? $fv_image_id['ID'] : false;
				}
				if ( is_numeric( $fv_image_id ) ) {
					return (int) $fv_image_id;
				}
			}
		}

		// 通常のページの場合
		if ( is_page() ) {
			// ACFフィールドから取得
			$fv_image_id = get_field( 'fv_image' );
			if ( $fv_image_id ) {
				if ( is_array( $fv_image_id ) ) {
					return isset( $fv_image_id['ID'] ) ? $fv_image_id['ID'] : false;
				}
				if ( is_numeric( $fv_image_id ) ) {
					return (int) $fv_image_id;
				}
			}
		}

		// カスタマイザーの設定を取得
		$fv_image_id = get_theme_mod( 'fv_background_image' );
		if ( $fv_image_id && is_numeric( $fv_image_id ) ) {
			return (int) $fv_image_id;
		}

		// アイキャッチ画像を取得
		if ( has_post_thumbnail() ) {
			return get_post_thumbnail_id();
		}

		return false;
	}
}

if ( ! function_exists( 'portfolio_get_page_fv_image' ) ) {
	/**
	 * ページのFV画像URLを取得
	 * 優先順位: ACFフィールド > カスタマイザー > アイキャッチ画像
	 *
	 * @param string $size 画像サイズ
	 * @return string|false 画像URL、取得できない場合はfalse
	 */
	function portfolio_get_page_fv_image( $size = 'full' ) {
		$image_id = portfolio_get_page_fv_image_id();
		if ( ! $image_id ) {
			return false;
		}
		$image_url = wp_get_attachment_image_url( $image_id, $size );
		return $image_url ? $image_url : false;
	}
}


