<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Adv' instanceof Think\Model\AdvModel,
			'Mongo' instanceof Think\Model\MongoModel,
			'View' instanceof Think\Model\ViewModel,
			'Relation' instanceof Think\Model\RelationModel,
			'Banner' instanceof Admin\Model\BannerModel,
			'AboutUs' instanceof Admin\Model\AboutUsModel,
			'AdminRule' instanceof Admin\Model\AdminRuleModel,
			'AdminModule' instanceof Admin\Model\AdminModuleModel,
			'Scgf' instanceof Admin\Model\ScgfModel,
			'Admin' instanceof Admin\Model\AdminModel,
			'Merge' instanceof Think\Model\MergeModel,
			'Test' instanceof Admin\Model\TestModel,
		],
	];
}