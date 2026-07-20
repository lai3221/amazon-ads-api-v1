<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * A combination of ISO-639 standard for language code and ISO-3166 for country code. LanguageLocale Enum:.
 *
 * @generated from Amazon Ads API v1 schema LanguageLocale.
 */
enum LanguageLocale: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LanguageLocale';

    case AA_ET = 'aa_ET';
    case AB_GE = 'ab_GE';
    case AE_INT = 'ae_INT';
    case AF_ZA = 'af_ZA';
    case AK_GH = 'ak_GH';
    case AM_ET = 'am_ET';
    case AN_ES = 'an_ES';
    case AR_AE = 'ar_AE';
    case AS_IN = 'as_IN';
    case AV_RU = 'av_RU';
    case AY_BO = 'ay_BO';
    case AZ_AZ = 'az_AZ';
    case BA_RU = 'ba_RU';
    case BE_BY = 'be_BY';
    case BG_BG = 'bg_BG';
    case BH_IN = 'bh_IN';
    case BI_VU = 'bi_VU';
    case BM_ML = 'bm_ML';
    case BN_BD = 'bn_BD';
    case BO_CN = 'bo_CN';
    case BR_FR = 'br_FR';
    case BS_BA = 'bs_BA';
    case CA_ES = 'ca_ES';
    case CE_RU = 'ce_RU';
    case CH_GU = 'ch_GU';
    case CO_FR = 'co_FR';
    case CR_CA = 'cr_CA';
    case CS_CZ = 'cs_CZ';
    case CU_INT = 'cu_INT';
    case CV_RU = 'cv_RU';
    case CY_GB = 'cy_GB';
    case DA_DK = 'da_DK';
    case DE_DE = 'de_DE';
    case DV_MV = 'dv_MV';
    case DZ_BT = 'dz_BT';
    case EE_GH = 'ee_GH';
    case EL_GR = 'el_GR';
    case EN_US = 'en_US';
    case EO_INT = 'eo_INT';
    case ES_ES = 'es_ES';
    case ET_EE = 'et_EE';
    case EU_ES = 'eu_ES';
    case FA_IR = 'fa_IR';
    case FF_SN = 'ff_SN';
    case FI_FI = 'fi_FI';
    case FJ_FJ = 'fj_FJ';
    case FO_FO = 'fo_FO';
    case FR_FR = 'fr_FR';
    case FY_NL = 'fy_NL';
    case GA_IE = 'ga_IE';
    case GD_GB = 'gd_GB';
    case GL_ES = 'gl_ES';
    case GN_PY = 'gn_PY';
    case GU_IN = 'gu_IN';
    case GV_IM = 'gv_IM';
    case HA_NG = 'ha_NG';
    case HE_IL = 'he_IL';
    case HI_IN = 'hi_IN';
    case HO_PG = 'ho_PG';
    case HR_HR = 'hr_HR';
    case HT_HT = 'ht_HT';
    case HU_HU = 'hu_HU';
    case HY_AM = 'hy_AM';
    case HZ_NA = 'hz_NA';
    case IA_INT = 'ia_INT';
    case ID_ID = 'id_ID';
    case IE_INT = 'ie_INT';
    case IG_NG = 'ig_NG';
    case II_CN = 'ii_CN';
    case IK_US = 'ik_US';
    case IO_INT = 'io_INT';
    case IS_IS = 'is_IS';
    case IT_IT = 'it_IT';
    case IU_CA = 'iu_CA';
    case IW_IL = 'iw_IL';
    case JA_JP = 'ja_JP';
    case JI_IL = 'ji_IL';
    case JV_ID = 'jv_ID';
    case KA_GE = 'ka_GE';
    case KG_CD = 'kg_CD';
    case KI_KE = 'ki_KE';
    case KJ_NA = 'kj_NA';
    case KK_KZ = 'kk_KZ';
    case KL_GL = 'kl_GL';
    case KM_KH = 'km_KH';
    case KN_IN = 'kn_IN';
    case KO_KR = 'ko_KR';
    case KR_NG = 'kr_NG';
    case KS_IN = 'ks_IN';
    case KU_TR = 'ku_TR';
    case KV_RU = 'kv_RU';
    case KW_GB = 'kw_GB';
    case KY_KG = 'ky_KG';
    case LA_VA = 'la_VA';
    case LB_LU = 'lb_LU';
    case LG_UG = 'lg_UG';
    case LI_NL = 'li_NL';
    case LN_CD = 'ln_CD';
    case LO_LA = 'lo_LA';
    case LT_LT = 'lt_LT';
    case LU_CD = 'lu_CD';
    case LV_LV = 'lv_LV';
    case MG_MG = 'mg_MG';
    case MH_MH = 'mh_MH';
    case MI_NZ = 'mi_NZ';
    case MK_MK = 'mk_MK';
    case ML_IN = 'ml_IN';
    case MN_MN = 'mn_MN';
    case MO_MD = 'mo_MD';
    case MR_IN = 'mr_IN';
    case MS_MY = 'ms_MY';
    case MT_MT = 'mt_MT';
    case MY_MM = 'my_MM';
    case NA_NR = 'na_NR';
    case NB_NO = 'nb_NO';
    case ND_ZW = 'nd_ZW';
    case NE_NP = 'ne_NP';
    case NG_NA = 'ng_NA';
    case NL_NL = 'nl_NL';
    case NN_NO = 'nn_NO';
    case NO_NO = 'no_NO';
    case NR_ZA = 'nr_ZA';
    case NV_US = 'nv_US';
    case NY_MW = 'ny_MW';
    case OC_FR = 'oc_FR';
    case OJ_CA = 'oj_CA';
    case OM_ET = 'om_ET';
    case OR_IN = 'or_IN';
    case OS_RU = 'os_RU';
    case PA_IN = 'pa_IN';
    case PI_IN = 'pi_IN';
    case PL_PL = 'pl_PL';
    case PS_AF = 'ps_AF';
    case PT_PT = 'pt_PT';
    case QU_PE = 'qu_PE';
    case RM_CH = 'rm_CH';
    case RN_BI = 'rn_BI';
    case RO_RO = 'ro_RO';
    case RU_RU = 'ru_RU';
    case RW_RW = 'rw_RW';
    case SA_IN = 'sa_IN';
    case SC_IT = 'sc_IT';
    case SD_PK = 'sd_PK';
    case SE_NO = 'se_NO';
    case SG_CF = 'sg_CF';
    case SI_LK = 'si_LK';
    case SK_SK = 'sk_SK';
    case SL_SI = 'sl_SI';
    case SM_WS = 'sm_WS';
    case SN_ZW = 'sn_ZW';
    case SO_SO = 'so_SO';
    case SQ_AL = 'sq_AL';
    case SR_RS = 'sr_RS';
    case SS_SZ = 'ss_SZ';
    case ST_LS = 'st_LS';
    case SU_ID = 'su_ID';
    case SV_SE = 'sv_SE';
    case SW_TZ = 'sw_TZ';
    case TA_IN = 'ta_IN';
    case TE_IN = 'te_IN';
    case TG_TJ = 'tg_TJ';
    case TH_TH = 'th_TH';
    case TI_ET = 'ti_ET';
    case TK_TM = 'tk_TM';
    case TL_PH = 'tl_PH';
    case TN_BW = 'tn_BW';
    case TO_TO = 'to_TO';
    case TR_TR = 'tr_TR';
    case TS_ZA = 'ts_ZA';
    case TT_RU = 'tt_RU';
    case TW_GH = 'tw_GH';
    case TY_PF = 'ty_PF';
    case UG_CN = 'ug_CN';
    case UK_UA = 'uk_UA';
    case UR_PK = 'ur_PK';
    case UZ_UZ = 'uz_UZ';
    case VE_ZA = 've_ZA';
    case VI_VN = 'vi_VN';
    case VO_INT = 'vo_INT';
    case WA_BE = 'wa_BE';
    case WO_SN = 'wo_SN';
    case XH_ZA = 'xh_ZA';
    case YI_IL = 'yi_IL';
    case YO_NG = 'yo_NG';
    case ZA_CN = 'za_CN';
    case ZH_CN = 'zh_CN';
    case ZU_ZA = 'zu_ZA';

    /**
     * Returns every serialized OpenAPI enum value.
     *
     * @return list<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
