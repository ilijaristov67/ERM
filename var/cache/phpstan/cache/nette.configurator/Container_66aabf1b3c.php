<?php
// source: phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level6.neon
// source: /home/ilijaristov67/projects/expense_management_backend/phpstan.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_66aabf1b3c extends _PHPStan_1611a8848\Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'017' => true,
			'0202' => true,
			'0208' => true,
			'0220' => true,
			'0227' => true,
			'0239' => true,
			'0252' => true,
			'0281' => true,
			'0290' => true,
			'0304' => true,
			'0334' => true,
			'0689' => true,
			'0690' => true,
			'0691' => true,
			'0692' => true,
			'0693' => true,
			'0694' => true,
			'0695' => true,
			'0696' => true,
			'0697' => true,
			'0698' => true,
			'0699' => true,
			'0729' => true,
			'0730' => true,
			'0731' => true,
			'0732' => true,
			'0733' => true,
			'0735' => true,
			'0741' => true,
			'0743' => true,
			'0744' => true,
			'0745' => true,
			'0746' => true,
			'0747' => true,
			'0748' => true,
			'0749' => true,
			'0757' => true,
			'0758' => true,
			'0759' => true,
			'0760' => true,
			'0780' => true,
			'0781' => true,
			'0810' => true,
			'0811' => true,
			'0812' => true,
			'0813' => true,
			'0814' => true,
			'0815' => true,
			'0816' => true,
			'0830' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['026' => true, '027' => true],
		'phpstan.parser.richParserNodeVisitor' => [
			'052' => true,
			'053' => true,
			'054' => true,
			'055' => true,
			'056' => true,
			'058' => true,
			'059' => true,
			'060' => true,
			'061' => true,
			'062' => true,
			'063' => true,
			'064' => true,
			'065' => true,
			'066' => true,
			'067' => true,
			'068' => true,
			'069' => true,
			'070' => true,
			'071' => true,
			'072' => true,
			'073' => true,
			'074' => true,
		],
		'phpstan.stubFilesExtension' => ['081' => true, '084' => true, '086' => true, '087' => true, '0795' => true],
		'phpstan.rules.rule' => [
			'094' => true,
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0362' => true,
			'0363' => true,
			'0364' => true,
			'0365' => true,
			'0366' => true,
			'0367' => true,
			'0368' => true,
			'0369' => true,
			'0370' => true,
			'0371' => true,
			'0372' => true,
			'0373' => true,
			'0374' => true,
			'0375' => true,
			'0376' => true,
			'0377' => true,
			'0378' => true,
			'0379' => true,
			'0380' => true,
			'0381' => true,
			'0382' => true,
			'0383' => true,
			'0384' => true,
			'0385' => true,
			'0386' => true,
			'0387' => true,
			'0388' => true,
			'0389' => true,
			'0390' => true,
			'0391' => true,
			'0392' => true,
			'0393' => true,
			'0394' => true,
			'0395' => true,
			'0396' => true,
			'0397' => true,
			'0398' => true,
			'0399' => true,
			'0400' => true,
			'0401' => true,
			'0402' => true,
			'0403' => true,
			'0404' => true,
			'0405' => true,
			'0406' => true,
			'0407' => true,
			'0408' => true,
			'0409' => true,
			'0410' => true,
			'0411' => true,
			'0412' => true,
			'0413' => true,
			'0414' => true,
			'0415' => true,
			'0416' => true,
			'0417' => true,
			'0418' => true,
			'0419' => true,
			'0420' => true,
			'0421' => true,
			'0422' => true,
			'0423' => true,
			'0424' => true,
			'0425' => true,
			'0426' => true,
			'0427' => true,
			'0428' => true,
			'0429' => true,
			'0430' => true,
			'0431' => true,
			'0432' => true,
			'0433' => true,
			'0434' => true,
			'0435' => true,
			'0436' => true,
			'0437' => true,
			'0438' => true,
			'0439' => true,
			'0440' => true,
			'0441' => true,
			'0442' => true,
			'0443' => true,
			'0444' => true,
			'0445' => true,
			'0446' => true,
			'0447' => true,
			'0448' => true,
			'0449' => true,
			'0450' => true,
			'0451' => true,
			'0452' => true,
			'0453' => true,
			'0454' => true,
			'0455' => true,
			'0456' => true,
			'0457' => true,
			'0458' => true,
			'0459' => true,
			'0460' => true,
			'0461' => true,
			'0462' => true,
			'0463' => true,
			'0464' => true,
			'0465' => true,
			'0466' => true,
			'0467' => true,
			'0468' => true,
			'0469' => true,
			'0470' => true,
			'0471' => true,
			'0472' => true,
			'0473' => true,
			'0474' => true,
			'0475' => true,
			'0476' => true,
			'0477' => true,
			'0478' => true,
			'0479' => true,
			'0480' => true,
			'0481' => true,
			'0482' => true,
			'0483' => true,
			'0484' => true,
			'0485' => true,
			'0486' => true,
			'0487' => true,
			'0488' => true,
			'0489' => true,
			'0490' => true,
			'0491' => true,
			'0492' => true,
			'0493' => true,
			'0494' => true,
			'0495' => true,
			'0496' => true,
			'0497' => true,
			'0498' => true,
			'0499' => true,
			'0500' => true,
			'0501' => true,
			'0502' => true,
			'0503' => true,
			'0504' => true,
			'0505' => true,
			'0506' => true,
			'0507' => true,
			'0508' => true,
			'0509' => true,
			'0510' => true,
			'0511' => true,
			'0512' => true,
			'0513' => true,
			'0514' => true,
			'0515' => true,
			'0516' => true,
			'0517' => true,
			'0518' => true,
			'0519' => true,
			'0520' => true,
			'0521' => true,
			'0522' => true,
			'0523' => true,
			'0524' => true,
			'0525' => true,
			'0526' => true,
			'0527' => true,
			'0528' => true,
			'0529' => true,
			'0530' => true,
			'0531' => true,
			'0532' => true,
			'0533' => true,
			'0534' => true,
			'0535' => true,
			'0536' => true,
			'0537' => true,
			'0538' => true,
			'0539' => true,
			'0540' => true,
			'0541' => true,
			'0542' => true,
			'0543' => true,
			'0544' => true,
			'0545' => true,
			'0546' => true,
			'0547' => true,
			'0548' => true,
			'0549' => true,
			'0550' => true,
			'0551' => true,
			'0552' => true,
			'0553' => true,
			'0554' => true,
			'0555' => true,
			'0556' => true,
			'0557' => true,
			'0558' => true,
			'0559' => true,
			'0560' => true,
			'0561' => true,
			'0562' => true,
			'0563' => true,
			'0564' => true,
			'0565' => true,
			'0566' => true,
			'0567' => true,
			'0568' => true,
			'0569' => true,
			'0570' => true,
			'0571' => true,
			'0572' => true,
			'0573' => true,
			'0574' => true,
			'0575' => true,
			'0576' => true,
			'0577' => true,
			'0578' => true,
			'0579' => true,
			'0580' => true,
			'0581' => true,
			'0582' => true,
			'0583' => true,
			'0584' => true,
			'0585' => true,
			'0586' => true,
			'0587' => true,
			'0588' => true,
			'0589' => true,
			'0590' => true,
			'0591' => true,
			'0592' => true,
			'0593' => true,
			'0594' => true,
			'0595' => true,
			'0596' => true,
			'0597' => true,
			'0598' => true,
			'0599' => true,
			'0600' => true,
			'0601' => true,
			'0602' => true,
			'0603' => true,
			'0604' => true,
			'0605' => true,
			'0606' => true,
			'0607' => true,
			'0608' => true,
			'0609' => true,
			'0610' => true,
			'0611' => true,
			'0612' => true,
			'0613' => true,
			'0614' => true,
			'0615' => true,
			'0616' => true,
			'0617' => true,
			'0618' => true,
			'0619' => true,
			'0620' => true,
			'0621' => true,
			'0622' => true,
			'0623' => true,
			'0624' => true,
			'0625' => true,
			'0626' => true,
			'0627' => true,
			'0628' => true,
			'0629' => true,
			'0630' => true,
			'0631' => true,
			'0632' => true,
			'0633' => true,
			'0634' => true,
			'0635' => true,
			'0636' => true,
			'0637' => true,
			'0638' => true,
			'0639' => true,
			'0640' => true,
			'0641' => true,
			'0642' => true,
			'0643' => true,
			'0644' => true,
			'0645' => true,
			'0646' => true,
			'0647' => true,
			'0648' => true,
			'0649' => true,
			'0650' => true,
			'0651' => true,
			'0652' => true,
			'0653' => true,
			'0654' => true,
			'0655' => true,
			'0656' => true,
			'0657' => true,
			'0710' => true,
			'0711' => true,
			'0712' => true,
			'0773' => true,
			'0774' => true,
			'0775' => true,
			'0777' => true,
			'0791' => true,
			'0792' => true,
			'0793' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.2' => true,
			'rules.3' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0167' => true,
			'0168' => true,
			'0170' => true,
			'0172' => true,
			'0175' => true,
			'0177' => true,
			'0178' => true,
			'0179' => true,
			'0180' => true,
			'0183' => true,
			'0185' => true,
			'0186' => true,
			'0189' => true,
			'0190' => true,
			'0191' => true,
			'0194' => true,
			'0197' => true,
			'0198' => true,
			'0199' => true,
			'0201' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0213' => true,
			'0218' => true,
			'0219' => true,
			'0222' => true,
			'0224' => true,
			'0225' => true,
			'0226' => true,
			'0227' => true,
			'0228' => true,
			'0229' => true,
			'0231' => true,
			'0235' => true,
			'0237' => true,
			'0238' => true,
			'0240' => true,
			'0241' => true,
			'0242' => true,
			'0243' => true,
			'0244' => true,
			'0245' => true,
			'0247' => true,
			'0248' => true,
			'0249' => true,
			'0251' => true,
			'0254' => true,
			'0255' => true,
			'0256' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0262' => true,
			'0264' => true,
			'0265' => true,
			'0266' => true,
			'0268' => true,
			'0269' => true,
			'0270' => true,
			'0271' => true,
			'0273' => true,
			'0274' => true,
			'0275' => true,
			'0276' => true,
			'0277' => true,
			'0279' => true,
			'0283' => true,
			'0284' => true,
			'0285' => true,
			'0286' => true,
			'0287' => true,
			'0288' => true,
			'0289' => true,
			'0291' => true,
			'0292' => true,
			'0296' => true,
			'0299' => true,
			'0300' => true,
			'0303' => true,
			'0305' => true,
			'0308' => true,
			'0310' => true,
			'0311' => true,
			'0312' => true,
			'0313' => true,
			'0314' => true,
			'0316' => true,
			'0317' => true,
			'0318' => true,
			'0319' => true,
			'0321' => true,
			'0322' => true,
			'0323' => true,
			'0325' => true,
			'0326' => true,
			'0329' => true,
			'0332' => true,
			'0333' => true,
			'0751' => true,
			'0752' => true,
			'0753' => true,
			'0754' => true,
			'0755' => true,
			'0756' => true,
			'0765' => true,
			'0766' => true,
			'0767' => true,
			'0768' => true,
			'0818' => true,
			'0819' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0171' => true,
			'0184' => true,
			'0187' => true,
			'0188' => true,
			'0195' => true,
			'0200' => true,
			'0223' => true,
			'0230' => true,
			'0233' => true,
			'0234' => true,
			'0257' => true,
			'0267' => true,
			'0272' => true,
			'0278' => true,
			'0293' => true,
			'0297' => true,
			'0298' => true,
			'0306' => true,
			'0309' => true,
			'0327' => true,
			'0761' => true,
			'0762' => true,
			'0763' => true,
			'0764' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0174' => true,
			'0193' => true,
			'0258' => true,
			'0295' => true,
			'0302' => true,
			'0304' => true,
			'0328' => true,
			'0736' => true,
			'0737' => true,
			'0738' => true,
			'0739' => true,
			'0740' => true,
			'0742' => true,
			'0769' => true,
			'0782' => true,
			'0817' => true,
		],
		'phpstan.broker.operatorTypeSpecifyingExtension' => ['0176' => true],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0181' => true,
			'0182' => true,
			'0196' => true,
			'0221' => true,
			'0253' => true,
			'0263' => true,
			'0294' => true,
			'0320' => true,
		],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'0212' => true,
			'0726' => true,
			'0727' => true,
			'0728' => true,
			'0734' => true,
		],
		'phpstan.functionParameterClosureTypeExtension' => ['0216' => true],
		'phpstan.functionParameterOutTypeExtension' => ['0217' => true, '0301' => true, '0330' => true],
		'phpstan.dynamicMethodThrowTypeExtension' => ['0232' => true, '0236' => true, '0282' => true],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0246' => true, '0307' => true, '0324' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0331' => true],
		'phpstan.diagnoseExtension' => ['0355' => true],
		'phpstan.collector' => [
			'0658' => true,
			'0659' => true,
			'0660' => true,
			'0661' => true,
			'0662' => true,
			'0663' => true,
			'0664' => true,
			'0665' => true,
			'0666' => true,
			'0797' => true,
			'0798' => true,
			'0799' => true,
			'0800' => true,
			'0801' => true,
			'0806' => true,
			'0807' => true,
			'0808' => true,
		],
		'phpstan.broker.methodsClassReflectionExtension' => [
			'0715' => true,
			'0716' => true,
			'0717' => true,
			'0718' => true,
			'0719' => true,
			'0720' => true,
			'0721' => true,
			'0722' => true,
			'0723' => true,
			'0724' => true,
			'0725' => true,
		],
		'phpstan.phpDoc.typeNodeResolverExtension' => [
			'0770' => true,
			'0771' => true,
			'0779' => true,
			'0783' => true,
			'0784' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_1611a8848\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_1611a8848\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'094',
				'095',
				'096',
				'097',
				'098',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0139',
				'0688',
				'0700',
				'0701',
				'0702',
				'0703',
				'0704',
				'0710',
				'0711',
				'0712',
				'0713',
				'0714',
				'0772',
				'0773',
				'0774',
				'0775',
				'0776',
				'0777',
				'0778',
				'0791',
				'0792',
				'0793',
				'0796',
				'0805',
				'0831',
				'0832',
				'0833',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'0362',
				'0363',
				'0364',
				'0365',
				'0366',
				'0367',
				'0368',
				'0369',
				'0370',
				'0371',
				'0372',
				'0373',
				'0374',
				'0375',
				'0376',
				'0377',
				'0378',
				'0379',
				'0380',
				'0381',
				'0382',
				'0383',
				'0384',
				'0385',
				'0386',
				'0387',
				'0388',
				'0389',
				'0390',
				'0391',
				'0392',
				'0393',
				'0394',
				'0395',
				'0396',
				'0397',
				'0398',
				'0399',
				'0400',
				'0401',
				'0402',
				'0403',
				'0404',
				'0405',
				'0406',
				'0407',
				'0408',
				'0409',
				'0410',
				'0411',
				'0412',
				'0413',
				'0414',
				'0415',
				'0416',
				'0417',
				'0418',
				'0419',
				'0420',
				'0421',
				'0422',
				'0423',
				'0424',
				'0425',
				'0426',
				'0427',
				'0428',
				'0429',
				'0430',
				'0431',
				'0432',
				'0433',
				'0434',
				'0435',
				'0436',
				'0437',
				'0438',
				'0439',
				'0440',
				'0441',
				'0442',
				'0443',
				'0444',
				'0445',
				'0446',
				'0447',
				'0448',
				'0449',
				'0450',
				'0451',
				'0452',
				'0453',
				'0454',
				'0455',
				'0456',
				'0457',
				'0458',
				'0459',
				'0460',
				'0461',
				'0462',
				'0463',
				'0464',
				'0465',
				'0466',
				'0467',
				'0468',
				'0469',
				'0470',
				'0471',
				'0472',
				'0473',
				'0474',
				'0475',
				'0476',
				'0477',
				'0478',
				'0479',
				'0480',
				'0481',
				'0482',
				'0483',
				'0484',
				'0485',
				'0486',
				'0487',
				'0488',
				'0489',
				'0490',
				'0491',
				'0492',
				'0493',
				'0494',
				'0495',
				'0496',
				'0497',
				'0498',
				'0499',
				'0500',
				'0501',
				'0502',
				'0503',
				'0504',
				'0505',
				'0506',
				'0507',
				'0508',
				'0509',
				'0510',
				'0511',
				'0512',
				'0513',
				'0514',
				'0515',
				'0516',
				'0517',
				'0518',
				'0519',
				'0520',
				'0521',
				'0522',
				'0523',
				'0524',
				'0525',
				'0526',
				'0527',
				'0528',
				'0529',
				'0530',
				'0531',
				'0532',
				'0533',
				'0534',
				'0535',
				'0536',
				'0537',
				'0538',
				'0539',
				'0540',
				'0541',
				'0542',
				'0543',
				'0544',
				'0545',
				'0546',
				'0547',
				'0548',
				'0549',
				'0550',
				'0551',
				'0552',
				'0553',
				'0554',
				'0555',
				'0556',
				'0557',
				'0558',
				'0559',
				'0560',
				'0561',
				'0562',
				'0563',
				'0564',
				'0565',
				'0566',
				'0567',
				'0568',
				'0569',
				'0570',
				'0571',
				'0572',
				'0573',
				'0574',
				'0575',
				'0576',
				'0577',
				'0578',
				'0579',
				'0580',
				'0581',
				'0582',
				'0583',
				'0584',
				'0585',
				'0586',
				'0587',
				'0588',
				'0589',
				'0590',
				'0591',
				'0592',
				'0593',
				'0594',
				'0595',
				'0596',
				'0597',
				'0598',
				'0599',
				'0600',
				'0601',
				'0602',
				'0603',
				'0604',
				'0605',
				'0606',
				'0607',
				'0608',
				'0609',
				'0610',
				'0611',
				'0612',
				'0613',
				'0614',
				'0615',
				'0616',
				'0617',
				'0618',
				'0619',
				'0620',
				'0621',
				'0622',
				'0623',
				'0624',
				'0625',
				'0626',
				'0627',
				'0628',
				'0629',
				'0630',
				'0631',
				'0632',
				'0633',
				'0634',
				'0635',
				'0636',
				'0637',
				'0638',
				'0639',
				'0640',
				'0641',
				'0642',
				'0643',
				'0644',
				'0645',
				'0646',
				'0647',
				'0648',
				'0649',
				'0650',
				'0651',
				'0652',
				'0653',
				'0654',
				'0655',
				'0656',
				'0657',
			],
		],
		'Larastan\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule' => [['rules.0']],
		'Larastan\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule' => [['rules.1']],
		'Larastan\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule' => [['rules.2']],
		'Larastan\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule' => [['rules.3']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['01']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['02']],
		'PHPStan\Dependency\DependencyResolver' => [['03']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\FuzzyRelativePathHelper' => [['relativePathHelper']],
		'PHPStan\File\FileExcluderFactory' => [['04']],
		'PHPStan\File\FileHelper' => [['05']],
		'PHPStan\File\FileMonitor' => [['06']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['07']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['010'], ['08', '09']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['08']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['09']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['011']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['012']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['013']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory' => [['014']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['015']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['betterReflectionReflector'],
			2 => [1 => 'originalBetterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			0 => ['betterReflectionReflector'],
			2 => [1 => 'nodeScopeResolverReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['016']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'017',
				'0202',
				'0208',
				'0220',
				'0227',
				'0239',
				'0252',
				'0281',
				'0290',
				'0304',
				'0334',
				'0689',
				'0690',
				'0691',
				'0692',
				'0693',
				'0694',
				'0695',
				'0696',
				'0697',
				'0698',
				'0699',
				'0729',
				'0730',
				'0731',
				'0732',
				'0733',
				'0735',
				'0741',
				'0743',
				'0744',
				'0745',
				'0746',
				'0747',
				'0748',
				'0749',
				'0757',
				'0758',
				'0759',
				'0760',
				'0780',
				'0781',
				'0810',
				'0811',
				'0812',
				'0813',
				'0814',
				'0815',
				'0816',
				'0825',
				'0830',
			],
		],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension' => [['017']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['018']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['019']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['020']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['021']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['022']],
		'PHPStan\Reflection\Deprecation\DeprecationProvider' => [['023']],
		'PHPStan\Reflection\AttributeReflectionFactory' => [['024']],
		'PHPStan\Reflection\ConstructorsHelper' => [['025']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['026', '027']],
		'PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension' => [['026']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['027']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['028']],
		'PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider' => [['028']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\Analyser\Analyser' => [['029']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['030']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['031']],
		'PHPStan\Analyser\LocalIgnoresProcessor' => [['032']],
		'PHPStan\Analyser\IgnoreErrorExtensionProvider' => [['033']],
		'PHPStan\Analyser\RicherScopeGetTypeHelper' => [['034']],
		'PHPStan\Analyser\NodeScopeResolver' => [['035']],
		'PHPStan\Analyser\FileAnalyser' => [['036']],
		'PHPStan\Analyser\ScopeFactory' => [['037']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\AnalyserResultFinalizer' => [['038']],
		'PHPStan\Analyser\InternalScopeFactory' => [['039']],
		'PHPStan\Analyser\LazyInternalScopeFactory' => [['039']],
		'PHPStan\Analyser\ConstantResolver' => [['040']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\Analyser\Ignore\IgnoreLexer' => [['041']],
		'PHPStan\Analyser\Ignore\IgnoredErrorHelper' => [['042']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['043']],
		'PHPStan\Cache\Cache' => [['044']],
		'PHPStan\Command\FixerApplication' => [['045']],
		'PHPStan\Command\AnalyserRunner' => [['046']],
		'PHPStan\Command\AnalyseApplication' => [['047']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.github',
				'errorFormatter.junit',
				'errorFormatter.checkstyle',
				'errorFormatter.gitlab',
				'errorFormatter.teamcity',
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
			['048'],
		],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['048']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['049']],
		'PhpParser\PrettyPrinter\Standard' => [1 => ['050']],
		'PhpParser\PrettyPrinterAbstract' => [1 => ['050']],
		'PhpParser\PrettyPrinter' => [1 => ['050']],
		'PHPStan\Node\Printer\Printer' => [['050']],
		'PHPStan\Node\Printer\ExprPrinter' => [['051']],
		'PhpParser\NodeVisitorAbstract' => [
			[
				'052',
				'053',
				'054',
				'055',
				'056',
				'058',
				'059',
				'060',
				'061',
				'062',
				'063',
				'064',
				'065',
				'066',
				'067',
				'068',
				'069',
				'070',
				'071',
				'072',
				'073',
				'074',
				'0668',
				'0677',
				'0678',
			],
		],
		'PhpParser\NodeVisitor' => [
			[
				'052',
				'053',
				'054',
				'055',
				'056',
				'058',
				'059',
				'060',
				'061',
				'062',
				'063',
				'064',
				'065',
				'066',
				'067',
				'068',
				'069',
				'070',
				'071',
				'072',
				'073',
				'074',
				'0668',
				'0677',
				'0678',
			],
		],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['052']],
		'PHPStan\Parser\VariadicFunctionsVisitor' => [['053']],
		'PHPStan\Parser\ArrayFindArgVisitor' => [['054']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['055']],
		'PHPStan\Parser\ImplodeArgVisitor' => [['056']],
		'PHPStan\Parser\LexerFactory' => [['057']],
		'PHPStan\Parser\ClosureBindToVarVisitor' => [['058']],
		'PHPStan\Parser\ImmediatelyInvokedClosureVisitor' => [['059']],
		'PHPStan\Parser\MagicConstantParamDefaultVisitor' => [['060']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['061']],
		'PHPStan\Parser\DeclarePositionVisitor' => [['062']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['063']],
		'PHPStan\Parser\AnonymousClassVisitor' => [['064']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['065']],
		'PHPStan\Parser\VariadicMethodsVisitor' => [['066']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['067']],
		'PHPStan\Parser\ClosureArgVisitor' => [['068']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['069']],
		'PHPStan\Parser\ClosureBindArgVisitor' => [['070']],
		'PHPStan\Parser\LastConditionVisitor' => [['071']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['072']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['073']],
		'PHPStan\Parser\StandaloneThrowExprVisitor' => [['074']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['075']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['076']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['077']],
		'PHPStan\PhpDoc\StubValidator' => [['078']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['079']],
		'PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider' => [['079']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['080']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['080']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['081', '084', '086', '087', '0795']],
		'PHPStan\PhpDoc\SocketSelectStubFilesExtension' => [['081']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['082']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['083']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['084']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['085']],
		'PHPStan\PhpDoc\ReflectionClassStubFilesExtension' => [['086']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\PhpDoc\ReflectionEnumStubFilesExtension' => [['087']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['088']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['089']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['089']],
		'PHPStan\Rules\Properties\AccessPropertiesCheck' => [['090']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['091']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['092']],
		'PHPStan\Rules\ClassForbiddenNameCheck' => [['093']],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['094']],
		'PHPStan\Rules\Debug\DumpPhpDocTypeRule' => [['095']],
		'PHPStan\Rules\Debug\DumpNativeTypeRule' => [['096']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['097']],
		'PHPStan\Rules\Debug\DebugScopeRule' => [['098']],
		'PHPStan\Rules\ClassNameCheck' => [['099']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0100']],
		'PHPStan\Rules\AttributesCheck' => [['0101']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0102']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0103']],
		'PHPStan\Rules\Pure\FunctionPurityCheck' => [['0104']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0105']],
		'PHPStan\Rules\Functions\PrintfHelper' => [['0106']],
		'PHPStan\Rules\RuleLevelHelper' => [['0107']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0108']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0109']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeCheck' => [['0110']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0111']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0112']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0113']],
		'PHPStan\Rules\ParameterCastableToStringCheck' => [['0114']],
		'PHPStan\Rules\Methods\AlwaysUsedMethodExtensionProvider' => [['0115']],
		'PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider' => [['0115']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0116']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0117']],
		'PHPStan\Rules\Methods\MethodPrototypeFinder' => [['0118']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0119']],
		'PHPStan\Rules\Methods\MethodVisibilityComparisonHelper' => [['0120']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0121']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0121']],
		'PHPStan\Rules\TooWideTypehints\TooWideTypeCheck' => [['0122']],
		'PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck' => [['0123']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0124']],
		'PHPStan\Rules\Classes\MethodTagCheck' => [['0125']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0126']],
		'PHPStan\Rules\Classes\MixinCheck' => [['0127']],
		'PHPStan\Rules\Classes\ConsistentConstructorHelper' => [['0128']],
		'PHPStan\Rules\Classes\PropertyTagCheck' => [['0129']],
		'PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule' => [['0130']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule' => [['0131']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule' => [['0132']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule' => [['0133']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule' => [['0134']],
		'PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule' => [['0135']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule' => [['0136']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule' => [['0137']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule' => [['0138']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule' => [['0139']],
		'PHPStan\Rules\PhpDoc\GenericCallableRuleHelper' => [['0140']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0141']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0142']],
		'PHPStan\Rules\PhpDoc\RequireExtendsCheck' => [['0143']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck' => [['0144']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0145']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0146']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0147']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0148']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0149']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0150'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0150']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0151']],
		'PHPStan\Rules\NullsafeCheck' => [['0152']],
		'PHPStan\Rules\IssetCheck' => [['0153']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0154']],
		'PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper' => [['0155']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0156']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0157']],
		'PHPStan\Fixable\PhpDoc\PhpDocEditor' => [['0158']],
		'PHPStan\Fixable\Patcher' => [['0159']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0160']],
		'PHPStan\Type\LazyTypeAliasResolverProvider' => [['0160']],
		'PHPStan\Type\ClosureTypeFactory' => [['0161']],
		'PHPStan\Type\TypeAliasResolver' => [['0162']],
		'PHPStan\Type\UsefulTypeAliasResolver' => [['0162']],
		'PHPStan\Type\Regex\RegexGroupParser' => [['0163']],
		'PHPStan\Type\Regex\RegexExpressionHelper' => [['0164']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0165']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['0166']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0167',
				'0168',
				'0170',
				'0172',
				'0175',
				'0177',
				'0178',
				'0179',
				'0180',
				'0183',
				'0185',
				'0186',
				'0189',
				'0190',
				'0191',
				'0194',
				'0197',
				'0198',
				'0199',
				'0201',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0209',
				'0210',
				'0211',
				'0213',
				'0218',
				'0219',
				'0222',
				'0224',
				'0225',
				'0226',
				'0227',
				'0228',
				'0229',
				'0231',
				'0235',
				'0237',
				'0238',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0247',
				'0248',
				'0249',
				'0251',
				'0254',
				'0255',
				'0256',
				'0259',
				'0260',
				'0261',
				'0262',
				'0264',
				'0265',
				'0266',
				'0268',
				'0269',
				'0270',
				'0271',
				'0273',
				'0274',
				'0275',
				'0276',
				'0277',
				'0279',
				'0283',
				'0284',
				'0285',
				'0286',
				'0287',
				'0288',
				'0289',
				'0291',
				'0292',
				'0296',
				'0299',
				'0300',
				'0303',
				'0305',
				'0308',
				'0310',
				'0311',
				'0312',
				'0313',
				'0314',
				'0316',
				'0317',
				'0318',
				'0319',
				'0321',
				'0322',
				'0323',
				'0325',
				'0326',
				'0329',
				'0332',
				'0333',
				'0751',
				'0752',
				'0753',
				'0754',
				'0755',
				'0756',
				'0765',
				'0766',
				'0767',
				'0768',
				'0818',
				'0819',
				'0824',
				'0829',
			],
		],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0167']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\DateFunctionReturnTypeHelper' => [['0169']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0170']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0171',
				'0184',
				'0187',
				'0188',
				'0195',
				'0200',
				'0223',
				'0230',
				'0233',
				'0234',
				'0257',
				'0267',
				'0272',
				'0278',
				'0293',
				'0297',
				'0298',
				'0306',
				'0309',
				'0327',
				'0761',
				'0762',
				'0763',
				'0764',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0171',
				'0184',
				'0187',
				'0188',
				'0195',
				'0200',
				'0223',
				'0230',
				'0233',
				'0234',
				'0257',
				'0267',
				'0272',
				'0278',
				'0288',
				'0293',
				'0297',
				'0298',
				'0306',
				'0309',
				'0327',
				'0331',
				'0761',
				'0762',
				'0763',
				'0764',
			],
		],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0171']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\RegexArrayShapeMatcher' => [['0173']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			[
				'0174',
				'0193',
				'0258',
				'0295',
				'0302',
				'0304',
				'0328',
				'0736',
				'0737',
				'0738',
				'0739',
				'0740',
				'0742',
				'0769',
				'0782',
				'0817',
				'0826',
			],
		],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0174']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0175']],
		'PHPStan\Type\OperatorTypeSpecifyingExtension' => [['0176']],
		'PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension' => [['0176']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0178']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0179']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0180']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['0181', '0182', '0196', '0221', '0253', '0263', '0294', '0320'],
		],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0181']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0182']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0184']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0185']],
		'PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension' => [['0186']],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0187']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0188']],
		'PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeHelper' => [['0192']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0195']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0196']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0197']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0198']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\PregMatchTypeSpecifyingExtension' => [['0200']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0202']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0203']],
		'PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension' => [['0204']],
		'PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension' => [['0205']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0206']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension' => [['0207']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0208']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0211']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [
			['0212', '0681', '0682', '0684', '0726', '0727', '0728', '0734'],
		],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0212']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0214']],
		'PHPStan\Type\Php\ArrayColumnHelper' => [['0215']],
		'PHPStan\Type\FunctionParameterClosureTypeExtension' => [['0216']],
		'PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension' => [['0216']],
		'PHPStan\Type\FunctionParameterOutTypeExtension' => [['0217', '0301', '0330']],
		'PHPStan\Type\Php\ParseStrParameterOutTypeExtension' => [['0217']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0218']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0219']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0220']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0221']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0222']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0223']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0224']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0225']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0230']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0231']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['0232', '0236', '0282']],
		'PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension' => [['0232']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0233']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0234']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0235']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0236']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['0237']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0238']],
		'PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension' => [['0239']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0240']],
		'PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension' => [['0241']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0242']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0243']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0244']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0245']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0246', '0307', '0324']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0246']],
		'PHPStan\Type\Php\IdateFunctionReturnTypeExtension' => [['0247']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0248']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0249']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper' => [['0250']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0252']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0253']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0254']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0255']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0257']],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['0258']],
		'PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension' => [['0259']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0260']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0261']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0262']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0263']],
		'PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension' => [['0264']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0265']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0266']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0267']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0268']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0269']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0270']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0271']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0272']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0273']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0274']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0275']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0276']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0277']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0278']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0279']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0280']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0281']],
		'PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension' => [['0282']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0283']],
		'PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension' => [['0284']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0285']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0286']],
		'PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension' => [['0287']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0288']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0289']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0290']],
		'PHPStan\Type\Php\StrrevFunctionReturnTypeExtension' => [['0291']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0292']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0293']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0294']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0295']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0296']],
		'PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension' => [['0297']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0298']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0299']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0300']],
		'PHPStan\Type\Php\PregMatchParameterOutTypeExtension' => [['0301']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0302']],
		'PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension' => [['0303']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0304']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0305']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0306']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0307']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0308']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0309']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0310']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0311']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0312']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0313']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0314']],
		'PHPStan\Type\Php\ConstantHelper' => [['0315']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0316']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0317']],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0318']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0319']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0320']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['0321']],
		'PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension' => [['0322']],
		'PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension' => [['0323']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0324']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0325']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0326']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0327']],
		'PHPStan\Type\Php\PDOConnectReturnTypeExtension' => [['0328']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0329']],
		'PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension' => [['0330']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0331']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0331']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0332']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0333']],
		'PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension' => [['0334']],
		'PHPStan\Type\FileTypeMapper' => [0 => ['0335'], 2 => [1 => 'stubFileTypeMapper']],
		'PHPStan\Process\CpuCoreCounter' => [['0336']],
		'PHPStan\DependencyInjection\Container' => [['0340'], ['0337']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['0337']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['0338']],
		'PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider' => [['0338']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['0339']],
		'PHPStan\DependencyInjection\MemoizingContainer' => [['0340']],
		'PHPStan\DependencyInjection\Type\ParameterClosureTypeExtensionProvider' => [['0341']],
		'PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider' => [['0341']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['0342']],
		'PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider' => [['0342']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['0343']],
		'PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider' => [['0343']],
		'PHPStan\DependencyInjection\Type\ParameterOutTypeExtensionProvider' => [['0344']],
		'PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider' => [['0344']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['0345']],
		'PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider' => [['0345']],
		'PHPStan\DependencyInjection\Type\ParameterClosureThisExtensionProvider' => [['0346']],
		'PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider' => [['0346']],
		'PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider' => [['0347']],
		'PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider' => [['0347']],
		'PHPStan\Collectors\RegistryFactory' => [['0348']],
		'PHPStan\Collectors\Registry' => [['0349']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['0350']],
		'PHPStan\Php\PhpVersionFactory' => [['0351']],
		'PHPStan\Php\PhpVersion' => [['0352']],
		'PHPStan\Php\ComposerPhpVersionFactory' => [['0353']],
		'PHPStan\Parallel\ParallelAnalyser' => [['0354']],
		'PHPStan\Diagnose\DiagnoseExtension' => [0 => ['0355'], 2 => [1 => 'phpstanDiagnoseExtension']],
		'PHPStan\Parallel\Scheduler' => [['0355']],
		'PHPStan\File\SimpleRelativePathHelper' => [2 => ['simpleRelativePathHelper']],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [0 => ['reflectionProvider'], 2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\File\FileExcluderRawFactory' => [['0356']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['0357']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['0358']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['0359']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['0360']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['0361']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [['0362']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0363']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [['0364']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['0365']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [['0366']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0367']],
		'PHPStan\Rules\Properties\PropertiesInInterfaceRule' => [['0368']],
		'PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule' => [['0369']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule' => [['0370']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0371']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [['0372']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0373']],
		'PHPStan\Rules\Properties\MissingPropertyTypehintRule' => [['0374']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['0375']],
		'PHPStan\Rules\Properties\PropertyAssignRefRule' => [['0376']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule' => [['0377']],
		'PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule' => [['0378']],
		'PHPStan\Rules\Properties\NullsafePropertyFetchRule' => [['0379']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [['0380']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule' => [['0381']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule' => [['0382']],
		'PHPStan\Rules\Properties\PropertyHookAttributesRule' => [['0383']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['0384']],
		'PHPStan\Rules\Properties\SetPropertyHookParameterRule' => [['0385']],
		'PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule' => [['0386']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule' => [['0387']],
		'PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule' => [['0388']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0389']],
		'PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule' => [['0390']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['0391']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['0392']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0393']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule' => [['0394']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['0395']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0396']],
		'PHPStan\Rules\Properties\PropertyInClassRule' => [['0397']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0398']],
		'PHPStan\Rules\Regexp\RegularExpressionQuotingRule' => [['0399']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule' => [['0400']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0401']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0402']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [['0403']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0404']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule' => [['0405']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0406']],
		'PHPStan\Rules\Comparison\MatchExpressionRule' => [['0407']],
		'PHPStan\Rules\Comparison\ConstantLooseComparisonRule' => [['0408']],
		'PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule' => [['0409']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0410']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0411']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0412']],
		'PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule' => [['0413']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0414']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0415']],
		'PHPStan\Rules\Comparison\LogicalXorConstantConditionRule' => [['0416']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0417']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0418']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0419']],
		'PHPStan\Rules\Pure\PureMethodRule' => [['0420']],
		'PHPStan\Rules\Pure\PureFunctionRule' => [['0421']],
		'PHPStan\Rules\Cast\VoidCastRule' => [['0422']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [['0423']],
		'PHPStan\Rules\Cast\PrintRule' => [['0424']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [['0425']],
		'PHPStan\Rules\Cast\EchoRule' => [['0426']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['0427']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [['0428']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0429']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0430']],
		'PHPStan\Rules\Variables\ParameterOutAssignedTypeRule' => [['0431']],
		'PHPStan\Rules\Variables\EmptyRule' => [['0432']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0433']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['0434']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0435']],
		'PHPStan\Rules\Variables\IssetRule' => [['0436']],
		'PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule' => [['0437']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [['0438']],
		'PHPStan\Rules\Variables\UnsetRule' => [['0439']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['0440']],
		'PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule' => [['0441']],
		'PHPStan\Rules\DeadCode\NoopRule' => [['0442']],
		'PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule' => [['0443']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['0444']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0445']],
		'PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule' => [['0446']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [['0447']],
		'PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule' => [['0448']],
		'PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule' => [['0449']],
		'PHPStan\Rules\Functions\RandomIntParametersRule' => [['0450']],
		'PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule' => [['0451']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['0452']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0453']],
		'PHPStan\Rules\Functions\RedefinedParametersRule' => [['0454']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['0455']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['0456']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [['0457']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [['0458']],
		'PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule' => [['0459']],
		'PHPStan\Rules\Functions\PrintfArrayParametersRule' => [['0460']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['0461']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['0462']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [['0463']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [['0464']],
		'PHPStan\Rules\Functions\SortParameterCastableToStringRule' => [['0465']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0466']],
		'PHPStan\Rules\Functions\ArrayValuesRule' => [['0467']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['0468']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['0469']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0470']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule' => [['0471']],
		'PHPStan\Rules\Functions\UselessFunctionReturnValueRule' => [['0472']],
		'PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule' => [['0473']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['0474']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['0475']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['0476']],
		'PHPStan\Rules\Functions\ArrayFilterRule' => [['0477']],
		'PHPStan\Rules\Functions\CallUserFuncRule' => [['0478']],
		'PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule' => [['0479']],
		'PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule' => [['0480']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['0481']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['0482']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['0483']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['0484']],
		'PHPStan\Rules\Functions\ParameterCastableToStringRule' => [['0485']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule' => [['0486']],
		'PHPStan\Rules\Functions\VariadicParametersDeclarationRule' => [['0487']],
		'PHPStan\Rules\Keywords\RequireFileExistsRule' => [['0488']],
		'PHPStan\Rules\Keywords\DeclareStrictTypesRule' => [['0489']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['0490']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [['0491']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [['0492']],
		'PHPStan\Rules\Generics\UsedTraitsRule' => [['0493']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [['0494']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [['0495']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule' => [['0496']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [['0497']],
		'PHPStan\Rules\Generics\EnumAncestorsRule' => [['0498']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [['0499']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [['0500']],
		'PHPStan\Rules\Generics\PropertyVarianceRule' => [['0501']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [['0502']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [['0503']],
		'PHPStan\Rules\Generics\EnumTemplateTypeRule' => [['0504']],
		'PHPStan\Rules\Generics\MethodTagTemplateTypeRule' => [['0505']],
		'PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule' => [['0506']],
		'PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule' => [['0507']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule' => [['0508']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0509']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [['0510']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [['0511']],
		'PHPStan\Rules\Methods\ConstructorReturnTypeRule' => [['0512']],
		'PHPStan\Rules\Methods\MissingMethodParameterTypehintRule' => [['0513']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['0514']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['0515']],
		'PHPStan\Rules\Methods\MissingMethodReturnTypehintRule' => [['0516']],
		'PHPStan\Rules\Methods\AbstractPrivateMethodRule' => [['0517']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0518']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['0519']],
		'PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule' => [['0520']],
		'PHPStan\Rules\Methods\MissingMethodSelfOutTypeRule' => [['0521']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule' => [['0522']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule' => [['0523']],
		'PHPStan\Rules\Methods\ConsistentConstructorRule' => [['0524']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['0525']],
		'PHPStan\Rules\Methods\NullsafeMethodCallRule' => [['0526']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0527']],
		'PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule' => [['0528']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['0529']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['0530']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule' => [['0531']],
		'PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule' => [['0532']],
		'PHPStan\Rules\Methods\FinalPrivateMethodRule' => [['0533']],
		'PHPStan\Rules\Constants\NativeTypedClassConstantRule' => [['0534']],
		'PHPStan\Rules\Constants\MagicConstantContextRule' => [['0535']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0536']],
		'PHPStan\Rules\Constants\MissingClassConstantTypehintRule' => [['0537']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['0538']],
		'PHPStan\Rules\Constants\ConstantRule' => [['0539']],
		'PHPStan\Rules\Constants\ClassAsClassConstantRule' => [['0540']],
		'PHPStan\Rules\Constants\ValueAssignedToClassConstantRule' => [['0541']],
		'PHPStan\Rules\Constants\FinalPrivateConstantRule' => [['0542']],
		'PHPStan\Rules\Constants\DynamicClassConstantFetchRule' => [['0543']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule' => [['0544']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [['0545']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [['0546']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0547']],
		'PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule' => [['0548']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [['0549']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule' => [['0550']],
		'PHPStan\Rules\Types\InvalidTypesInUnionRule' => [['0551']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0552']],
		'PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule' => [['0553']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [['0554']],
		'PHPStan\Rules\Classes\ReadOnlyClassRule' => [['0555']],
		'PHPStan\Rules\Classes\AllowedSubTypesRule' => [['0556']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['0557']],
		'PHPStan\Rules\Classes\PropertyTagTraitRule' => [['0558']],
		'PHPStan\Rules\Classes\PropertyTagRule' => [['0559']],
		'PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule' => [['0560']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['0561']],
		'PHPStan\Rules\Classes\RequireImplementsRule' => [['0562']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['0563']],
		'PHPStan\Rules\Classes\RequireExtendsRule' => [['0564']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['0565']],
		'PHPStan\Rules\Classes\MethodTagRule' => [['0566']],
		'PHPStan\Rules\Classes\MethodTagTraitUseRule' => [['0567']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['0568']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['0569']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['0570']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['0571']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['0572']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['0573']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['0574']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['0575']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['0576']],
		'PHPStan\Rules\Classes\MixinRule' => [['0577']],
		'PHPStan\Rules\Classes\MixinTraitRule' => [['0578']],
		'PHPStan\Rules\Classes\MethodTagTraitRule' => [['0579']],
		'PHPStan\Rules\Classes\MixinTraitUseRule' => [['0580']],
		'PHPStan\Rules\Classes\PropertyTagTraitUseRule' => [['0581']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0582']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['0583']],
		'PHPStan\Rules\Classes\LocalTypeTraitAliasesRule' => [['0584']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0585']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['0586']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['0587']],
		'PHPStan\Rules\PhpDoc\SealedDefinitionClassRule' => [['0588']],
		'PHPStan\Rules\PhpDoc\FunctionAssertRule' => [['0589']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0590']],
		'PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule' => [['0591']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule' => [['0592']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule' => [['0593']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [['0594']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [['0595']],
		'PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule' => [['0596']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [['0597']],
		'PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule' => [['0598']],
		'PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule' => [['0599']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule' => [['0600']],
		'PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule' => [['0601']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [['0602']],
		'PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule' => [['0603']],
		'PHPStan\Rules\PhpDoc\MethodAssertRule' => [['0604']],
		'PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule' => [['0605']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [['0606']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [['0607']],
		'PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule' => [['0608']],
		'PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule' => [['0609']],
		'PHPStan\Rules\Api\RuntimeReflectionFunctionRule' => [['0610']],
		'PHPStan\Rules\Api\ApiClassConstFetchRule' => [['0611']],
		'PHPStan\Rules\Api\ApiInstanceofTypeRule' => [['0612']],
		'PHPStan\Rules\Api\OldPhpParser4ClassRule' => [['0613']],
		'PHPStan\Rules\Api\RuntimeReflectionInstantiationRule' => [['0614']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['0615']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['0616']],
		'PHPStan\Rules\Api\GetTemplateTypeRule' => [['0617']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['0618']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['0619']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['0620']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['0621']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['0622']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['0623']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['0624']],
		'PHPStan\Rules\Api\ApiInstanceofRule' => [['0625']],
		'PHPStan\Rules\Exceptions\NoncapturingCatchRule' => [['0626']],
		'PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule' => [['0627']],
		'PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule' => [['0628']],
		'PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule' => [['0629']],
		'PHPStan\Rules\Exceptions\ThrowExprTypeRule' => [['0630']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['0631']],
		'PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule' => [['0632']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0633']],
		'PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule' => [['0634']],
		'PHPStan\Rules\Names\UsedNamesRule' => [['0635']],
		'PHPStan\Rules\Traits\ConflictingTraitConstantsRule' => [['0636']],
		'PHPStan\Rules\Traits\TraitAttributesRule' => [['0637']],
		'PHPStan\Rules\Traits\ConstantsInTraitsRule' => [['0638']],
		'PHPStan\Rules\Traits\NotAnalysedTraitRule' => [['0639']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0640']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [['0641']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [['0642']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0643']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['0644']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [['0645']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [['0646']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0647']],
		'PHPStan\Rules\Arrays\ArrayDestructuringRule' => [['0648']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0649']],
		'PHPStan\Rules\Arrays\ArrayUnpackingRule' => [['0650']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [['0651']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['0652']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [['0653']],
		'PHPStan\Rules\Ignore\IgnoreParseErrorRule' => [['0654']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['0655']],
		'PHPStan\Rules\DateTimeInstantiationRule' => [['0656']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['0657']],
		'PHPStan\Collectors\Collector' => [
			['0797', '0798', '0799', '0800', '0801', '0806', '0807', '0808'],
			['0658', '0659', '0660', '0661', '0662', '0663', '0664', '0665', '0666'],
		],
		'PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector' => [['0658']],
		'PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector' => [['0659']],
		'PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector' => [['0660']],
		'PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector' => [['0661']],
		'PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector' => [['0662']],
		'PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector' => [['0663']],
		'PHPStan\Rules\DeadCode\PossiblyPureNewCollector' => [['0664']],
		'PHPStan\Rules\Traits\TraitDeclarationCollector' => [['0665']],
		'PHPStan\Rules\Traits\TraitUseCollector' => [['0666']],
		'PhpParser\BuilderFactory' => [['0667']],
		'PhpParser\NodeVisitor\NameResolver' => [['0668']],
		'PHPStan\PhpDocParser\ParserConfig' => [['0669']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['0670']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['0671']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['0672']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['0673']],
		'PHPStan\PhpDocParser\Printer\Printer' => [['0674']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0675', '0676']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0675']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0676']],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [2 => ['originalBetterReflectionReflector']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['0677']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['0678']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['0679']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [
			[
				'0680',
				'0683',
				'0685',
				'0686',
				'0715',
				'0716',
				'0717',
				'0718',
				'0719',
				'0720',
				'0721',
				'0722',
				'0723',
				'0724',
				'0725',
			],
		],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['0680']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['0681']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['0682']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['0683']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['0684']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['0685']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension' => [['0686']],
		'PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension' => [['0687']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0688']],
		'PHPStan\Diagnose\PHPStanDiagnoseExtension' => [2 => ['phpstanDiagnoseExtension']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0689', '0690', '0691', '0692', '0693']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0694', '0695']],
		'PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension' => [['0696', '0697']],
		'PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension' => [
			['0698', '0699'],
		],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'php8Parser',
				'currentPhpVersionSimpleDirectParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionRichParser',
				'pathRoutingParser',
				'defaultAnalysisParser',
				'freshStubParser',
				'stubParser',
			],
		],
		'PHPStan\Parser\SimpleParser' => [2 => ['php8Parser', 'currentPhpVersionSimpleDirectParser']],
		'PhpParser\Lexer' => [2 => ['php8Lexer', 'currentPhpVersionLexer']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser']],
		'PhpParser\Parser' => [2 => ['php8PhpParser', 'currentPhpVersionPhpParser', 'phpParserDecorator']],
		'PhpParser\Parser\Php8' => [2 => ['php8PhpParser']],
		'PHPStan\Parser\PhpParserFactory' => [2 => ['currentPhpVersionPhpParserFactory']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser', 'stubParser']],
		'PHPStan\Parser\StubParser' => [2 => ['freshStubParser']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0700']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0701']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule' => [['0702']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0703']],
		'PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule' => [['0704']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageExtension' => [['0705']],
		'PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension' => [['0705']],
		'PHPStan\Rules\RestrictedUsage\RestrictedClassNameUsageExtension' => [['0706']],
		'PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension' => [['0706']],
		'PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageExtension' => [['0707']],
		'PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension' => [['0707']],
		'PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageExtension' => [['0708']],
		'PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension' => [['0708']],
		'PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageExtension' => [['0709']],
		'PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension' => [['0709']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0710']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0711']],
		'PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule' => [['0712']],
		'PHPStan\Rules\Functions\ParameterCastableToNumberRule' => [['0713']],
		'PHPStan\Rules\Functions\PrintfParameterTypeRule' => [['0714']],
		'Larastan\Larastan\Methods\RelationForwardsCallsExtension' => [['0715']],
		'Larastan\Larastan\Methods\ModelForwardsCallsExtension' => [['0716']],
		'Larastan\Larastan\Methods\EloquentBuilderForwardsCallsExtension' => [['0717']],
		'Larastan\Larastan\Methods\HigherOrderTapProxyExtension' => [['0718']],
		'Larastan\Larastan\Methods\HigherOrderCollectionProxyExtension' => [['0719']],
		'Larastan\Larastan\Methods\StorageMethodsClassReflectionExtension' => [['0720']],
		'Larastan\Larastan\Methods\Extension' => [['0721']],
		'Larastan\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension' => [['0722']],
		'Larastan\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension' => [['0723']],
		'Larastan\Larastan\Methods\MacroMethodsClassReflectionExtension' => [['0724']],
		'Larastan\Larastan\Methods\ViewWithMethodsClassReflectionExtension' => [['0725']],
		'Larastan\Larastan\Properties\ModelAccessorExtension' => [['0726']],
		'Larastan\Larastan\Properties\ModelPropertyExtension' => [['0727']],
		'Larastan\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension' => [['0728']],
		'Larastan\Larastan\ReturnTypes\HigherOrderTapProxyExtension' => [['0729']],
		'Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension' => [
			['0730', '0731', '0732', '0733'],
		],
		'Larastan\Larastan\Properties\ModelRelationsExtension' => [['0734']],
		'Larastan\Larastan\ReturnTypes\ModelOnlyDynamicMethodReturnTypeExtension' => [['0735']],
		'Larastan\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension' => [['0736']],
		'Larastan\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension' => [['0737']],
		'Larastan\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension' => [['0738']],
		'Larastan\Larastan\ReturnTypes\AuthExtension' => [['0739']],
		'Larastan\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension' => [['0740']],
		'Larastan\Larastan\ReturnTypes\AuthManagerExtension' => [['0741']],
		'Larastan\Larastan\ReturnTypes\DateExtension' => [['0742']],
		'Larastan\Larastan\ReturnTypes\GuardExtension' => [['0743']],
		'Larastan\Larastan\ReturnTypes\RequestFileExtension' => [['0744']],
		'Larastan\Larastan\ReturnTypes\RequestRouteExtension' => [['0745']],
		'Larastan\Larastan\ReturnTypes\RequestUserExtension' => [['0746']],
		'Larastan\Larastan\ReturnTypes\EloquentBuilderExtension' => [['0747']],
		'Larastan\Larastan\ReturnTypes\RelationCollectionExtension' => [['0748']],
		'Larastan\Larastan\ReturnTypes\TestCaseExtension' => [['0749']],
		'Larastan\Larastan\Support\CollectionHelper' => [['0750']],
		'Larastan\Larastan\ReturnTypes\Helpers\AuthExtension' => [['0751']],
		'Larastan\Larastan\ReturnTypes\Helpers\CollectExtension' => [['0752']],
		'Larastan\Larastan\ReturnTypes\Helpers\NowAndTodayExtension' => [['0753']],
		'Larastan\Larastan\ReturnTypes\Helpers\ResponseExtension' => [['0754']],
		'Larastan\Larastan\ReturnTypes\Helpers\ValidatorExtension' => [['0755']],
		'Larastan\Larastan\ReturnTypes\Helpers\LiteralExtension' => [['0756']],
		'Larastan\Larastan\ReturnTypes\CollectionFilterRejectDynamicReturnTypeExtension' => [['0757']],
		'Larastan\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension' => [['0758']],
		'Larastan\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension' => [['0759']],
		'Larastan\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension' => [['0760']],
		'Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension' => [['0761', '0762', '0763', '0764']],
		'Larastan\Larastan\ReturnTypes\Helpers\AppExtension' => [['0765']],
		'Larastan\Larastan\ReturnTypes\Helpers\ValueExtension' => [['0766']],
		'Larastan\Larastan\ReturnTypes\Helpers\StrExtension' => [['0767']],
		'Larastan\Larastan\ReturnTypes\Helpers\TapExtension' => [['0768']],
		'Larastan\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension' => [['0769']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['0770', '0771', '0779', '0783', '0784']],
		'Larastan\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension' => [['0770']],
		'Larastan\Larastan\Types\ViewStringTypeNodeResolverExtension' => [['0771']],
		'Larastan\Larastan\Rules\OctaneCompatibilityRule' => [['0772']],
		'Larastan\Larastan\Rules\NoEnvCallsOutsideOfConfigRule' => [['0773']],
		'Larastan\Larastan\Rules\NoModelMakeRule' => [['0774']],
		'Larastan\Larastan\Rules\NoUnnecessaryCollectionCallRule' => [['0775']],
		'Larastan\Larastan\Rules\NoUnnecessaryEnumerableToArrayCallsRule' => [['0776']],
		'Larastan\Larastan\Rules\ModelAppendsRule' => [['0777']],
		'Larastan\Larastan\Rules\NoPublicModelScopeAndAccessorRule' => [['0778']],
		'Larastan\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension' => [['0779']],
		'Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension' => [['0780', '0781']],
		'Larastan\Larastan\ReturnTypes\AppFacadeEnvironmentReturnTypeExtension' => [['0782']],
		'Larastan\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension' => [['0783']],
		'PHPStan\PhpDoc\TypeNodeResolverAwareExtension' => [['0784']],
		'Larastan\Larastan\Types\CollectionOf\CollectionOfTypeNodeResolverExtension' => [['0784']],
		'Larastan\Larastan\Properties\MigrationHelper' => [['0785']],
		'Larastan\Larastan\Properties\SquashedMigrationHelper' => [['0786']],
		'Larastan\Larastan\Properties\ModelCastHelper' => [['0787']],
		'Larastan\Larastan\Properties\ModelPropertyHelper' => [['0788']],
		'Larastan\Larastan\Rules\ModelRuleHelper' => [['0789']],
		'Larastan\Larastan\Methods\BuilderHelper' => [['0790']],
		'Larastan\Larastan\Rules\RelationExistenceRule' => [['0791']],
		'Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule' => [['0792', '0793']],
		'Larastan\Larastan\Properties\Schema\MySqlDataTypeToPhpTypeConverter' => [['0794']],
		'Larastan\Larastan\LarastanStubFilesExtension' => [['0795']],
		'Larastan\Larastan\Rules\UnusedViewsRule' => [['0796']],
		'Larastan\Larastan\Collectors\UsedViewFunctionCollector' => [['0797']],
		'Larastan\Larastan\Collectors\UsedEmailViewCollector' => [['0798']],
		'Larastan\Larastan\Collectors\UsedViewMakeCollector' => [['0799']],
		'Larastan\Larastan\Collectors\UsedViewFacadeMakeCollector' => [['0800']],
		'Larastan\Larastan\Collectors\UsedRouteFacadeViewCollector' => [['0801']],
		'Larastan\Larastan\Collectors\UsedViewInAnotherViewCollector' => [['0802']],
		'Larastan\Larastan\Support\ViewFileHelper' => [['0803']],
		'Larastan\Larastan\Support\ViewParser' => [['0804']],
		'Larastan\Larastan\Rules\NoMissingTranslationsRule' => [['0805']],
		'Larastan\Larastan\Collectors\UsedTranslationFunctionCollector' => [['0806']],
		'Larastan\Larastan\Collectors\UsedTranslationTranslatorCollector' => [['0807']],
		'Larastan\Larastan\Collectors\UsedTranslationFacadeCollector' => [['0808']],
		'Larastan\Larastan\Collectors\UsedTranslationViewCollector' => [['0809']],
		'Larastan\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension' => [['0810']],
		'Larastan\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension' => [['0811']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension' => [['0812']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension' => [['0813']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension' => [['0814']],
		'Larastan\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension' => [['0815']],
		'Larastan\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension' => [['0816']],
		'Larastan\Larastan\ReturnTypes\LangGetReturnTypeExtension' => [['0817']],
		'Larastan\Larastan\ReturnTypes\TransHelperReturnTypeExtension' => [['0818']],
		'Larastan\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension' => [['0819']],
		'Larastan\Larastan\ReturnTypes\AppMakeHelper' => [['0820']],
		'Larastan\Larastan\Internal\ConsoleApplicationResolver' => [['0821']],
		'Larastan\Larastan\Internal\ConsoleApplicationHelper' => [['0822']],
		'Larastan\Larastan\Support\HigherOrderCollectionProxyHelper' => [['0823']],
		'Larastan\Larastan\ReturnTypes\Helpers\ConfigFunctionDynamicFunctionReturnTypeExtension' => [['0824']],
		'Larastan\Larastan\ReturnTypes\ConfigRepositoryDynamicMethodReturnTypeExtension' => [['0825']],
		'Larastan\Larastan\ReturnTypes\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension' => [['0826']],
		'Larastan\Larastan\Support\ConfigParser' => [['0827']],
		'Larastan\Larastan\Internal\ConfigHelper' => [['0828']],
		'Larastan\Larastan\ReturnTypes\Helpers\EnvFunctionDynamicFunctionReturnTypeExtension' => [['0829']],
		'Larastan\Larastan\ReturnTypes\FormRequestSafeDynamicMethodReturnTypeExtension' => [['0830']],
		'Larastan\Larastan\Rules\NoAuthFacadeInRequestScopeRule' => [['0831']],
		'Larastan\Larastan\Rules\NoAuthHelperInRequestScopeRule' => [['0832']],
		'Larastan\Larastan\Rules\ConfigCollectionRule' => [['0833']],
		'Illuminate\Filesystem\Filesystem' => [['0834']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('0677'));
	}


	public function createService02(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('0335'),
			$this->getService('051')
		);
	}


	public function createService03(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('05'),
			$this->getService('reflectionProvider'),
			$this->getService('02'),
			$this->getService('0335')
		);
	}


	public function createService04(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory($this->getService('0356'), ['analyseAndScan' => [], 'analyse' => []]);
	}


	public function createService05(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/home/ilijaristov67/projects/expense_management_backend');
	}


	public function createService06(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor(
			$this->getService('fileFinderAnalyse'),
			$this->getService('fileFinderScan'),
			$this->getParameter('analysedPaths'),
			$this->getParameter('analysedPathsFromConfig'),
			[],
			[]
		);
	}


	public function createService07(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('040'),
			$this->getService('028'),
			$this->getService('0352'),
			$this->getService('0343'),
			$this->getService('0166'),
			false
		);
	}


	public function createService08(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('013'),
			$this->getService('07'),
			$this->getService('0352'),
			false
		);
	}


	public function createService09(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('08'),
			$this->getService('018'),
			$this->getService('0335'),
			$this->getService('0352'),
			$this->getService('07'),
			$this->getService('028')
		);
	}


	public function createService010(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('011')->create();
	}


	public function createService011(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('0352'),
			$this->getService('08'),
			$this->getService('09')
		);
	}


	public function createService012(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('010'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0335'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('024')
		);
	}


	public function createService013(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('083'));
	}


	public function createService014(): PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\ReflectionSourceStubberFactory(
			$this->getService('050'),
			$this->getService('0352')
		);
	}


	public function createService015(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('050'),
			$this->getService('0352')
		);
	}


	public function createService016(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0675'),
			$this->getService('0676'),
			$this->getService('022'),
			$this->getService('020'),
			$this->getService('019'),
			$this->getService('0358'),
			$this->getService('018'),
			[],
			[],
			$this->getParameter('analysedPaths'),
			['/home/ilijaristov67/projects/expense_management_backend'],
			$this->getParameter('analysedPathsFromConfig'),
			false,
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createService017(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService018(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('0678'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService019(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('020'),
			$this->getService('0358'),
			$this->getService('021'),
			$this->getService('0352')
		);
	}


	public function createService020(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('021'));
	}


	public function createService021(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('018'),
			$this->getService('fileFinderScan'),
			$this->getService('0352'),
			$this->getService('044')
		);
	}


	public function createService022(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('0357'));
	}


	public function createService023(): PHPStan\Reflection\Deprecation\DeprecationProvider
	{
		return new PHPStan\Reflection\Deprecation\DeprecationProvider($this->getService('0340'));
	}


	public function createService024(): PHPStan\Reflection\AttributeReflectionFactory
	{
		return new PHPStan\Reflection\AttributeReflectionFactory($this->getService('07'), $this->getService('028'));
	}


	public function createService025(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper($this->getService('0340'), []);
	}


	public function createService026(): PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\SealedAllowedSubTypesClassReflectionExtension;
	}


	public function createService027(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService028(): PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('0340'));
	}


	public function createService029(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('036'),
			$this->getService('registry'),
			$this->getService('0349'),
			$this->getService('035'),
			50
		);
	}


	public function createService030(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer($this->getService('currentPhpVersionPhpParser'));
	}


	public function createService031(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan/resultCache.php');
	}


	public function createService032(): PHPStan\Analyser\LocalIgnoresProcessor
	{
		return new PHPStan\Analyser\LocalIgnoresProcessor;
	}


	public function createService033(): PHPStan\Analyser\IgnoreErrorExtensionProvider
	{
		return new PHPStan\Analyser\IgnoreErrorExtensionProvider($this->getService('0340'));
	}


	public function createService034(): PHPStan\Analyser\RicherScopeGetTypeHelper
	{
		return new PHPStan\Analyser\RicherScopeGetTypeHelper($this->getService('07'), $this->getService('091'));
	}


	public function createService035(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('07'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('0338'),
			$this->getService('0344'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0335'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0352'),
			$this->getService('010'),
			$this->getService('023'),
			$this->getService('024'),
			$this->getService('085'),
			$this->getService('05'),
			$this->getService('typeSpecifier'),
			$this->getService('0342'),
			$this->getService('089'),
			$this->getService('0346'),
			$this->getService('0341'),
			$this->getService('037'),
			true,
			true,
			true,
			[],
			['abort', 'dd'],
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			true,
			true
		);
	}


	public function createService036(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('037'),
			$this->getService('035'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('03'),
			$this->getService('033'),
			$this->getService('030'),
			$this->getService('032')
		);
	}


	public function createService037(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('039'));
	}


	public function createService038(): PHPStan\Analyser\AnalyserResultFinalizer
	{
		return new PHPStan\Analyser\AnalyserResultFinalizer(
			$this->getService('registry'),
			$this->getService('033'),
			$this->getService('030'),
			$this->getService('037'),
			$this->getService('032'),
			true
		);
	}


	public function createService039(): PHPStan\Analyser\LazyInternalScopeFactory
	{
		return new PHPStan\Analyser\LazyInternalScopeFactory($this->getService('0340'));
	}


	public function createService040(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('043')->create();
	}


	public function createService041(): PHPStan\Analyser\Ignore\IgnoreLexer
	{
		return new PHPStan\Analyser\Ignore\IgnoreLexer;
	}


	public function createService042(): PHPStan\Analyser\Ignore\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\Ignore\IgnoredErrorHelper($this->getService('05'), [], true);
	}


	public function createService043(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('028'), $this->getService('0340'));
	}


	public function createService044(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService045(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('06'),
			$this->getService('042'),
			$this->getService('080'),
			$this->getParameter('analysedPaths'),
			'/home/ilijaristov67/projects/expense_management_backend',
			($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
			['1.1.1.2'],
			['/home/ilijaristov67/projects/expense_management_backend'],
			[
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level6.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/home/ilijaristov67/projects/expense_management_backend/phpstan.neon',
				'/home/ilijaristov67/projects/expense_management_backend/vendor/larastan/larastan/extension.neon',
			],
			null,
			[
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/home/ilijaristov67/projects/expense_management_backend/vendor/larastan/larastan/bootstrap.php',
			],
			null,
			'6'
		);
	}


	public function createService046(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('0355'),
			$this->getService('029'),
			$this->getService('0354'),
			$this->getService('0336')
		);
	}


	public function createService047(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('046'),
			$this->getService('038'),
			$this->getService('078'),
			$this->getService('0361'),
			$this->getService('042'),
			$this->getService('080')
		);
	}


	public function createService048(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService049(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('05'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService050(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService051(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('050'));
	}


	public function createService052(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService053(): PHPStan\Parser\VariadicFunctionsVisitor
	{
		return new PHPStan\Parser\VariadicFunctionsVisitor;
	}


	public function createService054(): PHPStan\Parser\ArrayFindArgVisitor
	{
		return new PHPStan\Parser\ArrayFindArgVisitor;
	}


	public function createService055(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService056(): PHPStan\Parser\ImplodeArgVisitor
	{
		return new PHPStan\Parser\ImplodeArgVisitor;
	}


	public function createService057(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('0352'));
	}


	public function createService058(): PHPStan\Parser\ClosureBindToVarVisitor
	{
		return new PHPStan\Parser\ClosureBindToVarVisitor;
	}


	public function createService059(): PHPStan\Parser\ImmediatelyInvokedClosureVisitor
	{
		return new PHPStan\Parser\ImmediatelyInvokedClosureVisitor;
	}


	public function createService060(): PHPStan\Parser\MagicConstantParamDefaultVisitor
	{
		return new PHPStan\Parser\MagicConstantParamDefaultVisitor;
	}


	public function createService061(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService062(): PHPStan\Parser\DeclarePositionVisitor
	{
		return new PHPStan\Parser\DeclarePositionVisitor;
	}


	public function createService063(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService064(): PHPStan\Parser\AnonymousClassVisitor
	{
		return new PHPStan\Parser\AnonymousClassVisitor;
	}


	public function createService065(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService066(): PHPStan\Parser\VariadicMethodsVisitor
	{
		return new PHPStan\Parser\VariadicMethodsVisitor;
	}


	public function createService067(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService068(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService069(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService070(): PHPStan\Parser\ClosureBindArgVisitor
	{
		return new PHPStan\Parser\ClosureBindArgVisitor;
	}


	public function createService071(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService072(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService073(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService074(): PHPStan\Parser\StandaloneThrowExprVisitor
	{
		return new PHPStan\Parser\StandaloneThrowExprVisitor;
	}


	public function createService075(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('077'), $this->getService('076'), $this->getService('0141'));
	}


	public function createService076(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver($this->getService('028'), $this->getService('07'));
	}


	public function createService077(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('079'),
			$this->getService('028'),
			$this->getService('0160'),
			$this->getService('040'),
			$this->getService('07')
		);
	}


	public function createService078(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('0339'));
	}


	public function createService079(): PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('0340'));
	}


	public function createService080(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('0340'),
			[
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/file.stub',
			],
			['/home/ilijaristov67/projects/expense_management_backend']
		);
	}


	public function createService081(): PHPStan\PhpDoc\SocketSelectStubFilesExtension
	{
		return new PHPStan\PhpDoc\SocketSelectStubFilesExtension($this->getService('0352'));
	}


	public function createService082(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('0670'), $this->getService('0673'));
	}


	public function createService083(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('0670'), $this->getService('0671'), $this->getService('077'));
	}


	public function createService084(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('0352'));
	}


	public function createService085(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0335'), $this->getService('stubPhpDocProvider'));
	}


	public function createService086(): PHPStan\PhpDoc\ReflectionClassStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionClassStubFilesExtension($this->getService('0352'));
	}


	public function createService087(): PHPStan\PhpDoc\ReflectionEnumStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionEnumStubFilesExtension($this->getService('0352'));
	}


	public function createService088(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService089(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('0340'));
	}


	public function createService090(): PHPStan\Rules\Properties\AccessPropertiesCheck
	{
		return new PHPStan\Rules\Properties\AccessPropertiesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			$this->getService('0352'),
			true,
			false,
			false
		);
	}


	public function createService091(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService092(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'), false);
	}


	public function createService093(): PHPStan\Rules\ClassForbiddenNameCheck
	{
		return new PHPStan\Rules\ClassForbiddenNameCheck($this->getService('0340'));
	}


	public function createService094(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createService095(): PHPStan\Rules\Debug\DumpPhpDocTypeRule
	{
		return new PHPStan\Rules\Debug\DumpPhpDocTypeRule($this->getService('reflectionProvider'), $this->getService('0674'));
	}


	public function createService096(): PHPStan\Rules\Debug\DumpNativeTypeRule
	{
		return new PHPStan\Rules\Debug\DumpNativeTypeRule($this->getService('reflectionProvider'));
	}


	public function createService097(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'), $this->getService('083'));
	}


	public function createService098(): PHPStan\Rules\Debug\DebugScopeRule
	{
		return new PHPStan\Rules\Debug\DebugScopeRule($this->getService('reflectionProvider'));
	}


	public function createService099(): PHPStan\Rules\ClassNameCheck
	{
		return new PHPStan\Rules\ClassNameCheck(
			$this->getService('0100'),
			$this->getService('093'),
			$this->getService('reflectionProvider'),
			$this->getService('0340')
		);
	}


	public function createService0100(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0101(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0105'),
			$this->getService('099'),
			false
		);
	}


	public function createService0102(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			true
		);
	}


	public function createService0103(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0102'), true);
	}


	public function createService0104(): PHPStan\Rules\Pure\FunctionPurityCheck
	{
		return new PHPStan\Rules\Pure\FunctionPurityCheck;
	}


	public function createService0105(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0107'),
			$this->getService('0152'),
			$this->getService('0141'),
			$this->getService('091'),
			true,
			true,
			true,
			true
		);
	}


	public function createService0106(): PHPStan\Rules\Functions\PrintfHelper
	{
		return new PHPStan\Rules\Functions\PrintfHelper($this->getService('0352'));
	}


	public function createService0107(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper(
			$this->getService('reflectionProvider'),
			false,
			false,
			false,
			false,
			false,
			false,
			true
		);
	}


	public function createService0108(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0109(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0110(): PHPStan\Rules\Generics\MethodTagTemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeCheck($this->getService('0335'), $this->getService('0111'));
	}


	public function createService0111(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0109'),
			$this->getService('0162'),
			true
		);
	}


	public function createService0112(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0113(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0109'),
			$this->getService('0112'),
			$this->getService('0141'),
			['DOMNamedNodeMap'],
			true
		);
	}


	public function createService0114(): PHPStan\Rules\ParameterCastableToStringCheck
	{
		return new PHPStan\Rules\ParameterCastableToStringCheck($this->getService('0107'));
	}


	public function createService0115(): PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider
	{
		return new PHPStan\Rules\Methods\LazyAlwaysUsedMethodExtensionProvider($this->getService('0340'));
	}


	public function createService0116(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			false,
			true
		);
	}


	public function createService0117(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			$this->getService('099'),
			false,
			true,
			true
		);
	}


	public function createService0118(): PHPStan\Rules\Methods\MethodPrototypeFinder
	{
		return new PHPStan\Rules\Methods\MethodPrototypeFinder($this->getService('0352'), $this->getService('0679'));
	}


	public function createService0119(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('0352'));
	}


	public function createService0120(): PHPStan\Rules\Methods\MethodVisibilityComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodVisibilityComparisonHelper;
	}


	public function createService0121(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('0340'));
	}


	public function createService0122(): PHPStan\Rules\TooWideTypehints\TooWideTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideTypeCheck($this->getService('091'), false, false);
	}


	public function createService0123(): PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideParameterOutTypeCheck($this->getService('0122'));
	}


	public function createService0124(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(false, ['DOMNamedNodeMap']);
	}


	public function createService0125(): PHPStan\Rules\Classes\MethodTagCheck
	{
		return new PHPStan\Rules\Classes\MethodTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0109'),
			$this->getService('0124'),
			$this->getService('0141'),
			true,
			true,
			true
		);
	}


	public function createService0126(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck(
			[],
			$this->getService('reflectionProvider'),
			$this->getService('077'),
			$this->getService('0124'),
			$this->getService('099'),
			$this->getService('0141'),
			$this->getService('0109'),
			true,
			true,
			true
		);
	}


	public function createService0127(): PHPStan\Rules\Classes\MixinCheck
	{
		return new PHPStan\Rules\Classes\MixinCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0109'),
			$this->getService('0124'),
			$this->getService('0141'),
			true,
			true,
			true
		);
	}


	public function createService0128(): PHPStan\Rules\Classes\ConsistentConstructorHelper
	{
		return new PHPStan\Rules\Classes\ConsistentConstructorHelper;
	}


	public function createService0129(): PHPStan\Rules\Classes\PropertyTagCheck
	{
		return new PHPStan\Rules\Classes\PropertyTagCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0109'),
			$this->getService('0124'),
			$this->getService('0141'),
			true,
			true,
			true
		);
	}


	public function createService0130(): PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedUsageOfDeprecatedStringCastRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0131(): PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedPropertyUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0132(): PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedClassConstantUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider'),
			$this->getService('0107')
		);
	}


	public function createService0133(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider'),
			$this->getService('0107')
		);
	}


	public function createService0134(): PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticMethodCallableUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider'),
			$this->getService('0107')
		);
	}


	public function createService0135(): PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedStaticPropertyUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider'),
			$this->getService('0107')
		);
	}


	public function createService0136(): PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0137(): PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedMethodCallableUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0138(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0139(): PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule
	{
		return new PHPStan\Rules\RestrictedUsage\RestrictedFunctionCallableUsageRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0140(): PHPStan\Rules\PhpDoc\GenericCallableRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\GenericCallableRuleHelper($this->getService('0111'));
	}


	public function createService0141(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0142(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0141'),
			$this->getService('099'),
			$this->getService('0124'),
			$this->getService('0109'),
			true,
			true
		);
	}


	public function createService0143(): PHPStan\Rules\PhpDoc\RequireExtendsCheck
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsCheck($this->getService('099'), true, true);
	}


	public function createService0144(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeCheck(
			$this->getService('0109'),
			$this->getService('0141'),
			$this->getService('0140')
		);
	}


	public function createService0145(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper(
			$this->getService('077'),
			$this->getService('0335'),
			$this->getService('reflectionProvider'),
			false,
			false
		);
	}


	public function createService0146(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0147(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0148(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0107'));
	}


	public function createService0149(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck(true);
	}


	public function createService0150(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService0151(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0152(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0153(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('088'), $this->getService('091'), true, true);
	}


	public function createService0154(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0141'),
			$this->getService('0352'),
			true,
			false
		);
	}


	public function createService0155(): PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalUsageHelper;
	}


	public function createService0156(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0157(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0107'), false, false, false);
	}


	public function createService0158(): PHPStan\Fixable\PhpDoc\PhpDocEditor
	{
		return new PHPStan\Fixable\PhpDoc\PhpDocEditor($this->getService('0674'), $this->getService('0670'), $this->getService('0673'));
	}


	public function createService0159(): PHPStan\Fixable\Patcher
	{
		return new PHPStan\Fixable\Patcher;
	}


	public function createService0160(): PHPStan\Type\LazyTypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('0340'));
	}


	public function createService0161(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('07'),
			$this->getService('0676'),
			$this->getService('betterReflectionReflector'),
			$this->getService('028'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0162(): PHPStan\Type\UsefulTypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('083'),
			$this->getService('077'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0163(): PHPStan\Type\Regex\RegexGroupParser
	{
		return new PHPStan\Type\Regex\RegexGroupParser($this->getService('0352'), $this->getService('0164'));
	}


	public function createService0164(): PHPStan\Type\Regex\RegexExpressionHelper
	{
		return new PHPStan\Type\Regex\RegexExpressionHelper($this->getService('07'));
	}


	public function createService0165(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0166(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService0167(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0168(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\DateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeHelper;
	}


	public function createService0170(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0171(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0172(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\RegexArrayShapeMatcher
	{
		return new PHPStan\Type\Php\RegexArrayShapeMatcher(
			$this->getService('0163'),
			$this->getService('0164'),
			$this->getService('0352')
		);
	}


	public function createService0174(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0175(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\BcMathNumberOperatorTypeSpecifyingExtension($this->getService('0352'));
	}


	public function createService0177(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0178(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0179(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0180(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension($this->getService('0352'));
	}


	public function createService0182(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0183(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0184(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0185(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0186(): PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TrimFunctionDynamicReturnTypeExtension;
	}


	public function createService0187(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0188(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0189(): PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\HighlightStringDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0190(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0192(): PHPStan\Type\Php\IdateFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeHelper;
	}


	public function createService0193(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('0352'));
	}


	public function createService0195(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0196(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0197(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0198(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\PregMatchTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PregMatchTypeSpecifyingExtension($this->getService('0173'));
	}


	public function createService0201(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension($this->getService('0169'));
	}


	public function createService0203(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0204(): PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\AbsFunctionDynamicReturnTypeExtension;
	}


	public function createService0205(): PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDebugTypeFunctionReturnTypeExtension;
	}


	public function createService0206(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0207(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeExtension($this->getService('0250'));
	}


	public function createService0208(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0209(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0211(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0212(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0213(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0214(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('0352'));
	}


	public function createService0215(): PHPStan\Type\Php\ArrayColumnHelper
	{
		return new PHPStan\Type\Php\ArrayColumnHelper($this->getService('0352'));
	}


	public function createService0216(): PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension
	{
		return new PHPStan\Type\Php\PregReplaceCallbackClosureTypeExtension($this->getService('0173'));
	}


	public function createService0217(): PHPStan\Type\Php\ParseStrParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\ParseStrParameterOutTypeExtension;
	}


	public function createService0218(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0219(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(true);
	}


	public function createService0220(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0221(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0222(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension($this->getService('0169'));
	}


	public function createService0223(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0224(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0225(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0226(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0227(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0165'));
	}


	public function createService0230(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0280'));
	}


	public function createService0231(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0232(): PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeSubMethodThrowTypeExtension($this->getService('0352'));
	}


	public function createService0233(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0234(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0235(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0236(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0237(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0214'));
	}


	public function createService0238(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0239(): PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalFormatDynamicReturnTypeExtension;
	}


	public function createService0240(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0241(): PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountCharsFunctionDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0242(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension(
			null,
			$this->getService('0353'),
			$this->getService('0352')
		);
	}


	public function createService0243(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0244(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0245(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension($this->getService('0169'));
	}


	public function createService0246(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0247(): PHPStan\Type\Php\IdateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IdateFunctionReturnTypeExtension($this->getService('0192'));
	}


	public function createService0248(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0249(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('0352'));
	}


	public function createService0250(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('0352')
		);
	}


	public function createService0251(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0252(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0253(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0254(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0255(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0256(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0257(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0258(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService0259(): PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPadDynamicReturnTypeExtension;
	}


	public function createService0260(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0261(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0262(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0263(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension($this->getService('0352'));
	}


	public function createService0264(): PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrIncrementDecrementFunctionReturnTypeExtension;
	}


	public function createService0265(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0266(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0267(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0280'));
	}


	public function createService0268(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0269(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0270(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('0352'));
	}


	public function createService0271(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0272(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0273(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0274(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0275(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0276(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0277(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0278(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0279(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0214'));
	}


	public function createService0280(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0281(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0282(): PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyMethodThrowTypeExtension($this->getService('0352'));
	}


	public function createService0283(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0284(): PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\OpensslCipherFunctionsReturnTypeExtension($this->getService('0352'));
	}


	public function createService0285(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0286(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0287(): PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChangeKeyCaseFunctionReturnTypeExtension;
	}


	public function createService0288(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional']
		);
	}


	public function createService0289(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0290(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0291(): PHPStan\Type\Php\StrrevFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrrevFunctionReturnTypeExtension;
	}


	public function createService0292(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0293(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0233'));
	}


	public function createService0294(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension($this->getService('0352'));
	}


	public function createService0295(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0296(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0297(): PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\SetTypeFunctionTypeSpecifyingExtension;
	}


	public function createService0298(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0299(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0300(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0301(): PHPStan\Type\Php\PregMatchParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\PregMatchParameterOutTypeExtension($this->getService('0173'));
	}


	public function createService0302(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension;
	}


	public function createService0303(): PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetDefinedVarsFunctionReturnTypeExtension;
	}


	public function createService0304(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0305(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0306(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0307(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0165'));
	}


	public function createService0308(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0309(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('091'));
	}


	public function createService0310(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0311(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0214'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0312(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0313(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('0352'));
	}


	public function createService0314(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('0215'));
	}


	public function createService0315(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0316(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0317(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0318(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0319(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0320(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0321(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0315'));
	}


	public function createService0322(): PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindFunctionReturnTypeExtension($this->getService('0250'));
	}


	public function createService0323(): PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFindKeyFunctionReturnTypeExtension;
	}


	public function createService0324(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0325(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0326(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0327(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0315'));
	}


	public function createService0328(): PHPStan\Type\Php\PDOConnectReturnTypeExtension
	{
		return new PHPStan\Type\Php\PDOConnectReturnTypeExtension($this->getService('0352'));
	}


	public function createService0329(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0330(): PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension
	{
		return new PHPStan\Type\Php\OpenSslEncryptParameterOutTypeExtension;
	}


	public function createService0331(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0332(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension($this->getService('0352'));
	}


	public function createService0333(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0165')
		);
	}


	public function createService0334(): PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPStan\ClassNameUsageLocationCreateIdentifierDynamicReturnTypeExtension;
	}


	public function createService0335(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('028'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('082'),
			$this->getService('075'),
			$this->getService('049'),
			$this->getService('05')
		);
	}


	public function createService0336(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService0337(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService0338(): PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('0340'));
	}


	public function createService0339(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/home/ilijaristov67/projects/expense_management_backend',
			'/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan',
			[
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level6.neon',
				'/home/ilijaristov67/projects/expense_management_backend/phpstan.neon',
			],
			$this->getParameter('analysedPaths'),
			['/home/ilijaristov67/projects/expense_management_backend'],
			$this->getParameter('analysedPathsFromConfig'),
			'6',
			null,
			null,
			$this->getParameter('singleReflectionFile'),
			$this->getParameter('singleReflectionInsteadOfFile')
		);
	}


	public function createService0340(): PHPStan\DependencyInjection\MemoizingContainer
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('0337'));
	}


	public function createService0341(): PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureTypeExtensionProvider($this->getService('0340'));
	}


	public function createService0342(): PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('0340'));
	}


	public function createService0343(): PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('0340'));
	}


	public function createService0344(): PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterOutTypeExtensionProvider($this->getService('0340'));
	}


	public function createService0345(): PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('0340'));
	}


	public function createService0346(): PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyParameterClosureThisExtensionProvider($this->getService('0340'));
	}


	public function createService0347(): PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider($this->getService('0340'));
	}


	public function createService0348(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('0340'));
	}


	public function createService0349(): PHPStan\Collectors\Registry
	{
		return $this->getService('0348')->create();
	}


	public function createService0350(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, ['/home/ilijaristov67/projects/expense_management_backend']);
	}


	public function createService0351(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('0350')->create();
	}


	public function createService0352(): PHPStan\Php\PhpVersion
	{
		return $this->getService('0351')->create();
	}


	public function createService0353(): PHPStan\Php\ComposerPhpVersionFactory
	{
		return new PHPStan\Php\ComposerPhpVersionFactory(['/home/ilijaristov67/projects/expense_management_backend']);
	}


	public function createService0354(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService0355(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService0356(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_66aabf1b3c $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('05'), $analyseExcludes);
			}
		};
	}


	public function createService0357(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_66aabf1b3c $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('018'),
					$fileName
				);
			}
		};
	}


	public function createService0358(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_66aabf1b3c $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('022'));
			}
		};
	}


	public function createService0359(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_66aabf1b3c $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionMethod $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $immediatelyInvokedCallableParameters,
				array $phpDocClosureThisTypeParameters,
				bool $acceptsNamedArguments,
				array $attributes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('07'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('024'),
					$this->container->getService('defaultAnalysisParser'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$immediatelyInvokedCallableParameters,
					$phpDocClosureThisTypeParameters,
					$attributes
				);
			}
		};
	}


	public function createService0360(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_66aabf1b3c $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				bool $acceptsNamedArguments,
				?string $phpDocComment,
				array $phpDocParameterOutTypes,
				array $phpDocParameterImmediatelyInvokedCallable,
				array $phpDocParameterClosureThisTypes,
				array $attributes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('07'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('024'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$filename,
					$isPure,
					$asserts,
					$acceptsNamedArguments,
					$phpDocComment,
					$phpDocParameterOutTypes,
					$phpDocParameterImmediatelyInvokedCallable,
					$phpDocParameterClosureThisTypes,
					$attributes
				);
			}
		};
	}


	public function createService0361(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_66aabf1b3c $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('0340'),
					$this->container->getService('01'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('080'),
					$this->container->getService('05'),
					'/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan/resultCache.php',
					$this->container->getParameter('analysedPaths'),
					$this->container->getParameter('analysedPathsFromConfig'),
					['/home/ilijaristov67/projects/expense_management_backend'],
					'6',
					null,
					[
						'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
						'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/home/ilijaristov67/projects/expense_management_backend/vendor/larastan/larastan/bootstrap.php',
					],
					[],
					[],
					$fileReplacements,
					false,
					[
						['parameters', 'editorUrl'],
						['parameters', 'editorUrlTitle'],
						['parameters', 'errorFormat'],
						['parameters', 'ignoreErrors'],
						['parameters', 'reportUnmatchedIgnoredErrors'],
						['parameters', 'tipsOfTheDay'],
						['parameters', 'parallel'],
						['parameters', 'internalErrorsCountLimit'],
						['parameters', 'cache'],
						['parameters', 'memoryLimitFile'],
						['parameters', 'pro'],
						'parametersSchema',
					],
					7
				);
			}
		};
	}


	public function createService0362(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule($this->getService('0107'));
	}


	public function createService0363(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule($this->getService('0107'));
	}


	public function createService0364(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('0107'), $this->getService('0343'), false);
	}


	public function createService0365(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0152'));
	}


	public function createService0366(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('051'), $this->getService('0107'));
	}


	public function createService0367(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('088'),
			$this->getService('091'),
			$this->getService('0107'),
			false
		);
	}


	public function createService0368(): PHPStan\Rules\Properties\PropertiesInInterfaceRule
	{
		return new PHPStan\Rules\Properties\PropertiesInInterfaceRule($this->getService('0352'));
	}


	public function createService0369(): PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule
	{
		return new PHPStan\Rules\Properties\GetNonVirtualPropertyHookReadRule;
	}


	public function createService0370(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule($this->getService('091'));
	}


	public function createService0371(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule($this->getService('090'));
	}


	public function createService0372(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('0107'));
	}


	public function createService0373(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0141'),
			$this->getService('0352'),
			true,
			false,
			true
		);
	}


	public function createService0374(): PHPStan\Rules\Properties\MissingPropertyTypehintRule
	{
		return new PHPStan\Rules\Properties\MissingPropertyTypehintRule($this->getService('0124'));
	}


	public function createService0375(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule($this->getService('025'));
	}


	public function createService0376(): PHPStan\Rules\Properties\PropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\PropertyAssignRefRule($this->getService('0352'), $this->getService('091'));
	}


	public function createService0377(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule($this->getService('091'));
	}


	public function createService0378(): PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule
	{
		return new PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule;
	}


	public function createService0379(): PHPStan\Rules\Properties\NullsafePropertyFetchRule
	{
		return new PHPStan\Rules\Properties\NullsafePropertyFetchRule;
	}


	public function createService0380(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('0107'), $this->getService('091'));
	}


	public function createService0381(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule($this->getService('091'), $this->getService('025'));
	}


	public function createService0382(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule($this->getService('091'), $this->getService('025'));
	}


	public function createService0383(): PHPStan\Rules\Properties\PropertyHookAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyHookAttributesRule($this->getService('0101'));
	}


	public function createService0384(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('0101'));
	}


	public function createService0385(): PHPStan\Rules\Properties\SetPropertyHookParameterRule
	{
		return new PHPStan\Rules\Properties\SetPropertyHookParameterRule($this->getService('0124'), true, true);
	}


	public function createService0386(): PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule
	{
		return new PHPStan\Rules\Properties\SetNonVirtualPropertyHookAssignRule;
	}


	public function createService0387(): PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertyHookTypehintsRule($this->getService('0154'));
	}


	public function createService0388(): PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule($this->getService('025'));
	}


	public function createService0389(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0107'),
			$this->getService('088'),
			$this->getService('091'),
			false
		);
	}


	public function createService0390(): PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule
	{
		return new PHPStan\Rules\Properties\InvalidCallablePropertyTypeRule;
	}


	public function createService0391(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('090'));
	}


	public function createService0392(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('0352'));
	}


	public function createService0393(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			$this->getService('099'),
			true
		);
	}


	public function createService0394(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule;
	}


	public function createService0395(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0393'));
	}


	public function createService0396(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule($this->getService('0352'), true, false);
	}


	public function createService0397(): PHPStan\Rules\Properties\PropertyInClassRule
	{
		return new PHPStan\Rules\Properties\PropertyInClassRule($this->getService('0352'));
	}


	public function createService0398(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule($this->getService('0164'));
	}


	public function createService0399(): PHPStan\Rules\Regexp\RegularExpressionQuotingRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionQuotingRule($this->getService('reflectionProvider'), $this->getService('0164'));
	}


	public function createService0400(): PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule($this->getService('0103'), true, true);
	}


	public function createService0401(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('0103'), true, false, true);
	}


	public function createService0402(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('0102'), true, false, true);
	}


	public function createService0403(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule(true, true);
	}


	public function createService0404(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('0103'), true, false, true);
	}


	public function createService0405(): PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule($this->getService('0103'), true, true);
	}


	public function createService0406(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('0102'), true, false, true);
	}


	public function createService0407(): PHPStan\Rules\Comparison\MatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\MatchExpressionRule($this->getService('0103'), true);
	}


	public function createService0408(): PHPStan\Rules\Comparison\ConstantLooseComparisonRule
	{
		return new PHPStan\Rules\Comparison\ConstantLooseComparisonRule(true, false, true);
	}


	public function createService0409(): PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule;
	}


	public function createService0410(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('0102'), true, false, true);
	}


	public function createService0411(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('0103'), true, true);
	}


	public function createService0412(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('0103'), true, true);
	}


	public function createService0413(): PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule($this->getService('0103'), true, true);
	}


	public function createService0414(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('0103'), true, false, true);
	}


	public function createService0415(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('0103'), true, false, true);
	}


	public function createService0416(): PHPStan\Rules\Comparison\LogicalXorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\LogicalXorConstantConditionRule($this->getService('0103'), true, false, true);
	}


	public function createService0417(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule($this->getService('034'), true, false, true);
	}


	public function createService0418(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			false,
			true
		);
	}


	public function createService0419(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			false,
			true
		);
	}


	public function createService0420(): PHPStan\Rules\Pure\PureMethodRule
	{
		return new PHPStan\Rules\Pure\PureMethodRule($this->getService('0104'));
	}


	public function createService0421(): PHPStan\Rules\Pure\PureFunctionRule
	{
		return new PHPStan\Rules\Pure\PureFunctionRule($this->getService('0104'));
	}


	public function createService0422(): PHPStan\Rules\Cast\VoidCastRule
	{
		return new PHPStan\Rules\Cast\VoidCastRule;
	}


	public function createService0423(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('051'), $this->getService('0107'));
	}


	public function createService0424(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('0107'));
	}


	public function createService0425(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('0107'));
	}


	public function createService0426(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('0107'));
	}


	public function createService0427(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('0352'));
	}


	public function createService0428(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('0107'));
	}


	public function createService0429(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(false);
	}


	public function createService0430(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('0107'), false);
	}


	public function createService0431(): PHPStan\Rules\Variables\ParameterOutAssignedTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutAssignedTypeRule($this->getService('0107'));
	}


	public function createService0432(): PHPStan\Rules\Variables\EmptyRule
	{
		return new PHPStan\Rules\Variables\EmptyRule($this->getService('0153'));
	}


	public function createService0433(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0434(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('0153'));
	}


	public function createService0435(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0436(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('0153'));
	}


	public function createService0437(): PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule
	{
		return new PHPStan\Rules\Variables\ParameterOutExecutionEndTypeRule($this->getService('0107'));
	}


	public function createService0438(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('0107'));
	}


	public function createService0439(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule($this->getService('091'), $this->getService('0352'));
	}


	public function createService0440(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule($this->getService('0121'));
	}


	public function createService0441(): PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToMethodStatementWithoutImpurePointsRule;
	}


	public function createService0442(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('051'));
	}


	public function createService0443(): PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToStaticMethodStatementWithoutImpurePointsRule;
	}


	public function createService0444(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule($this->getService('0115'));
	}


	public function createService0445(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('089'), [], [], false);
	}


	public function createService0446(): PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToConstructorStatementWithoutImpurePointsRule;
	}


	public function createService0447(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createService0448(): PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule
	{
		return new PHPStan\Rules\DeadCode\CallToFunctionStatementWithoutImpurePointsRule;
	}


	public function createService0449(): PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionReturnTypehintRule($this->getService('0124'));
	}


	public function createService0450(): PHPStan\Rules\Functions\RandomIntParametersRule
	{
		return new PHPStan\Rules\Functions\RandomIntParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0352'),
			false
		);
	}


	public function createService0451(): PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule
	{
		return new PHPStan\Rules\Functions\InvalidLexicalVariablesInClosureUseRule;
	}


	public function createService0452(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0105')
		);
	}


	public function createService0453(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false, true);
	}


	public function createService0454(): PHPStan\Rules\Functions\RedefinedParametersRule
	{
		return new PHPStan\Rules\Functions\RedefinedParametersRule;
	}


	public function createService0455(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0152'));
	}


	public function createService0456(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('0106'), $this->getService('reflectionProvider'));
	}


	public function createService0457(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('092'));
	}


	public function createService0458(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createService0459(): PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule
	{
		return new PHPStan\Rules\Functions\MissingFunctionParameterTypehintRule($this->getService('0124'));
	}


	public function createService0460(): PHPStan\Rules\Functions\PrintfArrayParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfArrayParametersRule($this->getService('0106'), $this->getService('reflectionProvider'));
	}


	public function createService0461(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('0148'));
	}


	public function createService0462(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0154'));
	}


	public function createService0463(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('0148'));
	}


	public function createService0464(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('0148'));
	}


	public function createService0465(): PHPStan\Rules\Functions\SortParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\SortParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0114')
		);
	}


	public function createService0466(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			$this->getService('0352'),
			false,
			false
		);
	}


	public function createService0467(): PHPStan\Rules\Functions\ArrayValuesRule
	{
		return new PHPStan\Rules\Functions\ArrayValuesRule($this->getService('reflectionProvider'), true, true);
	}


	public function createService0468(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0154'));
	}


	public function createService0469(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createService0470(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('0105'), $this->getService('0107'), false);
	}


	public function createService0471(): PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithNoDiscardRule($this->getService('reflectionProvider'));
	}


	public function createService0472(): PHPStan\Rules\Functions\UselessFunctionReturnValueRule
	{
		return new PHPStan\Rules\Functions\UselessFunctionReturnValueRule($this->getService('reflectionProvider'));
	}


	public function createService0473(): PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule;
	}


	public function createService0474(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0152'));
	}


	public function createService0475(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('0101'));
	}


	public function createService0476(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('0101'));
	}


	public function createService0477(): PHPStan\Rules\Functions\ArrayFilterRule
	{
		return new PHPStan\Rules\Functions\ArrayFilterRule($this->getService('reflectionProvider'), true, true);
	}


	public function createService0478(): PHPStan\Rules\Functions\CallUserFuncRule
	{
		return new PHPStan\Rules\Functions\CallUserFuncRule($this->getService('reflectionProvider'), $this->getService('0105'));
	}


	public function createService0479(): PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\ImplodeParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0114')
		);
	}


	public function createService0480(): PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule;
	}


	public function createService0481(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('0352'));
	}


	public function createService0482(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule(
			$this->getService('0154'),
			$this->getService('0352')
		);
	}


	public function createService0483(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('0101'));
	}


	public function createService0484(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('0101'));
	}


	public function createService0485(): PHPStan\Rules\Functions\ParameterCastableToStringRule
	{
		return new PHPStan\Rules\Functions\ParameterCastableToStringRule(
			$this->getService('reflectionProvider'),
			$this->getService('0114')
		);
	}


	public function createService0486(): PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createService0487(): PHPStan\Rules\Functions\VariadicParametersDeclarationRule
	{
		return new PHPStan\Rules\Functions\VariadicParametersDeclarationRule;
	}


	public function createService0488(): PHPStan\Rules\Keywords\RequireFileExistsRule
	{
		return new PHPStan\Rules\Keywords\RequireFileExistsRule('/home/ilijaristov67/projects/expense_management_backend');
	}


	public function createService0489(): PHPStan\Rules\Keywords\DeclareStrictTypesRule
	{
		return new PHPStan\Rules\Keywords\DeclareStrictTypesRule($this->getService('051'));
	}


	public function createService0490(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createService0491(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('0112'));
	}


	public function createService0492(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('0113'), $this->getService('0108'));
	}


	public function createService0493(): PHPStan\Rules\Generics\UsedTraitsRule
	{
		return new PHPStan\Rules\Generics\UsedTraitsRule($this->getService('0335'), $this->getService('0113'));
	}


	public function createService0494(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('0113'), $this->getService('0108'));
	}


	public function createService0495(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('0335'), $this->getService('0111'));
	}


	public function createService0496(): PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeTraitRule(
			$this->getService('0110'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0497(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('0335'), $this->getService('0111'));
	}


	public function createService0498(): PHPStan\Rules\Generics\EnumAncestorsRule
	{
		return new PHPStan\Rules\Generics\EnumAncestorsRule($this->getService('0113'), $this->getService('0108'));
	}


	public function createService0499(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('0335'), $this->getService('0111'));
	}


	public function createService0500(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('0111'));
	}


	public function createService0501(): PHPStan\Rules\Generics\PropertyVarianceRule
	{
		return new PHPStan\Rules\Generics\PropertyVarianceRule($this->getService('0112'));
	}


	public function createService0502(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('0112'));
	}


	public function createService0503(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('0111'));
	}


	public function createService0504(): PHPStan\Rules\Generics\EnumTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\EnumTemplateTypeRule;
	}


	public function createService0505(): PHPStan\Rules\Generics\MethodTagTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTagTemplateTypeRule($this->getService('0110'));
	}


	public function createService0506(): PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createService0507(): PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule
	{
		return new PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule;
	}


	public function createService0508(): PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule($this->getService('0107'));
	}


	public function createService0509(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('0117'), $this->getService('0105'));
	}


	public function createService0510(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createService0511(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('0148'));
	}


	public function createService0512(): PHPStan\Rules\Methods\ConstructorReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ConstructorReturnTypeRule;
	}


	public function createService0513(): PHPStan\Rules\Methods\MissingMethodParameterTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodParameterTypehintRule($this->getService('0124'));
	}


	public function createService0514(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0116'), $this->getService('0352'));
	}


	public function createService0515(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0154'));
	}


	public function createService0516(): PHPStan\Rules\Methods\MissingMethodReturnTypehintRule
	{
		return new PHPStan\Rules\Methods\MissingMethodReturnTypehintRule($this->getService('0124'));
	}


	public function createService0517(): PHPStan\Rules\Methods\AbstractPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\AbstractPrivateMethodRule;
	}


	public function createService0518(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule(
			$this->getService('0352'),
			$this->getService('0688'),
			true,
			$this->getService('0119'),
			$this->getService('0120'),
			$this->getService('0118'),
			false
		);
	}


	public function createService0519(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createService0520(): PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule
	{
		return new PHPStan\Rules\Methods\MethodVisibilityInInterfaceRule;
	}


	public function createService0521(): PHPStan\Rules\Methods\MissingMethodSelfOutTypeRule
	{
		return new PHPStan\Rules\Methods\MissingMethodSelfOutTypeRule($this->getService('0124'));
	}


	public function createService0522(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule(
			$this->getService('0107'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0523(): PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithNoDiscardRule($this->getService('0107'));
	}


	public function createService0524(): PHPStan\Rules\Methods\ConsistentConstructorRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorRule(
			$this->getService('0128'),
			$this->getService('0119'),
			$this->getService('0120')
		);
	}


	public function createService0525(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0117'), $this->getService('0352'));
	}


	public function createService0526(): PHPStan\Rules\Methods\NullsafeMethodCallRule
	{
		return new PHPStan\Rules\Methods\NullsafeMethodCallRule;
	}


	public function createService0527(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('0116'), $this->getService('0105'));
	}


	public function createService0528(): PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule
	{
		return new PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule($this->getService('0352'));
	}


	public function createService0529(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('0101'));
	}


	public function createService0530(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createService0531(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithNoDiscardRule(
			$this->getService('0107'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0532(): PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorDeclarationRule;
	}


	public function createService0533(): PHPStan\Rules\Methods\FinalPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\FinalPrivateMethodRule;
	}


	public function createService0534(): PHPStan\Rules\Constants\NativeTypedClassConstantRule
	{
		return new PHPStan\Rules\Constants\NativeTypedClassConstantRule($this->getService('0352'));
	}


	public function createService0535(): PHPStan\Rules\Constants\MagicConstantContextRule
	{
		return new PHPStan\Rules\Constants\MagicConstantContextRule;
	}


	public function createService0536(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(true);
	}


	public function createService0537(): PHPStan\Rules\Constants\MissingClassConstantTypehintRule
	{
		return new PHPStan\Rules\Constants\MissingClassConstantTypehintRule($this->getService('0124'));
	}


	public function createService0538(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('0352'));
	}


	public function createService0539(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule(true);
	}


	public function createService0540(): PHPStan\Rules\Constants\ClassAsClassConstantRule
	{
		return new PHPStan\Rules\Constants\ClassAsClassConstantRule;
	}


	public function createService0541(): PHPStan\Rules\Constants\ValueAssignedToClassConstantRule
	{
		return new PHPStan\Rules\Constants\ValueAssignedToClassConstantRule;
	}


	public function createService0542(): PHPStan\Rules\Constants\FinalPrivateConstantRule
	{
		return new PHPStan\Rules\Constants\FinalPrivateConstantRule;
	}


	public function createService0543(): PHPStan\Rules\Constants\DynamicClassConstantFetchRule
	{
		return new PHPStan\Rules\Constants\DynamicClassConstantFetchRule($this->getService('0352'), $this->getService('0107'));
	}


	public function createService0544(): PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodParameterOutTypeRule($this->getService('0123'), false);
	}


	public function createService0545(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule($this->getService('0122'));
	}


	public function createService0546(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule($this->getService('0122'));
	}


	public function createService0547(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false, $this->getService('0122'));
	}


	public function createService0548(): PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWidePropertyTypeRule($this->getService('089'), $this->getService('0122'));
	}


	public function createService0549(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule($this->getService('0122'));
	}


	public function createService0550(): PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionParameterOutTypeRule($this->getService('0123'));
	}


	public function createService0551(): PHPStan\Rules\Types\InvalidTypesInUnionRule
	{
		return new PHPStan\Rules\Types\InvalidTypesInUnionRule;
	}


	public function createService0552(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			true,
			true
		);
	}


	public function createService0553(): PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitUseAliasesRule($this->getService('0126'));
	}


	public function createService0554(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('092'));
	}


	public function createService0555(): PHPStan\Rules\Classes\ReadOnlyClassRule
	{
		return new PHPStan\Rules\Classes\ReadOnlyClassRule($this->getService('0352'));
	}


	public function createService0556(): PHPStan\Rules\Classes\AllowedSubTypesRule
	{
		return new PHPStan\Rules\Classes\AllowedSubTypesRule;
	}


	public function createService0557(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createService0558(): PHPStan\Rules\Classes\PropertyTagTraitRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitRule($this->getService('0129'), $this->getService('reflectionProvider'));
	}


	public function createService0559(): PHPStan\Rules\Classes\PropertyTagRule
	{
		return new PHPStan\Rules\Classes\PropertyTagRule($this->getService('0129'));
	}


	public function createService0560(): PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule
	{
		return new PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule;
	}


	public function createService0561(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule(
			$this->getService('099'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0562(): PHPStan\Rules\Classes\RequireImplementsRule
	{
		return new PHPStan\Rules\Classes\RequireImplementsRule;
	}


	public function createService0563(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('099'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0564(): PHPStan\Rules\Classes\RequireExtendsRule
	{
		return new PHPStan\Rules\Classes\RequireExtendsRule;
	}


	public function createService0565(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule($this->getService('0352'), $this->getService('0128'));
	}


	public function createService0566(): PHPStan\Rules\Classes\MethodTagRule
	{
		return new PHPStan\Rules\Classes\MethodTagRule($this->getService('0125'));
	}


	public function createService0567(): PHPStan\Rules\Classes\MethodTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitUseRule($this->getService('0125'));
	}


	public function createService0568(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('099'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0569(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('0101'));
	}


	public function createService0570(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createService0571(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule($this->getService('0126'));
	}


	public function createService0572(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createService0573(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			$this->getService('099'),
			$this->getService('0352'),
			false
		);
	}


	public function createService0574(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('0352'));
	}


	public function createService0575(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('0340'),
			$this->getService('reflectionProvider'),
			$this->getService('0105'),
			$this->getService('099'),
			$this->getService('0128'),
			true
		);
	}


	public function createService0576(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('0101'));
	}


	public function createService0577(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule($this->getService('0127'));
	}


	public function createService0578(): PHPStan\Rules\Classes\MixinTraitRule
	{
		return new PHPStan\Rules\Classes\MixinTraitRule($this->getService('0127'), $this->getService('reflectionProvider'));
	}


	public function createService0579(): PHPStan\Rules\Classes\MethodTagTraitRule
	{
		return new PHPStan\Rules\Classes\MethodTagTraitRule($this->getService('0125'), $this->getService('reflectionProvider'));
	}


	public function createService0580(): PHPStan\Rules\Classes\MixinTraitUseRule
	{
		return new PHPStan\Rules\Classes\MixinTraitUseRule($this->getService('0127'));
	}


	public function createService0581(): PHPStan\Rules\Classes\PropertyTagTraitUseRule
	{
		return new PHPStan\Rules\Classes\PropertyTagTraitUseRule($this->getService('0129'));
	}


	public function createService0582(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('099'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0583(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createService0584(): PHPStan\Rules\Classes\LocalTypeTraitAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitAliasesRule($this->getService('0126'), $this->getService('reflectionProvider'));
	}


	public function createService0585(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule($this->getService('0107'), true, false, true);
	}


	public function createService0586(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('099'),
			$this->getService('reflectionProvider'),
			true
		);
	}


	public function createService0587(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule;
	}


	public function createService0588(): PHPStan\Rules\PhpDoc\SealedDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\SealedDefinitionClassRule($this->getService('099'), true, true);
	}


	public function createService0589(): PHPStan\Rules\PhpDoc\FunctionAssertRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionAssertRule($this->getService('0142'));
	}


	public function createService0590(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('0335'),
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0109'),
			$this->getService('0124'),
			$this->getService('0141'),
			true,
			true,
			true
		);
	}


	public function createService0591(): PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\SealedDefinitionTraitRule($this->getService('reflectionProvider'));
	}


	public function createService0592(): PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyHookPhpDocTypeRule($this->getService('0335'), $this->getService('0144'));
	}


	public function createService0593(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			true,
			true
		);
	}


	public function createService0594(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('0335'));
	}


	public function createService0595(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule(
			$this->getService('0109'),
			$this->getService('0141'),
			$this->getService('0140')
		);
	}


	public function createService0596(): PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleParamImmediatelyInvokedCallableRule($this->getService('0335'));
	}


	public function createService0597(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('0335'), $this->getService('0145'));
	}


	public function createService0598(): PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule
	{
		return new PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule($this->getService('0145'));
	}


	public function createService0599(): PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule($this->getService('0146'));
	}


	public function createService0600(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionClassRule($this->getService('0143'));
	}


	public function createService0601(): PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule($this->getService('0141'), $this->getService('0109'));
	}


	public function createService0602(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('0670'), $this->getService('0673'));
	}


	public function createService0603(): PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule($this->getService('0146'));
	}


	public function createService0604(): PHPStan\Rules\PhpDoc\MethodAssertRule
	{
		return new PHPStan\Rules\PhpDoc\MethodAssertRule($this->getService('0142'));
	}


	public function createService0605(): PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule($this->getService('0109'), $this->getService('0141'));
	}


	public function createService0606(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('0335'), $this->getService('0144'));
	}


	public function createService0607(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('0670'), $this->getService('0673'));
	}


	public function createService0608(): PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule
	{
		return new PHPStan\Rules\PhpDoc\RequireImplementsDefinitionClassRule;
	}


	public function createService0609(): PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule
	{
		return new PHPStan\Rules\PhpDoc\RequireExtendsDefinitionTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0143')
		);
	}


	public function createService0610(): PHPStan\Rules\Api\RuntimeReflectionFunctionRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionFunctionRule($this->getService('reflectionProvider'));
	}


	public function createService0611(): PHPStan\Rules\Api\ApiClassConstFetchRule
	{
		return new PHPStan\Rules\Api\ApiClassConstFetchRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0612(): PHPStan\Rules\Api\ApiInstanceofTypeRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0613(): PHPStan\Rules\Api\OldPhpParser4ClassRule
	{
		return new PHPStan\Rules\Api\OldPhpParser4ClassRule;
	}


	public function createService0614(): PHPStan\Rules\Api\RuntimeReflectionInstantiationRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionInstantiationRule($this->getService('reflectionProvider'));
	}


	public function createService0615(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0616(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0617(): PHPStan\Rules\Api\GetTemplateTypeRule
	{
		return new PHPStan\Rules\Api\GetTemplateTypeRule($this->getService('reflectionProvider'));
	}


	public function createService0618(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0619(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('0147'));
	}


	public function createService0620(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0621(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0622(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0623(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('0147'));
	}


	public function createService0624(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule;
	}


	public function createService0625(): PHPStan\Rules\Api\ApiInstanceofRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofRule($this->getService('0147'), $this->getService('reflectionProvider'));
	}


	public function createService0626(): PHPStan\Rules\Exceptions\NoncapturingCatchRule
	{
		return new PHPStan\Rules\Exceptions\NoncapturingCatchRule;
	}


	public function createService0627(): PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidPropertyHookWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0628(): PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0629(): PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule
	{
		return new PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule($this->getService('exceptionTypeResolver'), true);
	}


	public function createService0630(): PHPStan\Rules\Exceptions\ThrowExprTypeRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExprTypeRule($this->getService('0107'));
	}


	public function createService0631(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('0352'));
	}


	public function createService0632(): PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0633(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			true,
			true
		);
	}


	public function createService0634(): PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule
	{
		return new PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule;
	}


	public function createService0635(): PHPStan\Rules\Names\UsedNamesRule
	{
		return new PHPStan\Rules\Names\UsedNamesRule;
	}


	public function createService0636(): PHPStan\Rules\Traits\ConflictingTraitConstantsRule
	{
		return new PHPStan\Rules\Traits\ConflictingTraitConstantsRule($this->getService('07'), $this->getService('reflectionProvider'));
	}


	public function createService0637(): PHPStan\Rules\Traits\TraitAttributesRule
	{
		return new PHPStan\Rules\Traits\TraitAttributesRule($this->getService('0101'));
	}


	public function createService0638(): PHPStan\Rules\Traits\ConstantsInTraitsRule
	{
		return new PHPStan\Rules\Traits\ConstantsInTraitsRule($this->getService('0352'));
	}


	public function createService0639(): PHPStan\Rules\Traits\NotAnalysedTraitRule
	{
		return new PHPStan\Rules\Traits\NotAnalysedTraitRule;
	}


	public function createService0640(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, true);
	}


	public function createService0641(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('0107'));
	}


	public function createService0642(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createService0643(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule($this->getService('0107'), false);
	}


	public function createService0644(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createService0645(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('0107'));
	}


	public function createService0646(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('0107'));
	}


	public function createService0647(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(false);
	}


	public function createService0648(): PHPStan\Rules\Arrays\ArrayDestructuringRule
	{
		return new PHPStan\Rules\Arrays\ArrayDestructuringRule($this->getService('0107'), $this->getService('0157'));
	}


	public function createService0649(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule(
			$this->getService('0107'),
			$this->getService('0157'),
			false
		);
	}


	public function createService0650(): PHPStan\Rules\Arrays\ArrayUnpackingRule
	{
		return new PHPStan\Rules\Arrays\ArrayUnpackingRule($this->getService('0352'), $this->getService('0107'));
	}


	public function createService0651(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('0107'));
	}


	public function createService0652(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('051'));
	}


	public function createService0653(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('0107'));
	}


	public function createService0654(): PHPStan\Rules\Ignore\IgnoreParseErrorRule
	{
		return new PHPStan\Rules\Ignore\IgnoreParseErrorRule;
	}


	public function createService0655(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('0101'));
	}


	public function createService0656(): PHPStan\Rules\DateTimeInstantiationRule
	{
		return new PHPStan\Rules\DateTimeInstantiationRule;
	}


	public function createService0657(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createService0658(): PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureMethodCallCollector;
	}


	public function createService0659(): PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\FunctionWithoutImpurePointsCollector;
	}


	public function createService0660(): PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\MethodWithoutImpurePointsCollector;
	}


	public function createService0661(): PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureFuncCallCollector($this->getService('reflectionProvider'));
	}


	public function createService0662(): PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector
	{
		return new PHPStan\Rules\DeadCode\ConstructorWithoutImpurePointsCollector;
	}


	public function createService0663(): PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureStaticCallCollector;
	}


	public function createService0664(): PHPStan\Rules\DeadCode\PossiblyPureNewCollector
	{
		return new PHPStan\Rules\DeadCode\PossiblyPureNewCollector($this->getService('reflectionProvider'));
	}


	public function createService0665(): PHPStan\Rules\Traits\TraitDeclarationCollector
	{
		return new PHPStan\Rules\Traits\TraitDeclarationCollector;
	}


	public function createService0666(): PHPStan\Rules\Traits\TraitUseCollector
	{
		return new PHPStan\Rules\Traits\TraitUseCollector;
	}


	public function createService0667(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService0668(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService0669(): PHPStan\PhpDocParser\ParserConfig
	{
		return new PHPStan\PhpDocParser\ParserConfig(['lines' => true]);
	}


	public function createService0670(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer($this->getService('0669'));
	}


	public function createService0671(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('0669'), $this->getService('0672'));
	}


	public function createService0672(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser($this->getService('0669'));
	}


	public function createService0673(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser(
			$this->getService('0669'),
			$this->getService('0671'),
			$this->getService('0672')
		);
	}


	public function createService0674(): PHPStan\PhpDocParser\Printer\Printer
	{
		return new PHPStan\PhpDocParser\Printer\Printer;
	}


	public function createService0675(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('015')->create();
	}


	public function createService0676(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return $this->getService('014')->create();
	}


	public function createService0677(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('02'));
	}


	public function createService0678(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService0679(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('037'),
			$this->getService('035'),
			$this->getService('0359'),
			$this->getService('085'),
			$this->getService('023'),
			$this->getService('0680'),
			$this->getService('0681'),
			$this->getService('010'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('028'),
			$this->getService('0335'),
			$this->getService('024'),
			false
		);
	}


	public function createService0680(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService0681(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService0682(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			$this->getService('0681')
		);
	}


	public function createService0683(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension(['Eloquent']);
	}


	public function createService0684(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension(['Eloquent']);
	}


	public function createService0685(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService0686(): PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsMethodsClassReflectionExtension;
	}


	public function createService0687(): PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\RequireExtension\RequireExtendsPropertiesClassReflectionExtension;
	}


	public function createService0688(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule($this->getService('0679'), false, false);
	}


	public function createService0689(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0690(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0691(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0692(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0693(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0694(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0352'), 'DateTime');
	}


	public function createService0695(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension($this->getService('0352'), 'DateTimeImmutable');
	}


	public function createService0696(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0352'),
			'PHPStan\Reflection\ClassReflection',
			'getNativeReflection'
		);
	}


	public function createService0697(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('0352'),
			'PHPStan\Reflection\Php\BuiltinMethodReflection',
			'getDeclaringClass'
		);
	}


	public function createService0698(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0352'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumBackedCase'
		);
	}


	public function createService0699(): PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\BetterReflection\Type\AdapterReflectionEnumCaseDynamicReturnTypeExtension(
			$this->getService('0352'),
			'PHPStan\BetterReflection\Reflection\Adapter\ReflectionEnumUnitCase'
		);
	}


	public function createService0700(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0151'));
	}


	public function createService0701(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0151'));
	}


	public function createService0702(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInPropertyHookThrowsRule($this->getService('0151'));
	}


	public function createService0703(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('025'));
	}


	public function createService0704(): PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule
	{
		return new PHPStan\Rules\Classes\NewStaticInAbstractClassStaticMethodRule;
	}


	public function createService0705(): PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalClassConstantUsageExtension($this->getService('0155'));
	}


	public function createService0706(): PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalClassNameUsageExtension($this->getService('0155'));
	}


	public function createService0707(): PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalFunctionUsageExtension($this->getService('0155'));
	}


	public function createService0708(): PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalPropertyUsageExtension($this->getService('0155'));
	}


	public function createService0709(): PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension
	{
		return new PHPStan\Rules\InternalTag\RestrictedInternalMethodUsageExtension($this->getService('0155'));
	}


	public function createService0710(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0149'));
	}


	public function createService0711(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0335'), $this->getService('0149'));
	}


	public function createService0712(): PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWidePropertyHookThrowTypeRule($this->getService('0335'), $this->getService('0149'));
	}


	public function createService0713(): PHPStan\Rules\Functions\ParameterCastableToNumberRule
	{
		return new PHPStan\Rules\Functions\ParameterCastableToNumberRule(
			$this->getService('reflectionProvider'),
			$this->getService('0114')
		);
	}


	public function createService0714(): PHPStan\Rules\Functions\PrintfParameterTypeRule
	{
		return new PHPStan\Rules\Functions\PrintfParameterTypeRule(
			$this->getService('0106'),
			$this->getService('reflectionProvider'),
			$this->getService('0107'),
			false
		);
	}


	public function createService0715(): Larastan\Larastan\Methods\RelationForwardsCallsExtension
	{
		return new Larastan\Larastan\Methods\RelationForwardsCallsExtension(
			$this->getService('0790'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0716(): Larastan\Larastan\Methods\ModelForwardsCallsExtension
	{
		return new Larastan\Larastan\Methods\ModelForwardsCallsExtension(
			$this->getService('0790'),
			$this->getService('reflectionProvider'),
			$this->getService('0717')
		);
	}


	public function createService0717(): Larastan\Larastan\Methods\EloquentBuilderForwardsCallsExtension
	{
		return new Larastan\Larastan\Methods\EloquentBuilderForwardsCallsExtension(
			$this->getService('0790'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0718(): Larastan\Larastan\Methods\HigherOrderTapProxyExtension
	{
		return new Larastan\Larastan\Methods\HigherOrderTapProxyExtension;
	}


	public function createService0719(): Larastan\Larastan\Methods\HigherOrderCollectionProxyExtension
	{
		return new Larastan\Larastan\Methods\HigherOrderCollectionProxyExtension($this->getService('0823'));
	}


	public function createService0720(): Larastan\Larastan\Methods\StorageMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\StorageMethodsClassReflectionExtension($this->getService('reflectionProvider'));
	}


	public function createService0721(): Larastan\Larastan\Methods\Extension
	{
		return new Larastan\Larastan\Methods\Extension($this->getService('0359'), $this->getService('reflectionProvider'));
	}


	public function createService0722(): Larastan\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension($this->getService('reflectionProvider'));
	}


	public function createService0723(): Larastan\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension;
	}


	public function createService0724(): Larastan\Larastan\Methods\MacroMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\MacroMethodsClassReflectionExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0161')
		);
	}


	public function createService0725(): Larastan\Larastan\Methods\ViewWithMethodsClassReflectionExtension
	{
		return new Larastan\Larastan\Methods\ViewWithMethodsClassReflectionExtension;
	}


	public function createService0726(): Larastan\Larastan\Properties\ModelAccessorExtension
	{
		return new Larastan\Larastan\Properties\ModelAccessorExtension($this->getService('0788'));
	}


	public function createService0727(): Larastan\Larastan\Properties\ModelPropertyExtension
	{
		return new Larastan\Larastan\Properties\ModelPropertyExtension($this->getService('0788'));
	}


	public function createService0728(): Larastan\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension
	{
		return new Larastan\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension($this->getService('0823'));
	}


	public function createService0729(): Larastan\Larastan\ReturnTypes\HigherOrderTapProxyExtension
	{
		return new Larastan\Larastan\ReturnTypes\HigherOrderTapProxyExtension;
	}


	public function createService0730(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Contracts\Container\Container');
	}


	public function createService0731(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Container\Container');
	}


	public function createService0732(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Foundation\Application');
	}


	public function createService0733(): Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Contracts\Foundation\Application');
	}


	public function createService0734(): Larastan\Larastan\Properties\ModelRelationsExtension
	{
		return new Larastan\Larastan\Properties\ModelRelationsExtension($this->getService('0750'));
	}


	public function createService0735(): Larastan\Larastan\ReturnTypes\ModelOnlyDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelOnlyDynamicMethodReturnTypeExtension;
	}


	public function createService0736(): Larastan\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0737(): Larastan\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension(
			$this->getService('0790'),
			$this->getService('0750'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0738(): Larastan\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension($this->getService('0820'));
	}


	public function createService0739(): Larastan\Larastan\ReturnTypes\AuthExtension
	{
		return new Larastan\Larastan\ReturnTypes\AuthExtension;
	}


	public function createService0740(): Larastan\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0741(): Larastan\Larastan\ReturnTypes\AuthManagerExtension
	{
		return new Larastan\Larastan\ReturnTypes\AuthManagerExtension;
	}


	public function createService0742(): Larastan\Larastan\ReturnTypes\DateExtension
	{
		return new Larastan\Larastan\ReturnTypes\DateExtension;
	}


	public function createService0743(): Larastan\Larastan\ReturnTypes\GuardExtension
	{
		return new Larastan\Larastan\ReturnTypes\GuardExtension;
	}


	public function createService0744(): Larastan\Larastan\ReturnTypes\RequestFileExtension
	{
		return new Larastan\Larastan\ReturnTypes\RequestFileExtension;
	}


	public function createService0745(): Larastan\Larastan\ReturnTypes\RequestRouteExtension
	{
		return new Larastan\Larastan\ReturnTypes\RequestRouteExtension;
	}


	public function createService0746(): Larastan\Larastan\ReturnTypes\RequestUserExtension
	{
		return new Larastan\Larastan\ReturnTypes\RequestUserExtension;
	}


	public function createService0747(): Larastan\Larastan\ReturnTypes\EloquentBuilderExtension
	{
		return new Larastan\Larastan\ReturnTypes\EloquentBuilderExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0750')
		);
	}


	public function createService0748(): Larastan\Larastan\ReturnTypes\RelationCollectionExtension
	{
		return new Larastan\Larastan\ReturnTypes\RelationCollectionExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0750')
		);
	}


	public function createService0749(): Larastan\Larastan\ReturnTypes\TestCaseExtension
	{
		return new Larastan\Larastan\ReturnTypes\TestCaseExtension;
	}


	public function createService0750(): Larastan\Larastan\Support\CollectionHelper
	{
		return new Larastan\Larastan\Support\CollectionHelper($this->getService('reflectionProvider'));
	}


	public function createService0751(): Larastan\Larastan\ReturnTypes\Helpers\AuthExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\AuthExtension;
	}


	public function createService0752(): Larastan\Larastan\ReturnTypes\Helpers\CollectExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\CollectExtension($this->getService('0750'));
	}


	public function createService0753(): Larastan\Larastan\ReturnTypes\Helpers\NowAndTodayExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\NowAndTodayExtension;
	}


	public function createService0754(): Larastan\Larastan\ReturnTypes\Helpers\ResponseExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ResponseExtension;
	}


	public function createService0755(): Larastan\Larastan\ReturnTypes\Helpers\ValidatorExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ValidatorExtension;
	}


	public function createService0756(): Larastan\Larastan\ReturnTypes\Helpers\LiteralExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\LiteralExtension;
	}


	public function createService0757(): Larastan\Larastan\ReturnTypes\CollectionFilterRejectDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\CollectionFilterRejectDynamicReturnTypeExtension;
	}


	public function createService0758(): Larastan\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension;
	}


	public function createService0759(): Larastan\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension($this->getService('0790'));
	}


	public function createService0760(): Larastan\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension;
	}


	public function createService0761(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(false, 'abort');
	}


	public function createService0762(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(true, 'abort');
	}


	public function createService0763(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(false, 'throw');
	}


	public function createService0764(): Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new Larastan\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(true, 'throw');
	}


	public function createService0765(): Larastan\Larastan\ReturnTypes\Helpers\AppExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\AppExtension($this->getService('0820'));
	}


	public function createService0766(): Larastan\Larastan\ReturnTypes\Helpers\ValueExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ValueExtension;
	}


	public function createService0767(): Larastan\Larastan\ReturnTypes\Helpers\StrExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\StrExtension;
	}


	public function createService0768(): Larastan\Larastan\ReturnTypes\Helpers\TapExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\TapExtension;
	}


	public function createService0769(): Larastan\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0770(): Larastan\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension($this->getService('077'));
	}


	public function createService0771(): Larastan\Larastan\Types\ViewStringTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\ViewStringTypeNodeResolverExtension;
	}


	public function createService0772(): Larastan\Larastan\Rules\OctaneCompatibilityRule
	{
		return new Larastan\Larastan\Rules\OctaneCompatibilityRule;
	}


	public function createService0773(): Larastan\Larastan\Rules\NoEnvCallsOutsideOfConfigRule
	{
		return new Larastan\Larastan\Rules\NoEnvCallsOutsideOfConfigRule([], $this->getService('05'));
	}


	public function createService0774(): Larastan\Larastan\Rules\NoModelMakeRule
	{
		return new Larastan\Larastan\Rules\NoModelMakeRule($this->getService('reflectionProvider'));
	}


	public function createService0775(): Larastan\Larastan\Rules\NoUnnecessaryCollectionCallRule
	{
		return new Larastan\Larastan\Rules\NoUnnecessaryCollectionCallRule(
			$this->getService('reflectionProvider'),
			$this->getService('0727'),
			[],
			[]
		);
	}


	public function createService0776(): Larastan\Larastan\Rules\NoUnnecessaryEnumerableToArrayCallsRule
	{
		return new Larastan\Larastan\Rules\NoUnnecessaryEnumerableToArrayCallsRule;
	}


	public function createService0777(): Larastan\Larastan\Rules\ModelAppendsRule
	{
		return new Larastan\Larastan\Rules\ModelAppendsRule($this->getService('0788'));
	}


	public function createService0778(): Larastan\Larastan\Rules\NoPublicModelScopeAndAccessorRule
	{
		return new Larastan\Larastan\Rules\NoPublicModelScopeAndAccessorRule;
	}


	public function createService0779(): Larastan\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension($this->getService('reflectionProvider'));
	}


	public function createService0780(): Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension('Illuminate\Foundation\Application');
	}


	public function createService0781(): Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension('Illuminate\Contracts\Foundation\Application');
	}


	public function createService0782(): Larastan\Larastan\ReturnTypes\AppFacadeEnvironmentReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\AppFacadeEnvironmentReturnTypeExtension;
	}


	public function createService0783(): Larastan\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension(
			$this->getService('077'),
			false,
			$this->getService('0788')
		);
	}


	public function createService0784(): Larastan\Larastan\Types\CollectionOf\CollectionOfTypeNodeResolverExtension
	{
		return new Larastan\Larastan\Types\CollectionOf\CollectionOfTypeNodeResolverExtension($this->getService('0750'));
	}


	public function createService0785(): Larastan\Larastan\Properties\MigrationHelper
	{
		return new Larastan\Larastan\Properties\MigrationHelper(
			$this->getService('currentPhpVersionSimpleDirectParser'),
			[],
			$this->getService('05'),
			false,
			$this->getService('reflectionProvider')
		);
	}


	public function createService0786(): Larastan\Larastan\Properties\SquashedMigrationHelper
	{
		return new Larastan\Larastan\Properties\SquashedMigrationHelper([], $this->getService('05'), $this->getService('0794'), false);
	}


	public function createService0787(): Larastan\Larastan\Properties\ModelCastHelper
	{
		return new Larastan\Larastan\Properties\ModelCastHelper($this->getService('reflectionProvider'));
	}


	public function createService0788(): Larastan\Larastan\Properties\ModelPropertyHelper
	{
		return new Larastan\Larastan\Properties\ModelPropertyHelper(
			$this->getService('083'),
			$this->getService('0785'),
			$this->getService('0786'),
			$this->getService('0787')
		);
	}


	public function createService0789(): Larastan\Larastan\Rules\ModelRuleHelper
	{
		return new Larastan\Larastan\Rules\ModelRuleHelper;
	}


	public function createService0790(): Larastan\Larastan\Methods\BuilderHelper
	{
		return new Larastan\Larastan\Methods\BuilderHelper($this->getService('reflectionProvider'), false, $this->getService('0724'));
	}


	public function createService0791(): Larastan\Larastan\Rules\RelationExistenceRule
	{
		return new Larastan\Larastan\Rules\RelationExistenceRule($this->getService('0789'));
	}


	public function createService0792(): Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule
	{
		return new Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule(
			$this->getService('reflectionProvider'),
			$this->getService('0105'),
			'Illuminate\Foundation\Bus\Dispatchable'
		);
	}


	public function createService0793(): Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule
	{
		return new Larastan\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule(
			$this->getService('reflectionProvider'),
			$this->getService('0105'),
			'Illuminate\Foundation\Events\Dispatchable'
		);
	}


	public function createService0794(): Larastan\Larastan\Properties\Schema\MySqlDataTypeToPhpTypeConverter
	{
		return new Larastan\Larastan\Properties\Schema\MySqlDataTypeToPhpTypeConverter;
	}


	public function createService0795(): Larastan\Larastan\LarastanStubFilesExtension
	{
		return new Larastan\Larastan\LarastanStubFilesExtension;
	}


	public function createService0796(): Larastan\Larastan\Rules\UnusedViewsRule
	{
		return new Larastan\Larastan\Rules\UnusedViewsRule($this->getService('0802'), $this->getService('0803'));
	}


	public function createService0797(): Larastan\Larastan\Collectors\UsedViewFunctionCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewFunctionCollector;
	}


	public function createService0798(): Larastan\Larastan\Collectors\UsedEmailViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedEmailViewCollector;
	}


	public function createService0799(): Larastan\Larastan\Collectors\UsedViewMakeCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewMakeCollector;
	}


	public function createService0800(): Larastan\Larastan\Collectors\UsedViewFacadeMakeCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewFacadeMakeCollector;
	}


	public function createService0801(): Larastan\Larastan\Collectors\UsedRouteFacadeViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedRouteFacadeViewCollector;
	}


	public function createService0802(): Larastan\Larastan\Collectors\UsedViewInAnotherViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedViewInAnotherViewCollector($this->getService('0804'), $this->getService('0803'));
	}


	public function createService0803(): Larastan\Larastan\Support\ViewFileHelper
	{
		return new Larastan\Larastan\Support\ViewFileHelper([], $this->getService('05'));
	}


	public function createService0804(): Larastan\Larastan\Support\ViewParser
	{
		return new Larastan\Larastan\Support\ViewParser($this->getService('currentPhpVersionSimpleDirectParser'));
	}


	public function createService0805(): Larastan\Larastan\Rules\NoMissingTranslationsRule
	{
		return new Larastan\Larastan\Rules\NoMissingTranslationsRule($this->getService('0809'), $this->getService('0834'), []);
	}


	public function createService0806(): Larastan\Larastan\Collectors\UsedTranslationFunctionCollector
	{
		return new Larastan\Larastan\Collectors\UsedTranslationFunctionCollector;
	}


	public function createService0807(): Larastan\Larastan\Collectors\UsedTranslationTranslatorCollector
	{
		return new Larastan\Larastan\Collectors\UsedTranslationTranslatorCollector;
	}


	public function createService0808(): Larastan\Larastan\Collectors\UsedTranslationFacadeCollector
	{
		return new Larastan\Larastan\Collectors\UsedTranslationFacadeCollector;
	}


	public function createService0809(): Larastan\Larastan\Collectors\UsedTranslationViewCollector
	{
		return new Larastan\Larastan\Collectors\UsedTranslationViewCollector($this->getService('0804'), $this->getService('0803'));
	}


	public function createService0810(): Larastan\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension($this->getService('0820'));
	}


	public function createService0811(): Larastan\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension($this->getService('0820'));
	}


	public function createService0812(): Larastan\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension(
			$this->getService('0821'),
			$this->getService('0822')
		);
	}


	public function createService0813(): Larastan\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension($this->getService('0821'));
	}


	public function createService0814(): Larastan\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension(
			$this->getService('0821'),
			$this->getService('0822')
		);
	}


	public function createService0815(): Larastan\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension($this->getService('0821'));
	}


	public function createService0816(): Larastan\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension;
	}


	public function createService0817(): Larastan\Larastan\ReturnTypes\LangGetReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\LangGetReturnTypeExtension;
	}


	public function createService0818(): Larastan\Larastan\ReturnTypes\TransHelperReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\TransHelperReturnTypeExtension;
	}


	public function createService0819(): Larastan\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension;
	}


	public function createService0820(): Larastan\Larastan\ReturnTypes\AppMakeHelper
	{
		return new Larastan\Larastan\ReturnTypes\AppMakeHelper;
	}


	public function createService0821(): Larastan\Larastan\Internal\ConsoleApplicationResolver
	{
		return new Larastan\Larastan\Internal\ConsoleApplicationResolver;
	}


	public function createService0822(): Larastan\Larastan\Internal\ConsoleApplicationHelper
	{
		return new Larastan\Larastan\Internal\ConsoleApplicationHelper($this->getService('0821'));
	}


	public function createService0823(): Larastan\Larastan\Support\HigherOrderCollectionProxyHelper
	{
		return new Larastan\Larastan\Support\HigherOrderCollectionProxyHelper($this->getService('reflectionProvider'));
	}


	public function createService0824(): Larastan\Larastan\ReturnTypes\Helpers\ConfigFunctionDynamicFunctionReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\ConfigFunctionDynamicFunctionReturnTypeExtension($this->getService('0828'));
	}


	public function createService0825(): Larastan\Larastan\ReturnTypes\ConfigRepositoryDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConfigRepositoryDynamicMethodReturnTypeExtension($this->getService('0828'));
	}


	public function createService0826(): Larastan\Larastan\ReturnTypes\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension($this->getService('0828'));
	}


	public function createService0827(): Larastan\Larastan\Support\ConfigParser
	{
		return new Larastan\Larastan\Support\ConfigParser(
			$this->getService('05'),
			$this->getService('currentPhpVersionSimpleDirectParser'),
			[]
		);
	}


	public function createService0828(): Larastan\Larastan\Internal\ConfigHelper
	{
		return new Larastan\Larastan\Internal\ConfigHelper($this->getService('0827'));
	}


	public function createService0829(): Larastan\Larastan\ReturnTypes\Helpers\EnvFunctionDynamicFunctionReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\Helpers\EnvFunctionDynamicFunctionReturnTypeExtension;
	}


	public function createService0830(): Larastan\Larastan\ReturnTypes\FormRequestSafeDynamicMethodReturnTypeExtension
	{
		return new Larastan\Larastan\ReturnTypes\FormRequestSafeDynamicMethodReturnTypeExtension;
	}


	public function createService0831(): Larastan\Larastan\Rules\NoAuthFacadeInRequestScopeRule
	{
		return new Larastan\Larastan\Rules\NoAuthFacadeInRequestScopeRule;
	}


	public function createService0832(): Larastan\Larastan\Rules\NoAuthHelperInRequestScopeRule
	{
		return new Larastan\Larastan\Rules\NoAuthHelperInRequestScopeRule;
	}


	public function createService0833(): Larastan\Larastan\Rules\ConfigCollectionRule
	{
		return new Larastan\Larastan\Rules\ConfigCollectionRule($this->getService('0828'));
	}


	public function createService0834(): Illuminate\Filesystem\Filesystem
	{
		return new Illuminate\Filesystem\Filesystem;
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('028'),
			$this->getService('07'),
			$this->getService('0338'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0335'),
			$this->getService('085'),
			$this->getService('023'),
			$this->getService('0352'),
			$this->getService('012'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0360'),
			$this->getService('relativePathHelper'),
			$this->getService('049'),
			$this->getService('05'),
			$this->getService('0675'),
			$this->getService('010'),
			$this->getService('024'),
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional']
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('016')->create();
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_66aabf1b3c
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('057')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\ParserAbstract
	{
		return $this->getService('currentPhpVersionPhpParserFactory')->create();
	}


	public function createServiceCurrentPhpVersionPhpParserFactory(): PHPStan\Parser\PhpParserFactory
	{
		return new PHPStan\Parser\PhpParserFactory($this->getService('currentPhpVersionLexer'), $this->getService('0352'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0668'),
			$this->getService('0340'),
			$this->getService('041')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('0668'),
			$this->getService('066'),
			$this->getService('053')
		);
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('0352'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('048'),
			true,
			null,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0150');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('04')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('04')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('05'), ['php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('05'), ['php']);
	}


	public function createServiceFreshStubParser(): PHPStan\Parser\StubParser
	{
		return new PHPStan\Parser\StubParser($this->getService('php8PhpParser'), $this->getService('0668'));
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/home/ilijaristov67/projects/expense_management_backend');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('05'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser'),
			$this->getParameter('singleReflectionFile')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('057')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser(
			$this->getService('php8PhpParser'),
			$this->getService('0668'),
			$this->getService('066'),
			$this->getService('053')
		);
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php8
	{
		return new PhpParser\Parser\Php8($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServicePhpstanDiagnoseExtension(): PHPStan\Diagnose\PHPStanDiagnoseExtension
	{
		return new PHPStan\Diagnose\PHPStanDiagnoseExtension(
			$this->getService('0352'),
			null,
			$this->getService('05'),
			['/home/ilijaristov67/projects/expense_management_backend'],
			[
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level6.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/home/ilijaristov67/projects/expense_management_backend/phpstan.neon',
				'/home/ilijaristov67/projects/expense_management_backend/vendor/larastan/larastan/extension.neon',
			],
			$this->getService('0353')
		);
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('0340'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\FuzzyRelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/home/ilijaristov67/projects/expense_management_backend',
			$this->getParameter('analysedPaths')
		);
	}


	public function createServiceRules__0(): Larastan\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule
	{
		return new Larastan\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule;
	}


	public function createServiceRules__1(): Larastan\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule
	{
		return new Larastan\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule;
	}


	public function createServiceRules__2(): Larastan\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule
	{
		return new Larastan\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule;
	}


	public function createServiceRules__3(): Larastan\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule
	{
		return new Larastan\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule($this->getService('0821'));
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\SimpleRelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/home/ilijaristov67/projects/expense_management_backend');
	}


	public function createServiceStubFileTypeMapper(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('028'),
			$this->getService('stubParser'),
			$this->getService('082'),
			$this->getService('075'),
			$this->getService('049'),
			$this->getService('05')
		);
	}


	public function createServiceStubParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('freshStubParser'), 256);
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('stubParser'),
			$this->getService('stubFileTypeMapper'),
			$this->getService('080')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('0340'));
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'bootstrapFiles' => [
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/home/ilijaristov67/projects/expense_management_backend/vendor/larastan/larastan/bootstrap.php',
			],
			'excludePaths' => ['analyseAndScan' => [], 'analyse' => []],
			'level' => 6,
			'paths' => ['/home/ilijaristov67/projects/expense_management_backend/Modules/Admin/app'],
			'exceptions' => [
				'implicitThrows' => true,
				'reportUncheckedExceptionDeadCatch' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => true],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'checkNonStringableDynamicAccess' => false,
				'checkParameterCastableToNumberFunctions' => false,
				'skipCheckGenericClasses' => ['DOMNamedNodeMap'],
				'stricterFunctionMap' => false,
				'reportPreciseLineForUnusedFunctionParameter' => false,
				'checkPrintfParameterTypes' => false,
				'internalTag' => false,
				'newStaticInAbstractClassStaticMethod' => false,
				'checkExtensionsForComparisonOperators' => false,
				'reportTooWideBool' => false,
				'rawMessageInBaseline' => false,
				'reportNestedTooWideType' => false,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => true,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => true,
			'checkFunctionNameCase' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => true,
			'checkArgumentsPassedByReference' => true,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => false,
			'checkThisOnly' => false,
			'checkUnionTypes' => false,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => true,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingTypehints' => true,
			'checkTooWideParameterOutInProtectedAndPublicMethods' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'strictRulesInstalled' => false,
			'deprecationRulesInstalled' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'checkStrictPrintfPlaceholderTypes' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'reportAnyTypeWideningInVarTag' => false,
			'reportPossiblyNonexistentGeneralArrayOffset' => false,
			'reportPossiblyNonexistentConstantArrayOffset' => false,
			'checkMissingOverrideMethodAttribute' => false,
			'mixinExcludeClasses' => ['Eloquent'],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteScopeWithBlock' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tips' => ['discoveringSymbols' => true, 'treatPhpDocTypesAsCertain' => true],
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => true,
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			'stubFiles' => [
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/Countable.stub',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/stubs/file.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => ['abort', 'dd'],
			'resultCachePath' => '/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan/resultCache.php',
			'resultCacheSkipIfOlderThanDays' => 7,
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'E_ALL',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'sourceLocatorPlaygroundMode' => false,
			'__validate' => true,
			'parametersNotInvalidatingCache' => [
				['parameters', 'editorUrl'],
				['parameters', 'editorUrlTitle'],
				['parameters', 'errorFormat'],
				['parameters', 'ignoreErrors'],
				['parameters', 'reportUnmatchedIgnoredErrors'],
				['parameters', 'tipsOfTheDay'],
				['parameters', 'parallel'],
				['parameters', 'internalErrorsCountLimit'],
				['parameters', 'cache'],
				['parameters', 'memoryLimitFile'],
				['parameters', 'pro'],
				'parametersSchema',
			],
			'checkOctaneCompatibility' => false,
			'noEnvCallsOutsideOfConfig' => true,
			'noModelMake' => true,
			'noUnnecessaryCollectionCall' => true,
			'noUnnecessaryCollectionCallOnly' => [],
			'noUnnecessaryCollectionCallExcept' => [],
			'noUnnecessaryEnumerableToArrayCalls' => false,
			'squashedMigrationsPath' => [],
			'databaseMigrationsPath' => [],
			'disableMigrationScan' => false,
			'disableSchemaScan' => false,
			'configDirectories' => [],
			'viewDirectories' => [],
			'translationDirectories' => [],
			'checkModelProperties' => false,
			'checkUnusedViews' => false,
			'checkMissingTranslations' => false,
			'checkModelAppends' => true,
			'checkModelMethodVisibility' => false,
			'generalizeEnvReturnType' => false,
			'checkConfigTypes' => false,
			'checkAuthCallsWhenInRequestScope' => false,
			'tmpDir' => '/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/home/ilijaristov67/projects/expense_management_backend/var/cache/phpstan',
			'rootDir' => '/home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/home/ilijaristov67/projects/expense_management_backend',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level6.neon',
				'/home/ilijaristov67/projects/expense_management_backend/phpstan.neon',
			],
			'allConfigFiles' => [
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level6.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level5.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///home/ilijaristov67/projects/expense_management_backend/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/home/ilijaristov67/projects/expense_management_backend/phpstan.neon',
				'/home/ilijaristov67/projects/expense_management_backend/vendor/larastan/larastan/extension.neon',
			],
			'composerAutoloaderProjectPaths' => ['/home/ilijaristov67/projects/expense_management_backend'],
			'generateBaselineFile' => null,
			'usedLevel' => '6',
			'cliAutoloadFile' => null,
			'env' => [
				'LESSOPEN' => '| /usr/bin/lesspipe %s',
				'LOG_STACK' => 'single',
				'REDIS_PORT' => '6379',
				'USER' => 'ilijaristov67',
				'LOG_LEVEL' => 'debug',
				'DB_CONNECTION' => 'mysql',
				'APP_DEBUG' => 'true',
				'MAIL_USERNAME' => 'null',
				'APP_URL' => 'http://localhost',
				'DB_PORT' => '3306',
				'MAIL_FROM_ADDRESS' => 'hello@example.com',
				'SHLVL' => '1',
				'AWS_USE_PATH_STYLE_ENDPOINT' => 'false',
				'HOME' => '/home/ilijaristov67',
				'OLDPWD' => '/home/ilijaristov67/projects',
				'REDIS_CLIENT' => 'phpredis',
				'MAIL_FROM_NAME' => 'Laravel',
				'DB_DATABASE' => 'expense_management',
				'SESSION_PATH' => '/',
				'DBUS_SESSION_BUS_ADDRESS' => 'unix:path=/run/user/1000/bus',
				'APP_NAME' => 'Laravel',
				'WSL_DISTRO_NAME' => 'Ubuntu',
				'SESSION_DRIVER' => 'database',
				'VITE_APP_NAME' => 'Laravel',
				'WAYLAND_DISPLAY' => 'wayland-0',
				'SHELL_VERBOSITY' => '0',
				'LOG_CHANNEL' => 'stack',
				'DB_USERNAME' => 'root',
				'MEMCACHED_HOST' => '127.0.0.1',
				'LOGNAME' => 'ilijaristov67',
				'NAME' => 'DESKTOP-SHP6BTR',
				'WSL_INTEROP' => '/run/WSL/491_interop',
				'PULSE_SERVER' => 'unix:/mnt/wslg/PulseServer',
				'_' => 'vendor/bin/phpstan',
				'AWS_DEFAULT_REGION' => 'us-east-1',
				'TERM' => 'xterm-256color',
				'COLUMNS' => '143',
				'PATH' => '/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/usr/lib/wsl/lib:/mnt/c/Program Files/WindowsApps/MicrosoftCorporationII.WindowsSubsystemForLinux_2.6.1.0_x64__8wekyb3d8bbwe:/mnt/c/Program Files (x86)/NVIDIA Corporation/PhysX/Common:/mnt/c/WINDOWS/system32:/mnt/c/WINDOWS:/mnt/c/WINDOWS/System32/Wbem:/mnt/c/WINDOWS/System32/WindowsPowerShell/v1.0/:/mnt/c/WINDOWS/System32/OpenSSH/:/mnt/c/ProgramData/ComposerSetup/bin:/mnt/c/Program Files/Git/cmd:/mnt/c/Program Files/nodejs/:/mnt/c/Program Files/Docker/Docker/resources/bin:/mnt/c/ProgramData/chocolatey/bin:/mnt/c/tools/php84:/mnt/c/Users/Van4o/AppData/Local/Programs/Python/Launcher/:/mnt/c/Users/Van4o/AppData/Local/Microsoft/WindowsApps:/mnt/c/Users/Van4o/AppData/Local/Programs/Microsoft VS Code/bin:/mnt/c/Users/Van4o/AppData/Roaming/Composer/vendor/bin:/mnt/c/Program Files/JetBrains/PhpStorm 2024.3.2.1/bin:/mnt/c/Users/Van4o/AppData/Roaming/npm:/mnt/c/Users/Van4o/AppData/Local/JetBrains/Toolbox/scripts:/mnt/c/Program Files/JetBrains/PyCharm 2024.3.5/bin:/mnt/c/Users/Van4o/AppData/Local/Microsoft/WindowsApps:/mnt/c/Users/Van4o/AppData/Local/Microsoft/WinGet/Packages/PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe:/snap/bin',
				'XDG_RUNTIME_DIR' => '/run/user/1000/',
				'MAIL_PASSWORD' => 'null',
				'AWS_BUCKET' => '',
				'DISPLAY' => ':0',
				'LANG' => 'C.UTF-8',
				'SESSION_ENCRYPT' => 'false',
				'LS_COLORS' => 'rs=0:di=01;34:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:mi=00:su=37;41:sg=30;43:ca=00:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.tar=01;31:*.tgz=01;31:*.arc=01;31:*.arj=01;31:*.taz=01;31:*.lha=01;31:*.lz4=01;31:*.lzh=01;31:*.lzma=01;31:*.tlz=01;31:*.txz=01;31:*.tzo=01;31:*.t7z=01;31:*.zip=01;31:*.z=01;31:*.dz=01;31:*.gz=01;31:*.lrz=01;31:*.lz=01;31:*.lzo=01;31:*.xz=01;31:*.zst=01;31:*.tzst=01;31:*.bz2=01;31:*.bz=01;31:*.tbz=01;31:*.tbz2=01;31:*.tz=01;31:*.deb=01;31:*.rpm=01;31:*.jar=01;31:*.war=01;31:*.ear=01;31:*.sar=01;31:*.rar=01;31:*.alz=01;31:*.ace=01;31:*.zoo=01;31:*.cpio=01;31:*.7z=01;31:*.rz=01;31:*.cab=01;31:*.wim=01;31:*.swm=01;31:*.dwm=01;31:*.esd=01;31:*.avif=01;35:*.jpg=01;35:*.jpeg=01;35:*.mjpg=01;35:*.mjpeg=01;35:*.gif=01;35:*.bmp=01;35:*.pbm=01;35:*.pgm=01;35:*.ppm=01;35:*.tga=01;35:*.xbm=01;35:*.xpm=01;35:*.tif=01;35:*.tiff=01;35:*.png=01;35:*.svg=01;35:*.svgz=01;35:*.mng=01;35:*.pcx=01;35:*.mov=01;35:*.mpg=01;35:*.mpeg=01;35:*.m2v=01;35:*.mkv=01;35:*.webm=01;35:*.webp=01;35:*.ogm=01;35:*.mp4=01;35:*.m4v=01;35:*.mp4v=01;35:*.vob=01;35:*.qt=01;35:*.nuv=01;35:*.wmv=01;35:*.asf=01;35:*.rm=01;35:*.rmvb=01;35:*.flc=01;35:*.avi=01;35:*.fli=01;35:*.flv=01;35:*.gl=01;35:*.dl=01;35:*.xcf=01;35:*.xwd=01;35:*.yuv=01;35:*.cgm=01;35:*.emf=01;35:*.ogv=01;35:*.ogx=01;35:*.aac=00;36:*.au=00;36:*.flac=00;36:*.m4a=00;36:*.mid=00;36:*.midi=00;36:*.mka=00;36:*.mp3=00;36:*.mpc=00;36:*.ogg=00;36:*.ra=00;36:*.wav=00;36:*.oga=00;36:*.opus=00;36:*.spx=00;36:*.xspf=00;36:*~=00;90:*#=00;90:*.bak=00;90:*.crdownload=00;90:*.dpkg-dist=00;90:*.dpkg-new=00;90:*.dpkg-old=00;90:*.dpkg-tmp=00;90:*.old=00;90:*.orig=00;90:*.part=00;90:*.rej=00;90:*.rpmnew=00;90:*.rpmorig=00;90:*.rpmsave=00;90:*.swp=00;90:*.tmp=00;90:*.ucf-dist=00;90:*.ucf-new=00;90:*.ucf-old=00;90:',
				'APP_FAKER_LOCALE' => 'en_US',
				'FILESYSTEM_DISK' => 'local',
				'MAIL_HOST' => '127.0.0.1',
				'SHELL' => '/bin/bash',
				'APP_MAINTENANCE_DRIVER' => 'file',
				'BCRYPT_ROUNDS' => '12',
				'SESSION_LIFETIME' => '120',
				'BROADCAST_CONNECTION' => 'log',
				'MAIL_SCHEME' => 'null',
				'AWS_ACCESS_KEY_ID' => '',
				'JWT_SECRET' => 'X4BWTPgjbVZDG22f3riqosO2XmtHUVjw0Vjt5ptB72tJAlqMfeD7xz6bBBpuY4C9',
				'LESSCLOSE' => '/usr/bin/lesspipe %s %s',
				'APP_FALLBACK_LOCALE' => 'en',
				'AWS_SECRET_ACCESS_KEY' => '',
				'REDIS_PASSWORD' => 'null',
				'LOG_DEPRECATIONS_CHANNEL' => 'null',
				'SESSION_DOMAIN' => 'null',
				'CACHE_STORE' => 'database',
				'MAIL_MAILER' => 'log',
				'MAIL_PORT' => '2525',
				'PWD' => '/home/ilijaristov67/projects/expense_management_backend',
				'APP_ENV' => 'local',
				'APP_KEY' => 'base64:oKYOwW4UImjWjxUxkaPGpbWLn80H5MBmw5UMPqGu2Ns=',
				'DB_PASSWORD' => '',
				'REDIS_HOST' => '127.0.0.1',
				'XDG_DATA_DIRS' => '/usr/local/share:/usr/share:/var/lib/snapd/desktop',
				'LINES' => '30',
				'DB_HOST' => 'db',
				'QUEUE_CONNECTION' => 'database',
				'WSL2_GUI_APPS_ENABLED' => '1',
				'HOSTTYPE' => 'x86_64',
				'APP_LOCALE' => 'en',
				'WSLENV' => '',
				'PHP_CLI_SERVER_WORKERS' => '4',
			],
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'singleReflectionFile': return null;
			case $key === 'singleReflectionInsteadOfFile': return null;
			case $key === 'analysedPaths': return null;
			case $key === 'analysedPathsFromConfig': return null;
			case $key === 'sysGetTempDir': return sys_get_temp_dir();
			case $key === 'pro': return [
			'dnsServers' => ['1.1.1.2'],
			'tmpDir' => ($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
		];
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map(function ($key) { $this->getParameter($key); }, [
			'singleReflectionFile',
			'singleReflectionInsteadOfFile',
			'analysedPaths',
			'analysedPathsFromConfig',
			'sysGetTempDir',
			'pro',
		]);
		return parent::getParameters();
	}
}
