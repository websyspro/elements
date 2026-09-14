<?php

use Websyspro\Elements\Enums\IconTypeWeight;
use Websyspro\Elements\Doms\StyleLink;
use Websyspro\Elements\Doms\DocType;
use Websyspro\Elements\Doms\Body;
use Websyspro\Elements\Doms\Head;
use Websyspro\Elements\Doms\Html;
use Websyspro\Elements\Doms\Meta;
use Websyspro\Elements\Doms\App;
use Websyspro\Elements\Doms\Div;

/* Icons List */
use Websyspro\Elements\Doms\Icons\Icon10k;
use Websyspro\Elements\Doms\Icons\Icon10mp;
use Websyspro\Elements\Doms\Icons\Icon11mp;
use Websyspro\Elements\Doms\Icons\Icon123;
use Websyspro\Elements\Doms\Icons\Icon12mp;
use Websyspro\Elements\Doms\Icons\Icon13mp;
use Websyspro\Elements\Doms\Icons\Icon14mp;
use Websyspro\Elements\Doms\Icons\Icon15mp;
use Websyspro\Elements\Doms\Icons\Icon16mp;
use Websyspro\Elements\Doms\Icons\Icon17mp;
use Websyspro\Elements\Doms\Icons\Icon18mp;
use Websyspro\Elements\Doms\Icons\Icon18UpRating;
use Websyspro\Elements\Doms\Icons\Icon19mp;
use Websyspro\Elements\Doms\Icons\Icon1k;
use Websyspro\Elements\Doms\Icons\Icon1kPlus;
use Websyspro\Elements\Doms\Icons\Icon1xMobiledata;
use Websyspro\Elements\Doms\Icons\Icon1xMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon20mp;
use Websyspro\Elements\Doms\Icons\Icon21mp;
use Websyspro\Elements\Doms\Icons\Icon22mp;
use Websyspro\Elements\Doms\Icons\Icon23mp;
use Websyspro\Elements\Doms\Icons\Icon24fpsSelect;
use Websyspro\Elements\Doms\Icons\Icon24mp;
use Websyspro\Elements\Doms\Icons\Icon2d;
use Websyspro\Elements\Doms\Icons\Icon2k;
use Websyspro\Elements\Doms\Icons\Icon2kPlus;
use Websyspro\Elements\Doms\Icons\Icon2mp;
use Websyspro\Elements\Doms\Icons\Icon30fps;
use Websyspro\Elements\Doms\Icons\Icon30fpsSelect;
use Websyspro\Elements\Doms\Icons\Icon360;
use Websyspro\Elements\Doms\Icons\Icon3dRotation;
use Websyspro\Elements\Doms\Icons\Icon3gMobiledata;
use Websyspro\Elements\Doms\Icons\Icon3gMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon3k;
use Websyspro\Elements\Doms\Icons\Icon3kPlus;
use Websyspro\Elements\Doms\Icons\Icon3mp;
use Websyspro\Elements\Doms\Icons\Icon3p;
use Websyspro\Elements\Doms\Icons\Icon4gMobiledata;
use Websyspro\Elements\Doms\Icons\Icon4gMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon4gPlusMobiledata;
use Websyspro\Elements\Doms\Icons\Icon4k;
use Websyspro\Elements\Doms\Icons\Icon4kPlus;
use Websyspro\Elements\Doms\Icons\Icon4mp;
use Websyspro\Elements\Doms\Icons\Icon50mp;
use Websyspro\Elements\Doms\Icons\Icon5g;
use Websyspro\Elements\Doms\Icons\Icon5gMobiledataBadge;
use Websyspro\Elements\Doms\Icons\Icon5k;
use Websyspro\Elements\Doms\Icons\Icon5kPlus;
use Websyspro\Elements\Doms\Icons\Icon5mp;
use Websyspro\Elements\Doms\Icons\Icon60fps;
use Websyspro\Elements\Doms\Icons\Icon60fpsSelect;
use Websyspro\Elements\Doms\Icons\Icon6FtApart;
use Websyspro\Elements\Doms\Icons\Icon6k;
use Websyspro\Elements\Doms\Icons\Icon6kPlus;
use Websyspro\Elements\Doms\Icons\Icon6mp;
use Websyspro\Elements\Doms\Icons\Icon7k;
use Websyspro\Elements\Doms\Icons\Icon7kPlus;
use Websyspro\Elements\Doms\Icons\Icon7mp;
use Websyspro\Elements\Doms\Icons\Icon8k;
use Websyspro\Elements\Doms\Icons\Icon8kPlus;
use Websyspro\Elements\Doms\Icons\Icon8mp;
use Websyspro\Elements\Doms\Icons\Icon9k;
use Websyspro\Elements\Doms\Icons\Icon9kPlus;
use Websyspro\Elements\Doms\Icons\Icon9mp;
use Websyspro\Elements\Doms\Icons\IconAbc;
use Websyspro\Elements\Doms\Icons\IconAccessibility;
use Websyspro\Elements\Doms\Icons\IconAccessibilityNew;
use Websyspro\Elements\Doms\Icons\IconAccessible;
use Websyspro\Elements\Doms\Icons\IconAccessibleForward;
use Websyspro\Elements\Doms\Icons\IconAccountBalance;
use Websyspro\Elements\Doms\Icons\IconAccountBalanceWallet;
use Websyspro\Elements\Doms\Icons\IconAccountBox;
use Websyspro\Elements\Doms\Icons\IconAccountChild;
use Websyspro\Elements\Doms\Icons\IconAccountChildInvert;
use Websyspro\Elements\Doms\Icons\IconAccountCircle;
use Websyspro\Elements\Doms\Icons\IconAccountCircleOff;
use Websyspro\Elements\Doms\Icons\IconAccountTree;
use Websyspro\Elements\Doms\Icons\IconActionKey;
use Websyspro\Elements\Doms\Icons\IconActivityZone;
use Websyspro\Elements\Doms\Icons\IconAcUnit;
use Websyspro\Elements\Doms\Icons\IconAcute;
use Websyspro\Elements\Doms\Icons\IconAd;
use Websyspro\Elements\Doms\Icons\IconAdaptiveAudioMic;
use Websyspro\Elements\Doms\Icons\IconAdaptiveAudioMicOff;
use Websyspro\Elements\Doms\Icons\IconAdb;
use Websyspro\Elements\Doms\Icons\IconAdd;
use Websyspro\Elements\Doms\Icons\IconAdd2;
use Websyspro\Elements\Doms\Icons\IconAddAd;
use Websyspro\Elements\Doms\Icons\IconAddAlert;
use Websyspro\Elements\Doms\Icons\IconAddAPhoto;
use Websyspro\Elements\Doms\Icons\IconAddBox;
use Websyspro\Elements\Doms\Icons\IconAddBusiness;
use Websyspro\Elements\Doms\Icons\IconAddCall;
use Websyspro\Elements\Doms\Icons\IconAddCard;
use Websyspro\Elements\Doms\Icons\IconAddChart;
use Websyspro\Elements\Doms\Icons\IconAddCircle;
use Websyspro\Elements\Doms\Icons\IconAddColumnLeft;
use Websyspro\Elements\Doms\Icons\IconAddColumnRight;
use Websyspro\Elements\Doms\Icons\IconAddComment;
use Websyspro\Elements\Doms\Icons\IconAddDiamond;
use Websyspro\Elements\Doms\Icons\IconAddHome;
use Websyspro\Elements\Doms\Icons\IconAddHomeWork;
use Websyspro\Elements\Doms\Icons\IconAddLink;
use Websyspro\Elements\Doms\Icons\IconAddLocation;
use Websyspro\Elements\Doms\Icons\IconAddLocationAlt;
use Websyspro\Elements\Doms\Icons\IconAddModerator;
use Websyspro\Elements\Doms\Icons\IconAddNotes;
use Websyspro\Elements\Doms\Icons\IconAddPhotoAlternate;
use Websyspro\Elements\Doms\Icons\IconAddReaction;
use Websyspro\Elements\Doms\Icons\IconAddRoad;
use Websyspro\Elements\Doms\Icons\IconAddRowAbove;
use Websyspro\Elements\Doms\Icons\IconAddRowBelow;
use Websyspro\Elements\Doms\Icons\IconAddShoppingCart;
use Websyspro\Elements\Doms\Icons\IconAddTask;
use Websyspro\Elements\Doms\Icons\IconAddToDrive;
use Websyspro\Elements\Doms\Icons\IconAddToHomeScreen;
use Websyspro\Elements\Doms\Icons\IconAddToQueue;
use Websyspro\Elements\Doms\Icons\IconAddTriangle;
use Websyspro\Elements\Doms\Icons\IconAdfScanner;
use Websyspro\Elements\Doms\Icons\IconAdGroup;
use Websyspro\Elements\Doms\Icons\IconAdGroupOff;
use Websyspro\Elements\Doms\Icons\IconAdjust;
use Websyspro\Elements\Doms\Icons\IconAdminMeds;
use Websyspro\Elements\Doms\Icons\IconAdminPanelSettings;
use Websyspro\Elements\Doms\Icons\IconAdOff;
use Websyspro\Elements\Doms\Icons\IconAdsClick;
use Websyspro\Elements\Doms\Icons\IconAdUnits;
use Websyspro\Elements\Doms\Icons\IconAgender;
use Websyspro\Elements\Doms\Icons\IconAgriculture;
use Websyspro\Elements\Doms\Icons\IconAir;
use Websyspro\Elements\Doms\Icons\IconAirFreshener;
use Websyspro\Elements\Doms\Icons\IconAirlines;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatFlat;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatFlatAngled;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatIndividualSuite;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatLegroomExtra;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatLegroomNormal;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatLegroomReduced;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatReclineExtra;
use Websyspro\Elements\Doms\Icons\IconAirlineSeatReclineNormal;
use Websyspro\Elements\Doms\Icons\IconAirlineStops;
use Websyspro\Elements\Doms\Icons\IconAirplanemodeInactive;
use Websyspro\Elements\Doms\Icons\IconAirplaneTicket;
use Websyspro\Elements\Doms\Icons\IconAirplay;
use Websyspro\Elements\Doms\Icons\IconAirportShuttle;
use Websyspro\Elements\Doms\Icons\IconAirPurifier;
use Websyspro\Elements\Doms\Icons\IconAirPurifierGen;
use Websyspro\Elements\Doms\Icons\IconAirware;
use Websyspro\Elements\Doms\Icons\IconAirwave;
use Websyspro\Elements\Doms\Icons\IconAlarm;
use Websyspro\Elements\Doms\Icons\IconAlarmAdd;
use Websyspro\Elements\Doms\Icons\IconAlarmOff;
use Websyspro\Elements\Doms\Icons\IconAlarmOn;
use Websyspro\Elements\Doms\Icons\IconAlarmSmartWake;
use Websyspro\Elements\Doms\Icons\IconAlbum;
use Websyspro\Elements\Doms\Icons\IconAlignCenter;
use Websyspro\Elements\Doms\Icons\IconAlignEnd;
use Websyspro\Elements\Doms\Icons\IconAlignFlexCenter;
use Websyspro\Elements\Doms\Icons\IconAlignFlexEnd;
use Websyspro\Elements\Doms\Icons\IconAlignFlexStart;
use Websyspro\Elements\Doms\Icons\IconAlignHorizontalCenter;
use Websyspro\Elements\Doms\Icons\IconAlignHorizontalLeft;
use Websyspro\Elements\Doms\Icons\IconAlignHorizontalRight;
use Websyspro\Elements\Doms\Icons\IconAlignItemsStretch;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyCenter;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyFlexEnd;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyFlexStart;
use Websyspro\Elements\Doms\Icons\IconAlignJustifySpaceAround;
use Websyspro\Elements\Doms\Icons\IconAlignJustifySpaceBetween;
use Websyspro\Elements\Doms\Icons\IconAlignJustifySpaceEven;
use Websyspro\Elements\Doms\Icons\IconAlignJustifyStretch;
use Websyspro\Elements\Doms\Icons\IconAlignSelfStretch;
use Websyspro\Elements\Doms\Icons\IconAlignSpaceAround;
use Websyspro\Elements\Doms\Icons\IconAlignSpaceBetween;
use Websyspro\Elements\Doms\Icons\IconAlignSpaceEven;
use Websyspro\Elements\Doms\Icons\IconAlignStart;
use Websyspro\Elements\Doms\Icons\IconAlignStretch;
use Websyspro\Elements\Doms\Icons\IconAlignVerticalBottom;
use Websyspro\Elements\Doms\Icons\IconAlignVerticalCenter;
use Websyspro\Elements\Doms\Icons\IconAlignVerticalTop;
use Websyspro\Elements\Doms\Icons\IconAllergies;
use Websyspro\Elements\Doms\Icons\IconAllergy;
use Websyspro\Elements\Doms\Icons\IconAllInbox;
use Websyspro\Elements\Doms\Icons\IconAllInclusive;
use Websyspro\Elements\Doms\Icons\IconAllMatch;
use Websyspro\Elements\Doms\Icons\IconAllOut;
use Websyspro\Elements\Doms\Icons\IconAlternateEmail;
use Websyspro\Elements\Doms\Icons\IconAltitude;
use Websyspro\Elements\Doms\Icons\IconAltRoute;
use Websyspro\Elements\Doms\Icons\IconAmbulance;
use Websyspro\Elements\Doms\Icons\IconAmend;
use Websyspro\Elements\Doms\Icons\IconAmpStories;
use Websyspro\Elements\Doms\Icons\IconAnalytics;
use Websyspro\Elements\Doms\Icons\IconAnchor;
use Websyspro\Elements\Doms\Icons\IconAndroid;
use Websyspro\Elements\Doms\Icons\IconAnimatedImages;
use Websyspro\Elements\Doms\Icons\IconAnimation;
use Websyspro\Elements\Doms\Icons\IconAod;
use Websyspro\Elements\Doms\Icons\IconAodTablet;
use Websyspro\Elements\Doms\Icons\IconAodWatch;
use Websyspro\Elements\Doms\Icons\IconApartment;
use Websyspro\Elements\Doms\Icons\IconApi;
use Websyspro\Elements\Doms\Icons\IconApkDocument;
use Websyspro\Elements\Doms\Icons\IconApkInstall;
use Websyspro\Elements\Doms\Icons\IconApparel;
use Websyspro\Elements\Doms\Icons\IconAppBadging;
use Websyspro\Elements\Doms\Icons\IconAppBlocking;
use Websyspro\Elements\Doms\Icons\IconAppPromo;
use Websyspro\Elements\Doms\Icons\IconAppRegistration;
use Websyspro\Elements\Doms\Icons\IconApproval;
use Websyspro\Elements\Doms\Icons\IconApprovalDelegation;
use Websyspro\Elements\Doms\Icons\IconApps;
use Websyspro\Elements\Doms\Icons\IconAppShortcut;
use Websyspro\Elements\Doms\Icons\IconAppsOutage;
use Websyspro\Elements\Doms\Icons\IconAq;
use Websyspro\Elements\Doms\Icons\IconAqIndoor;
use Websyspro\Elements\Doms\Icons\IconArchitecture;
use Websyspro\Elements\Doms\Icons\IconArchive;
use Websyspro\Elements\Doms\Icons\IconAreaChart;
use Websyspro\Elements\Doms\Icons\IconArmingCountdown;
use Websyspro\Elements\Doms\Icons\IconArOnYou;
use Websyspro\Elements\Doms\Icons\IconArrowAndEdge;
use Websyspro\Elements\Doms\Icons\IconArrowBack;
use Websyspro\Elements\Doms\Icons\IconArrowBack2;
use Websyspro\Elements\Doms\Icons\IconArrowBackIos;
use Websyspro\Elements\Doms\Icons\IconArrowBackIosNew;
use Websyspro\Elements\Doms\Icons\IconArrowCircleDown;
use Websyspro\Elements\Doms\Icons\IconArrowCircleLeft;
use Websyspro\Elements\Doms\Icons\IconArrowCircleRight;
use Websyspro\Elements\Doms\Icons\IconArrowCircleUp;
use Websyspro\Elements\Doms\Icons\IconArrowCoolDown;
use Websyspro\Elements\Doms\Icons\IconArrowDownward;
use Websyspro\Elements\Doms\Icons\IconArrowDownwardAlt;
use Websyspro\Elements\Doms\Icons\IconArrowDropDown;
use Websyspro\Elements\Doms\Icons\IconArrowDropDownCircle;
use Websyspro\Elements\Doms\Icons\IconArrowDropUp;
use Websyspro\Elements\Doms\Icons\IconArrowForward;
use Websyspro\Elements\Doms\Icons\IconArrowForwardIos;
use Websyspro\Elements\Doms\Icons\IconArrowInsert;
use Websyspro\Elements\Doms\Icons\IconArrowLeft;
use Websyspro\Elements\Doms\Icons\IconArrowLeftAlt;
use Websyspro\Elements\Doms\Icons\IconArrowMenuClose;
use Websyspro\Elements\Doms\Icons\IconArrowMenuOpen;
use Websyspro\Elements\Doms\Icons\IconArrowOrEdge;
use Websyspro\Elements\Doms\Icons\IconArrowOutward;
use Websyspro\Elements\Doms\Icons\IconArrowRange;
use Websyspro\Elements\Doms\Icons\IconArrowRight;
use Websyspro\Elements\Doms\Icons\IconArrowRightAlt;
use Websyspro\Elements\Doms\Icons\IconArrowSelectorTool;
use Websyspro\Elements\Doms\Icons\IconArrowsInput;
use Websyspro\Elements\Doms\Icons\IconArrowsMoreDown;
use Websyspro\Elements\Doms\Icons\IconArrowsMoreUp;
use Websyspro\Elements\Doms\Icons\IconArrowsOutput;
use Websyspro\Elements\Doms\Icons\IconArrowsOutward;
use Websyspro\Elements\Doms\Icons\IconArrowSplit;
use Websyspro\Elements\Doms\Icons\IconArrowTopLeft;
use Websyspro\Elements\Doms\Icons\IconArrowTopRight;
use Websyspro\Elements\Doms\Icons\IconArrowUploadProgress;
use Websyspro\Elements\Doms\Icons\IconArrowUploadReady;
use Websyspro\Elements\Doms\Icons\IconArrowUpward;
use Websyspro\Elements\Doms\Icons\IconArrowUpwardAlt;
use Websyspro\Elements\Doms\Icons\IconArrowWarmUp;
use Websyspro\Elements\Doms\Icons\IconArStickers;
use Websyspro\Elements\Doms\Icons\IconArticle;
use Websyspro\Elements\Doms\Icons\IconArticleShortcut;
use Websyspro\Elements\Doms\Icons\IconArtist;
use Websyspro\Elements\Doms\Icons\IconArtTrack;
use Websyspro\Elements\Doms\Icons\IconAspectRatio;
use Websyspro\Elements\Doms\Icons\IconAssignment;
use Websyspro\Elements\Doms\Icons\IconAssignmentAdd;
use Websyspro\Elements\Doms\Icons\IconAssignmentInd;
use Websyspro\Elements\Doms\Icons\IconAssignmentLate;
use Websyspro\Elements\Doms\Icons\IconAssignmentReturn;
use Websyspro\Elements\Doms\Icons\IconAssignmentReturned;
use Websyspro\Elements\Doms\Icons\IconAssignmentTurnedIn;
use Websyspro\Elements\Doms\Icons\IconAssistantDevice;
use Websyspro\Elements\Doms\Icons\IconAssistantDirection;
use Websyspro\Elements\Doms\Icons\IconAssistantNavigation;
use Websyspro\Elements\Doms\Icons\IconAssistantOnHub;
use Websyspro\Elements\Doms\Icons\IconAssistWalker;
use Websyspro\Elements\Doms\Icons\IconAssuredWorkload;
use Websyspro\Elements\Doms\Icons\IconAsterisk;
use Websyspro\Elements\Doms\Icons\IconAtm;
use Websyspro\Elements\Doms\Icons\IconAtr;
use Websyspro\Elements\Doms\Icons\IconAttachEmail;
use Websyspro\Elements\Doms\Icons\IconAttachFile;
use Websyspro\Elements\Doms\Icons\IconAttachFileAdd;
use Websyspro\Elements\Doms\Icons\IconAttachFileOff;
use Websyspro\Elements\Doms\Icons\IconAttachment;
use Websyspro\Elements\Doms\Icons\IconAttachMoney;
use Websyspro\Elements\Doms\Icons\IconAttractions;
use Websyspro\Elements\Doms\Icons\IconAttribution;
use Websyspro\Elements\Doms\Icons\IconAudioDescription;
use Websyspro\Elements\Doms\Icons\IconAudioFile;
use Websyspro\Elements\Doms\Icons\IconAudioVideoReceiver;
use Websyspro\Elements\Doms\Icons\IconAutoAwesomeMosaic;
use Websyspro\Elements\Doms\Icons\IconAutoAwesomeMotion;
use Websyspro\Elements\Doms\Icons\IconAutoDelete;
use Websyspro\Elements\Doms\Icons\IconAutofpsSelect;
use Websyspro\Elements\Doms\Icons\IconAutomation;
use Websyspro\Elements\Doms\Icons\IconAutopause;
use Websyspro\Elements\Doms\Icons\IconAutoplay;
use Websyspro\Elements\Doms\Icons\IconAutoReadPause;
use Websyspro\Elements\Doms\Icons\IconAutoReadPlay;
use Websyspro\Elements\Doms\Icons\IconAutorenew;
use Websyspro\Elements\Doms\Icons\IconAutostop;
use Websyspro\Elements\Doms\Icons\IconAutoStories;
use Websyspro\Elements\Doms\Icons\IconAutoTowing;
use Websyspro\Elements\Doms\Icons\IconAutoTransmission;
use Websyspro\Elements\Doms\Icons\IconAv1;
use Websyspro\Elements\Doms\Icons\IconAvc;
use Websyspro\Elements\Doms\Icons\IconAvgPace;
use Websyspro\Elements\Doms\Icons\IconAvgTime;
use Websyspro\Elements\Doms\Icons\IconAvTimer;
use Websyspro\Elements\Doms\Icons\IconAwardStar;
use Websyspro\Elements\Doms\Icons\IconAzm;
use Websyspro\Elements\Doms\Icons\IconBabyChangingStation;
use Websyspro\Elements\Doms\Icons\IconBackgroundDotLarge;
use Websyspro\Elements\Doms\Icons\IconBackgroundDotSmall;
use Websyspro\Elements\Doms\Icons\IconBackgroundGridSmall;
use Websyspro\Elements\Doms\Icons\IconBackgroundReplace;
use Websyspro\Elements\Doms\Icons\IconBackHand;
use Websyspro\Elements\Doms\Icons\IconBacklightHigh;
use Websyspro\Elements\Doms\Icons\IconBacklightHighOff;
use Websyspro\Elements\Doms\Icons\IconBacklightLow;
use Websyspro\Elements\Doms\Icons\IconBackpack;
use Websyspro\Elements\Doms\Icons\IconBackspace;
use Websyspro\Elements\Doms\Icons\IconBackToTab;
use Websyspro\Elements\Doms\Icons\IconBackup;
use Websyspro\Elements\Doms\Icons\IconBackupTable;
use Websyspro\Elements\Doms\Icons\IconBadge;
use Websyspro\Elements\Doms\Icons\IconBadgeCriticalBattery;
use Websyspro\Elements\Doms\Icons\IconBakeryDining;
use Websyspro\Elements\Doms\Icons\IconBalance;
use Websyspro\Elements\Doms\Icons\IconBalcony;
use Websyspro\Elements\Doms\Icons\IconBallot;
use Websyspro\Elements\Doms\Icons\IconBarChart;
use Websyspro\Elements\Doms\Icons\IconBarChart4Bars;
use Websyspro\Elements\Doms\Icons\IconBarChartOff;
use Websyspro\Elements\Doms\Icons\IconBarcode;
use Websyspro\Elements\Doms\Icons\IconBarcodeReader;
use Websyspro\Elements\Doms\Icons\IconBarcodeScanner;
use Websyspro\Elements\Doms\Icons\IconBarefoot;
use Websyspro\Elements\Doms\Icons\IconBatchPrediction;
use Websyspro\Elements\Doms\Icons\IconBathOutdoor;
use Websyspro\Elements\Doms\Icons\IconBathPrivate;
use Websyspro\Elements\Doms\Icons\IconBathPublicLarge;
use Websyspro\Elements\Doms\Icons\IconBathroom;
use Websyspro\Elements\Doms\Icons\IconBathtub;
use Websyspro\Elements\Doms\Icons\IconBattery0Bar;
use Websyspro\Elements\Doms\Icons\IconBattery1Bar;
use Websyspro\Elements\Doms\Icons\IconBattery2Bar;
use Websyspro\Elements\Doms\Icons\IconBattery3Bar;
use Websyspro\Elements\Doms\Icons\IconBattery4Bar;
use Websyspro\Elements\Doms\Icons\IconBattery5Bar;
use Websyspro\Elements\Doms\Icons\IconBattery6Bar;
use Websyspro\Elements\Doms\Icons\IconBatteryAlert;
use Websyspro\Elements\Doms\Icons\IconBatteryChange;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging20;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging30;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging50;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging60;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging80;
use Websyspro\Elements\Doms\Icons\IconBatteryCharging90;
use Websyspro\Elements\Doms\Icons\IconBatteryChargingFull;
use Websyspro\Elements\Doms\Icons\IconBatteryError;
use Websyspro\Elements\Doms\Icons\IconBatteryFull;
use Websyspro\Elements\Doms\Icons\IconBatteryFullAlt;
use Websyspro\Elements\Doms\Icons\IconBatteryHoriz000;
use Websyspro\Elements\Doms\Icons\IconBatteryHoriz050;
use Websyspro\Elements\Doms\Icons\IconBatteryHoriz075;
use Websyspro\Elements\Doms\Icons\IconBatteryLow;
use Websyspro\Elements\Doms\Icons\IconBatteryPlus;
use Websyspro\Elements\Doms\Icons\IconBatteryProfile;
use Websyspro\Elements\Doms\Icons\IconBatterySaver;
use Websyspro\Elements\Doms\Icons\IconBatteryShare;
use Websyspro\Elements\Doms\Icons\IconBatteryStatusGood;
use Websyspro\Elements\Doms\Icons\IconBatteryUnknown;
use Websyspro\Elements\Doms\Icons\IconBatteryVeryLow;
use Websyspro\Elements\Doms\Icons\IconBeachAccess;
use Websyspro\Elements\Doms\Icons\IconBed;
use Websyspro\Elements\Doms\Icons\IconBedroomBaby;
use Websyspro\Elements\Doms\Icons\IconBedroomChild;
use Websyspro\Elements\Doms\Icons\IconBedroomParent;
use Websyspro\Elements\Doms\Icons\IconBedtime;
use Websyspro\Elements\Doms\Icons\IconBedtimeOff;
use Websyspro\Elements\Doms\Icons\IconBeenhere;
use Websyspro\Elements\Doms\Icons\IconBento;
use Websyspro\Elements\Doms\Icons\IconBia;
use Websyspro\Elements\Doms\Icons\IconBidLandscape;
use Websyspro\Elements\Doms\Icons\IconBidLandscapeDisabled;
use Websyspro\Elements\Doms\Icons\IconBigtopUpdates;
use Websyspro\Elements\Doms\Icons\IconBikeDock;
use Websyspro\Elements\Doms\Icons\IconBikeLane;
use Websyspro\Elements\Doms\Icons\IconBikeScooter;
use Websyspro\Elements\Doms\Icons\IconBiotech;
use Websyspro\Elements\Doms\Icons\IconBlanket;
use Websyspro\Elements\Doms\Icons\IconBlender;
use Websyspro\Elements\Doms\Icons\IconBlind;
use Websyspro\Elements\Doms\Icons\IconBlinds;
use Websyspro\Elements\Doms\Icons\IconBlindsClosed;
use Websyspro\Elements\Doms\Icons\IconBlock;
use Websyspro\Elements\Doms\Icons\IconBloodPressure;
use Websyspro\Elements\Doms\Icons\IconBloodtype;
use Websyspro\Elements\Doms\Icons\IconBluetooth;
use Websyspro\Elements\Doms\Icons\IconBluetoothConnected;
use Websyspro\Elements\Doms\Icons\IconBluetoothDisabled;
use Websyspro\Elements\Doms\Icons\IconBluetoothDrive;
use Websyspro\Elements\Doms\Icons\IconBluetoothSearching;
use Websyspro\Elements\Doms\Icons\IconBlurCircular;
use Websyspro\Elements\Doms\Icons\IconBlurLinear;
use Websyspro\Elements\Doms\Icons\IconBlurMedium;
use Websyspro\Elements\Doms\Icons\IconBlurOff;
use Websyspro\Elements\Doms\Icons\IconBlurOn;
use Websyspro\Elements\Doms\Icons\IconBlurShort;
use Websyspro\Elements\Doms\Icons\IconBoatBus;
use Websyspro\Elements\Doms\Icons\IconBoatRailway;
use Websyspro\Elements\Doms\Icons\IconBodyFat;
use Websyspro\Elements\Doms\Icons\IconBodySystem;
use Websyspro\Elements\Doms\Icons\IconBolt;
use Websyspro\Elements\Doms\Icons\IconBomb;
use Websyspro\Elements\Doms\Icons\IconBook;
use Websyspro\Elements\Doms\Icons\IconBook2;
use Websyspro\Elements\Doms\Icons\IconBook3;
use Websyspro\Elements\Doms\Icons\IconBook4;
use Websyspro\Elements\Doms\Icons\IconBook4Spark;
use Websyspro\Elements\Doms\Icons\IconBook5;
use Websyspro\Elements\Doms\Icons\IconBook6;
use Websyspro\Elements\Doms\Icons\IconBookmark;
use Websyspro\Elements\Doms\Icons\IconBookmarkAdd;
use Websyspro\Elements\Doms\Icons\IconBookmarkAdded;
use Websyspro\Elements\Doms\Icons\IconBookmarkBag;
use Websyspro\Elements\Doms\Icons\IconBookmarkCheck;
use Websyspro\Elements\Doms\Icons\IconBookmarkFlag;
use Websyspro\Elements\Doms\Icons\IconBookmarkHeart;
use Websyspro\Elements\Doms\Icons\IconBookmarkManager;
use Websyspro\Elements\Doms\Icons\IconBookmarkRemove;
use Websyspro\Elements\Doms\Icons\IconBookmarks;
use Websyspro\Elements\Doms\Icons\IconBookmarkStar;
use Websyspro\Elements\Doms\Icons\IconBookOnline;
use Websyspro\Elements\Doms\Icons\IconBookRibbon;
use Websyspro\Elements\Doms\Icons\IconBooksMoviesAndMusic;
use Websyspro\Elements\Doms\Icons\IconBorderAll;
use Websyspro\Elements\Doms\Icons\IconBorderBottom;
use Websyspro\Elements\Doms\Icons\IconBorderClear;
use Websyspro\Elements\Doms\Icons\IconBorderColor;
use Websyspro\Elements\Doms\Icons\IconBorderHorizontal;
use Websyspro\Elements\Doms\Icons\IconBorderInner;
use Websyspro\Elements\Doms\Icons\IconBorderLeft;
use Websyspro\Elements\Doms\Icons\IconBorderOuter;
use Websyspro\Elements\Doms\Icons\IconBorderRight;
use Websyspro\Elements\Doms\Icons\IconBorderStyle;
use Websyspro\Elements\Doms\Icons\IconBorderTop;
use Websyspro\Elements\Doms\Icons\IconBorderVertical;
use Websyspro\Elements\Doms\Icons\IconBorg;
use Websyspro\Elements\Doms\Icons\IconBottomAppBar;
use Websyspro\Elements\Doms\Icons\IconBottomDrawer;
use Websyspro\Elements\Doms\Icons\IconBottomNavigation;
use Websyspro\Elements\Doms\Icons\IconBottomPanelClose;
use Websyspro\Elements\Doms\Icons\IconBottomPanelOpen;
use Websyspro\Elements\Doms\Icons\IconBottomRightClick;
use Websyspro\Elements\Doms\Icons\IconBottomSheets;
use Websyspro\Elements\Doms\Icons\IconBox;
use Websyspro\Elements\Doms\Icons\IconBoxAdd;
use Websyspro\Elements\Doms\Icons\IconBoxEdit;
use Websyspro\Elements\Doms\Icons\IconBoy;
use Websyspro\Elements\Doms\Icons\IconBrandAwareness;
use Websyspro\Elements\Doms\Icons\IconBrandFamily;
use Websyspro\Elements\Doms\Icons\IconBrandingWatermark;
use Websyspro\Elements\Doms\Icons\IconBreakfastDining;
use Websyspro\Elements\Doms\Icons\IconBreakingNews;
use Websyspro\Elements\Doms\Icons\IconBreakingNewsAlt1;
use Websyspro\Elements\Doms\Icons\IconBreastfeeding;
use Websyspro\Elements\Doms\Icons\IconBrick;
use Websyspro\Elements\Doms\Icons\IconBrightness1;
use Websyspro\Elements\Doms\Icons\IconBrightness2;
use Websyspro\Elements\Doms\Icons\IconBrightness3;
use Websyspro\Elements\Doms\Icons\IconBrightness4;
use Websyspro\Elements\Doms\Icons\IconBrightness5;
use Websyspro\Elements\Doms\Icons\IconBrightness6;
use Websyspro\Elements\Doms\Icons\IconBrightness7;
use Websyspro\Elements\Doms\Icons\IconBrightnessAlert;
use Websyspro\Elements\Doms\Icons\IconBrightnessAuto;
use Websyspro\Elements\Doms\Icons\IconBrightnessEmpty;
use Websyspro\Elements\Doms\Icons\IconBrightnessHigh;
use Websyspro\Elements\Doms\Icons\IconBrightnessLow;
use Websyspro\Elements\Doms\Icons\IconBrightnessMedium;
use Websyspro\Elements\Doms\Icons\IconBringYourOwnIp;
use Websyspro\Elements\Doms\Icons\IconBroadcastOnHome;
use Websyspro\Elements\Doms\Icons\IconBroadcastOnPersonal;
use Websyspro\Elements\Doms\Icons\IconBrokenImage;
use Websyspro\Elements\Doms\Icons\IconBrowse;
use Websyspro\Elements\Doms\Icons\IconBrowseActivity;
use Websyspro\Elements\Doms\Icons\IconBrowseGallery;
use Websyspro\Elements\Doms\Icons\IconBrowserUpdated;
use Websyspro\Elements\Doms\Icons\IconBrunchDining;
use Websyspro\Elements\Doms\Icons\IconBrush;
use Websyspro\Elements\Doms\Icons\IconBubble;
use Websyspro\Elements\Doms\Icons\IconBubbleChart;
use Websyspro\Elements\Doms\Icons\IconBubbles;
use Websyspro\Elements\Doms\Icons\IconBugReport;
use Websyspro\Elements\Doms\Icons\IconBuild;
use Websyspro\Elements\Doms\Icons\IconBuildCircle;
use Websyspro\Elements\Doms\Icons\IconBungalow;
use Websyspro\Elements\Doms\Icons\IconBurstMode;
use Websyspro\Elements\Doms\Icons\IconBusAlert;
use Websyspro\Elements\Doms\Icons\IconBusinessCenter;
use Websyspro\Elements\Doms\Icons\IconBusinessChip;
use Websyspro\Elements\Doms\Icons\IconBusinessMessages;
use Websyspro\Elements\Doms\Icons\IconBusRailway;
use Websyspro\Elements\Doms\Icons\IconButtonsAlt;
use Websyspro\Elements\Doms\Icons\IconCabin;
use Websyspro\Elements\Doms\Icons\IconCable;
use Websyspro\Elements\Doms\Icons\IconCableCar;
use Websyspro\Elements\Doms\Icons\IconCached;
use Websyspro\Elements\Doms\Icons\IconCadence;
use Websyspro\Elements\Doms\Icons\IconCake;
use Websyspro\Elements\Doms\Icons\IconCakeAdd;
use Websyspro\Elements\Doms\Icons\IconCalculate;
use Websyspro\Elements\Doms\Icons\IconCalendarAddOn;
use Websyspro\Elements\Doms\Icons\IconCalendarAppsScript;
use Websyspro\Elements\Doms\Icons\IconCalendarClock;
use Websyspro\Elements\Doms\Icons\IconCalendarMonth;
use Websyspro\Elements\Doms\Icons\IconCalendarToday;
use Websyspro\Elements\Doms\Icons\IconCalendarViewDay;
use Websyspro\Elements\Doms\Icons\IconCalendarViewMonth;
use Websyspro\Elements\Doms\Icons\IconCalendarViewWeek;
use Websyspro\Elements\Doms\Icons\IconCall;
use Websyspro\Elements\Doms\Icons\IconCallEnd;
use Websyspro\Elements\Doms\Icons\IconCallLog;
use Websyspro\Elements\Doms\Icons\IconCallMade;
use Websyspro\Elements\Doms\Icons\IconCallMerge;
use Websyspro\Elements\Doms\Icons\IconCallMissed;
use Websyspro\Elements\Doms\Icons\IconCallMissedOutgoing;
use Websyspro\Elements\Doms\Icons\IconCallQuality;
use Websyspro\Elements\Doms\Icons\IconCallReceived;
use Websyspro\Elements\Doms\Icons\IconCallSplit;
use Websyspro\Elements\Doms\Icons\IconCallToAction;
use Websyspro\Elements\Doms\Icons\IconCamera;
use Websyspro\Elements\Doms\Icons\IconCameraFront;
use Websyspro\Elements\Doms\Icons\IconCameraIndoor;
use Websyspro\Elements\Doms\Icons\IconCameraOutdoor;
use Websyspro\Elements\Doms\Icons\IconCameraRear;
use Websyspro\Elements\Doms\Icons\IconCameraRoll;
use Websyspro\Elements\Doms\Icons\IconCameraswitch;
use Websyspro\Elements\Doms\Icons\IconCameraVideo;
use Websyspro\Elements\Doms\Icons\IconCampaign;
use Websyspro\Elements\Doms\Icons\IconCamping;
use Websyspro\Elements\Doms\Icons\IconCancel;
use Websyspro\Elements\Doms\Icons\IconCancelPresentation;
use Websyspro\Elements\Doms\Icons\IconCancelScheduleSend;
use Websyspro\Elements\Doms\Icons\IconCandle;
use Websyspro\Elements\Doms\Icons\IconCandlestickChart;
use Websyspro\Elements\Doms\Icons\IconCaptivePortal;
use Websyspro\Elements\Doms\Icons\IconCapture;
use Websyspro\Elements\Doms\Icons\IconCarCrash;
use Websyspro\Elements\Doms\Icons\IconCardioLoad;
use Websyspro\Elements\Doms\Icons\IconCardiology;
use Websyspro\Elements\Doms\Icons\IconCardMembership;
use Websyspro\Elements\Doms\Icons\IconCards;
use Websyspro\Elements\Doms\Icons\IconCardsStar;
use Websyspro\Elements\Doms\Icons\IconCardTravel;
use Websyspro\Elements\Doms\Icons\IconCarpenter;
use Websyspro\Elements\Doms\Icons\IconCarRental;
use Websyspro\Elements\Doms\Icons\IconCarRepair;
use Websyspro\Elements\Doms\Icons\IconCarryOnBag;
use Websyspro\Elements\Doms\Icons\IconCarryOnBagChecked;
use Websyspro\Elements\Doms\Icons\IconCarryOnBagInactive;
use Websyspro\Elements\Doms\Icons\IconCarryOnBagQuestion;
use Websyspro\Elements\Doms\Icons\IconCarTag;
use Websyspro\Elements\Doms\Icons\IconCases;
use Websyspro\Elements\Doms\Icons\IconCasino;
use Websyspro\Elements\Doms\Icons\IconCast;
use Websyspro\Elements\Doms\Icons\IconCastConnected;
use Websyspro\Elements\Doms\Icons\IconCastForEducation;
use Websyspro\Elements\Doms\Icons\IconCastle;
use Websyspro\Elements\Doms\Icons\IconCastPause;
use Websyspro\Elements\Doms\Icons\IconCastWarning;
use Websyspro\Elements\Doms\Icons\IconCategory;
use Websyspro\Elements\Doms\Icons\IconCategorySearch;
use Websyspro\Elements\Doms\Icons\IconCelebration;
use Websyspro\Elements\Doms\Icons\IconCellMerge;
use Websyspro\Elements\Doms\Icons\IconCellTower;
use Websyspro\Elements\Doms\Icons\IconCellWifi;
use Websyspro\Elements\Doms\Icons\IconCenterFocusStrong;
use Websyspro\Elements\Doms\Icons\IconCenterFocusWeak;
use Websyspro\Elements\Doms\Icons\IconChair;
use Websyspro\Elements\Doms\Icons\IconChairAlt;
use Websyspro\Elements\Doms\Icons\IconChalet;
use Websyspro\Elements\Doms\Icons\IconChangeCircle;
use Websyspro\Elements\Doms\Icons\IconChangeHistory;
use Websyspro\Elements\Doms\Icons\IconCharger;
use Websyspro\Elements\Doms\Icons\IconChargingStation;
use Websyspro\Elements\Doms\Icons\IconChartData;
use Websyspro\Elements\Doms\Icons\IconChat;
use Websyspro\Elements\Doms\Icons\IconChatAddOn;
use Websyspro\Elements\Doms\Icons\IconChatAppsScript;
use Websyspro\Elements\Doms\Icons\IconChatBubble;
use Websyspro\Elements\Doms\Icons\IconChatError;
use Websyspro\Elements\Doms\Icons\IconChatInfo;
use Websyspro\Elements\Doms\Icons\IconChatPasteGo;
use Websyspro\Elements\Doms\Icons\IconChatPasteGo2;
use Websyspro\Elements\Doms\Icons\IconCheck;
use Websyspro\Elements\Doms\Icons\IconCheckbook;
use Websyspro\Elements\Doms\Icons\IconCheckBox;
use Websyspro\Elements\Doms\Icons\IconCheckBoxOutlineBlank;
use Websyspro\Elements\Doms\Icons\IconCheckCircle;
use Websyspro\Elements\Doms\Icons\IconCheckedBag;
use Websyspro\Elements\Doms\Icons\IconCheckedBagQuestion;
use Websyspro\Elements\Doms\Icons\IconCheckIndeterminateSmall;
use Websyspro\Elements\Doms\Icons\IconCheckInOut;
use Websyspro\Elements\Doms\Icons\IconChecklist;
use Websyspro\Elements\Doms\Icons\IconChecklistRtl;
use Websyspro\Elements\Doms\Icons\IconCheckroom;
use Websyspro\Elements\Doms\Icons\IconCheckSmall;
use Websyspro\Elements\Doms\Icons\IconCheer;
use Websyspro\Elements\Doms\Icons\IconChess;
use Websyspro\Elements\Doms\Icons\IconChessPawn;
use Websyspro\Elements\Doms\Icons\IconChevronBackward;
use Websyspro\Elements\Doms\Icons\IconChevronForward;
use Websyspro\Elements\Doms\Icons\IconChevronLeft;
use Websyspro\Elements\Doms\Icons\IconChevronRight;
use Websyspro\Elements\Doms\Icons\IconChildCare;
use Websyspro\Elements\Doms\Icons\IconChildFriendly;
use Websyspro\Elements\Doms\Icons\IconChipExtraction;
use Websyspro\Elements\Doms\Icons\IconChips;
use Websyspro\Elements\Doms\Icons\IconChromecast2;
use Websyspro\Elements\Doms\Icons\IconChromecastDevice;
use Websyspro\Elements\Doms\Icons\IconChromeReaderMode;
use Websyspro\Elements\Doms\Icons\IconChronic;
use Websyspro\Elements\Doms\Icons\IconChurch;
use Websyspro\Elements\Doms\Icons\IconCinematicBlur;
use Websyspro\Elements\Doms\Icons\IconCircle;
use Websyspro\Elements\Doms\Icons\IconCircleNotifications;
use Websyspro\Elements\Doms\Icons\IconCircles;
use Websyspro\Elements\Doms\Icons\IconCirclesExt;
use Websyspro\Elements\Doms\Icons\IconClarify;
use Websyspro\Elements\Doms\Icons\IconCleanHands;
use Websyspro\Elements\Doms\Icons\IconCleaning;
use Websyspro\Elements\Doms\Icons\IconCleaningBucket;
use Websyspro\Elements\Doms\Icons\IconCleaningServices;
use Websyspro\Elements\Doms\Icons\IconClearAll;
use Websyspro\Elements\Doms\Icons\IconClearDay;
use Websyspro\Elements\Doms\Icons\IconClimateMiniSplit;
use Websyspro\Elements\Doms\Icons\IconClinicalNotes;
use Websyspro\Elements\Doms\Icons\IconClockArrowDown;
use Websyspro\Elements\Doms\Icons\IconClockArrowUp;
use Websyspro\Elements\Doms\Icons\IconClockLoader10;
use Websyspro\Elements\Doms\Icons\IconClockLoader20;
use Websyspro\Elements\Doms\Icons\IconClockLoader40;
use Websyspro\Elements\Doms\Icons\IconClockLoader60;
use Websyspro\Elements\Doms\Icons\IconClockLoader80;
use Websyspro\Elements\Doms\Icons\IconClockLoader90;
use Websyspro\Elements\Doms\Icons\IconClose;
use Websyspro\Elements\Doms\Icons\IconClosedCaption;
use Websyspro\Elements\Doms\Icons\IconClosedCaptionAdd;
use Websyspro\Elements\Doms\Icons\IconClosedCaptionDisabled;
use Websyspro\Elements\Doms\Icons\IconCloseFullscreen;
use Websyspro\Elements\Doms\Icons\IconCloseSmall;
use Websyspro\Elements\Doms\Icons\IconCloud;
use Websyspro\Elements\Doms\Icons\IconCloudAlert;
use Websyspro\Elements\Doms\Icons\IconCloudCircle;
use Websyspro\Elements\Doms\Icons\IconCloudDone;
use Websyspro\Elements\Doms\Icons\IconCloudDownload;
use Websyspro\Elements\Doms\Icons\IconCloudLock;
use Websyspro\Elements\Doms\Icons\IconCloudOff;
use Websyspro\Elements\Doms\Icons\IconCloudSync;
use Websyspro\Elements\Doms\Icons\IconCloudUpload;
use Websyspro\Elements\Doms\Icons\IconCloudySnowing;
use Websyspro\Elements\Doms\Icons\IconCo2;
use Websyspro\Elements\Doms\Icons\IconCode;
use Websyspro\Elements\Doms\Icons\IconCodeBlocks;
use Websyspro\Elements\Doms\Icons\IconCodeOff;
use Websyspro\Elements\Doms\Icons\IconCoffee;
use Websyspro\Elements\Doms\Icons\IconCoffeeMaker;
use Websyspro\Elements\Doms\Icons\IconCognition;
use Websyspro\Elements\Doms\Icons\IconCognition2;
use Websyspro\Elements\Doms\Icons\IconCollapseAll;
use Websyspro\Elements\Doms\Icons\IconCollapseContent;
use Websyspro\Elements\Doms\Icons\IconCollectionsBookmark;
use Websyspro\Elements\Doms\Icons\IconColorize;
use Websyspro\Elements\Doms\Icons\IconColors;
use Websyspro\Elements\Doms\Icons\IconCombineColumns;
use Websyspro\Elements\Doms\Icons\IconComedyMask;
use Websyspro\Elements\Doms\Icons\IconComicBubble;
use Websyspro\Elements\Doms\Icons\IconComment;
use Websyspro\Elements\Doms\Icons\IconCommentBank;
use Websyspro\Elements\Doms\Icons\IconCommentsDisabled;
use Websyspro\Elements\Doms\Icons\IconCommit;
use Websyspro\Elements\Doms\Icons\IconCommunication;
use Websyspro\Elements\Doms\Icons\IconCommunities;
use Websyspro\Elements\Doms\Icons\IconCommute;
use Websyspro\Elements\Doms\Icons\IconCompare;
use Websyspro\Elements\Doms\Icons\IconCompareArrows;
use Websyspro\Elements\Doms\Icons\IconCompassCalibration;
use Websyspro\Elements\Doms\Icons\IconComponentExchange;
use Websyspro\Elements\Doms\Icons\IconCompost;
use Websyspro\Elements\Doms\Icons\IconCompress;
use Websyspro\Elements\Doms\Icons\IconComputer;
use Websyspro\Elements\Doms\Icons\IconConcierge;
use Websyspro\Elements\Doms\Icons\IconConditions;
use Websyspro\Elements\Doms\Icons\IconConfirmationNumber;
use Websyspro\Elements\Doms\Icons\IconCongenital;
use Websyspro\Elements\Doms\Icons\IconConnectedTv;
use Websyspro\Elements\Doms\Icons\IconConnectingAirports;
use Websyspro\Elements\Doms\Icons\IconConnectWithoutContact;
use Websyspro\Elements\Doms\Icons\IconConstruction;
use Websyspro\Elements\Doms\Icons\IconContactEmergency;
use Websyspro\Elements\Doms\Icons\IconContactless;
use Websyspro\Elements\Doms\Icons\IconContactlessOff;
use Websyspro\Elements\Doms\Icons\IconContactMail;
use Websyspro\Elements\Doms\Icons\IconContactPage;
use Websyspro\Elements\Doms\Icons\IconContactPhone;
use Websyspro\Elements\Doms\Icons\IconContacts;
use Websyspro\Elements\Doms\Icons\IconContactsProduct;
use Websyspro\Elements\Doms\Icons\IconContactSupport;
use Websyspro\Elements\Doms\Icons\IconContentCopy;
use Websyspro\Elements\Doms\Icons\IconContentCut;
use Websyspro\Elements\Doms\Icons\IconContentPaste;
use Websyspro\Elements\Doms\Icons\IconContentPasteGo;
use Websyspro\Elements\Doms\Icons\IconContentPasteOff;
use Websyspro\Elements\Doms\Icons\IconContentPasteSearch;
use Websyspro\Elements\Doms\Icons\IconContextualToken;
use Websyspro\Elements\Doms\Icons\IconContextualTokenAdd;
use Websyspro\Elements\Doms\Icons\IconContract;
use Websyspro\Elements\Doms\Icons\IconContractDelete;
use Websyspro\Elements\Doms\Icons\IconContractEdit;
use Websyspro\Elements\Doms\Icons\IconContrast;
use Websyspro\Elements\Doms\Icons\IconContrastCircle;
use Websyspro\Elements\Doms\Icons\IconContrastRtlOff;
use Websyspro\Elements\Doms\Icons\IconContrastSquare;
use Websyspro\Elements\Doms\Icons\IconControlCamera;
use Websyspro\Elements\Doms\Icons\IconControllerGen;
use Websyspro\Elements\Doms\Icons\IconControlPointDuplicate;
use Websyspro\Elements\Doms\Icons\IconConversionPath;
use Websyspro\Elements\Doms\Icons\IconConversionPathOff;
use Websyspro\Elements\Doms\Icons\IconConvertToText;
use Websyspro\Elements\Doms\Icons\IconConveyorBelt;
use Websyspro\Elements\Doms\Icons\IconCookie;
use Websyspro\Elements\Doms\Icons\IconCookieOff;
use Websyspro\Elements\Doms\Icons\IconCooking;
use Websyspro\Elements\Doms\Icons\IconCoolToDry;
use Websyspro\Elements\Doms\Icons\IconCoPresent;
use Websyspro\Elements\Doms\Icons\IconCopyAll;
use Websyspro\Elements\Doms\Icons\IconCopyright;
use Websyspro\Elements\Doms\Icons\IconCoronavirus;
use Websyspro\Elements\Doms\Icons\IconCorporateFare;
use Websyspro\Elements\Doms\Icons\IconCottage;
use Websyspro\Elements\Doms\Icons\IconCounter0;
use Websyspro\Elements\Doms\Icons\IconCounter1;
use Websyspro\Elements\Doms\Icons\IconCounter2;
use Websyspro\Elements\Doms\Icons\IconCounter3;
use Websyspro\Elements\Doms\Icons\IconCounter4;
use Websyspro\Elements\Doms\Icons\IconCounter5;
use Websyspro\Elements\Doms\Icons\IconCounter6;
use Websyspro\Elements\Doms\Icons\IconCounter7;
use Websyspro\Elements\Doms\Icons\IconCounter8;
use Websyspro\Elements\Doms\Icons\IconCounter9;
use Websyspro\Elements\Doms\Icons\IconCountertops;
use Websyspro\Elements\Doms\Icons\IconCreateNewFolder;
use Websyspro\Elements\Doms\Icons\IconCreditCard;
use Websyspro\Elements\Doms\Icons\IconCreditCardClock;
use Websyspro\Elements\Doms\Icons\IconCreditCardGear;
use Websyspro\Elements\Doms\Icons\IconCreditCardHeart;
use Websyspro\Elements\Doms\Icons\IconCreditCardOff;
use Websyspro\Elements\Doms\Icons\IconCreditScore;
use Websyspro\Elements\Doms\Icons\IconCrib;
use Websyspro\Elements\Doms\Icons\IconCrisisAlert;
use Websyspro\Elements\Doms\Icons\IconCrop;
use Websyspro\Elements\Doms\Icons\IconCrop169;
use Websyspro\Elements\Doms\Icons\IconCrop32;
use Websyspro\Elements\Doms\Icons\IconCrop54;
use Websyspro\Elements\Doms\Icons\IconCrop75;
use Websyspro\Elements\Doms\Icons\IconCrop916;
use Websyspro\Elements\Doms\Icons\IconCropFree;
use Websyspro\Elements\Doms\Icons\IconCropLandscape;
use Websyspro\Elements\Doms\Icons\IconCropPortrait;
use Websyspro\Elements\Doms\Icons\IconCropRotate;
use Websyspro\Elements\Doms\Icons\IconCropSquare;
use Websyspro\Elements\Doms\Icons\IconCrossword;
use Websyspro\Elements\Doms\Icons\IconCrowdsource;
use Websyspro\Elements\Doms\Icons\IconCrown;
use Websyspro\Elements\Doms\Icons\IconCrueltyFree;
use Websyspro\Elements\Doms\Icons\IconCss;
use Websyspro\Elements\Doms\Icons\IconCsv;
use Websyspro\Elements\Doms\Icons\IconCurrencyBitcoin;
use Websyspro\Elements\Doms\Icons\IconCurrencyExchange;
use Websyspro\Elements\Doms\Icons\IconCurrencyFranc;
use Websyspro\Elements\Doms\Icons\IconCurrencyLira;
use Websyspro\Elements\Doms\Icons\IconCurrencyPound;
use Websyspro\Elements\Doms\Icons\IconCurrencyRuble;
use Websyspro\Elements\Doms\Icons\IconCurrencyRupee;
use Websyspro\Elements\Doms\Icons\IconCurrencyRupeeCircle;
use Websyspro\Elements\Doms\Icons\IconCurrencyYen;
use Websyspro\Elements\Doms\Icons\IconCurrencyYuan;
use Websyspro\Elements\Doms\Icons\IconCurtains;
use Websyspro\Elements\Doms\Icons\IconCurtainsClosed;
use Websyspro\Elements\Doms\Icons\IconCustomTypography;
use Websyspro\Elements\Doms\Icons\IconCycle;
use Websyspro\Elements\Doms\Icons\IconCyclone;
use Websyspro\Elements\Doms\Icons\IconDangerous;
use Websyspro\Elements\Doms\Icons\IconDarkMode;
use Websyspro\Elements\Doms\Icons\IconDashboard;
use Websyspro\Elements\Doms\Icons\IconDashboard2;
use Websyspro\Elements\Doms\Icons\IconDashboardCustomize;
use Websyspro\Elements\Doms\Icons\IconDataAlert;
use Websyspro\Elements\Doms\Icons\IconDataArray;
use Websyspro\Elements\Doms\Icons\IconDatabase;
use Websyspro\Elements\Doms\Icons\IconDatabaseOff;
use Websyspro\Elements\Doms\Icons\IconDatabaseSearch;
use Websyspro\Elements\Doms\Icons\IconDatabaseUpload;
use Websyspro\Elements\Doms\Icons\IconDataCheck;
use Websyspro\Elements\Doms\Icons\IconDataExploration;
use Websyspro\Elements\Doms\Icons\IconDataInfoAlert;
use Websyspro\Elements\Doms\Icons\IconDataLossPrevention;
use Websyspro\Elements\Doms\Icons\IconDataObject;
use Websyspro\Elements\Doms\Icons\IconDataSaverOn;
use Websyspro\Elements\Doms\Icons\IconDataset;
use Websyspro\Elements\Doms\Icons\IconDatasetLinked;
use Websyspro\Elements\Doms\Icons\IconDataTable;
use Websyspro\Elements\Doms\Icons\IconDataThresholding;
use Websyspro\Elements\Doms\Icons\IconDataUsage;
use Websyspro\Elements\Doms\Icons\IconDateRange;
use Websyspro\Elements\Doms\Icons\IconDeblur;
use Websyspro\Elements\Doms\Icons\IconDeceased;
use Websyspro\Elements\Doms\Icons\IconDecimalDecrease;
use Websyspro\Elements\Doms\Icons\IconDecimalIncrease;
use Websyspro\Elements\Doms\Icons\IconDeck;
use Websyspro\Elements\Doms\Icons\IconDehaze;
use Websyspro\Elements\Doms\Icons\IconDelete;
use Websyspro\Elements\Doms\Icons\IconDeleteForever;
use Websyspro\Elements\Doms\Icons\IconDeleteHistory;
use Websyspro\Elements\Doms\Icons\IconDeleteSweep;
use Websyspro\Elements\Doms\Icons\IconDeliveryTruckBolt;
use Websyspro\Elements\Doms\Icons\IconDeliveryTruckSpeed;
use Websyspro\Elements\Doms\Icons\IconDemography;
use Websyspro\Elements\Doms\Icons\IconDensityLarge;
use Websyspro\Elements\Doms\Icons\IconDensityMedium;
use Websyspro\Elements\Doms\Icons\IconDensitySmall;
use Websyspro\Elements\Doms\Icons\IconDentistry;
use Websyspro\Elements\Doms\Icons\IconDepartureBoard;
use Websyspro\Elements\Doms\Icons\IconDeployedCode;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeAccount;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeAlert;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeHistory;
use Websyspro\Elements\Doms\Icons\IconDeployedCodeUpdate;
use Websyspro\Elements\Doms\Icons\IconDermatology;
use Websyspro\Elements\Doms\Icons\IconDescription;
use Websyspro\Elements\Doms\Icons\IconDeselect;
use Websyspro\Elements\Doms\Icons\IconDesignServices;
use Websyspro\Elements\Doms\Icons\IconDesk;
use Websyspro\Elements\Doms\Icons\IconDeskphone;
use Websyspro\Elements\Doms\Icons\IconDesktopAccessDisabled;
use Websyspro\Elements\Doms\Icons\IconDesktopCloud;
use Websyspro\Elements\Doms\Icons\IconDesktopCloudStack;
use Websyspro\Elements\Doms\Icons\IconDesktopLandscape;
use Websyspro\Elements\Doms\Icons\IconDesktopLandscapeAdd;
use Websyspro\Elements\Doms\Icons\IconDesktopMac;
use Websyspro\Elements\Doms\Icons\IconDesktopPortrait;
use Websyspro\Elements\Doms\Icons\IconDesktopWindows;
use Websyspro\Elements\Doms\Icons\IconDestruction;
use Websyspro\Elements\Doms\Icons\IconDetails;
use Websyspro\Elements\Doms\Icons\IconDetectionAndZone;
use Websyspro\Elements\Doms\Icons\IconDetector;
use Websyspro\Elements\Doms\Icons\IconDetectorAlarm;
use Websyspro\Elements\Doms\Icons\IconDetectorBattery;
use Websyspro\Elements\Doms\Icons\IconDetectorCo;
use Websyspro\Elements\Doms\Icons\IconDetectorOffline;
use Websyspro\Elements\Doms\Icons\IconDetectorSmoke;
use Websyspro\Elements\Doms\Icons\IconDetectorStatus;
use Websyspro\Elements\Doms\Icons\IconDeveloperBoard;
use Websyspro\Elements\Doms\Icons\IconDeveloperBoardOff;
use Websyspro\Elements\Doms\Icons\IconDeveloperGuide;
use Websyspro\Elements\Doms\Icons\IconDeveloperMode;
use Websyspro\Elements\Doms\Icons\IconDeveloperModeTv;
use Websyspro\Elements\Doms\Icons\IconDeviceHub;
use Websyspro\Elements\Doms\Icons\IconDevices;
use Websyspro\Elements\Doms\Icons\IconDevicesFold;
use Websyspro\Elements\Doms\Icons\IconDevicesFold2;
use Websyspro\Elements\Doms\Icons\IconDevicesOff;
use Websyspro\Elements\Doms\Icons\IconDevicesOther;
use Websyspro\Elements\Doms\Icons\IconDevicesWearables;
use Websyspro\Elements\Doms\Icons\IconDeviceThermostat;
use Websyspro\Elements\Doms\Icons\IconDeviceUnknown;
use Websyspro\Elements\Doms\Icons\IconDewPoint;
use Websyspro\Elements\Doms\Icons\IconDiagnosis;
use Websyspro\Elements\Doms\Icons\IconDiagonalLine;
use Websyspro\Elements\Doms\Icons\IconDialerSip;
use Websyspro\Elements\Doms\Icons\IconDialogs;
use Websyspro\Elements\Doms\Icons\IconDialpad;
use Websyspro\Elements\Doms\Icons\IconDiamond;
use Websyspro\Elements\Doms\Icons\IconDictionary;
use Websyspro\Elements\Doms\Icons\IconDifference;
use Websyspro\Elements\Doms\Icons\IconDigitalOutOfHome;
use Websyspro\Elements\Doms\Icons\IconDigitalWellbeing;
use Websyspro\Elements\Doms\Icons\IconDining;
use Websyspro\Elements\Doms\Icons\IconDinnerDining;
use Websyspro\Elements\Doms\Icons\IconDirections;
use Websyspro\Elements\Doms\Icons\IconDirectionsAlt;
use Websyspro\Elements\Doms\Icons\IconDirectionsAltOff;
use Websyspro\Elements\Doms\Icons\IconDirectionsBike;
use Websyspro\Elements\Doms\Icons\IconDirectionsBoat;
use Websyspro\Elements\Doms\Icons\IconDirectionsBus;
use Websyspro\Elements\Doms\Icons\IconDirectionsCar;
use Websyspro\Elements\Doms\Icons\IconDirectionsOff;
use Websyspro\Elements\Doms\Icons\IconDirectionsRailway;
use Websyspro\Elements\Doms\Icons\IconDirectionsRailway2;
use Websyspro\Elements\Doms\Icons\IconDirectionsRun;
use Websyspro\Elements\Doms\Icons\IconDirectionsSubway;
use Websyspro\Elements\Doms\Icons\IconDirectionsWalk;
use Websyspro\Elements\Doms\Icons\IconDirectorySync;
use Websyspro\Elements\Doms\Icons\IconDirtyLens;
use Websyspro\Elements\Doms\Icons\IconDisabledByDefault;
use Websyspro\Elements\Doms\Icons\IconDisabledVisible;
use Websyspro\Elements\Doms\Icons\IconDiscFull;
use Websyspro\Elements\Doms\Icons\IconDiscoverTune;
use Websyspro\Elements\Doms\Icons\IconDishwasher;
use Websyspro\Elements\Doms\Icons\IconDishwasherGen;
use Websyspro\Elements\Doms\Icons\IconDisplayExternalInput;
use Websyspro\Elements\Doms\Icons\IconDisplaySettings;
use Websyspro\Elements\Doms\Icons\IconDistance;
use Websyspro\Elements\Doms\Icons\IconDiversity1;
use Websyspro\Elements\Doms\Icons\IconDiversity2;
use Websyspro\Elements\Doms\Icons\IconDiversity3;
use Websyspro\Elements\Doms\Icons\IconDiversity4;
use Websyspro\Elements\Doms\Icons\IconDns;
use Websyspro\Elements\Doms\Icons\IconDock;
use Websyspro\Elements\Doms\Icons\IconDockToBottom;
use Websyspro\Elements\Doms\Icons\IconDockToLeft;
use Websyspro\Elements\Doms\Icons\IconDockToRight;
use Websyspro\Elements\Doms\Icons\IconDocs;
use Websyspro\Elements\Doms\Icons\IconDocsAddOn;
use Websyspro\Elements\Doms\Icons\IconDocsAppsScript;
use Websyspro\Elements\Doms\Icons\IconDocumentScanner;
use Websyspro\Elements\Doms\Icons\IconDocumentSearch;
use Websyspro\Elements\Doms\Icons\IconDomain;
use Websyspro\Elements\Doms\Icons\IconDomainAdd;
use Websyspro\Elements\Doms\Icons\IconDomainDisabled;
use Websyspro\Elements\Doms\Icons\IconDomainVerification;
use Websyspro\Elements\Doms\Icons\IconDomainVerificationOff;
use Websyspro\Elements\Doms\Icons\IconDominoMask;
use Websyspro\Elements\Doms\Icons\IconDoneAll;
use Websyspro\Elements\Doms\Icons\IconDoneOutline;
use Websyspro\Elements\Doms\Icons\IconDoNotDisturbOff;
use Websyspro\Elements\Doms\Icons\IconDoNotDisturbOn;
use Websyspro\Elements\Doms\Icons\IconDoNotDisturbOnTotalSilence;
use Websyspro\Elements\Doms\Icons\IconDoNotStep;
use Websyspro\Elements\Doms\Icons\IconDoNotTouch;
use Websyspro\Elements\Doms\Icons\IconDonutLarge;
use Websyspro\Elements\Doms\Icons\IconDonutSmall;
use Websyspro\Elements\Doms\Icons\IconDoorBack;
use Websyspro\Elements\Doms\Icons\IconDoorbell;
use Websyspro\Elements\Doms\Icons\IconDoorbell3p;
use Websyspro\Elements\Doms\Icons\IconDoorbellChime;
use Websyspro\Elements\Doms\Icons\IconDoorFront;
use Websyspro\Elements\Doms\Icons\IconDoorOpen;
use Websyspro\Elements\Doms\Icons\IconDoorSensor;
use Websyspro\Elements\Doms\Icons\IconDoorSliding;
use Websyspro\Elements\Doms\Icons\IconDoubleArrow;
use Websyspro\Elements\Doms\Icons\IconDownhillSkiing;
use Websyspro\Elements\Doms\Icons\IconDownload;
use Websyspro\Elements\Doms\Icons\IconDownload2;
use Websyspro\Elements\Doms\Icons\IconDownloadDone;
use Websyspro\Elements\Doms\Icons\IconDownloadForOffline;
use Websyspro\Elements\Doms\Icons\IconDownloading;
use Websyspro\Elements\Doms\Icons\IconDraft;
use Websyspro\Elements\Doms\Icons\IconDraftOrders;
use Websyspro\Elements\Doms\Icons\IconDrafts;
use Websyspro\Elements\Doms\Icons\IconDragClick;
use Websyspro\Elements\Doms\Icons\IconDragHandle;
use Websyspro\Elements\Doms\Icons\IconDragIndicator;
use Websyspro\Elements\Doms\Icons\IconDragPan;
use Websyspro\Elements\Doms\Icons\IconDraw;
use Websyspro\Elements\Doms\Icons\IconDrawAbstract;
use Websyspro\Elements\Doms\Icons\IconDrawCollage;
use Websyspro\Elements\Doms\Icons\IconDresser;
use Websyspro\Elements\Doms\Icons\IconDriveExport;
use Websyspro\Elements\Doms\Icons\IconDriveFileMove;
use Websyspro\Elements\Doms\Icons\IconDriveFolderUpload;
use Websyspro\Elements\Doms\Icons\IconDropdown;
use Websyspro\Elements\Doms\Icons\IconDry;
use Websyspro\Elements\Doms\Icons\IconDryCleaning;
use Websyspro\Elements\Doms\Icons\IconDualScreen;
use Websyspro\Elements\Doms\Icons\IconDuo;
use Websyspro\Elements\Doms\Icons\IconDvr;
use Websyspro\Elements\Doms\Icons\IconDynamicFeed;
use Websyspro\Elements\Doms\Icons\IconDynamicForm;
use Websyspro\Elements\Doms\Icons\IconE911Avatar;
use Websyspro\Elements\Doms\Icons\IconE911Emergency;
use Websyspro\Elements\Doms\Icons\IconEarbuds;
use Websyspro\Elements\Doms\Icons\IconEarbudsBattery;
use Websyspro\Elements\Doms\Icons\IconEarlyOn;
use Websyspro\Elements\Doms\Icons\IconEarthquake;
use Websyspro\Elements\Doms\Icons\IconEast;
use Websyspro\Elements\Doms\Icons\IconEcg;
use Websyspro\Elements\Doms\Icons\IconEcgHeart;
use Websyspro\Elements\Doms\Icons\IconEco;
use Websyspro\Elements\Doms\Icons\IconEda;
use Websyspro\Elements\Doms\Icons\IconEdgesensorHigh;
use Websyspro\Elements\Doms\Icons\IconEdgesensorLow;
use Websyspro\Elements\Doms\Icons\IconEdit;
use Websyspro\Elements\Doms\Icons\IconEditArrowDown;
use Websyspro\Elements\Doms\Icons\IconEditArrowUp;
use Websyspro\Elements\Doms\Icons\IconEditAttributes;
use Websyspro\Elements\Doms\Icons\IconEditAudio;
use Websyspro\Elements\Doms\Icons\IconEditCalendar;
use Websyspro\Elements\Doms\Icons\IconEditDocument;
use Websyspro\Elements\Doms\Icons\IconEditLocation;
use Websyspro\Elements\Doms\Icons\IconEditLocationAlt;
use Websyspro\Elements\Doms\Icons\IconEditNote;
use Websyspro\Elements\Doms\Icons\IconEditNotifications;
use Websyspro\Elements\Doms\Icons\IconEditOff;
use Websyspro\Elements\Doms\Icons\IconEditorChoice;
use Websyspro\Elements\Doms\Icons\IconEditRoad;
use Websyspro\Elements\Doms\Icons\IconEditSquare;
use Websyspro\Elements\Doms\Icons\IconEgg;
use Websyspro\Elements\Doms\Icons\IconEggAlt;
use Websyspro\Elements\Doms\Icons\IconEject;
use Websyspro\Elements\Doms\Icons\IconElderly;
use Websyspro\Elements\Doms\Icons\IconElderlyWoman;
use Websyspro\Elements\Doms\Icons\IconElectricalServices;
use Websyspro\Elements\Doms\Icons\IconElectricBike;
use Websyspro\Elements\Doms\Icons\IconElectricBolt;
use Websyspro\Elements\Doms\Icons\IconElectricCar;
use Websyspro\Elements\Doms\Icons\IconElectricMeter;
use Websyspro\Elements\Doms\Icons\IconElectricMoped;
use Websyspro\Elements\Doms\Icons\IconElectricRickshaw;
use Websyspro\Elements\Doms\Icons\IconElectricScooter;
use Websyspro\Elements\Doms\Icons\IconElevation;
use Websyspro\Elements\Doms\Icons\IconElevator;
use Websyspro\Elements\Doms\Icons\IconEmergency;
use Websyspro\Elements\Doms\Icons\IconEmergencyHeat;
use Websyspro\Elements\Doms\Icons\IconEmergencyHeat2;
use Websyspro\Elements\Doms\Icons\IconEmergencyHome;
use Websyspro\Elements\Doms\Icons\IconEmergencyRecording;
use Websyspro\Elements\Doms\Icons\IconEmergencyShare;
use Websyspro\Elements\Doms\Icons\IconEmergencyShareOff;
use Websyspro\Elements\Doms\Icons\IconEMobiledata;
use Websyspro\Elements\Doms\Icons\IconEMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconEmojiEvents;
use Websyspro\Elements\Doms\Icons\IconEmojiFoodBeverage;
use Websyspro\Elements\Doms\Icons\IconEmojiLanguage;
use Websyspro\Elements\Doms\Icons\IconEmojiNature;
use Websyspro\Elements\Doms\Icons\IconEmojiObjects;
use Websyspro\Elements\Doms\Icons\IconEmojiPeople;
use Websyspro\Elements\Doms\Icons\IconEmojiSymbols;
use Websyspro\Elements\Doms\Icons\IconEmojiTransportation;
use Websyspro\Elements\Doms\Icons\IconEmoticon;
use Websyspro\Elements\Doms\Icons\IconEmptyDashboard;
use Websyspro\Elements\Doms\Icons\IconEnable;
use Websyspro\Elements\Doms\Icons\IconEncrypted;
use Websyspro\Elements\Doms\Icons\IconEncryptedAdd;
use Websyspro\Elements\Doms\Icons\IconEncryptedAddCircle;
use Websyspro\Elements\Doms\Icons\IconEncryptedMinusCircle;
use Websyspro\Elements\Doms\Icons\IconEncryptedOff;
use Websyspro\Elements\Doms\Icons\IconEndocrinology;
use Websyspro\Elements\Doms\Icons\IconEnergy;
use Websyspro\Elements\Doms\Icons\IconEnergyProgramSaving;
use Websyspro\Elements\Doms\Icons\IconEnergyProgramTimeUsed;
use Websyspro\Elements\Doms\Icons\IconEnergySavingsLeaf;
use Websyspro\Elements\Doms\Icons\IconEngineering;
use Websyspro\Elements\Doms\Icons\IconEnhancedEncryption;
use Websyspro\Elements\Doms\Icons\IconEnt;
use Websyspro\Elements\Doms\Icons\IconEnterprise;
use Websyspro\Elements\Doms\Icons\IconEnterpriseOff;
use Websyspro\Elements\Doms\Icons\IconEqual;
use Websyspro\Elements\Doms\Icons\IconEqualizer;
use Websyspro\Elements\Doms\Icons\IconEraserSize1;
use Websyspro\Elements\Doms\Icons\IconEraserSize2;
use Websyspro\Elements\Doms\Icons\IconEraserSize3;
use Websyspro\Elements\Doms\Icons\IconEraserSize4;
use Websyspro\Elements\Doms\Icons\IconEraserSize5;
use Websyspro\Elements\Doms\Icons\IconError;
use Websyspro\Elements\Doms\Icons\IconErrorMed;
use Websyspro\Elements\Doms\Icons\IconEscalator;
use Websyspro\Elements\Doms\Icons\IconEscalatorWarning;
use Websyspro\Elements\Doms\Icons\IconEuro;
use Websyspro\Elements\Doms\Icons\IconEuroSymbol;
use Websyspro\Elements\Doms\Icons\IconEvent;
use Websyspro\Elements\Doms\Icons\IconEventAvailable;
use Websyspro\Elements\Doms\Icons\IconEventBusy;
use Websyspro\Elements\Doms\Icons\IconEventList;
use Websyspro\Elements\Doms\Icons\IconEventNote;
use Websyspro\Elements\Doms\Icons\IconEventRepeat;
use Websyspro\Elements\Doms\Icons\IconEventSeat;
use Websyspro\Elements\Doms\Icons\IconEventUpcoming;
use Websyspro\Elements\Doms\Icons\IconEvMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconEvShadow;
use Websyspro\Elements\Doms\Icons\IconEvShadowAdd;
use Websyspro\Elements\Doms\Icons\IconEvShadowMinus;
use Websyspro\Elements\Doms\Icons\IconEvStation;
use Websyspro\Elements\Doms\Icons\IconExclamation;
use Websyspro\Elements\Doms\Icons\IconExercise;
use Websyspro\Elements\Doms\Icons\IconExitToApp;
use Websyspro\Elements\Doms\Icons\IconExpand;
use Websyspro\Elements\Doms\Icons\IconExpandAll;
use Websyspro\Elements\Doms\Icons\IconExpandCircleDown;
use Websyspro\Elements\Doms\Icons\IconExpandCircleRight;
use Websyspro\Elements\Doms\Icons\IconExpandCircleUp;
use Websyspro\Elements\Doms\Icons\IconExpandContent;
use Websyspro\Elements\Doms\Icons\IconExpansionPanels;
use Websyspro\Elements\Doms\Icons\IconExperiment;
use Websyspro\Elements\Doms\Icons\IconExplicit;
use Websyspro\Elements\Doms\Icons\IconExplore;
use Websyspro\Elements\Doms\Icons\IconExploreNearby;
use Websyspro\Elements\Doms\Icons\IconExploreOff;
use Websyspro\Elements\Doms\Icons\IconExplosion;
use Websyspro\Elements\Doms\Icons\IconExportNotes;
use Websyspro\Elements\Doms\Icons\IconExposure;
use Websyspro\Elements\Doms\Icons\IconExposureNeg1;
use Websyspro\Elements\Doms\Icons\IconExposureNeg2;
use Websyspro\Elements\Doms\Icons\IconExposurePlus1;
use Websyspro\Elements\Doms\Icons\IconExposurePlus2;
use Websyspro\Elements\Doms\Icons\IconExposureZero;
use Websyspro\Elements\Doms\Icons\IconExtension;
use Websyspro\Elements\Doms\Icons\IconExtensionOff;
use Websyspro\Elements\Doms\Icons\IconEyeglasses;
use Websyspro\Elements\Doms\Icons\IconEyeTracking;
use Websyspro\Elements\Doms\Icons\IconFace;
use Websyspro\Elements\Doms\Icons\IconFace2;
use Websyspro\Elements\Doms\Icons\IconFace3;
use Websyspro\Elements\Doms\Icons\IconFace4;
use Websyspro\Elements\Doms\Icons\IconFace5;
use Websyspro\Elements\Doms\Icons\IconFace6;
use Websyspro\Elements\Doms\Icons\IconFaceDown;
use Websyspro\Elements\Doms\Icons\IconFaceLeft;
use Websyspro\Elements\Doms\Icons\IconFaceNod;
use Websyspro\Elements\Doms\Icons\IconFaceRetouchingOff;
use Websyspro\Elements\Doms\Icons\IconFaceRight;
use Websyspro\Elements\Doms\Icons\IconFaceShake;
use Websyspro\Elements\Doms\Icons\IconFaceUp;
use Websyspro\Elements\Doms\Icons\IconFactCheck;
use Websyspro\Elements\Doms\Icons\IconFactory;
use Websyspro\Elements\Doms\Icons\IconFalling;
use Websyspro\Elements\Doms\Icons\IconFamiliarFaceAndZone;
use Websyspro\Elements\Doms\Icons\IconFamilyHistory;
use Websyspro\Elements\Doms\Icons\IconFamilyHome;
use Websyspro\Elements\Doms\Icons\IconFamilyLink;
use Websyspro\Elements\Doms\Icons\IconFamilyRestroom;
use Websyspro\Elements\Doms\Icons\IconFamilyStar;
use Websyspro\Elements\Doms\Icons\IconFarsightDigital;
use Websyspro\Elements\Doms\Icons\IconFastfood;
use Websyspro\Elements\Doms\Icons\IconFastForward;
use Websyspro\Elements\Doms\Icons\IconFastRewind;
use Websyspro\Elements\Doms\Icons\IconFaucet;
use Websyspro\Elements\Doms\Icons\IconFavorite;
use Websyspro\Elements\Doms\Icons\IconFax;
use Websyspro\Elements\Doms\Icons\IconFeaturedPlayList;
use Websyspro\Elements\Doms\Icons\IconFeaturedSeasonalAndGifts;
use Websyspro\Elements\Doms\Icons\IconFeaturedVideo;
use Websyspro\Elements\Doms\Icons\IconFeatureSearch;
use Websyspro\Elements\Doms\Icons\IconFeedback;
use Websyspro\Elements\Doms\Icons\IconFemale;
use Websyspro\Elements\Doms\Icons\IconFemur;
use Websyspro\Elements\Doms\Icons\IconFemurAlt;
use Websyspro\Elements\Doms\Icons\IconFence;
use Websyspro\Elements\Doms\Icons\IconFertile;
use Websyspro\Elements\Doms\Icons\IconFestival;
use Websyspro\Elements\Doms\Icons\IconFiberDvr;
use Websyspro\Elements\Doms\Icons\IconFiberManualRecord;
use Websyspro\Elements\Doms\Icons\IconFiberNew;
use Websyspro\Elements\Doms\Icons\IconFiberPin;
use Websyspro\Elements\Doms\Icons\IconFiberSmartRecord;
use Websyspro\Elements\Doms\Icons\IconFileCopy;
use Websyspro\Elements\Doms\Icons\IconFileCopyOff;
use Websyspro\Elements\Doms\Icons\IconFileDownloadOff;
use Websyspro\Elements\Doms\Icons\IconFileExport;
use Websyspro\Elements\Doms\Icons\IconFileJson;
use Websyspro\Elements\Doms\Icons\IconFileMap;
use Websyspro\Elements\Doms\Icons\IconFileMapStack;
use Websyspro\Elements\Doms\Icons\IconFileOpen;
use Websyspro\Elements\Doms\Icons\IconFilePng;
use Websyspro\Elements\Doms\Icons\IconFilePresent;
use Websyspro\Elements\Doms\Icons\IconFiles;
use Websyspro\Elements\Doms\Icons\IconFileSave;
use Websyspro\Elements\Doms\Icons\IconFileSaveOff;
use Websyspro\Elements\Doms\Icons\IconFileUploadOff;
use Websyspro\Elements\Doms\Icons\IconFilter;
use Websyspro\Elements\Doms\Icons\IconFilter1;
use Websyspro\Elements\Doms\Icons\IconFilter2;
use Websyspro\Elements\Doms\Icons\IconFilter3;
use Websyspro\Elements\Doms\Icons\IconFilter4;
use Websyspro\Elements\Doms\Icons\IconFilter5;
use Websyspro\Elements\Doms\Icons\IconFilter6;
use Websyspro\Elements\Doms\Icons\IconFilter7;
use Websyspro\Elements\Doms\Icons\IconFilter8;
use Websyspro\Elements\Doms\Icons\IconFilter9;
use Websyspro\Elements\Doms\Icons\IconFilter9Plus;
use Websyspro\Elements\Doms\Icons\IconFilterAlt;
use Websyspro\Elements\Doms\Icons\IconFilterAltOff;
use Websyspro\Elements\Doms\Icons\IconFilterArrowRight;
use Websyspro\Elements\Doms\Icons\IconFilterBAndW;
use Websyspro\Elements\Doms\Icons\IconFilterCenterFocus;
use Websyspro\Elements\Doms\Icons\IconFilterDrama;
use Websyspro\Elements\Doms\Icons\IconFilterFrames;
use Websyspro\Elements\Doms\Icons\IconFilterHdr;
use Websyspro\Elements\Doms\Icons\IconFilterList;
use Websyspro\Elements\Doms\Icons\IconFilterListOff;
use Websyspro\Elements\Doms\Icons\IconFilterNone;
use Websyspro\Elements\Doms\Icons\IconFilterRetrolux;
use Websyspro\Elements\Doms\Icons\IconFilterTiltShift;
use Websyspro\Elements\Doms\Icons\IconFilterVintage;
use Websyspro\Elements\Doms\Icons\IconFinance;
use Websyspro\Elements\Doms\Icons\IconFinanceChip;
use Websyspro\Elements\Doms\Icons\IconFinanceMode;
use Websyspro\Elements\Doms\Icons\IconFindInPage;
use Websyspro\Elements\Doms\Icons\IconFindReplace;
use Websyspro\Elements\Doms\Icons\IconFingerprint;
use Websyspro\Elements\Doms\Icons\IconFingerprintOff;
use Websyspro\Elements\Doms\Icons\IconFireExtinguisher;
use Websyspro\Elements\Doms\Icons\IconFireHydrant;
use Websyspro\Elements\Doms\Icons\IconFireplace;
use Websyspro\Elements\Doms\Icons\IconFireTruck;
use Websyspro\Elements\Doms\Icons\IconFirstPage;
use Websyspro\Elements\Doms\Icons\IconFitnessCenter;
use Websyspro\Elements\Doms\Icons\IconFitnessTracker;
use Websyspro\Elements\Doms\Icons\IconFitPage;
use Websyspro\Elements\Doms\Icons\IconFitPageHeight;
use Websyspro\Elements\Doms\Icons\IconFitPageWidth;
use Websyspro\Elements\Doms\Icons\IconFitScreen;
use Websyspro\Elements\Doms\Icons\IconFitWidth;
use Websyspro\Elements\Doms\Icons\IconFlag;
use Websyspro\Elements\Doms\Icons\IconFlag2;
use Websyspro\Elements\Doms\Icons\IconFlagCheck;
use Websyspro\Elements\Doms\Icons\IconFlagCircle;
use Websyspro\Elements\Doms\Icons\IconFlaky;
use Websyspro\Elements\Doms\Icons\IconFlare;
use Websyspro\Elements\Doms\Icons\IconFlashAuto;
use Websyspro\Elements\Doms\Icons\IconFlashlightOff;
use Websyspro\Elements\Doms\Icons\IconFlashlightOn;
use Websyspro\Elements\Doms\Icons\IconFlashOff;
use Websyspro\Elements\Doms\Icons\IconFlashOn;
use Websyspro\Elements\Doms\Icons\IconFlatware;
use Websyspro\Elements\Doms\Icons\IconFlexDirection;
use Websyspro\Elements\Doms\Icons\IconFlexNoWrap;
use Websyspro\Elements\Doms\Icons\IconFlexWrap;
use Websyspro\Elements\Doms\Icons\IconFlight;
use Websyspro\Elements\Doms\Icons\IconFlightClass;
use Websyspro\Elements\Doms\Icons\IconFlightLand;
use Websyspro\Elements\Doms\Icons\IconFlightsAndHotels;
use Websyspro\Elements\Doms\Icons\IconFlightTakeoff;
use Websyspro\Elements\Doms\Icons\IconFlip;
use Websyspro\Elements\Doms\Icons\IconFlipCameraAndroid;
use Websyspro\Elements\Doms\Icons\IconFlipCameraIos;
use Websyspro\Elements\Doms\Icons\IconFlipToBack;
use Websyspro\Elements\Doms\Icons\IconFlipToFront;
use Websyspro\Elements\Doms\Icons\IconFloatLandscape2;
use Websyspro\Elements\Doms\Icons\IconFloatPortrait2;
use Websyspro\Elements\Doms\Icons\IconFlood;
use Websyspro\Elements\Doms\Icons\IconFloor;
use Websyspro\Elements\Doms\Icons\IconFloorLamp;
use Websyspro\Elements\Doms\Icons\IconFlowchart;
use Websyspro\Elements\Doms\Icons\IconFlowsheet;
use Websyspro\Elements\Doms\Icons\IconFluid;
use Websyspro\Elements\Doms\Icons\IconFluidBalance;
use Websyspro\Elements\Doms\Icons\IconFluidMed;
use Websyspro\Elements\Doms\Icons\IconFluorescent;
use Websyspro\Elements\Doms\Icons\IconFlutter;
use Websyspro\Elements\Doms\Icons\IconFlutterDash;
use Websyspro\Elements\Doms\Icons\IconFlyover;
use Websyspro\Elements\Doms\Icons\IconFmdBad;
use Websyspro\Elements\Doms\Icons\IconFoggy;
use Websyspro\Elements\Doms\Icons\IconFoldedHands;
use Websyspro\Elements\Doms\Icons\IconFolder;
use Websyspro\Elements\Doms\Icons\IconFolderCheck;
use Websyspro\Elements\Doms\Icons\IconFolderCheck2;
use Websyspro\Elements\Doms\Icons\IconFolderCode;
use Websyspro\Elements\Doms\Icons\IconFolderCopy;
use Websyspro\Elements\Doms\Icons\IconFolderData;
use Websyspro\Elements\Doms\Icons\IconFolderDelete;
use Websyspro\Elements\Doms\Icons\IconFolderEye;
use Websyspro\Elements\Doms\Icons\IconFolderInfo;
use Websyspro\Elements\Doms\Icons\IconFolderLimited;
use Websyspro\Elements\Doms\Icons\IconFolderManaged;
use Websyspro\Elements\Doms\Icons\IconFolderMatch;
use Websyspro\Elements\Doms\Icons\IconFolderOff;
use Websyspro\Elements\Doms\Icons\IconFolderOpen;
use Websyspro\Elements\Doms\Icons\IconFolderShared;
use Websyspro\Elements\Doms\Icons\IconFolderSpecial;
use Websyspro\Elements\Doms\Icons\IconFolderSupervised;
use Websyspro\Elements\Doms\Icons\IconFolderZip;
use Websyspro\Elements\Doms\Icons\IconFollowTheSigns;
use Websyspro\Elements\Doms\Icons\IconFontDownload;
use Websyspro\Elements\Doms\Icons\IconFontDownloadOff;
use Websyspro\Elements\Doms\Icons\IconFoodBank;
use Websyspro\Elements\Doms\Icons\IconFootBones;
use Websyspro\Elements\Doms\Icons\IconFootprint;
use Websyspro\Elements\Doms\Icons\IconForest;
use Websyspro\Elements\Doms\Icons\IconForkLeft;
use Websyspro\Elements\Doms\Icons\IconForklift;
use Websyspro\Elements\Doms\Icons\IconForkRight;
use Websyspro\Elements\Doms\Icons\IconForkSpoon;
use Websyspro\Elements\Doms\Icons\IconFormatAlignCenter;
use Websyspro\Elements\Doms\Icons\IconFormatAlignJustify;
use Websyspro\Elements\Doms\Icons\IconFormatAlignLeft;
use Websyspro\Elements\Doms\Icons\IconFormatAlignRight;
use Websyspro\Elements\Doms\Icons\IconFormatBold;
use Websyspro\Elements\Doms\Icons\IconFormatClear;
use Websyspro\Elements\Doms\Icons\IconFormatColorFill;
use Websyspro\Elements\Doms\Icons\IconFormatColorReset;
use Websyspro\Elements\Doms\Icons\IconFormatColorText;
use Websyspro\Elements\Doms\Icons\IconFormatH1;
use Websyspro\Elements\Doms\Icons\IconFormatH2;
use Websyspro\Elements\Doms\Icons\IconFormatH3;
use Websyspro\Elements\Doms\Icons\IconFormatH4;
use Websyspro\Elements\Doms\Icons\IconFormatH5;
use Websyspro\Elements\Doms\Icons\IconFormatH6;
use Websyspro\Elements\Doms\Icons\IconFormatImageLeft;
use Websyspro\Elements\Doms\Icons\IconFormatImageRight;
use Websyspro\Elements\Doms\Icons\IconFormatIndentDecrease;
use Websyspro\Elements\Doms\Icons\IconFormatIndentIncrease;
use Websyspro\Elements\Doms\Icons\IconFormatInkHighlighter;
use Websyspro\Elements\Doms\Icons\IconFormatItalic;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacing;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacing2;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacingStandard;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacingWide;
use Websyspro\Elements\Doms\Icons\IconFormatLetterSpacingWider;
use Websyspro\Elements\Doms\Icons\IconFormatLineSpacing;
use Websyspro\Elements\Doms\Icons\IconFormatListBulleted;
use Websyspro\Elements\Doms\Icons\IconFormatListBulletedAdd;
use Websyspro\Elements\Doms\Icons\IconFormatListNumbered;
use Websyspro\Elements\Doms\Icons\IconFormatListNumberedRtl;
use Websyspro\Elements\Doms\Icons\IconFormatOverline;
use Websyspro\Elements\Doms\Icons\IconFormatPaint;
use Websyspro\Elements\Doms\Icons\IconFormatParagraph;
use Websyspro\Elements\Doms\Icons\IconFormatQuote;
use Websyspro\Elements\Doms\Icons\IconFormatQuoteOff;
use Websyspro\Elements\Doms\Icons\IconFormatShapes;
use Websyspro\Elements\Doms\Icons\IconFormatSize;
use Websyspro\Elements\Doms\Icons\IconFormatStrikethrough;
use Websyspro\Elements\Doms\Icons\IconFormatTextClip;
use Websyspro\Elements\Doms\Icons\IconFormatTextdirectionLToR;
use Websyspro\Elements\Doms\Icons\IconFormatTextdirectionRToL;
use Websyspro\Elements\Doms\Icons\IconFormatTextdirectionVertical;
use Websyspro\Elements\Doms\Icons\IconFormatTextOverflow;
use Websyspro\Elements\Doms\Icons\IconFormatTextWrap;
use Websyspro\Elements\Doms\Icons\IconFormatUnderlined;
use Websyspro\Elements\Doms\Icons\IconFormatUnderlinedSquiggle;
use Websyspro\Elements\Doms\Icons\IconFormsAddOn;
use Websyspro\Elements\Doms\Icons\IconFormsAppsScript;
use Websyspro\Elements\Doms\Icons\IconFort;
use Websyspro\Elements\Doms\Icons\IconForum;
use Websyspro\Elements\Doms\Icons\IconForward;
use Websyspro\Elements\Doms\Icons\IconForward10;
use Websyspro\Elements\Doms\Icons\IconForward30;
use Websyspro\Elements\Doms\Icons\IconForward5;
use Websyspro\Elements\Doms\Icons\IconForwardCircle;
use Websyspro\Elements\Doms\Icons\IconForwardMedia;
use Websyspro\Elements\Doms\Icons\IconForwardToInbox;
use Websyspro\Elements\Doms\Icons\IconForYou;
use Websyspro\Elements\Doms\Icons\IconFoundation;
use Websyspro\Elements\Doms\Icons\IconFrameInspect;
use Websyspro\Elements\Doms\Icons\IconFramePerson;
use Websyspro\Elements\Doms\Icons\IconFramePersonMic;
use Websyspro\Elements\Doms\Icons\IconFramePersonOff;
use Websyspro\Elements\Doms\Icons\IconFrameReload;
use Websyspro\Elements\Doms\Icons\IconFrameSource;
use Websyspro\Elements\Doms\Icons\IconFreeCancellation;
use Websyspro\Elements\Doms\Icons\IconFrontHand;
use Websyspro\Elements\Doms\Icons\IconFrontLoader;
use Websyspro\Elements\Doms\Icons\IconFullCoverage;
use Websyspro\Elements\Doms\Icons\IconFullHd;
use Websyspro\Elements\Doms\Icons\IconFullscreen;
use Websyspro\Elements\Doms\Icons\IconFullscreenExit;
use Websyspro\Elements\Doms\Icons\IconFullscreenPortrait;
use Websyspro\Elements\Doms\Icons\IconFullStackedBarChart;
use Websyspro\Elements\Doms\Icons\IconFunction;
use Websyspro\Elements\Doms\Icons\IconFunctions;
use Websyspro\Elements\Doms\Icons\IconFunicular;
use Websyspro\Elements\Doms\Icons\IconGalleryThumbnail;
use Websyspro\Elements\Doms\Icons\IconGamepad;
use Websyspro\Elements\Doms\Icons\IconGarage;
use Websyspro\Elements\Doms\Icons\IconGarageDoor;
use Websyspro\Elements\Doms\Icons\IconGarageHome;
use Websyspro\Elements\Doms\Icons\IconGardenCart;
use Websyspro\Elements\Doms\Icons\IconGasMeter;
use Websyspro\Elements\Doms\Icons\IconGastroenterology;
use Websyspro\Elements\Doms\Icons\IconGate;
use Websyspro\Elements\Doms\Icons\IconGavel;
use Websyspro\Elements\Doms\Icons\IconGeneralDevice;
use Websyspro\Elements\Doms\Icons\IconGenetics;
use Websyspro\Elements\Doms\Icons\IconGenres;
use Websyspro\Elements\Doms\Icons\IconGesture;
use Websyspro\Elements\Doms\Icons\IconGestureSelect;
use Websyspro\Elements\Doms\Icons\IconGif;
use Websyspro\Elements\Doms\Icons\IconGif2;
use Websyspro\Elements\Doms\Icons\IconGifBox;
use Websyspro\Elements\Doms\Icons\IconGirl;
use Websyspro\Elements\Doms\Icons\IconGite;
use Websyspro\Elements\Doms\Icons\IconGlassCup;
use Websyspro\Elements\Doms\Icons\IconGlobe;
use Websyspro\Elements\Doms\Icons\IconGlobeAsia;
use Websyspro\Elements\Doms\Icons\IconGlobeBook;
use Websyspro\Elements\Doms\Icons\IconGlobeUk;
use Websyspro\Elements\Doms\Icons\IconGlucose;
use Websyspro\Elements\Doms\Icons\IconGlyphs;
use Websyspro\Elements\Doms\Icons\IconGMobiledata;
use Websyspro\Elements\Doms\Icons\IconGMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconGolfCourse;
use Websyspro\Elements\Doms\Icons\IconGondolaLift;
use Websyspro\Elements\Doms\Icons\IconGoogleHomeDevices;
use Websyspro\Elements\Doms\Icons\IconGoogleTvRemote;
use Websyspro\Elements\Doms\Icons\IconGoogleWifi;
use Websyspro\Elements\Doms\Icons\IconGoToLine;
use Websyspro\Elements\Doms\Icons\IconGppBad;
use Websyspro\Elements\Doms\Icons\IconGppMaybe;
use Websyspro\Elements\Doms\Icons\IconGradient;
use Websyspro\Elements\Doms\Icons\IconGrading;
use Websyspro\Elements\Doms\Icons\IconGrain;
use Websyspro\Elements\Doms\Icons\IconGraph1;
use Websyspro\Elements\Doms\Icons\IconGraph2;
use Websyspro\Elements\Doms\Icons\IconGraph3;
use Websyspro\Elements\Doms\Icons\IconGraph4;
use Websyspro\Elements\Doms\Icons\IconGraph5;
use Websyspro\Elements\Doms\Icons\IconGraph6;
use Websyspro\Elements\Doms\Icons\IconGraphicEq;
use Websyspro\Elements\Doms\Icons\IconGrass;
use Websyspro\Elements\Doms\Icons\IconGrid3x3;
use Websyspro\Elements\Doms\Icons\IconGrid3x3Off;
use Websyspro\Elements\Doms\Icons\IconGrid4x4;
use Websyspro\Elements\Doms\Icons\IconGridGoldenratio;
use Websyspro\Elements\Doms\Icons\IconGridGuides;
use Websyspro\Elements\Doms\Icons\IconGridOff;
use Websyspro\Elements\Doms\Icons\IconGridOn;
use Websyspro\Elements\Doms\Icons\IconGridView;
use Websyspro\Elements\Doms\Icons\IconGrocery;
use Websyspro\Elements\Doms\Icons\IconGroup;
use Websyspro\Elements\Doms\Icons\IconGroupAdd;
use Websyspro\Elements\Doms\Icons\IconGroupedBarChart;
use Websyspro\Elements\Doms\Icons\IconGroupOff;
use Websyspro\Elements\Doms\Icons\IconGroupRemove;
use Websyspro\Elements\Doms\Icons\IconGroups;
use Websyspro\Elements\Doms\Icons\IconGroups2;
use Websyspro\Elements\Doms\Icons\IconGroups3;
use Websyspro\Elements\Doms\Icons\IconGroupSearch;
use Websyspro\Elements\Doms\Icons\IconGroupWork;
use Websyspro\Elements\Doms\Icons\IconGTranslate;
use Websyspro\Elements\Doms\Icons\IconGuardian;
use Websyspro\Elements\Doms\Icons\IconGynecology;
use Websyspro\Elements\Doms\Icons\IconHail;
use Websyspro\Elements\Doms\Icons\IconHallway;
use Websyspro\Elements\Doms\Icons\IconHandBones;
use Websyspro\Elements\Doms\Icons\IconHandGesture;
use Websyspro\Elements\Doms\Icons\IconHandGestureOff;
use Websyspro\Elements\Doms\Icons\IconHandheldController;
use Websyspro\Elements\Doms\Icons\IconHandshake;
use Websyspro\Elements\Doms\Icons\IconHandyman;
use Websyspro\Elements\Doms\Icons\IconHangoutVideo;
use Websyspro\Elements\Doms\Icons\IconHangoutVideoOff;
use Websyspro\Elements\Doms\Icons\IconHardDisk;
use Websyspro\Elements\Doms\Icons\IconHardDrive;
use Websyspro\Elements\Doms\Icons\IconHardDrive2;
use Websyspro\Elements\Doms\Icons\IconHardware;
use Websyspro\Elements\Doms\Icons\IconHd;
use Websyspro\Elements\Doms\Icons\IconHdrAuto;
use Websyspro\Elements\Doms\Icons\IconHdrAutoSelect;
use Websyspro\Elements\Doms\Icons\IconHdrEnhancedSelect;
use Websyspro\Elements\Doms\Icons\IconHdrOff;
use Websyspro\Elements\Doms\Icons\IconHdrOffSelect;
use Websyspro\Elements\Doms\Icons\IconHdrOn;
use Websyspro\Elements\Doms\Icons\IconHdrOnSelect;
use Websyspro\Elements\Doms\Icons\IconHdrPlus;
use Websyspro\Elements\Doms\Icons\IconHdrPlusOff;
use Websyspro\Elements\Doms\Icons\IconHdrStrong;
use Websyspro\Elements\Doms\Icons\IconHdrWeak;
use Websyspro\Elements\Doms\Icons\IconHeadMountedDevice;
use Websyspro\Elements\Doms\Icons\IconHeadphones;
use Websyspro\Elements\Doms\Icons\IconHeadphonesBattery;
use Websyspro\Elements\Doms\Icons\IconHeadsetMic;
use Websyspro\Elements\Doms\Icons\IconHeadsetOff;
use Websyspro\Elements\Doms\Icons\IconHealing;
use Websyspro\Elements\Doms\Icons\IconHealthAndBeauty;
use Websyspro\Elements\Doms\Icons\IconHealthAndSafety;
use Websyspro\Elements\Doms\Icons\IconHealthMetrics;
use Websyspro\Elements\Doms\Icons\IconHeapSnapshotLarge;
use Websyspro\Elements\Doms\Icons\IconHeapSnapshotMultiple;
use Websyspro\Elements\Doms\Icons\IconHeapSnapshotThumbnail;
use Websyspro\Elements\Doms\Icons\IconHearing;
use Websyspro\Elements\Doms\Icons\IconHearingAid;
use Websyspro\Elements\Doms\Icons\IconHearingAidDisabled;
use Websyspro\Elements\Doms\Icons\IconHearingDisabled;
use Websyspro\Elements\Doms\Icons\IconHeartBroken;
use Websyspro\Elements\Doms\Icons\IconHeartCheck;
use Websyspro\Elements\Doms\Icons\IconHeartMinus;
use Websyspro\Elements\Doms\Icons\IconHeartPlus;
use Websyspro\Elements\Doms\Icons\IconHeat;
use Websyspro\Elements\Doms\Icons\IconHeatPump;
use Websyspro\Elements\Doms\Icons\IconHeatPumpBalance;
use Websyspro\Elements\Doms\Icons\IconHeight;
use Websyspro\Elements\Doms\Icons\IconHelicopter;
use Websyspro\Elements\Doms\Icons\IconHelp;
use Websyspro\Elements\Doms\Icons\IconHelpCenter;
use Websyspro\Elements\Doms\Icons\IconHelpClinic;
use Websyspro\Elements\Doms\Icons\IconHematology;
use Websyspro\Elements\Doms\Icons\IconHevc;
use Websyspro\Elements\Doms\Icons\IconHexagon;
use Websyspro\Elements\Doms\Icons\IconHide;
use Websyspro\Elements\Doms\Icons\IconHideImage;
use Websyspro\Elements\Doms\Icons\IconHideSource;
use Websyspro\Elements\Doms\Icons\IconHighDensity;
use Websyspro\Elements\Doms\Icons\IconHighlight;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize1;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize2;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize3;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize4;
use Websyspro\Elements\Doms\Icons\IconHighlighterSize5;
use Websyspro\Elements\Doms\Icons\IconHighlightKeyboardFocus;
use Websyspro\Elements\Doms\Icons\IconHighlightMouseCursor;
use Websyspro\Elements\Doms\Icons\IconHighlightTextCursor;
use Websyspro\Elements\Doms\Icons\IconHighQuality;
use Websyspro\Elements\Doms\Icons\IconHighRes;
use Websyspro\Elements\Doms\Icons\IconHiking;
use Websyspro\Elements\Doms\Icons\IconHistory;
use Websyspro\Elements\Doms\Icons\IconHistory2;
use Websyspro\Elements\Doms\Icons\IconHistoryEdu;
use Websyspro\Elements\Doms\Icons\IconHistoryOff;
use Websyspro\Elements\Doms\Icons\IconHistoryToggleOff;
use Websyspro\Elements\Doms\Icons\IconHive;
use Websyspro\Elements\Doms\Icons\IconHls;
use Websyspro\Elements\Doms\Icons\IconHlsOff;
use Websyspro\Elements\Doms\Icons\IconHMobiledata;
use Websyspro\Elements\Doms\Icons\IconHMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconHolidayVillage;
use Websyspro\Elements\Doms\Icons\IconHome;
use Websyspro\Elements\Doms\Icons\IconHomeAndGarden;
use Websyspro\Elements\Doms\Icons\IconHomeAppLogo;
use Websyspro\Elements\Doms\Icons\IconHomeHealth;
use Websyspro\Elements\Doms\Icons\IconHomeImprovementAndTools;
use Websyspro\Elements\Doms\Icons\IconHomeIotDevice;
use Websyspro\Elements\Doms\Icons\IconHomeMax;
use Websyspro\Elements\Doms\Icons\IconHomeMaxDots;
use Websyspro\Elements\Doms\Icons\IconHomeMini;
use Websyspro\Elements\Doms\Icons\IconHomePin;
use Websyspro\Elements\Doms\Icons\IconHomeRepairService;
use Websyspro\Elements\Doms\Icons\IconHomeSpeaker;
use Websyspro\Elements\Doms\Icons\IconHomeStorage;
use Websyspro\Elements\Doms\Icons\IconHomeWork;
use Websyspro\Elements\Doms\Icons\IconHorizontalDistribute;
use Websyspro\Elements\Doms\Icons\IconHorizontalRule;
use Websyspro\Elements\Doms\Icons\IconHorizontalSplit;
use Websyspro\Elements\Doms\Icons\IconHost;
use Websyspro\Elements\Doms\Icons\IconHotel;
use Websyspro\Elements\Doms\Icons\IconHotelClass;
use Websyspro\Elements\Doms\Icons\IconHotTub;
use Websyspro\Elements\Doms\Icons\IconHourglass;
use Websyspro\Elements\Doms\Icons\IconHourglassArrowDown;
use Websyspro\Elements\Doms\Icons\IconHourglassArrowUp;
use Websyspro\Elements\Doms\Icons\IconHourglassBottom;
use Websyspro\Elements\Doms\Icons\IconHourglassDisabled;
use Websyspro\Elements\Doms\Icons\IconHourglassEmpty;
use Websyspro\Elements\Doms\Icons\IconHourglassPause;
use Websyspro\Elements\Doms\Icons\IconHourglassTop;
use Websyspro\Elements\Doms\Icons\IconHouse;
use Websyspro\Elements\Doms\Icons\IconHouseboat;
use Websyspro\Elements\Doms\Icons\IconHouseholdSupplies;
use Websyspro\Elements\Doms\Icons\IconHouseSiding;
use Websyspro\Elements\Doms\Icons\IconHouseWithShield;
use Websyspro\Elements\Doms\Icons\IconHov;
use Websyspro\Elements\Doms\Icons\IconHowToReg;
use Websyspro\Elements\Doms\Icons\IconHowToVote;
use Websyspro\Elements\Doms\Icons\IconHPlusMobiledata;
use Websyspro\Elements\Doms\Icons\IconHPlusMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconHrResting;
use Websyspro\Elements\Doms\Icons\IconHtml;
use Websyspro\Elements\Doms\Icons\IconHttp;
use Websyspro\Elements\Doms\Icons\IconHub;
use Websyspro\Elements\Doms\Icons\IconHumerus;
use Websyspro\Elements\Doms\Icons\IconHumerusAlt;
use Websyspro\Elements\Doms\Icons\IconHumidityHigh;
use Websyspro\Elements\Doms\Icons\IconHumidityIndoor;
use Websyspro\Elements\Doms\Icons\IconHumidityLow;
use Websyspro\Elements\Doms\Icons\IconHumidityMid;
use Websyspro\Elements\Doms\Icons\IconHumidityPercentage;
use Websyspro\Elements\Doms\Icons\IconHvac;
use Websyspro\Elements\Doms\Icons\IconIcecream;
use Websyspro\Elements\Doms\Icons\IconIceSkating;
use Websyspro\Elements\Doms\Icons\IconIdCard;
use Websyspro\Elements\Doms\Icons\IconIdentityAwareProxy;
use Websyspro\Elements\Doms\Icons\IconIdentityPlatform;
use Websyspro\Elements\Doms\Icons\IconIfl;
use Websyspro\Elements\Doms\Icons\IconIframe;
use Websyspro\Elements\Doms\Icons\IconIframeOff;
use Websyspro\Elements\Doms\Icons\IconImage;
use Websyspro\Elements\Doms\Icons\IconImageAspectRatio;
use Websyspro\Elements\Doms\Icons\IconImageSearch;
use Websyspro\Elements\Doms\Icons\IconImagesearchRoller;
use Websyspro\Elements\Doms\Icons\IconImagesmode;
use Websyspro\Elements\Doms\Icons\IconImmunology;
use Websyspro\Elements\Doms\Icons\IconImportantDevices;
use Websyspro\Elements\Doms\Icons\IconImportContacts;
use Websyspro\Elements\Doms\Icons\IconInactiveOrder;
use Websyspro\Elements\Doms\Icons\IconInbox;
use Websyspro\Elements\Doms\Icons\IconInboxCustomize;
use Websyspro\Elements\Doms\Icons\IconInboxText;
use Websyspro\Elements\Doms\Icons\IconIncompleteCircle;
use Websyspro\Elements\Doms\Icons\IconIndeterminateCheckBox;
use Websyspro\Elements\Doms\Icons\IconIndeterminateQuestionBox;
use Websyspro\Elements\Doms\Icons\IconInfo;
use Websyspro\Elements\Doms\Icons\IconInfoI;
use Websyspro\Elements\Doms\Icons\IconInfrared;
use Websyspro\Elements\Doms\Icons\IconInHomeMode;
use Websyspro\Elements\Doms\Icons\IconInkEraser;
use Websyspro\Elements\Doms\Icons\IconInkEraserOff;
use Websyspro\Elements\Doms\Icons\IconInkHighlighter;
use Websyspro\Elements\Doms\Icons\IconInkHighlighterMove;
use Websyspro\Elements\Doms\Icons\IconInkMarker;
use Websyspro\Elements\Doms\Icons\IconInkPen;
use Websyspro\Elements\Doms\Icons\IconInkSelection;
use Websyspro\Elements\Doms\Icons\IconInpatient;
use Websyspro\Elements\Doms\Icons\IconInput;
use Websyspro\Elements\Doms\Icons\IconInputCircle;
use Websyspro\Elements\Doms\Icons\IconInsertChart;
use Websyspro\Elements\Doms\Icons\IconInsertPageBreak;
use Websyspro\Elements\Doms\Icons\IconInsertText;
use Websyspro\Elements\Doms\Icons\IconInstallDesktop;
use Websyspro\Elements\Doms\Icons\IconInstallMobile;
use Websyspro\Elements\Doms\Icons\IconInstantMix;
use Websyspro\Elements\Doms\Icons\IconIntegrationInstructions;
use Websyspro\Elements\Doms\Icons\IconInteractiveSpace;
use Websyspro\Elements\Doms\Icons\IconInterests;
use Websyspro\Elements\Doms\Icons\IconInterpreterMode;
use Websyspro\Elements\Doms\Icons\IconInventory;
use Websyspro\Elements\Doms\Icons\IconInventory2;
use Websyspro\Elements\Doms\Icons\IconInvertColors;
use Websyspro\Elements\Doms\Icons\IconInvertColorsOff;
use Websyspro\Elements\Doms\Icons\IconIos;
use Websyspro\Elements\Doms\Icons\IconIosShare;
use Websyspro\Elements\Doms\Icons\IconIron;
use Websyspro\Elements\Doms\Icons\IconJamboardKiosk;
use Websyspro\Elements\Doms\Icons\IconJavascript;
use Websyspro\Elements\Doms\Icons\IconJoin;
use Websyspro\Elements\Doms\Icons\IconJoinInner;
use Websyspro\Elements\Doms\Icons\IconJoinLeft;
use Websyspro\Elements\Doms\Icons\IconJoinRight;
use Websyspro\Elements\Doms\Icons\IconJoystick;
use Websyspro\Elements\Doms\Icons\IconJumpToElement;
use Websyspro\Elements\Doms\Icons\IconKayaking;
use Websyspro\Elements\Doms\Icons\IconKebabDining;
use Websyspro\Elements\Doms\Icons\IconKeep;
use Websyspro\Elements\Doms\Icons\IconKeepOff;
use Websyspro\Elements\Doms\Icons\IconKeepPublic;
use Websyspro\Elements\Doms\Icons\IconKettle;
use Websyspro\Elements\Doms\Icons\IconKey;
use Websyspro\Elements\Doms\Icons\IconKeyboard;
use Websyspro\Elements\Doms\Icons\IconKeyboardAlt;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowDown;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowLeft;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowRight;
use Websyspro\Elements\Doms\Icons\IconKeyboardArrowUp;
use Websyspro\Elements\Doms\Icons\IconKeyboardBackspace;
use Websyspro\Elements\Doms\Icons\IconKeyboardCapslock;
use Websyspro\Elements\Doms\Icons\IconKeyboardCapslockBadge;
use Websyspro\Elements\Doms\Icons\IconKeyboardCommandKey;
use Websyspro\Elements\Doms\Icons\IconKeyboardControlKey;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowDown;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowLeft;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowRight;
use Websyspro\Elements\Doms\Icons\IconKeyboardDoubleArrowUp;
use Websyspro\Elements\Doms\Icons\IconKeyboardExternalInput;
use Websyspro\Elements\Doms\Icons\IconKeyboardFull;
use Websyspro\Elements\Doms\Icons\IconKeyboardHide;
use Websyspro\Elements\Doms\Icons\IconKeyboardKeys;
use Websyspro\Elements\Doms\Icons\IconKeyboardLock;
use Websyspro\Elements\Doms\Icons\IconKeyboardLockOff;
use Websyspro\Elements\Doms\Icons\IconKeyboardOff;
use Websyspro\Elements\Doms\Icons\IconKeyboardOnscreen;
use Websyspro\Elements\Doms\Icons\IconKeyboardOptionKey;
use Websyspro\Elements\Doms\Icons\IconKeyboardPreviousLanguage;
use Websyspro\Elements\Doms\Icons\IconKeyboardReturn;
use Websyspro\Elements\Doms\Icons\IconKeyboardTab;
use Websyspro\Elements\Doms\Icons\IconKeyboardTabRtl;
use Websyspro\Elements\Doms\Icons\IconKeyOff;
use Websyspro\Elements\Doms\Icons\IconKeyVertical;
use Websyspro\Elements\Doms\Icons\IconKeyVisualizer;
use Websyspro\Elements\Doms\Icons\IconKidStar;
use Websyspro\Elements\Doms\Icons\IconKingBed;
use Websyspro\Elements\Doms\Icons\IconKitchen;
use Websyspro\Elements\Doms\Icons\IconKitesurfing;
use Websyspro\Elements\Doms\Icons\IconLabel;
use Websyspro\Elements\Doms\Icons\IconLabelImportant;
use Websyspro\Elements\Doms\Icons\IconLabelOff;
use Websyspro\Elements\Doms\Icons\IconLabPanel;
use Websyspro\Elements\Doms\Icons\IconLabProfile;
use Websyspro\Elements\Doms\Icons\IconLabResearch;
use Websyspro\Elements\Doms\Icons\IconLabs;
use Websyspro\Elements\Doms\Icons\IconLan;
use Websyspro\Elements\Doms\Icons\IconLandscape;
use Websyspro\Elements\Doms\Icons\IconLandscape2;
use Websyspro\Elements\Doms\Icons\IconLandscape2Off;
use Websyspro\Elements\Doms\Icons\IconLandslide;
use Websyspro\Elements\Doms\Icons\IconLanguage;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseArray;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseCangjie;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseDayi;
use Websyspro\Elements\Doms\Icons\IconLanguageChinesePinyin;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseQuick;
use Websyspro\Elements\Doms\Icons\IconLanguageChineseWubi;
use Websyspro\Elements\Doms\Icons\IconLanguageFrench;
use Websyspro\Elements\Doms\Icons\IconLanguageGbEnglish;
use Websyspro\Elements\Doms\Icons\IconLanguageInternational;
use Websyspro\Elements\Doms\Icons\IconLanguageJapaneseKana;
use Websyspro\Elements\Doms\Icons\IconLanguageKoreanLatin;
use Websyspro\Elements\Doms\Icons\IconLanguagePinyin;
use Websyspro\Elements\Doms\Icons\IconLanguageSpanish;
use Websyspro\Elements\Doms\Icons\IconLanguageUs;
use Websyspro\Elements\Doms\Icons\IconLanguageUsColemak;
use Websyspro\Elements\Doms\Icons\IconLanguageUsDvorak;
use Websyspro\Elements\Doms\Icons\IconLaps;
use Websyspro\Elements\Doms\Icons\IconLaptopCar;
use Websyspro\Elements\Doms\Icons\IconLaptopChromebook;
use Websyspro\Elements\Doms\Icons\IconLaptopMac;
use Websyspro\Elements\Doms\Icons\IconLaptopWindows;
use Websyspro\Elements\Doms\Icons\IconLassoSelect;
use Websyspro\Elements\Doms\Icons\IconLastPage;
use Websyspro\Elements\Doms\Icons\IconLaundry;
use Websyspro\Elements\Doms\Icons\IconLayers;
use Websyspro\Elements\Doms\Icons\IconLayersClear;
use Websyspro\Elements\Doms\Icons\IconLda;
use Websyspro\Elements\Doms\Icons\IconLeaderboard;
use Websyspro\Elements\Doms\Icons\IconLeakAdd;
use Websyspro\Elements\Doms\Icons\IconLeakRemove;
use Websyspro\Elements\Doms\Icons\IconLeftClick;
use Websyspro\Elements\Doms\Icons\IconLeftPanelClose;
use Websyspro\Elements\Doms\Icons\IconLeftPanelOpen;
use Websyspro\Elements\Doms\Icons\IconLegendToggle;
use Websyspro\Elements\Doms\Icons\IconLensBlur;
use Websyspro\Elements\Doms\Icons\IconLetterSwitch;
use Websyspro\Elements\Doms\Icons\IconLibraryAdd;
use Websyspro\Elements\Doms\Icons\IconLibraryAddCheck;
use Websyspro\Elements\Doms\Icons\IconLibraryBooks;
use Websyspro\Elements\Doms\Icons\IconLibraryMusic;
use Websyspro\Elements\Doms\Icons\IconLicense;
use Websyspro\Elements\Doms\Icons\IconLiftToTalk;
use Websyspro\Elements\Doms\Icons\IconLight;
use Websyspro\Elements\Doms\Icons\IconLightbulb;
use Websyspro\Elements\Doms\Icons\IconLightbulb2;
use Websyspro\Elements\Doms\Icons\IconLightbulbCircle;
use Websyspro\Elements\Doms\Icons\IconLightGroup;
use Websyspro\Elements\Doms\Icons\IconLightMode;
use Websyspro\Elements\Doms\Icons\IconLightningStand;
use Websyspro\Elements\Doms\Icons\IconLightOff;
use Websyspro\Elements\Doms\Icons\IconLinearScale;
use Websyspro\Elements\Doms\Icons\IconLineAxis;
use Websyspro\Elements\Doms\Icons\IconLineCurve;
use Websyspro\Elements\Doms\Icons\IconLineEnd;
use Websyspro\Elements\Doms\Icons\IconLineEndArrow;
use Websyspro\Elements\Doms\Icons\IconLineEndArrowNotch;
use Websyspro\Elements\Doms\Icons\IconLineEndCircle;
use Websyspro\Elements\Doms\Icons\IconLineEndDiamond;
use Websyspro\Elements\Doms\Icons\IconLineEndSquare;
use Websyspro\Elements\Doms\Icons\IconLineStart;
use Websyspro\Elements\Doms\Icons\IconLineStartArrow;
use Websyspro\Elements\Doms\Icons\IconLineStartArrowNotch;
use Websyspro\Elements\Doms\Icons\IconLineStartCircle;
use Websyspro\Elements\Doms\Icons\IconLineStartDiamond;
use Websyspro\Elements\Doms\Icons\IconLineStartSquare;
use Websyspro\Elements\Doms\Icons\IconLineStyle;
use Websyspro\Elements\Doms\Icons\IconLineWeight;
use Websyspro\Elements\Doms\Icons\IconLink;
use Websyspro\Elements\Doms\Icons\IconLinkedCamera;
use Websyspro\Elements\Doms\Icons\IconLinkedServices;
use Websyspro\Elements\Doms\Icons\IconLinkOff;
use Websyspro\Elements\Doms\Icons\IconLiquor;
use Websyspro\Elements\Doms\Icons\IconList;
use Websyspro\Elements\Doms\Icons\IconListAlt;
use Websyspro\Elements\Doms\Icons\IconListAltAdd;
use Websyspro\Elements\Doms\Icons\IconListAltCheck;
use Websyspro\Elements\Doms\Icons\IconLists;
use Websyspro\Elements\Doms\Icons\IconLiveHelp;
use Websyspro\Elements\Doms\Icons\IconLiveTv;
use Websyspro\Elements\Doms\Icons\IconLiving;
use Websyspro\Elements\Doms\Icons\IconLocalActivity;
use Websyspro\Elements\Doms\Icons\IconLocalAtm;
use Websyspro\Elements\Doms\Icons\IconLocalBar;
use Websyspro\Elements\Doms\Icons\IconLocalCafe;
use Websyspro\Elements\Doms\Icons\IconLocalCarWash;
use Websyspro\Elements\Doms\Icons\IconLocalConvenienceStore;
use Websyspro\Elements\Doms\Icons\IconLocalDining;
use Websyspro\Elements\Doms\Icons\IconLocalDrink;
use Websyspro\Elements\Doms\Icons\IconLocalFireDepartment;
use Websyspro\Elements\Doms\Icons\IconLocalFlorist;
use Websyspro\Elements\Doms\Icons\IconLocalGasStation;
use Websyspro\Elements\Doms\Icons\IconLocalHospital;
use Websyspro\Elements\Doms\Icons\IconLocalLaundryService;
use Websyspro\Elements\Doms\Icons\IconLocalLibrary;
use Websyspro\Elements\Doms\Icons\IconLocalMall;
use Websyspro\Elements\Doms\Icons\IconLocalParking;
use Websyspro\Elements\Doms\Icons\IconLocalPharmacy;
use Websyspro\Elements\Doms\Icons\IconLocalPizza;
use Websyspro\Elements\Doms\Icons\IconLocalPolice;
use Websyspro\Elements\Doms\Icons\IconLocalPostOffice;
use Websyspro\Elements\Doms\Icons\IconLocalSee;
use Websyspro\Elements\Doms\Icons\IconLocalShipping;
use Websyspro\Elements\Doms\Icons\IconLocalTaxi;
use Websyspro\Elements\Doms\Icons\IconLocationAway;
use Websyspro\Elements\Doms\Icons\IconLocationChip;
use Websyspro\Elements\Doms\Icons\IconLocationCity;
use Websyspro\Elements\Doms\Icons\IconLocationDisabled;
use Websyspro\Elements\Doms\Icons\IconLocationHome;
use Websyspro\Elements\Doms\Icons\IconLocationOff;
use Websyspro\Elements\Doms\Icons\IconLocationOn;
use Websyspro\Elements\Doms\Icons\IconLocationSearching;
use Websyspro\Elements\Doms\Icons\IconLock;
use Websyspro\Elements\Doms\Icons\IconLockClock;
use Websyspro\Elements\Doms\Icons\IconLockOpen;
use Websyspro\Elements\Doms\Icons\IconLockOpenRight;
use Websyspro\Elements\Doms\Icons\IconLockPerson;
use Websyspro\Elements\Doms\Icons\IconLockReset;
use Websyspro\Elements\Doms\Icons\IconLogin;
use Websyspro\Elements\Doms\Icons\IconLogoDev;
use Websyspro\Elements\Doms\Icons\IconLogout;
use Websyspro\Elements\Doms\Icons\IconLooks;
use Websyspro\Elements\Doms\Icons\IconLooks3;
use Websyspro\Elements\Doms\Icons\IconLooks4;
use Websyspro\Elements\Doms\Icons\IconLooks5;
use Websyspro\Elements\Doms\Icons\IconLooks6;
use Websyspro\Elements\Doms\Icons\IconLooksOne;
use Websyspro\Elements\Doms\Icons\IconLooksTwo;
use Websyspro\Elements\Doms\Icons\IconLoupe;
use Websyspro\Elements\Doms\Icons\IconLowDensity;
use Websyspro\Elements\Doms\Icons\IconLowercase;
use Websyspro\Elements\Doms\Icons\IconLowPriority;
use Websyspro\Elements\Doms\Icons\IconLoyalty;
use Websyspro\Elements\Doms\Icons\IconLteMobiledata;
use Websyspro\Elements\Doms\Icons\IconLteMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconLtePlusMobiledata;
use Websyspro\Elements\Doms\Icons\IconLtePlusMobiledataBadge;
use Websyspro\Elements\Doms\Icons\IconLuggage;
use Websyspro\Elements\Doms\Icons\IconLunchDining;
use Websyspro\Elements\Doms\Icons\IconLyrics;
use Websyspro\Elements\Doms\Icons\IconMacroAuto;
use Websyspro\Elements\Doms\Icons\IconMacroOff;
use Websyspro\Elements\Doms\Icons\IconMagnificationLarge;
use Websyspro\Elements\Doms\Icons\IconMagnificationSmall;
use Websyspro\Elements\Doms\Icons\IconMagnifyDocked;
use Websyspro\Elements\Doms\Icons\IconMagnifyFullscreen;
use Websyspro\Elements\Doms\Icons\IconMail;
use Websyspro\Elements\Doms\Icons\IconMailLock;
use Websyspro\Elements\Doms\Icons\IconMailOff;
use Websyspro\Elements\Doms\Icons\IconMale;
use Websyspro\Elements\Doms\Icons\IconMan;
use Websyspro\Elements\Doms\Icons\IconMan2;
use Websyspro\Elements\Doms\Icons\IconMan3;
use Websyspro\Elements\Doms\Icons\IconMan4;
use Websyspro\Elements\Doms\Icons\IconManageAccounts;
use Websyspro\Elements\Doms\Icons\IconManageHistory;
use Websyspro\Elements\Doms\Icons\IconManageSearch;
use Websyspro\Elements\Doms\Icons\IconManga;
use Websyspro\Elements\Doms\Icons\IconManufacturing;
use Websyspro\Elements\Doms\Icons\IconMap;
use Websyspro\Elements\Doms\Icons\IconMapSearch;
use Websyspro\Elements\Doms\Icons\IconMapsUgc;
use Websyspro\Elements\Doms\Icons\IconMargin;
use Websyspro\Elements\Doms\Icons\IconMarkAsUnread;
use Websyspro\Elements\Doms\Icons\IconMarkChatRead;
use Websyspro\Elements\Doms\Icons\IconMarkChatUnread;
use Websyspro\Elements\Doms\Icons\IconMarkdown;
use Websyspro\Elements\Doms\Icons\IconMarkdownCopy;
use Websyspro\Elements\Doms\Icons\IconMarkdownPaste;
use Websyspro\Elements\Doms\Icons\IconMarkEmailRead;
use Websyspro\Elements\Doms\Icons\IconMarkEmailUnread;
use Websyspro\Elements\Doms\Icons\IconMarkUnreadChatAlt;
use Websyspro\Elements\Doms\Icons\IconMarkunreadMailbox;
use Websyspro\Elements\Doms\Icons\IconMaskedTransitions;
use Websyspro\Elements\Doms\Icons\IconMaskedTransitionsAdd;
use Websyspro\Elements\Doms\Icons\IconMasks;
use Websyspro\Elements\Doms\Icons\IconMatchCase;
use Websyspro\Elements\Doms\Icons\IconMatchCaseOff;
use Websyspro\Elements\Doms\Icons\IconMatchWord;
use Websyspro\Elements\Doms\Icons\IconMatter;
use Websyspro\Elements\Doms\Icons\IconMaximize;
use Websyspro\Elements\Doms\Icons\IconMeasuringTape;
use Websyspro\Elements\Doms\Icons\IconMediaBluetoothOff;
use Websyspro\Elements\Doms\Icons\IconMediaBluetoothOn;
use Websyspro\Elements\Doms\Icons\IconMediaLink;
use Websyspro\Elements\Doms\Icons\IconMediaOutput;
use Websyspro\Elements\Doms\Icons\IconMediaOutputOff;
use Websyspro\Elements\Doms\Icons\IconMediation;
use Websyspro\Elements\Doms\Icons\IconMedicalInformation;
use Websyspro\Elements\Doms\Icons\IconMedicalMask;
use Websyspro\Elements\Doms\Icons\IconMedicalServices;
use Websyspro\Elements\Doms\Icons\IconMedication;
use Websyspro\Elements\Doms\Icons\IconMedicationLiquid;
use Websyspro\Elements\Doms\Icons\IconMeetingRoom;
use Websyspro\Elements\Doms\Icons\IconMemory;
use Websyspro\Elements\Doms\Icons\IconMemoryAlt;
use Websyspro\Elements\Doms\Icons\IconMenstrualHealth;
use Websyspro\Elements\Doms\Icons\IconMenu;
use Websyspro\Elements\Doms\Icons\IconMenuBook;
use Websyspro\Elements\Doms\Icons\IconMenuOpen;
use Websyspro\Elements\Doms\Icons\IconMerge;
use Websyspro\Elements\Doms\Icons\IconMergeType;
use Websyspro\Elements\Doms\Icons\IconMetabolism;
use Websyspro\Elements\Doms\Icons\IconMetro;
use Websyspro\Elements\Doms\Icons\IconMfgNestYaleLock;
use Websyspro\Elements\Doms\Icons\IconMic;
use Websyspro\Elements\Doms\Icons\IconMicAlert;
use Websyspro\Elements\Doms\Icons\IconMicDouble;
use Websyspro\Elements\Doms\Icons\IconMicExternalOff;
use Websyspro\Elements\Doms\Icons\IconMicExternalOn;
use Websyspro\Elements\Doms\Icons\IconMicOff;
use Websyspro\Elements\Doms\Icons\IconMicrobiology;
use Websyspro\Elements\Doms\Icons\IconMicrowave;
use Websyspro\Elements\Doms\Icons\IconMicrowaveGen;
use Websyspro\Elements\Doms\Icons\IconMilitaryTech;
use Websyspro\Elements\Doms\Icons\IconMimo;
use Websyspro\Elements\Doms\Icons\IconMimoDisconnect;
use Websyspro\Elements\Doms\Icons\IconMindfulness;
use Websyspro\Elements\Doms\Icons\IconMinimize;
use Websyspro\Elements\Doms\Icons\IconMinorCrash;
use Websyspro\Elements\Doms\Icons\IconMintmark;
use Websyspro\Elements\Doms\Icons\IconMissedVideoCall;
use Websyspro\Elements\Doms\Icons\IconMissingController;
use Websyspro\Elements\Doms\Icons\IconMist;
use Websyspro\Elements\Doms\Icons\IconMitre;
use Websyspro\Elements\Doms\Icons\IconMixtureMed;
use Websyspro\Elements\Doms\Icons\IconMms;
use Websyspro\Elements\Doms\Icons\IconMobiledataOff;
use Websyspro\Elements\Doms\Icons\IconMobileFriendly;
use Websyspro\Elements\Doms\Icons\IconMobileOff;
use Websyspro\Elements\Doms\Icons\IconMobileScreenShare;
use Websyspro\Elements\Doms\Icons\IconModeComment;
use Websyspro\Elements\Doms\Icons\IconModeCool;
use Websyspro\Elements\Doms\Icons\IconModeCoolOff;
use Websyspro\Elements\Doms\Icons\IconModeDual;
use Websyspro\Elements\Doms\Icons\IconModeFan;
use Websyspro\Elements\Doms\Icons\IconModeFanOff;
use Websyspro\Elements\Doms\Icons\IconModeHeat;
use Websyspro\Elements\Doms\Icons\IconModeHeatCool;
use Websyspro\Elements\Doms\Icons\IconModeHeatOff;
use Websyspro\Elements\Doms\Icons\IconModeling;
use Websyspro\Elements\Doms\Icons\IconModelTraining;
use Websyspro\Elements\Doms\Icons\IconModeNight;
use Websyspro\Elements\Doms\Icons\IconModeOffOn;
use Websyspro\Elements\Doms\Icons\IconModeOfTravel;
use Websyspro\Elements\Doms\Icons\IconModeStandby;
use Websyspro\Elements\Doms\Icons\IconMoney;
use Websyspro\Elements\Doms\Icons\IconMoneyBag;
use Websyspro\Elements\Doms\Icons\IconMoneyOff;
use Websyspro\Elements\Doms\Icons\IconMonitor;
use Websyspro\Elements\Doms\Icons\IconMonitorHeart;
use Websyspro\Elements\Doms\Icons\IconMonitoring;
use Websyspro\Elements\Doms\Icons\IconMonitorWeight;
use Websyspro\Elements\Doms\Icons\IconMonitorWeightGain;
use Websyspro\Elements\Doms\Icons\IconMonitorWeightLoss;
use Websyspro\Elements\Doms\Icons\IconMonochromePhotos;
use Websyspro\Elements\Doms\Icons\IconMonorail;
use Websyspro\Elements\Doms\Icons\IconMood;
use Websyspro\Elements\Doms\Icons\IconMoodBad;
use Websyspro\Elements\Doms\Icons\IconMop;
use Websyspro\Elements\Doms\Icons\IconMoped;
use Websyspro\Elements\Doms\Icons\IconMore;
use Websyspro\Elements\Doms\Icons\IconMoreDown;
use Websyspro\Elements\Doms\Icons\IconMoreHoriz;
use Websyspro\Elements\Doms\Icons\IconMoreTime;
use Websyspro\Elements\Doms\Icons\IconMoreUp;
use Websyspro\Elements\Doms\Icons\IconMoreVert;
use Websyspro\Elements\Doms\Icons\IconMosque;
use Websyspro\Elements\Doms\Icons\IconMotionBlur;
use Websyspro\Elements\Doms\Icons\IconMotionMode;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosAuto;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosOff;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosOn;
use Websyspro\Elements\Doms\Icons\IconMotionPhotosPaused;
use Websyspro\Elements\Doms\Icons\IconMotionPlay;
use Websyspro\Elements\Doms\Icons\IconMotionSensorActive;
use Websyspro\Elements\Doms\Icons\IconMotionSensorAlert;
use Websyspro\Elements\Doms\Icons\IconMotionSensorIdle;
use Websyspro\Elements\Doms\Icons\IconMotionSensorUrgent;
use Websyspro\Elements\Doms\Icons\IconMotorcycle;
use Websyspro\Elements\Doms\Icons\IconMountainFlag;
use Websyspro\Elements\Doms\Icons\IconMouse;
use Websyspro\Elements\Doms\Icons\IconMouseLock;
use Websyspro\Elements\Doms\Icons\IconMouseLockOff;
use Websyspro\Elements\Doms\Icons\IconMove;
use Websyspro\Elements\Doms\Icons\IconMovedLocation;
use Websyspro\Elements\Doms\Icons\IconMoveDown;
use Websyspro\Elements\Doms\Icons\IconMoveGroup;
use Websyspro\Elements\Doms\Icons\IconMoveItem;
use Websyspro\Elements\Doms\Icons\IconMoveLocation;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionDown;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionLeft;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionRight;
use Websyspro\Elements\Doms\Icons\IconMoveSelectionUp;
use Websyspro\Elements\Doms\Icons\IconMoveToInbox;
use Websyspro\Elements\Doms\Icons\IconMoveUp;
use Websyspro\Elements\Doms\Icons\IconMovie;
use Websyspro\Elements\Doms\Icons\IconMovieEdit;
use Websyspro\Elements\Doms\Icons\IconMovieInfo;
use Websyspro\Elements\Doms\Icons\IconMovieOff;
use Websyspro\Elements\Doms\Icons\IconMoving;
use Websyspro\Elements\Doms\Icons\IconMovingBeds;
use Websyspro\Elements\Doms\Icons\IconMovingMinistry;
use Websyspro\Elements\Doms\Icons\IconMp;
use Websyspro\Elements\Doms\Icons\IconMulticooker;
use Websyspro\Elements\Doms\Icons\IconMultilineChart;
use Websyspro\Elements\Doms\Icons\IconMultimodalHandEye;
use Websyspro\Elements\Doms\Icons\IconMultipleAirports;
use Websyspro\Elements\Doms\Icons\IconMultipleStop;
use Websyspro\Elements\Doms\Icons\IconMuseum;
use Websyspro\Elements\Doms\Icons\IconMusicCast;
use Websyspro\Elements\Doms\Icons\IconMusicNote;
use Websyspro\Elements\Doms\Icons\IconMusicNoteAdd;
use Websyspro\Elements\Doms\Icons\IconMusicOff;
use Websyspro\Elements\Doms\Icons\IconMusicVideo;
use Websyspro\Elements\Doms\Icons\IconMyLocation;
use Websyspro\Elements\Doms\Icons\IconMystery;
use Websyspro\Elements\Doms\Icons\IconNat;
use Websyspro\Elements\Doms\Icons\IconNature;
use Websyspro\Elements\Doms\Icons\IconNaturePeople;
use Websyspro\Elements\Doms\Icons\IconNavigation;
use Websyspro\Elements\Doms\Icons\IconNearby;
use Websyspro\Elements\Doms\Icons\IconNearbyError;
use Websyspro\Elements\Doms\Icons\IconNearbyOff;
use Websyspro\Elements\Doms\Icons\IconNearMe;
use Websyspro\Elements\Doms\Icons\IconNearMeDisabled;
use Websyspro\Elements\Doms\Icons\IconNephrology;
use Websyspro\Elements\Doms\Icons\IconNestAudio;
use Websyspro\Elements\Doms\Icons\IconNestCamFloodlight;
use Websyspro\Elements\Doms\Icons\IconNestCamIndoor;
use Websyspro\Elements\Doms\Icons\IconNestCamIq;
use Websyspro\Elements\Doms\Icons\IconNestCamIqOutdoor;
use Websyspro\Elements\Doms\Icons\IconNestCamMagnetMount;
use Websyspro\Elements\Doms\Icons\IconNestCamOutdoor;
use Websyspro\Elements\Doms\Icons\IconNestCamStand;
use Websyspro\Elements\Doms\Icons\IconNestCamWallMount;
use Websyspro\Elements\Doms\Icons\IconNestCamWiredStand;
use Websyspro\Elements\Doms\Icons\IconNestClockFarsightAnalog;
use Websyspro\Elements\Doms\Icons\IconNestClockFarsightDigital;
use Websyspro\Elements\Doms\Icons\IconNestConnect;
use Websyspro\Elements\Doms\Icons\IconNestDetect;
use Websyspro\Elements\Doms\Icons\IconNestDisplay;
use Websyspro\Elements\Doms\Icons\IconNestDisplayMax;
use Websyspro\Elements\Doms\Icons\IconNestDoorbellVisitor;
use Websyspro\Elements\Doms\Icons\IconNestEcoLeaf;
use Websyspro\Elements\Doms\Icons\IconNestFarsightWeather;
use Websyspro\Elements\Doms\Icons\IconNestFoundSavings;
use Websyspro\Elements\Doms\Icons\IconNestGaleWifi;
use Websyspro\Elements\Doms\Icons\IconNestHeatLinkE;
use Websyspro\Elements\Doms\Icons\IconNestHeatLinkGen3;
use Websyspro\Elements\Doms\Icons\IconNestHelloDoorbell;
use Websyspro\Elements\Doms\Icons\IconNestMini;
use Websyspro\Elements\Doms\Icons\IconNestMultiRoom;
use Websyspro\Elements\Doms\Icons\IconNestProtect;
use Websyspro\Elements\Doms\Icons\IconNestRemote;
use Websyspro\Elements\Doms\Icons\IconNestRemoteComfortSensor;
use Websyspro\Elements\Doms\Icons\IconNestSecureAlarm;
use Websyspro\Elements\Doms\Icons\IconNestSunblock;
use Websyspro\Elements\Doms\Icons\IconNestTag;
use Websyspro\Elements\Doms\Icons\IconNestThermostat;
use Websyspro\Elements\Doms\Icons\IconNestThermostatEEu;
use Websyspro\Elements\Doms\Icons\IconNestThermostatGen3;
use Websyspro\Elements\Doms\Icons\IconNestThermostatSensor;
use Websyspro\Elements\Doms\Icons\IconNestThermostatSensorEu;
use Websyspro\Elements\Doms\Icons\IconNestThermostatZirconiumEu;
use Websyspro\Elements\Doms\Icons\IconNestTrueRadiant;
use Websyspro\Elements\Doms\Icons\IconNestWakeOnApproach;
use Websyspro\Elements\Doms\Icons\IconNestWakeOnPress;
use Websyspro\Elements\Doms\Icons\IconNestWifiPoint;
use Websyspro\Elements\Doms\Icons\IconNestWifiPro;
use Websyspro\Elements\Doms\Icons\IconNestWifiPro2;
use Websyspro\Elements\Doms\Icons\IconNestWifiRouter;
use Websyspro\Elements\Doms\Icons\IconNetworkCell;
use Websyspro\Elements\Doms\Icons\IconNetworkCheck;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelligence;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelligenceHistory;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelligenceUpdate;
use Websyspro\Elements\Doms\Icons\IconNetworkIntelNode;
use Websyspro\Elements\Doms\Icons\IconNetworkLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkManage;
use Websyspro\Elements\Doms\Icons\IconNetworkNode;
use Websyspro\Elements\Doms\Icons\IconNetworkPing;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi1Bar;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi1BarLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi2Bar;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi2BarLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi3Bar;
use Websyspro\Elements\Doms\Icons\IconNetworkWifi3BarLocked;
use Websyspro\Elements\Doms\Icons\IconNetworkWifiLocked;
use Websyspro\Elements\Doms\Icons\IconNeurology;
use Websyspro\Elements\Doms\Icons\IconNewLabel;
use Websyspro\Elements\Doms\Icons\IconNewReleases;
use Websyspro\Elements\Doms\Icons\IconNews;
use Websyspro\Elements\Doms\Icons\IconNewsmode;
use Websyspro\Elements\Doms\Icons\IconNewspaper;
use Websyspro\Elements\Doms\Icons\IconNewsstand;
use Websyspro\Elements\Doms\Icons\IconNewWindow;
use Websyspro\Elements\Doms\Icons\IconNextPlan;
use Websyspro\Elements\Doms\Icons\IconNextWeek;
use Websyspro\Elements\Doms\Icons\IconNfc;
use Websyspro\Elements\Doms\Icons\IconNightlife;
use Websyspro\Elements\Doms\Icons\IconNightlight;
use Websyspro\Elements\Doms\Icons\IconNightShelter;
use Websyspro\Elements\Doms\Icons\IconNightSightAuto;
use Websyspro\Elements\Doms\Icons\IconNightSightAutoOff;
use Websyspro\Elements\Doms\Icons\IconNightSightMax;
use Websyspro\Elements\Doms\Icons\IconNightsStay;
use Websyspro\Elements\Doms\Icons\IconNoAccounts;
use Websyspro\Elements\Doms\Icons\IconNoAdultContent;
use Websyspro\Elements\Doms\Icons\IconNoBackpack;
use Websyspro\Elements\Doms\Icons\IconNoCrash;
use Websyspro\Elements\Doms\Icons\IconNoDrinks;
use Websyspro\Elements\Doms\Icons\IconNoEncryption;
use Websyspro\Elements\Doms\Icons\IconNoFlash;
use Websyspro\Elements\Doms\Icons\IconNoFood;
use Websyspro\Elements\Doms\Icons\IconNoiseAware;
use Websyspro\Elements\Doms\Icons\IconNoiseControlOff;
use Websyspro\Elements\Doms\Icons\IconNoiseControlOn;
use Websyspro\Elements\Doms\Icons\IconNoLuggage;
use Websyspro\Elements\Doms\Icons\IconNoMeals;
use Websyspro\Elements\Doms\Icons\IconNoMeetingRoom;
use Websyspro\Elements\Doms\Icons\IconNoPhotography;
use Websyspro\Elements\Doms\Icons\IconNordicWalking;
use Websyspro\Elements\Doms\Icons\IconNorth;
use Websyspro\Elements\Doms\Icons\IconNorthEast;
use Websyspro\Elements\Doms\Icons\IconNorthWest;
use Websyspro\Elements\Doms\Icons\IconNoSim;
use Websyspro\Elements\Doms\Icons\IconNoSound;
use Websyspro\Elements\Doms\Icons\IconNoStroller;
use Websyspro\Elements\Doms\Icons\IconNotAccessible;
use Websyspro\Elements\Doms\Icons\IconNotAccessibleForward;
use Websyspro\Elements\Doms\Icons\IconNoteAdd;
use Websyspro\Elements\Doms\Icons\IconNoteAlt;
use Websyspro\Elements\Doms\Icons\IconNotes;
use Websyspro\Elements\Doms\Icons\IconNoteStack;
use Websyspro\Elements\Doms\Icons\IconNoteStackAdd;
use Websyspro\Elements\Doms\Icons\IconNotificationAdd;
use Websyspro\Elements\Doms\Icons\IconNotificationImportant;
use Websyspro\Elements\Doms\Icons\IconNotificationMultiple;
use Websyspro\Elements\Doms\Icons\IconNotifications;
use Websyspro\Elements\Doms\Icons\IconNotificationsActive;
use Websyspro\Elements\Doms\Icons\IconNotificationsOff;
use Websyspro\Elements\Doms\Icons\IconNotificationsPaused;
use Websyspro\Elements\Doms\Icons\IconNotificationsUnread;
use Websyspro\Elements\Doms\Icons\IconNotListedLocation;
use Websyspro\Elements\Doms\Icons\IconNoTransfer;
use Websyspro\Elements\Doms\Icons\IconNotStarted;
use Websyspro\Elements\Doms\Icons\IconNumbers;
use Websyspro\Elements\Doms\Icons\IconNutrition;
use Websyspro\Elements\Doms\Icons\IconOds;
use Websyspro\Elements\Doms\Icons\IconOdt;
use Websyspro\Elements\Doms\Icons\IconOfflineBolt;
use Websyspro\Elements\Doms\Icons\IconOfflinePin;
use Websyspro\Elements\Doms\Icons\IconOfflinePinOff;
use Websyspro\Elements\Doms\Icons\IconOfflineShare;
use Websyspro\Elements\Doms\Icons\IconOilBarrel;
use Websyspro\Elements\Doms\Icons\IconOncology;
use Websyspro\Elements\Doms\Icons\IconOnDeviceTraining;
use Websyspro\Elements\Doms\Icons\IconOnHubDevice;
use Websyspro\Elements\Doms\Icons\IconOnlinePrediction;
use Websyspro\Elements\Doms\Icons\IconOnsen;
use Websyspro\Elements\Doms\Icons\IconOpacity;
use Websyspro\Elements\Doms\Icons\IconOpenInBrowser;
use Websyspro\Elements\Doms\Icons\IconOpenInFull;
use Websyspro\Elements\Doms\Icons\IconOpenInNew;
use Websyspro\Elements\Doms\Icons\IconOpenInNewDown;
use Websyspro\Elements\Doms\Icons\IconOpenInNewOff;
use Websyspro\Elements\Doms\Icons\IconOpenInPhone;
use Websyspro\Elements\Doms\Icons\IconOpenJam;
use Websyspro\Elements\Doms\Icons\IconOpenRun;
use Websyspro\Elements\Doms\Icons\IconOpenWith;
use Websyspro\Elements\Doms\Icons\IconOphthalmology;
use Websyspro\Elements\Doms\Icons\IconOralDisease;
use Websyspro\Elements\Doms\Icons\IconOrbit;
use Websyspro\Elements\Doms\Icons\IconOrderApprove;
use Websyspro\Elements\Doms\Icons\IconOrderPlay;
use Websyspro\Elements\Doms\Icons\IconOrders;
use Websyspro\Elements\Doms\Icons\IconOrthopedics;
use Websyspro\Elements\Doms\Icons\IconOtherAdmission;
use Websyspro\Elements\Doms\Icons\IconOtherHouses;
use Websyspro\Elements\Doms\Icons\IconOutbound;
use Websyspro\Elements\Doms\Icons\IconOutbox;
use Websyspro\Elements\Doms\Icons\IconOutboxAlt;
use Websyspro\Elements\Doms\Icons\IconOutdoorGarden;
use Websyspro\Elements\Doms\Icons\IconOutdoorGrill;
use Websyspro\Elements\Doms\Icons\IconOutgoingMail;
use Websyspro\Elements\Doms\Icons\IconOutlet;
use Websyspro\Elements\Doms\Icons\IconOutpatient;
use Websyspro\Elements\Doms\Icons\IconOutpatientMed;
use Websyspro\Elements\Doms\Icons\IconOutput;
use Websyspro\Elements\Doms\Icons\IconOutputCircle;
use Websyspro\Elements\Doms\Icons\IconOven;
use Websyspro\Elements\Doms\Icons\IconOvenGen;
use Websyspro\Elements\Doms\Icons\IconOverview;
use Websyspro\Elements\Doms\Icons\IconOverviewKey;
use Websyspro\Elements\Doms\Icons\IconOwl;
use Websyspro\Elements\Doms\Icons\IconOxygenSaturation;
use Websyspro\Elements\Doms\Icons\IconP2p;
use Websyspro\Elements\Doms\Icons\IconPace;
use Websyspro\Elements\Doms\Icons\IconPacemaker;
use Websyspro\Elements\Doms\Icons\IconPackage;
use Websyspro\Elements\Doms\Icons\IconPackage2;
use Websyspro\Elements\Doms\Icons\IconPadding;
use Websyspro\Elements\Doms\Icons\IconPageControl;
use Websyspro\Elements\Doms\Icons\IconPageFooter;
use Websyspro\Elements\Doms\Icons\IconPageHeader;
use Websyspro\Elements\Doms\Icons\IconPageInfo;
use Websyspro\Elements\Doms\Icons\IconPageless;
use Websyspro\Elements\Doms\Icons\IconPages;
use Websyspro\Elements\Doms\Icons\IconPageview;
use Websyspro\Elements\Doms\Icons\IconPaid;
use Websyspro\Elements\Doms\Icons\IconPalette;
use Websyspro\Elements\Doms\Icons\IconPallet;
use Websyspro\Elements\Doms\Icons\IconPanorama;
use Websyspro\Elements\Doms\Icons\IconPanoramaHorizontal;
use Websyspro\Elements\Doms\Icons\IconPanoramaPhotosphere;
use Websyspro\Elements\Doms\Icons\IconPanoramaVertical;
use Websyspro\Elements\Doms\Icons\IconPanoramaWideAngle;
use Websyspro\Elements\Doms\Icons\IconPanTool;
use Websyspro\Elements\Doms\Icons\IconPanToolAlt;
use Websyspro\Elements\Doms\Icons\IconPanZoom;
use Websyspro\Elements\Doms\Icons\IconParagliding;
use Websyspro\Elements\Doms\Icons\IconPark;
use Websyspro\Elements\Doms\Icons\IconPartlyCloudyDay;
use Websyspro\Elements\Doms\Icons\IconPartlyCloudyNight;
use Websyspro\Elements\Doms\Icons\IconPartnerExchange;
use Websyspro\Elements\Doms\Icons\IconPartnerReports;
use Websyspro\Elements\Doms\Icons\IconPartyMode;
use Websyspro\Elements\Doms\Icons\IconPasskey;
use Websyspro\Elements\Doms\Icons\IconPassword;
use Websyspro\Elements\Doms\Icons\IconPassword2;
use Websyspro\Elements\Doms\Icons\IconPassword2Off;
use Websyspro\Elements\Doms\Icons\IconPatientList;
use Websyspro\Elements\Doms\Icons\IconPattern;
use Websyspro\Elements\Doms\Icons\IconPause;
use Websyspro\Elements\Doms\Icons\IconPauseCircle;
use Websyspro\Elements\Doms\Icons\IconPausePresentation;
use Websyspro\Elements\Doms\Icons\IconPayments;
use Websyspro\Elements\Doms\Icons\IconPedalBike;
use Websyspro\Elements\Doms\Icons\IconPediatrics;
use Websyspro\Elements\Doms\Icons\IconPending;
use Websyspro\Elements\Doms\Icons\IconPendingActions;
use Websyspro\Elements\Doms\Icons\IconPenSize1;
use Websyspro\Elements\Doms\Icons\IconPenSize2;
use Websyspro\Elements\Doms\Icons\IconPenSize3;
use Websyspro\Elements\Doms\Icons\IconPenSize4;
use Websyspro\Elements\Doms\Icons\IconPenSize5;
use Websyspro\Elements\Doms\Icons\IconPentagon;
use Websyspro\Elements\Doms\Icons\IconPercent;
use Websyspro\Elements\Doms\Icons\IconPergola;
use Websyspro\Elements\Doms\Icons\IconPermCameraMic;
use Websyspro\Elements\Doms\Icons\IconPermContactCalendar;
use Websyspro\Elements\Doms\Icons\IconPermDataSetting;
use Websyspro\Elements\Doms\Icons\IconPermDeviceInformation;
use Websyspro\Elements\Doms\Icons\IconPermMedia;
use Websyspro\Elements\Doms\Icons\IconPermPhoneMsg;
use Websyspro\Elements\Doms\Icons\IconPermScanWifi;
use Websyspro\Elements\Doms\Icons\IconPerson;
use Websyspro\Elements\Doms\Icons\IconPerson2;
use Websyspro\Elements\Doms\Icons\IconPerson3;
use Websyspro\Elements\Doms\Icons\IconPerson4;
use Websyspro\Elements\Doms\Icons\IconPersonAdd;
use Websyspro\Elements\Doms\Icons\IconPersonAddDisabled;
use Websyspro\Elements\Doms\Icons\IconPersonalBag;
use Websyspro\Elements\Doms\Icons\IconPersonalBagOff;
use Websyspro\Elements\Doms\Icons\IconPersonalBagQuestion;
use Websyspro\Elements\Doms\Icons\IconPersonAlert;
use Websyspro\Elements\Doms\Icons\IconPersonalInjury;
use Websyspro\Elements\Doms\Icons\IconPersonalPlaces;
use Websyspro\Elements\Doms\Icons\IconPersonApron;
use Websyspro\Elements\Doms\Icons\IconPersonBook;
use Websyspro\Elements\Doms\Icons\IconPersonCancel;
use Websyspro\Elements\Doms\Icons\IconPersonCelebrate;
use Websyspro\Elements\Doms\Icons\IconPersonCheck;
use Websyspro\Elements\Doms\Icons\IconPersonEdit;
use Websyspro\Elements\Doms\Icons\IconPersonOff;
use Websyspro\Elements\Doms\Icons\IconPersonPin;
use Websyspro\Elements\Doms\Icons\IconPersonPinCircle;
use Websyspro\Elements\Doms\Icons\IconPersonPlay;
use Websyspro\Elements\Doms\Icons\IconPersonRaisedHand;
use Websyspro\Elements\Doms\Icons\IconPersonRemove;
use Websyspro\Elements\Doms\Icons\IconPersonSearch;
use Websyspro\Elements\Doms\Icons\IconPestControl;
use Websyspro\Elements\Doms\Icons\IconPestControlRodent;
use Websyspro\Elements\Doms\Icons\IconPets;
use Websyspro\Elements\Doms\Icons\IconPetSupplies;
use Websyspro\Elements\Doms\Icons\IconPhishing;
use Websyspro\Elements\Doms\Icons\IconPhoneAndroid;
use Websyspro\Elements\Doms\Icons\IconPhoneBluetoothSpeaker;
use Websyspro\Elements\Doms\Icons\IconPhoneCallback;
use Websyspro\Elements\Doms\Icons\IconPhoneDisabled;
use Websyspro\Elements\Doms\Icons\IconPhoneEnabled;
use Websyspro\Elements\Doms\Icons\IconPhoneForwarded;
use Websyspro\Elements\Doms\Icons\IconPhoneInTalk;
use Websyspro\Elements\Doms\Icons\IconPhoneIphone;
use Websyspro\Elements\Doms\Icons\IconPhonelinkErase;
use Websyspro\Elements\Doms\Icons\IconPhonelinkLock;
use Websyspro\Elements\Doms\Icons\IconPhonelinkOff;
use Websyspro\Elements\Doms\Icons\IconPhonelinkRing;
use Websyspro\Elements\Doms\Icons\IconPhonelinkRingOff;
use Websyspro\Elements\Doms\Icons\IconPhonelinkSetup;
use Websyspro\Elements\Doms\Icons\IconPhoneLocked;
use Websyspro\Elements\Doms\Icons\IconPhoneMissed;
use Websyspro\Elements\Doms\Icons\IconPhonePaused;
use Websyspro\Elements\Doms\Icons\IconPhoto;
use Websyspro\Elements\Doms\Icons\IconPhotoAlbum;
use Websyspro\Elements\Doms\Icons\IconPhotoAutoMerge;
use Websyspro\Elements\Doms\Icons\IconPhotoCamera;
use Websyspro\Elements\Doms\Icons\IconPhotoCameraBack;
use Websyspro\Elements\Doms\Icons\IconPhotoCameraFront;
use Websyspro\Elements\Doms\Icons\IconPhotoFrame;
use Websyspro\Elements\Doms\Icons\IconPhotoLibrary;
use Websyspro\Elements\Doms\Icons\IconPhotoPrints;
use Websyspro\Elements\Doms\Icons\IconPhotoSizeSelectLarge;
use Websyspro\Elements\Doms\Icons\IconPhotoSizeSelectSmall;
use Websyspro\Elements\Doms\Icons\IconPhp;
use Websyspro\Elements\Doms\Icons\IconPhysicalTherapy;
use Websyspro\Elements\Doms\Icons\IconPiano;
use Websyspro\Elements\Doms\Icons\IconPianoOff;
use Websyspro\Elements\Doms\Icons\IconPictureAsPdf;
use Websyspro\Elements\Doms\Icons\IconPictureInPicture;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureAlt;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureCenter;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureLarge;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureMedium;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureMobile;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureOff;
use Websyspro\Elements\Doms\Icons\IconPictureInPictureSmall;
use Websyspro\Elements\Doms\Icons\IconPieChart;
use Websyspro\Elements\Doms\Icons\IconPill;
use Websyspro\Elements\Doms\Icons\IconPillOff;
use Websyspro\Elements\Doms\Icons\IconPin;
use Websyspro\Elements\Doms\Icons\IconPinboard;
use Websyspro\Elements\Doms\Icons\IconPinboardUnread;
use Websyspro\Elements\Doms\Icons\IconPinch;
use Websyspro\Elements\Doms\Icons\IconPinchZoomIn;
use Websyspro\Elements\Doms\Icons\IconPinchZoomOut;
use Websyspro\Elements\Doms\Icons\IconPinDrop;
use Websyspro\Elements\Doms\Icons\IconPinEnd;
use Websyspro\Elements\Doms\Icons\IconPinInvoke;
use Websyspro\Elements\Doms\Icons\IconPip;
use Websyspro\Elements\Doms\Icons\IconPipExit;
use Websyspro\Elements\Doms\Icons\IconPivotTableChart;
use Websyspro\Elements\Doms\Icons\IconPlaceItem;
use Websyspro\Elements\Doms\Icons\IconPlagiarism;
use Websyspro\Elements\Doms\Icons\IconPlanet;
use Websyspro\Elements\Doms\Icons\IconPlannerBannerAdPt;
use Websyspro\Elements\Doms\Icons\IconPlannerReview;
use Websyspro\Elements\Doms\Icons\IconPlayArrow;
use Websyspro\Elements\Doms\Icons\IconPlayCircle;
use Websyspro\Elements\Doms\Icons\IconPlayDisabled;
use Websyspro\Elements\Doms\Icons\IconPlayForWork;
use Websyspro\Elements\Doms\Icons\IconPlayingCards;
use Websyspro\Elements\Doms\Icons\IconPlayLesson;
use Websyspro\Elements\Doms\Icons\IconPlaylistAdd;
use Websyspro\Elements\Doms\Icons\IconPlaylistAddCheck;
use Websyspro\Elements\Doms\Icons\IconPlaylistAddCheckCircle;
use Websyspro\Elements\Doms\Icons\IconPlaylistAddCircle;
use Websyspro\Elements\Doms\Icons\IconPlaylistPlay;
use Websyspro\Elements\Doms\Icons\IconPlaylistRemove;
use Websyspro\Elements\Doms\Icons\IconPlayPause;
use Websyspro\Elements\Doms\Icons\IconPlumbing;
use Websyspro\Elements\Doms\Icons\IconPodcasts;
use Websyspro\Elements\Doms\Icons\IconPodiatry;
use Websyspro\Elements\Doms\Icons\IconPodium;
use Websyspro\Elements\Doms\Icons\IconPointOfSale;
use Websyspro\Elements\Doms\Icons\IconPointScan;
use Websyspro\Elements\Doms\Icons\IconPokerChip;
use Websyspro\Elements\Doms\Icons\IconPolicy;
use Websyspro\Elements\Doms\Icons\IconPolicyAlert;
use Websyspro\Elements\Doms\Icons\IconPolyline;
use Websyspro\Elements\Doms\Icons\IconPolymer;
use Websyspro\Elements\Doms\Icons\IconPool;
use Websyspro\Elements\Doms\Icons\IconPortableWifiOff;
use Websyspro\Elements\Doms\Icons\IconPositionBottomLeft;
use Websyspro\Elements\Doms\Icons\IconPositionBottomRight;
use Websyspro\Elements\Doms\Icons\IconPositionTopRight;
use Websyspro\Elements\Doms\Icons\IconPost;
use Websyspro\Elements\Doms\Icons\IconPostAdd;
use Websyspro\Elements\Doms\Icons\IconPottedPlant;
use Websyspro\Elements\Doms\Icons\IconPower;
use Websyspro\Elements\Doms\Icons\IconPowerInput;
use Websyspro\Elements\Doms\Icons\IconPowerOff;
use Websyspro\Elements\Doms\Icons\IconPowerSettingsCircle;
use Websyspro\Elements\Doms\Icons\IconPowerSettingsNew;
use Websyspro\Elements\Doms\Icons\IconPrayerTimes;
use Websyspro\Elements\Doms\Icons\IconPrecisionManufacturing;
use Websyspro\Elements\Doms\Icons\IconPregnancy;
use Websyspro\Elements\Doms\Icons\IconPregnantWoman;
use Websyspro\Elements\Doms\Icons\IconPreliminary;
use Websyspro\Elements\Doms\Icons\IconPrescriptions;
use Websyspro\Elements\Doms\Icons\IconPresentToAll;
use Websyspro\Elements\Doms\Icons\IconPreview;
use Websyspro\Elements\Doms\Icons\IconPreviewOff;
use Websyspro\Elements\Doms\Icons\IconPriceChange;
use Websyspro\Elements\Doms\Icons\IconPriceCheck;
use Websyspro\Elements\Doms\Icons\IconPrint;
use Websyspro\Elements\Doms\Icons\IconPrintAdd;
use Websyspro\Elements\Doms\Icons\IconPrintConnect;
use Websyspro\Elements\Doms\Icons\IconPrintDisabled;
use Websyspro\Elements\Doms\Icons\IconPrintError;
use Websyspro\Elements\Doms\Icons\IconPrintLock;
use Websyspro\Elements\Doms\Icons\IconPriority;
use Websyspro\Elements\Doms\Icons\IconPriorityHigh;
use Websyspro\Elements\Doms\Icons\IconPrivacy;
use Websyspro\Elements\Doms\Icons\IconPrivacyTip;
use Websyspro\Elements\Doms\Icons\IconPrivateConnectivity;
use Websyspro\Elements\Doms\Icons\IconProblem;
use Websyspro\Elements\Doms\Icons\IconProcedure;
use Websyspro\Elements\Doms\Icons\IconProcessChart;
use Websyspro\Elements\Doms\Icons\IconProductionQuantityLimits;
use Websyspro\Elements\Doms\Icons\IconProductivity;
use Websyspro\Elements\Doms\Icons\IconProgressActivity;
use Websyspro\Elements\Doms\Icons\IconPromptSuggestion;
use Websyspro\Elements\Doms\Icons\IconPropane;
use Websyspro\Elements\Doms\Icons\IconPropaneTank;
use Websyspro\Elements\Doms\Icons\IconPsychiatry;
use Websyspro\Elements\Doms\Icons\IconPsychology;
use Websyspro\Elements\Doms\Icons\IconPsychologyAlt;
use Websyspro\Elements\Doms\Icons\IconPublic;
use Websyspro\Elements\Doms\Icons\IconPublicOff;
use Websyspro\Elements\Doms\Icons\IconPublish;
use Websyspro\Elements\Doms\Icons\IconPublishedWithChanges;
use Websyspro\Elements\Doms\Icons\IconPulmonology;
use Websyspro\Elements\Doms\Icons\IconPulseAlert;
use Websyspro\Elements\Doms\Icons\IconPunchClock;
use Websyspro\Elements\Doms\Icons\IconQrCode;
use Websyspro\Elements\Doms\Icons\IconQrCode2;
use Websyspro\Elements\Doms\Icons\IconQrCode2Add;
use Websyspro\Elements\Doms\Icons\IconQrCodeScanner;
use Websyspro\Elements\Doms\Icons\IconQueryStats;
use Websyspro\Elements\Doms\Icons\IconQuestionExchange;
use Websyspro\Elements\Doms\Icons\IconQuestionMark;
use Websyspro\Elements\Doms\Icons\IconQueueMusic;
use Websyspro\Elements\Doms\Icons\IconQueuePlayNext;
use Websyspro\Elements\Doms\Icons\IconQuickPhrases;
use Websyspro\Elements\Doms\Icons\IconQuickReference;
use Websyspro\Elements\Doms\Icons\IconQuickReferenceAll;
use Websyspro\Elements\Doms\Icons\IconQuickReorder;
use Websyspro\Elements\Doms\Icons\IconQuickreply;
use Websyspro\Elements\Doms\Icons\IconQuiz;
use Websyspro\Elements\Doms\Icons\IconRadar;
use Websyspro\Elements\Doms\Icons\IconRadio;
use Websyspro\Elements\Doms\Icons\IconRadioButtonChecked;
use Websyspro\Elements\Doms\Icons\IconRadioButtonPartial;
use Websyspro\Elements\Doms\Icons\IconRadioButtonUnchecked;
use Websyspro\Elements\Doms\Icons\IconRadiology;
use Websyspro\Elements\Doms\Icons\IconRailwayAlert;
use Websyspro\Elements\Doms\Icons\IconRailwayAlert2;
use Websyspro\Elements\Doms\Icons\IconRainy;
use Websyspro\Elements\Doms\Icons\IconRainyHeavy;
use Websyspro\Elements\Doms\Icons\IconRainyLight;
use Websyspro\Elements\Doms\Icons\IconRainySnow;
use Websyspro\Elements\Doms\Icons\IconRamenDining;
use Websyspro\Elements\Doms\Icons\IconRampLeft;
use Websyspro\Elements\Doms\Icons\IconRampRight;
use Websyspro\Elements\Doms\Icons\IconRangeHood;
use Websyspro\Elements\Doms\Icons\IconRateReview;
use Websyspro\Elements\Doms\Icons\IconRaven;
use Websyspro\Elements\Doms\Icons\IconRawOff;
use Websyspro\Elements\Doms\Icons\IconRawOn;
use Websyspro\Elements\Doms\Icons\IconReadinessScore;
use Websyspro\Elements\Doms\Icons\IconReadMore;
use Websyspro\Elements\Doms\Icons\IconRealEstateAgent;
use Websyspro\Elements\Doms\Icons\IconRearCamera;
use Websyspro\Elements\Doms\Icons\IconRebase;
use Websyspro\Elements\Doms\Icons\IconRebaseEdit;
use Websyspro\Elements\Doms\Icons\IconReceipt;
use Websyspro\Elements\Doms\Icons\IconReceiptLong;
use Websyspro\Elements\Doms\Icons\IconReceiptLongOff;
use Websyspro\Elements\Doms\Icons\IconRecentActors;
use Websyspro\Elements\Doms\Icons\IconRecenter;
use Websyspro\Elements\Doms\Icons\IconRecentPatient;
use Websyspro\Elements\Doms\Icons\IconRecommend;
use Websyspro\Elements\Doms\Icons\IconRecordVoiceOver;
use Websyspro\Elements\Doms\Icons\IconRectangle;
use Websyspro\Elements\Doms\Icons\IconRecycling;
use Websyspro\Elements\Doms\Icons\IconRedeem;
use Websyspro\Elements\Doms\Icons\IconRedo;
use Websyspro\Elements\Doms\Icons\IconReduceCapacity;
use Websyspro\Elements\Doms\Icons\IconRefresh;
use Websyspro\Elements\Doms\Icons\IconRegularExpression;
use Websyspro\Elements\Doms\Icons\IconRelax;
use Websyspro\Elements\Doms\Icons\IconReleaseAlert;
use Websyspro\Elements\Doms\Icons\IconRememberMe;
use Websyspro\Elements\Doms\Icons\IconReminder;
use Websyspro\Elements\Doms\Icons\IconRemoteGen;
use Websyspro\Elements\Doms\Icons\IconRemove;
use Websyspro\Elements\Doms\Icons\IconRemoveDone;
use Websyspro\Elements\Doms\Icons\IconRemoveFromQueue;
use Websyspro\Elements\Doms\Icons\IconRemoveModerator;
use Websyspro\Elements\Doms\Icons\IconRemoveRoad;
use Websyspro\Elements\Doms\Icons\IconRemoveSelection;
use Websyspro\Elements\Doms\Icons\IconRemoveShoppingCart;
use Websyspro\Elements\Doms\Icons\IconReopenWindow;
use Websyspro\Elements\Doms\Icons\IconReorder;
use Websyspro\Elements\Doms\Icons\IconRepartition;
use Websyspro\Elements\Doms\Icons\IconRepeat;
use Websyspro\Elements\Doms\Icons\IconRepeatOn;
use Websyspro\Elements\Doms\Icons\IconRepeatOne;
use Websyspro\Elements\Doms\Icons\IconRepeatOneOn;
use Websyspro\Elements\Doms\Icons\IconReplaceAudio;
use Websyspro\Elements\Doms\Icons\IconReplaceImage;
use Websyspro\Elements\Doms\Icons\IconReplaceVideo;
use Websyspro\Elements\Doms\Icons\IconReplay;
use Websyspro\Elements\Doms\Icons\IconReplay10;
use Websyspro\Elements\Doms\Icons\IconReplay30;
use Websyspro\Elements\Doms\Icons\IconReplay5;
use Websyspro\Elements\Doms\Icons\IconReply;
use Websyspro\Elements\Doms\Icons\IconReplyAll;
use Websyspro\Elements\Doms\Icons\IconReport;
use Websyspro\Elements\Doms\Icons\IconReportOff;
use Websyspro\Elements\Doms\Icons\IconRequestPage;
use Websyspro\Elements\Doms\Icons\IconRequestQuote;
use Websyspro\Elements\Doms\Icons\IconResetBrightness;
use Websyspro\Elements\Doms\Icons\IconResetFocus;
use Websyspro\Elements\Doms\Icons\IconResetImage;
use Websyspro\Elements\Doms\Icons\IconResetIso;
use Websyspro\Elements\Doms\Icons\IconResetSettings;
use Websyspro\Elements\Doms\Icons\IconResetShadow;
use Websyspro\Elements\Doms\Icons\IconResetShutterSpeed;
use Websyspro\Elements\Doms\Icons\IconResetTv;
use Websyspro\Elements\Doms\Icons\IconResetWhiteBalance;
use Websyspro\Elements\Doms\Icons\IconResetWrench;
use Websyspro\Elements\Doms\Icons\IconResize;
use Websyspro\Elements\Doms\Icons\IconRespiratoryRate;
use Websyspro\Elements\Doms\Icons\IconResponsiveLayout;
use Websyspro\Elements\Doms\Icons\IconRestartAlt;
use Websyspro\Elements\Doms\Icons\IconRestaurant;
use Websyspro\Elements\Doms\Icons\IconRestoreFromTrash;
use Websyspro\Elements\Doms\Icons\IconRestorePage;
use Websyspro\Elements\Doms\Icons\IconResume;
use Websyspro\Elements\Doms\Icons\IconReviews;
use Websyspro\Elements\Doms\Icons\IconRewardedAds;
use Websyspro\Elements\Doms\Icons\IconRheumatology;
use Websyspro\Elements\Doms\Icons\IconRibCage;
use Websyspro\Elements\Doms\Icons\IconRiceBowl;
use Websyspro\Elements\Doms\Icons\IconRightClick;
use Websyspro\Elements\Doms\Icons\IconRightPanelClose;
use Websyspro\Elements\Doms\Icons\IconRightPanelOpen;
use Websyspro\Elements\Doms\Icons\IconRingVolume;
use Websyspro\Elements\Doms\Icons\IconRipples;
use Websyspro\Elements\Doms\Icons\IconRMobiledata;
use Websyspro\Elements\Doms\Icons\IconRoad;
use Websyspro\Elements\Doms\Icons\IconRobot;
use Websyspro\Elements\Doms\Icons\IconRobot2;
use Websyspro\Elements\Doms\Icons\IconRocket;
use Websyspro\Elements\Doms\Icons\IconRocketLaunch;
use Websyspro\Elements\Doms\Icons\IconRollerShades;
use Websyspro\Elements\Doms\Icons\IconRollerShadesClosed;
use Websyspro\Elements\Doms\Icons\IconRollerSkating;
use Websyspro\Elements\Doms\Icons\IconRoofing;
use Websyspro\Elements\Doms\Icons\IconRoomPreferences;
use Websyspro\Elements\Doms\Icons\IconRoomService;
use Websyspro\Elements\Doms\Icons\IconRotate90DegreesCcw;
use Websyspro\Elements\Doms\Icons\IconRotate90DegreesCw;
use Websyspro\Elements\Doms\Icons\IconRotateAuto;
use Websyspro\Elements\Doms\Icons\IconRotateLeft;
use Websyspro\Elements\Doms\Icons\IconRotateRight;
use Websyspro\Elements\Doms\Icons\IconRoundaboutLeft;
use Websyspro\Elements\Doms\Icons\IconRoundaboutRight;
use Websyspro\Elements\Doms\Icons\IconRoundedCorner;
use Websyspro\Elements\Doms\Icons\IconRoute;
use Websyspro\Elements\Doms\Icons\IconRouter;
use Websyspro\Elements\Doms\Icons\IconRoutine;
use Websyspro\Elements\Doms\Icons\IconRowing;
use Websyspro\Elements\Doms\Icons\IconRssFeed;
use Websyspro\Elements\Doms\Icons\IconRsvp;
use Websyspro\Elements\Doms\Icons\IconRtt;
use Websyspro\Elements\Doms\Icons\IconRubric;
use Websyspro\Elements\Doms\Icons\IconRule;
use Websyspro\Elements\Doms\Icons\IconRuleFolder;
use Websyspro\Elements\Doms\Icons\IconRuleSettings;
use Websyspro\Elements\Doms\Icons\IconRunCircle;
use Websyspro\Elements\Doms\Icons\IconRunningWithErrors;
use Websyspro\Elements\Doms\Icons\IconRvHookup;
use Websyspro\Elements\Doms\Icons\IconSafetyCheck;
use Websyspro\Elements\Doms\Icons\IconSafetyCheckOff;
use Websyspro\Elements\Doms\Icons\IconSafetyDivider;
use Websyspro\Elements\Doms\Icons\IconSailing;
use Websyspro\Elements\Doms\Icons\IconSalinity;
use Websyspro\Elements\Doms\Icons\IconSanitizer;
use Websyspro\Elements\Doms\Icons\IconSatellite;
use Websyspro\Elements\Doms\Icons\IconSatelliteAlt;
use Websyspro\Elements\Doms\Icons\IconSauna;
use Websyspro\Elements\Doms\Icons\IconSave;
use Websyspro\Elements\Doms\Icons\IconSaveAs;
use Websyspro\Elements\Doms\Icons\IconSaveClock;
use Websyspro\Elements\Doms\Icons\IconSavedSearch;
use Websyspro\Elements\Doms\Icons\IconSavings;
use Websyspro\Elements\Doms\Icons\IconScale;
use Websyspro\Elements\Doms\Icons\IconScan;
use Websyspro\Elements\Doms\Icons\IconScanDelete;
use Websyspro\Elements\Doms\Icons\IconScanner;
use Websyspro\Elements\Doms\Icons\IconScatterPlot;
use Websyspro\Elements\Doms\Icons\IconScene;
use Websyspro\Elements\Doms\Icons\IconSchedule;
use Websyspro\Elements\Doms\Icons\IconScheduleSend;
use Websyspro\Elements\Doms\Icons\IconSchema;
use Websyspro\Elements\Doms\Icons\IconSchool;
use Websyspro\Elements\Doms\Icons\IconScience;
use Websyspro\Elements\Doms\Icons\IconScienceOff;
use Websyspro\Elements\Doms\Icons\IconScooter;
use Websyspro\Elements\Doms\Icons\IconScore;
use Websyspro\Elements\Doms\Icons\IconScoreboard;
use Websyspro\Elements\Doms\Icons\IconScreenLockLandscape;
use Websyspro\Elements\Doms\Icons\IconScreenLockPortrait;
use Websyspro\Elements\Doms\Icons\IconScreenLockRotation;
use Websyspro\Elements\Doms\Icons\IconScreenRecord;
use Websyspro\Elements\Doms\Icons\IconScreenRotation;
use Websyspro\Elements\Doms\Icons\IconScreenRotationAlt;
use Websyspro\Elements\Doms\Icons\IconScreenRotationUp;
use Websyspro\Elements\Doms\Icons\IconScreenSearchDesktop;
use Websyspro\Elements\Doms\Icons\IconScreenShare;
use Websyspro\Elements\Doms\Icons\IconScreenshot;
use Websyspro\Elements\Doms\Icons\IconScreenshotFrame;
use Websyspro\Elements\Doms\Icons\IconScreenshotFrame2;
use Websyspro\Elements\Doms\Icons\IconScreenshotKeyboard;
use Websyspro\Elements\Doms\Icons\IconScreenshotMonitor;
use Websyspro\Elements\Doms\Icons\IconScreenshotRegion;
use Websyspro\Elements\Doms\Icons\IconScreenshotTablet;
use Websyspro\Elements\Doms\Icons\IconScript;
use Websyspro\Elements\Doms\Icons\IconScrollableHeader;
use Websyspro\Elements\Doms\Icons\IconScubaDiving;
use Websyspro\Elements\Doms\Icons\IconSd;
use Websyspro\Elements\Doms\Icons\IconSdCard;
use Websyspro\Elements\Doms\Icons\IconSdCardAlert;
use Websyspro\Elements\Doms\Icons\IconSdk;
use Websyspro\Elements\Doms\Icons\IconSearch;
use Websyspro\Elements\Doms\Icons\IconSearchActivity;
use Websyspro\Elements\Doms\Icons\IconSearchCheck;
use Websyspro\Elements\Doms\Icons\IconSearchCheck2;
use Websyspro\Elements\Doms\Icons\IconSearchHandsFree;
use Websyspro\Elements\Doms\Icons\IconSearchInsights;
use Websyspro\Elements\Doms\Icons\IconSearchOff;
use Websyspro\Elements\Doms\Icons\IconSecurity;
use Websyspro\Elements\Doms\Icons\IconSecurityKey;
use Websyspro\Elements\Doms\Icons\IconSecurityUpdateGood;
use Websyspro\Elements\Doms\Icons\IconSecurityUpdateWarning;
use Websyspro\Elements\Doms\Icons\IconSegment;
use Websyspro\Elements\Doms\Icons\IconSelect;
use Websyspro\Elements\Doms\Icons\IconSelectAll;
use Websyspro\Elements\Doms\Icons\IconSelectCheckBox;
use Websyspro\Elements\Doms\Icons\IconSelectToSpeak;
use Websyspro\Elements\Doms\Icons\IconSelectWindow;
use Websyspro\Elements\Doms\Icons\IconSelectWindow2;
use Websyspro\Elements\Doms\Icons\IconSelectWindowOff;
use Websyspro\Elements\Doms\Icons\IconSelfCare;
use Websyspro\Elements\Doms\Icons\IconSelfImprovement;
use Websyspro\Elements\Doms\Icons\IconSell;
use Websyspro\Elements\Doms\Icons\IconSend;
use Websyspro\Elements\Doms\Icons\IconSendAndArchive;
use Websyspro\Elements\Doms\Icons\IconSendMoney;
use Websyspro\Elements\Doms\Icons\IconSendTimeExtension;
use Websyspro\Elements\Doms\Icons\IconSendToMobile;
use Websyspro\Elements\Doms\Icons\IconSensorDoor;
use Websyspro\Elements\Doms\Icons\IconSensorOccupied;
use Websyspro\Elements\Doms\Icons\IconSensors;
use Websyspro\Elements\Doms\Icons\IconSensorsKrx;
use Websyspro\Elements\Doms\Icons\IconSensorsKrxOff;
use Websyspro\Elements\Doms\Icons\IconSensorsOff;
use Websyspro\Elements\Doms\Icons\IconSensorWindow;
use Websyspro\Elements\Doms\Icons\IconSentimentCalm;
use Websyspro\Elements\Doms\Icons\IconSentimentContent;
use Websyspro\Elements\Doms\Icons\IconSentimentDissatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentExcited;
use Websyspro\Elements\Doms\Icons\IconSentimentExtremelyDissatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentFrustrated;
use Websyspro\Elements\Doms\Icons\IconSentimentNeutral;
use Websyspro\Elements\Doms\Icons\IconSentimentSad;
use Websyspro\Elements\Doms\Icons\IconSentimentSatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentStressed;
use Websyspro\Elements\Doms\Icons\IconSentimentVeryDissatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentVerySatisfied;
use Websyspro\Elements\Doms\Icons\IconSentimentWorried;
use Websyspro\Elements\Doms\Icons\IconSerif;
use Websyspro\Elements\Doms\Icons\IconServerPerson;
use Websyspro\Elements\Doms\Icons\IconServiceToolbox;
use Websyspro\Elements\Doms\Icons\IconSetMeal;
use Websyspro\Elements\Doms\Icons\IconSettings;
use Websyspro\Elements\Doms\Icons\IconSettingsAccessibility;
use Websyspro\Elements\Doms\Icons\IconSettingsAccountBox;
use Websyspro\Elements\Doms\Icons\IconSettingsAlert;
use Websyspro\Elements\Doms\Icons\IconSettingsApplications;
use Websyspro\Elements\Doms\Icons\IconSettingsBackupRestore;
use Websyspro\Elements\Doms\Icons\IconSettingsBluetooth;
use Websyspro\Elements\Doms\Icons\IconSettingsBrightness;
use Websyspro\Elements\Doms\Icons\IconSettingsBRoll;
use Websyspro\Elements\Doms\Icons\IconSettingsCell;
use Websyspro\Elements\Doms\Icons\IconSettingsCinematicBlur;
use Websyspro\Elements\Doms\Icons\IconSettingsEthernet;
use Websyspro\Elements\Doms\Icons\IconSettingsHeart;
use Websyspro\Elements\Doms\Icons\IconSettingsInputAntenna;
use Websyspro\Elements\Doms\Icons\IconSettingsInputComponent;
use Websyspro\Elements\Doms\Icons\IconSettingsInputHdmi;
use Websyspro\Elements\Doms\Icons\IconSettingsInputSvideo;
use Websyspro\Elements\Doms\Icons\IconSettingsMotionMode;
use Websyspro\Elements\Doms\Icons\IconSettingsNightSight;
use Websyspro\Elements\Doms\Icons\IconSettingsOverscan;
use Websyspro\Elements\Doms\Icons\IconSettingsPanorama;
use Websyspro\Elements\Doms\Icons\IconSettingsPhone;
use Websyspro\Elements\Doms\Icons\IconSettingsPhotoCamera;
use Websyspro\Elements\Doms\Icons\IconSettingsPower;
use Websyspro\Elements\Doms\Icons\IconSettingsRemote;
use Websyspro\Elements\Doms\Icons\IconSettingsSlowMotion;
use Websyspro\Elements\Doms\Icons\IconSettingsSystemDaydream;
use Websyspro\Elements\Doms\Icons\IconSettingsTimelapse;
use Websyspro\Elements\Doms\Icons\IconSettingsVideoCamera;
use Websyspro\Elements\Doms\Icons\IconSettingsVoice;
use Websyspro\Elements\Doms\Icons\IconSettopComponent;
use Websyspro\Elements\Doms\Icons\IconSevereCold;
use Websyspro\Elements\Doms\Icons\IconShadow;
use Websyspro\Elements\Doms\Icons\IconShadowAdd;
use Websyspro\Elements\Doms\Icons\IconShadowMinus;
use Websyspro\Elements\Doms\Icons\IconShapeLine;
use Websyspro\Elements\Doms\Icons\IconShapes;
use Websyspro\Elements\Doms\Icons\IconShare;
use Websyspro\Elements\Doms\Icons\IconShareEta;
use Websyspro\Elements\Doms\Icons\IconShareLocation;
use Websyspro\Elements\Doms\Icons\IconShareOff;
use Websyspro\Elements\Doms\Icons\IconShareReviews;
use Websyspro\Elements\Doms\Icons\IconShareWindows;
use Websyspro\Elements\Doms\Icons\IconSheetsRtl;
use Websyspro\Elements\Doms\Icons\IconShelfAutoHide;
use Websyspro\Elements\Doms\Icons\IconShelfPosition;
use Websyspro\Elements\Doms\Icons\IconShelves;
use Websyspro\Elements\Doms\Icons\IconShield;
use Websyspro\Elements\Doms\Icons\IconShieldLock;
use Websyspro\Elements\Doms\Icons\IconShieldLocked;
use Websyspro\Elements\Doms\Icons\IconShieldMoon;
use Websyspro\Elements\Doms\Icons\IconShieldPerson;
use Websyspro\Elements\Doms\Icons\IconShieldQuestion;
use Websyspro\Elements\Doms\Icons\IconShieldWithHeart;
use Websyspro\Elements\Doms\Icons\IconShieldWithHouse;
use Websyspro\Elements\Doms\Icons\IconShift;
use Websyspro\Elements\Doms\Icons\IconShiftLock;
use Websyspro\Elements\Doms\Icons\IconShiftLockOff;
use Websyspro\Elements\Doms\Icons\IconShop;
use Websyspro\Elements\Doms\Icons\IconShoppingBag;
use Websyspro\Elements\Doms\Icons\IconShoppingBagSpeed;
use Websyspro\Elements\Doms\Icons\IconShoppingBasket;
use Websyspro\Elements\Doms\Icons\IconShoppingCart;
use Websyspro\Elements\Doms\Icons\IconShoppingCartCheckout;
use Websyspro\Elements\Doms\Icons\IconShoppingCartOff;
use Websyspro\Elements\Doms\Icons\IconShoppingmode;
use Websyspro\Elements\Doms\Icons\IconShopTwo;
use Websyspro\Elements\Doms\Icons\IconShortStay;
use Websyspro\Elements\Doms\Icons\IconShortText;
use Websyspro\Elements\Doms\Icons\IconShowChart;
use Websyspro\Elements\Doms\Icons\IconShower;
use Websyspro\Elements\Doms\Icons\IconShuffle;
use Websyspro\Elements\Doms\Icons\IconShuffleOn;
use Websyspro\Elements\Doms\Icons\IconShutterSpeed;
use Websyspro\Elements\Doms\Icons\IconShutterSpeedAdd;
use Websyspro\Elements\Doms\Icons\IconShutterSpeedMinus;
use Websyspro\Elements\Doms\Icons\IconSick;
use Websyspro\Elements\Doms\Icons\IconSideNavigation;
use Websyspro\Elements\Doms\Icons\IconSignalCellular0Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular1Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular2Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular3Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellular4Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAdd;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAlt;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAlt1Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularAlt2Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularConnectedNoInternet0Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularConnectedNoInternet4Bar;
use Websyspro\Elements\Doms\Icons\IconSignalCellularNodata;
use Websyspro\Elements\Doms\Icons\IconSignalCellularNull;
use Websyspro\Elements\Doms\Icons\IconSignalCellularOff;
use Websyspro\Elements\Doms\Icons\IconSignalCellularPause;
use Websyspro\Elements\Doms\Icons\IconSignalDisconnected;
use Websyspro\Elements\Doms\Icons\IconSignalWifi0Bar;
use Websyspro\Elements\Doms\Icons\IconSignalWifi4Bar;
use Websyspro\Elements\Doms\Icons\IconSignalWifiBad;
use Websyspro\Elements\Doms\Icons\IconSignalWifiOff;
use Websyspro\Elements\Doms\Icons\IconSignalWifiStatusbarNotConnected;
use Websyspro\Elements\Doms\Icons\IconSignalWifiStatusbarNull;
use Websyspro\Elements\Doms\Icons\IconSignature;
use Websyspro\Elements\Doms\Icons\IconSignLanguage;
use Websyspro\Elements\Doms\Icons\IconSignpost;
use Websyspro\Elements\Doms\Icons\IconSimCard;
use Websyspro\Elements\Doms\Icons\IconSimCardDownload;
use Websyspro\Elements\Doms\Icons\IconSimulation;
use Websyspro\Elements\Doms\Icons\IconSingleBed;
use Websyspro\Elements\Doms\Icons\IconSip;
use Websyspro\Elements\Doms\Icons\IconSiren;
use Websyspro\Elements\Doms\Icons\IconSirenCheck;
use Websyspro\Elements\Doms\Icons\IconSirenOpen;
use Websyspro\Elements\Doms\Icons\IconSirenQuestion;
use Websyspro\Elements\Doms\Icons\IconSkateboarding;
use Websyspro\Elements\Doms\Icons\IconSkeleton;
use Websyspro\Elements\Doms\Icons\IconSkillet;
use Websyspro\Elements\Doms\Icons\IconSkilletCooktop;
use Websyspro\Elements\Doms\Icons\IconSkipNext;
use Websyspro\Elements\Doms\Icons\IconSkipPrevious;
use Websyspro\Elements\Doms\Icons\IconSkull;
use Websyspro\Elements\Doms\Icons\IconSkullList;
use Websyspro\Elements\Doms\Icons\IconSlabSerif;
use Websyspro\Elements\Doms\Icons\IconSledding;
use Websyspro\Elements\Doms\Icons\IconSleepScore;
use Websyspro\Elements\Doms\Icons\IconSlideLibrary;
use Websyspro\Elements\Doms\Icons\IconSliders;
use Websyspro\Elements\Doms\Icons\IconSlideshow;
use Websyspro\Elements\Doms\Icons\IconSlowMotionVideo;
use Websyspro\Elements\Doms\Icons\IconSmartCardReader;
use Websyspro\Elements\Doms\Icons\IconSmartCardReaderOff;
use Websyspro\Elements\Doms\Icons\IconSmartDisplay;
use Websyspro\Elements\Doms\Icons\IconSmartOutlet;
use Websyspro\Elements\Doms\Icons\IconSmartphone;
use Websyspro\Elements\Doms\Icons\IconSmartphoneCamera;
use Websyspro\Elements\Doms\Icons\IconSmartScreen;
use Websyspro\Elements\Doms\Icons\IconSmartToy;
use Websyspro\Elements\Doms\Icons\IconSmbShare;
use Websyspro\Elements\Doms\Icons\IconSmokeFree;
use Websyspro\Elements\Doms\Icons\IconSmokingRooms;
use Websyspro\Elements\Doms\Icons\IconSms;
use Websyspro\Elements\Doms\Icons\IconSnippetFolder;
use Websyspro\Elements\Doms\Icons\IconSnooze;
use Websyspro\Elements\Doms\Icons\IconSnowboarding;
use Websyspro\Elements\Doms\Icons\IconSnowing;
use Websyspro\Elements\Doms\Icons\IconSnowingHeavy;
use Websyspro\Elements\Doms\Icons\IconSnowmobile;
use Websyspro\Elements\Doms\Icons\IconSnowshoeing;
use Websyspro\Elements\Doms\Icons\IconSoap;
use Websyspro\Elements\Doms\Icons\IconSocialDistance;
use Websyspro\Elements\Doms\Icons\IconSocialLeaderboard;
use Websyspro\Elements\Doms\Icons\IconSolarPower;
use Websyspro\Elements\Doms\Icons\IconSort;
use Websyspro\Elements\Doms\Icons\IconSortByAlpha;
use Websyspro\Elements\Doms\Icons\IconSos;
use Websyspro\Elements\Doms\Icons\IconSoundDetectionDogBarking;
use Websyspro\Elements\Doms\Icons\IconSoundDetectionGlassBreak;
use Websyspro\Elements\Doms\Icons\IconSoundDetectionLoudSound;
use Websyspro\Elements\Doms\Icons\IconSoundSampler;
use Websyspro\Elements\Doms\Icons\IconSoupKitchen;
use Websyspro\Elements\Doms\Icons\IconSourceEnvironment;
use Websyspro\Elements\Doms\Icons\IconSourceNotes;
use Websyspro\Elements\Doms\Icons\IconSouth;
use Websyspro\Elements\Doms\Icons\IconSouthAmerica;
use Websyspro\Elements\Doms\Icons\IconSouthEast;
use Websyspro\Elements\Doms\Icons\IconSouthWest;
use Websyspro\Elements\Doms\Icons\IconSpa;
use Websyspro\Elements\Doms\Icons\IconSpaceBar;
use Websyspro\Elements\Doms\Icons\IconSpaceDashboard;
use Websyspro\Elements\Doms\Icons\IconSpatialAudio;
use Websyspro\Elements\Doms\Icons\IconSpatialAudioOff;
use Websyspro\Elements\Doms\Icons\IconSpatialSpeaker;
use Websyspro\Elements\Doms\Icons\IconSpatialTracking;
use Websyspro\Elements\Doms\Icons\IconSpeaker;
use Websyspro\Elements\Doms\Icons\IconSpeakerGroup;
use Websyspro\Elements\Doms\Icons\IconSpeakerNotes;
use Websyspro\Elements\Doms\Icons\IconSpeakerNotesOff;
use Websyspro\Elements\Doms\Icons\IconSpeakerPhone;
use Websyspro\Elements\Doms\Icons\IconSpecialCharacter;
use Websyspro\Elements\Doms\Icons\IconSpecificGravity;
use Websyspro\Elements\Doms\Icons\IconSpeechToText;
use Websyspro\Elements\Doms\Icons\IconSpeed;
use Websyspro\Elements\Doms\Icons\IconSpeed025;
use Websyspro\Elements\Doms\Icons\IconSpeed02x;
use Websyspro\Elements\Doms\Icons\IconSpeed05;
use Websyspro\Elements\Doms\Icons\IconSpeed05x;
use Websyspro\Elements\Doms\Icons\IconSpeed075;
use Websyspro\Elements\Doms\Icons\IconSpeed07x;
use Websyspro\Elements\Doms\Icons\IconSpeed12;
use Websyspro\Elements\Doms\Icons\IconSpeed125;
use Websyspro\Elements\Doms\Icons\IconSpeed12x;
use Websyspro\Elements\Doms\Icons\IconSpeed15;
use Websyspro\Elements\Doms\Icons\IconSpeed15x;
use Websyspro\Elements\Doms\Icons\IconSpeed175;
use Websyspro\Elements\Doms\Icons\IconSpeed17x;
use Websyspro\Elements\Doms\Icons\IconSpeed2x;
use Websyspro\Elements\Doms\Icons\IconSpeedCamera;
use Websyspro\Elements\Doms\Icons\IconSpellcheck;
use Websyspro\Elements\Doms\Icons\IconSplitScene;
use Websyspro\Elements\Doms\Icons\IconSplitscreen;
use Websyspro\Elements\Doms\Icons\IconSplitscreenAdd;
use Websyspro\Elements\Doms\Icons\IconSplitscreenBottom;
use Websyspro\Elements\Doms\Icons\IconSplitscreenLandscape;
use Websyspro\Elements\Doms\Icons\IconSplitscreenLeft;
use Websyspro\Elements\Doms\Icons\IconSplitscreenPortrait;
use Websyspro\Elements\Doms\Icons\IconSplitscreenRight;
use Websyspro\Elements\Doms\Icons\IconSplitscreenTop;
use Websyspro\Elements\Doms\Icons\IconSplitscreenVerticalAdd;
use Websyspro\Elements\Doms\Icons\IconSpo2;
use Websyspro\Elements\Doms\Icons\IconSpoke;
use Websyspro\Elements\Doms\Icons\IconSports;
use Websyspro\Elements\Doms\Icons\IconSportsAndOutdoors;
use Websyspro\Elements\Doms\Icons\IconSportsBar;
use Websyspro\Elements\Doms\Icons\IconSportsBaseball;
use Websyspro\Elements\Doms\Icons\IconSportsBasketball;
use Websyspro\Elements\Doms\Icons\IconSportsCricket;
use Websyspro\Elements\Doms\Icons\IconSportsEsports;
use Websyspro\Elements\Doms\Icons\IconSportsFootball;
use Websyspro\Elements\Doms\Icons\IconSportsGolf;
use Websyspro\Elements\Doms\Icons\IconSportsGymnastics;
use Websyspro\Elements\Doms\Icons\IconSportsHandball;
use Websyspro\Elements\Doms\Icons\IconSportsHockey;
use Websyspro\Elements\Doms\Icons\IconSportsKabaddi;
use Websyspro\Elements\Doms\Icons\IconSportsMartialArts;
use Websyspro\Elements\Doms\Icons\IconSportsMma;
use Websyspro\Elements\Doms\Icons\IconSportsMotorsports;
use Websyspro\Elements\Doms\Icons\IconSportsRugby;
use Websyspro\Elements\Doms\Icons\IconSportsScore;
use Websyspro\Elements\Doms\Icons\IconSportsSoccer;
use Websyspro\Elements\Doms\Icons\IconSportsTennis;
use Websyspro\Elements\Doms\Icons\IconSportsVolleyball;
use Websyspro\Elements\Doms\Icons\IconSprinkler;
use Websyspro\Elements\Doms\Icons\IconSprint;
use Websyspro\Elements\Doms\Icons\IconSquare;
use Websyspro\Elements\Doms\Icons\IconSquareDot;
use Websyspro\Elements\Doms\Icons\IconSquareFoot;
use Websyspro\Elements\Doms\Icons\IconSsidChart;
use Websyspro\Elements\Doms\Icons\IconStack;
use Websyspro\Elements\Doms\Icons\IconStackedBarChart;
use Websyspro\Elements\Doms\Icons\IconStackedEmail;
use Websyspro\Elements\Doms\Icons\IconStackedInbox;
use Websyspro\Elements\Doms\Icons\IconStackedLineChart;
use Websyspro\Elements\Doms\Icons\IconStackHexagon;
use Websyspro\Elements\Doms\Icons\IconStackOff;
use Websyspro\Elements\Doms\Icons\IconStacks;
use Websyspro\Elements\Doms\Icons\IconStackStar;
use Websyspro\Elements\Doms\Icons\IconStadiaController;
use Websyspro\Elements\Doms\Icons\IconStadium;
use Websyspro\Elements\Doms\Icons\IconStairs;
use Websyspro\Elements\Doms\Icons\IconStairs2;
use Websyspro\Elements\Doms\Icons\IconStar;
use Websyspro\Elements\Doms\Icons\IconStarHalf;
use Websyspro\Elements\Doms\Icons\IconStarRate;
use Websyspro\Elements\Doms\Icons\IconStarRateHalf;
use Websyspro\Elements\Doms\Icons\IconStars;
use Websyspro\Elements\Doms\Icons\IconStart;
use Websyspro\Elements\Doms\Icons\IconStat0;
use Websyspro\Elements\Doms\Icons\IconStat1;
use Websyspro\Elements\Doms\Icons\IconStat2;
use Websyspro\Elements\Doms\Icons\IconStat3;
use Websyspro\Elements\Doms\Icons\IconStatMinus1;
use Websyspro\Elements\Doms\Icons\IconStatMinus2;
use Websyspro\Elements\Doms\Icons\IconStatMinus3;
use Websyspro\Elements\Doms\Icons\IconStayCurrentLandscape;
use Websyspro\Elements\Doms\Icons\IconStayCurrentPortrait;
use Websyspro\Elements\Doms\Icons\IconStayPrimaryLandscape;
use Websyspro\Elements\Doms\Icons\IconStayPrimaryPortrait;
use Websyspro\Elements\Doms\Icons\IconStep;
use Websyspro\Elements\Doms\Icons\IconStepInto;
use Websyspro\Elements\Doms\Icons\IconStepOut;
use Websyspro\Elements\Doms\Icons\IconStepOver;
use Websyspro\Elements\Doms\Icons\IconSteppers;
use Websyspro\Elements\Doms\Icons\IconSteps;
use Websyspro\Elements\Doms\Icons\IconStethoscope;
use Websyspro\Elements\Doms\Icons\IconStethoscopeArrow;
use Websyspro\Elements\Doms\Icons\IconStethoscopeCheck;
use Websyspro\Elements\Doms\Icons\IconStickyNote;
use Websyspro\Elements\Doms\Icons\IconStickyNote2;
use Websyspro\Elements\Doms\Icons\IconStockMedia;
use Websyspro\Elements\Doms\Icons\IconStockpot;
use Websyspro\Elements\Doms\Icons\IconStop;
use Websyspro\Elements\Doms\Icons\IconStopCircle;
use Websyspro\Elements\Doms\Icons\IconStopScreenShare;
use Websyspro\Elements\Doms\Icons\IconStorage;
use Websyspro\Elements\Doms\Icons\IconStore;
use Websyspro\Elements\Doms\Icons\IconStorefront;
use Websyspro\Elements\Doms\Icons\IconStorm;
use Websyspro\Elements\Doms\Icons\IconStraight;
use Websyspro\Elements\Doms\Icons\IconStraighten;
use Websyspro\Elements\Doms\Icons\IconStrategy;
use Websyspro\Elements\Doms\Icons\IconStream;
use Websyspro\Elements\Doms\Icons\IconStreamApps;
use Websyspro\Elements\Doms\Icons\IconStreetview;
use Websyspro\Elements\Doms\Icons\IconStressManagement;
use Websyspro\Elements\Doms\Icons\IconStrikethroughS;
use Websyspro\Elements\Doms\Icons\IconStrokeFull;
use Websyspro\Elements\Doms\Icons\IconStrokePartial;
use Websyspro\Elements\Doms\Icons\IconStroller;
use Websyspro\Elements\Doms\Icons\IconStyle;
use Websyspro\Elements\Doms\Icons\IconStyler;
use Websyspro\Elements\Doms\Icons\IconStylus;
use Websyspro\Elements\Doms\Icons\IconStylusLaserPointer;
use Websyspro\Elements\Doms\Icons\IconStylusNote;
use Websyspro\Elements\Doms\Icons\IconSubdirectoryArrowLeft;
use Websyspro\Elements\Doms\Icons\IconSubdirectoryArrowRight;
use Websyspro\Elements\Doms\Icons\IconSubheader;
use Websyspro\Elements\Doms\Icons\IconSubject;
use Websyspro\Elements\Doms\Icons\IconSubscript;
use Websyspro\Elements\Doms\Icons\IconSubscriptions;
use Websyspro\Elements\Doms\Icons\IconSubtitles;
use Websyspro\Elements\Doms\Icons\IconSubtitlesOff;
use Websyspro\Elements\Doms\Icons\IconSubway;
use Websyspro\Elements\Doms\Icons\IconSummarize;
use Websyspro\Elements\Doms\Icons\IconSunny;
use Websyspro\Elements\Doms\Icons\IconSunnySnowing;
use Websyspro\Elements\Doms\Icons\IconSuperscript;
use Websyspro\Elements\Doms\Icons\IconSupervisedUserCircle;
use Websyspro\Elements\Doms\Icons\IconSupervisedUserCircleOff;
use Websyspro\Elements\Doms\Icons\IconSupervisorAccount;
use Websyspro\Elements\Doms\Icons\IconSupport;
use Websyspro\Elements\Doms\Icons\IconSupportAgent;
use Websyspro\Elements\Doms\Icons\IconSurfing;
use Websyspro\Elements\Doms\Icons\IconSurgical;
use Websyspro\Elements\Doms\Icons\IconSurroundSound;
use Websyspro\Elements\Doms\Icons\IconSwapCalls;
use Websyspro\Elements\Doms\Icons\IconSwapDrivingApps;
use Websyspro\Elements\Doms\Icons\IconSwapDrivingAppsWheel;
use Websyspro\Elements\Doms\Icons\IconSwapHoriz;
use Websyspro\Elements\Doms\Icons\IconSwapHorizontalCircle;
use Websyspro\Elements\Doms\Icons\IconSwapVert;
use Websyspro\Elements\Doms\Icons\IconSwapVerticalCircle;
use Websyspro\Elements\Doms\Icons\IconSweep;
use Websyspro\Elements\Doms\Icons\IconSwipe;
use Websyspro\Elements\Doms\Icons\IconSwipeDown;
use Websyspro\Elements\Doms\Icons\IconSwipeDownAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeLeft;
use Websyspro\Elements\Doms\Icons\IconSwipeLeftAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeRight;
use Websyspro\Elements\Doms\Icons\IconSwipeRightAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeUp;
use Websyspro\Elements\Doms\Icons\IconSwipeUpAlt;
use Websyspro\Elements\Doms\Icons\IconSwipeVertical;
use Websyspro\Elements\Doms\Icons\IconSwitch;
use Websyspro\Elements\Doms\Icons\IconSwitchAccess;
use Websyspro\Elements\Doms\Icons\IconSwitchAccess2;
use Websyspro\Elements\Doms\Icons\IconSwitchAccessShortcut;
use Websyspro\Elements\Doms\Icons\IconSwitchAccessShortcutAdd;
use Websyspro\Elements\Doms\Icons\IconSwitchAccount;
use Websyspro\Elements\Doms\Icons\IconSwitchCamera;
use Websyspro\Elements\Doms\Icons\IconSwitches;
use Websyspro\Elements\Doms\Icons\IconSwitchLeft;
use Websyspro\Elements\Doms\Icons\IconSwitchRight;
use Websyspro\Elements\Doms\Icons\IconSwitchVideo;
use Websyspro\Elements\Doms\Icons\IconSwordRose;
use Websyspro\Elements\Doms\Icons\IconSwords;
use Websyspro\Elements\Doms\Icons\IconSymptoms;
use Websyspro\Elements\Doms\Icons\IconSynagogue;
use Websyspro\Elements\Doms\Icons\IconSync;
use Websyspro\Elements\Doms\Icons\IconSyncAlt;
use Websyspro\Elements\Doms\Icons\IconSyncArrowDown;
use Websyspro\Elements\Doms\Icons\IconSyncArrowUp;
use Websyspro\Elements\Doms\Icons\IconSyncDesktop;
use Websyspro\Elements\Doms\Icons\IconSyncDisabled;
use Websyspro\Elements\Doms\Icons\IconSyncLock;
use Websyspro\Elements\Doms\Icons\IconSyncProblem;
use Websyspro\Elements\Doms\Icons\IconSyncSavedLocally;
use Websyspro\Elements\Doms\Icons\IconSyringe;
use Websyspro\Elements\Doms\Icons\IconSystemUpdate;
use Websyspro\Elements\Doms\Icons\IconSystemUpdateAlt;
use Websyspro\Elements\Doms\Icons\IconTab;
use Websyspro\Elements\Doms\Icons\IconTabClose;
use Websyspro\Elements\Doms\Icons\IconTabCloseInactive;
use Websyspro\Elements\Doms\Icons\IconTabCloseRight;
use Websyspro\Elements\Doms\Icons\IconTabDuplicate;
use Websyspro\Elements\Doms\Icons\IconTabGroup;
use Websyspro\Elements\Doms\Icons\IconTabInactive;
use Websyspro\Elements\Doms\Icons\IconTable;
use Websyspro\Elements\Doms\Icons\IconTableBar;
use Websyspro\Elements\Doms\Icons\IconTableChart;
use Websyspro\Elements\Doms\Icons\IconTableChartView;
use Websyspro\Elements\Doms\Icons\IconTableConvert;
use Websyspro\Elements\Doms\Icons\IconTableEdit;
use Websyspro\Elements\Doms\Icons\IconTableEye;
use Websyspro\Elements\Doms\Icons\IconTableLamp;
use Websyspro\Elements\Doms\Icons\IconTableRestaurant;
use Websyspro\Elements\Doms\Icons\IconTableRows;
use Websyspro\Elements\Doms\Icons\IconTableRowsNarrow;
use Websyspro\Elements\Doms\Icons\IconTablet;
use Websyspro\Elements\Doms\Icons\IconTabletAndroid;
use Websyspro\Elements\Doms\Icons\IconTabletCamera;
use Websyspro\Elements\Doms\Icons\IconTabletMac;
use Websyspro\Elements\Doms\Icons\IconTableView;
use Websyspro\Elements\Doms\Icons\IconTabMove;
use Websyspro\Elements\Doms\Icons\IconTabNewRight;
use Websyspro\Elements\Doms\Icons\IconTabRecent;
use Websyspro\Elements\Doms\Icons\IconTabs;
use Websyspro\Elements\Doms\Icons\IconTabUnselected;
use Websyspro\Elements\Doms\Icons\IconTactic;
use Websyspro\Elements\Doms\Icons\IconTag;
use Websyspro\Elements\Doms\Icons\IconTakeoutDining;
use Websyspro\Elements\Doms\Icons\IconTamperDetectionOff;
use Websyspro\Elements\Doms\Icons\IconTamperDetectionOn;
use Websyspro\Elements\Doms\Icons\IconTapAndPlay;
use Websyspro\Elements\Doms\Icons\IconTapas;
use Websyspro\Elements\Doms\Icons\IconTarget;
use Websyspro\Elements\Doms\Icons\IconTask;
use Websyspro\Elements\Doms\Icons\IconTaskAlt;
use Websyspro\Elements\Doms\Icons\IconTaunt;
use Websyspro\Elements\Doms\Icons\IconTaxiAlert;
use Websyspro\Elements\Doms\Icons\IconTeamDashboard;
use Websyspro\Elements\Doms\Icons\IconTempleBuddhist;
use Websyspro\Elements\Doms\Icons\IconTempleHindu;
use Websyspro\Elements\Doms\Icons\IconTempPreferencesEco;
use Websyspro\Elements\Doms\Icons\IconTenancy;
use Websyspro\Elements\Doms\Icons\IconTerminal;
use Websyspro\Elements\Doms\Icons\IconTextAd;
use Websyspro\Elements\Doms\Icons\IconTextCompare;
use Websyspro\Elements\Doms\Icons\IconTextDecrease;
use Websyspro\Elements\Doms\Icons\IconTextFields;
use Websyspro\Elements\Doms\Icons\IconTextFieldsAlt;
use Websyspro\Elements\Doms\Icons\IconTextFormat;
use Websyspro\Elements\Doms\Icons\IconTextIncrease;
use Websyspro\Elements\Doms\Icons\IconTextRotateUp;
use Websyspro\Elements\Doms\Icons\IconTextRotateVertical;
use Websyspro\Elements\Doms\Icons\IconTextRotationAngledown;
use Websyspro\Elements\Doms\Icons\IconTextRotationAngleup;
use Websyspro\Elements\Doms\Icons\IconTextRotationDown;
use Websyspro\Elements\Doms\Icons\IconTextRotationNone;
use Websyspro\Elements\Doms\Icons\IconTextSelectEnd;
use Websyspro\Elements\Doms\Icons\IconTextSelectJumpToBeginning;
use Websyspro\Elements\Doms\Icons\IconTextSelectJumpToEnd;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveBackCharacter;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveBackWord;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveDown;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveForwardCharacter;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveForwardWord;
use Websyspro\Elements\Doms\Icons\IconTextSelectMoveUp;
use Websyspro\Elements\Doms\Icons\IconTextSelectStart;
use Websyspro\Elements\Doms\Icons\IconTextSnippet;
use Websyspro\Elements\Doms\Icons\IconTextToSpeech;
use Websyspro\Elements\Doms\Icons\IconTextUp;
use Websyspro\Elements\Doms\Icons\IconTexture;
use Websyspro\Elements\Doms\Icons\IconTextureAdd;
use Websyspro\Elements\Doms\Icons\IconTextureMinus;
use Websyspro\Elements\Doms\Icons\IconTheaterComedy;
use Websyspro\Elements\Doms\Icons\IconTheaters;
use Websyspro\Elements\Doms\Icons\IconThermometer;
use Websyspro\Elements\Doms\Icons\IconThermometerAdd;
use Websyspro\Elements\Doms\Icons\IconThermometerGain;
use Websyspro\Elements\Doms\Icons\IconThermometerLoss;
use Websyspro\Elements\Doms\Icons\IconThermometerMinus;
use Websyspro\Elements\Doms\Icons\IconThermostat;
use Websyspro\Elements\Doms\Icons\IconThermostatArrowDown;
use Websyspro\Elements\Doms\Icons\IconThermostatArrowUp;
use Websyspro\Elements\Doms\Icons\IconThermostatAuto;
use Websyspro\Elements\Doms\Icons\IconThermostatCarbon;
use Websyspro\Elements\Doms\Icons\IconThingsToDo;
use Websyspro\Elements\Doms\Icons\IconThreadUnread;
use Websyspro\Elements\Doms\Icons\IconThreatIntelligence;
use Websyspro\Elements\Doms\Icons\IconThumbDown;
use Websyspro\Elements\Doms\Icons\IconThumbnailBar;
use Websyspro\Elements\Doms\Icons\IconThumbsUpDown;
use Websyspro\Elements\Doms\Icons\IconThumbUp;
use Websyspro\Elements\Doms\Icons\IconThunderstorm;
use Websyspro\Elements\Doms\Icons\IconTibia;
use Websyspro\Elements\Doms\Icons\IconTibiaAlt;
use Websyspro\Elements\Doms\Icons\IconTileLarge;
use Websyspro\Elements\Doms\Icons\IconTileMedium;
use Websyspro\Elements\Doms\Icons\IconTileSmall;
use Websyspro\Elements\Doms\Icons\IconTimeAuto;
use Websyspro\Elements\Doms\Icons\IconTimelapse;
use Websyspro\Elements\Doms\Icons\IconTimeline;
use Websyspro\Elements\Doms\Icons\IconTimer;
use Websyspro\Elements\Doms\Icons\IconTimer10;
use Websyspro\Elements\Doms\Icons\IconTimer10Alt1;
use Websyspro\Elements\Doms\Icons\IconTimer10Select;
use Websyspro\Elements\Doms\Icons\IconTimer3;
use Websyspro\Elements\Doms\Icons\IconTimer3Alt1;
use Websyspro\Elements\Doms\Icons\IconTimer3Select;
use Websyspro\Elements\Doms\Icons\IconTimer5;
use Websyspro\Elements\Doms\Icons\IconTimer5Shutter;
use Websyspro\Elements\Doms\Icons\IconTimerArrowDown;
use Websyspro\Elements\Doms\Icons\IconTimerArrowUp;
use Websyspro\Elements\Doms\Icons\IconTimerOff;
use Websyspro\Elements\Doms\Icons\IconTimerPause;
use Websyspro\Elements\Doms\Icons\IconTimerPlay;
use Websyspro\Elements\Doms\Icons\IconTireRepair;
use Websyspro\Elements\Doms\Icons\IconTitle;
use Websyspro\Elements\Doms\Icons\IconTitlecase;
use Websyspro\Elements\Doms\Icons\IconToast;
use Websyspro\Elements\Doms\Icons\IconToc;
use Websyspro\Elements\Doms\Icons\IconToday;
use Websyspro\Elements\Doms\Icons\IconToggleOff;
use Websyspro\Elements\Doms\Icons\IconToggleOn;
use Websyspro\Elements\Doms\Icons\IconToken;
use Websyspro\Elements\Doms\Icons\IconToll;
use Websyspro\Elements\Doms\Icons\IconTonality;
use Websyspro\Elements\Doms\Icons\IconToolbar;
use Websyspro\Elements\Doms\Icons\IconToolsFlatHead;
use Websyspro\Elements\Doms\Icons\IconToolsInstallationKit;
use Websyspro\Elements\Doms\Icons\IconToolsLadder;
use Websyspro\Elements\Doms\Icons\IconToolsLevel;
use Websyspro\Elements\Doms\Icons\IconToolsPhillips;
use Websyspro\Elements\Doms\Icons\IconToolsPliersWireStripper;
use Websyspro\Elements\Doms\Icons\IconToolsPowerDrill;
use Websyspro\Elements\Doms\Icons\IconTooltip;
use Websyspro\Elements\Doms\Icons\IconTooltip2;
use Websyspro\Elements\Doms\Icons\IconTopic;
use Websyspro\Elements\Doms\Icons\IconTopPanelClose;
use Websyspro\Elements\Doms\Icons\IconTopPanelOpen;
use Websyspro\Elements\Doms\Icons\IconTornado;
use Websyspro\Elements\Doms\Icons\IconTotalDissolvedSolids;
use Websyspro\Elements\Doms\Icons\IconTouchApp;
use Websyspro\Elements\Doms\Icons\IconTouchDouble;
use Websyspro\Elements\Doms\Icons\IconTouchLong;
use Websyspro\Elements\Doms\Icons\IconTouchpadMouse;
use Websyspro\Elements\Doms\Icons\IconTouchpadMouseOff;
use Websyspro\Elements\Doms\Icons\IconTouchTriple;
use Websyspro\Elements\Doms\Icons\IconTour;
use Websyspro\Elements\Doms\Icons\IconToys;
use Websyspro\Elements\Doms\Icons\IconToysAndGames;
use Websyspro\Elements\Doms\Icons\IconToysFan;
use Websyspro\Elements\Doms\Icons\IconTrackChanges;
use Websyspro\Elements\Doms\Icons\IconTrackpadInput;
use Websyspro\Elements\Doms\Icons\IconTrackpadInput2;
use Websyspro\Elements\Doms\Icons\IconTrackpadInput3;
use Websyspro\Elements\Doms\Icons\IconTraffic;
use Websyspro\Elements\Doms\Icons\IconTrafficJam;
use Websyspro\Elements\Doms\Icons\IconTrailLength;
use Websyspro\Elements\Doms\Icons\IconTrailLengthMedium;
use Websyspro\Elements\Doms\Icons\IconTrailLengthShort;
use Websyspro\Elements\Doms\Icons\IconTrain;
use Websyspro\Elements\Doms\Icons\IconTram;
use Websyspro\Elements\Doms\Icons\IconTranscribe;
use Websyspro\Elements\Doms\Icons\IconTransferWithinAStation;
use Websyspro\Elements\Doms\Icons\IconTransform;
use Websyspro\Elements\Doms\Icons\IconTransgender;
use Websyspro\Elements\Doms\Icons\IconTransitEnterexit;
use Websyspro\Elements\Doms\Icons\IconTransitionChop;
use Websyspro\Elements\Doms\Icons\IconTransitionDissolve;
use Websyspro\Elements\Doms\Icons\IconTransitionFade;
use Websyspro\Elements\Doms\Icons\IconTransitionPush;
use Websyspro\Elements\Doms\Icons\IconTransitionSlide;
use Websyspro\Elements\Doms\Icons\IconTransitTicket;
use Websyspro\Elements\Doms\Icons\IconTranslate;
use Websyspro\Elements\Doms\Icons\IconTransportation;
use Websyspro\Elements\Doms\Icons\IconTravel;
use Websyspro\Elements\Doms\Icons\IconTravelExplore;
use Websyspro\Elements\Doms\Icons\IconTravelLuggageAndBags;
use Websyspro\Elements\Doms\Icons\IconTrendingDown;
use Websyspro\Elements\Doms\Icons\IconTrendingFlat;
use Websyspro\Elements\Doms\Icons\IconTrendingUp;
use Websyspro\Elements\Doms\Icons\IconTrip;
use Websyspro\Elements\Doms\Icons\IconTripOrigin;
use Websyspro\Elements\Doms\Icons\IconTrolley;
use Websyspro\Elements\Doms\Icons\IconTrolleyCableCar;
use Websyspro\Elements\Doms\Icons\IconTrophy;
use Websyspro\Elements\Doms\Icons\IconTroubleshoot;
use Websyspro\Elements\Doms\Icons\IconTsunami;
use Websyspro\Elements\Doms\Icons\IconTsv;
use Websyspro\Elements\Doms\Icons\IconTty;
use Websyspro\Elements\Doms\Icons\IconTune;
use Websyspro\Elements\Doms\Icons\IconTurnLeft;
use Websyspro\Elements\Doms\Icons\IconTurnRight;
use Websyspro\Elements\Doms\Icons\IconTurnSharpLeft;
use Websyspro\Elements\Doms\Icons\IconTurnSharpRight;
use Websyspro\Elements\Doms\Icons\IconTurnSlightLeft;
use Websyspro\Elements\Doms\Icons\IconTurnSlightRight;
use Websyspro\Elements\Doms\Icons\IconTv;
use Websyspro\Elements\Doms\Icons\IconTvDisplays;
use Websyspro\Elements\Doms\Icons\IconTvGen;
use Websyspro\Elements\Doms\Icons\IconTvGuide;
use Websyspro\Elements\Doms\Icons\IconTvNext;
use Websyspro\Elements\Doms\Icons\IconTvOff;
use Websyspro\Elements\Doms\Icons\IconTvOptionsEditChannels;
use Websyspro\Elements\Doms\Icons\IconTvOptionsInputSettings;
use Websyspro\Elements\Doms\Icons\IconTvRemote;
use Websyspro\Elements\Doms\Icons\IconTvSignin;
use Websyspro\Elements\Doms\Icons\IconTvWithAssistant;
use Websyspro\Elements\Doms\Icons\IconTwoPager;
use Websyspro\Elements\Doms\Icons\IconTwoPagerStore;
use Websyspro\Elements\Doms\Icons\IconTwoWheeler;
use Websyspro\Elements\Doms\Icons\IconTypeSpecimen;
use Websyspro\Elements\Doms\Icons\IconUlnaRadius;
use Websyspro\Elements\Doms\Icons\IconUlnaRadiusAlt;
use Websyspro\Elements\Doms\Icons\IconUmbrella;
use Websyspro\Elements\Doms\Icons\IconUnarchive;
use Websyspro\Elements\Doms\Icons\IconUndo;
use Websyspro\Elements\Doms\Icons\IconUnfoldLess;
use Websyspro\Elements\Doms\Icons\IconUnfoldLessDouble;
use Websyspro\Elements\Doms\Icons\IconUnfoldMore;
use Websyspro\Elements\Doms\Icons\IconUnfoldMoreDouble;
use Websyspro\Elements\Doms\Icons\IconUngroup;
use Websyspro\Elements\Doms\Icons\IconUniversalCurrency;
use Websyspro\Elements\Doms\Icons\IconUniversalCurrencyAlt;
use Websyspro\Elements\Doms\Icons\IconUniversalLocal;
use Websyspro\Elements\Doms\Icons\IconUnknown2;
use Websyspro\Elements\Doms\Icons\IconUnknown5;
use Websyspro\Elements\Doms\Icons\IconUnknown7;
use Websyspro\Elements\Doms\Icons\IconUnknownDocument;
use Websyspro\Elements\Doms\Icons\IconUnknownMed;
use Websyspro\Elements\Doms\Icons\IconUnlicense;
use Websyspro\Elements\Doms\Icons\IconUnpavedRoad;
use Websyspro\Elements\Doms\Icons\IconUnpublished;
use Websyspro\Elements\Doms\Icons\IconUnsubscribe;
use Websyspro\Elements\Doms\Icons\IconUpcoming;
use Websyspro\Elements\Doms\Icons\IconUpdate;
use Websyspro\Elements\Doms\Icons\IconUpdateDisabled;
use Websyspro\Elements\Doms\Icons\IconUpgrade;
use Websyspro\Elements\Doms\Icons\IconUpiPay;
use Websyspro\Elements\Doms\Icons\IconUpload;
use Websyspro\Elements\Doms\Icons\IconUpload2;
use Websyspro\Elements\Doms\Icons\IconUploadFile;
use Websyspro\Elements\Doms\Icons\IconUppercase;
use Websyspro\Elements\Doms\Icons\IconUrology;
use Websyspro\Elements\Doms\Icons\IconUsb;
use Websyspro\Elements\Doms\Icons\IconUsbOff;
use Websyspro\Elements\Doms\Icons\IconUserAttributes;
use Websyspro\Elements\Doms\Icons\IconUTurnLeft;
use Websyspro\Elements\Doms\Icons\IconUTurnRight;
use Websyspro\Elements\Doms\Icons\IconVaccines;
use Websyspro\Elements\Doms\Icons\IconVacuum;
use Websyspro\Elements\Doms\Icons\IconValve;
use Websyspro\Elements\Doms\Icons\IconVapeFree;
use Websyspro\Elements\Doms\Icons\IconVapingRooms;
use Websyspro\Elements\Doms\Icons\IconVariableAdd;
use Websyspro\Elements\Doms\Icons\IconVariableInsert;
use Websyspro\Elements\Doms\Icons\IconVariableRemove;
use Websyspro\Elements\Doms\Icons\IconVariables;
use Websyspro\Elements\Doms\Icons\IconVentilator;
use Websyspro\Elements\Doms\Icons\IconVerified;
use Websyspro\Elements\Doms\Icons\IconVerifiedUser;
use Websyspro\Elements\Doms\Icons\IconVerticalAlignBottom;
use Websyspro\Elements\Doms\Icons\IconVerticalAlignCenter;
use Websyspro\Elements\Doms\Icons\IconVerticalAlignTop;
use Websyspro\Elements\Doms\Icons\IconVerticalDistribute;
use Websyspro\Elements\Doms\Icons\IconVerticalShades;
use Websyspro\Elements\Doms\Icons\IconVerticalShadesClosed;
use Websyspro\Elements\Doms\Icons\IconVerticalSplit;
use Websyspro\Elements\Doms\Icons\IconVibration;
use Websyspro\Elements\Doms\Icons\IconVideoCall;
use Websyspro\Elements\Doms\Icons\IconVideocam;
use Websyspro\Elements\Doms\Icons\IconVideocamAlert;
use Websyspro\Elements\Doms\Icons\IconVideoCameraBack;
use Websyspro\Elements\Doms\Icons\IconVideoCameraBackAdd;
use Websyspro\Elements\Doms\Icons\IconVideoCameraFront;
use Websyspro\Elements\Doms\Icons\IconVideoCameraFrontOff;
use Websyspro\Elements\Doms\Icons\IconVideocamOff;
use Websyspro\Elements\Doms\Icons\IconVideoChat;
use Websyspro\Elements\Doms\Icons\IconVideoFile;
use Websyspro\Elements\Doms\Icons\IconVideogameAsset;
use Websyspro\Elements\Doms\Icons\IconVideogameAssetOff;
use Websyspro\Elements\Doms\Icons\IconVideoLabel;
use Websyspro\Elements\Doms\Icons\IconVideoLibrary;
use Websyspro\Elements\Doms\Icons\IconVideoSearch;
use Websyspro\Elements\Doms\Icons\IconVideoSettings;
use Websyspro\Elements\Doms\Icons\IconVideoStable;
use Websyspro\Elements\Doms\Icons\IconViewAgenda;
use Websyspro\Elements\Doms\Icons\IconViewApps;
use Websyspro\Elements\Doms\Icons\IconViewArray;
use Websyspro\Elements\Doms\Icons\IconViewCarousel;
use Websyspro\Elements\Doms\Icons\IconViewColumn;
use Websyspro\Elements\Doms\Icons\IconViewColumn2;
use Websyspro\Elements\Doms\Icons\IconViewComfy;
use Websyspro\Elements\Doms\Icons\IconViewComfyAlt;
use Websyspro\Elements\Doms\Icons\IconViewCompact;
use Websyspro\Elements\Doms\Icons\IconViewCompactAlt;
use Websyspro\Elements\Doms\Icons\IconViewCozy;
use Websyspro\Elements\Doms\Icons\IconViewDay;
use Websyspro\Elements\Doms\Icons\IconViewHeadline;
use Websyspro\Elements\Doms\Icons\IconViewInAr;
use Websyspro\Elements\Doms\Icons\IconViewInArOff;
use Websyspro\Elements\Doms\Icons\IconViewKanban;
use Websyspro\Elements\Doms\Icons\IconViewList;
use Websyspro\Elements\Doms\Icons\IconViewModule;
use Websyspro\Elements\Doms\Icons\IconViewObjectTrack;
use Websyspro\Elements\Doms\Icons\IconViewQuilt;
use Websyspro\Elements\Doms\Icons\IconViewRealSize;
use Websyspro\Elements\Doms\Icons\IconViewSidebar;
use Websyspro\Elements\Doms\Icons\IconViewStream;
use Websyspro\Elements\Doms\Icons\IconViewTimeline;
use Websyspro\Elements\Doms\Icons\IconViewWeek;
use Websyspro\Elements\Doms\Icons\IconVignette;
use Websyspro\Elements\Doms\Icons\IconVilla;
use Websyspro\Elements\Doms\Icons\IconVisibility;
use Websyspro\Elements\Doms\Icons\IconVisibilityLock;
use Websyspro\Elements\Doms\Icons\IconVisibilityOff;
use Websyspro\Elements\Doms\Icons\IconVitalSigns;
use Websyspro\Elements\Doms\Icons\IconVo2Max;
use Websyspro\Elements\Doms\Icons\IconVoiceChat;
use Websyspro\Elements\Doms\Icons\IconVoicemail;
use Websyspro\Elements\Doms\Icons\IconVoiceOverOff;
use Websyspro\Elements\Doms\Icons\IconVoiceSelection;
use Websyspro\Elements\Doms\Icons\IconVoiceSelectionOff;
use Websyspro\Elements\Doms\Icons\IconVolcano;
use Websyspro\Elements\Doms\Icons\IconVolumeDown;
use Websyspro\Elements\Doms\Icons\IconVolumeDownAlt;
use Websyspro\Elements\Doms\Icons\IconVolumeMute;
use Websyspro\Elements\Doms\Icons\IconVolumeOff;
use Websyspro\Elements\Doms\Icons\IconVolumeUp;
use Websyspro\Elements\Doms\Icons\IconVolunteerActivism;
use Websyspro\Elements\Doms\Icons\IconVotingChip;
use Websyspro\Elements\Doms\Icons\IconVpnKey;
use Websyspro\Elements\Doms\Icons\IconVpnKeyAlert;
use Websyspro\Elements\Doms\Icons\IconVpnKeyOff;
use Websyspro\Elements\Doms\Icons\IconVpnLock;
use Websyspro\Elements\Doms\Icons\IconVr180Create2d;
use Websyspro\Elements\Doms\Icons\IconVr180Create2dOff;
use Websyspro\Elements\Doms\Icons\IconVrpano;
use Websyspro\Elements\Doms\Icons\IconWallArt;
use Websyspro\Elements\Doms\Icons\IconWallet;
use Websyspro\Elements\Doms\Icons\IconWallLamp;
use Websyspro\Elements\Doms\Icons\IconWallpaper;
use Websyspro\Elements\Doms\Icons\IconWallpaperSlideshow;
use Websyspro\Elements\Doms\Icons\IconWard;
use Websyspro\Elements\Doms\Icons\IconWarehouse;
use Websyspro\Elements\Doms\Icons\IconWarning;
use Websyspro\Elements\Doms\Icons\IconWarningOff;
use Websyspro\Elements\Doms\Icons\IconWash;
use Websyspro\Elements\Doms\Icons\IconWatch;
use Websyspro\Elements\Doms\Icons\IconWatchButtonPress;
use Websyspro\Elements\Doms\Icons\IconWatchCheck;
use Websyspro\Elements\Doms\Icons\IconWatchOff;
use Websyspro\Elements\Doms\Icons\IconWatchScreentime;
use Websyspro\Elements\Doms\Icons\IconWatchVibration;
use Websyspro\Elements\Doms\Icons\IconWatchWake;
use Websyspro\Elements\Doms\Icons\IconWater;
use Websyspro\Elements\Doms\Icons\IconWaterBottle;
use Websyspro\Elements\Doms\Icons\IconWaterBottleLarge;
use Websyspro\Elements\Doms\Icons\IconWaterDamage;
use Websyspro\Elements\Doms\Icons\IconWaterDo;
use Websyspro\Elements\Doms\Icons\IconWaterDrop;
use Websyspro\Elements\Doms\Icons\IconWaterEc;
use Websyspro\Elements\Doms\Icons\IconWaterfallChart;
use Websyspro\Elements\Doms\Icons\IconWaterFull;
use Websyspro\Elements\Doms\Icons\IconWaterHeater;
use Websyspro\Elements\Doms\Icons\IconWaterLock;
use Websyspro\Elements\Doms\Icons\IconWaterLoss;
use Websyspro\Elements\Doms\Icons\IconWaterLux;
use Websyspro\Elements\Doms\Icons\IconWaterMedium;
use Websyspro\Elements\Doms\Icons\IconWaterOrp;
use Websyspro\Elements\Doms\Icons\IconWaterPh;
use Websyspro\Elements\Doms\Icons\IconWaterPump;
use Websyspro\Elements\Doms\Icons\IconWaterVoc;
use Websyspro\Elements\Doms\Icons\IconWaves;
use Websyspro\Elements\Doms\Icons\IconWavingHand;
use Websyspro\Elements\Doms\Icons\IconWbAuto;
use Websyspro\Elements\Doms\Icons\IconWbIncandescent;
use Websyspro\Elements\Doms\Icons\IconWbIridescent;
use Websyspro\Elements\Doms\Icons\IconWbShade;
use Websyspro\Elements\Doms\Icons\IconWbSunny;
use Websyspro\Elements\Doms\Icons\IconWbTwilight;
use Websyspro\Elements\Doms\Icons\IconWc;
use Websyspro\Elements\Doms\Icons\IconWeatherHail;
use Websyspro\Elements\Doms\Icons\IconWeatherMix;
use Websyspro\Elements\Doms\Icons\IconWeatherSnowy;
use Websyspro\Elements\Doms\Icons\IconWeb;
use Websyspro\Elements\Doms\Icons\IconWebAsset;
use Websyspro\Elements\Doms\Icons\IconWebAssetOff;
use Websyspro\Elements\Doms\Icons\IconWebhook;
use Websyspro\Elements\Doms\Icons\IconWebStories;
use Websyspro\Elements\Doms\Icons\IconWebTraffic;
use Websyspro\Elements\Doms\Icons\IconWeekend;
use Websyspro\Elements\Doms\Icons\IconWeight;
use Websyspro\Elements\Doms\Icons\IconWest;
use Websyspro\Elements\Doms\Icons\IconWhatshot;
use Websyspro\Elements\Doms\Icons\IconWheelchairPickup;
use Websyspro\Elements\Doms\Icons\IconWhereToVote;
use Websyspro\Elements\Doms\Icons\IconWidgetMedium;
use Websyspro\Elements\Doms\Icons\IconWidgets;
use Websyspro\Elements\Doms\Icons\IconWidgetSmall;
use Websyspro\Elements\Doms\Icons\IconWidgetWidth;
use Websyspro\Elements\Doms\Icons\IconWidthFull;
use Websyspro\Elements\Doms\Icons\IconWidthNormal;
use Websyspro\Elements\Doms\Icons\IconWidthWide;
use Websyspro\Elements\Doms\Icons\IconWifi;
use Websyspro\Elements\Doms\Icons\IconWifi1Bar;
use Websyspro\Elements\Doms\Icons\IconWifi2Bar;
use Websyspro\Elements\Doms\Icons\IconWifiAdd;
use Websyspro\Elements\Doms\Icons\IconWifiCalling;
use Websyspro\Elements\Doms\Icons\IconWifiCallingBar1;
use Websyspro\Elements\Doms\Icons\IconWifiCallingBar2;
use Websyspro\Elements\Doms\Icons\IconWifiCallingBar3;
use Websyspro\Elements\Doms\Icons\IconWifiChannel;
use Websyspro\Elements\Doms\Icons\IconWifiFind;
use Websyspro\Elements\Doms\Icons\IconWifiHome;
use Websyspro\Elements\Doms\Icons\IconWifiLock;
use Websyspro\Elements\Doms\Icons\IconWifiNotification;
use Websyspro\Elements\Doms\Icons\IconWifiOff;
use Websyspro\Elements\Doms\Icons\IconWifiPassword;
use Websyspro\Elements\Doms\Icons\IconWifiProtectedSetup;
use Websyspro\Elements\Doms\Icons\IconWifiProxy;
use Websyspro\Elements\Doms\Icons\IconWifiTethering;
use Websyspro\Elements\Doms\Icons\IconWifiTetheringError;
use Websyspro\Elements\Doms\Icons\IconWifiTetheringOff;
use Websyspro\Elements\Doms\Icons\IconWindow;
use Websyspro\Elements\Doms\Icons\IconWindowClosed;
use Websyspro\Elements\Doms\Icons\IconWindowOpen;
use Websyspro\Elements\Doms\Icons\IconWindowSensor;
use Websyspro\Elements\Doms\Icons\IconWindPower;
use Websyspro\Elements\Doms\Icons\IconWineBar;
use Websyspro\Elements\Doms\Icons\IconWoman;
use Websyspro\Elements\Doms\Icons\IconWoman2;
use Websyspro\Elements\Doms\Icons\IconWork;
use Websyspro\Elements\Doms\Icons\IconWorkAlert;
use Websyspro\Elements\Doms\Icons\IconWorkHistory;
use Websyspro\Elements\Doms\Icons\IconWorkspacePremium;
use Websyspro\Elements\Doms\Icons\IconWorkspaces;
use Websyspro\Elements\Doms\Icons\IconWorkUpdate;
use Websyspro\Elements\Doms\Icons\IconWoundsInjuries;
use Websyspro\Elements\Doms\Icons\IconWrapText;
use Websyspro\Elements\Doms\Icons\IconWrist;
use Websyspro\Elements\Doms\Icons\IconWrongLocation;
use Websyspro\Elements\Doms\Icons\IconWysiwyg;
use Websyspro\Elements\Doms\Icons\IconYard;
use Websyspro\Elements\Doms\Icons\IconYourTrips;
use Websyspro\Elements\Doms\Icons\IconYoutubeActivity;
use Websyspro\Elements\Doms\Icons\IconYoutubeSearchedFor;
use Websyspro\Elements\Doms\Icons\IconZonePersonAlert;
use Websyspro\Elements\Doms\Icons\IconZonePersonIdle;
use Websyspro\Elements\Doms\Icons\IconZonePersonUrgent;
use Websyspro\Elements\Doms\Icons\IconZoomIn;
use Websyspro\Elements\Doms\Icons\IconZoomInMap;
use Websyspro\Elements\Doms\Icons\IconZoomOut;
use Websyspro\Elements\Doms\Icons\IconZoomOutMap;
/* End Icons List */

function App(
  mixed ...$childs
): mixed {
  return new App($childs);
}

function DocType(
): DocType {
  return new DocType();
}

function Html(
  mixed ...$childs
): Html {
  return new Html($childs);
}

function Head(
  mixed ...$childs
): Head {
  return new Head($childs);
}

function Meta(
  mixed ...$props
): Meta {
  return new Meta($props);
}

function StyleLink(
  string $href
): StyleLink {
  return new StyleLink($href);
}

function Body(
  mixed ...$childs
): Body {
  return new Body($childs);
}

function Div(
  mixed ...$childs
): Div {
  return new Div($childs);
}

/* Icons */
function Icon10k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon10k {
	return new Icon10k($size, $fill, $iconTypeWeight);
}

function Icon10mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon10mp {
	return new Icon10mp($size, $fill, $iconTypeWeight);
}

function Icon11mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon11mp {
	return new Icon11mp($size, $fill, $iconTypeWeight);
}

function Icon123(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon123 {
	return new Icon123($size, $fill, $iconTypeWeight);
}

function Icon12mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon12mp {
	return new Icon12mp($size, $fill, $iconTypeWeight);
}

function Icon13mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon13mp {
	return new Icon13mp($size, $fill, $iconTypeWeight);
}

function Icon14mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon14mp {
	return new Icon14mp($size, $fill, $iconTypeWeight);
}

function Icon15mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon15mp {
	return new Icon15mp($size, $fill, $iconTypeWeight);
}

function Icon16mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon16mp {
	return new Icon16mp($size, $fill, $iconTypeWeight);
}

function Icon17mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon17mp {
	return new Icon17mp($size, $fill, $iconTypeWeight);
}

function Icon18mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon18mp {
	return new Icon18mp($size, $fill, $iconTypeWeight);
}

function Icon18UpRating(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon18UpRating {
	return new Icon18UpRating($size, $fill, $iconTypeWeight);
}

function Icon19mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon19mp {
	return new Icon19mp($size, $fill, $iconTypeWeight);
}

function Icon1k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1k {
	return new Icon1k($size, $fill, $iconTypeWeight);
}

function Icon1kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1kPlus {
	return new Icon1kPlus($size, $fill, $iconTypeWeight);
}

function Icon1xMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1xMobiledata {
	return new Icon1xMobiledata($size, $fill, $iconTypeWeight);
}

function Icon1xMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon1xMobiledataBadge {
	return new Icon1xMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon20mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon20mp {
	return new Icon20mp($size, $fill, $iconTypeWeight);
}

function Icon21mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon21mp {
	return new Icon21mp($size, $fill, $iconTypeWeight);
}

function Icon22mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon22mp {
	return new Icon22mp($size, $fill, $iconTypeWeight);
}

function Icon23mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon23mp {
	return new Icon23mp($size, $fill, $iconTypeWeight);
}

function Icon24fpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon24fpsSelect {
	return new Icon24fpsSelect($size, $fill, $iconTypeWeight);
}

function Icon24mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon24mp {
	return new Icon24mp($size, $fill, $iconTypeWeight);
}

function Icon2d(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2d {
	return new Icon2d($size, $fill, $iconTypeWeight);
}

function Icon2k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2k {
	return new Icon2k($size, $fill, $iconTypeWeight);
}

function Icon2kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2kPlus {
	return new Icon2kPlus($size, $fill, $iconTypeWeight);
}

function Icon2mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon2mp {
	return new Icon2mp($size, $fill, $iconTypeWeight);
}

function Icon30fps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon30fps {
	return new Icon30fps($size, $fill, $iconTypeWeight);
}

function Icon30fpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon30fpsSelect {
	return new Icon30fpsSelect($size, $fill, $iconTypeWeight);
}

function Icon360(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon360 {
	return new Icon360($size, $fill, $iconTypeWeight);
}

function Icon3dRotation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3dRotation {
	return new Icon3dRotation($size, $fill, $iconTypeWeight);
}

function Icon3gMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3gMobiledata {
	return new Icon3gMobiledata($size, $fill, $iconTypeWeight);
}

function Icon3gMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3gMobiledataBadge {
	return new Icon3gMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon3k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3k {
	return new Icon3k($size, $fill, $iconTypeWeight);
}

function Icon3kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3kPlus {
	return new Icon3kPlus($size, $fill, $iconTypeWeight);
}

function Icon3mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3mp {
	return new Icon3mp($size, $fill, $iconTypeWeight);
}

function Icon3p(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon3p {
	return new Icon3p($size, $fill, $iconTypeWeight);
}

function Icon4gMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4gMobiledata {
	return new Icon4gMobiledata($size, $fill, $iconTypeWeight);
}

function Icon4gMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4gMobiledataBadge {
	return new Icon4gMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon4gPlusMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4gPlusMobiledata {
	return new Icon4gPlusMobiledata($size, $fill, $iconTypeWeight);
}

function Icon4k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4k {
	return new Icon4k($size, $fill, $iconTypeWeight);
}

function Icon4kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4kPlus {
	return new Icon4kPlus($size, $fill, $iconTypeWeight);
}

function Icon4mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon4mp {
	return new Icon4mp($size, $fill, $iconTypeWeight);
}

function Icon50mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon50mp {
	return new Icon50mp($size, $fill, $iconTypeWeight);
}

function Icon5g(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5g {
	return new Icon5g($size, $fill, $iconTypeWeight);
}

function Icon5gMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5gMobiledataBadge {
	return new Icon5gMobiledataBadge($size, $fill, $iconTypeWeight);
}

function Icon5k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5k {
	return new Icon5k($size, $fill, $iconTypeWeight);
}

function Icon5kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5kPlus {
	return new Icon5kPlus($size, $fill, $iconTypeWeight);
}

function Icon5mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon5mp {
	return new Icon5mp($size, $fill, $iconTypeWeight);
}

function Icon60fps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon60fps {
	return new Icon60fps($size, $fill, $iconTypeWeight);
}

function Icon60fpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon60fpsSelect {
	return new Icon60fpsSelect($size, $fill, $iconTypeWeight);
}

function Icon6FtApart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6FtApart {
	return new Icon6FtApart($size, $fill, $iconTypeWeight);
}

function Icon6k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6k {
	return new Icon6k($size, $fill, $iconTypeWeight);
}

function Icon6kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6kPlus {
	return new Icon6kPlus($size, $fill, $iconTypeWeight);
}

function Icon6mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon6mp {
	return new Icon6mp($size, $fill, $iconTypeWeight);
}

function Icon7k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon7k {
	return new Icon7k($size, $fill, $iconTypeWeight);
}

function Icon7kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon7kPlus {
	return new Icon7kPlus($size, $fill, $iconTypeWeight);
}

function Icon7mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon7mp {
	return new Icon7mp($size, $fill, $iconTypeWeight);
}

function Icon8k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon8k {
	return new Icon8k($size, $fill, $iconTypeWeight);
}

function Icon8kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon8kPlus {
	return new Icon8kPlus($size, $fill, $iconTypeWeight);
}

function Icon8mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon8mp {
	return new Icon8mp($size, $fill, $iconTypeWeight);
}

function Icon9k(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon9k {
	return new Icon9k($size, $fill, $iconTypeWeight);
}

function Icon9kPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon9kPlus {
	return new Icon9kPlus($size, $fill, $iconTypeWeight);
}

function Icon9mp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): Icon9mp {
	return new Icon9mp($size, $fill, $iconTypeWeight);
}

function IconAbc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAbc {
	return new IconAbc($size, $fill, $iconTypeWeight);
}

function IconAccessibility(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessibility {
	return new IconAccessibility($size, $fill, $iconTypeWeight);
}

function IconAccessibilityNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessibilityNew {
	return new IconAccessibilityNew($size, $fill, $iconTypeWeight);
}

function IconAccessible(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessible {
	return new IconAccessible($size, $fill, $iconTypeWeight);
}

function IconAccessibleForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccessibleForward {
	return new IconAccessibleForward($size, $fill, $iconTypeWeight);
}

function IconAccountBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountBalance {
	return new IconAccountBalance($size, $fill, $iconTypeWeight);
}

function IconAccountBalanceWallet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountBalanceWallet {
	return new IconAccountBalanceWallet($size, $fill, $iconTypeWeight);
}

function IconAccountBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountBox {
	return new IconAccountBox($size, $fill, $iconTypeWeight);
}

function IconAccountChild(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountChild {
	return new IconAccountChild($size, $fill, $iconTypeWeight);
}

function IconAccountChildInvert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountChildInvert {
	return new IconAccountChildInvert($size, $fill, $iconTypeWeight);
}

function IconAccountCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountCircle {
	return new IconAccountCircle($size, $fill, $iconTypeWeight);
}

function IconAccountCircleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountCircleOff {
	return new IconAccountCircleOff($size, $fill, $iconTypeWeight);
}

function IconAccountTree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAccountTree {
	return new IconAccountTree($size, $fill, $iconTypeWeight);
}

function IconActionKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconActionKey {
	return new IconActionKey($size, $fill, $iconTypeWeight);
}

function IconActivityZone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconActivityZone {
	return new IconActivityZone($size, $fill, $iconTypeWeight);
}

function IconAcUnit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAcUnit {
	return new IconAcUnit($size, $fill, $iconTypeWeight);
}

function IconAcute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAcute {
	return new IconAcute($size, $fill, $iconTypeWeight);
}

function IconAd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAd {
	return new IconAd($size, $fill, $iconTypeWeight);
}

function IconAdaptiveAudioMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdaptiveAudioMic {
	return new IconAdaptiveAudioMic($size, $fill, $iconTypeWeight);
}

function IconAdaptiveAudioMicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdaptiveAudioMicOff {
	return new IconAdaptiveAudioMicOff($size, $fill, $iconTypeWeight);
}

function IconAdb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdb {
	return new IconAdb($size, $fill, $iconTypeWeight);
}

function IconAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdd {
	return new IconAdd($size, $fill, $iconTypeWeight);
}

function IconAdd2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdd2 {
	return new IconAdd2($size, $fill, $iconTypeWeight);
}

function IconAddAd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddAd {
	return new IconAddAd($size, $fill, $iconTypeWeight);
}

function IconAddAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddAlert {
	return new IconAddAlert($size, $fill, $iconTypeWeight);
}

function IconAddAPhoto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddAPhoto {
	return new IconAddAPhoto($size, $fill, $iconTypeWeight);
}

function IconAddBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddBox {
	return new IconAddBox($size, $fill, $iconTypeWeight);
}

function IconAddBusiness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddBusiness {
	return new IconAddBusiness($size, $fill, $iconTypeWeight);
}

function IconAddCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddCall {
	return new IconAddCall($size, $fill, $iconTypeWeight);
}

function IconAddCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddCard {
	return new IconAddCard($size, $fill, $iconTypeWeight);
}

function IconAddChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddChart {
	return new IconAddChart($size, $fill, $iconTypeWeight);
}

function IconAddCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddCircle {
	return new IconAddCircle($size, $fill, $iconTypeWeight);
}

function IconAddColumnLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddColumnLeft {
	return new IconAddColumnLeft($size, $fill, $iconTypeWeight);
}

function IconAddColumnRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddColumnRight {
	return new IconAddColumnRight($size, $fill, $iconTypeWeight);
}

function IconAddComment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddComment {
	return new IconAddComment($size, $fill, $iconTypeWeight);
}

function IconAddDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddDiamond {
	return new IconAddDiamond($size, $fill, $iconTypeWeight);
}

function IconAddHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddHome {
	return new IconAddHome($size, $fill, $iconTypeWeight);
}

function IconAddHomeWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddHomeWork {
	return new IconAddHomeWork($size, $fill, $iconTypeWeight);
}

function IconAddLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddLink {
	return new IconAddLink($size, $fill, $iconTypeWeight);
}

function IconAddLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddLocation {
	return new IconAddLocation($size, $fill, $iconTypeWeight);
}

function IconAddLocationAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddLocationAlt {
	return new IconAddLocationAlt($size, $fill, $iconTypeWeight);
}

function IconAddModerator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddModerator {
	return new IconAddModerator($size, $fill, $iconTypeWeight);
}

function IconAddNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddNotes {
	return new IconAddNotes($size, $fill, $iconTypeWeight);
}

function IconAddPhotoAlternate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddPhotoAlternate {
	return new IconAddPhotoAlternate($size, $fill, $iconTypeWeight);
}

function IconAddReaction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddReaction {
	return new IconAddReaction($size, $fill, $iconTypeWeight);
}

function IconAddRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddRoad {
	return new IconAddRoad($size, $fill, $iconTypeWeight);
}

function IconAddRowAbove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddRowAbove {
	return new IconAddRowAbove($size, $fill, $iconTypeWeight);
}

function IconAddRowBelow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddRowBelow {
	return new IconAddRowBelow($size, $fill, $iconTypeWeight);
}

function IconAddShoppingCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddShoppingCart {
	return new IconAddShoppingCart($size, $fill, $iconTypeWeight);
}

function IconAddTask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddTask {
	return new IconAddTask($size, $fill, $iconTypeWeight);
}

function IconAddToDrive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddToDrive {
	return new IconAddToDrive($size, $fill, $iconTypeWeight);
}

function IconAddToHomeScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddToHomeScreen {
	return new IconAddToHomeScreen($size, $fill, $iconTypeWeight);
}

function IconAddToQueue(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddToQueue {
	return new IconAddToQueue($size, $fill, $iconTypeWeight);
}

function IconAddTriangle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAddTriangle {
	return new IconAddTriangle($size, $fill, $iconTypeWeight);
}

function IconAdfScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdfScanner {
	return new IconAdfScanner($size, $fill, $iconTypeWeight);
}

function IconAdGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdGroup {
	return new IconAdGroup($size, $fill, $iconTypeWeight);
}

function IconAdGroupOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdGroupOff {
	return new IconAdGroupOff($size, $fill, $iconTypeWeight);
}

function IconAdjust(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdjust {
	return new IconAdjust($size, $fill, $iconTypeWeight);
}

function IconAdminMeds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdminMeds {
	return new IconAdminMeds($size, $fill, $iconTypeWeight);
}

function IconAdminPanelSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdminPanelSettings {
	return new IconAdminPanelSettings($size, $fill, $iconTypeWeight);
}

function IconAdOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdOff {
	return new IconAdOff($size, $fill, $iconTypeWeight);
}

function IconAdsClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdsClick {
	return new IconAdsClick($size, $fill, $iconTypeWeight);
}

function IconAdUnits(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAdUnits {
	return new IconAdUnits($size, $fill, $iconTypeWeight);
}

function IconAgender(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAgender {
	return new IconAgender($size, $fill, $iconTypeWeight);
}

function IconAgriculture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAgriculture {
	return new IconAgriculture($size, $fill, $iconTypeWeight);
}

function IconAir(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAir {
	return new IconAir($size, $fill, $iconTypeWeight);
}

function IconAirFreshener(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirFreshener {
	return new IconAirFreshener($size, $fill, $iconTypeWeight);
}

function IconAirlines(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlines {
	return new IconAirlines($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatFlat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatFlat {
	return new IconAirlineSeatFlat($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatFlatAngled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatFlatAngled {
	return new IconAirlineSeatFlatAngled($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatIndividualSuite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatIndividualSuite {
	return new IconAirlineSeatIndividualSuite($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatLegroomExtra(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatLegroomExtra {
	return new IconAirlineSeatLegroomExtra($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatLegroomNormal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatLegroomNormal {
	return new IconAirlineSeatLegroomNormal($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatLegroomReduced(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatLegroomReduced {
	return new IconAirlineSeatLegroomReduced($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatReclineExtra(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatReclineExtra {
	return new IconAirlineSeatReclineExtra($size, $fill, $iconTypeWeight);
}

function IconAirlineSeatReclineNormal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineSeatReclineNormal {
	return new IconAirlineSeatReclineNormal($size, $fill, $iconTypeWeight);
}

function IconAirlineStops(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirlineStops {
	return new IconAirlineStops($size, $fill, $iconTypeWeight);
}

function IconAirplanemodeInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirplanemodeInactive {
	return new IconAirplanemodeInactive($size, $fill, $iconTypeWeight);
}

function IconAirplaneTicket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirplaneTicket {
	return new IconAirplaneTicket($size, $fill, $iconTypeWeight);
}

function IconAirplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirplay {
	return new IconAirplay($size, $fill, $iconTypeWeight);
}

function IconAirportShuttle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirportShuttle {
	return new IconAirportShuttle($size, $fill, $iconTypeWeight);
}

function IconAirPurifier(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirPurifier {
	return new IconAirPurifier($size, $fill, $iconTypeWeight);
}

function IconAirPurifierGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirPurifierGen {
	return new IconAirPurifierGen($size, $fill, $iconTypeWeight);
}

function IconAirware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirware {
	return new IconAirware($size, $fill, $iconTypeWeight);
}

function IconAirwave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAirwave {
	return new IconAirwave($size, $fill, $iconTypeWeight);
}

function IconAlarm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarm {
	return new IconAlarm($size, $fill, $iconTypeWeight);
}

function IconAlarmAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmAdd {
	return new IconAlarmAdd($size, $fill, $iconTypeWeight);
}

function IconAlarmOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmOff {
	return new IconAlarmOff($size, $fill, $iconTypeWeight);
}

function IconAlarmOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmOn {
	return new IconAlarmOn($size, $fill, $iconTypeWeight);
}

function IconAlarmSmartWake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlarmSmartWake {
	return new IconAlarmSmartWake($size, $fill, $iconTypeWeight);
}

function IconAlbum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlbum {
	return new IconAlbum($size, $fill, $iconTypeWeight);
}

function IconAlignCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignCenter {
	return new IconAlignCenter($size, $fill, $iconTypeWeight);
}

function IconAlignEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignEnd {
	return new IconAlignEnd($size, $fill, $iconTypeWeight);
}

function IconAlignFlexCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignFlexCenter {
	return new IconAlignFlexCenter($size, $fill, $iconTypeWeight);
}

function IconAlignFlexEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignFlexEnd {
	return new IconAlignFlexEnd($size, $fill, $iconTypeWeight);
}

function IconAlignFlexStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignFlexStart {
	return new IconAlignFlexStart($size, $fill, $iconTypeWeight);
}

function IconAlignHorizontalCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignHorizontalCenter {
	return new IconAlignHorizontalCenter($size, $fill, $iconTypeWeight);
}

function IconAlignHorizontalLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignHorizontalLeft {
	return new IconAlignHorizontalLeft($size, $fill, $iconTypeWeight);
}

function IconAlignHorizontalRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignHorizontalRight {
	return new IconAlignHorizontalRight($size, $fill, $iconTypeWeight);
}

function IconAlignItemsStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignItemsStretch {
	return new IconAlignItemsStretch($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyCenter {
	return new IconAlignJustifyCenter($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyFlexEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyFlexEnd {
	return new IconAlignJustifyFlexEnd($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyFlexStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyFlexStart {
	return new IconAlignJustifyFlexStart($size, $fill, $iconTypeWeight);
}

function IconAlignJustifySpaceAround(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifySpaceAround {
	return new IconAlignJustifySpaceAround($size, $fill, $iconTypeWeight);
}

function IconAlignJustifySpaceBetween(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifySpaceBetween {
	return new IconAlignJustifySpaceBetween($size, $fill, $iconTypeWeight);
}

function IconAlignJustifySpaceEven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifySpaceEven {
	return new IconAlignJustifySpaceEven($size, $fill, $iconTypeWeight);
}

function IconAlignJustifyStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignJustifyStretch {
	return new IconAlignJustifyStretch($size, $fill, $iconTypeWeight);
}

function IconAlignSelfStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSelfStretch {
	return new IconAlignSelfStretch($size, $fill, $iconTypeWeight);
}

function IconAlignSpaceAround(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSpaceAround {
	return new IconAlignSpaceAround($size, $fill, $iconTypeWeight);
}

function IconAlignSpaceBetween(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSpaceBetween {
	return new IconAlignSpaceBetween($size, $fill, $iconTypeWeight);
}

function IconAlignSpaceEven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignSpaceEven {
	return new IconAlignSpaceEven($size, $fill, $iconTypeWeight);
}

function IconAlignStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignStart {
	return new IconAlignStart($size, $fill, $iconTypeWeight);
}

function IconAlignStretch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignStretch {
	return new IconAlignStretch($size, $fill, $iconTypeWeight);
}

function IconAlignVerticalBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignVerticalBottom {
	return new IconAlignVerticalBottom($size, $fill, $iconTypeWeight);
}

function IconAlignVerticalCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignVerticalCenter {
	return new IconAlignVerticalCenter($size, $fill, $iconTypeWeight);
}

function IconAlignVerticalTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlignVerticalTop {
	return new IconAlignVerticalTop($size, $fill, $iconTypeWeight);
}

function IconAllergies(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllergies {
	return new IconAllergies($size, $fill, $iconTypeWeight);
}

function IconAllergy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllergy {
	return new IconAllergy($size, $fill, $iconTypeWeight);
}

function IconAllInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllInbox {
	return new IconAllInbox($size, $fill, $iconTypeWeight);
}

function IconAllInclusive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllInclusive {
	return new IconAllInclusive($size, $fill, $iconTypeWeight);
}

function IconAllMatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllMatch {
	return new IconAllMatch($size, $fill, $iconTypeWeight);
}

function IconAllOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAllOut {
	return new IconAllOut($size, $fill, $iconTypeWeight);
}

function IconAlternateEmail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAlternateEmail {
	return new IconAlternateEmail($size, $fill, $iconTypeWeight);
}

function IconAltitude(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAltitude {
	return new IconAltitude($size, $fill, $iconTypeWeight);
}

function IconAltRoute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAltRoute {
	return new IconAltRoute($size, $fill, $iconTypeWeight);
}

function IconAmbulance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAmbulance {
	return new IconAmbulance($size, $fill, $iconTypeWeight);
}

function IconAmend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAmend {
	return new IconAmend($size, $fill, $iconTypeWeight);
}

function IconAmpStories(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAmpStories {
	return new IconAmpStories($size, $fill, $iconTypeWeight);
}

function IconAnalytics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnalytics {
	return new IconAnalytics($size, $fill, $iconTypeWeight);
}

function IconAnchor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnchor {
	return new IconAnchor($size, $fill, $iconTypeWeight);
}

function IconAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAndroid {
	return new IconAndroid($size, $fill, $iconTypeWeight);
}

function IconAnimatedImages(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnimatedImages {
	return new IconAnimatedImages($size, $fill, $iconTypeWeight);
}

function IconAnimation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAnimation {
	return new IconAnimation($size, $fill, $iconTypeWeight);
}

function IconAod(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAod {
	return new IconAod($size, $fill, $iconTypeWeight);
}

function IconAodTablet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAodTablet {
	return new IconAodTablet($size, $fill, $iconTypeWeight);
}

function IconAodWatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAodWatch {
	return new IconAodWatch($size, $fill, $iconTypeWeight);
}

function IconApartment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApartment {
	return new IconApartment($size, $fill, $iconTypeWeight);
}

function IconApi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApi {
	return new IconApi($size, $fill, $iconTypeWeight);
}

function IconApkDocument(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApkDocument {
	return new IconApkDocument($size, $fill, $iconTypeWeight);
}

function IconApkInstall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApkInstall {
	return new IconApkInstall($size, $fill, $iconTypeWeight);
}

function IconApparel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApparel {
	return new IconApparel($size, $fill, $iconTypeWeight);
}

function IconAppBadging(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppBadging {
	return new IconAppBadging($size, $fill, $iconTypeWeight);
}

function IconAppBlocking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppBlocking {
	return new IconAppBlocking($size, $fill, $iconTypeWeight);
}

function IconAppPromo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppPromo {
	return new IconAppPromo($size, $fill, $iconTypeWeight);
}

function IconAppRegistration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppRegistration {
	return new IconAppRegistration($size, $fill, $iconTypeWeight);
}

function IconApproval(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApproval {
	return new IconApproval($size, $fill, $iconTypeWeight);
}

function IconApprovalDelegation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApprovalDelegation {
	return new IconApprovalDelegation($size, $fill, $iconTypeWeight);
}

function IconApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconApps {
	return new IconApps($size, $fill, $iconTypeWeight);
}

function IconAppShortcut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppShortcut {
	return new IconAppShortcut($size, $fill, $iconTypeWeight);
}

function IconAppsOutage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAppsOutage {
	return new IconAppsOutage($size, $fill, $iconTypeWeight);
}

function IconAq(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAq {
	return new IconAq($size, $fill, $iconTypeWeight);
}

function IconAqIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAqIndoor {
	return new IconAqIndoor($size, $fill, $iconTypeWeight);
}

function IconArchitecture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArchitecture {
	return new IconArchitecture($size, $fill, $iconTypeWeight);
}

function IconArchive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArchive {
	return new IconArchive($size, $fill, $iconTypeWeight);
}

function IconAreaChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAreaChart {
	return new IconAreaChart($size, $fill, $iconTypeWeight);
}

function IconArmingCountdown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArmingCountdown {
	return new IconArmingCountdown($size, $fill, $iconTypeWeight);
}

function IconArOnYou(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArOnYou {
	return new IconArOnYou($size, $fill, $iconTypeWeight);
}

function IconArrowAndEdge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowAndEdge {
	return new IconArrowAndEdge($size, $fill, $iconTypeWeight);
}

function IconArrowBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBack {
	return new IconArrowBack($size, $fill, $iconTypeWeight);
}

function IconArrowBack2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBack2 {
	return new IconArrowBack2($size, $fill, $iconTypeWeight);
}

function IconArrowBackIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBackIos {
	return new IconArrowBackIos($size, $fill, $iconTypeWeight);
}

function IconArrowBackIosNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowBackIosNew {
	return new IconArrowBackIosNew($size, $fill, $iconTypeWeight);
}

function IconArrowCircleDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleDown {
	return new IconArrowCircleDown($size, $fill, $iconTypeWeight);
}

function IconArrowCircleLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleLeft {
	return new IconArrowCircleLeft($size, $fill, $iconTypeWeight);
}

function IconArrowCircleRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleRight {
	return new IconArrowCircleRight($size, $fill, $iconTypeWeight);
}

function IconArrowCircleUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCircleUp {
	return new IconArrowCircleUp($size, $fill, $iconTypeWeight);
}

function IconArrowCoolDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowCoolDown {
	return new IconArrowCoolDown($size, $fill, $iconTypeWeight);
}

function IconArrowDownward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDownward {
	return new IconArrowDownward($size, $fill, $iconTypeWeight);
}

function IconArrowDownwardAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDownwardAlt {
	return new IconArrowDownwardAlt($size, $fill, $iconTypeWeight);
}

function IconArrowDropDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDropDown {
	return new IconArrowDropDown($size, $fill, $iconTypeWeight);
}

function IconArrowDropDownCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDropDownCircle {
	return new IconArrowDropDownCircle($size, $fill, $iconTypeWeight);
}

function IconArrowDropUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowDropUp {
	return new IconArrowDropUp($size, $fill, $iconTypeWeight);
}

function IconArrowForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowForward {
	return new IconArrowForward($size, $fill, $iconTypeWeight);
}

function IconArrowForwardIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowForwardIos {
	return new IconArrowForwardIos($size, $fill, $iconTypeWeight);
}

function IconArrowInsert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowInsert {
	return new IconArrowInsert($size, $fill, $iconTypeWeight);
}

function IconArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowLeft {
	return new IconArrowLeft($size, $fill, $iconTypeWeight);
}

function IconArrowLeftAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowLeftAlt {
	return new IconArrowLeftAlt($size, $fill, $iconTypeWeight);
}

function IconArrowMenuClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowMenuClose {
	return new IconArrowMenuClose($size, $fill, $iconTypeWeight);
}

function IconArrowMenuOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowMenuOpen {
	return new IconArrowMenuOpen($size, $fill, $iconTypeWeight);
}

function IconArrowOrEdge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowOrEdge {
	return new IconArrowOrEdge($size, $fill, $iconTypeWeight);
}

function IconArrowOutward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowOutward {
	return new IconArrowOutward($size, $fill, $iconTypeWeight);
}

function IconArrowRange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowRange {
	return new IconArrowRange($size, $fill, $iconTypeWeight);
}

function IconArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowRight {
	return new IconArrowRight($size, $fill, $iconTypeWeight);
}

function IconArrowRightAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowRightAlt {
	return new IconArrowRightAlt($size, $fill, $iconTypeWeight);
}

function IconArrowSelectorTool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowSelectorTool {
	return new IconArrowSelectorTool($size, $fill, $iconTypeWeight);
}

function IconArrowsInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsInput {
	return new IconArrowsInput($size, $fill, $iconTypeWeight);
}

function IconArrowsMoreDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsMoreDown {
	return new IconArrowsMoreDown($size, $fill, $iconTypeWeight);
}

function IconArrowsMoreUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsMoreUp {
	return new IconArrowsMoreUp($size, $fill, $iconTypeWeight);
}

function IconArrowsOutput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsOutput {
	return new IconArrowsOutput($size, $fill, $iconTypeWeight);
}

function IconArrowsOutward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowsOutward {
	return new IconArrowsOutward($size, $fill, $iconTypeWeight);
}

function IconArrowSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowSplit {
	return new IconArrowSplit($size, $fill, $iconTypeWeight);
}

function IconArrowTopLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowTopLeft {
	return new IconArrowTopLeft($size, $fill, $iconTypeWeight);
}

function IconArrowTopRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowTopRight {
	return new IconArrowTopRight($size, $fill, $iconTypeWeight);
}

function IconArrowUploadProgress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUploadProgress {
	return new IconArrowUploadProgress($size, $fill, $iconTypeWeight);
}

function IconArrowUploadReady(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUploadReady {
	return new IconArrowUploadReady($size, $fill, $iconTypeWeight);
}

function IconArrowUpward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUpward {
	return new IconArrowUpward($size, $fill, $iconTypeWeight);
}

function IconArrowUpwardAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowUpwardAlt {
	return new IconArrowUpwardAlt($size, $fill, $iconTypeWeight);
}

function IconArrowWarmUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArrowWarmUp {
	return new IconArrowWarmUp($size, $fill, $iconTypeWeight);
}

function IconArStickers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArStickers {
	return new IconArStickers($size, $fill, $iconTypeWeight);
}

function IconArticle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArticle {
	return new IconArticle($size, $fill, $iconTypeWeight);
}

function IconArticleShortcut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArticleShortcut {
	return new IconArticleShortcut($size, $fill, $iconTypeWeight);
}

function IconArtist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArtist {
	return new IconArtist($size, $fill, $iconTypeWeight);
}

function IconArtTrack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconArtTrack {
	return new IconArtTrack($size, $fill, $iconTypeWeight);
}

function IconAspectRatio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAspectRatio {
	return new IconAspectRatio($size, $fill, $iconTypeWeight);
}

function IconAssignment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignment {
	return new IconAssignment($size, $fill, $iconTypeWeight);
}

function IconAssignmentAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentAdd {
	return new IconAssignmentAdd($size, $fill, $iconTypeWeight);
}

function IconAssignmentInd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentInd {
	return new IconAssignmentInd($size, $fill, $iconTypeWeight);
}

function IconAssignmentLate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentLate {
	return new IconAssignmentLate($size, $fill, $iconTypeWeight);
}

function IconAssignmentReturn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentReturn {
	return new IconAssignmentReturn($size, $fill, $iconTypeWeight);
}

function IconAssignmentReturned(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentReturned {
	return new IconAssignmentReturned($size, $fill, $iconTypeWeight);
}

function IconAssignmentTurnedIn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssignmentTurnedIn {
	return new IconAssignmentTurnedIn($size, $fill, $iconTypeWeight);
}

function IconAssistantDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantDevice {
	return new IconAssistantDevice($size, $fill, $iconTypeWeight);
}

function IconAssistantDirection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantDirection {
	return new IconAssistantDirection($size, $fill, $iconTypeWeight);
}

function IconAssistantNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantNavigation {
	return new IconAssistantNavigation($size, $fill, $iconTypeWeight);
}

function IconAssistantOnHub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistantOnHub {
	return new IconAssistantOnHub($size, $fill, $iconTypeWeight);
}

function IconAssistWalker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssistWalker {
	return new IconAssistWalker($size, $fill, $iconTypeWeight);
}

function IconAssuredWorkload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAssuredWorkload {
	return new IconAssuredWorkload($size, $fill, $iconTypeWeight);
}

function IconAsterisk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAsterisk {
	return new IconAsterisk($size, $fill, $iconTypeWeight);
}

function IconAtm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAtm {
	return new IconAtm($size, $fill, $iconTypeWeight);
}

function IconAtr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAtr {
	return new IconAtr($size, $fill, $iconTypeWeight);
}

function IconAttachEmail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachEmail {
	return new IconAttachEmail($size, $fill, $iconTypeWeight);
}

function IconAttachFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachFile {
	return new IconAttachFile($size, $fill, $iconTypeWeight);
}

function IconAttachFileAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachFileAdd {
	return new IconAttachFileAdd($size, $fill, $iconTypeWeight);
}

function IconAttachFileOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachFileOff {
	return new IconAttachFileOff($size, $fill, $iconTypeWeight);
}

function IconAttachment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachment {
	return new IconAttachment($size, $fill, $iconTypeWeight);
}

function IconAttachMoney(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttachMoney {
	return new IconAttachMoney($size, $fill, $iconTypeWeight);
}

function IconAttractions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttractions {
	return new IconAttractions($size, $fill, $iconTypeWeight);
}

function IconAttribution(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAttribution {
	return new IconAttribution($size, $fill, $iconTypeWeight);
}

function IconAudioDescription(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAudioDescription {
	return new IconAudioDescription($size, $fill, $iconTypeWeight);
}

function IconAudioFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAudioFile {
	return new IconAudioFile($size, $fill, $iconTypeWeight);
}

function IconAudioVideoReceiver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAudioVideoReceiver {
	return new IconAudioVideoReceiver($size, $fill, $iconTypeWeight);
}

function IconAutoAwesomeMosaic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoAwesomeMosaic {
	return new IconAutoAwesomeMosaic($size, $fill, $iconTypeWeight);
}

function IconAutoAwesomeMotion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoAwesomeMotion {
	return new IconAutoAwesomeMotion($size, $fill, $iconTypeWeight);
}

function IconAutoDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoDelete {
	return new IconAutoDelete($size, $fill, $iconTypeWeight);
}

function IconAutofpsSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutofpsSelect {
	return new IconAutofpsSelect($size, $fill, $iconTypeWeight);
}

function IconAutomation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutomation {
	return new IconAutomation($size, $fill, $iconTypeWeight);
}

function IconAutopause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutopause {
	return new IconAutopause($size, $fill, $iconTypeWeight);
}

function IconAutoplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoplay {
	return new IconAutoplay($size, $fill, $iconTypeWeight);
}

function IconAutoReadPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoReadPause {
	return new IconAutoReadPause($size, $fill, $iconTypeWeight);
}

function IconAutoReadPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoReadPlay {
	return new IconAutoReadPlay($size, $fill, $iconTypeWeight);
}

function IconAutorenew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutorenew {
	return new IconAutorenew($size, $fill, $iconTypeWeight);
}

function IconAutostop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutostop {
	return new IconAutostop($size, $fill, $iconTypeWeight);
}

function IconAutoStories(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoStories {
	return new IconAutoStories($size, $fill, $iconTypeWeight);
}

function IconAutoTowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoTowing {
	return new IconAutoTowing($size, $fill, $iconTypeWeight);
}

function IconAutoTransmission(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAutoTransmission {
	return new IconAutoTransmission($size, $fill, $iconTypeWeight);
}

function IconAv1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAv1 {
	return new IconAv1($size, $fill, $iconTypeWeight);
}

function IconAvc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvc {
	return new IconAvc($size, $fill, $iconTypeWeight);
}

function IconAvgPace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvgPace {
	return new IconAvgPace($size, $fill, $iconTypeWeight);
}

function IconAvgTime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvgTime {
	return new IconAvgTime($size, $fill, $iconTypeWeight);
}

function IconAvTimer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAvTimer {
	return new IconAvTimer($size, $fill, $iconTypeWeight);
}

function IconAwardStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAwardStar {
	return new IconAwardStar($size, $fill, $iconTypeWeight);
}

function IconAzm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconAzm {
	return new IconAzm($size, $fill, $iconTypeWeight);
}

function IconBabyChangingStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBabyChangingStation {
	return new IconBabyChangingStation($size, $fill, $iconTypeWeight);
}

function IconBackgroundDotLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundDotLarge {
	return new IconBackgroundDotLarge($size, $fill, $iconTypeWeight);
}

function IconBackgroundDotSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundDotSmall {
	return new IconBackgroundDotSmall($size, $fill, $iconTypeWeight);
}

function IconBackgroundGridSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundGridSmall {
	return new IconBackgroundGridSmall($size, $fill, $iconTypeWeight);
}

function IconBackgroundReplace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackgroundReplace {
	return new IconBackgroundReplace($size, $fill, $iconTypeWeight);
}

function IconBackHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackHand {
	return new IconBackHand($size, $fill, $iconTypeWeight);
}

function IconBacklightHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBacklightHigh {
	return new IconBacklightHigh($size, $fill, $iconTypeWeight);
}

function IconBacklightHighOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBacklightHighOff {
	return new IconBacklightHighOff($size, $fill, $iconTypeWeight);
}

function IconBacklightLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBacklightLow {
	return new IconBacklightLow($size, $fill, $iconTypeWeight);
}

function IconBackpack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackpack {
	return new IconBackpack($size, $fill, $iconTypeWeight);
}

function IconBackspace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackspace {
	return new IconBackspace($size, $fill, $iconTypeWeight);
}

function IconBackToTab(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackToTab {
	return new IconBackToTab($size, $fill, $iconTypeWeight);
}

function IconBackup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackup {
	return new IconBackup($size, $fill, $iconTypeWeight);
}

function IconBackupTable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBackupTable {
	return new IconBackupTable($size, $fill, $iconTypeWeight);
}

function IconBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBadge {
	return new IconBadge($size, $fill, $iconTypeWeight);
}

function IconBadgeCriticalBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBadgeCriticalBattery {
	return new IconBadgeCriticalBattery($size, $fill, $iconTypeWeight);
}

function IconBakeryDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBakeryDining {
	return new IconBakeryDining($size, $fill, $iconTypeWeight);
}

function IconBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBalance {
	return new IconBalance($size, $fill, $iconTypeWeight);
}

function IconBalcony(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBalcony {
	return new IconBalcony($size, $fill, $iconTypeWeight);
}

function IconBallot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBallot {
	return new IconBallot($size, $fill, $iconTypeWeight);
}

function IconBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarChart {
	return new IconBarChart($size, $fill, $iconTypeWeight);
}

function IconBarChart4Bars(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarChart4Bars {
	return new IconBarChart4Bars($size, $fill, $iconTypeWeight);
}

function IconBarChartOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarChartOff {
	return new IconBarChartOff($size, $fill, $iconTypeWeight);
}

function IconBarcode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarcode {
	return new IconBarcode($size, $fill, $iconTypeWeight);
}

function IconBarcodeReader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarcodeReader {
	return new IconBarcodeReader($size, $fill, $iconTypeWeight);
}

function IconBarcodeScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarcodeScanner {
	return new IconBarcodeScanner($size, $fill, $iconTypeWeight);
}

function IconBarefoot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBarefoot {
	return new IconBarefoot($size, $fill, $iconTypeWeight);
}

function IconBatchPrediction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatchPrediction {
	return new IconBatchPrediction($size, $fill, $iconTypeWeight);
}

function IconBathOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathOutdoor {
	return new IconBathOutdoor($size, $fill, $iconTypeWeight);
}

function IconBathPrivate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathPrivate {
	return new IconBathPrivate($size, $fill, $iconTypeWeight);
}

function IconBathPublicLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathPublicLarge {
	return new IconBathPublicLarge($size, $fill, $iconTypeWeight);
}

function IconBathroom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathroom {
	return new IconBathroom($size, $fill, $iconTypeWeight);
}

function IconBathtub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBathtub {
	return new IconBathtub($size, $fill, $iconTypeWeight);
}

function IconBattery0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery0Bar {
	return new IconBattery0Bar($size, $fill, $iconTypeWeight);
}

function IconBattery1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery1Bar {
	return new IconBattery1Bar($size, $fill, $iconTypeWeight);
}

function IconBattery2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery2Bar {
	return new IconBattery2Bar($size, $fill, $iconTypeWeight);
}

function IconBattery3Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery3Bar {
	return new IconBattery3Bar($size, $fill, $iconTypeWeight);
}

function IconBattery4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery4Bar {
	return new IconBattery4Bar($size, $fill, $iconTypeWeight);
}

function IconBattery5Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery5Bar {
	return new IconBattery5Bar($size, $fill, $iconTypeWeight);
}

function IconBattery6Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBattery6Bar {
	return new IconBattery6Bar($size, $fill, $iconTypeWeight);
}

function IconBatteryAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryAlert {
	return new IconBatteryAlert($size, $fill, $iconTypeWeight);
}

function IconBatteryChange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryChange {
	return new IconBatteryChange($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging20(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging20 {
	return new IconBatteryCharging20($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging30(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging30 {
	return new IconBatteryCharging30($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging50(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging50 {
	return new IconBatteryCharging50($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging60(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging60 {
	return new IconBatteryCharging60($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging80(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging80 {
	return new IconBatteryCharging80($size, $fill, $iconTypeWeight);
}

function IconBatteryCharging90(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryCharging90 {
	return new IconBatteryCharging90($size, $fill, $iconTypeWeight);
}

function IconBatteryChargingFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryChargingFull {
	return new IconBatteryChargingFull($size, $fill, $iconTypeWeight);
}

function IconBatteryError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryError {
	return new IconBatteryError($size, $fill, $iconTypeWeight);
}

function IconBatteryFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryFull {
	return new IconBatteryFull($size, $fill, $iconTypeWeight);
}

function IconBatteryFullAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryFullAlt {
	return new IconBatteryFullAlt($size, $fill, $iconTypeWeight);
}

function IconBatteryHoriz000(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryHoriz000 {
	return new IconBatteryHoriz000($size, $fill, $iconTypeWeight);
}

function IconBatteryHoriz050(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryHoriz050 {
	return new IconBatteryHoriz050($size, $fill, $iconTypeWeight);
}

function IconBatteryHoriz075(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryHoriz075 {
	return new IconBatteryHoriz075($size, $fill, $iconTypeWeight);
}

function IconBatteryLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryLow {
	return new IconBatteryLow($size, $fill, $iconTypeWeight);
}

function IconBatteryPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryPlus {
	return new IconBatteryPlus($size, $fill, $iconTypeWeight);
}

function IconBatteryProfile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryProfile {
	return new IconBatteryProfile($size, $fill, $iconTypeWeight);
}

function IconBatterySaver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatterySaver {
	return new IconBatterySaver($size, $fill, $iconTypeWeight);
}

function IconBatteryShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryShare {
	return new IconBatteryShare($size, $fill, $iconTypeWeight);
}

function IconBatteryStatusGood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryStatusGood {
	return new IconBatteryStatusGood($size, $fill, $iconTypeWeight);
}

function IconBatteryUnknown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryUnknown {
	return new IconBatteryUnknown($size, $fill, $iconTypeWeight);
}

function IconBatteryVeryLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBatteryVeryLow {
	return new IconBatteryVeryLow($size, $fill, $iconTypeWeight);
}

function IconBeachAccess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBeachAccess {
	return new IconBeachAccess($size, $fill, $iconTypeWeight);
}

function IconBed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBed {
	return new IconBed($size, $fill, $iconTypeWeight);
}

function IconBedroomBaby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedroomBaby {
	return new IconBedroomBaby($size, $fill, $iconTypeWeight);
}

function IconBedroomChild(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedroomChild {
	return new IconBedroomChild($size, $fill, $iconTypeWeight);
}

function IconBedroomParent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedroomParent {
	return new IconBedroomParent($size, $fill, $iconTypeWeight);
}

function IconBedtime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedtime {
	return new IconBedtime($size, $fill, $iconTypeWeight);
}

function IconBedtimeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBedtimeOff {
	return new IconBedtimeOff($size, $fill, $iconTypeWeight);
}

function IconBeenhere(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBeenhere {
	return new IconBeenhere($size, $fill, $iconTypeWeight);
}

function IconBento(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBento {
	return new IconBento($size, $fill, $iconTypeWeight);
}

function IconBia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBia {
	return new IconBia($size, $fill, $iconTypeWeight);
}

function IconBidLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBidLandscape {
	return new IconBidLandscape($size, $fill, $iconTypeWeight);
}

function IconBidLandscapeDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBidLandscapeDisabled {
	return new IconBidLandscapeDisabled($size, $fill, $iconTypeWeight);
}

function IconBigtopUpdates(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBigtopUpdates {
	return new IconBigtopUpdates($size, $fill, $iconTypeWeight);
}

function IconBikeDock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBikeDock {
	return new IconBikeDock($size, $fill, $iconTypeWeight);
}

function IconBikeLane(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBikeLane {
	return new IconBikeLane($size, $fill, $iconTypeWeight);
}

function IconBikeScooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBikeScooter {
	return new IconBikeScooter($size, $fill, $iconTypeWeight);
}

function IconBiotech(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBiotech {
	return new IconBiotech($size, $fill, $iconTypeWeight);
}

function IconBlanket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlanket {
	return new IconBlanket($size, $fill, $iconTypeWeight);
}

function IconBlender(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlender {
	return new IconBlender($size, $fill, $iconTypeWeight);
}

function IconBlind(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlind {
	return new IconBlind($size, $fill, $iconTypeWeight);
}

function IconBlinds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlinds {
	return new IconBlinds($size, $fill, $iconTypeWeight);
}

function IconBlindsClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlindsClosed {
	return new IconBlindsClosed($size, $fill, $iconTypeWeight);
}

function IconBlock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlock {
	return new IconBlock($size, $fill, $iconTypeWeight);
}

function IconBloodPressure(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBloodPressure {
	return new IconBloodPressure($size, $fill, $iconTypeWeight);
}

function IconBloodtype(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBloodtype {
	return new IconBloodtype($size, $fill, $iconTypeWeight);
}

function IconBluetooth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetooth {
	return new IconBluetooth($size, $fill, $iconTypeWeight);
}

function IconBluetoothConnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothConnected {
	return new IconBluetoothConnected($size, $fill, $iconTypeWeight);
}

function IconBluetoothDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothDisabled {
	return new IconBluetoothDisabled($size, $fill, $iconTypeWeight);
}

function IconBluetoothDrive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothDrive {
	return new IconBluetoothDrive($size, $fill, $iconTypeWeight);
}

function IconBluetoothSearching(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBluetoothSearching {
	return new IconBluetoothSearching($size, $fill, $iconTypeWeight);
}

function IconBlurCircular(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurCircular {
	return new IconBlurCircular($size, $fill, $iconTypeWeight);
}

function IconBlurLinear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurLinear {
	return new IconBlurLinear($size, $fill, $iconTypeWeight);
}

function IconBlurMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurMedium {
	return new IconBlurMedium($size, $fill, $iconTypeWeight);
}

function IconBlurOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurOff {
	return new IconBlurOff($size, $fill, $iconTypeWeight);
}

function IconBlurOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurOn {
	return new IconBlurOn($size, $fill, $iconTypeWeight);
}

function IconBlurShort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBlurShort {
	return new IconBlurShort($size, $fill, $iconTypeWeight);
}

function IconBoatBus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoatBus {
	return new IconBoatBus($size, $fill, $iconTypeWeight);
}

function IconBoatRailway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoatRailway {
	return new IconBoatRailway($size, $fill, $iconTypeWeight);
}

function IconBodyFat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBodyFat {
	return new IconBodyFat($size, $fill, $iconTypeWeight);
}

function IconBodySystem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBodySystem {
	return new IconBodySystem($size, $fill, $iconTypeWeight);
}

function IconBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBolt {
	return new IconBolt($size, $fill, $iconTypeWeight);
}

function IconBomb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBomb {
	return new IconBomb($size, $fill, $iconTypeWeight);
}

function IconBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook {
	return new IconBook($size, $fill, $iconTypeWeight);
}

function IconBook2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook2 {
	return new IconBook2($size, $fill, $iconTypeWeight);
}

function IconBook3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook3 {
	return new IconBook3($size, $fill, $iconTypeWeight);
}

function IconBook4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook4 {
	return new IconBook4($size, $fill, $iconTypeWeight);
}

function IconBook4Spark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook4Spark {
	return new IconBook4Spark($size, $fill, $iconTypeWeight);
}

function IconBook5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook5 {
	return new IconBook5($size, $fill, $iconTypeWeight);
}

function IconBook6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBook6 {
	return new IconBook6($size, $fill, $iconTypeWeight);
}

function IconBookmark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmark {
	return new IconBookmark($size, $fill, $iconTypeWeight);
}

function IconBookmarkAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkAdd {
	return new IconBookmarkAdd($size, $fill, $iconTypeWeight);
}

function IconBookmarkAdded(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkAdded {
	return new IconBookmarkAdded($size, $fill, $iconTypeWeight);
}

function IconBookmarkBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkBag {
	return new IconBookmarkBag($size, $fill, $iconTypeWeight);
}

function IconBookmarkCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkCheck {
	return new IconBookmarkCheck($size, $fill, $iconTypeWeight);
}

function IconBookmarkFlag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkFlag {
	return new IconBookmarkFlag($size, $fill, $iconTypeWeight);
}

function IconBookmarkHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkHeart {
	return new IconBookmarkHeart($size, $fill, $iconTypeWeight);
}

function IconBookmarkManager(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkManager {
	return new IconBookmarkManager($size, $fill, $iconTypeWeight);
}

function IconBookmarkRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkRemove {
	return new IconBookmarkRemove($size, $fill, $iconTypeWeight);
}

function IconBookmarks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarks {
	return new IconBookmarks($size, $fill, $iconTypeWeight);
}

function IconBookmarkStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookmarkStar {
	return new IconBookmarkStar($size, $fill, $iconTypeWeight);
}

function IconBookOnline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookOnline {
	return new IconBookOnline($size, $fill, $iconTypeWeight);
}

function IconBookRibbon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBookRibbon {
	return new IconBookRibbon($size, $fill, $iconTypeWeight);
}

function IconBooksMoviesAndMusic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBooksMoviesAndMusic {
	return new IconBooksMoviesAndMusic($size, $fill, $iconTypeWeight);
}

function IconBorderAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderAll {
	return new IconBorderAll($size, $fill, $iconTypeWeight);
}

function IconBorderBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderBottom {
	return new IconBorderBottom($size, $fill, $iconTypeWeight);
}

function IconBorderClear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderClear {
	return new IconBorderClear($size, $fill, $iconTypeWeight);
}

function IconBorderColor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderColor {
	return new IconBorderColor($size, $fill, $iconTypeWeight);
}

function IconBorderHorizontal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderHorizontal {
	return new IconBorderHorizontal($size, $fill, $iconTypeWeight);
}

function IconBorderInner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderInner {
	return new IconBorderInner($size, $fill, $iconTypeWeight);
}

function IconBorderLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderLeft {
	return new IconBorderLeft($size, $fill, $iconTypeWeight);
}

function IconBorderOuter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderOuter {
	return new IconBorderOuter($size, $fill, $iconTypeWeight);
}

function IconBorderRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderRight {
	return new IconBorderRight($size, $fill, $iconTypeWeight);
}

function IconBorderStyle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderStyle {
	return new IconBorderStyle($size, $fill, $iconTypeWeight);
}

function IconBorderTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderTop {
	return new IconBorderTop($size, $fill, $iconTypeWeight);
}

function IconBorderVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorderVertical {
	return new IconBorderVertical($size, $fill, $iconTypeWeight);
}

function IconBorg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBorg {
	return new IconBorg($size, $fill, $iconTypeWeight);
}

function IconBottomAppBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomAppBar {
	return new IconBottomAppBar($size, $fill, $iconTypeWeight);
}

function IconBottomDrawer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomDrawer {
	return new IconBottomDrawer($size, $fill, $iconTypeWeight);
}

function IconBottomNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomNavigation {
	return new IconBottomNavigation($size, $fill, $iconTypeWeight);
}

function IconBottomPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomPanelClose {
	return new IconBottomPanelClose($size, $fill, $iconTypeWeight);
}

function IconBottomPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomPanelOpen {
	return new IconBottomPanelOpen($size, $fill, $iconTypeWeight);
}

function IconBottomRightClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomRightClick {
	return new IconBottomRightClick($size, $fill, $iconTypeWeight);
}

function IconBottomSheets(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBottomSheets {
	return new IconBottomSheets($size, $fill, $iconTypeWeight);
}

function IconBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBox {
	return new IconBox($size, $fill, $iconTypeWeight);
}

function IconBoxAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoxAdd {
	return new IconBoxAdd($size, $fill, $iconTypeWeight);
}

function IconBoxEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoxEdit {
	return new IconBoxEdit($size, $fill, $iconTypeWeight);
}

function IconBoy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBoy {
	return new IconBoy($size, $fill, $iconTypeWeight);
}

function IconBrandAwareness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrandAwareness {
	return new IconBrandAwareness($size, $fill, $iconTypeWeight);
}

function IconBrandFamily(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrandFamily {
	return new IconBrandFamily($size, $fill, $iconTypeWeight);
}

function IconBrandingWatermark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrandingWatermark {
	return new IconBrandingWatermark($size, $fill, $iconTypeWeight);
}

function IconBreakfastDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreakfastDining {
	return new IconBreakfastDining($size, $fill, $iconTypeWeight);
}

function IconBreakingNews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreakingNews {
	return new IconBreakingNews($size, $fill, $iconTypeWeight);
}

function IconBreakingNewsAlt1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreakingNewsAlt1 {
	return new IconBreakingNewsAlt1($size, $fill, $iconTypeWeight);
}

function IconBreastfeeding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBreastfeeding {
	return new IconBreastfeeding($size, $fill, $iconTypeWeight);
}

function IconBrick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrick {
	return new IconBrick($size, $fill, $iconTypeWeight);
}

function IconBrightness1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness1 {
	return new IconBrightness1($size, $fill, $iconTypeWeight);
}

function IconBrightness2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness2 {
	return new IconBrightness2($size, $fill, $iconTypeWeight);
}

function IconBrightness3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness3 {
	return new IconBrightness3($size, $fill, $iconTypeWeight);
}

function IconBrightness4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness4 {
	return new IconBrightness4($size, $fill, $iconTypeWeight);
}

function IconBrightness5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness5 {
	return new IconBrightness5($size, $fill, $iconTypeWeight);
}

function IconBrightness6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness6 {
	return new IconBrightness6($size, $fill, $iconTypeWeight);
}

function IconBrightness7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightness7 {
	return new IconBrightness7($size, $fill, $iconTypeWeight);
}

function IconBrightnessAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessAlert {
	return new IconBrightnessAlert($size, $fill, $iconTypeWeight);
}

function IconBrightnessAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessAuto {
	return new IconBrightnessAuto($size, $fill, $iconTypeWeight);
}

function IconBrightnessEmpty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessEmpty {
	return new IconBrightnessEmpty($size, $fill, $iconTypeWeight);
}

function IconBrightnessHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessHigh {
	return new IconBrightnessHigh($size, $fill, $iconTypeWeight);
}

function IconBrightnessLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessLow {
	return new IconBrightnessLow($size, $fill, $iconTypeWeight);
}

function IconBrightnessMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrightnessMedium {
	return new IconBrightnessMedium($size, $fill, $iconTypeWeight);
}

function IconBringYourOwnIp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBringYourOwnIp {
	return new IconBringYourOwnIp($size, $fill, $iconTypeWeight);
}

function IconBroadcastOnHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBroadcastOnHome {
	return new IconBroadcastOnHome($size, $fill, $iconTypeWeight);
}

function IconBroadcastOnPersonal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBroadcastOnPersonal {
	return new IconBroadcastOnPersonal($size, $fill, $iconTypeWeight);
}

function IconBrokenImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrokenImage {
	return new IconBrokenImage($size, $fill, $iconTypeWeight);
}

function IconBrowse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowse {
	return new IconBrowse($size, $fill, $iconTypeWeight);
}

function IconBrowseActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowseActivity {
	return new IconBrowseActivity($size, $fill, $iconTypeWeight);
}

function IconBrowseGallery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowseGallery {
	return new IconBrowseGallery($size, $fill, $iconTypeWeight);
}

function IconBrowserUpdated(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrowserUpdated {
	return new IconBrowserUpdated($size, $fill, $iconTypeWeight);
}

function IconBrunchDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrunchDining {
	return new IconBrunchDining($size, $fill, $iconTypeWeight);
}

function IconBrush(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBrush {
	return new IconBrush($size, $fill, $iconTypeWeight);
}

function IconBubble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBubble {
	return new IconBubble($size, $fill, $iconTypeWeight);
}

function IconBubbleChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBubbleChart {
	return new IconBubbleChart($size, $fill, $iconTypeWeight);
}

function IconBubbles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBubbles {
	return new IconBubbles($size, $fill, $iconTypeWeight);
}

function IconBugReport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBugReport {
	return new IconBugReport($size, $fill, $iconTypeWeight);
}

function IconBuild(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBuild {
	return new IconBuild($size, $fill, $iconTypeWeight);
}

function IconBuildCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBuildCircle {
	return new IconBuildCircle($size, $fill, $iconTypeWeight);
}

function IconBungalow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBungalow {
	return new IconBungalow($size, $fill, $iconTypeWeight);
}

function IconBurstMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBurstMode {
	return new IconBurstMode($size, $fill, $iconTypeWeight);
}

function IconBusAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusAlert {
	return new IconBusAlert($size, $fill, $iconTypeWeight);
}

function IconBusinessCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusinessCenter {
	return new IconBusinessCenter($size, $fill, $iconTypeWeight);
}

function IconBusinessChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusinessChip {
	return new IconBusinessChip($size, $fill, $iconTypeWeight);
}

function IconBusinessMessages(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusinessMessages {
	return new IconBusinessMessages($size, $fill, $iconTypeWeight);
}

function IconBusRailway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconBusRailway {
	return new IconBusRailway($size, $fill, $iconTypeWeight);
}

function IconButtonsAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconButtonsAlt {
	return new IconButtonsAlt($size, $fill, $iconTypeWeight);
}

function IconCabin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCabin {
	return new IconCabin($size, $fill, $iconTypeWeight);
}

function IconCable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCable {
	return new IconCable($size, $fill, $iconTypeWeight);
}

function IconCableCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCableCar {
	return new IconCableCar($size, $fill, $iconTypeWeight);
}

function IconCached(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCached {
	return new IconCached($size, $fill, $iconTypeWeight);
}

function IconCadence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCadence {
	return new IconCadence($size, $fill, $iconTypeWeight);
}

function IconCake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCake {
	return new IconCake($size, $fill, $iconTypeWeight);
}

function IconCakeAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCakeAdd {
	return new IconCakeAdd($size, $fill, $iconTypeWeight);
}

function IconCalculate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalculate {
	return new IconCalculate($size, $fill, $iconTypeWeight);
}

function IconCalendarAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarAddOn {
	return new IconCalendarAddOn($size, $fill, $iconTypeWeight);
}

function IconCalendarAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarAppsScript {
	return new IconCalendarAppsScript($size, $fill, $iconTypeWeight);
}

function IconCalendarClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarClock {
	return new IconCalendarClock($size, $fill, $iconTypeWeight);
}

function IconCalendarMonth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarMonth {
	return new IconCalendarMonth($size, $fill, $iconTypeWeight);
}

function IconCalendarToday(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarToday {
	return new IconCalendarToday($size, $fill, $iconTypeWeight);
}

function IconCalendarViewDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarViewDay {
	return new IconCalendarViewDay($size, $fill, $iconTypeWeight);
}

function IconCalendarViewMonth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarViewMonth {
	return new IconCalendarViewMonth($size, $fill, $iconTypeWeight);
}

function IconCalendarViewWeek(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCalendarViewWeek {
	return new IconCalendarViewWeek($size, $fill, $iconTypeWeight);
}

function IconCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCall {
	return new IconCall($size, $fill, $iconTypeWeight);
}

function IconCallEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallEnd {
	return new IconCallEnd($size, $fill, $iconTypeWeight);
}

function IconCallLog(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallLog {
	return new IconCallLog($size, $fill, $iconTypeWeight);
}

function IconCallMade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMade {
	return new IconCallMade($size, $fill, $iconTypeWeight);
}

function IconCallMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMerge {
	return new IconCallMerge($size, $fill, $iconTypeWeight);
}

function IconCallMissed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMissed {
	return new IconCallMissed($size, $fill, $iconTypeWeight);
}

function IconCallMissedOutgoing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallMissedOutgoing {
	return new IconCallMissedOutgoing($size, $fill, $iconTypeWeight);
}

function IconCallQuality(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallQuality {
	return new IconCallQuality($size, $fill, $iconTypeWeight);
}

function IconCallReceived(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallReceived {
	return new IconCallReceived($size, $fill, $iconTypeWeight);
}

function IconCallSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallSplit {
	return new IconCallSplit($size, $fill, $iconTypeWeight);
}

function IconCallToAction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCallToAction {
	return new IconCallToAction($size, $fill, $iconTypeWeight);
}

function IconCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCamera {
	return new IconCamera($size, $fill, $iconTypeWeight);
}

function IconCameraFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraFront {
	return new IconCameraFront($size, $fill, $iconTypeWeight);
}

function IconCameraIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraIndoor {
	return new IconCameraIndoor($size, $fill, $iconTypeWeight);
}

function IconCameraOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraOutdoor {
	return new IconCameraOutdoor($size, $fill, $iconTypeWeight);
}

function IconCameraRear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraRear {
	return new IconCameraRear($size, $fill, $iconTypeWeight);
}

function IconCameraRoll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraRoll {
	return new IconCameraRoll($size, $fill, $iconTypeWeight);
}

function IconCameraswitch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraswitch {
	return new IconCameraswitch($size, $fill, $iconTypeWeight);
}

function IconCameraVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCameraVideo {
	return new IconCameraVideo($size, $fill, $iconTypeWeight);
}

function IconCampaign(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCampaign {
	return new IconCampaign($size, $fill, $iconTypeWeight);
}

function IconCamping(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCamping {
	return new IconCamping($size, $fill, $iconTypeWeight);
}

function IconCancel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCancel {
	return new IconCancel($size, $fill, $iconTypeWeight);
}

function IconCancelPresentation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCancelPresentation {
	return new IconCancelPresentation($size, $fill, $iconTypeWeight);
}

function IconCancelScheduleSend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCancelScheduleSend {
	return new IconCancelScheduleSend($size, $fill, $iconTypeWeight);
}

function IconCandle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCandle {
	return new IconCandle($size, $fill, $iconTypeWeight);
}

function IconCandlestickChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCandlestickChart {
	return new IconCandlestickChart($size, $fill, $iconTypeWeight);
}

function IconCaptivePortal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCaptivePortal {
	return new IconCaptivePortal($size, $fill, $iconTypeWeight);
}

function IconCapture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCapture {
	return new IconCapture($size, $fill, $iconTypeWeight);
}

function IconCarCrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarCrash {
	return new IconCarCrash($size, $fill, $iconTypeWeight);
}

function IconCardioLoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardioLoad {
	return new IconCardioLoad($size, $fill, $iconTypeWeight);
}

function IconCardiology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardiology {
	return new IconCardiology($size, $fill, $iconTypeWeight);
}

function IconCardMembership(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardMembership {
	return new IconCardMembership($size, $fill, $iconTypeWeight);
}

function IconCards(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCards {
	return new IconCards($size, $fill, $iconTypeWeight);
}

function IconCardsStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardsStar {
	return new IconCardsStar($size, $fill, $iconTypeWeight);
}

function IconCardTravel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCardTravel {
	return new IconCardTravel($size, $fill, $iconTypeWeight);
}

function IconCarpenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarpenter {
	return new IconCarpenter($size, $fill, $iconTypeWeight);
}

function IconCarRental(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarRental {
	return new IconCarRental($size, $fill, $iconTypeWeight);
}

function IconCarRepair(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarRepair {
	return new IconCarRepair($size, $fill, $iconTypeWeight);
}

function IconCarryOnBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBag {
	return new IconCarryOnBag($size, $fill, $iconTypeWeight);
}

function IconCarryOnBagChecked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBagChecked {
	return new IconCarryOnBagChecked($size, $fill, $iconTypeWeight);
}

function IconCarryOnBagInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBagInactive {
	return new IconCarryOnBagInactive($size, $fill, $iconTypeWeight);
}

function IconCarryOnBagQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarryOnBagQuestion {
	return new IconCarryOnBagQuestion($size, $fill, $iconTypeWeight);
}

function IconCarTag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCarTag {
	return new IconCarTag($size, $fill, $iconTypeWeight);
}

function IconCases(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCases {
	return new IconCases($size, $fill, $iconTypeWeight);
}

function IconCasino(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCasino {
	return new IconCasino($size, $fill, $iconTypeWeight);
}

function IconCast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCast {
	return new IconCast($size, $fill, $iconTypeWeight);
}

function IconCastConnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastConnected {
	return new IconCastConnected($size, $fill, $iconTypeWeight);
}

function IconCastForEducation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastForEducation {
	return new IconCastForEducation($size, $fill, $iconTypeWeight);
}

function IconCastle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastle {
	return new IconCastle($size, $fill, $iconTypeWeight);
}

function IconCastPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastPause {
	return new IconCastPause($size, $fill, $iconTypeWeight);
}

function IconCastWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCastWarning {
	return new IconCastWarning($size, $fill, $iconTypeWeight);
}

function IconCategory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCategory {
	return new IconCategory($size, $fill, $iconTypeWeight);
}

function IconCategorySearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCategorySearch {
	return new IconCategorySearch($size, $fill, $iconTypeWeight);
}

function IconCelebration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCelebration {
	return new IconCelebration($size, $fill, $iconTypeWeight);
}

function IconCellMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCellMerge {
	return new IconCellMerge($size, $fill, $iconTypeWeight);
}

function IconCellTower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCellTower {
	return new IconCellTower($size, $fill, $iconTypeWeight);
}

function IconCellWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCellWifi {
	return new IconCellWifi($size, $fill, $iconTypeWeight);
}

function IconCenterFocusStrong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCenterFocusStrong {
	return new IconCenterFocusStrong($size, $fill, $iconTypeWeight);
}

function IconCenterFocusWeak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCenterFocusWeak {
	return new IconCenterFocusWeak($size, $fill, $iconTypeWeight);
}

function IconChair(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChair {
	return new IconChair($size, $fill, $iconTypeWeight);
}

function IconChairAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChairAlt {
	return new IconChairAlt($size, $fill, $iconTypeWeight);
}

function IconChalet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChalet {
	return new IconChalet($size, $fill, $iconTypeWeight);
}

function IconChangeCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChangeCircle {
	return new IconChangeCircle($size, $fill, $iconTypeWeight);
}

function IconChangeHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChangeHistory {
	return new IconChangeHistory($size, $fill, $iconTypeWeight);
}

function IconCharger(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCharger {
	return new IconCharger($size, $fill, $iconTypeWeight);
}

function IconChargingStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChargingStation {
	return new IconChargingStation($size, $fill, $iconTypeWeight);
}

function IconChartData(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChartData {
	return new IconChartData($size, $fill, $iconTypeWeight);
}

function IconChat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChat {
	return new IconChat($size, $fill, $iconTypeWeight);
}

function IconChatAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatAddOn {
	return new IconChatAddOn($size, $fill, $iconTypeWeight);
}

function IconChatAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatAppsScript {
	return new IconChatAppsScript($size, $fill, $iconTypeWeight);
}

function IconChatBubble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatBubble {
	return new IconChatBubble($size, $fill, $iconTypeWeight);
}

function IconChatError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatError {
	return new IconChatError($size, $fill, $iconTypeWeight);
}

function IconChatInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatInfo {
	return new IconChatInfo($size, $fill, $iconTypeWeight);
}

function IconChatPasteGo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatPasteGo {
	return new IconChatPasteGo($size, $fill, $iconTypeWeight);
}

function IconChatPasteGo2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChatPasteGo2 {
	return new IconChatPasteGo2($size, $fill, $iconTypeWeight);
}

function IconCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheck {
	return new IconCheck($size, $fill, $iconTypeWeight);
}

function IconCheckbook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckbook {
	return new IconCheckbook($size, $fill, $iconTypeWeight);
}

function IconCheckBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckBox {
	return new IconCheckBox($size, $fill, $iconTypeWeight);
}

function IconCheckBoxOutlineBlank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckBoxOutlineBlank {
	return new IconCheckBoxOutlineBlank($size, $fill, $iconTypeWeight);
}

function IconCheckCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckCircle {
	return new IconCheckCircle($size, $fill, $iconTypeWeight);
}

function IconCheckedBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckedBag {
	return new IconCheckedBag($size, $fill, $iconTypeWeight);
}

function IconCheckedBagQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckedBagQuestion {
	return new IconCheckedBagQuestion($size, $fill, $iconTypeWeight);
}

function IconCheckIndeterminateSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckIndeterminateSmall {
	return new IconCheckIndeterminateSmall($size, $fill, $iconTypeWeight);
}

function IconCheckInOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckInOut {
	return new IconCheckInOut($size, $fill, $iconTypeWeight);
}

function IconChecklist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChecklist {
	return new IconChecklist($size, $fill, $iconTypeWeight);
}

function IconChecklistRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChecklistRtl {
	return new IconChecklistRtl($size, $fill, $iconTypeWeight);
}

function IconCheckroom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckroom {
	return new IconCheckroom($size, $fill, $iconTypeWeight);
}

function IconCheckSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheckSmall {
	return new IconCheckSmall($size, $fill, $iconTypeWeight);
}

function IconCheer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCheer {
	return new IconCheer($size, $fill, $iconTypeWeight);
}

function IconChess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChess {
	return new IconChess($size, $fill, $iconTypeWeight);
}

function IconChessPawn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChessPawn {
	return new IconChessPawn($size, $fill, $iconTypeWeight);
}

function IconChevronBackward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronBackward {
	return new IconChevronBackward($size, $fill, $iconTypeWeight);
}

function IconChevronForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronForward {
	return new IconChevronForward($size, $fill, $iconTypeWeight);
}

function IconChevronLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronLeft {
	return new IconChevronLeft($size, $fill, $iconTypeWeight);
}

function IconChevronRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChevronRight {
	return new IconChevronRight($size, $fill, $iconTypeWeight);
}

function IconChildCare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChildCare {
	return new IconChildCare($size, $fill, $iconTypeWeight);
}

function IconChildFriendly(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChildFriendly {
	return new IconChildFriendly($size, $fill, $iconTypeWeight);
}

function IconChipExtraction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChipExtraction {
	return new IconChipExtraction($size, $fill, $iconTypeWeight);
}

function IconChips(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChips {
	return new IconChips($size, $fill, $iconTypeWeight);
}

function IconChromecast2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChromecast2 {
	return new IconChromecast2($size, $fill, $iconTypeWeight);
}

function IconChromecastDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChromecastDevice {
	return new IconChromecastDevice($size, $fill, $iconTypeWeight);
}

function IconChromeReaderMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChromeReaderMode {
	return new IconChromeReaderMode($size, $fill, $iconTypeWeight);
}

function IconChronic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChronic {
	return new IconChronic($size, $fill, $iconTypeWeight);
}

function IconChurch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconChurch {
	return new IconChurch($size, $fill, $iconTypeWeight);
}

function IconCinematicBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCinematicBlur {
	return new IconCinematicBlur($size, $fill, $iconTypeWeight);
}

function IconCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCircle {
	return new IconCircle($size, $fill, $iconTypeWeight);
}

function IconCircleNotifications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCircleNotifications {
	return new IconCircleNotifications($size, $fill, $iconTypeWeight);
}

function IconCircles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCircles {
	return new IconCircles($size, $fill, $iconTypeWeight);
}

function IconCirclesExt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCirclesExt {
	return new IconCirclesExt($size, $fill, $iconTypeWeight);
}

function IconClarify(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClarify {
	return new IconClarify($size, $fill, $iconTypeWeight);
}

function IconCleanHands(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleanHands {
	return new IconCleanHands($size, $fill, $iconTypeWeight);
}

function IconCleaning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleaning {
	return new IconCleaning($size, $fill, $iconTypeWeight);
}

function IconCleaningBucket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleaningBucket {
	return new IconCleaningBucket($size, $fill, $iconTypeWeight);
}

function IconCleaningServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCleaningServices {
	return new IconCleaningServices($size, $fill, $iconTypeWeight);
}

function IconClearAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClearAll {
	return new IconClearAll($size, $fill, $iconTypeWeight);
}

function IconClearDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClearDay {
	return new IconClearDay($size, $fill, $iconTypeWeight);
}

function IconClimateMiniSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClimateMiniSplit {
	return new IconClimateMiniSplit($size, $fill, $iconTypeWeight);
}

function IconClinicalNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClinicalNotes {
	return new IconClinicalNotes($size, $fill, $iconTypeWeight);
}

function IconClockArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockArrowDown {
	return new IconClockArrowDown($size, $fill, $iconTypeWeight);
}

function IconClockArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockArrowUp {
	return new IconClockArrowUp($size, $fill, $iconTypeWeight);
}

function IconClockLoader10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader10 {
	return new IconClockLoader10($size, $fill, $iconTypeWeight);
}

function IconClockLoader20(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader20 {
	return new IconClockLoader20($size, $fill, $iconTypeWeight);
}

function IconClockLoader40(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader40 {
	return new IconClockLoader40($size, $fill, $iconTypeWeight);
}

function IconClockLoader60(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader60 {
	return new IconClockLoader60($size, $fill, $iconTypeWeight);
}

function IconClockLoader80(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader80 {
	return new IconClockLoader80($size, $fill, $iconTypeWeight);
}

function IconClockLoader90(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClockLoader90 {
	return new IconClockLoader90($size, $fill, $iconTypeWeight);
}

function IconClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClose {
	return new IconClose($size, $fill, $iconTypeWeight);
}

function IconClosedCaption(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClosedCaption {
	return new IconClosedCaption($size, $fill, $iconTypeWeight);
}

function IconClosedCaptionAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClosedCaptionAdd {
	return new IconClosedCaptionAdd($size, $fill, $iconTypeWeight);
}

function IconClosedCaptionDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconClosedCaptionDisabled {
	return new IconClosedCaptionDisabled($size, $fill, $iconTypeWeight);
}

function IconCloseFullscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloseFullscreen {
	return new IconCloseFullscreen($size, $fill, $iconTypeWeight);
}

function IconCloseSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloseSmall {
	return new IconCloseSmall($size, $fill, $iconTypeWeight);
}

function IconCloud(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloud {
	return new IconCloud($size, $fill, $iconTypeWeight);
}

function IconCloudAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudAlert {
	return new IconCloudAlert($size, $fill, $iconTypeWeight);
}

function IconCloudCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudCircle {
	return new IconCloudCircle($size, $fill, $iconTypeWeight);
}

function IconCloudDone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudDone {
	return new IconCloudDone($size, $fill, $iconTypeWeight);
}

function IconCloudDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudDownload {
	return new IconCloudDownload($size, $fill, $iconTypeWeight);
}

function IconCloudLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudLock {
	return new IconCloudLock($size, $fill, $iconTypeWeight);
}

function IconCloudOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudOff {
	return new IconCloudOff($size, $fill, $iconTypeWeight);
}

function IconCloudSync(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudSync {
	return new IconCloudSync($size, $fill, $iconTypeWeight);
}

function IconCloudUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudUpload {
	return new IconCloudUpload($size, $fill, $iconTypeWeight);
}

function IconCloudySnowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCloudySnowing {
	return new IconCloudySnowing($size, $fill, $iconTypeWeight);
}

function IconCo2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCo2 {
	return new IconCo2($size, $fill, $iconTypeWeight);
}

function IconCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCode {
	return new IconCode($size, $fill, $iconTypeWeight);
}

function IconCodeBlocks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCodeBlocks {
	return new IconCodeBlocks($size, $fill, $iconTypeWeight);
}

function IconCodeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCodeOff {
	return new IconCodeOff($size, $fill, $iconTypeWeight);
}

function IconCoffee(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoffee {
	return new IconCoffee($size, $fill, $iconTypeWeight);
}

function IconCoffeeMaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoffeeMaker {
	return new IconCoffeeMaker($size, $fill, $iconTypeWeight);
}

function IconCognition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCognition {
	return new IconCognition($size, $fill, $iconTypeWeight);
}

function IconCognition2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCognition2 {
	return new IconCognition2($size, $fill, $iconTypeWeight);
}

function IconCollapseAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCollapseAll {
	return new IconCollapseAll($size, $fill, $iconTypeWeight);
}

function IconCollapseContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCollapseContent {
	return new IconCollapseContent($size, $fill, $iconTypeWeight);
}

function IconCollectionsBookmark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCollectionsBookmark {
	return new IconCollectionsBookmark($size, $fill, $iconTypeWeight);
}

function IconColorize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconColorize {
	return new IconColorize($size, $fill, $iconTypeWeight);
}

function IconColors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconColors {
	return new IconColors($size, $fill, $iconTypeWeight);
}

function IconCombineColumns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCombineColumns {
	return new IconCombineColumns($size, $fill, $iconTypeWeight);
}

function IconComedyMask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComedyMask {
	return new IconComedyMask($size, $fill, $iconTypeWeight);
}

function IconComicBubble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComicBubble {
	return new IconComicBubble($size, $fill, $iconTypeWeight);
}

function IconComment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComment {
	return new IconComment($size, $fill, $iconTypeWeight);
}

function IconCommentBank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommentBank {
	return new IconCommentBank($size, $fill, $iconTypeWeight);
}

function IconCommentsDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommentsDisabled {
	return new IconCommentsDisabled($size, $fill, $iconTypeWeight);
}

function IconCommit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommit {
	return new IconCommit($size, $fill, $iconTypeWeight);
}

function IconCommunication(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommunication {
	return new IconCommunication($size, $fill, $iconTypeWeight);
}

function IconCommunities(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommunities {
	return new IconCommunities($size, $fill, $iconTypeWeight);
}

function IconCommute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCommute {
	return new IconCommute($size, $fill, $iconTypeWeight);
}

function IconCompare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompare {
	return new IconCompare($size, $fill, $iconTypeWeight);
}

function IconCompareArrows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompareArrows {
	return new IconCompareArrows($size, $fill, $iconTypeWeight);
}

function IconCompassCalibration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompassCalibration {
	return new IconCompassCalibration($size, $fill, $iconTypeWeight);
}

function IconComponentExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComponentExchange {
	return new IconComponentExchange($size, $fill, $iconTypeWeight);
}

function IconCompost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompost {
	return new IconCompost($size, $fill, $iconTypeWeight);
}

function IconCompress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCompress {
	return new IconCompress($size, $fill, $iconTypeWeight);
}

function IconComputer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconComputer {
	return new IconComputer($size, $fill, $iconTypeWeight);
}

function IconConcierge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConcierge {
	return new IconConcierge($size, $fill, $iconTypeWeight);
}

function IconConditions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConditions {
	return new IconConditions($size, $fill, $iconTypeWeight);
}

function IconConfirmationNumber(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConfirmationNumber {
	return new IconConfirmationNumber($size, $fill, $iconTypeWeight);
}

function IconCongenital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCongenital {
	return new IconCongenital($size, $fill, $iconTypeWeight);
}

function IconConnectedTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConnectedTv {
	return new IconConnectedTv($size, $fill, $iconTypeWeight);
}

function IconConnectingAirports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConnectingAirports {
	return new IconConnectingAirports($size, $fill, $iconTypeWeight);
}

function IconConnectWithoutContact(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConnectWithoutContact {
	return new IconConnectWithoutContact($size, $fill, $iconTypeWeight);
}

function IconConstruction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConstruction {
	return new IconConstruction($size, $fill, $iconTypeWeight);
}

function IconContactEmergency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactEmergency {
	return new IconContactEmergency($size, $fill, $iconTypeWeight);
}

function IconContactless(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactless {
	return new IconContactless($size, $fill, $iconTypeWeight);
}

function IconContactlessOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactlessOff {
	return new IconContactlessOff($size, $fill, $iconTypeWeight);
}

function IconContactMail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactMail {
	return new IconContactMail($size, $fill, $iconTypeWeight);
}

function IconContactPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactPage {
	return new IconContactPage($size, $fill, $iconTypeWeight);
}

function IconContactPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactPhone {
	return new IconContactPhone($size, $fill, $iconTypeWeight);
}

function IconContacts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContacts {
	return new IconContacts($size, $fill, $iconTypeWeight);
}

function IconContactsProduct(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactsProduct {
	return new IconContactsProduct($size, $fill, $iconTypeWeight);
}

function IconContactSupport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContactSupport {
	return new IconContactSupport($size, $fill, $iconTypeWeight);
}

function IconContentCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentCopy {
	return new IconContentCopy($size, $fill, $iconTypeWeight);
}

function IconContentCut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentCut {
	return new IconContentCut($size, $fill, $iconTypeWeight);
}

function IconContentPaste(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPaste {
	return new IconContentPaste($size, $fill, $iconTypeWeight);
}

function IconContentPasteGo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPasteGo {
	return new IconContentPasteGo($size, $fill, $iconTypeWeight);
}

function IconContentPasteOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPasteOff {
	return new IconContentPasteOff($size, $fill, $iconTypeWeight);
}

function IconContentPasteSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContentPasteSearch {
	return new IconContentPasteSearch($size, $fill, $iconTypeWeight);
}

function IconContextualToken(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContextualToken {
	return new IconContextualToken($size, $fill, $iconTypeWeight);
}

function IconContextualTokenAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContextualTokenAdd {
	return new IconContextualTokenAdd($size, $fill, $iconTypeWeight);
}

function IconContract(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContract {
	return new IconContract($size, $fill, $iconTypeWeight);
}

function IconContractDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContractDelete {
	return new IconContractDelete($size, $fill, $iconTypeWeight);
}

function IconContractEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContractEdit {
	return new IconContractEdit($size, $fill, $iconTypeWeight);
}

function IconContrast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrast {
	return new IconContrast($size, $fill, $iconTypeWeight);
}

function IconContrastCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrastCircle {
	return new IconContrastCircle($size, $fill, $iconTypeWeight);
}

function IconContrastRtlOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrastRtlOff {
	return new IconContrastRtlOff($size, $fill, $iconTypeWeight);
}

function IconContrastSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconContrastSquare {
	return new IconContrastSquare($size, $fill, $iconTypeWeight);
}

function IconControlCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconControlCamera {
	return new IconControlCamera($size, $fill, $iconTypeWeight);
}

function IconControllerGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconControllerGen {
	return new IconControllerGen($size, $fill, $iconTypeWeight);
}

function IconControlPointDuplicate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconControlPointDuplicate {
	return new IconControlPointDuplicate($size, $fill, $iconTypeWeight);
}

function IconConversionPath(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConversionPath {
	return new IconConversionPath($size, $fill, $iconTypeWeight);
}

function IconConversionPathOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConversionPathOff {
	return new IconConversionPathOff($size, $fill, $iconTypeWeight);
}

function IconConvertToText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConvertToText {
	return new IconConvertToText($size, $fill, $iconTypeWeight);
}

function IconConveyorBelt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconConveyorBelt {
	return new IconConveyorBelt($size, $fill, $iconTypeWeight);
}

function IconCookie(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCookie {
	return new IconCookie($size, $fill, $iconTypeWeight);
}

function IconCookieOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCookieOff {
	return new IconCookieOff($size, $fill, $iconTypeWeight);
}

function IconCooking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCooking {
	return new IconCooking($size, $fill, $iconTypeWeight);
}

function IconCoolToDry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoolToDry {
	return new IconCoolToDry($size, $fill, $iconTypeWeight);
}

function IconCoPresent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoPresent {
	return new IconCoPresent($size, $fill, $iconTypeWeight);
}

function IconCopyAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCopyAll {
	return new IconCopyAll($size, $fill, $iconTypeWeight);
}

function IconCopyright(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCopyright {
	return new IconCopyright($size, $fill, $iconTypeWeight);
}

function IconCoronavirus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCoronavirus {
	return new IconCoronavirus($size, $fill, $iconTypeWeight);
}

function IconCorporateFare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCorporateFare {
	return new IconCorporateFare($size, $fill, $iconTypeWeight);
}

function IconCottage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCottage {
	return new IconCottage($size, $fill, $iconTypeWeight);
}

function IconCounter0(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter0 {
	return new IconCounter0($size, $fill, $iconTypeWeight);
}

function IconCounter1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter1 {
	return new IconCounter1($size, $fill, $iconTypeWeight);
}

function IconCounter2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter2 {
	return new IconCounter2($size, $fill, $iconTypeWeight);
}

function IconCounter3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter3 {
	return new IconCounter3($size, $fill, $iconTypeWeight);
}

function IconCounter4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter4 {
	return new IconCounter4($size, $fill, $iconTypeWeight);
}

function IconCounter5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter5 {
	return new IconCounter5($size, $fill, $iconTypeWeight);
}

function IconCounter6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter6 {
	return new IconCounter6($size, $fill, $iconTypeWeight);
}

function IconCounter7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter7 {
	return new IconCounter7($size, $fill, $iconTypeWeight);
}

function IconCounter8(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter8 {
	return new IconCounter8($size, $fill, $iconTypeWeight);
}

function IconCounter9(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCounter9 {
	return new IconCounter9($size, $fill, $iconTypeWeight);
}

function IconCountertops(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCountertops {
	return new IconCountertops($size, $fill, $iconTypeWeight);
}

function IconCreateNewFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreateNewFolder {
	return new IconCreateNewFolder($size, $fill, $iconTypeWeight);
}

function IconCreditCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCard {
	return new IconCreditCard($size, $fill, $iconTypeWeight);
}

function IconCreditCardClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardClock {
	return new IconCreditCardClock($size, $fill, $iconTypeWeight);
}

function IconCreditCardGear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardGear {
	return new IconCreditCardGear($size, $fill, $iconTypeWeight);
}

function IconCreditCardHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardHeart {
	return new IconCreditCardHeart($size, $fill, $iconTypeWeight);
}

function IconCreditCardOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditCardOff {
	return new IconCreditCardOff($size, $fill, $iconTypeWeight);
}

function IconCreditScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCreditScore {
	return new IconCreditScore($size, $fill, $iconTypeWeight);
}

function IconCrib(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrib {
	return new IconCrib($size, $fill, $iconTypeWeight);
}

function IconCrisisAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrisisAlert {
	return new IconCrisisAlert($size, $fill, $iconTypeWeight);
}

function IconCrop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop {
	return new IconCrop($size, $fill, $iconTypeWeight);
}

function IconCrop169(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop169 {
	return new IconCrop169($size, $fill, $iconTypeWeight);
}

function IconCrop32(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop32 {
	return new IconCrop32($size, $fill, $iconTypeWeight);
}

function IconCrop54(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop54 {
	return new IconCrop54($size, $fill, $iconTypeWeight);
}

function IconCrop75(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop75 {
	return new IconCrop75($size, $fill, $iconTypeWeight);
}

function IconCrop916(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrop916 {
	return new IconCrop916($size, $fill, $iconTypeWeight);
}

function IconCropFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropFree {
	return new IconCropFree($size, $fill, $iconTypeWeight);
}

function IconCropLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropLandscape {
	return new IconCropLandscape($size, $fill, $iconTypeWeight);
}

function IconCropPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropPortrait {
	return new IconCropPortrait($size, $fill, $iconTypeWeight);
}

function IconCropRotate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropRotate {
	return new IconCropRotate($size, $fill, $iconTypeWeight);
}

function IconCropSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCropSquare {
	return new IconCropSquare($size, $fill, $iconTypeWeight);
}

function IconCrossword(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrossword {
	return new IconCrossword($size, $fill, $iconTypeWeight);
}

function IconCrowdsource(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrowdsource {
	return new IconCrowdsource($size, $fill, $iconTypeWeight);
}

function IconCrown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrown {
	return new IconCrown($size, $fill, $iconTypeWeight);
}

function IconCrueltyFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCrueltyFree {
	return new IconCrueltyFree($size, $fill, $iconTypeWeight);
}

function IconCss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCss {
	return new IconCss($size, $fill, $iconTypeWeight);
}

function IconCsv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCsv {
	return new IconCsv($size, $fill, $iconTypeWeight);
}

function IconCurrencyBitcoin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyBitcoin {
	return new IconCurrencyBitcoin($size, $fill, $iconTypeWeight);
}

function IconCurrencyExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyExchange {
	return new IconCurrencyExchange($size, $fill, $iconTypeWeight);
}

function IconCurrencyFranc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyFranc {
	return new IconCurrencyFranc($size, $fill, $iconTypeWeight);
}

function IconCurrencyLira(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyLira {
	return new IconCurrencyLira($size, $fill, $iconTypeWeight);
}

function IconCurrencyPound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyPound {
	return new IconCurrencyPound($size, $fill, $iconTypeWeight);
}

function IconCurrencyRuble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyRuble {
	return new IconCurrencyRuble($size, $fill, $iconTypeWeight);
}

function IconCurrencyRupee(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyRupee {
	return new IconCurrencyRupee($size, $fill, $iconTypeWeight);
}

function IconCurrencyRupeeCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyRupeeCircle {
	return new IconCurrencyRupeeCircle($size, $fill, $iconTypeWeight);
}

function IconCurrencyYen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyYen {
	return new IconCurrencyYen($size, $fill, $iconTypeWeight);
}

function IconCurrencyYuan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurrencyYuan {
	return new IconCurrencyYuan($size, $fill, $iconTypeWeight);
}

function IconCurtains(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurtains {
	return new IconCurtains($size, $fill, $iconTypeWeight);
}

function IconCurtainsClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCurtainsClosed {
	return new IconCurtainsClosed($size, $fill, $iconTypeWeight);
}

function IconCustomTypography(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCustomTypography {
	return new IconCustomTypography($size, $fill, $iconTypeWeight);
}

function IconCycle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCycle {
	return new IconCycle($size, $fill, $iconTypeWeight);
}

function IconCyclone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconCyclone {
	return new IconCyclone($size, $fill, $iconTypeWeight);
}

function IconDangerous(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDangerous {
	return new IconDangerous($size, $fill, $iconTypeWeight);
}

function IconDarkMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDarkMode {
	return new IconDarkMode($size, $fill, $iconTypeWeight);
}

function IconDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDashboard {
	return new IconDashboard($size, $fill, $iconTypeWeight);
}

function IconDashboard2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDashboard2 {
	return new IconDashboard2($size, $fill, $iconTypeWeight);
}

function IconDashboardCustomize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDashboardCustomize {
	return new IconDashboardCustomize($size, $fill, $iconTypeWeight);
}

function IconDataAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataAlert {
	return new IconDataAlert($size, $fill, $iconTypeWeight);
}

function IconDataArray(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataArray {
	return new IconDataArray($size, $fill, $iconTypeWeight);
}

function IconDatabase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabase {
	return new IconDatabase($size, $fill, $iconTypeWeight);
}

function IconDatabaseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabaseOff {
	return new IconDatabaseOff($size, $fill, $iconTypeWeight);
}

function IconDatabaseSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabaseSearch {
	return new IconDatabaseSearch($size, $fill, $iconTypeWeight);
}

function IconDatabaseUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatabaseUpload {
	return new IconDatabaseUpload($size, $fill, $iconTypeWeight);
}

function IconDataCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataCheck {
	return new IconDataCheck($size, $fill, $iconTypeWeight);
}

function IconDataExploration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataExploration {
	return new IconDataExploration($size, $fill, $iconTypeWeight);
}

function IconDataInfoAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataInfoAlert {
	return new IconDataInfoAlert($size, $fill, $iconTypeWeight);
}

function IconDataLossPrevention(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataLossPrevention {
	return new IconDataLossPrevention($size, $fill, $iconTypeWeight);
}

function IconDataObject(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataObject {
	return new IconDataObject($size, $fill, $iconTypeWeight);
}

function IconDataSaverOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataSaverOn {
	return new IconDataSaverOn($size, $fill, $iconTypeWeight);
}

function IconDataset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataset {
	return new IconDataset($size, $fill, $iconTypeWeight);
}

function IconDatasetLinked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDatasetLinked {
	return new IconDatasetLinked($size, $fill, $iconTypeWeight);
}

function IconDataTable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataTable {
	return new IconDataTable($size, $fill, $iconTypeWeight);
}

function IconDataThresholding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataThresholding {
	return new IconDataThresholding($size, $fill, $iconTypeWeight);
}

function IconDataUsage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDataUsage {
	return new IconDataUsage($size, $fill, $iconTypeWeight);
}

function IconDateRange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDateRange {
	return new IconDateRange($size, $fill, $iconTypeWeight);
}

function IconDeblur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeblur {
	return new IconDeblur($size, $fill, $iconTypeWeight);
}

function IconDeceased(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeceased {
	return new IconDeceased($size, $fill, $iconTypeWeight);
}

function IconDecimalDecrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDecimalDecrease {
	return new IconDecimalDecrease($size, $fill, $iconTypeWeight);
}

function IconDecimalIncrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDecimalIncrease {
	return new IconDecimalIncrease($size, $fill, $iconTypeWeight);
}

function IconDeck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeck {
	return new IconDeck($size, $fill, $iconTypeWeight);
}

function IconDehaze(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDehaze {
	return new IconDehaze($size, $fill, $iconTypeWeight);
}

function IconDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDelete {
	return new IconDelete($size, $fill, $iconTypeWeight);
}

function IconDeleteForever(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeleteForever {
	return new IconDeleteForever($size, $fill, $iconTypeWeight);
}

function IconDeleteHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeleteHistory {
	return new IconDeleteHistory($size, $fill, $iconTypeWeight);
}

function IconDeleteSweep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeleteSweep {
	return new IconDeleteSweep($size, $fill, $iconTypeWeight);
}

function IconDeliveryTruckBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeliveryTruckBolt {
	return new IconDeliveryTruckBolt($size, $fill, $iconTypeWeight);
}

function IconDeliveryTruckSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeliveryTruckSpeed {
	return new IconDeliveryTruckSpeed($size, $fill, $iconTypeWeight);
}

function IconDemography(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDemography {
	return new IconDemography($size, $fill, $iconTypeWeight);
}

function IconDensityLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDensityLarge {
	return new IconDensityLarge($size, $fill, $iconTypeWeight);
}

function IconDensityMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDensityMedium {
	return new IconDensityMedium($size, $fill, $iconTypeWeight);
}

function IconDensitySmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDensitySmall {
	return new IconDensitySmall($size, $fill, $iconTypeWeight);
}

function IconDentistry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDentistry {
	return new IconDentistry($size, $fill, $iconTypeWeight);
}

function IconDepartureBoard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDepartureBoard {
	return new IconDepartureBoard($size, $fill, $iconTypeWeight);
}

function IconDeployedCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCode {
	return new IconDeployedCode($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeAccount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeAccount {
	return new IconDeployedCodeAccount($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeAlert {
	return new IconDeployedCodeAlert($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeHistory {
	return new IconDeployedCodeHistory($size, $fill, $iconTypeWeight);
}

function IconDeployedCodeUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeployedCodeUpdate {
	return new IconDeployedCodeUpdate($size, $fill, $iconTypeWeight);
}

function IconDermatology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDermatology {
	return new IconDermatology($size, $fill, $iconTypeWeight);
}

function IconDescription(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDescription {
	return new IconDescription($size, $fill, $iconTypeWeight);
}

function IconDeselect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeselect {
	return new IconDeselect($size, $fill, $iconTypeWeight);
}

function IconDesignServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesignServices {
	return new IconDesignServices($size, $fill, $iconTypeWeight);
}

function IconDesk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesk {
	return new IconDesk($size, $fill, $iconTypeWeight);
}

function IconDeskphone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeskphone {
	return new IconDeskphone($size, $fill, $iconTypeWeight);
}

function IconDesktopAccessDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopAccessDisabled {
	return new IconDesktopAccessDisabled($size, $fill, $iconTypeWeight);
}

function IconDesktopCloud(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopCloud {
	return new IconDesktopCloud($size, $fill, $iconTypeWeight);
}

function IconDesktopCloudStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopCloudStack {
	return new IconDesktopCloudStack($size, $fill, $iconTypeWeight);
}

function IconDesktopLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopLandscape {
	return new IconDesktopLandscape($size, $fill, $iconTypeWeight);
}

function IconDesktopLandscapeAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopLandscapeAdd {
	return new IconDesktopLandscapeAdd($size, $fill, $iconTypeWeight);
}

function IconDesktopMac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopMac {
	return new IconDesktopMac($size, $fill, $iconTypeWeight);
}

function IconDesktopPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopPortrait {
	return new IconDesktopPortrait($size, $fill, $iconTypeWeight);
}

function IconDesktopWindows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDesktopWindows {
	return new IconDesktopWindows($size, $fill, $iconTypeWeight);
}

function IconDestruction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDestruction {
	return new IconDestruction($size, $fill, $iconTypeWeight);
}

function IconDetails(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetails {
	return new IconDetails($size, $fill, $iconTypeWeight);
}

function IconDetectionAndZone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectionAndZone {
	return new IconDetectionAndZone($size, $fill, $iconTypeWeight);
}

function IconDetector(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetector {
	return new IconDetector($size, $fill, $iconTypeWeight);
}

function IconDetectorAlarm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorAlarm {
	return new IconDetectorAlarm($size, $fill, $iconTypeWeight);
}

function IconDetectorBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorBattery {
	return new IconDetectorBattery($size, $fill, $iconTypeWeight);
}

function IconDetectorCo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorCo {
	return new IconDetectorCo($size, $fill, $iconTypeWeight);
}

function IconDetectorOffline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorOffline {
	return new IconDetectorOffline($size, $fill, $iconTypeWeight);
}

function IconDetectorSmoke(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorSmoke {
	return new IconDetectorSmoke($size, $fill, $iconTypeWeight);
}

function IconDetectorStatus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDetectorStatus {
	return new IconDetectorStatus($size, $fill, $iconTypeWeight);
}

function IconDeveloperBoard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperBoard {
	return new IconDeveloperBoard($size, $fill, $iconTypeWeight);
}

function IconDeveloperBoardOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperBoardOff {
	return new IconDeveloperBoardOff($size, $fill, $iconTypeWeight);
}

function IconDeveloperGuide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperGuide {
	return new IconDeveloperGuide($size, $fill, $iconTypeWeight);
}

function IconDeveloperMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperMode {
	return new IconDeveloperMode($size, $fill, $iconTypeWeight);
}

function IconDeveloperModeTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeveloperModeTv {
	return new IconDeveloperModeTv($size, $fill, $iconTypeWeight);
}

function IconDeviceHub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeviceHub {
	return new IconDeviceHub($size, $fill, $iconTypeWeight);
}

function IconDevices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevices {
	return new IconDevices($size, $fill, $iconTypeWeight);
}

function IconDevicesFold(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesFold {
	return new IconDevicesFold($size, $fill, $iconTypeWeight);
}

function IconDevicesFold2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesFold2 {
	return new IconDevicesFold2($size, $fill, $iconTypeWeight);
}

function IconDevicesOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesOff {
	return new IconDevicesOff($size, $fill, $iconTypeWeight);
}

function IconDevicesOther(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesOther {
	return new IconDevicesOther($size, $fill, $iconTypeWeight);
}

function IconDevicesWearables(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDevicesWearables {
	return new IconDevicesWearables($size, $fill, $iconTypeWeight);
}

function IconDeviceThermostat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeviceThermostat {
	return new IconDeviceThermostat($size, $fill, $iconTypeWeight);
}

function IconDeviceUnknown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDeviceUnknown {
	return new IconDeviceUnknown($size, $fill, $iconTypeWeight);
}

function IconDewPoint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDewPoint {
	return new IconDewPoint($size, $fill, $iconTypeWeight);
}

function IconDiagnosis(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiagnosis {
	return new IconDiagnosis($size, $fill, $iconTypeWeight);
}

function IconDiagonalLine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiagonalLine {
	return new IconDiagonalLine($size, $fill, $iconTypeWeight);
}

function IconDialerSip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDialerSip {
	return new IconDialerSip($size, $fill, $iconTypeWeight);
}

function IconDialogs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDialogs {
	return new IconDialogs($size, $fill, $iconTypeWeight);
}

function IconDialpad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDialpad {
	return new IconDialpad($size, $fill, $iconTypeWeight);
}

function IconDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiamond {
	return new IconDiamond($size, $fill, $iconTypeWeight);
}

function IconDictionary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDictionary {
	return new IconDictionary($size, $fill, $iconTypeWeight);
}

function IconDifference(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDifference {
	return new IconDifference($size, $fill, $iconTypeWeight);
}

function IconDigitalOutOfHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDigitalOutOfHome {
	return new IconDigitalOutOfHome($size, $fill, $iconTypeWeight);
}

function IconDigitalWellbeing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDigitalWellbeing {
	return new IconDigitalWellbeing($size, $fill, $iconTypeWeight);
}

function IconDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDining {
	return new IconDining($size, $fill, $iconTypeWeight);
}

function IconDinnerDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDinnerDining {
	return new IconDinnerDining($size, $fill, $iconTypeWeight);
}

function IconDirections(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirections {
	return new IconDirections($size, $fill, $iconTypeWeight);
}

function IconDirectionsAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsAlt {
	return new IconDirectionsAlt($size, $fill, $iconTypeWeight);
}

function IconDirectionsAltOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsAltOff {
	return new IconDirectionsAltOff($size, $fill, $iconTypeWeight);
}

function IconDirectionsBike(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsBike {
	return new IconDirectionsBike($size, $fill, $iconTypeWeight);
}

function IconDirectionsBoat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsBoat {
	return new IconDirectionsBoat($size, $fill, $iconTypeWeight);
}

function IconDirectionsBus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsBus {
	return new IconDirectionsBus($size, $fill, $iconTypeWeight);
}

function IconDirectionsCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsCar {
	return new IconDirectionsCar($size, $fill, $iconTypeWeight);
}

function IconDirectionsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsOff {
	return new IconDirectionsOff($size, $fill, $iconTypeWeight);
}

function IconDirectionsRailway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsRailway {
	return new IconDirectionsRailway($size, $fill, $iconTypeWeight);
}

function IconDirectionsRailway2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsRailway2 {
	return new IconDirectionsRailway2($size, $fill, $iconTypeWeight);
}

function IconDirectionsRun(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsRun {
	return new IconDirectionsRun($size, $fill, $iconTypeWeight);
}

function IconDirectionsSubway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsSubway {
	return new IconDirectionsSubway($size, $fill, $iconTypeWeight);
}

function IconDirectionsWalk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectionsWalk {
	return new IconDirectionsWalk($size, $fill, $iconTypeWeight);
}

function IconDirectorySync(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirectorySync {
	return new IconDirectorySync($size, $fill, $iconTypeWeight);
}

function IconDirtyLens(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDirtyLens {
	return new IconDirtyLens($size, $fill, $iconTypeWeight);
}

function IconDisabledByDefault(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisabledByDefault {
	return new IconDisabledByDefault($size, $fill, $iconTypeWeight);
}

function IconDisabledVisible(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisabledVisible {
	return new IconDisabledVisible($size, $fill, $iconTypeWeight);
}

function IconDiscFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiscFull {
	return new IconDiscFull($size, $fill, $iconTypeWeight);
}

function IconDiscoverTune(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiscoverTune {
	return new IconDiscoverTune($size, $fill, $iconTypeWeight);
}

function IconDishwasher(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDishwasher {
	return new IconDishwasher($size, $fill, $iconTypeWeight);
}

function IconDishwasherGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDishwasherGen {
	return new IconDishwasherGen($size, $fill, $iconTypeWeight);
}

function IconDisplayExternalInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisplayExternalInput {
	return new IconDisplayExternalInput($size, $fill, $iconTypeWeight);
}

function IconDisplaySettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDisplaySettings {
	return new IconDisplaySettings($size, $fill, $iconTypeWeight);
}

function IconDistance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDistance {
	return new IconDistance($size, $fill, $iconTypeWeight);
}

function IconDiversity1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity1 {
	return new IconDiversity1($size, $fill, $iconTypeWeight);
}

function IconDiversity2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity2 {
	return new IconDiversity2($size, $fill, $iconTypeWeight);
}

function IconDiversity3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity3 {
	return new IconDiversity3($size, $fill, $iconTypeWeight);
}

function IconDiversity4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDiversity4 {
	return new IconDiversity4($size, $fill, $iconTypeWeight);
}

function IconDns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDns {
	return new IconDns($size, $fill, $iconTypeWeight);
}

function IconDock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDock {
	return new IconDock($size, $fill, $iconTypeWeight);
}

function IconDockToBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDockToBottom {
	return new IconDockToBottom($size, $fill, $iconTypeWeight);
}

function IconDockToLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDockToLeft {
	return new IconDockToLeft($size, $fill, $iconTypeWeight);
}

function IconDockToRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDockToRight {
	return new IconDockToRight($size, $fill, $iconTypeWeight);
}

function IconDocs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocs {
	return new IconDocs($size, $fill, $iconTypeWeight);
}

function IconDocsAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocsAddOn {
	return new IconDocsAddOn($size, $fill, $iconTypeWeight);
}

function IconDocsAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocsAppsScript {
	return new IconDocsAppsScript($size, $fill, $iconTypeWeight);
}

function IconDocumentScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocumentScanner {
	return new IconDocumentScanner($size, $fill, $iconTypeWeight);
}

function IconDocumentSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDocumentSearch {
	return new IconDocumentSearch($size, $fill, $iconTypeWeight);
}

function IconDomain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomain {
	return new IconDomain($size, $fill, $iconTypeWeight);
}

function IconDomainAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainAdd {
	return new IconDomainAdd($size, $fill, $iconTypeWeight);
}

function IconDomainDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainDisabled {
	return new IconDomainDisabled($size, $fill, $iconTypeWeight);
}

function IconDomainVerification(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainVerification {
	return new IconDomainVerification($size, $fill, $iconTypeWeight);
}

function IconDomainVerificationOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDomainVerificationOff {
	return new IconDomainVerificationOff($size, $fill, $iconTypeWeight);
}

function IconDominoMask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDominoMask {
	return new IconDominoMask($size, $fill, $iconTypeWeight);
}

function IconDoneAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoneAll {
	return new IconDoneAll($size, $fill, $iconTypeWeight);
}

function IconDoneOutline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoneOutline {
	return new IconDoneOutline($size, $fill, $iconTypeWeight);
}

function IconDoNotDisturbOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotDisturbOff {
	return new IconDoNotDisturbOff($size, $fill, $iconTypeWeight);
}

function IconDoNotDisturbOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotDisturbOn {
	return new IconDoNotDisturbOn($size, $fill, $iconTypeWeight);
}

function IconDoNotDisturbOnTotalSilence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotDisturbOnTotalSilence {
	return new IconDoNotDisturbOnTotalSilence($size, $fill, $iconTypeWeight);
}

function IconDoNotStep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotStep {
	return new IconDoNotStep($size, $fill, $iconTypeWeight);
}

function IconDoNotTouch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoNotTouch {
	return new IconDoNotTouch($size, $fill, $iconTypeWeight);
}

function IconDonutLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDonutLarge {
	return new IconDonutLarge($size, $fill, $iconTypeWeight);
}

function IconDonutSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDonutSmall {
	return new IconDonutSmall($size, $fill, $iconTypeWeight);
}

function IconDoorBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorBack {
	return new IconDoorBack($size, $fill, $iconTypeWeight);
}

function IconDoorbell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorbell {
	return new IconDoorbell($size, $fill, $iconTypeWeight);
}

function IconDoorbell3p(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorbell3p {
	return new IconDoorbell3p($size, $fill, $iconTypeWeight);
}

function IconDoorbellChime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorbellChime {
	return new IconDoorbellChime($size, $fill, $iconTypeWeight);
}

function IconDoorFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorFront {
	return new IconDoorFront($size, $fill, $iconTypeWeight);
}

function IconDoorOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorOpen {
	return new IconDoorOpen($size, $fill, $iconTypeWeight);
}

function IconDoorSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorSensor {
	return new IconDoorSensor($size, $fill, $iconTypeWeight);
}

function IconDoorSliding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoorSliding {
	return new IconDoorSliding($size, $fill, $iconTypeWeight);
}

function IconDoubleArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDoubleArrow {
	return new IconDoubleArrow($size, $fill, $iconTypeWeight);
}

function IconDownhillSkiing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownhillSkiing {
	return new IconDownhillSkiing($size, $fill, $iconTypeWeight);
}

function IconDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownload {
	return new IconDownload($size, $fill, $iconTypeWeight);
}

function IconDownload2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownload2 {
	return new IconDownload2($size, $fill, $iconTypeWeight);
}

function IconDownloadDone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownloadDone {
	return new IconDownloadDone($size, $fill, $iconTypeWeight);
}

function IconDownloadForOffline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownloadForOffline {
	return new IconDownloadForOffline($size, $fill, $iconTypeWeight);
}

function IconDownloading(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDownloading {
	return new IconDownloading($size, $fill, $iconTypeWeight);
}

function IconDraft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDraft {
	return new IconDraft($size, $fill, $iconTypeWeight);
}

function IconDraftOrders(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDraftOrders {
	return new IconDraftOrders($size, $fill, $iconTypeWeight);
}

function IconDrafts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDrafts {
	return new IconDrafts($size, $fill, $iconTypeWeight);
}

function IconDragClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragClick {
	return new IconDragClick($size, $fill, $iconTypeWeight);
}

function IconDragHandle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragHandle {
	return new IconDragHandle($size, $fill, $iconTypeWeight);
}

function IconDragIndicator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragIndicator {
	return new IconDragIndicator($size, $fill, $iconTypeWeight);
}

function IconDragPan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDragPan {
	return new IconDragPan($size, $fill, $iconTypeWeight);
}

function IconDraw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDraw {
	return new IconDraw($size, $fill, $iconTypeWeight);
}

function IconDrawAbstract(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDrawAbstract {
	return new IconDrawAbstract($size, $fill, $iconTypeWeight);
}

function IconDrawCollage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDrawCollage {
	return new IconDrawCollage($size, $fill, $iconTypeWeight);
}

function IconDresser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDresser {
	return new IconDresser($size, $fill, $iconTypeWeight);
}

function IconDriveExport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDriveExport {
	return new IconDriveExport($size, $fill, $iconTypeWeight);
}

function IconDriveFileMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDriveFileMove {
	return new IconDriveFileMove($size, $fill, $iconTypeWeight);
}

function IconDriveFolderUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDriveFolderUpload {
	return new IconDriveFolderUpload($size, $fill, $iconTypeWeight);
}

function IconDropdown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDropdown {
	return new IconDropdown($size, $fill, $iconTypeWeight);
}

function IconDry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDry {
	return new IconDry($size, $fill, $iconTypeWeight);
}

function IconDryCleaning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDryCleaning {
	return new IconDryCleaning($size, $fill, $iconTypeWeight);
}

function IconDualScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDualScreen {
	return new IconDualScreen($size, $fill, $iconTypeWeight);
}

function IconDuo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDuo {
	return new IconDuo($size, $fill, $iconTypeWeight);
}

function IconDvr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDvr {
	return new IconDvr($size, $fill, $iconTypeWeight);
}

function IconDynamicFeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDynamicFeed {
	return new IconDynamicFeed($size, $fill, $iconTypeWeight);
}

function IconDynamicForm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconDynamicForm {
	return new IconDynamicForm($size, $fill, $iconTypeWeight);
}

function IconE911Avatar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconE911Avatar {
	return new IconE911Avatar($size, $fill, $iconTypeWeight);
}

function IconE911Emergency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconE911Emergency {
	return new IconE911Emergency($size, $fill, $iconTypeWeight);
}

function IconEarbuds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarbuds {
	return new IconEarbuds($size, $fill, $iconTypeWeight);
}

function IconEarbudsBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarbudsBattery {
	return new IconEarbudsBattery($size, $fill, $iconTypeWeight);
}

function IconEarlyOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarlyOn {
	return new IconEarlyOn($size, $fill, $iconTypeWeight);
}

function IconEarthquake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEarthquake {
	return new IconEarthquake($size, $fill, $iconTypeWeight);
}

function IconEast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEast {
	return new IconEast($size, $fill, $iconTypeWeight);
}

function IconEcg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEcg {
	return new IconEcg($size, $fill, $iconTypeWeight);
}

function IconEcgHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEcgHeart {
	return new IconEcgHeart($size, $fill, $iconTypeWeight);
}

function IconEco(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEco {
	return new IconEco($size, $fill, $iconTypeWeight);
}

function IconEda(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEda {
	return new IconEda($size, $fill, $iconTypeWeight);
}

function IconEdgesensorHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEdgesensorHigh {
	return new IconEdgesensorHigh($size, $fill, $iconTypeWeight);
}

function IconEdgesensorLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEdgesensorLow {
	return new IconEdgesensorLow($size, $fill, $iconTypeWeight);
}

function IconEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEdit {
	return new IconEdit($size, $fill, $iconTypeWeight);
}

function IconEditArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditArrowDown {
	return new IconEditArrowDown($size, $fill, $iconTypeWeight);
}

function IconEditArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditArrowUp {
	return new IconEditArrowUp($size, $fill, $iconTypeWeight);
}

function IconEditAttributes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditAttributes {
	return new IconEditAttributes($size, $fill, $iconTypeWeight);
}

function IconEditAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditAudio {
	return new IconEditAudio($size, $fill, $iconTypeWeight);
}

function IconEditCalendar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditCalendar {
	return new IconEditCalendar($size, $fill, $iconTypeWeight);
}

function IconEditDocument(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditDocument {
	return new IconEditDocument($size, $fill, $iconTypeWeight);
}

function IconEditLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditLocation {
	return new IconEditLocation($size, $fill, $iconTypeWeight);
}

function IconEditLocationAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditLocationAlt {
	return new IconEditLocationAlt($size, $fill, $iconTypeWeight);
}

function IconEditNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditNote {
	return new IconEditNote($size, $fill, $iconTypeWeight);
}

function IconEditNotifications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditNotifications {
	return new IconEditNotifications($size, $fill, $iconTypeWeight);
}

function IconEditOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditOff {
	return new IconEditOff($size, $fill, $iconTypeWeight);
}

function IconEditorChoice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditorChoice {
	return new IconEditorChoice($size, $fill, $iconTypeWeight);
}

function IconEditRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditRoad {
	return new IconEditRoad($size, $fill, $iconTypeWeight);
}

function IconEditSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEditSquare {
	return new IconEditSquare($size, $fill, $iconTypeWeight);
}

function IconEgg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEgg {
	return new IconEgg($size, $fill, $iconTypeWeight);
}

function IconEggAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEggAlt {
	return new IconEggAlt($size, $fill, $iconTypeWeight);
}

function IconEject(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEject {
	return new IconEject($size, $fill, $iconTypeWeight);
}

function IconElderly(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElderly {
	return new IconElderly($size, $fill, $iconTypeWeight);
}

function IconElderlyWoman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElderlyWoman {
	return new IconElderlyWoman($size, $fill, $iconTypeWeight);
}

function IconElectricalServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricalServices {
	return new IconElectricalServices($size, $fill, $iconTypeWeight);
}

function IconElectricBike(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricBike {
	return new IconElectricBike($size, $fill, $iconTypeWeight);
}

function IconElectricBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricBolt {
	return new IconElectricBolt($size, $fill, $iconTypeWeight);
}

function IconElectricCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricCar {
	return new IconElectricCar($size, $fill, $iconTypeWeight);
}

function IconElectricMeter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricMeter {
	return new IconElectricMeter($size, $fill, $iconTypeWeight);
}

function IconElectricMoped(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricMoped {
	return new IconElectricMoped($size, $fill, $iconTypeWeight);
}

function IconElectricRickshaw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricRickshaw {
	return new IconElectricRickshaw($size, $fill, $iconTypeWeight);
}

function IconElectricScooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElectricScooter {
	return new IconElectricScooter($size, $fill, $iconTypeWeight);
}

function IconElevation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElevation {
	return new IconElevation($size, $fill, $iconTypeWeight);
}

function IconElevator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconElevator {
	return new IconElevator($size, $fill, $iconTypeWeight);
}

function IconEmergency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergency {
	return new IconEmergency($size, $fill, $iconTypeWeight);
}

function IconEmergencyHeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyHeat {
	return new IconEmergencyHeat($size, $fill, $iconTypeWeight);
}

function IconEmergencyHeat2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyHeat2 {
	return new IconEmergencyHeat2($size, $fill, $iconTypeWeight);
}

function IconEmergencyHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyHome {
	return new IconEmergencyHome($size, $fill, $iconTypeWeight);
}

function IconEmergencyRecording(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyRecording {
	return new IconEmergencyRecording($size, $fill, $iconTypeWeight);
}

function IconEmergencyShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyShare {
	return new IconEmergencyShare($size, $fill, $iconTypeWeight);
}

function IconEmergencyShareOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmergencyShareOff {
	return new IconEmergencyShareOff($size, $fill, $iconTypeWeight);
}

function IconEMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEMobiledata {
	return new IconEMobiledata($size, $fill, $iconTypeWeight);
}

function IconEMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEMobiledataBadge {
	return new IconEMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconEmojiEvents(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiEvents {
	return new IconEmojiEvents($size, $fill, $iconTypeWeight);
}

function IconEmojiFoodBeverage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiFoodBeverage {
	return new IconEmojiFoodBeverage($size, $fill, $iconTypeWeight);
}

function IconEmojiLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiLanguage {
	return new IconEmojiLanguage($size, $fill, $iconTypeWeight);
}

function IconEmojiNature(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiNature {
	return new IconEmojiNature($size, $fill, $iconTypeWeight);
}

function IconEmojiObjects(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiObjects {
	return new IconEmojiObjects($size, $fill, $iconTypeWeight);
}

function IconEmojiPeople(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiPeople {
	return new IconEmojiPeople($size, $fill, $iconTypeWeight);
}

function IconEmojiSymbols(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiSymbols {
	return new IconEmojiSymbols($size, $fill, $iconTypeWeight);
}

function IconEmojiTransportation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmojiTransportation {
	return new IconEmojiTransportation($size, $fill, $iconTypeWeight);
}

function IconEmoticon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmoticon {
	return new IconEmoticon($size, $fill, $iconTypeWeight);
}

function IconEmptyDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEmptyDashboard {
	return new IconEmptyDashboard($size, $fill, $iconTypeWeight);
}

function IconEnable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnable {
	return new IconEnable($size, $fill, $iconTypeWeight);
}

function IconEncrypted(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncrypted {
	return new IconEncrypted($size, $fill, $iconTypeWeight);
}

function IconEncryptedAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedAdd {
	return new IconEncryptedAdd($size, $fill, $iconTypeWeight);
}

function IconEncryptedAddCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedAddCircle {
	return new IconEncryptedAddCircle($size, $fill, $iconTypeWeight);
}

function IconEncryptedMinusCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedMinusCircle {
	return new IconEncryptedMinusCircle($size, $fill, $iconTypeWeight);
}

function IconEncryptedOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEncryptedOff {
	return new IconEncryptedOff($size, $fill, $iconTypeWeight);
}

function IconEndocrinology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEndocrinology {
	return new IconEndocrinology($size, $fill, $iconTypeWeight);
}

function IconEnergy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergy {
	return new IconEnergy($size, $fill, $iconTypeWeight);
}

function IconEnergyProgramSaving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergyProgramSaving {
	return new IconEnergyProgramSaving($size, $fill, $iconTypeWeight);
}

function IconEnergyProgramTimeUsed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergyProgramTimeUsed {
	return new IconEnergyProgramTimeUsed($size, $fill, $iconTypeWeight);
}

function IconEnergySavingsLeaf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnergySavingsLeaf {
	return new IconEnergySavingsLeaf($size, $fill, $iconTypeWeight);
}

function IconEngineering(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEngineering {
	return new IconEngineering($size, $fill, $iconTypeWeight);
}

function IconEnhancedEncryption(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnhancedEncryption {
	return new IconEnhancedEncryption($size, $fill, $iconTypeWeight);
}

function IconEnt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnt {
	return new IconEnt($size, $fill, $iconTypeWeight);
}

function IconEnterprise(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnterprise {
	return new IconEnterprise($size, $fill, $iconTypeWeight);
}

function IconEnterpriseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEnterpriseOff {
	return new IconEnterpriseOff($size, $fill, $iconTypeWeight);
}

function IconEqual(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEqual {
	return new IconEqual($size, $fill, $iconTypeWeight);
}

function IconEqualizer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEqualizer {
	return new IconEqualizer($size, $fill, $iconTypeWeight);
}

function IconEraserSize1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize1 {
	return new IconEraserSize1($size, $fill, $iconTypeWeight);
}

function IconEraserSize2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize2 {
	return new IconEraserSize2($size, $fill, $iconTypeWeight);
}

function IconEraserSize3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize3 {
	return new IconEraserSize3($size, $fill, $iconTypeWeight);
}

function IconEraserSize4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize4 {
	return new IconEraserSize4($size, $fill, $iconTypeWeight);
}

function IconEraserSize5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEraserSize5 {
	return new IconEraserSize5($size, $fill, $iconTypeWeight);
}

function IconError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconError {
	return new IconError($size, $fill, $iconTypeWeight);
}

function IconErrorMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconErrorMed {
	return new IconErrorMed($size, $fill, $iconTypeWeight);
}

function IconEscalator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEscalator {
	return new IconEscalator($size, $fill, $iconTypeWeight);
}

function IconEscalatorWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEscalatorWarning {
	return new IconEscalatorWarning($size, $fill, $iconTypeWeight);
}

function IconEuro(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEuro {
	return new IconEuro($size, $fill, $iconTypeWeight);
}

function IconEuroSymbol(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEuroSymbol {
	return new IconEuroSymbol($size, $fill, $iconTypeWeight);
}

function IconEvent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvent {
	return new IconEvent($size, $fill, $iconTypeWeight);
}

function IconEventAvailable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventAvailable {
	return new IconEventAvailable($size, $fill, $iconTypeWeight);
}

function IconEventBusy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventBusy {
	return new IconEventBusy($size, $fill, $iconTypeWeight);
}

function IconEventList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventList {
	return new IconEventList($size, $fill, $iconTypeWeight);
}

function IconEventNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventNote {
	return new IconEventNote($size, $fill, $iconTypeWeight);
}

function IconEventRepeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventRepeat {
	return new IconEventRepeat($size, $fill, $iconTypeWeight);
}

function IconEventSeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventSeat {
	return new IconEventSeat($size, $fill, $iconTypeWeight);
}

function IconEventUpcoming(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEventUpcoming {
	return new IconEventUpcoming($size, $fill, $iconTypeWeight);
}

function IconEvMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvMobiledataBadge {
	return new IconEvMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconEvShadow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvShadow {
	return new IconEvShadow($size, $fill, $iconTypeWeight);
}

function IconEvShadowAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvShadowAdd {
	return new IconEvShadowAdd($size, $fill, $iconTypeWeight);
}

function IconEvShadowMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvShadowMinus {
	return new IconEvShadowMinus($size, $fill, $iconTypeWeight);
}

function IconEvStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEvStation {
	return new IconEvStation($size, $fill, $iconTypeWeight);
}

function IconExclamation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExclamation {
	return new IconExclamation($size, $fill, $iconTypeWeight);
}

function IconExercise(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExercise {
	return new IconExercise($size, $fill, $iconTypeWeight);
}

function IconExitToApp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExitToApp {
	return new IconExitToApp($size, $fill, $iconTypeWeight);
}

function IconExpand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpand {
	return new IconExpand($size, $fill, $iconTypeWeight);
}

function IconExpandAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandAll {
	return new IconExpandAll($size, $fill, $iconTypeWeight);
}

function IconExpandCircleDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandCircleDown {
	return new IconExpandCircleDown($size, $fill, $iconTypeWeight);
}

function IconExpandCircleRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandCircleRight {
	return new IconExpandCircleRight($size, $fill, $iconTypeWeight);
}

function IconExpandCircleUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandCircleUp {
	return new IconExpandCircleUp($size, $fill, $iconTypeWeight);
}

function IconExpandContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpandContent {
	return new IconExpandContent($size, $fill, $iconTypeWeight);
}

function IconExpansionPanels(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExpansionPanels {
	return new IconExpansionPanels($size, $fill, $iconTypeWeight);
}

function IconExperiment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExperiment {
	return new IconExperiment($size, $fill, $iconTypeWeight);
}

function IconExplicit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExplicit {
	return new IconExplicit($size, $fill, $iconTypeWeight);
}

function IconExplore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExplore {
	return new IconExplore($size, $fill, $iconTypeWeight);
}

function IconExploreNearby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExploreNearby {
	return new IconExploreNearby($size, $fill, $iconTypeWeight);
}

function IconExploreOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExploreOff {
	return new IconExploreOff($size, $fill, $iconTypeWeight);
}

function IconExplosion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExplosion {
	return new IconExplosion($size, $fill, $iconTypeWeight);
}

function IconExportNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExportNotes {
	return new IconExportNotes($size, $fill, $iconTypeWeight);
}

function IconExposure(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposure {
	return new IconExposure($size, $fill, $iconTypeWeight);
}

function IconExposureNeg1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposureNeg1 {
	return new IconExposureNeg1($size, $fill, $iconTypeWeight);
}

function IconExposureNeg2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposureNeg2 {
	return new IconExposureNeg2($size, $fill, $iconTypeWeight);
}

function IconExposurePlus1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposurePlus1 {
	return new IconExposurePlus1($size, $fill, $iconTypeWeight);
}

function IconExposurePlus2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposurePlus2 {
	return new IconExposurePlus2($size, $fill, $iconTypeWeight);
}

function IconExposureZero(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExposureZero {
	return new IconExposureZero($size, $fill, $iconTypeWeight);
}

function IconExtension(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExtension {
	return new IconExtension($size, $fill, $iconTypeWeight);
}

function IconExtensionOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconExtensionOff {
	return new IconExtensionOff($size, $fill, $iconTypeWeight);
}

function IconEyeglasses(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEyeglasses {
	return new IconEyeglasses($size, $fill, $iconTypeWeight);
}

function IconEyeTracking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconEyeTracking {
	return new IconEyeTracking($size, $fill, $iconTypeWeight);
}

function IconFace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace {
	return new IconFace($size, $fill, $iconTypeWeight);
}

function IconFace2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace2 {
	return new IconFace2($size, $fill, $iconTypeWeight);
}

function IconFace3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace3 {
	return new IconFace3($size, $fill, $iconTypeWeight);
}

function IconFace4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace4 {
	return new IconFace4($size, $fill, $iconTypeWeight);
}

function IconFace5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace5 {
	return new IconFace5($size, $fill, $iconTypeWeight);
}

function IconFace6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFace6 {
	return new IconFace6($size, $fill, $iconTypeWeight);
}

function IconFaceDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceDown {
	return new IconFaceDown($size, $fill, $iconTypeWeight);
}

function IconFaceLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceLeft {
	return new IconFaceLeft($size, $fill, $iconTypeWeight);
}

function IconFaceNod(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceNod {
	return new IconFaceNod($size, $fill, $iconTypeWeight);
}

function IconFaceRetouchingOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceRetouchingOff {
	return new IconFaceRetouchingOff($size, $fill, $iconTypeWeight);
}

function IconFaceRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceRight {
	return new IconFaceRight($size, $fill, $iconTypeWeight);
}

function IconFaceShake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceShake {
	return new IconFaceShake($size, $fill, $iconTypeWeight);
}

function IconFaceUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaceUp {
	return new IconFaceUp($size, $fill, $iconTypeWeight);
}

function IconFactCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFactCheck {
	return new IconFactCheck($size, $fill, $iconTypeWeight);
}

function IconFactory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFactory {
	return new IconFactory($size, $fill, $iconTypeWeight);
}

function IconFalling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFalling {
	return new IconFalling($size, $fill, $iconTypeWeight);
}

function IconFamiliarFaceAndZone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamiliarFaceAndZone {
	return new IconFamiliarFaceAndZone($size, $fill, $iconTypeWeight);
}

function IconFamilyHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyHistory {
	return new IconFamilyHistory($size, $fill, $iconTypeWeight);
}

function IconFamilyHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyHome {
	return new IconFamilyHome($size, $fill, $iconTypeWeight);
}

function IconFamilyLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyLink {
	return new IconFamilyLink($size, $fill, $iconTypeWeight);
}

function IconFamilyRestroom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyRestroom {
	return new IconFamilyRestroom($size, $fill, $iconTypeWeight);
}

function IconFamilyStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFamilyStar {
	return new IconFamilyStar($size, $fill, $iconTypeWeight);
}

function IconFarsightDigital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFarsightDigital {
	return new IconFarsightDigital($size, $fill, $iconTypeWeight);
}

function IconFastfood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFastfood {
	return new IconFastfood($size, $fill, $iconTypeWeight);
}

function IconFastForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFastForward {
	return new IconFastForward($size, $fill, $iconTypeWeight);
}

function IconFastRewind(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFastRewind {
	return new IconFastRewind($size, $fill, $iconTypeWeight);
}

function IconFaucet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFaucet {
	return new IconFaucet($size, $fill, $iconTypeWeight);
}

function IconFavorite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFavorite {
	return new IconFavorite($size, $fill, $iconTypeWeight);
}

function IconFax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFax {
	return new IconFax($size, $fill, $iconTypeWeight);
}

function IconFeaturedPlayList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeaturedPlayList {
	return new IconFeaturedPlayList($size, $fill, $iconTypeWeight);
}

function IconFeaturedSeasonalAndGifts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeaturedSeasonalAndGifts {
	return new IconFeaturedSeasonalAndGifts($size, $fill, $iconTypeWeight);
}

function IconFeaturedVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeaturedVideo {
	return new IconFeaturedVideo($size, $fill, $iconTypeWeight);
}

function IconFeatureSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeatureSearch {
	return new IconFeatureSearch($size, $fill, $iconTypeWeight);
}

function IconFeedback(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFeedback {
	return new IconFeedback($size, $fill, $iconTypeWeight);
}

function IconFemale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFemale {
	return new IconFemale($size, $fill, $iconTypeWeight);
}

function IconFemur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFemur {
	return new IconFemur($size, $fill, $iconTypeWeight);
}

function IconFemurAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFemurAlt {
	return new IconFemurAlt($size, $fill, $iconTypeWeight);
}

function IconFence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFence {
	return new IconFence($size, $fill, $iconTypeWeight);
}

function IconFertile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFertile {
	return new IconFertile($size, $fill, $iconTypeWeight);
}

function IconFestival(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFestival {
	return new IconFestival($size, $fill, $iconTypeWeight);
}

function IconFiberDvr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberDvr {
	return new IconFiberDvr($size, $fill, $iconTypeWeight);
}

function IconFiberManualRecord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberManualRecord {
	return new IconFiberManualRecord($size, $fill, $iconTypeWeight);
}

function IconFiberNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberNew {
	return new IconFiberNew($size, $fill, $iconTypeWeight);
}

function IconFiberPin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberPin {
	return new IconFiberPin($size, $fill, $iconTypeWeight);
}

function IconFiberSmartRecord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiberSmartRecord {
	return new IconFiberSmartRecord($size, $fill, $iconTypeWeight);
}

function IconFileCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileCopy {
	return new IconFileCopy($size, $fill, $iconTypeWeight);
}

function IconFileCopyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileCopyOff {
	return new IconFileCopyOff($size, $fill, $iconTypeWeight);
}

function IconFileDownloadOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileDownloadOff {
	return new IconFileDownloadOff($size, $fill, $iconTypeWeight);
}

function IconFileExport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileExport {
	return new IconFileExport($size, $fill, $iconTypeWeight);
}

function IconFileJson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileJson {
	return new IconFileJson($size, $fill, $iconTypeWeight);
}

function IconFileMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileMap {
	return new IconFileMap($size, $fill, $iconTypeWeight);
}

function IconFileMapStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileMapStack {
	return new IconFileMapStack($size, $fill, $iconTypeWeight);
}

function IconFileOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileOpen {
	return new IconFileOpen($size, $fill, $iconTypeWeight);
}

function IconFilePng(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilePng {
	return new IconFilePng($size, $fill, $iconTypeWeight);
}

function IconFilePresent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilePresent {
	return new IconFilePresent($size, $fill, $iconTypeWeight);
}

function IconFiles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFiles {
	return new IconFiles($size, $fill, $iconTypeWeight);
}

function IconFileSave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileSave {
	return new IconFileSave($size, $fill, $iconTypeWeight);
}

function IconFileSaveOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileSaveOff {
	return new IconFileSaveOff($size, $fill, $iconTypeWeight);
}

function IconFileUploadOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFileUploadOff {
	return new IconFileUploadOff($size, $fill, $iconTypeWeight);
}

function IconFilter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter {
	return new IconFilter($size, $fill, $iconTypeWeight);
}

function IconFilter1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter1 {
	return new IconFilter1($size, $fill, $iconTypeWeight);
}

function IconFilter2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter2 {
	return new IconFilter2($size, $fill, $iconTypeWeight);
}

function IconFilter3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter3 {
	return new IconFilter3($size, $fill, $iconTypeWeight);
}

function IconFilter4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter4 {
	return new IconFilter4($size, $fill, $iconTypeWeight);
}

function IconFilter5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter5 {
	return new IconFilter5($size, $fill, $iconTypeWeight);
}

function IconFilter6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter6 {
	return new IconFilter6($size, $fill, $iconTypeWeight);
}

function IconFilter7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter7 {
	return new IconFilter7($size, $fill, $iconTypeWeight);
}

function IconFilter8(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter8 {
	return new IconFilter8($size, $fill, $iconTypeWeight);
}

function IconFilter9(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter9 {
	return new IconFilter9($size, $fill, $iconTypeWeight);
}

function IconFilter9Plus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilter9Plus {
	return new IconFilter9Plus($size, $fill, $iconTypeWeight);
}

function IconFilterAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterAlt {
	return new IconFilterAlt($size, $fill, $iconTypeWeight);
}

function IconFilterAltOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterAltOff {
	return new IconFilterAltOff($size, $fill, $iconTypeWeight);
}

function IconFilterArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterArrowRight {
	return new IconFilterArrowRight($size, $fill, $iconTypeWeight);
}

function IconFilterBAndW(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterBAndW {
	return new IconFilterBAndW($size, $fill, $iconTypeWeight);
}

function IconFilterCenterFocus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterCenterFocus {
	return new IconFilterCenterFocus($size, $fill, $iconTypeWeight);
}

function IconFilterDrama(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterDrama {
	return new IconFilterDrama($size, $fill, $iconTypeWeight);
}

function IconFilterFrames(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterFrames {
	return new IconFilterFrames($size, $fill, $iconTypeWeight);
}

function IconFilterHdr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterHdr {
	return new IconFilterHdr($size, $fill, $iconTypeWeight);
}

function IconFilterList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterList {
	return new IconFilterList($size, $fill, $iconTypeWeight);
}

function IconFilterListOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterListOff {
	return new IconFilterListOff($size, $fill, $iconTypeWeight);
}

function IconFilterNone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterNone {
	return new IconFilterNone($size, $fill, $iconTypeWeight);
}

function IconFilterRetrolux(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterRetrolux {
	return new IconFilterRetrolux($size, $fill, $iconTypeWeight);
}

function IconFilterTiltShift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterTiltShift {
	return new IconFilterTiltShift($size, $fill, $iconTypeWeight);
}

function IconFilterVintage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFilterVintage {
	return new IconFilterVintage($size, $fill, $iconTypeWeight);
}

function IconFinance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFinance {
	return new IconFinance($size, $fill, $iconTypeWeight);
}

function IconFinanceChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFinanceChip {
	return new IconFinanceChip($size, $fill, $iconTypeWeight);
}

function IconFinanceMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFinanceMode {
	return new IconFinanceMode($size, $fill, $iconTypeWeight);
}

function IconFindInPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFindInPage {
	return new IconFindInPage($size, $fill, $iconTypeWeight);
}

function IconFindReplace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFindReplace {
	return new IconFindReplace($size, $fill, $iconTypeWeight);
}

function IconFingerprint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFingerprint {
	return new IconFingerprint($size, $fill, $iconTypeWeight);
}

function IconFingerprintOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFingerprintOff {
	return new IconFingerprintOff($size, $fill, $iconTypeWeight);
}

function IconFireExtinguisher(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireExtinguisher {
	return new IconFireExtinguisher($size, $fill, $iconTypeWeight);
}

function IconFireHydrant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireHydrant {
	return new IconFireHydrant($size, $fill, $iconTypeWeight);
}

function IconFireplace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireplace {
	return new IconFireplace($size, $fill, $iconTypeWeight);
}

function IconFireTruck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFireTruck {
	return new IconFireTruck($size, $fill, $iconTypeWeight);
}

function IconFirstPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFirstPage {
	return new IconFirstPage($size, $fill, $iconTypeWeight);
}

function IconFitnessCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitnessCenter {
	return new IconFitnessCenter($size, $fill, $iconTypeWeight);
}

function IconFitnessTracker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitnessTracker {
	return new IconFitnessTracker($size, $fill, $iconTypeWeight);
}

function IconFitPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitPage {
	return new IconFitPage($size, $fill, $iconTypeWeight);
}

function IconFitPageHeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitPageHeight {
	return new IconFitPageHeight($size, $fill, $iconTypeWeight);
}

function IconFitPageWidth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitPageWidth {
	return new IconFitPageWidth($size, $fill, $iconTypeWeight);
}

function IconFitScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitScreen {
	return new IconFitScreen($size, $fill, $iconTypeWeight);
}

function IconFitWidth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFitWidth {
	return new IconFitWidth($size, $fill, $iconTypeWeight);
}

function IconFlag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlag {
	return new IconFlag($size, $fill, $iconTypeWeight);
}

function IconFlag2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlag2 {
	return new IconFlag2($size, $fill, $iconTypeWeight);
}

function IconFlagCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlagCheck {
	return new IconFlagCheck($size, $fill, $iconTypeWeight);
}

function IconFlagCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlagCircle {
	return new IconFlagCircle($size, $fill, $iconTypeWeight);
}

function IconFlaky(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlaky {
	return new IconFlaky($size, $fill, $iconTypeWeight);
}

function IconFlare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlare {
	return new IconFlare($size, $fill, $iconTypeWeight);
}

function IconFlashAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashAuto {
	return new IconFlashAuto($size, $fill, $iconTypeWeight);
}

function IconFlashlightOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashlightOff {
	return new IconFlashlightOff($size, $fill, $iconTypeWeight);
}

function IconFlashlightOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashlightOn {
	return new IconFlashlightOn($size, $fill, $iconTypeWeight);
}

function IconFlashOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashOff {
	return new IconFlashOff($size, $fill, $iconTypeWeight);
}

function IconFlashOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlashOn {
	return new IconFlashOn($size, $fill, $iconTypeWeight);
}

function IconFlatware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlatware {
	return new IconFlatware($size, $fill, $iconTypeWeight);
}

function IconFlexDirection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlexDirection {
	return new IconFlexDirection($size, $fill, $iconTypeWeight);
}

function IconFlexNoWrap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlexNoWrap {
	return new IconFlexNoWrap($size, $fill, $iconTypeWeight);
}

function IconFlexWrap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlexWrap {
	return new IconFlexWrap($size, $fill, $iconTypeWeight);
}

function IconFlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlight {
	return new IconFlight($size, $fill, $iconTypeWeight);
}

function IconFlightClass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightClass {
	return new IconFlightClass($size, $fill, $iconTypeWeight);
}

function IconFlightLand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightLand {
	return new IconFlightLand($size, $fill, $iconTypeWeight);
}

function IconFlightsAndHotels(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightsAndHotels {
	return new IconFlightsAndHotels($size, $fill, $iconTypeWeight);
}

function IconFlightTakeoff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlightTakeoff {
	return new IconFlightTakeoff($size, $fill, $iconTypeWeight);
}

function IconFlip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlip {
	return new IconFlip($size, $fill, $iconTypeWeight);
}

function IconFlipCameraAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipCameraAndroid {
	return new IconFlipCameraAndroid($size, $fill, $iconTypeWeight);
}

function IconFlipCameraIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipCameraIos {
	return new IconFlipCameraIos($size, $fill, $iconTypeWeight);
}

function IconFlipToBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipToBack {
	return new IconFlipToBack($size, $fill, $iconTypeWeight);
}

function IconFlipToFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlipToFront {
	return new IconFlipToFront($size, $fill, $iconTypeWeight);
}

function IconFloatLandscape2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloatLandscape2 {
	return new IconFloatLandscape2($size, $fill, $iconTypeWeight);
}

function IconFloatPortrait2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloatPortrait2 {
	return new IconFloatPortrait2($size, $fill, $iconTypeWeight);
}

function IconFlood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlood {
	return new IconFlood($size, $fill, $iconTypeWeight);
}

function IconFloor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloor {
	return new IconFloor($size, $fill, $iconTypeWeight);
}

function IconFloorLamp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFloorLamp {
	return new IconFloorLamp($size, $fill, $iconTypeWeight);
}

function IconFlowchart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlowchart {
	return new IconFlowchart($size, $fill, $iconTypeWeight);
}

function IconFlowsheet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlowsheet {
	return new IconFlowsheet($size, $fill, $iconTypeWeight);
}

function IconFluid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluid {
	return new IconFluid($size, $fill, $iconTypeWeight);
}

function IconFluidBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluidBalance {
	return new IconFluidBalance($size, $fill, $iconTypeWeight);
}

function IconFluidMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluidMed {
	return new IconFluidMed($size, $fill, $iconTypeWeight);
}

function IconFluorescent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFluorescent {
	return new IconFluorescent($size, $fill, $iconTypeWeight);
}

function IconFlutter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlutter {
	return new IconFlutter($size, $fill, $iconTypeWeight);
}

function IconFlutterDash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlutterDash {
	return new IconFlutterDash($size, $fill, $iconTypeWeight);
}

function IconFlyover(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFlyover {
	return new IconFlyover($size, $fill, $iconTypeWeight);
}

function IconFmdBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFmdBad {
	return new IconFmdBad($size, $fill, $iconTypeWeight);
}

function IconFoggy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoggy {
	return new IconFoggy($size, $fill, $iconTypeWeight);
}

function IconFoldedHands(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoldedHands {
	return new IconFoldedHands($size, $fill, $iconTypeWeight);
}

function IconFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolder {
	return new IconFolder($size, $fill, $iconTypeWeight);
}

function IconFolderCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCheck {
	return new IconFolderCheck($size, $fill, $iconTypeWeight);
}

function IconFolderCheck2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCheck2 {
	return new IconFolderCheck2($size, $fill, $iconTypeWeight);
}

function IconFolderCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCode {
	return new IconFolderCode($size, $fill, $iconTypeWeight);
}

function IconFolderCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderCopy {
	return new IconFolderCopy($size, $fill, $iconTypeWeight);
}

function IconFolderData(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderData {
	return new IconFolderData($size, $fill, $iconTypeWeight);
}

function IconFolderDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderDelete {
	return new IconFolderDelete($size, $fill, $iconTypeWeight);
}

function IconFolderEye(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderEye {
	return new IconFolderEye($size, $fill, $iconTypeWeight);
}

function IconFolderInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderInfo {
	return new IconFolderInfo($size, $fill, $iconTypeWeight);
}

function IconFolderLimited(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderLimited {
	return new IconFolderLimited($size, $fill, $iconTypeWeight);
}

function IconFolderManaged(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderManaged {
	return new IconFolderManaged($size, $fill, $iconTypeWeight);
}

function IconFolderMatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderMatch {
	return new IconFolderMatch($size, $fill, $iconTypeWeight);
}

function IconFolderOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderOff {
	return new IconFolderOff($size, $fill, $iconTypeWeight);
}

function IconFolderOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderOpen {
	return new IconFolderOpen($size, $fill, $iconTypeWeight);
}

function IconFolderShared(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderShared {
	return new IconFolderShared($size, $fill, $iconTypeWeight);
}

function IconFolderSpecial(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderSpecial {
	return new IconFolderSpecial($size, $fill, $iconTypeWeight);
}

function IconFolderSupervised(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderSupervised {
	return new IconFolderSupervised($size, $fill, $iconTypeWeight);
}

function IconFolderZip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFolderZip {
	return new IconFolderZip($size, $fill, $iconTypeWeight);
}

function IconFollowTheSigns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFollowTheSigns {
	return new IconFollowTheSigns($size, $fill, $iconTypeWeight);
}

function IconFontDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFontDownload {
	return new IconFontDownload($size, $fill, $iconTypeWeight);
}

function IconFontDownloadOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFontDownloadOff {
	return new IconFontDownloadOff($size, $fill, $iconTypeWeight);
}

function IconFoodBank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoodBank {
	return new IconFoodBank($size, $fill, $iconTypeWeight);
}

function IconFootBones(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFootBones {
	return new IconFootBones($size, $fill, $iconTypeWeight);
}

function IconFootprint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFootprint {
	return new IconFootprint($size, $fill, $iconTypeWeight);
}

function IconForest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForest {
	return new IconForest($size, $fill, $iconTypeWeight);
}

function IconForkLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForkLeft {
	return new IconForkLeft($size, $fill, $iconTypeWeight);
}

function IconForklift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForklift {
	return new IconForklift($size, $fill, $iconTypeWeight);
}

function IconForkRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForkRight {
	return new IconForkRight($size, $fill, $iconTypeWeight);
}

function IconForkSpoon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForkSpoon {
	return new IconForkSpoon($size, $fill, $iconTypeWeight);
}

function IconFormatAlignCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignCenter {
	return new IconFormatAlignCenter($size, $fill, $iconTypeWeight);
}

function IconFormatAlignJustify(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignJustify {
	return new IconFormatAlignJustify($size, $fill, $iconTypeWeight);
}

function IconFormatAlignLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignLeft {
	return new IconFormatAlignLeft($size, $fill, $iconTypeWeight);
}

function IconFormatAlignRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatAlignRight {
	return new IconFormatAlignRight($size, $fill, $iconTypeWeight);
}

function IconFormatBold(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatBold {
	return new IconFormatBold($size, $fill, $iconTypeWeight);
}

function IconFormatClear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatClear {
	return new IconFormatClear($size, $fill, $iconTypeWeight);
}

function IconFormatColorFill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatColorFill {
	return new IconFormatColorFill($size, $fill, $iconTypeWeight);
}

function IconFormatColorReset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatColorReset {
	return new IconFormatColorReset($size, $fill, $iconTypeWeight);
}

function IconFormatColorText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatColorText {
	return new IconFormatColorText($size, $fill, $iconTypeWeight);
}

function IconFormatH1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH1 {
	return new IconFormatH1($size, $fill, $iconTypeWeight);
}

function IconFormatH2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH2 {
	return new IconFormatH2($size, $fill, $iconTypeWeight);
}

function IconFormatH3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH3 {
	return new IconFormatH3($size, $fill, $iconTypeWeight);
}

function IconFormatH4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH4 {
	return new IconFormatH4($size, $fill, $iconTypeWeight);
}

function IconFormatH5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH5 {
	return new IconFormatH5($size, $fill, $iconTypeWeight);
}

function IconFormatH6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatH6 {
	return new IconFormatH6($size, $fill, $iconTypeWeight);
}

function IconFormatImageLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatImageLeft {
	return new IconFormatImageLeft($size, $fill, $iconTypeWeight);
}

function IconFormatImageRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatImageRight {
	return new IconFormatImageRight($size, $fill, $iconTypeWeight);
}

function IconFormatIndentDecrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatIndentDecrease {
	return new IconFormatIndentDecrease($size, $fill, $iconTypeWeight);
}

function IconFormatIndentIncrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatIndentIncrease {
	return new IconFormatIndentIncrease($size, $fill, $iconTypeWeight);
}

function IconFormatInkHighlighter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatInkHighlighter {
	return new IconFormatInkHighlighter($size, $fill, $iconTypeWeight);
}

function IconFormatItalic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatItalic {
	return new IconFormatItalic($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacing {
	return new IconFormatLetterSpacing($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacing2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacing2 {
	return new IconFormatLetterSpacing2($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacingStandard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacingStandard {
	return new IconFormatLetterSpacingStandard($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacingWide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacingWide {
	return new IconFormatLetterSpacingWide($size, $fill, $iconTypeWeight);
}

function IconFormatLetterSpacingWider(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLetterSpacingWider {
	return new IconFormatLetterSpacingWider($size, $fill, $iconTypeWeight);
}

function IconFormatLineSpacing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatLineSpacing {
	return new IconFormatLineSpacing($size, $fill, $iconTypeWeight);
}

function IconFormatListBulleted(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListBulleted {
	return new IconFormatListBulleted($size, $fill, $iconTypeWeight);
}

function IconFormatListBulletedAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListBulletedAdd {
	return new IconFormatListBulletedAdd($size, $fill, $iconTypeWeight);
}

function IconFormatListNumbered(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListNumbered {
	return new IconFormatListNumbered($size, $fill, $iconTypeWeight);
}

function IconFormatListNumberedRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatListNumberedRtl {
	return new IconFormatListNumberedRtl($size, $fill, $iconTypeWeight);
}

function IconFormatOverline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatOverline {
	return new IconFormatOverline($size, $fill, $iconTypeWeight);
}

function IconFormatPaint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatPaint {
	return new IconFormatPaint($size, $fill, $iconTypeWeight);
}

function IconFormatParagraph(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatParagraph {
	return new IconFormatParagraph($size, $fill, $iconTypeWeight);
}

function IconFormatQuote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatQuote {
	return new IconFormatQuote($size, $fill, $iconTypeWeight);
}

function IconFormatQuoteOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatQuoteOff {
	return new IconFormatQuoteOff($size, $fill, $iconTypeWeight);
}

function IconFormatShapes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatShapes {
	return new IconFormatShapes($size, $fill, $iconTypeWeight);
}

function IconFormatSize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatSize {
	return new IconFormatSize($size, $fill, $iconTypeWeight);
}

function IconFormatStrikethrough(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatStrikethrough {
	return new IconFormatStrikethrough($size, $fill, $iconTypeWeight);
}

function IconFormatTextClip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextClip {
	return new IconFormatTextClip($size, $fill, $iconTypeWeight);
}

function IconFormatTextdirectionLToR(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextdirectionLToR {
	return new IconFormatTextdirectionLToR($size, $fill, $iconTypeWeight);
}

function IconFormatTextdirectionRToL(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextdirectionRToL {
	return new IconFormatTextdirectionRToL($size, $fill, $iconTypeWeight);
}

function IconFormatTextdirectionVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextdirectionVertical {
	return new IconFormatTextdirectionVertical($size, $fill, $iconTypeWeight);
}

function IconFormatTextOverflow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextOverflow {
	return new IconFormatTextOverflow($size, $fill, $iconTypeWeight);
}

function IconFormatTextWrap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatTextWrap {
	return new IconFormatTextWrap($size, $fill, $iconTypeWeight);
}

function IconFormatUnderlined(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatUnderlined {
	return new IconFormatUnderlined($size, $fill, $iconTypeWeight);
}

function IconFormatUnderlinedSquiggle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormatUnderlinedSquiggle {
	return new IconFormatUnderlinedSquiggle($size, $fill, $iconTypeWeight);
}

function IconFormsAddOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormsAddOn {
	return new IconFormsAddOn($size, $fill, $iconTypeWeight);
}

function IconFormsAppsScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFormsAppsScript {
	return new IconFormsAppsScript($size, $fill, $iconTypeWeight);
}

function IconFort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFort {
	return new IconFort($size, $fill, $iconTypeWeight);
}

function IconForum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForum {
	return new IconForum($size, $fill, $iconTypeWeight);
}

function IconForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward {
	return new IconForward($size, $fill, $iconTypeWeight);
}

function IconForward10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward10 {
	return new IconForward10($size, $fill, $iconTypeWeight);
}

function IconForward30(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward30 {
	return new IconForward30($size, $fill, $iconTypeWeight);
}

function IconForward5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForward5 {
	return new IconForward5($size, $fill, $iconTypeWeight);
}

function IconForwardCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForwardCircle {
	return new IconForwardCircle($size, $fill, $iconTypeWeight);
}

function IconForwardMedia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForwardMedia {
	return new IconForwardMedia($size, $fill, $iconTypeWeight);
}

function IconForwardToInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForwardToInbox {
	return new IconForwardToInbox($size, $fill, $iconTypeWeight);
}

function IconForYou(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconForYou {
	return new IconForYou($size, $fill, $iconTypeWeight);
}

function IconFoundation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFoundation {
	return new IconFoundation($size, $fill, $iconTypeWeight);
}

function IconFrameInspect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrameInspect {
	return new IconFrameInspect($size, $fill, $iconTypeWeight);
}

function IconFramePerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFramePerson {
	return new IconFramePerson($size, $fill, $iconTypeWeight);
}

function IconFramePersonMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFramePersonMic {
	return new IconFramePersonMic($size, $fill, $iconTypeWeight);
}

function IconFramePersonOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFramePersonOff {
	return new IconFramePersonOff($size, $fill, $iconTypeWeight);
}

function IconFrameReload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrameReload {
	return new IconFrameReload($size, $fill, $iconTypeWeight);
}

function IconFrameSource(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrameSource {
	return new IconFrameSource($size, $fill, $iconTypeWeight);
}

function IconFreeCancellation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFreeCancellation {
	return new IconFreeCancellation($size, $fill, $iconTypeWeight);
}

function IconFrontHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrontHand {
	return new IconFrontHand($size, $fill, $iconTypeWeight);
}

function IconFrontLoader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFrontLoader {
	return new IconFrontLoader($size, $fill, $iconTypeWeight);
}

function IconFullCoverage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullCoverage {
	return new IconFullCoverage($size, $fill, $iconTypeWeight);
}

function IconFullHd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullHd {
	return new IconFullHd($size, $fill, $iconTypeWeight);
}

function IconFullscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullscreen {
	return new IconFullscreen($size, $fill, $iconTypeWeight);
}

function IconFullscreenExit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullscreenExit {
	return new IconFullscreenExit($size, $fill, $iconTypeWeight);
}

function IconFullscreenPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullscreenPortrait {
	return new IconFullscreenPortrait($size, $fill, $iconTypeWeight);
}

function IconFullStackedBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFullStackedBarChart {
	return new IconFullStackedBarChart($size, $fill, $iconTypeWeight);
}

function IconFunction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFunction {
	return new IconFunction($size, $fill, $iconTypeWeight);
}

function IconFunctions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFunctions {
	return new IconFunctions($size, $fill, $iconTypeWeight);
}

function IconFunicular(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconFunicular {
	return new IconFunicular($size, $fill, $iconTypeWeight);
}

function IconGalleryThumbnail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGalleryThumbnail {
	return new IconGalleryThumbnail($size, $fill, $iconTypeWeight);
}

function IconGamepad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGamepad {
	return new IconGamepad($size, $fill, $iconTypeWeight);
}

function IconGarage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGarage {
	return new IconGarage($size, $fill, $iconTypeWeight);
}

function IconGarageDoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGarageDoor {
	return new IconGarageDoor($size, $fill, $iconTypeWeight);
}

function IconGarageHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGarageHome {
	return new IconGarageHome($size, $fill, $iconTypeWeight);
}

function IconGardenCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGardenCart {
	return new IconGardenCart($size, $fill, $iconTypeWeight);
}

function IconGasMeter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGasMeter {
	return new IconGasMeter($size, $fill, $iconTypeWeight);
}

function IconGastroenterology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGastroenterology {
	return new IconGastroenterology($size, $fill, $iconTypeWeight);
}

function IconGate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGate {
	return new IconGate($size, $fill, $iconTypeWeight);
}

function IconGavel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGavel {
	return new IconGavel($size, $fill, $iconTypeWeight);
}

function IconGeneralDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGeneralDevice {
	return new IconGeneralDevice($size, $fill, $iconTypeWeight);
}

function IconGenetics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGenetics {
	return new IconGenetics($size, $fill, $iconTypeWeight);
}

function IconGenres(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGenres {
	return new IconGenres($size, $fill, $iconTypeWeight);
}

function IconGesture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGesture {
	return new IconGesture($size, $fill, $iconTypeWeight);
}

function IconGestureSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGestureSelect {
	return new IconGestureSelect($size, $fill, $iconTypeWeight);
}

function IconGif(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGif {
	return new IconGif($size, $fill, $iconTypeWeight);
}

function IconGif2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGif2 {
	return new IconGif2($size, $fill, $iconTypeWeight);
}

function IconGifBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGifBox {
	return new IconGifBox($size, $fill, $iconTypeWeight);
}

function IconGirl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGirl {
	return new IconGirl($size, $fill, $iconTypeWeight);
}

function IconGite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGite {
	return new IconGite($size, $fill, $iconTypeWeight);
}

function IconGlassCup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlassCup {
	return new IconGlassCup($size, $fill, $iconTypeWeight);
}

function IconGlobe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobe {
	return new IconGlobe($size, $fill, $iconTypeWeight);
}

function IconGlobeAsia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobeAsia {
	return new IconGlobeAsia($size, $fill, $iconTypeWeight);
}

function IconGlobeBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobeBook {
	return new IconGlobeBook($size, $fill, $iconTypeWeight);
}

function IconGlobeUk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlobeUk {
	return new IconGlobeUk($size, $fill, $iconTypeWeight);
}

function IconGlucose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlucose {
	return new IconGlucose($size, $fill, $iconTypeWeight);
}

function IconGlyphs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGlyphs {
	return new IconGlyphs($size, $fill, $iconTypeWeight);
}

function IconGMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGMobiledata {
	return new IconGMobiledata($size, $fill, $iconTypeWeight);
}

function IconGMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGMobiledataBadge {
	return new IconGMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconGolfCourse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGolfCourse {
	return new IconGolfCourse($size, $fill, $iconTypeWeight);
}

function IconGondolaLift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGondolaLift {
	return new IconGondolaLift($size, $fill, $iconTypeWeight);
}

function IconGoogleHomeDevices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoogleHomeDevices {
	return new IconGoogleHomeDevices($size, $fill, $iconTypeWeight);
}

function IconGoogleTvRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoogleTvRemote {
	return new IconGoogleTvRemote($size, $fill, $iconTypeWeight);
}

function IconGoogleWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoogleWifi {
	return new IconGoogleWifi($size, $fill, $iconTypeWeight);
}

function IconGoToLine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGoToLine {
	return new IconGoToLine($size, $fill, $iconTypeWeight);
}

function IconGppBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGppBad {
	return new IconGppBad($size, $fill, $iconTypeWeight);
}

function IconGppMaybe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGppMaybe {
	return new IconGppMaybe($size, $fill, $iconTypeWeight);
}

function IconGradient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGradient {
	return new IconGradient($size, $fill, $iconTypeWeight);
}

function IconGrading(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrading {
	return new IconGrading($size, $fill, $iconTypeWeight);
}

function IconGrain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrain {
	return new IconGrain($size, $fill, $iconTypeWeight);
}

function IconGraph1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph1 {
	return new IconGraph1($size, $fill, $iconTypeWeight);
}

function IconGraph2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph2 {
	return new IconGraph2($size, $fill, $iconTypeWeight);
}

function IconGraph3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph3 {
	return new IconGraph3($size, $fill, $iconTypeWeight);
}

function IconGraph4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph4 {
	return new IconGraph4($size, $fill, $iconTypeWeight);
}

function IconGraph5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph5 {
	return new IconGraph5($size, $fill, $iconTypeWeight);
}

function IconGraph6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraph6 {
	return new IconGraph6($size, $fill, $iconTypeWeight);
}

function IconGraphicEq(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGraphicEq {
	return new IconGraphicEq($size, $fill, $iconTypeWeight);
}

function IconGrass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrass {
	return new IconGrass($size, $fill, $iconTypeWeight);
}

function IconGrid3x3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrid3x3 {
	return new IconGrid3x3($size, $fill, $iconTypeWeight);
}

function IconGrid3x3Off(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrid3x3Off {
	return new IconGrid3x3Off($size, $fill, $iconTypeWeight);
}

function IconGrid4x4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrid4x4 {
	return new IconGrid4x4($size, $fill, $iconTypeWeight);
}

function IconGridGoldenratio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridGoldenratio {
	return new IconGridGoldenratio($size, $fill, $iconTypeWeight);
}

function IconGridGuides(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridGuides {
	return new IconGridGuides($size, $fill, $iconTypeWeight);
}

function IconGridOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridOff {
	return new IconGridOff($size, $fill, $iconTypeWeight);
}

function IconGridOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridOn {
	return new IconGridOn($size, $fill, $iconTypeWeight);
}

function IconGridView(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGridView {
	return new IconGridView($size, $fill, $iconTypeWeight);
}

function IconGrocery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGrocery {
	return new IconGrocery($size, $fill, $iconTypeWeight);
}

function IconGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroup {
	return new IconGroup($size, $fill, $iconTypeWeight);
}

function IconGroupAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupAdd {
	return new IconGroupAdd($size, $fill, $iconTypeWeight);
}

function IconGroupedBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupedBarChart {
	return new IconGroupedBarChart($size, $fill, $iconTypeWeight);
}

function IconGroupOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupOff {
	return new IconGroupOff($size, $fill, $iconTypeWeight);
}

function IconGroupRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupRemove {
	return new IconGroupRemove($size, $fill, $iconTypeWeight);
}

function IconGroups(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroups {
	return new IconGroups($size, $fill, $iconTypeWeight);
}

function IconGroups2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroups2 {
	return new IconGroups2($size, $fill, $iconTypeWeight);
}

function IconGroups3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroups3 {
	return new IconGroups3($size, $fill, $iconTypeWeight);
}

function IconGroupSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupSearch {
	return new IconGroupSearch($size, $fill, $iconTypeWeight);
}

function IconGroupWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGroupWork {
	return new IconGroupWork($size, $fill, $iconTypeWeight);
}

function IconGTranslate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGTranslate {
	return new IconGTranslate($size, $fill, $iconTypeWeight);
}

function IconGuardian(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGuardian {
	return new IconGuardian($size, $fill, $iconTypeWeight);
}

function IconGynecology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconGynecology {
	return new IconGynecology($size, $fill, $iconTypeWeight);
}

function IconHail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHail {
	return new IconHail($size, $fill, $iconTypeWeight);
}

function IconHallway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHallway {
	return new IconHallway($size, $fill, $iconTypeWeight);
}

function IconHandBones(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandBones {
	return new IconHandBones($size, $fill, $iconTypeWeight);
}

function IconHandGesture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandGesture {
	return new IconHandGesture($size, $fill, $iconTypeWeight);
}

function IconHandGestureOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandGestureOff {
	return new IconHandGestureOff($size, $fill, $iconTypeWeight);
}

function IconHandheldController(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandheldController {
	return new IconHandheldController($size, $fill, $iconTypeWeight);
}

function IconHandshake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandshake {
	return new IconHandshake($size, $fill, $iconTypeWeight);
}

function IconHandyman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHandyman {
	return new IconHandyman($size, $fill, $iconTypeWeight);
}

function IconHangoutVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHangoutVideo {
	return new IconHangoutVideo($size, $fill, $iconTypeWeight);
}

function IconHangoutVideoOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHangoutVideoOff {
	return new IconHangoutVideoOff($size, $fill, $iconTypeWeight);
}

function IconHardDisk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardDisk {
	return new IconHardDisk($size, $fill, $iconTypeWeight);
}

function IconHardDrive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardDrive {
	return new IconHardDrive($size, $fill, $iconTypeWeight);
}

function IconHardDrive2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardDrive2 {
	return new IconHardDrive2($size, $fill, $iconTypeWeight);
}

function IconHardware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHardware {
	return new IconHardware($size, $fill, $iconTypeWeight);
}

function IconHd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHd {
	return new IconHd($size, $fill, $iconTypeWeight);
}

function IconHdrAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrAuto {
	return new IconHdrAuto($size, $fill, $iconTypeWeight);
}

function IconHdrAutoSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrAutoSelect {
	return new IconHdrAutoSelect($size, $fill, $iconTypeWeight);
}

function IconHdrEnhancedSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrEnhancedSelect {
	return new IconHdrEnhancedSelect($size, $fill, $iconTypeWeight);
}

function IconHdrOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOff {
	return new IconHdrOff($size, $fill, $iconTypeWeight);
}

function IconHdrOffSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOffSelect {
	return new IconHdrOffSelect($size, $fill, $iconTypeWeight);
}

function IconHdrOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOn {
	return new IconHdrOn($size, $fill, $iconTypeWeight);
}

function IconHdrOnSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrOnSelect {
	return new IconHdrOnSelect($size, $fill, $iconTypeWeight);
}

function IconHdrPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrPlus {
	return new IconHdrPlus($size, $fill, $iconTypeWeight);
}

function IconHdrPlusOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrPlusOff {
	return new IconHdrPlusOff($size, $fill, $iconTypeWeight);
}

function IconHdrStrong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrStrong {
	return new IconHdrStrong($size, $fill, $iconTypeWeight);
}

function IconHdrWeak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHdrWeak {
	return new IconHdrWeak($size, $fill, $iconTypeWeight);
}

function IconHeadMountedDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadMountedDevice {
	return new IconHeadMountedDevice($size, $fill, $iconTypeWeight);
}

function IconHeadphones(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadphones {
	return new IconHeadphones($size, $fill, $iconTypeWeight);
}

function IconHeadphonesBattery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadphonesBattery {
	return new IconHeadphonesBattery($size, $fill, $iconTypeWeight);
}

function IconHeadsetMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadsetMic {
	return new IconHeadsetMic($size, $fill, $iconTypeWeight);
}

function IconHeadsetOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeadsetOff {
	return new IconHeadsetOff($size, $fill, $iconTypeWeight);
}

function IconHealing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealing {
	return new IconHealing($size, $fill, $iconTypeWeight);
}

function IconHealthAndBeauty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealthAndBeauty {
	return new IconHealthAndBeauty($size, $fill, $iconTypeWeight);
}

function IconHealthAndSafety(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealthAndSafety {
	return new IconHealthAndSafety($size, $fill, $iconTypeWeight);
}

function IconHealthMetrics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHealthMetrics {
	return new IconHealthMetrics($size, $fill, $iconTypeWeight);
}

function IconHeapSnapshotLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeapSnapshotLarge {
	return new IconHeapSnapshotLarge($size, $fill, $iconTypeWeight);
}

function IconHeapSnapshotMultiple(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeapSnapshotMultiple {
	return new IconHeapSnapshotMultiple($size, $fill, $iconTypeWeight);
}

function IconHeapSnapshotThumbnail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeapSnapshotThumbnail {
	return new IconHeapSnapshotThumbnail($size, $fill, $iconTypeWeight);
}

function IconHearing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearing {
	return new IconHearing($size, $fill, $iconTypeWeight);
}

function IconHearingAid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearingAid {
	return new IconHearingAid($size, $fill, $iconTypeWeight);
}

function IconHearingAidDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearingAidDisabled {
	return new IconHearingAidDisabled($size, $fill, $iconTypeWeight);
}

function IconHearingDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHearingDisabled {
	return new IconHearingDisabled($size, $fill, $iconTypeWeight);
}

function IconHeartBroken(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartBroken {
	return new IconHeartBroken($size, $fill, $iconTypeWeight);
}

function IconHeartCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartCheck {
	return new IconHeartCheck($size, $fill, $iconTypeWeight);
}

function IconHeartMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartMinus {
	return new IconHeartMinus($size, $fill, $iconTypeWeight);
}

function IconHeartPlus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeartPlus {
	return new IconHeartPlus($size, $fill, $iconTypeWeight);
}

function IconHeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeat {
	return new IconHeat($size, $fill, $iconTypeWeight);
}

function IconHeatPump(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeatPump {
	return new IconHeatPump($size, $fill, $iconTypeWeight);
}

function IconHeatPumpBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeatPumpBalance {
	return new IconHeatPumpBalance($size, $fill, $iconTypeWeight);
}

function IconHeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHeight {
	return new IconHeight($size, $fill, $iconTypeWeight);
}

function IconHelicopter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelicopter {
	return new IconHelicopter($size, $fill, $iconTypeWeight);
}

function IconHelp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelp {
	return new IconHelp($size, $fill, $iconTypeWeight);
}

function IconHelpCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelpCenter {
	return new IconHelpCenter($size, $fill, $iconTypeWeight);
}

function IconHelpClinic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHelpClinic {
	return new IconHelpClinic($size, $fill, $iconTypeWeight);
}

function IconHematology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHematology {
	return new IconHematology($size, $fill, $iconTypeWeight);
}

function IconHevc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHevc {
	return new IconHevc($size, $fill, $iconTypeWeight);
}

function IconHexagon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHexagon {
	return new IconHexagon($size, $fill, $iconTypeWeight);
}

function IconHide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHide {
	return new IconHide($size, $fill, $iconTypeWeight);
}

function IconHideImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHideImage {
	return new IconHideImage($size, $fill, $iconTypeWeight);
}

function IconHideSource(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHideSource {
	return new IconHideSource($size, $fill, $iconTypeWeight);
}

function IconHighDensity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighDensity {
	return new IconHighDensity($size, $fill, $iconTypeWeight);
}

function IconHighlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlight {
	return new IconHighlight($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize1 {
	return new IconHighlighterSize1($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize2 {
	return new IconHighlighterSize2($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize3 {
	return new IconHighlighterSize3($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize4 {
	return new IconHighlighterSize4($size, $fill, $iconTypeWeight);
}

function IconHighlighterSize5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlighterSize5 {
	return new IconHighlighterSize5($size, $fill, $iconTypeWeight);
}

function IconHighlightKeyboardFocus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlightKeyboardFocus {
	return new IconHighlightKeyboardFocus($size, $fill, $iconTypeWeight);
}

function IconHighlightMouseCursor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlightMouseCursor {
	return new IconHighlightMouseCursor($size, $fill, $iconTypeWeight);
}

function IconHighlightTextCursor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighlightTextCursor {
	return new IconHighlightTextCursor($size, $fill, $iconTypeWeight);
}

function IconHighQuality(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighQuality {
	return new IconHighQuality($size, $fill, $iconTypeWeight);
}

function IconHighRes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHighRes {
	return new IconHighRes($size, $fill, $iconTypeWeight);
}

function IconHiking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHiking {
	return new IconHiking($size, $fill, $iconTypeWeight);
}

function IconHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistory {
	return new IconHistory($size, $fill, $iconTypeWeight);
}

function IconHistory2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistory2 {
	return new IconHistory2($size, $fill, $iconTypeWeight);
}

function IconHistoryEdu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistoryEdu {
	return new IconHistoryEdu($size, $fill, $iconTypeWeight);
}

function IconHistoryOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistoryOff {
	return new IconHistoryOff($size, $fill, $iconTypeWeight);
}

function IconHistoryToggleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHistoryToggleOff {
	return new IconHistoryToggleOff($size, $fill, $iconTypeWeight);
}

function IconHive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHive {
	return new IconHive($size, $fill, $iconTypeWeight);
}

function IconHls(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHls {
	return new IconHls($size, $fill, $iconTypeWeight);
}

function IconHlsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHlsOff {
	return new IconHlsOff($size, $fill, $iconTypeWeight);
}

function IconHMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHMobiledata {
	return new IconHMobiledata($size, $fill, $iconTypeWeight);
}

function IconHMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHMobiledataBadge {
	return new IconHMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconHolidayVillage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHolidayVillage {
	return new IconHolidayVillage($size, $fill, $iconTypeWeight);
}

function IconHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHome {
	return new IconHome($size, $fill, $iconTypeWeight);
}

function IconHomeAndGarden(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeAndGarden {
	return new IconHomeAndGarden($size, $fill, $iconTypeWeight);
}

function IconHomeAppLogo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeAppLogo {
	return new IconHomeAppLogo($size, $fill, $iconTypeWeight);
}

function IconHomeHealth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeHealth {
	return new IconHomeHealth($size, $fill, $iconTypeWeight);
}

function IconHomeImprovementAndTools(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeImprovementAndTools {
	return new IconHomeImprovementAndTools($size, $fill, $iconTypeWeight);
}

function IconHomeIotDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeIotDevice {
	return new IconHomeIotDevice($size, $fill, $iconTypeWeight);
}

function IconHomeMax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeMax {
	return new IconHomeMax($size, $fill, $iconTypeWeight);
}

function IconHomeMaxDots(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeMaxDots {
	return new IconHomeMaxDots($size, $fill, $iconTypeWeight);
}

function IconHomeMini(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeMini {
	return new IconHomeMini($size, $fill, $iconTypeWeight);
}

function IconHomePin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomePin {
	return new IconHomePin($size, $fill, $iconTypeWeight);
}

function IconHomeRepairService(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeRepairService {
	return new IconHomeRepairService($size, $fill, $iconTypeWeight);
}

function IconHomeSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeSpeaker {
	return new IconHomeSpeaker($size, $fill, $iconTypeWeight);
}

function IconHomeStorage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeStorage {
	return new IconHomeStorage($size, $fill, $iconTypeWeight);
}

function IconHomeWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHomeWork {
	return new IconHomeWork($size, $fill, $iconTypeWeight);
}

function IconHorizontalDistribute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHorizontalDistribute {
	return new IconHorizontalDistribute($size, $fill, $iconTypeWeight);
}

function IconHorizontalRule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHorizontalRule {
	return new IconHorizontalRule($size, $fill, $iconTypeWeight);
}

function IconHorizontalSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHorizontalSplit {
	return new IconHorizontalSplit($size, $fill, $iconTypeWeight);
}

function IconHost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHost {
	return new IconHost($size, $fill, $iconTypeWeight);
}

function IconHotel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHotel {
	return new IconHotel($size, $fill, $iconTypeWeight);
}

function IconHotelClass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHotelClass {
	return new IconHotelClass($size, $fill, $iconTypeWeight);
}

function IconHotTub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHotTub {
	return new IconHotTub($size, $fill, $iconTypeWeight);
}

function IconHourglass(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglass {
	return new IconHourglass($size, $fill, $iconTypeWeight);
}

function IconHourglassArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassArrowDown {
	return new IconHourglassArrowDown($size, $fill, $iconTypeWeight);
}

function IconHourglassArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassArrowUp {
	return new IconHourglassArrowUp($size, $fill, $iconTypeWeight);
}

function IconHourglassBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassBottom {
	return new IconHourglassBottom($size, $fill, $iconTypeWeight);
}

function IconHourglassDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassDisabled {
	return new IconHourglassDisabled($size, $fill, $iconTypeWeight);
}

function IconHourglassEmpty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassEmpty {
	return new IconHourglassEmpty($size, $fill, $iconTypeWeight);
}

function IconHourglassPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassPause {
	return new IconHourglassPause($size, $fill, $iconTypeWeight);
}

function IconHourglassTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHourglassTop {
	return new IconHourglassTop($size, $fill, $iconTypeWeight);
}

function IconHouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouse {
	return new IconHouse($size, $fill, $iconTypeWeight);
}

function IconHouseboat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseboat {
	return new IconHouseboat($size, $fill, $iconTypeWeight);
}

function IconHouseholdSupplies(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseholdSupplies {
	return new IconHouseholdSupplies($size, $fill, $iconTypeWeight);
}

function IconHouseSiding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseSiding {
	return new IconHouseSiding($size, $fill, $iconTypeWeight);
}

function IconHouseWithShield(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHouseWithShield {
	return new IconHouseWithShield($size, $fill, $iconTypeWeight);
}

function IconHov(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHov {
	return new IconHov($size, $fill, $iconTypeWeight);
}

function IconHowToReg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHowToReg {
	return new IconHowToReg($size, $fill, $iconTypeWeight);
}

function IconHowToVote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHowToVote {
	return new IconHowToVote($size, $fill, $iconTypeWeight);
}

function IconHPlusMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHPlusMobiledata {
	return new IconHPlusMobiledata($size, $fill, $iconTypeWeight);
}

function IconHPlusMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHPlusMobiledataBadge {
	return new IconHPlusMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconHrResting(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHrResting {
	return new IconHrResting($size, $fill, $iconTypeWeight);
}

function IconHtml(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHtml {
	return new IconHtml($size, $fill, $iconTypeWeight);
}

function IconHttp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHttp {
	return new IconHttp($size, $fill, $iconTypeWeight);
}

function IconHub(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHub {
	return new IconHub($size, $fill, $iconTypeWeight);
}

function IconHumerus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumerus {
	return new IconHumerus($size, $fill, $iconTypeWeight);
}

function IconHumerusAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumerusAlt {
	return new IconHumerusAlt($size, $fill, $iconTypeWeight);
}

function IconHumidityHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityHigh {
	return new IconHumidityHigh($size, $fill, $iconTypeWeight);
}

function IconHumidityIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityIndoor {
	return new IconHumidityIndoor($size, $fill, $iconTypeWeight);
}

function IconHumidityLow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityLow {
	return new IconHumidityLow($size, $fill, $iconTypeWeight);
}

function IconHumidityMid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityMid {
	return new IconHumidityMid($size, $fill, $iconTypeWeight);
}

function IconHumidityPercentage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHumidityPercentage {
	return new IconHumidityPercentage($size, $fill, $iconTypeWeight);
}

function IconHvac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconHvac {
	return new IconHvac($size, $fill, $iconTypeWeight);
}

function IconIcecream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIcecream {
	return new IconIcecream($size, $fill, $iconTypeWeight);
}

function IconIceSkating(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIceSkating {
	return new IconIceSkating($size, $fill, $iconTypeWeight);
}

function IconIdCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIdCard {
	return new IconIdCard($size, $fill, $iconTypeWeight);
}

function IconIdentityAwareProxy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIdentityAwareProxy {
	return new IconIdentityAwareProxy($size, $fill, $iconTypeWeight);
}

function IconIdentityPlatform(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIdentityPlatform {
	return new IconIdentityPlatform($size, $fill, $iconTypeWeight);
}

function IconIfl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIfl {
	return new IconIfl($size, $fill, $iconTypeWeight);
}

function IconIframe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIframe {
	return new IconIframe($size, $fill, $iconTypeWeight);
}

function IconIframeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIframeOff {
	return new IconIframeOff($size, $fill, $iconTypeWeight);
}

function IconImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImage {
	return new IconImage($size, $fill, $iconTypeWeight);
}

function IconImageAspectRatio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImageAspectRatio {
	return new IconImageAspectRatio($size, $fill, $iconTypeWeight);
}

function IconImageSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImageSearch {
	return new IconImageSearch($size, $fill, $iconTypeWeight);
}

function IconImagesearchRoller(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImagesearchRoller {
	return new IconImagesearchRoller($size, $fill, $iconTypeWeight);
}

function IconImagesmode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImagesmode {
	return new IconImagesmode($size, $fill, $iconTypeWeight);
}

function IconImmunology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImmunology {
	return new IconImmunology($size, $fill, $iconTypeWeight);
}

function IconImportantDevices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImportantDevices {
	return new IconImportantDevices($size, $fill, $iconTypeWeight);
}

function IconImportContacts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconImportContacts {
	return new IconImportContacts($size, $fill, $iconTypeWeight);
}

function IconInactiveOrder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInactiveOrder {
	return new IconInactiveOrder($size, $fill, $iconTypeWeight);
}

function IconInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInbox {
	return new IconInbox($size, $fill, $iconTypeWeight);
}

function IconInboxCustomize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInboxCustomize {
	return new IconInboxCustomize($size, $fill, $iconTypeWeight);
}

function IconInboxText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInboxText {
	return new IconInboxText($size, $fill, $iconTypeWeight);
}

function IconIncompleteCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIncompleteCircle {
	return new IconIncompleteCircle($size, $fill, $iconTypeWeight);
}

function IconIndeterminateCheckBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIndeterminateCheckBox {
	return new IconIndeterminateCheckBox($size, $fill, $iconTypeWeight);
}

function IconIndeterminateQuestionBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIndeterminateQuestionBox {
	return new IconIndeterminateQuestionBox($size, $fill, $iconTypeWeight);
}

function IconInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInfo {
	return new IconInfo($size, $fill, $iconTypeWeight);
}

function IconInfoI(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInfoI {
	return new IconInfoI($size, $fill, $iconTypeWeight);
}

function IconInfrared(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInfrared {
	return new IconInfrared($size, $fill, $iconTypeWeight);
}

function IconInHomeMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInHomeMode {
	return new IconInHomeMode($size, $fill, $iconTypeWeight);
}

function IconInkEraser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkEraser {
	return new IconInkEraser($size, $fill, $iconTypeWeight);
}

function IconInkEraserOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkEraserOff {
	return new IconInkEraserOff($size, $fill, $iconTypeWeight);
}

function IconInkHighlighter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkHighlighter {
	return new IconInkHighlighter($size, $fill, $iconTypeWeight);
}

function IconInkHighlighterMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkHighlighterMove {
	return new IconInkHighlighterMove($size, $fill, $iconTypeWeight);
}

function IconInkMarker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkMarker {
	return new IconInkMarker($size, $fill, $iconTypeWeight);
}

function IconInkPen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkPen {
	return new IconInkPen($size, $fill, $iconTypeWeight);
}

function IconInkSelection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInkSelection {
	return new IconInkSelection($size, $fill, $iconTypeWeight);
}

function IconInpatient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInpatient {
	return new IconInpatient($size, $fill, $iconTypeWeight);
}

function IconInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInput {
	return new IconInput($size, $fill, $iconTypeWeight);
}

function IconInputCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInputCircle {
	return new IconInputCircle($size, $fill, $iconTypeWeight);
}

function IconInsertChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInsertChart {
	return new IconInsertChart($size, $fill, $iconTypeWeight);
}

function IconInsertPageBreak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInsertPageBreak {
	return new IconInsertPageBreak($size, $fill, $iconTypeWeight);
}

function IconInsertText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInsertText {
	return new IconInsertText($size, $fill, $iconTypeWeight);
}

function IconInstallDesktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInstallDesktop {
	return new IconInstallDesktop($size, $fill, $iconTypeWeight);
}

function IconInstallMobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInstallMobile {
	return new IconInstallMobile($size, $fill, $iconTypeWeight);
}

function IconInstantMix(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInstantMix {
	return new IconInstantMix($size, $fill, $iconTypeWeight);
}

function IconIntegrationInstructions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIntegrationInstructions {
	return new IconIntegrationInstructions($size, $fill, $iconTypeWeight);
}

function IconInteractiveSpace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInteractiveSpace {
	return new IconInteractiveSpace($size, $fill, $iconTypeWeight);
}

function IconInterests(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInterests {
	return new IconInterests($size, $fill, $iconTypeWeight);
}

function IconInterpreterMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInterpreterMode {
	return new IconInterpreterMode($size, $fill, $iconTypeWeight);
}

function IconInventory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInventory {
	return new IconInventory($size, $fill, $iconTypeWeight);
}

function IconInventory2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInventory2 {
	return new IconInventory2($size, $fill, $iconTypeWeight);
}

function IconInvertColors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInvertColors {
	return new IconInvertColors($size, $fill, $iconTypeWeight);
}

function IconInvertColorsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconInvertColorsOff {
	return new IconInvertColorsOff($size, $fill, $iconTypeWeight);
}

function IconIos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIos {
	return new IconIos($size, $fill, $iconTypeWeight);
}

function IconIosShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIosShare {
	return new IconIosShare($size, $fill, $iconTypeWeight);
}

function IconIron(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconIron {
	return new IconIron($size, $fill, $iconTypeWeight);
}

function IconJamboardKiosk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJamboardKiosk {
	return new IconJamboardKiosk($size, $fill, $iconTypeWeight);
}

function IconJavascript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJavascript {
	return new IconJavascript($size, $fill, $iconTypeWeight);
}

function IconJoin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoin {
	return new IconJoin($size, $fill, $iconTypeWeight);
}

function IconJoinInner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoinInner {
	return new IconJoinInner($size, $fill, $iconTypeWeight);
}

function IconJoinLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoinLeft {
	return new IconJoinLeft($size, $fill, $iconTypeWeight);
}

function IconJoinRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoinRight {
	return new IconJoinRight($size, $fill, $iconTypeWeight);
}

function IconJoystick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJoystick {
	return new IconJoystick($size, $fill, $iconTypeWeight);
}

function IconJumpToElement(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconJumpToElement {
	return new IconJumpToElement($size, $fill, $iconTypeWeight);
}

function IconKayaking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKayaking {
	return new IconKayaking($size, $fill, $iconTypeWeight);
}

function IconKebabDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKebabDining {
	return new IconKebabDining($size, $fill, $iconTypeWeight);
}

function IconKeep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeep {
	return new IconKeep($size, $fill, $iconTypeWeight);
}

function IconKeepOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeepOff {
	return new IconKeepOff($size, $fill, $iconTypeWeight);
}

function IconKeepPublic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeepPublic {
	return new IconKeepPublic($size, $fill, $iconTypeWeight);
}

function IconKettle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKettle {
	return new IconKettle($size, $fill, $iconTypeWeight);
}

function IconKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKey {
	return new IconKey($size, $fill, $iconTypeWeight);
}

function IconKeyboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboard {
	return new IconKeyboard($size, $fill, $iconTypeWeight);
}

function IconKeyboardAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardAlt {
	return new IconKeyboardAlt($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowDown {
	return new IconKeyboardArrowDown($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowLeft {
	return new IconKeyboardArrowLeft($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowRight {
	return new IconKeyboardArrowRight($size, $fill, $iconTypeWeight);
}

function IconKeyboardArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardArrowUp {
	return new IconKeyboardArrowUp($size, $fill, $iconTypeWeight);
}

function IconKeyboardBackspace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardBackspace {
	return new IconKeyboardBackspace($size, $fill, $iconTypeWeight);
}

function IconKeyboardCapslock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardCapslock {
	return new IconKeyboardCapslock($size, $fill, $iconTypeWeight);
}

function IconKeyboardCapslockBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardCapslockBadge {
	return new IconKeyboardCapslockBadge($size, $fill, $iconTypeWeight);
}

function IconKeyboardCommandKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardCommandKey {
	return new IconKeyboardCommandKey($size, $fill, $iconTypeWeight);
}

function IconKeyboardControlKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardControlKey {
	return new IconKeyboardControlKey($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowDown {
	return new IconKeyboardDoubleArrowDown($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowLeft {
	return new IconKeyboardDoubleArrowLeft($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowRight {
	return new IconKeyboardDoubleArrowRight($size, $fill, $iconTypeWeight);
}

function IconKeyboardDoubleArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardDoubleArrowUp {
	return new IconKeyboardDoubleArrowUp($size, $fill, $iconTypeWeight);
}

function IconKeyboardExternalInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardExternalInput {
	return new IconKeyboardExternalInput($size, $fill, $iconTypeWeight);
}

function IconKeyboardFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardFull {
	return new IconKeyboardFull($size, $fill, $iconTypeWeight);
}

function IconKeyboardHide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardHide {
	return new IconKeyboardHide($size, $fill, $iconTypeWeight);
}

function IconKeyboardKeys(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardKeys {
	return new IconKeyboardKeys($size, $fill, $iconTypeWeight);
}

function IconKeyboardLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardLock {
	return new IconKeyboardLock($size, $fill, $iconTypeWeight);
}

function IconKeyboardLockOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardLockOff {
	return new IconKeyboardLockOff($size, $fill, $iconTypeWeight);
}

function IconKeyboardOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardOff {
	return new IconKeyboardOff($size, $fill, $iconTypeWeight);
}

function IconKeyboardOnscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardOnscreen {
	return new IconKeyboardOnscreen($size, $fill, $iconTypeWeight);
}

function IconKeyboardOptionKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardOptionKey {
	return new IconKeyboardOptionKey($size, $fill, $iconTypeWeight);
}

function IconKeyboardPreviousLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardPreviousLanguage {
	return new IconKeyboardPreviousLanguage($size, $fill, $iconTypeWeight);
}

function IconKeyboardReturn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardReturn {
	return new IconKeyboardReturn($size, $fill, $iconTypeWeight);
}

function IconKeyboardTab(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardTab {
	return new IconKeyboardTab($size, $fill, $iconTypeWeight);
}

function IconKeyboardTabRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyboardTabRtl {
	return new IconKeyboardTabRtl($size, $fill, $iconTypeWeight);
}

function IconKeyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyOff {
	return new IconKeyOff($size, $fill, $iconTypeWeight);
}

function IconKeyVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyVertical {
	return new IconKeyVertical($size, $fill, $iconTypeWeight);
}

function IconKeyVisualizer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKeyVisualizer {
	return new IconKeyVisualizer($size, $fill, $iconTypeWeight);
}

function IconKidStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKidStar {
	return new IconKidStar($size, $fill, $iconTypeWeight);
}

function IconKingBed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKingBed {
	return new IconKingBed($size, $fill, $iconTypeWeight);
}

function IconKitchen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKitchen {
	return new IconKitchen($size, $fill, $iconTypeWeight);
}

function IconKitesurfing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconKitesurfing {
	return new IconKitesurfing($size, $fill, $iconTypeWeight);
}

function IconLabel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabel {
	return new IconLabel($size, $fill, $iconTypeWeight);
}

function IconLabelImportant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabelImportant {
	return new IconLabelImportant($size, $fill, $iconTypeWeight);
}

function IconLabelOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabelOff {
	return new IconLabelOff($size, $fill, $iconTypeWeight);
}

function IconLabPanel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabPanel {
	return new IconLabPanel($size, $fill, $iconTypeWeight);
}

function IconLabProfile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabProfile {
	return new IconLabProfile($size, $fill, $iconTypeWeight);
}

function IconLabResearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabResearch {
	return new IconLabResearch($size, $fill, $iconTypeWeight);
}

function IconLabs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLabs {
	return new IconLabs($size, $fill, $iconTypeWeight);
}

function IconLan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLan {
	return new IconLan($size, $fill, $iconTypeWeight);
}

function IconLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandscape {
	return new IconLandscape($size, $fill, $iconTypeWeight);
}

function IconLandscape2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandscape2 {
	return new IconLandscape2($size, $fill, $iconTypeWeight);
}

function IconLandscape2Off(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandscape2Off {
	return new IconLandscape2Off($size, $fill, $iconTypeWeight);
}

function IconLandslide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLandslide {
	return new IconLandslide($size, $fill, $iconTypeWeight);
}

function IconLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguage {
	return new IconLanguage($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseArray(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseArray {
	return new IconLanguageChineseArray($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseCangjie(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseCangjie {
	return new IconLanguageChineseCangjie($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseDayi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseDayi {
	return new IconLanguageChineseDayi($size, $fill, $iconTypeWeight);
}

function IconLanguageChinesePinyin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChinesePinyin {
	return new IconLanguageChinesePinyin($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseQuick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseQuick {
	return new IconLanguageChineseQuick($size, $fill, $iconTypeWeight);
}

function IconLanguageChineseWubi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageChineseWubi {
	return new IconLanguageChineseWubi($size, $fill, $iconTypeWeight);
}

function IconLanguageFrench(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageFrench {
	return new IconLanguageFrench($size, $fill, $iconTypeWeight);
}

function IconLanguageGbEnglish(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageGbEnglish {
	return new IconLanguageGbEnglish($size, $fill, $iconTypeWeight);
}

function IconLanguageInternational(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageInternational {
	return new IconLanguageInternational($size, $fill, $iconTypeWeight);
}

function IconLanguageJapaneseKana(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageJapaneseKana {
	return new IconLanguageJapaneseKana($size, $fill, $iconTypeWeight);
}

function IconLanguageKoreanLatin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageKoreanLatin {
	return new IconLanguageKoreanLatin($size, $fill, $iconTypeWeight);
}

function IconLanguagePinyin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguagePinyin {
	return new IconLanguagePinyin($size, $fill, $iconTypeWeight);
}

function IconLanguageSpanish(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageSpanish {
	return new IconLanguageSpanish($size, $fill, $iconTypeWeight);
}

function IconLanguageUs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageUs {
	return new IconLanguageUs($size, $fill, $iconTypeWeight);
}

function IconLanguageUsColemak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageUsColemak {
	return new IconLanguageUsColemak($size, $fill, $iconTypeWeight);
}

function IconLanguageUsDvorak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLanguageUsDvorak {
	return new IconLanguageUsDvorak($size, $fill, $iconTypeWeight);
}

function IconLaps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaps {
	return new IconLaps($size, $fill, $iconTypeWeight);
}

function IconLaptopCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopCar {
	return new IconLaptopCar($size, $fill, $iconTypeWeight);
}

function IconLaptopChromebook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopChromebook {
	return new IconLaptopChromebook($size, $fill, $iconTypeWeight);
}

function IconLaptopMac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopMac {
	return new IconLaptopMac($size, $fill, $iconTypeWeight);
}

function IconLaptopWindows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaptopWindows {
	return new IconLaptopWindows($size, $fill, $iconTypeWeight);
}

function IconLassoSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLassoSelect {
	return new IconLassoSelect($size, $fill, $iconTypeWeight);
}

function IconLastPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLastPage {
	return new IconLastPage($size, $fill, $iconTypeWeight);
}

function IconLaundry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLaundry {
	return new IconLaundry($size, $fill, $iconTypeWeight);
}

function IconLayers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLayers {
	return new IconLayers($size, $fill, $iconTypeWeight);
}

function IconLayersClear(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLayersClear {
	return new IconLayersClear($size, $fill, $iconTypeWeight);
}

function IconLda(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLda {
	return new IconLda($size, $fill, $iconTypeWeight);
}

function IconLeaderboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeaderboard {
	return new IconLeaderboard($size, $fill, $iconTypeWeight);
}

function IconLeakAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeakAdd {
	return new IconLeakAdd($size, $fill, $iconTypeWeight);
}

function IconLeakRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeakRemove {
	return new IconLeakRemove($size, $fill, $iconTypeWeight);
}

function IconLeftClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeftClick {
	return new IconLeftClick($size, $fill, $iconTypeWeight);
}

function IconLeftPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeftPanelClose {
	return new IconLeftPanelClose($size, $fill, $iconTypeWeight);
}

function IconLeftPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLeftPanelOpen {
	return new IconLeftPanelOpen($size, $fill, $iconTypeWeight);
}

function IconLegendToggle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLegendToggle {
	return new IconLegendToggle($size, $fill, $iconTypeWeight);
}

function IconLensBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLensBlur {
	return new IconLensBlur($size, $fill, $iconTypeWeight);
}

function IconLetterSwitch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLetterSwitch {
	return new IconLetterSwitch($size, $fill, $iconTypeWeight);
}

function IconLibraryAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryAdd {
	return new IconLibraryAdd($size, $fill, $iconTypeWeight);
}

function IconLibraryAddCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryAddCheck {
	return new IconLibraryAddCheck($size, $fill, $iconTypeWeight);
}

function IconLibraryBooks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryBooks {
	return new IconLibraryBooks($size, $fill, $iconTypeWeight);
}

function IconLibraryMusic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLibraryMusic {
	return new IconLibraryMusic($size, $fill, $iconTypeWeight);
}

function IconLicense(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLicense {
	return new IconLicense($size, $fill, $iconTypeWeight);
}

function IconLiftToTalk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiftToTalk {
	return new IconLiftToTalk($size, $fill, $iconTypeWeight);
}

function IconLight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLight {
	return new IconLight($size, $fill, $iconTypeWeight);
}

function IconLightbulb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightbulb {
	return new IconLightbulb($size, $fill, $iconTypeWeight);
}

function IconLightbulb2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightbulb2 {
	return new IconLightbulb2($size, $fill, $iconTypeWeight);
}

function IconLightbulbCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightbulbCircle {
	return new IconLightbulbCircle($size, $fill, $iconTypeWeight);
}

function IconLightGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightGroup {
	return new IconLightGroup($size, $fill, $iconTypeWeight);
}

function IconLightMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightMode {
	return new IconLightMode($size, $fill, $iconTypeWeight);
}

function IconLightningStand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightningStand {
	return new IconLightningStand($size, $fill, $iconTypeWeight);
}

function IconLightOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLightOff {
	return new IconLightOff($size, $fill, $iconTypeWeight);
}

function IconLinearScale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinearScale {
	return new IconLinearScale($size, $fill, $iconTypeWeight);
}

function IconLineAxis(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineAxis {
	return new IconLineAxis($size, $fill, $iconTypeWeight);
}

function IconLineCurve(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineCurve {
	return new IconLineCurve($size, $fill, $iconTypeWeight);
}

function IconLineEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEnd {
	return new IconLineEnd($size, $fill, $iconTypeWeight);
}

function IconLineEndArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndArrow {
	return new IconLineEndArrow($size, $fill, $iconTypeWeight);
}

function IconLineEndArrowNotch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndArrowNotch {
	return new IconLineEndArrowNotch($size, $fill, $iconTypeWeight);
}

function IconLineEndCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndCircle {
	return new IconLineEndCircle($size, $fill, $iconTypeWeight);
}

function IconLineEndDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndDiamond {
	return new IconLineEndDiamond($size, $fill, $iconTypeWeight);
}

function IconLineEndSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineEndSquare {
	return new IconLineEndSquare($size, $fill, $iconTypeWeight);
}

function IconLineStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStart {
	return new IconLineStart($size, $fill, $iconTypeWeight);
}

function IconLineStartArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartArrow {
	return new IconLineStartArrow($size, $fill, $iconTypeWeight);
}

function IconLineStartArrowNotch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartArrowNotch {
	return new IconLineStartArrowNotch($size, $fill, $iconTypeWeight);
}

function IconLineStartCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartCircle {
	return new IconLineStartCircle($size, $fill, $iconTypeWeight);
}

function IconLineStartDiamond(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartDiamond {
	return new IconLineStartDiamond($size, $fill, $iconTypeWeight);
}

function IconLineStartSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStartSquare {
	return new IconLineStartSquare($size, $fill, $iconTypeWeight);
}

function IconLineStyle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineStyle {
	return new IconLineStyle($size, $fill, $iconTypeWeight);
}

function IconLineWeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLineWeight {
	return new IconLineWeight($size, $fill, $iconTypeWeight);
}

function IconLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLink {
	return new IconLink($size, $fill, $iconTypeWeight);
}

function IconLinkedCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinkedCamera {
	return new IconLinkedCamera($size, $fill, $iconTypeWeight);
}

function IconLinkedServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinkedServices {
	return new IconLinkedServices($size, $fill, $iconTypeWeight);
}

function IconLinkOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLinkOff {
	return new IconLinkOff($size, $fill, $iconTypeWeight);
}

function IconLiquor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiquor {
	return new IconLiquor($size, $fill, $iconTypeWeight);
}

function IconList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconList {
	return new IconList($size, $fill, $iconTypeWeight);
}

function IconListAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconListAlt {
	return new IconListAlt($size, $fill, $iconTypeWeight);
}

function IconListAltAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconListAltAdd {
	return new IconListAltAdd($size, $fill, $iconTypeWeight);
}

function IconListAltCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconListAltCheck {
	return new IconListAltCheck($size, $fill, $iconTypeWeight);
}

function IconLists(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLists {
	return new IconLists($size, $fill, $iconTypeWeight);
}

function IconLiveHelp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiveHelp {
	return new IconLiveHelp($size, $fill, $iconTypeWeight);
}

function IconLiveTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiveTv {
	return new IconLiveTv($size, $fill, $iconTypeWeight);
}

function IconLiving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLiving {
	return new IconLiving($size, $fill, $iconTypeWeight);
}

function IconLocalActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalActivity {
	return new IconLocalActivity($size, $fill, $iconTypeWeight);
}

function IconLocalAtm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalAtm {
	return new IconLocalAtm($size, $fill, $iconTypeWeight);
}

function IconLocalBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalBar {
	return new IconLocalBar($size, $fill, $iconTypeWeight);
}

function IconLocalCafe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalCafe {
	return new IconLocalCafe($size, $fill, $iconTypeWeight);
}

function IconLocalCarWash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalCarWash {
	return new IconLocalCarWash($size, $fill, $iconTypeWeight);
}

function IconLocalConvenienceStore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalConvenienceStore {
	return new IconLocalConvenienceStore($size, $fill, $iconTypeWeight);
}

function IconLocalDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalDining {
	return new IconLocalDining($size, $fill, $iconTypeWeight);
}

function IconLocalDrink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalDrink {
	return new IconLocalDrink($size, $fill, $iconTypeWeight);
}

function IconLocalFireDepartment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalFireDepartment {
	return new IconLocalFireDepartment($size, $fill, $iconTypeWeight);
}

function IconLocalFlorist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalFlorist {
	return new IconLocalFlorist($size, $fill, $iconTypeWeight);
}

function IconLocalGasStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalGasStation {
	return new IconLocalGasStation($size, $fill, $iconTypeWeight);
}

function IconLocalHospital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalHospital {
	return new IconLocalHospital($size, $fill, $iconTypeWeight);
}

function IconLocalLaundryService(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalLaundryService {
	return new IconLocalLaundryService($size, $fill, $iconTypeWeight);
}

function IconLocalLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalLibrary {
	return new IconLocalLibrary($size, $fill, $iconTypeWeight);
}

function IconLocalMall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalMall {
	return new IconLocalMall($size, $fill, $iconTypeWeight);
}

function IconLocalParking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalParking {
	return new IconLocalParking($size, $fill, $iconTypeWeight);
}

function IconLocalPharmacy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPharmacy {
	return new IconLocalPharmacy($size, $fill, $iconTypeWeight);
}

function IconLocalPizza(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPizza {
	return new IconLocalPizza($size, $fill, $iconTypeWeight);
}

function IconLocalPolice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPolice {
	return new IconLocalPolice($size, $fill, $iconTypeWeight);
}

function IconLocalPostOffice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalPostOffice {
	return new IconLocalPostOffice($size, $fill, $iconTypeWeight);
}

function IconLocalSee(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalSee {
	return new IconLocalSee($size, $fill, $iconTypeWeight);
}

function IconLocalShipping(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalShipping {
	return new IconLocalShipping($size, $fill, $iconTypeWeight);
}

function IconLocalTaxi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocalTaxi {
	return new IconLocalTaxi($size, $fill, $iconTypeWeight);
}

function IconLocationAway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationAway {
	return new IconLocationAway($size, $fill, $iconTypeWeight);
}

function IconLocationChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationChip {
	return new IconLocationChip($size, $fill, $iconTypeWeight);
}

function IconLocationCity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationCity {
	return new IconLocationCity($size, $fill, $iconTypeWeight);
}

function IconLocationDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationDisabled {
	return new IconLocationDisabled($size, $fill, $iconTypeWeight);
}

function IconLocationHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationHome {
	return new IconLocationHome($size, $fill, $iconTypeWeight);
}

function IconLocationOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationOff {
	return new IconLocationOff($size, $fill, $iconTypeWeight);
}

function IconLocationOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationOn {
	return new IconLocationOn($size, $fill, $iconTypeWeight);
}

function IconLocationSearching(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLocationSearching {
	return new IconLocationSearching($size, $fill, $iconTypeWeight);
}

function IconLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLock {
	return new IconLock($size, $fill, $iconTypeWeight);
}

function IconLockClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockClock {
	return new IconLockClock($size, $fill, $iconTypeWeight);
}

function IconLockOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockOpen {
	return new IconLockOpen($size, $fill, $iconTypeWeight);
}

function IconLockOpenRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockOpenRight {
	return new IconLockOpenRight($size, $fill, $iconTypeWeight);
}

function IconLockPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockPerson {
	return new IconLockPerson($size, $fill, $iconTypeWeight);
}

function IconLockReset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLockReset {
	return new IconLockReset($size, $fill, $iconTypeWeight);
}

function IconLogin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLogin {
	return new IconLogin($size, $fill, $iconTypeWeight);
}

function IconLogoDev(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLogoDev {
	return new IconLogoDev($size, $fill, $iconTypeWeight);
}

function IconLogout(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLogout {
	return new IconLogout($size, $fill, $iconTypeWeight);
}

function IconLooks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks {
	return new IconLooks($size, $fill, $iconTypeWeight);
}

function IconLooks3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks3 {
	return new IconLooks3($size, $fill, $iconTypeWeight);
}

function IconLooks4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks4 {
	return new IconLooks4($size, $fill, $iconTypeWeight);
}

function IconLooks5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks5 {
	return new IconLooks5($size, $fill, $iconTypeWeight);
}

function IconLooks6(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooks6 {
	return new IconLooks6($size, $fill, $iconTypeWeight);
}

function IconLooksOne(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooksOne {
	return new IconLooksOne($size, $fill, $iconTypeWeight);
}

function IconLooksTwo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLooksTwo {
	return new IconLooksTwo($size, $fill, $iconTypeWeight);
}

function IconLoupe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLoupe {
	return new IconLoupe($size, $fill, $iconTypeWeight);
}

function IconLowDensity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLowDensity {
	return new IconLowDensity($size, $fill, $iconTypeWeight);
}

function IconLowercase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLowercase {
	return new IconLowercase($size, $fill, $iconTypeWeight);
}

function IconLowPriority(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLowPriority {
	return new IconLowPriority($size, $fill, $iconTypeWeight);
}

function IconLoyalty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLoyalty {
	return new IconLoyalty($size, $fill, $iconTypeWeight);
}

function IconLteMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLteMobiledata {
	return new IconLteMobiledata($size, $fill, $iconTypeWeight);
}

function IconLteMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLteMobiledataBadge {
	return new IconLteMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconLtePlusMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLtePlusMobiledata {
	return new IconLtePlusMobiledata($size, $fill, $iconTypeWeight);
}

function IconLtePlusMobiledataBadge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLtePlusMobiledataBadge {
	return new IconLtePlusMobiledataBadge($size, $fill, $iconTypeWeight);
}

function IconLuggage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLuggage {
	return new IconLuggage($size, $fill, $iconTypeWeight);
}

function IconLunchDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLunchDining {
	return new IconLunchDining($size, $fill, $iconTypeWeight);
}

function IconLyrics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconLyrics {
	return new IconLyrics($size, $fill, $iconTypeWeight);
}

function IconMacroAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMacroAuto {
	return new IconMacroAuto($size, $fill, $iconTypeWeight);
}

function IconMacroOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMacroOff {
	return new IconMacroOff($size, $fill, $iconTypeWeight);
}

function IconMagnificationLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnificationLarge {
	return new IconMagnificationLarge($size, $fill, $iconTypeWeight);
}

function IconMagnificationSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnificationSmall {
	return new IconMagnificationSmall($size, $fill, $iconTypeWeight);
}

function IconMagnifyDocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnifyDocked {
	return new IconMagnifyDocked($size, $fill, $iconTypeWeight);
}

function IconMagnifyFullscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMagnifyFullscreen {
	return new IconMagnifyFullscreen($size, $fill, $iconTypeWeight);
}

function IconMail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMail {
	return new IconMail($size, $fill, $iconTypeWeight);
}

function IconMailLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMailLock {
	return new IconMailLock($size, $fill, $iconTypeWeight);
}

function IconMailOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMailOff {
	return new IconMailOff($size, $fill, $iconTypeWeight);
}

function IconMale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMale {
	return new IconMale($size, $fill, $iconTypeWeight);
}

function IconMan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan {
	return new IconMan($size, $fill, $iconTypeWeight);
}

function IconMan2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan2 {
	return new IconMan2($size, $fill, $iconTypeWeight);
}

function IconMan3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan3 {
	return new IconMan3($size, $fill, $iconTypeWeight);
}

function IconMan4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMan4 {
	return new IconMan4($size, $fill, $iconTypeWeight);
}

function IconManageAccounts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManageAccounts {
	return new IconManageAccounts($size, $fill, $iconTypeWeight);
}

function IconManageHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManageHistory {
	return new IconManageHistory($size, $fill, $iconTypeWeight);
}

function IconManageSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManageSearch {
	return new IconManageSearch($size, $fill, $iconTypeWeight);
}

function IconManga(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManga {
	return new IconManga($size, $fill, $iconTypeWeight);
}

function IconManufacturing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconManufacturing {
	return new IconManufacturing($size, $fill, $iconTypeWeight);
}

function IconMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMap {
	return new IconMap($size, $fill, $iconTypeWeight);
}

function IconMapSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMapSearch {
	return new IconMapSearch($size, $fill, $iconTypeWeight);
}

function IconMapsUgc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMapsUgc {
	return new IconMapsUgc($size, $fill, $iconTypeWeight);
}

function IconMargin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMargin {
	return new IconMargin($size, $fill, $iconTypeWeight);
}

function IconMarkAsUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkAsUnread {
	return new IconMarkAsUnread($size, $fill, $iconTypeWeight);
}

function IconMarkChatRead(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkChatRead {
	return new IconMarkChatRead($size, $fill, $iconTypeWeight);
}

function IconMarkChatUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkChatUnread {
	return new IconMarkChatUnread($size, $fill, $iconTypeWeight);
}

function IconMarkdown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkdown {
	return new IconMarkdown($size, $fill, $iconTypeWeight);
}

function IconMarkdownCopy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkdownCopy {
	return new IconMarkdownCopy($size, $fill, $iconTypeWeight);
}

function IconMarkdownPaste(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkdownPaste {
	return new IconMarkdownPaste($size, $fill, $iconTypeWeight);
}

function IconMarkEmailRead(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkEmailRead {
	return new IconMarkEmailRead($size, $fill, $iconTypeWeight);
}

function IconMarkEmailUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkEmailUnread {
	return new IconMarkEmailUnread($size, $fill, $iconTypeWeight);
}

function IconMarkUnreadChatAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkUnreadChatAlt {
	return new IconMarkUnreadChatAlt($size, $fill, $iconTypeWeight);
}

function IconMarkunreadMailbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMarkunreadMailbox {
	return new IconMarkunreadMailbox($size, $fill, $iconTypeWeight);
}

function IconMaskedTransitions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMaskedTransitions {
	return new IconMaskedTransitions($size, $fill, $iconTypeWeight);
}

function IconMaskedTransitionsAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMaskedTransitionsAdd {
	return new IconMaskedTransitionsAdd($size, $fill, $iconTypeWeight);
}

function IconMasks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMasks {
	return new IconMasks($size, $fill, $iconTypeWeight);
}

function IconMatchCase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatchCase {
	return new IconMatchCase($size, $fill, $iconTypeWeight);
}

function IconMatchCaseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatchCaseOff {
	return new IconMatchCaseOff($size, $fill, $iconTypeWeight);
}

function IconMatchWord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatchWord {
	return new IconMatchWord($size, $fill, $iconTypeWeight);
}

function IconMatter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMatter {
	return new IconMatter($size, $fill, $iconTypeWeight);
}

function IconMaximize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMaximize {
	return new IconMaximize($size, $fill, $iconTypeWeight);
}

function IconMeasuringTape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMeasuringTape {
	return new IconMeasuringTape($size, $fill, $iconTypeWeight);
}

function IconMediaBluetoothOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaBluetoothOff {
	return new IconMediaBluetoothOff($size, $fill, $iconTypeWeight);
}

function IconMediaBluetoothOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaBluetoothOn {
	return new IconMediaBluetoothOn($size, $fill, $iconTypeWeight);
}

function IconMediaLink(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaLink {
	return new IconMediaLink($size, $fill, $iconTypeWeight);
}

function IconMediaOutput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaOutput {
	return new IconMediaOutput($size, $fill, $iconTypeWeight);
}

function IconMediaOutputOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediaOutputOff {
	return new IconMediaOutputOff($size, $fill, $iconTypeWeight);
}

function IconMediation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMediation {
	return new IconMediation($size, $fill, $iconTypeWeight);
}

function IconMedicalInformation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicalInformation {
	return new IconMedicalInformation($size, $fill, $iconTypeWeight);
}

function IconMedicalMask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicalMask {
	return new IconMedicalMask($size, $fill, $iconTypeWeight);
}

function IconMedicalServices(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicalServices {
	return new IconMedicalServices($size, $fill, $iconTypeWeight);
}

function IconMedication(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedication {
	return new IconMedication($size, $fill, $iconTypeWeight);
}

function IconMedicationLiquid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMedicationLiquid {
	return new IconMedicationLiquid($size, $fill, $iconTypeWeight);
}

function IconMeetingRoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMeetingRoom {
	return new IconMeetingRoom($size, $fill, $iconTypeWeight);
}

function IconMemory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMemory {
	return new IconMemory($size, $fill, $iconTypeWeight);
}

function IconMemoryAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMemoryAlt {
	return new IconMemoryAlt($size, $fill, $iconTypeWeight);
}

function IconMenstrualHealth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenstrualHealth {
	return new IconMenstrualHealth($size, $fill, $iconTypeWeight);
}

function IconMenu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenu {
	return new IconMenu($size, $fill, $iconTypeWeight);
}

function IconMenuBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenuBook {
	return new IconMenuBook($size, $fill, $iconTypeWeight);
}

function IconMenuOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMenuOpen {
	return new IconMenuOpen($size, $fill, $iconTypeWeight);
}

function IconMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMerge {
	return new IconMerge($size, $fill, $iconTypeWeight);
}

function IconMergeType(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMergeType {
	return new IconMergeType($size, $fill, $iconTypeWeight);
}

function IconMetabolism(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMetabolism {
	return new IconMetabolism($size, $fill, $iconTypeWeight);
}

function IconMetro(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMetro {
	return new IconMetro($size, $fill, $iconTypeWeight);
}

function IconMfgNestYaleLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMfgNestYaleLock {
	return new IconMfgNestYaleLock($size, $fill, $iconTypeWeight);
}

function IconMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMic {
	return new IconMic($size, $fill, $iconTypeWeight);
}

function IconMicAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicAlert {
	return new IconMicAlert($size, $fill, $iconTypeWeight);
}

function IconMicDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicDouble {
	return new IconMicDouble($size, $fill, $iconTypeWeight);
}

function IconMicExternalOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicExternalOff {
	return new IconMicExternalOff($size, $fill, $iconTypeWeight);
}

function IconMicExternalOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicExternalOn {
	return new IconMicExternalOn($size, $fill, $iconTypeWeight);
}

function IconMicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicOff {
	return new IconMicOff($size, $fill, $iconTypeWeight);
}

function IconMicrobiology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicrobiology {
	return new IconMicrobiology($size, $fill, $iconTypeWeight);
}

function IconMicrowave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicrowave {
	return new IconMicrowave($size, $fill, $iconTypeWeight);
}

function IconMicrowaveGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMicrowaveGen {
	return new IconMicrowaveGen($size, $fill, $iconTypeWeight);
}

function IconMilitaryTech(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMilitaryTech {
	return new IconMilitaryTech($size, $fill, $iconTypeWeight);
}

function IconMimo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMimo {
	return new IconMimo($size, $fill, $iconTypeWeight);
}

function IconMimoDisconnect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMimoDisconnect {
	return new IconMimoDisconnect($size, $fill, $iconTypeWeight);
}

function IconMindfulness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMindfulness {
	return new IconMindfulness($size, $fill, $iconTypeWeight);
}

function IconMinimize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMinimize {
	return new IconMinimize($size, $fill, $iconTypeWeight);
}

function IconMinorCrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMinorCrash {
	return new IconMinorCrash($size, $fill, $iconTypeWeight);
}

function IconMintmark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMintmark {
	return new IconMintmark($size, $fill, $iconTypeWeight);
}

function IconMissedVideoCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMissedVideoCall {
	return new IconMissedVideoCall($size, $fill, $iconTypeWeight);
}

function IconMissingController(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMissingController {
	return new IconMissingController($size, $fill, $iconTypeWeight);
}

function IconMist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMist {
	return new IconMist($size, $fill, $iconTypeWeight);
}

function IconMitre(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMitre {
	return new IconMitre($size, $fill, $iconTypeWeight);
}

function IconMixtureMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMixtureMed {
	return new IconMixtureMed($size, $fill, $iconTypeWeight);
}

function IconMms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMms {
	return new IconMms($size, $fill, $iconTypeWeight);
}

function IconMobiledataOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobiledataOff {
	return new IconMobiledataOff($size, $fill, $iconTypeWeight);
}

function IconMobileFriendly(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobileFriendly {
	return new IconMobileFriendly($size, $fill, $iconTypeWeight);
}

function IconMobileOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobileOff {
	return new IconMobileOff($size, $fill, $iconTypeWeight);
}

function IconMobileScreenShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMobileScreenShare {
	return new IconMobileScreenShare($size, $fill, $iconTypeWeight);
}

function IconModeComment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeComment {
	return new IconModeComment($size, $fill, $iconTypeWeight);
}

function IconModeCool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeCool {
	return new IconModeCool($size, $fill, $iconTypeWeight);
}

function IconModeCoolOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeCoolOff {
	return new IconModeCoolOff($size, $fill, $iconTypeWeight);
}

function IconModeDual(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeDual {
	return new IconModeDual($size, $fill, $iconTypeWeight);
}

function IconModeFan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeFan {
	return new IconModeFan($size, $fill, $iconTypeWeight);
}

function IconModeFanOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeFanOff {
	return new IconModeFanOff($size, $fill, $iconTypeWeight);
}

function IconModeHeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeHeat {
	return new IconModeHeat($size, $fill, $iconTypeWeight);
}

function IconModeHeatCool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeHeatCool {
	return new IconModeHeatCool($size, $fill, $iconTypeWeight);
}

function IconModeHeatOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeHeatOff {
	return new IconModeHeatOff($size, $fill, $iconTypeWeight);
}

function IconModeling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeling {
	return new IconModeling($size, $fill, $iconTypeWeight);
}

function IconModelTraining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModelTraining {
	return new IconModelTraining($size, $fill, $iconTypeWeight);
}

function IconModeNight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeNight {
	return new IconModeNight($size, $fill, $iconTypeWeight);
}

function IconModeOffOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeOffOn {
	return new IconModeOffOn($size, $fill, $iconTypeWeight);
}

function IconModeOfTravel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeOfTravel {
	return new IconModeOfTravel($size, $fill, $iconTypeWeight);
}

function IconModeStandby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconModeStandby {
	return new IconModeStandby($size, $fill, $iconTypeWeight);
}

function IconMoney(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoney {
	return new IconMoney($size, $fill, $iconTypeWeight);
}

function IconMoneyBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoneyBag {
	return new IconMoneyBag($size, $fill, $iconTypeWeight);
}

function IconMoneyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoneyOff {
	return new IconMoneyOff($size, $fill, $iconTypeWeight);
}

function IconMonitor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitor {
	return new IconMonitor($size, $fill, $iconTypeWeight);
}

function IconMonitorHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorHeart {
	return new IconMonitorHeart($size, $fill, $iconTypeWeight);
}

function IconMonitoring(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitoring {
	return new IconMonitoring($size, $fill, $iconTypeWeight);
}

function IconMonitorWeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorWeight {
	return new IconMonitorWeight($size, $fill, $iconTypeWeight);
}

function IconMonitorWeightGain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorWeightGain {
	return new IconMonitorWeightGain($size, $fill, $iconTypeWeight);
}

function IconMonitorWeightLoss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonitorWeightLoss {
	return new IconMonitorWeightLoss($size, $fill, $iconTypeWeight);
}

function IconMonochromePhotos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonochromePhotos {
	return new IconMonochromePhotos($size, $fill, $iconTypeWeight);
}

function IconMonorail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMonorail {
	return new IconMonorail($size, $fill, $iconTypeWeight);
}

function IconMood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMood {
	return new IconMood($size, $fill, $iconTypeWeight);
}

function IconMoodBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoodBad {
	return new IconMoodBad($size, $fill, $iconTypeWeight);
}

function IconMop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMop {
	return new IconMop($size, $fill, $iconTypeWeight);
}

function IconMoped(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoped {
	return new IconMoped($size, $fill, $iconTypeWeight);
}

function IconMore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMore {
	return new IconMore($size, $fill, $iconTypeWeight);
}

function IconMoreDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreDown {
	return new IconMoreDown($size, $fill, $iconTypeWeight);
}

function IconMoreHoriz(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreHoriz {
	return new IconMoreHoriz($size, $fill, $iconTypeWeight);
}

function IconMoreTime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreTime {
	return new IconMoreTime($size, $fill, $iconTypeWeight);
}

function IconMoreUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreUp {
	return new IconMoreUp($size, $fill, $iconTypeWeight);
}

function IconMoreVert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoreVert {
	return new IconMoreVert($size, $fill, $iconTypeWeight);
}

function IconMosque(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMosque {
	return new IconMosque($size, $fill, $iconTypeWeight);
}

function IconMotionBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionBlur {
	return new IconMotionBlur($size, $fill, $iconTypeWeight);
}

function IconMotionMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionMode {
	return new IconMotionMode($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosAuto {
	return new IconMotionPhotosAuto($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosOff {
	return new IconMotionPhotosOff($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosOn {
	return new IconMotionPhotosOn($size, $fill, $iconTypeWeight);
}

function IconMotionPhotosPaused(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPhotosPaused {
	return new IconMotionPhotosPaused($size, $fill, $iconTypeWeight);
}

function IconMotionPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionPlay {
	return new IconMotionPlay($size, $fill, $iconTypeWeight);
}

function IconMotionSensorActive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorActive {
	return new IconMotionSensorActive($size, $fill, $iconTypeWeight);
}

function IconMotionSensorAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorAlert {
	return new IconMotionSensorAlert($size, $fill, $iconTypeWeight);
}

function IconMotionSensorIdle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorIdle {
	return new IconMotionSensorIdle($size, $fill, $iconTypeWeight);
}

function IconMotionSensorUrgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotionSensorUrgent {
	return new IconMotionSensorUrgent($size, $fill, $iconTypeWeight);
}

function IconMotorcycle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMotorcycle {
	return new IconMotorcycle($size, $fill, $iconTypeWeight);
}

function IconMountainFlag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMountainFlag {
	return new IconMountainFlag($size, $fill, $iconTypeWeight);
}

function IconMouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMouse {
	return new IconMouse($size, $fill, $iconTypeWeight);
}

function IconMouseLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMouseLock {
	return new IconMouseLock($size, $fill, $iconTypeWeight);
}

function IconMouseLockOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMouseLockOff {
	return new IconMouseLockOff($size, $fill, $iconTypeWeight);
}

function IconMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMove {
	return new IconMove($size, $fill, $iconTypeWeight);
}

function IconMovedLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovedLocation {
	return new IconMovedLocation($size, $fill, $iconTypeWeight);
}

function IconMoveDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveDown {
	return new IconMoveDown($size, $fill, $iconTypeWeight);
}

function IconMoveGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveGroup {
	return new IconMoveGroup($size, $fill, $iconTypeWeight);
}

function IconMoveItem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveItem {
	return new IconMoveItem($size, $fill, $iconTypeWeight);
}

function IconMoveLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveLocation {
	return new IconMoveLocation($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionDown {
	return new IconMoveSelectionDown($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionLeft {
	return new IconMoveSelectionLeft($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionRight {
	return new IconMoveSelectionRight($size, $fill, $iconTypeWeight);
}

function IconMoveSelectionUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveSelectionUp {
	return new IconMoveSelectionUp($size, $fill, $iconTypeWeight);
}

function IconMoveToInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveToInbox {
	return new IconMoveToInbox($size, $fill, $iconTypeWeight);
}

function IconMoveUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoveUp {
	return new IconMoveUp($size, $fill, $iconTypeWeight);
}

function IconMovie(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovie {
	return new IconMovie($size, $fill, $iconTypeWeight);
}

function IconMovieEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovieEdit {
	return new IconMovieEdit($size, $fill, $iconTypeWeight);
}

function IconMovieInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovieInfo {
	return new IconMovieInfo($size, $fill, $iconTypeWeight);
}

function IconMovieOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovieOff {
	return new IconMovieOff($size, $fill, $iconTypeWeight);
}

function IconMoving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMoving {
	return new IconMoving($size, $fill, $iconTypeWeight);
}

function IconMovingBeds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovingBeds {
	return new IconMovingBeds($size, $fill, $iconTypeWeight);
}

function IconMovingMinistry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMovingMinistry {
	return new IconMovingMinistry($size, $fill, $iconTypeWeight);
}

function IconMp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMp {
	return new IconMp($size, $fill, $iconTypeWeight);
}

function IconMulticooker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMulticooker {
	return new IconMulticooker($size, $fill, $iconTypeWeight);
}

function IconMultilineChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultilineChart {
	return new IconMultilineChart($size, $fill, $iconTypeWeight);
}

function IconMultimodalHandEye(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultimodalHandEye {
	return new IconMultimodalHandEye($size, $fill, $iconTypeWeight);
}

function IconMultipleAirports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultipleAirports {
	return new IconMultipleAirports($size, $fill, $iconTypeWeight);
}

function IconMultipleStop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMultipleStop {
	return new IconMultipleStop($size, $fill, $iconTypeWeight);
}

function IconMuseum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMuseum {
	return new IconMuseum($size, $fill, $iconTypeWeight);
}

function IconMusicCast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicCast {
	return new IconMusicCast($size, $fill, $iconTypeWeight);
}

function IconMusicNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicNote {
	return new IconMusicNote($size, $fill, $iconTypeWeight);
}

function IconMusicNoteAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicNoteAdd {
	return new IconMusicNoteAdd($size, $fill, $iconTypeWeight);
}

function IconMusicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicOff {
	return new IconMusicOff($size, $fill, $iconTypeWeight);
}

function IconMusicVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMusicVideo {
	return new IconMusicVideo($size, $fill, $iconTypeWeight);
}

function IconMyLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMyLocation {
	return new IconMyLocation($size, $fill, $iconTypeWeight);
}

function IconMystery(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconMystery {
	return new IconMystery($size, $fill, $iconTypeWeight);
}

function IconNat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNat {
	return new IconNat($size, $fill, $iconTypeWeight);
}

function IconNature(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNature {
	return new IconNature($size, $fill, $iconTypeWeight);
}

function IconNaturePeople(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNaturePeople {
	return new IconNaturePeople($size, $fill, $iconTypeWeight);
}

function IconNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNavigation {
	return new IconNavigation($size, $fill, $iconTypeWeight);
}

function IconNearby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearby {
	return new IconNearby($size, $fill, $iconTypeWeight);
}

function IconNearbyError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearbyError {
	return new IconNearbyError($size, $fill, $iconTypeWeight);
}

function IconNearbyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearbyOff {
	return new IconNearbyOff($size, $fill, $iconTypeWeight);
}

function IconNearMe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearMe {
	return new IconNearMe($size, $fill, $iconTypeWeight);
}

function IconNearMeDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNearMeDisabled {
	return new IconNearMeDisabled($size, $fill, $iconTypeWeight);
}

function IconNephrology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNephrology {
	return new IconNephrology($size, $fill, $iconTypeWeight);
}

function IconNestAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestAudio {
	return new IconNestAudio($size, $fill, $iconTypeWeight);
}

function IconNestCamFloodlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamFloodlight {
	return new IconNestCamFloodlight($size, $fill, $iconTypeWeight);
}

function IconNestCamIndoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamIndoor {
	return new IconNestCamIndoor($size, $fill, $iconTypeWeight);
}

function IconNestCamIq(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamIq {
	return new IconNestCamIq($size, $fill, $iconTypeWeight);
}

function IconNestCamIqOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamIqOutdoor {
	return new IconNestCamIqOutdoor($size, $fill, $iconTypeWeight);
}

function IconNestCamMagnetMount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamMagnetMount {
	return new IconNestCamMagnetMount($size, $fill, $iconTypeWeight);
}

function IconNestCamOutdoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamOutdoor {
	return new IconNestCamOutdoor($size, $fill, $iconTypeWeight);
}

function IconNestCamStand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamStand {
	return new IconNestCamStand($size, $fill, $iconTypeWeight);
}

function IconNestCamWallMount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamWallMount {
	return new IconNestCamWallMount($size, $fill, $iconTypeWeight);
}

function IconNestCamWiredStand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestCamWiredStand {
	return new IconNestCamWiredStand($size, $fill, $iconTypeWeight);
}

function IconNestClockFarsightAnalog(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestClockFarsightAnalog {
	return new IconNestClockFarsightAnalog($size, $fill, $iconTypeWeight);
}

function IconNestClockFarsightDigital(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestClockFarsightDigital {
	return new IconNestClockFarsightDigital($size, $fill, $iconTypeWeight);
}

function IconNestConnect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestConnect {
	return new IconNestConnect($size, $fill, $iconTypeWeight);
}

function IconNestDetect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDetect {
	return new IconNestDetect($size, $fill, $iconTypeWeight);
}

function IconNestDisplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDisplay {
	return new IconNestDisplay($size, $fill, $iconTypeWeight);
}

function IconNestDisplayMax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDisplayMax {
	return new IconNestDisplayMax($size, $fill, $iconTypeWeight);
}

function IconNestDoorbellVisitor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestDoorbellVisitor {
	return new IconNestDoorbellVisitor($size, $fill, $iconTypeWeight);
}

function IconNestEcoLeaf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestEcoLeaf {
	return new IconNestEcoLeaf($size, $fill, $iconTypeWeight);
}

function IconNestFarsightWeather(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestFarsightWeather {
	return new IconNestFarsightWeather($size, $fill, $iconTypeWeight);
}

function IconNestFoundSavings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestFoundSavings {
	return new IconNestFoundSavings($size, $fill, $iconTypeWeight);
}

function IconNestGaleWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestGaleWifi {
	return new IconNestGaleWifi($size, $fill, $iconTypeWeight);
}

function IconNestHeatLinkE(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestHeatLinkE {
	return new IconNestHeatLinkE($size, $fill, $iconTypeWeight);
}

function IconNestHeatLinkGen3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestHeatLinkGen3 {
	return new IconNestHeatLinkGen3($size, $fill, $iconTypeWeight);
}

function IconNestHelloDoorbell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestHelloDoorbell {
	return new IconNestHelloDoorbell($size, $fill, $iconTypeWeight);
}

function IconNestMini(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestMini {
	return new IconNestMini($size, $fill, $iconTypeWeight);
}

function IconNestMultiRoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestMultiRoom {
	return new IconNestMultiRoom($size, $fill, $iconTypeWeight);
}

function IconNestProtect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestProtect {
	return new IconNestProtect($size, $fill, $iconTypeWeight);
}

function IconNestRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestRemote {
	return new IconNestRemote($size, $fill, $iconTypeWeight);
}

function IconNestRemoteComfortSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestRemoteComfortSensor {
	return new IconNestRemoteComfortSensor($size, $fill, $iconTypeWeight);
}

function IconNestSecureAlarm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestSecureAlarm {
	return new IconNestSecureAlarm($size, $fill, $iconTypeWeight);
}

function IconNestSunblock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestSunblock {
	return new IconNestSunblock($size, $fill, $iconTypeWeight);
}

function IconNestTag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestTag {
	return new IconNestTag($size, $fill, $iconTypeWeight);
}

function IconNestThermostat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostat {
	return new IconNestThermostat($size, $fill, $iconTypeWeight);
}

function IconNestThermostatEEu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatEEu {
	return new IconNestThermostatEEu($size, $fill, $iconTypeWeight);
}

function IconNestThermostatGen3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatGen3 {
	return new IconNestThermostatGen3($size, $fill, $iconTypeWeight);
}

function IconNestThermostatSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatSensor {
	return new IconNestThermostatSensor($size, $fill, $iconTypeWeight);
}

function IconNestThermostatSensorEu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatSensorEu {
	return new IconNestThermostatSensorEu($size, $fill, $iconTypeWeight);
}

function IconNestThermostatZirconiumEu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestThermostatZirconiumEu {
	return new IconNestThermostatZirconiumEu($size, $fill, $iconTypeWeight);
}

function IconNestTrueRadiant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestTrueRadiant {
	return new IconNestTrueRadiant($size, $fill, $iconTypeWeight);
}

function IconNestWakeOnApproach(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWakeOnApproach {
	return new IconNestWakeOnApproach($size, $fill, $iconTypeWeight);
}

function IconNestWakeOnPress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWakeOnPress {
	return new IconNestWakeOnPress($size, $fill, $iconTypeWeight);
}

function IconNestWifiPoint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiPoint {
	return new IconNestWifiPoint($size, $fill, $iconTypeWeight);
}

function IconNestWifiPro(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiPro {
	return new IconNestWifiPro($size, $fill, $iconTypeWeight);
}

function IconNestWifiPro2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiPro2 {
	return new IconNestWifiPro2($size, $fill, $iconTypeWeight);
}

function IconNestWifiRouter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNestWifiRouter {
	return new IconNestWifiRouter($size, $fill, $iconTypeWeight);
}

function IconNetworkCell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkCell {
	return new IconNetworkCell($size, $fill, $iconTypeWeight);
}

function IconNetworkCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkCheck {
	return new IconNetworkCheck($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelligence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelligence {
	return new IconNetworkIntelligence($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelligenceHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelligenceHistory {
	return new IconNetworkIntelligenceHistory($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelligenceUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelligenceUpdate {
	return new IconNetworkIntelligenceUpdate($size, $fill, $iconTypeWeight);
}

function IconNetworkIntelNode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkIntelNode {
	return new IconNetworkIntelNode($size, $fill, $iconTypeWeight);
}

function IconNetworkLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkLocked {
	return new IconNetworkLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkManage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkManage {
	return new IconNetworkManage($size, $fill, $iconTypeWeight);
}

function IconNetworkNode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkNode {
	return new IconNetworkNode($size, $fill, $iconTypeWeight);
}

function IconNetworkPing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkPing {
	return new IconNetworkPing($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi {
	return new IconNetworkWifi($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi1Bar {
	return new IconNetworkWifi1Bar($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi1BarLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi1BarLocked {
	return new IconNetworkWifi1BarLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi2Bar {
	return new IconNetworkWifi2Bar($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi2BarLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi2BarLocked {
	return new IconNetworkWifi2BarLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi3Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi3Bar {
	return new IconNetworkWifi3Bar($size, $fill, $iconTypeWeight);
}

function IconNetworkWifi3BarLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifi3BarLocked {
	return new IconNetworkWifi3BarLocked($size, $fill, $iconTypeWeight);
}

function IconNetworkWifiLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNetworkWifiLocked {
	return new IconNetworkWifiLocked($size, $fill, $iconTypeWeight);
}

function IconNeurology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNeurology {
	return new IconNeurology($size, $fill, $iconTypeWeight);
}

function IconNewLabel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewLabel {
	return new IconNewLabel($size, $fill, $iconTypeWeight);
}

function IconNewReleases(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewReleases {
	return new IconNewReleases($size, $fill, $iconTypeWeight);
}

function IconNews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNews {
	return new IconNews($size, $fill, $iconTypeWeight);
}

function IconNewsmode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewsmode {
	return new IconNewsmode($size, $fill, $iconTypeWeight);
}

function IconNewspaper(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewspaper {
	return new IconNewspaper($size, $fill, $iconTypeWeight);
}

function IconNewsstand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewsstand {
	return new IconNewsstand($size, $fill, $iconTypeWeight);
}

function IconNewWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNewWindow {
	return new IconNewWindow($size, $fill, $iconTypeWeight);
}

function IconNextPlan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNextPlan {
	return new IconNextPlan($size, $fill, $iconTypeWeight);
}

function IconNextWeek(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNextWeek {
	return new IconNextWeek($size, $fill, $iconTypeWeight);
}

function IconNfc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNfc {
	return new IconNfc($size, $fill, $iconTypeWeight);
}

function IconNightlife(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightlife {
	return new IconNightlife($size, $fill, $iconTypeWeight);
}

function IconNightlight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightlight {
	return new IconNightlight($size, $fill, $iconTypeWeight);
}

function IconNightShelter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightShelter {
	return new IconNightShelter($size, $fill, $iconTypeWeight);
}

function IconNightSightAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightSightAuto {
	return new IconNightSightAuto($size, $fill, $iconTypeWeight);
}

function IconNightSightAutoOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightSightAutoOff {
	return new IconNightSightAutoOff($size, $fill, $iconTypeWeight);
}

function IconNightSightMax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightSightMax {
	return new IconNightSightMax($size, $fill, $iconTypeWeight);
}

function IconNightsStay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNightsStay {
	return new IconNightsStay($size, $fill, $iconTypeWeight);
}

function IconNoAccounts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoAccounts {
	return new IconNoAccounts($size, $fill, $iconTypeWeight);
}

function IconNoAdultContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoAdultContent {
	return new IconNoAdultContent($size, $fill, $iconTypeWeight);
}

function IconNoBackpack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoBackpack {
	return new IconNoBackpack($size, $fill, $iconTypeWeight);
}

function IconNoCrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoCrash {
	return new IconNoCrash($size, $fill, $iconTypeWeight);
}

function IconNoDrinks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoDrinks {
	return new IconNoDrinks($size, $fill, $iconTypeWeight);
}

function IconNoEncryption(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoEncryption {
	return new IconNoEncryption($size, $fill, $iconTypeWeight);
}

function IconNoFlash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoFlash {
	return new IconNoFlash($size, $fill, $iconTypeWeight);
}

function IconNoFood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoFood {
	return new IconNoFood($size, $fill, $iconTypeWeight);
}

function IconNoiseAware(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoiseAware {
	return new IconNoiseAware($size, $fill, $iconTypeWeight);
}

function IconNoiseControlOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoiseControlOff {
	return new IconNoiseControlOff($size, $fill, $iconTypeWeight);
}

function IconNoiseControlOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoiseControlOn {
	return new IconNoiseControlOn($size, $fill, $iconTypeWeight);
}

function IconNoLuggage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoLuggage {
	return new IconNoLuggage($size, $fill, $iconTypeWeight);
}

function IconNoMeals(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoMeals {
	return new IconNoMeals($size, $fill, $iconTypeWeight);
}

function IconNoMeetingRoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoMeetingRoom {
	return new IconNoMeetingRoom($size, $fill, $iconTypeWeight);
}

function IconNoPhotography(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoPhotography {
	return new IconNoPhotography($size, $fill, $iconTypeWeight);
}

function IconNordicWalking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNordicWalking {
	return new IconNordicWalking($size, $fill, $iconTypeWeight);
}

function IconNorth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNorth {
	return new IconNorth($size, $fill, $iconTypeWeight);
}

function IconNorthEast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNorthEast {
	return new IconNorthEast($size, $fill, $iconTypeWeight);
}

function IconNorthWest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNorthWest {
	return new IconNorthWest($size, $fill, $iconTypeWeight);
}

function IconNoSim(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoSim {
	return new IconNoSim($size, $fill, $iconTypeWeight);
}

function IconNoSound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoSound {
	return new IconNoSound($size, $fill, $iconTypeWeight);
}

function IconNoStroller(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoStroller {
	return new IconNoStroller($size, $fill, $iconTypeWeight);
}

function IconNotAccessible(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotAccessible {
	return new IconNotAccessible($size, $fill, $iconTypeWeight);
}

function IconNotAccessibleForward(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotAccessibleForward {
	return new IconNotAccessibleForward($size, $fill, $iconTypeWeight);
}

function IconNoteAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteAdd {
	return new IconNoteAdd($size, $fill, $iconTypeWeight);
}

function IconNoteAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteAlt {
	return new IconNoteAlt($size, $fill, $iconTypeWeight);
}

function IconNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotes {
	return new IconNotes($size, $fill, $iconTypeWeight);
}

function IconNoteStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteStack {
	return new IconNoteStack($size, $fill, $iconTypeWeight);
}

function IconNoteStackAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoteStackAdd {
	return new IconNoteStackAdd($size, $fill, $iconTypeWeight);
}

function IconNotificationAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationAdd {
	return new IconNotificationAdd($size, $fill, $iconTypeWeight);
}

function IconNotificationImportant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationImportant {
	return new IconNotificationImportant($size, $fill, $iconTypeWeight);
}

function IconNotificationMultiple(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationMultiple {
	return new IconNotificationMultiple($size, $fill, $iconTypeWeight);
}

function IconNotifications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotifications {
	return new IconNotifications($size, $fill, $iconTypeWeight);
}

function IconNotificationsActive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsActive {
	return new IconNotificationsActive($size, $fill, $iconTypeWeight);
}

function IconNotificationsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsOff {
	return new IconNotificationsOff($size, $fill, $iconTypeWeight);
}

function IconNotificationsPaused(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsPaused {
	return new IconNotificationsPaused($size, $fill, $iconTypeWeight);
}

function IconNotificationsUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotificationsUnread {
	return new IconNotificationsUnread($size, $fill, $iconTypeWeight);
}

function IconNotListedLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotListedLocation {
	return new IconNotListedLocation($size, $fill, $iconTypeWeight);
}

function IconNoTransfer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNoTransfer {
	return new IconNoTransfer($size, $fill, $iconTypeWeight);
}

function IconNotStarted(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNotStarted {
	return new IconNotStarted($size, $fill, $iconTypeWeight);
}

function IconNumbers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNumbers {
	return new IconNumbers($size, $fill, $iconTypeWeight);
}

function IconNutrition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconNutrition {
	return new IconNutrition($size, $fill, $iconTypeWeight);
}

function IconOds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOds {
	return new IconOds($size, $fill, $iconTypeWeight);
}

function IconOdt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOdt {
	return new IconOdt($size, $fill, $iconTypeWeight);
}

function IconOfflineBolt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflineBolt {
	return new IconOfflineBolt($size, $fill, $iconTypeWeight);
}

function IconOfflinePin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflinePin {
	return new IconOfflinePin($size, $fill, $iconTypeWeight);
}

function IconOfflinePinOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflinePinOff {
	return new IconOfflinePinOff($size, $fill, $iconTypeWeight);
}

function IconOfflineShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOfflineShare {
	return new IconOfflineShare($size, $fill, $iconTypeWeight);
}

function IconOilBarrel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOilBarrel {
	return new IconOilBarrel($size, $fill, $iconTypeWeight);
}

function IconOncology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOncology {
	return new IconOncology($size, $fill, $iconTypeWeight);
}

function IconOnDeviceTraining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnDeviceTraining {
	return new IconOnDeviceTraining($size, $fill, $iconTypeWeight);
}

function IconOnHubDevice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnHubDevice {
	return new IconOnHubDevice($size, $fill, $iconTypeWeight);
}

function IconOnlinePrediction(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnlinePrediction {
	return new IconOnlinePrediction($size, $fill, $iconTypeWeight);
}

function IconOnsen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOnsen {
	return new IconOnsen($size, $fill, $iconTypeWeight);
}

function IconOpacity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpacity {
	return new IconOpacity($size, $fill, $iconTypeWeight);
}

function IconOpenInBrowser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInBrowser {
	return new IconOpenInBrowser($size, $fill, $iconTypeWeight);
}

function IconOpenInFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInFull {
	return new IconOpenInFull($size, $fill, $iconTypeWeight);
}

function IconOpenInNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInNew {
	return new IconOpenInNew($size, $fill, $iconTypeWeight);
}

function IconOpenInNewDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInNewDown {
	return new IconOpenInNewDown($size, $fill, $iconTypeWeight);
}

function IconOpenInNewOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInNewOff {
	return new IconOpenInNewOff($size, $fill, $iconTypeWeight);
}

function IconOpenInPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenInPhone {
	return new IconOpenInPhone($size, $fill, $iconTypeWeight);
}

function IconOpenJam(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenJam {
	return new IconOpenJam($size, $fill, $iconTypeWeight);
}

function IconOpenRun(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenRun {
	return new IconOpenRun($size, $fill, $iconTypeWeight);
}

function IconOpenWith(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOpenWith {
	return new IconOpenWith($size, $fill, $iconTypeWeight);
}

function IconOphthalmology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOphthalmology {
	return new IconOphthalmology($size, $fill, $iconTypeWeight);
}

function IconOralDisease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOralDisease {
	return new IconOralDisease($size, $fill, $iconTypeWeight);
}

function IconOrbit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrbit {
	return new IconOrbit($size, $fill, $iconTypeWeight);
}

function IconOrderApprove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrderApprove {
	return new IconOrderApprove($size, $fill, $iconTypeWeight);
}

function IconOrderPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrderPlay {
	return new IconOrderPlay($size, $fill, $iconTypeWeight);
}

function IconOrders(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrders {
	return new IconOrders($size, $fill, $iconTypeWeight);
}

function IconOrthopedics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOrthopedics {
	return new IconOrthopedics($size, $fill, $iconTypeWeight);
}

function IconOtherAdmission(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOtherAdmission {
	return new IconOtherAdmission($size, $fill, $iconTypeWeight);
}

function IconOtherHouses(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOtherHouses {
	return new IconOtherHouses($size, $fill, $iconTypeWeight);
}

function IconOutbound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutbound {
	return new IconOutbound($size, $fill, $iconTypeWeight);
}

function IconOutbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutbox {
	return new IconOutbox($size, $fill, $iconTypeWeight);
}

function IconOutboxAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutboxAlt {
	return new IconOutboxAlt($size, $fill, $iconTypeWeight);
}

function IconOutdoorGarden(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutdoorGarden {
	return new IconOutdoorGarden($size, $fill, $iconTypeWeight);
}

function IconOutdoorGrill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutdoorGrill {
	return new IconOutdoorGrill($size, $fill, $iconTypeWeight);
}

function IconOutgoingMail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutgoingMail {
	return new IconOutgoingMail($size, $fill, $iconTypeWeight);
}

function IconOutlet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutlet {
	return new IconOutlet($size, $fill, $iconTypeWeight);
}

function IconOutpatient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutpatient {
	return new IconOutpatient($size, $fill, $iconTypeWeight);
}

function IconOutpatientMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutpatientMed {
	return new IconOutpatientMed($size, $fill, $iconTypeWeight);
}

function IconOutput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutput {
	return new IconOutput($size, $fill, $iconTypeWeight);
}

function IconOutputCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOutputCircle {
	return new IconOutputCircle($size, $fill, $iconTypeWeight);
}

function IconOven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOven {
	return new IconOven($size, $fill, $iconTypeWeight);
}

function IconOvenGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOvenGen {
	return new IconOvenGen($size, $fill, $iconTypeWeight);
}

function IconOverview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOverview {
	return new IconOverview($size, $fill, $iconTypeWeight);
}

function IconOverviewKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOverviewKey {
	return new IconOverviewKey($size, $fill, $iconTypeWeight);
}

function IconOwl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOwl {
	return new IconOwl($size, $fill, $iconTypeWeight);
}

function IconOxygenSaturation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconOxygenSaturation {
	return new IconOxygenSaturation($size, $fill, $iconTypeWeight);
}

function IconP2p(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconP2p {
	return new IconP2p($size, $fill, $iconTypeWeight);
}

function IconPace(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPace {
	return new IconPace($size, $fill, $iconTypeWeight);
}

function IconPacemaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPacemaker {
	return new IconPacemaker($size, $fill, $iconTypeWeight);
}

function IconPackage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPackage {
	return new IconPackage($size, $fill, $iconTypeWeight);
}

function IconPackage2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPackage2 {
	return new IconPackage2($size, $fill, $iconTypeWeight);
}

function IconPadding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPadding {
	return new IconPadding($size, $fill, $iconTypeWeight);
}

function IconPageControl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageControl {
	return new IconPageControl($size, $fill, $iconTypeWeight);
}

function IconPageFooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageFooter {
	return new IconPageFooter($size, $fill, $iconTypeWeight);
}

function IconPageHeader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageHeader {
	return new IconPageHeader($size, $fill, $iconTypeWeight);
}

function IconPageInfo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageInfo {
	return new IconPageInfo($size, $fill, $iconTypeWeight);
}

function IconPageless(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageless {
	return new IconPageless($size, $fill, $iconTypeWeight);
}

function IconPages(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPages {
	return new IconPages($size, $fill, $iconTypeWeight);
}

function IconPageview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPageview {
	return new IconPageview($size, $fill, $iconTypeWeight);
}

function IconPaid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPaid {
	return new IconPaid($size, $fill, $iconTypeWeight);
}

function IconPalette(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPalette {
	return new IconPalette($size, $fill, $iconTypeWeight);
}

function IconPallet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPallet {
	return new IconPallet($size, $fill, $iconTypeWeight);
}

function IconPanorama(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanorama {
	return new IconPanorama($size, $fill, $iconTypeWeight);
}

function IconPanoramaHorizontal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaHorizontal {
	return new IconPanoramaHorizontal($size, $fill, $iconTypeWeight);
}

function IconPanoramaPhotosphere(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaPhotosphere {
	return new IconPanoramaPhotosphere($size, $fill, $iconTypeWeight);
}

function IconPanoramaVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaVertical {
	return new IconPanoramaVertical($size, $fill, $iconTypeWeight);
}

function IconPanoramaWideAngle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanoramaWideAngle {
	return new IconPanoramaWideAngle($size, $fill, $iconTypeWeight);
}

function IconPanTool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanTool {
	return new IconPanTool($size, $fill, $iconTypeWeight);
}

function IconPanToolAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanToolAlt {
	return new IconPanToolAlt($size, $fill, $iconTypeWeight);
}

function IconPanZoom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPanZoom {
	return new IconPanZoom($size, $fill, $iconTypeWeight);
}

function IconParagliding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconParagliding {
	return new IconParagliding($size, $fill, $iconTypeWeight);
}

function IconPark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPark {
	return new IconPark($size, $fill, $iconTypeWeight);
}

function IconPartlyCloudyDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartlyCloudyDay {
	return new IconPartlyCloudyDay($size, $fill, $iconTypeWeight);
}

function IconPartlyCloudyNight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartlyCloudyNight {
	return new IconPartlyCloudyNight($size, $fill, $iconTypeWeight);
}

function IconPartnerExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartnerExchange {
	return new IconPartnerExchange($size, $fill, $iconTypeWeight);
}

function IconPartnerReports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartnerReports {
	return new IconPartnerReports($size, $fill, $iconTypeWeight);
}

function IconPartyMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPartyMode {
	return new IconPartyMode($size, $fill, $iconTypeWeight);
}

function IconPasskey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPasskey {
	return new IconPasskey($size, $fill, $iconTypeWeight);
}

function IconPassword(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPassword {
	return new IconPassword($size, $fill, $iconTypeWeight);
}

function IconPassword2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPassword2 {
	return new IconPassword2($size, $fill, $iconTypeWeight);
}

function IconPassword2Off(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPassword2Off {
	return new IconPassword2Off($size, $fill, $iconTypeWeight);
}

function IconPatientList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPatientList {
	return new IconPatientList($size, $fill, $iconTypeWeight);
}

function IconPattern(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPattern {
	return new IconPattern($size, $fill, $iconTypeWeight);
}

function IconPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPause {
	return new IconPause($size, $fill, $iconTypeWeight);
}

function IconPauseCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPauseCircle {
	return new IconPauseCircle($size, $fill, $iconTypeWeight);
}

function IconPausePresentation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPausePresentation {
	return new IconPausePresentation($size, $fill, $iconTypeWeight);
}

function IconPayments(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPayments {
	return new IconPayments($size, $fill, $iconTypeWeight);
}

function IconPedalBike(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPedalBike {
	return new IconPedalBike($size, $fill, $iconTypeWeight);
}

function IconPediatrics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPediatrics {
	return new IconPediatrics($size, $fill, $iconTypeWeight);
}

function IconPending(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPending {
	return new IconPending($size, $fill, $iconTypeWeight);
}

function IconPendingActions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPendingActions {
	return new IconPendingActions($size, $fill, $iconTypeWeight);
}

function IconPenSize1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize1 {
	return new IconPenSize1($size, $fill, $iconTypeWeight);
}

function IconPenSize2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize2 {
	return new IconPenSize2($size, $fill, $iconTypeWeight);
}

function IconPenSize3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize3 {
	return new IconPenSize3($size, $fill, $iconTypeWeight);
}

function IconPenSize4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize4 {
	return new IconPenSize4($size, $fill, $iconTypeWeight);
}

function IconPenSize5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPenSize5 {
	return new IconPenSize5($size, $fill, $iconTypeWeight);
}

function IconPentagon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPentagon {
	return new IconPentagon($size, $fill, $iconTypeWeight);
}

function IconPercent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPercent {
	return new IconPercent($size, $fill, $iconTypeWeight);
}

function IconPergola(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPergola {
	return new IconPergola($size, $fill, $iconTypeWeight);
}

function IconPermCameraMic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermCameraMic {
	return new IconPermCameraMic($size, $fill, $iconTypeWeight);
}

function IconPermContactCalendar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermContactCalendar {
	return new IconPermContactCalendar($size, $fill, $iconTypeWeight);
}

function IconPermDataSetting(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermDataSetting {
	return new IconPermDataSetting($size, $fill, $iconTypeWeight);
}

function IconPermDeviceInformation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermDeviceInformation {
	return new IconPermDeviceInformation($size, $fill, $iconTypeWeight);
}

function IconPermMedia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermMedia {
	return new IconPermMedia($size, $fill, $iconTypeWeight);
}

function IconPermPhoneMsg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermPhoneMsg {
	return new IconPermPhoneMsg($size, $fill, $iconTypeWeight);
}

function IconPermScanWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPermScanWifi {
	return new IconPermScanWifi($size, $fill, $iconTypeWeight);
}

function IconPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson {
	return new IconPerson($size, $fill, $iconTypeWeight);
}

function IconPerson2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson2 {
	return new IconPerson2($size, $fill, $iconTypeWeight);
}

function IconPerson3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson3 {
	return new IconPerson3($size, $fill, $iconTypeWeight);
}

function IconPerson4(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPerson4 {
	return new IconPerson4($size, $fill, $iconTypeWeight);
}

function IconPersonAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonAdd {
	return new IconPersonAdd($size, $fill, $iconTypeWeight);
}

function IconPersonAddDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonAddDisabled {
	return new IconPersonAddDisabled($size, $fill, $iconTypeWeight);
}

function IconPersonalBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalBag {
	return new IconPersonalBag($size, $fill, $iconTypeWeight);
}

function IconPersonalBagOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalBagOff {
	return new IconPersonalBagOff($size, $fill, $iconTypeWeight);
}

function IconPersonalBagQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalBagQuestion {
	return new IconPersonalBagQuestion($size, $fill, $iconTypeWeight);
}

function IconPersonAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonAlert {
	return new IconPersonAlert($size, $fill, $iconTypeWeight);
}

function IconPersonalInjury(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalInjury {
	return new IconPersonalInjury($size, $fill, $iconTypeWeight);
}

function IconPersonalPlaces(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonalPlaces {
	return new IconPersonalPlaces($size, $fill, $iconTypeWeight);
}

function IconPersonApron(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonApron {
	return new IconPersonApron($size, $fill, $iconTypeWeight);
}

function IconPersonBook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonBook {
	return new IconPersonBook($size, $fill, $iconTypeWeight);
}

function IconPersonCancel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonCancel {
	return new IconPersonCancel($size, $fill, $iconTypeWeight);
}

function IconPersonCelebrate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonCelebrate {
	return new IconPersonCelebrate($size, $fill, $iconTypeWeight);
}

function IconPersonCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonCheck {
	return new IconPersonCheck($size, $fill, $iconTypeWeight);
}

function IconPersonEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonEdit {
	return new IconPersonEdit($size, $fill, $iconTypeWeight);
}

function IconPersonOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonOff {
	return new IconPersonOff($size, $fill, $iconTypeWeight);
}

function IconPersonPin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonPin {
	return new IconPersonPin($size, $fill, $iconTypeWeight);
}

function IconPersonPinCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonPinCircle {
	return new IconPersonPinCircle($size, $fill, $iconTypeWeight);
}

function IconPersonPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonPlay {
	return new IconPersonPlay($size, $fill, $iconTypeWeight);
}

function IconPersonRaisedHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonRaisedHand {
	return new IconPersonRaisedHand($size, $fill, $iconTypeWeight);
}

function IconPersonRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonRemove {
	return new IconPersonRemove($size, $fill, $iconTypeWeight);
}

function IconPersonSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPersonSearch {
	return new IconPersonSearch($size, $fill, $iconTypeWeight);
}

function IconPestControl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPestControl {
	return new IconPestControl($size, $fill, $iconTypeWeight);
}

function IconPestControlRodent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPestControlRodent {
	return new IconPestControlRodent($size, $fill, $iconTypeWeight);
}

function IconPets(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPets {
	return new IconPets($size, $fill, $iconTypeWeight);
}

function IconPetSupplies(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPetSupplies {
	return new IconPetSupplies($size, $fill, $iconTypeWeight);
}

function IconPhishing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhishing {
	return new IconPhishing($size, $fill, $iconTypeWeight);
}

function IconPhoneAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneAndroid {
	return new IconPhoneAndroid($size, $fill, $iconTypeWeight);
}

function IconPhoneBluetoothSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneBluetoothSpeaker {
	return new IconPhoneBluetoothSpeaker($size, $fill, $iconTypeWeight);
}

function IconPhoneCallback(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneCallback {
	return new IconPhoneCallback($size, $fill, $iconTypeWeight);
}

function IconPhoneDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneDisabled {
	return new IconPhoneDisabled($size, $fill, $iconTypeWeight);
}

function IconPhoneEnabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneEnabled {
	return new IconPhoneEnabled($size, $fill, $iconTypeWeight);
}

function IconPhoneForwarded(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneForwarded {
	return new IconPhoneForwarded($size, $fill, $iconTypeWeight);
}

function IconPhoneInTalk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneInTalk {
	return new IconPhoneInTalk($size, $fill, $iconTypeWeight);
}

function IconPhoneIphone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneIphone {
	return new IconPhoneIphone($size, $fill, $iconTypeWeight);
}

function IconPhonelinkErase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkErase {
	return new IconPhonelinkErase($size, $fill, $iconTypeWeight);
}

function IconPhonelinkLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkLock {
	return new IconPhonelinkLock($size, $fill, $iconTypeWeight);
}

function IconPhonelinkOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkOff {
	return new IconPhonelinkOff($size, $fill, $iconTypeWeight);
}

function IconPhonelinkRing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkRing {
	return new IconPhonelinkRing($size, $fill, $iconTypeWeight);
}

function IconPhonelinkRingOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkRingOff {
	return new IconPhonelinkRingOff($size, $fill, $iconTypeWeight);
}

function IconPhonelinkSetup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonelinkSetup {
	return new IconPhonelinkSetup($size, $fill, $iconTypeWeight);
}

function IconPhoneLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneLocked {
	return new IconPhoneLocked($size, $fill, $iconTypeWeight);
}

function IconPhoneMissed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoneMissed {
	return new IconPhoneMissed($size, $fill, $iconTypeWeight);
}

function IconPhonePaused(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhonePaused {
	return new IconPhonePaused($size, $fill, $iconTypeWeight);
}

function IconPhoto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhoto {
	return new IconPhoto($size, $fill, $iconTypeWeight);
}

function IconPhotoAlbum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoAlbum {
	return new IconPhotoAlbum($size, $fill, $iconTypeWeight);
}

function IconPhotoAutoMerge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoAutoMerge {
	return new IconPhotoAutoMerge($size, $fill, $iconTypeWeight);
}

function IconPhotoCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoCamera {
	return new IconPhotoCamera($size, $fill, $iconTypeWeight);
}

function IconPhotoCameraBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoCameraBack {
	return new IconPhotoCameraBack($size, $fill, $iconTypeWeight);
}

function IconPhotoCameraFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoCameraFront {
	return new IconPhotoCameraFront($size, $fill, $iconTypeWeight);
}

function IconPhotoFrame(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoFrame {
	return new IconPhotoFrame($size, $fill, $iconTypeWeight);
}

function IconPhotoLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoLibrary {
	return new IconPhotoLibrary($size, $fill, $iconTypeWeight);
}

function IconPhotoPrints(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoPrints {
	return new IconPhotoPrints($size, $fill, $iconTypeWeight);
}

function IconPhotoSizeSelectLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoSizeSelectLarge {
	return new IconPhotoSizeSelectLarge($size, $fill, $iconTypeWeight);
}

function IconPhotoSizeSelectSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhotoSizeSelectSmall {
	return new IconPhotoSizeSelectSmall($size, $fill, $iconTypeWeight);
}

function IconPhp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhp {
	return new IconPhp($size, $fill, $iconTypeWeight);
}

function IconPhysicalTherapy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPhysicalTherapy {
	return new IconPhysicalTherapy($size, $fill, $iconTypeWeight);
}

function IconPiano(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPiano {
	return new IconPiano($size, $fill, $iconTypeWeight);
}

function IconPianoOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPianoOff {
	return new IconPianoOff($size, $fill, $iconTypeWeight);
}

function IconPictureAsPdf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureAsPdf {
	return new IconPictureAsPdf($size, $fill, $iconTypeWeight);
}

function IconPictureInPicture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPicture {
	return new IconPictureInPicture($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureAlt {
	return new IconPictureInPictureAlt($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureCenter {
	return new IconPictureInPictureCenter($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureLarge {
	return new IconPictureInPictureLarge($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureMedium {
	return new IconPictureInPictureMedium($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureMobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureMobile {
	return new IconPictureInPictureMobile($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureOff {
	return new IconPictureInPictureOff($size, $fill, $iconTypeWeight);
}

function IconPictureInPictureSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPictureInPictureSmall {
	return new IconPictureInPictureSmall($size, $fill, $iconTypeWeight);
}

function IconPieChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPieChart {
	return new IconPieChart($size, $fill, $iconTypeWeight);
}

function IconPill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPill {
	return new IconPill($size, $fill, $iconTypeWeight);
}

function IconPillOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPillOff {
	return new IconPillOff($size, $fill, $iconTypeWeight);
}

function IconPin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPin {
	return new IconPin($size, $fill, $iconTypeWeight);
}

function IconPinboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinboard {
	return new IconPinboard($size, $fill, $iconTypeWeight);
}

function IconPinboardUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinboardUnread {
	return new IconPinboardUnread($size, $fill, $iconTypeWeight);
}

function IconPinch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinch {
	return new IconPinch($size, $fill, $iconTypeWeight);
}

function IconPinchZoomIn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinchZoomIn {
	return new IconPinchZoomIn($size, $fill, $iconTypeWeight);
}

function IconPinchZoomOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinchZoomOut {
	return new IconPinchZoomOut($size, $fill, $iconTypeWeight);
}

function IconPinDrop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinDrop {
	return new IconPinDrop($size, $fill, $iconTypeWeight);
}

function IconPinEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinEnd {
	return new IconPinEnd($size, $fill, $iconTypeWeight);
}

function IconPinInvoke(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPinInvoke {
	return new IconPinInvoke($size, $fill, $iconTypeWeight);
}

function IconPip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPip {
	return new IconPip($size, $fill, $iconTypeWeight);
}

function IconPipExit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPipExit {
	return new IconPipExit($size, $fill, $iconTypeWeight);
}

function IconPivotTableChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPivotTableChart {
	return new IconPivotTableChart($size, $fill, $iconTypeWeight);
}

function IconPlaceItem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaceItem {
	return new IconPlaceItem($size, $fill, $iconTypeWeight);
}

function IconPlagiarism(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlagiarism {
	return new IconPlagiarism($size, $fill, $iconTypeWeight);
}

function IconPlanet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlanet {
	return new IconPlanet($size, $fill, $iconTypeWeight);
}

function IconPlannerBannerAdPt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlannerBannerAdPt {
	return new IconPlannerBannerAdPt($size, $fill, $iconTypeWeight);
}

function IconPlannerReview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlannerReview {
	return new IconPlannerReview($size, $fill, $iconTypeWeight);
}

function IconPlayArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayArrow {
	return new IconPlayArrow($size, $fill, $iconTypeWeight);
}

function IconPlayCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayCircle {
	return new IconPlayCircle($size, $fill, $iconTypeWeight);
}

function IconPlayDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayDisabled {
	return new IconPlayDisabled($size, $fill, $iconTypeWeight);
}

function IconPlayForWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayForWork {
	return new IconPlayForWork($size, $fill, $iconTypeWeight);
}

function IconPlayingCards(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayingCards {
	return new IconPlayingCards($size, $fill, $iconTypeWeight);
}

function IconPlayLesson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayLesson {
	return new IconPlayLesson($size, $fill, $iconTypeWeight);
}

function IconPlaylistAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAdd {
	return new IconPlaylistAdd($size, $fill, $iconTypeWeight);
}

function IconPlaylistAddCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAddCheck {
	return new IconPlaylistAddCheck($size, $fill, $iconTypeWeight);
}

function IconPlaylistAddCheckCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAddCheckCircle {
	return new IconPlaylistAddCheckCircle($size, $fill, $iconTypeWeight);
}

function IconPlaylistAddCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistAddCircle {
	return new IconPlaylistAddCircle($size, $fill, $iconTypeWeight);
}

function IconPlaylistPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistPlay {
	return new IconPlaylistPlay($size, $fill, $iconTypeWeight);
}

function IconPlaylistRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlaylistRemove {
	return new IconPlaylistRemove($size, $fill, $iconTypeWeight);
}

function IconPlayPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlayPause {
	return new IconPlayPause($size, $fill, $iconTypeWeight);
}

function IconPlumbing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPlumbing {
	return new IconPlumbing($size, $fill, $iconTypeWeight);
}

function IconPodcasts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPodcasts {
	return new IconPodcasts($size, $fill, $iconTypeWeight);
}

function IconPodiatry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPodiatry {
	return new IconPodiatry($size, $fill, $iconTypeWeight);
}

function IconPodium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPodium {
	return new IconPodium($size, $fill, $iconTypeWeight);
}

function IconPointOfSale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPointOfSale {
	return new IconPointOfSale($size, $fill, $iconTypeWeight);
}

function IconPointScan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPointScan {
	return new IconPointScan($size, $fill, $iconTypeWeight);
}

function IconPokerChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPokerChip {
	return new IconPokerChip($size, $fill, $iconTypeWeight);
}

function IconPolicy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolicy {
	return new IconPolicy($size, $fill, $iconTypeWeight);
}

function IconPolicyAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolicyAlert {
	return new IconPolicyAlert($size, $fill, $iconTypeWeight);
}

function IconPolyline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolyline {
	return new IconPolyline($size, $fill, $iconTypeWeight);
}

function IconPolymer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPolymer {
	return new IconPolymer($size, $fill, $iconTypeWeight);
}

function IconPool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPool {
	return new IconPool($size, $fill, $iconTypeWeight);
}

function IconPortableWifiOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPortableWifiOff {
	return new IconPortableWifiOff($size, $fill, $iconTypeWeight);
}

function IconPositionBottomLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPositionBottomLeft {
	return new IconPositionBottomLeft($size, $fill, $iconTypeWeight);
}

function IconPositionBottomRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPositionBottomRight {
	return new IconPositionBottomRight($size, $fill, $iconTypeWeight);
}

function IconPositionTopRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPositionTopRight {
	return new IconPositionTopRight($size, $fill, $iconTypeWeight);
}

function IconPost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPost {
	return new IconPost($size, $fill, $iconTypeWeight);
}

function IconPostAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPostAdd {
	return new IconPostAdd($size, $fill, $iconTypeWeight);
}

function IconPottedPlant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPottedPlant {
	return new IconPottedPlant($size, $fill, $iconTypeWeight);
}

function IconPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPower {
	return new IconPower($size, $fill, $iconTypeWeight);
}

function IconPowerInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerInput {
	return new IconPowerInput($size, $fill, $iconTypeWeight);
}

function IconPowerOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerOff {
	return new IconPowerOff($size, $fill, $iconTypeWeight);
}

function IconPowerSettingsCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerSettingsCircle {
	return new IconPowerSettingsCircle($size, $fill, $iconTypeWeight);
}

function IconPowerSettingsNew(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPowerSettingsNew {
	return new IconPowerSettingsNew($size, $fill, $iconTypeWeight);
}

function IconPrayerTimes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrayerTimes {
	return new IconPrayerTimes($size, $fill, $iconTypeWeight);
}

function IconPrecisionManufacturing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrecisionManufacturing {
	return new IconPrecisionManufacturing($size, $fill, $iconTypeWeight);
}

function IconPregnancy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPregnancy {
	return new IconPregnancy($size, $fill, $iconTypeWeight);
}

function IconPregnantWoman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPregnantWoman {
	return new IconPregnantWoman($size, $fill, $iconTypeWeight);
}

function IconPreliminary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPreliminary {
	return new IconPreliminary($size, $fill, $iconTypeWeight);
}

function IconPrescriptions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrescriptions {
	return new IconPrescriptions($size, $fill, $iconTypeWeight);
}

function IconPresentToAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPresentToAll {
	return new IconPresentToAll($size, $fill, $iconTypeWeight);
}

function IconPreview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPreview {
	return new IconPreview($size, $fill, $iconTypeWeight);
}

function IconPreviewOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPreviewOff {
	return new IconPreviewOff($size, $fill, $iconTypeWeight);
}

function IconPriceChange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriceChange {
	return new IconPriceChange($size, $fill, $iconTypeWeight);
}

function IconPriceCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriceCheck {
	return new IconPriceCheck($size, $fill, $iconTypeWeight);
}

function IconPrint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrint {
	return new IconPrint($size, $fill, $iconTypeWeight);
}

function IconPrintAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintAdd {
	return new IconPrintAdd($size, $fill, $iconTypeWeight);
}

function IconPrintConnect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintConnect {
	return new IconPrintConnect($size, $fill, $iconTypeWeight);
}

function IconPrintDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintDisabled {
	return new IconPrintDisabled($size, $fill, $iconTypeWeight);
}

function IconPrintError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintError {
	return new IconPrintError($size, $fill, $iconTypeWeight);
}

function IconPrintLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrintLock {
	return new IconPrintLock($size, $fill, $iconTypeWeight);
}

function IconPriority(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriority {
	return new IconPriority($size, $fill, $iconTypeWeight);
}

function IconPriorityHigh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPriorityHigh {
	return new IconPriorityHigh($size, $fill, $iconTypeWeight);
}

function IconPrivacy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrivacy {
	return new IconPrivacy($size, $fill, $iconTypeWeight);
}

function IconPrivacyTip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrivacyTip {
	return new IconPrivacyTip($size, $fill, $iconTypeWeight);
}

function IconPrivateConnectivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPrivateConnectivity {
	return new IconPrivateConnectivity($size, $fill, $iconTypeWeight);
}

function IconProblem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProblem {
	return new IconProblem($size, $fill, $iconTypeWeight);
}

function IconProcedure(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProcedure {
	return new IconProcedure($size, $fill, $iconTypeWeight);
}

function IconProcessChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProcessChart {
	return new IconProcessChart($size, $fill, $iconTypeWeight);
}

function IconProductionQuantityLimits(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProductionQuantityLimits {
	return new IconProductionQuantityLimits($size, $fill, $iconTypeWeight);
}

function IconProductivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProductivity {
	return new IconProductivity($size, $fill, $iconTypeWeight);
}

function IconProgressActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconProgressActivity {
	return new IconProgressActivity($size, $fill, $iconTypeWeight);
}

function IconPromptSuggestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPromptSuggestion {
	return new IconPromptSuggestion($size, $fill, $iconTypeWeight);
}

function IconPropane(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPropane {
	return new IconPropane($size, $fill, $iconTypeWeight);
}

function IconPropaneTank(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPropaneTank {
	return new IconPropaneTank($size, $fill, $iconTypeWeight);
}

function IconPsychiatry(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPsychiatry {
	return new IconPsychiatry($size, $fill, $iconTypeWeight);
}

function IconPsychology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPsychology {
	return new IconPsychology($size, $fill, $iconTypeWeight);
}

function IconPsychologyAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPsychologyAlt {
	return new IconPsychologyAlt($size, $fill, $iconTypeWeight);
}

function IconPublic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublic {
	return new IconPublic($size, $fill, $iconTypeWeight);
}

function IconPublicOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublicOff {
	return new IconPublicOff($size, $fill, $iconTypeWeight);
}

function IconPublish(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublish {
	return new IconPublish($size, $fill, $iconTypeWeight);
}

function IconPublishedWithChanges(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPublishedWithChanges {
	return new IconPublishedWithChanges($size, $fill, $iconTypeWeight);
}

function IconPulmonology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPulmonology {
	return new IconPulmonology($size, $fill, $iconTypeWeight);
}

function IconPulseAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPulseAlert {
	return new IconPulseAlert($size, $fill, $iconTypeWeight);
}

function IconPunchClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconPunchClock {
	return new IconPunchClock($size, $fill, $iconTypeWeight);
}

function IconQrCode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCode {
	return new IconQrCode($size, $fill, $iconTypeWeight);
}

function IconQrCode2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCode2 {
	return new IconQrCode2($size, $fill, $iconTypeWeight);
}

function IconQrCode2Add(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCode2Add {
	return new IconQrCode2Add($size, $fill, $iconTypeWeight);
}

function IconQrCodeScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQrCodeScanner {
	return new IconQrCodeScanner($size, $fill, $iconTypeWeight);
}

function IconQueryStats(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQueryStats {
	return new IconQueryStats($size, $fill, $iconTypeWeight);
}

function IconQuestionExchange(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuestionExchange {
	return new IconQuestionExchange($size, $fill, $iconTypeWeight);
}

function IconQuestionMark(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuestionMark {
	return new IconQuestionMark($size, $fill, $iconTypeWeight);
}

function IconQueueMusic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQueueMusic {
	return new IconQueueMusic($size, $fill, $iconTypeWeight);
}

function IconQueuePlayNext(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQueuePlayNext {
	return new IconQueuePlayNext($size, $fill, $iconTypeWeight);
}

function IconQuickPhrases(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickPhrases {
	return new IconQuickPhrases($size, $fill, $iconTypeWeight);
}

function IconQuickReference(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickReference {
	return new IconQuickReference($size, $fill, $iconTypeWeight);
}

function IconQuickReferenceAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickReferenceAll {
	return new IconQuickReferenceAll($size, $fill, $iconTypeWeight);
}

function IconQuickReorder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickReorder {
	return new IconQuickReorder($size, $fill, $iconTypeWeight);
}

function IconQuickreply(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuickreply {
	return new IconQuickreply($size, $fill, $iconTypeWeight);
}

function IconQuiz(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconQuiz {
	return new IconQuiz($size, $fill, $iconTypeWeight);
}

function IconRadar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadar {
	return new IconRadar($size, $fill, $iconTypeWeight);
}

function IconRadio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadio {
	return new IconRadio($size, $fill, $iconTypeWeight);
}

function IconRadioButtonChecked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadioButtonChecked {
	return new IconRadioButtonChecked($size, $fill, $iconTypeWeight);
}

function IconRadioButtonPartial(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadioButtonPartial {
	return new IconRadioButtonPartial($size, $fill, $iconTypeWeight);
}

function IconRadioButtonUnchecked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadioButtonUnchecked {
	return new IconRadioButtonUnchecked($size, $fill, $iconTypeWeight);
}

function IconRadiology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRadiology {
	return new IconRadiology($size, $fill, $iconTypeWeight);
}

function IconRailwayAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRailwayAlert {
	return new IconRailwayAlert($size, $fill, $iconTypeWeight);
}

function IconRailwayAlert2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRailwayAlert2 {
	return new IconRailwayAlert2($size, $fill, $iconTypeWeight);
}

function IconRainy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainy {
	return new IconRainy($size, $fill, $iconTypeWeight);
}

function IconRainyHeavy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainyHeavy {
	return new IconRainyHeavy($size, $fill, $iconTypeWeight);
}

function IconRainyLight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainyLight {
	return new IconRainyLight($size, $fill, $iconTypeWeight);
}

function IconRainySnow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRainySnow {
	return new IconRainySnow($size, $fill, $iconTypeWeight);
}

function IconRamenDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRamenDining {
	return new IconRamenDining($size, $fill, $iconTypeWeight);
}

function IconRampLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRampLeft {
	return new IconRampLeft($size, $fill, $iconTypeWeight);
}

function IconRampRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRampRight {
	return new IconRampRight($size, $fill, $iconTypeWeight);
}

function IconRangeHood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRangeHood {
	return new IconRangeHood($size, $fill, $iconTypeWeight);
}

function IconRateReview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRateReview {
	return new IconRateReview($size, $fill, $iconTypeWeight);
}

function IconRaven(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRaven {
	return new IconRaven($size, $fill, $iconTypeWeight);
}

function IconRawOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRawOff {
	return new IconRawOff($size, $fill, $iconTypeWeight);
}

function IconRawOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRawOn {
	return new IconRawOn($size, $fill, $iconTypeWeight);
}

function IconReadinessScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReadinessScore {
	return new IconReadinessScore($size, $fill, $iconTypeWeight);
}

function IconReadMore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReadMore {
	return new IconReadMore($size, $fill, $iconTypeWeight);
}

function IconRealEstateAgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRealEstateAgent {
	return new IconRealEstateAgent($size, $fill, $iconTypeWeight);
}

function IconRearCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRearCamera {
	return new IconRearCamera($size, $fill, $iconTypeWeight);
}

function IconRebase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRebase {
	return new IconRebase($size, $fill, $iconTypeWeight);
}

function IconRebaseEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRebaseEdit {
	return new IconRebaseEdit($size, $fill, $iconTypeWeight);
}

function IconReceipt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReceipt {
	return new IconReceipt($size, $fill, $iconTypeWeight);
}

function IconReceiptLong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReceiptLong {
	return new IconReceiptLong($size, $fill, $iconTypeWeight);
}

function IconReceiptLongOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReceiptLongOff {
	return new IconReceiptLongOff($size, $fill, $iconTypeWeight);
}

function IconRecentActors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecentActors {
	return new IconRecentActors($size, $fill, $iconTypeWeight);
}

function IconRecenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecenter {
	return new IconRecenter($size, $fill, $iconTypeWeight);
}

function IconRecentPatient(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecentPatient {
	return new IconRecentPatient($size, $fill, $iconTypeWeight);
}

function IconRecommend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecommend {
	return new IconRecommend($size, $fill, $iconTypeWeight);
}

function IconRecordVoiceOver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecordVoiceOver {
	return new IconRecordVoiceOver($size, $fill, $iconTypeWeight);
}

function IconRectangle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRectangle {
	return new IconRectangle($size, $fill, $iconTypeWeight);
}

function IconRecycling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRecycling {
	return new IconRecycling($size, $fill, $iconTypeWeight);
}

function IconRedeem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRedeem {
	return new IconRedeem($size, $fill, $iconTypeWeight);
}

function IconRedo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRedo {
	return new IconRedo($size, $fill, $iconTypeWeight);
}

function IconReduceCapacity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReduceCapacity {
	return new IconReduceCapacity($size, $fill, $iconTypeWeight);
}

function IconRefresh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRefresh {
	return new IconRefresh($size, $fill, $iconTypeWeight);
}

function IconRegularExpression(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRegularExpression {
	return new IconRegularExpression($size, $fill, $iconTypeWeight);
}

function IconRelax(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRelax {
	return new IconRelax($size, $fill, $iconTypeWeight);
}

function IconReleaseAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReleaseAlert {
	return new IconReleaseAlert($size, $fill, $iconTypeWeight);
}

function IconRememberMe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRememberMe {
	return new IconRememberMe($size, $fill, $iconTypeWeight);
}

function IconReminder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReminder {
	return new IconReminder($size, $fill, $iconTypeWeight);
}

function IconRemoteGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoteGen {
	return new IconRemoteGen($size, $fill, $iconTypeWeight);
}

function IconRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemove {
	return new IconRemove($size, $fill, $iconTypeWeight);
}

function IconRemoveDone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveDone {
	return new IconRemoveDone($size, $fill, $iconTypeWeight);
}

function IconRemoveFromQueue(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveFromQueue {
	return new IconRemoveFromQueue($size, $fill, $iconTypeWeight);
}

function IconRemoveModerator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveModerator {
	return new IconRemoveModerator($size, $fill, $iconTypeWeight);
}

function IconRemoveRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveRoad {
	return new IconRemoveRoad($size, $fill, $iconTypeWeight);
}

function IconRemoveSelection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveSelection {
	return new IconRemoveSelection($size, $fill, $iconTypeWeight);
}

function IconRemoveShoppingCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRemoveShoppingCart {
	return new IconRemoveShoppingCart($size, $fill, $iconTypeWeight);
}

function IconReopenWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReopenWindow {
	return new IconReopenWindow($size, $fill, $iconTypeWeight);
}

function IconReorder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReorder {
	return new IconReorder($size, $fill, $iconTypeWeight);
}

function IconRepartition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepartition {
	return new IconRepartition($size, $fill, $iconTypeWeight);
}

function IconRepeat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeat {
	return new IconRepeat($size, $fill, $iconTypeWeight);
}

function IconRepeatOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeatOn {
	return new IconRepeatOn($size, $fill, $iconTypeWeight);
}

function IconRepeatOne(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeatOne {
	return new IconRepeatOne($size, $fill, $iconTypeWeight);
}

function IconRepeatOneOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRepeatOneOn {
	return new IconRepeatOneOn($size, $fill, $iconTypeWeight);
}

function IconReplaceAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplaceAudio {
	return new IconReplaceAudio($size, $fill, $iconTypeWeight);
}

function IconReplaceImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplaceImage {
	return new IconReplaceImage($size, $fill, $iconTypeWeight);
}

function IconReplaceVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplaceVideo {
	return new IconReplaceVideo($size, $fill, $iconTypeWeight);
}

function IconReplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay {
	return new IconReplay($size, $fill, $iconTypeWeight);
}

function IconReplay10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay10 {
	return new IconReplay10($size, $fill, $iconTypeWeight);
}

function IconReplay30(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay30 {
	return new IconReplay30($size, $fill, $iconTypeWeight);
}

function IconReplay5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplay5 {
	return new IconReplay5($size, $fill, $iconTypeWeight);
}

function IconReply(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReply {
	return new IconReply($size, $fill, $iconTypeWeight);
}

function IconReplyAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReplyAll {
	return new IconReplyAll($size, $fill, $iconTypeWeight);
}

function IconReport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReport {
	return new IconReport($size, $fill, $iconTypeWeight);
}

function IconReportOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReportOff {
	return new IconReportOff($size, $fill, $iconTypeWeight);
}

function IconRequestPage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRequestPage {
	return new IconRequestPage($size, $fill, $iconTypeWeight);
}

function IconRequestQuote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRequestQuote {
	return new IconRequestQuote($size, $fill, $iconTypeWeight);
}

function IconResetBrightness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetBrightness {
	return new IconResetBrightness($size, $fill, $iconTypeWeight);
}

function IconResetFocus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetFocus {
	return new IconResetFocus($size, $fill, $iconTypeWeight);
}

function IconResetImage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetImage {
	return new IconResetImage($size, $fill, $iconTypeWeight);
}

function IconResetIso(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetIso {
	return new IconResetIso($size, $fill, $iconTypeWeight);
}

function IconResetSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetSettings {
	return new IconResetSettings($size, $fill, $iconTypeWeight);
}

function IconResetShadow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetShadow {
	return new IconResetShadow($size, $fill, $iconTypeWeight);
}

function IconResetShutterSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetShutterSpeed {
	return new IconResetShutterSpeed($size, $fill, $iconTypeWeight);
}

function IconResetTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetTv {
	return new IconResetTv($size, $fill, $iconTypeWeight);
}

function IconResetWhiteBalance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetWhiteBalance {
	return new IconResetWhiteBalance($size, $fill, $iconTypeWeight);
}

function IconResetWrench(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResetWrench {
	return new IconResetWrench($size, $fill, $iconTypeWeight);
}

function IconResize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResize {
	return new IconResize($size, $fill, $iconTypeWeight);
}

function IconRespiratoryRate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRespiratoryRate {
	return new IconRespiratoryRate($size, $fill, $iconTypeWeight);
}

function IconResponsiveLayout(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResponsiveLayout {
	return new IconResponsiveLayout($size, $fill, $iconTypeWeight);
}

function IconRestartAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestartAlt {
	return new IconRestartAlt($size, $fill, $iconTypeWeight);
}

function IconRestaurant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestaurant {
	return new IconRestaurant($size, $fill, $iconTypeWeight);
}

function IconRestoreFromTrash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestoreFromTrash {
	return new IconRestoreFromTrash($size, $fill, $iconTypeWeight);
}

function IconRestorePage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRestorePage {
	return new IconRestorePage($size, $fill, $iconTypeWeight);
}

function IconResume(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconResume {
	return new IconResume($size, $fill, $iconTypeWeight);
}

function IconReviews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconReviews {
	return new IconReviews($size, $fill, $iconTypeWeight);
}

function IconRewardedAds(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRewardedAds {
	return new IconRewardedAds($size, $fill, $iconTypeWeight);
}

function IconRheumatology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRheumatology {
	return new IconRheumatology($size, $fill, $iconTypeWeight);
}

function IconRibCage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRibCage {
	return new IconRibCage($size, $fill, $iconTypeWeight);
}

function IconRiceBowl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRiceBowl {
	return new IconRiceBowl($size, $fill, $iconTypeWeight);
}

function IconRightClick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRightClick {
	return new IconRightClick($size, $fill, $iconTypeWeight);
}

function IconRightPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRightPanelClose {
	return new IconRightPanelClose($size, $fill, $iconTypeWeight);
}

function IconRightPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRightPanelOpen {
	return new IconRightPanelOpen($size, $fill, $iconTypeWeight);
}

function IconRingVolume(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRingVolume {
	return new IconRingVolume($size, $fill, $iconTypeWeight);
}

function IconRipples(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRipples {
	return new IconRipples($size, $fill, $iconTypeWeight);
}

function IconRMobiledata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRMobiledata {
	return new IconRMobiledata($size, $fill, $iconTypeWeight);
}

function IconRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoad {
	return new IconRoad($size, $fill, $iconTypeWeight);
}

function IconRobot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRobot {
	return new IconRobot($size, $fill, $iconTypeWeight);
}

function IconRobot2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRobot2 {
	return new IconRobot2($size, $fill, $iconTypeWeight);
}

function IconRocket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRocket {
	return new IconRocket($size, $fill, $iconTypeWeight);
}

function IconRocketLaunch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRocketLaunch {
	return new IconRocketLaunch($size, $fill, $iconTypeWeight);
}

function IconRollerShades(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRollerShades {
	return new IconRollerShades($size, $fill, $iconTypeWeight);
}

function IconRollerShadesClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRollerShadesClosed {
	return new IconRollerShadesClosed($size, $fill, $iconTypeWeight);
}

function IconRollerSkating(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRollerSkating {
	return new IconRollerSkating($size, $fill, $iconTypeWeight);
}

function IconRoofing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoofing {
	return new IconRoofing($size, $fill, $iconTypeWeight);
}

function IconRoomPreferences(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoomPreferences {
	return new IconRoomPreferences($size, $fill, $iconTypeWeight);
}

function IconRoomService(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoomService {
	return new IconRoomService($size, $fill, $iconTypeWeight);
}

function IconRotate90DegreesCcw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotate90DegreesCcw {
	return new IconRotate90DegreesCcw($size, $fill, $iconTypeWeight);
}

function IconRotate90DegreesCw(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotate90DegreesCw {
	return new IconRotate90DegreesCw($size, $fill, $iconTypeWeight);
}

function IconRotateAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotateAuto {
	return new IconRotateAuto($size, $fill, $iconTypeWeight);
}

function IconRotateLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotateLeft {
	return new IconRotateLeft($size, $fill, $iconTypeWeight);
}

function IconRotateRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRotateRight {
	return new IconRotateRight($size, $fill, $iconTypeWeight);
}

function IconRoundaboutLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoundaboutLeft {
	return new IconRoundaboutLeft($size, $fill, $iconTypeWeight);
}

function IconRoundaboutRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoundaboutRight {
	return new IconRoundaboutRight($size, $fill, $iconTypeWeight);
}

function IconRoundedCorner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoundedCorner {
	return new IconRoundedCorner($size, $fill, $iconTypeWeight);
}

function IconRoute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoute {
	return new IconRoute($size, $fill, $iconTypeWeight);
}

function IconRouter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRouter {
	return new IconRouter($size, $fill, $iconTypeWeight);
}

function IconRoutine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRoutine {
	return new IconRoutine($size, $fill, $iconTypeWeight);
}

function IconRowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRowing {
	return new IconRowing($size, $fill, $iconTypeWeight);
}

function IconRssFeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRssFeed {
	return new IconRssFeed($size, $fill, $iconTypeWeight);
}

function IconRsvp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRsvp {
	return new IconRsvp($size, $fill, $iconTypeWeight);
}

function IconRtt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRtt {
	return new IconRtt($size, $fill, $iconTypeWeight);
}

function IconRubric(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRubric {
	return new IconRubric($size, $fill, $iconTypeWeight);
}

function IconRule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRule {
	return new IconRule($size, $fill, $iconTypeWeight);
}

function IconRuleFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRuleFolder {
	return new IconRuleFolder($size, $fill, $iconTypeWeight);
}

function IconRuleSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRuleSettings {
	return new IconRuleSettings($size, $fill, $iconTypeWeight);
}

function IconRunCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRunCircle {
	return new IconRunCircle($size, $fill, $iconTypeWeight);
}

function IconRunningWithErrors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRunningWithErrors {
	return new IconRunningWithErrors($size, $fill, $iconTypeWeight);
}

function IconRvHookup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconRvHookup {
	return new IconRvHookup($size, $fill, $iconTypeWeight);
}

function IconSafetyCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSafetyCheck {
	return new IconSafetyCheck($size, $fill, $iconTypeWeight);
}

function IconSafetyCheckOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSafetyCheckOff {
	return new IconSafetyCheckOff($size, $fill, $iconTypeWeight);
}

function IconSafetyDivider(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSafetyDivider {
	return new IconSafetyDivider($size, $fill, $iconTypeWeight);
}

function IconSailing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSailing {
	return new IconSailing($size, $fill, $iconTypeWeight);
}

function IconSalinity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSalinity {
	return new IconSalinity($size, $fill, $iconTypeWeight);
}

function IconSanitizer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSanitizer {
	return new IconSanitizer($size, $fill, $iconTypeWeight);
}

function IconSatellite(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSatellite {
	return new IconSatellite($size, $fill, $iconTypeWeight);
}

function IconSatelliteAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSatelliteAlt {
	return new IconSatelliteAlt($size, $fill, $iconTypeWeight);
}

function IconSauna(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSauna {
	return new IconSauna($size, $fill, $iconTypeWeight);
}

function IconSave(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSave {
	return new IconSave($size, $fill, $iconTypeWeight);
}

function IconSaveAs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSaveAs {
	return new IconSaveAs($size, $fill, $iconTypeWeight);
}

function IconSaveClock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSaveClock {
	return new IconSaveClock($size, $fill, $iconTypeWeight);
}

function IconSavedSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSavedSearch {
	return new IconSavedSearch($size, $fill, $iconTypeWeight);
}

function IconSavings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSavings {
	return new IconSavings($size, $fill, $iconTypeWeight);
}

function IconScale(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScale {
	return new IconScale($size, $fill, $iconTypeWeight);
}

function IconScan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScan {
	return new IconScan($size, $fill, $iconTypeWeight);
}

function IconScanDelete(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScanDelete {
	return new IconScanDelete($size, $fill, $iconTypeWeight);
}

function IconScanner(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScanner {
	return new IconScanner($size, $fill, $iconTypeWeight);
}

function IconScatterPlot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScatterPlot {
	return new IconScatterPlot($size, $fill, $iconTypeWeight);
}

function IconScene(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScene {
	return new IconScene($size, $fill, $iconTypeWeight);
}

function IconSchedule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSchedule {
	return new IconSchedule($size, $fill, $iconTypeWeight);
}

function IconScheduleSend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScheduleSend {
	return new IconScheduleSend($size, $fill, $iconTypeWeight);
}

function IconSchema(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSchema {
	return new IconSchema($size, $fill, $iconTypeWeight);
}

function IconSchool(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSchool {
	return new IconSchool($size, $fill, $iconTypeWeight);
}

function IconScience(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScience {
	return new IconScience($size, $fill, $iconTypeWeight);
}

function IconScienceOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScienceOff {
	return new IconScienceOff($size, $fill, $iconTypeWeight);
}

function IconScooter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScooter {
	return new IconScooter($size, $fill, $iconTypeWeight);
}

function IconScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScore {
	return new IconScore($size, $fill, $iconTypeWeight);
}

function IconScoreboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScoreboard {
	return new IconScoreboard($size, $fill, $iconTypeWeight);
}

function IconScreenLockLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenLockLandscape {
	return new IconScreenLockLandscape($size, $fill, $iconTypeWeight);
}

function IconScreenLockPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenLockPortrait {
	return new IconScreenLockPortrait($size, $fill, $iconTypeWeight);
}

function IconScreenLockRotation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenLockRotation {
	return new IconScreenLockRotation($size, $fill, $iconTypeWeight);
}

function IconScreenRecord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRecord {
	return new IconScreenRecord($size, $fill, $iconTypeWeight);
}

function IconScreenRotation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRotation {
	return new IconScreenRotation($size, $fill, $iconTypeWeight);
}

function IconScreenRotationAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRotationAlt {
	return new IconScreenRotationAlt($size, $fill, $iconTypeWeight);
}

function IconScreenRotationUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenRotationUp {
	return new IconScreenRotationUp($size, $fill, $iconTypeWeight);
}

function IconScreenSearchDesktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenSearchDesktop {
	return new IconScreenSearchDesktop($size, $fill, $iconTypeWeight);
}

function IconScreenShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenShare {
	return new IconScreenShare($size, $fill, $iconTypeWeight);
}

function IconScreenshot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshot {
	return new IconScreenshot($size, $fill, $iconTypeWeight);
}

function IconScreenshotFrame(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotFrame {
	return new IconScreenshotFrame($size, $fill, $iconTypeWeight);
}

function IconScreenshotFrame2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotFrame2 {
	return new IconScreenshotFrame2($size, $fill, $iconTypeWeight);
}

function IconScreenshotKeyboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotKeyboard {
	return new IconScreenshotKeyboard($size, $fill, $iconTypeWeight);
}

function IconScreenshotMonitor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotMonitor {
	return new IconScreenshotMonitor($size, $fill, $iconTypeWeight);
}

function IconScreenshotRegion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotRegion {
	return new IconScreenshotRegion($size, $fill, $iconTypeWeight);
}

function IconScreenshotTablet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScreenshotTablet {
	return new IconScreenshotTablet($size, $fill, $iconTypeWeight);
}

function IconScript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScript {
	return new IconScript($size, $fill, $iconTypeWeight);
}

function IconScrollableHeader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScrollableHeader {
	return new IconScrollableHeader($size, $fill, $iconTypeWeight);
}

function IconScubaDiving(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconScubaDiving {
	return new IconScubaDiving($size, $fill, $iconTypeWeight);
}

function IconSd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSd {
	return new IconSd($size, $fill, $iconTypeWeight);
}

function IconSdCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSdCard {
	return new IconSdCard($size, $fill, $iconTypeWeight);
}

function IconSdCardAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSdCardAlert {
	return new IconSdCardAlert($size, $fill, $iconTypeWeight);
}

function IconSdk(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSdk {
	return new IconSdk($size, $fill, $iconTypeWeight);
}

function IconSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearch {
	return new IconSearch($size, $fill, $iconTypeWeight);
}

function IconSearchActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchActivity {
	return new IconSearchActivity($size, $fill, $iconTypeWeight);
}

function IconSearchCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchCheck {
	return new IconSearchCheck($size, $fill, $iconTypeWeight);
}

function IconSearchCheck2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchCheck2 {
	return new IconSearchCheck2($size, $fill, $iconTypeWeight);
}

function IconSearchHandsFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchHandsFree {
	return new IconSearchHandsFree($size, $fill, $iconTypeWeight);
}

function IconSearchInsights(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchInsights {
	return new IconSearchInsights($size, $fill, $iconTypeWeight);
}

function IconSearchOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSearchOff {
	return new IconSearchOff($size, $fill, $iconTypeWeight);
}

function IconSecurity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurity {
	return new IconSecurity($size, $fill, $iconTypeWeight);
}

function IconSecurityKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurityKey {
	return new IconSecurityKey($size, $fill, $iconTypeWeight);
}

function IconSecurityUpdateGood(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurityUpdateGood {
	return new IconSecurityUpdateGood($size, $fill, $iconTypeWeight);
}

function IconSecurityUpdateWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSecurityUpdateWarning {
	return new IconSecurityUpdateWarning($size, $fill, $iconTypeWeight);
}

function IconSegment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSegment {
	return new IconSegment($size, $fill, $iconTypeWeight);
}

function IconSelect(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelect {
	return new IconSelect($size, $fill, $iconTypeWeight);
}

function IconSelectAll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectAll {
	return new IconSelectAll($size, $fill, $iconTypeWeight);
}

function IconSelectCheckBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectCheckBox {
	return new IconSelectCheckBox($size, $fill, $iconTypeWeight);
}

function IconSelectToSpeak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectToSpeak {
	return new IconSelectToSpeak($size, $fill, $iconTypeWeight);
}

function IconSelectWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectWindow {
	return new IconSelectWindow($size, $fill, $iconTypeWeight);
}

function IconSelectWindow2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectWindow2 {
	return new IconSelectWindow2($size, $fill, $iconTypeWeight);
}

function IconSelectWindowOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelectWindowOff {
	return new IconSelectWindowOff($size, $fill, $iconTypeWeight);
}

function IconSelfCare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelfCare {
	return new IconSelfCare($size, $fill, $iconTypeWeight);
}

function IconSelfImprovement(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSelfImprovement {
	return new IconSelfImprovement($size, $fill, $iconTypeWeight);
}

function IconSell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSell {
	return new IconSell($size, $fill, $iconTypeWeight);
}

function IconSend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSend {
	return new IconSend($size, $fill, $iconTypeWeight);
}

function IconSendAndArchive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendAndArchive {
	return new IconSendAndArchive($size, $fill, $iconTypeWeight);
}

function IconSendMoney(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendMoney {
	return new IconSendMoney($size, $fill, $iconTypeWeight);
}

function IconSendTimeExtension(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendTimeExtension {
	return new IconSendTimeExtension($size, $fill, $iconTypeWeight);
}

function IconSendToMobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSendToMobile {
	return new IconSendToMobile($size, $fill, $iconTypeWeight);
}

function IconSensorDoor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorDoor {
	return new IconSensorDoor($size, $fill, $iconTypeWeight);
}

function IconSensorOccupied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorOccupied {
	return new IconSensorOccupied($size, $fill, $iconTypeWeight);
}

function IconSensors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensors {
	return new IconSensors($size, $fill, $iconTypeWeight);
}

function IconSensorsKrx(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorsKrx {
	return new IconSensorsKrx($size, $fill, $iconTypeWeight);
}

function IconSensorsKrxOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorsKrxOff {
	return new IconSensorsKrxOff($size, $fill, $iconTypeWeight);
}

function IconSensorsOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorsOff {
	return new IconSensorsOff($size, $fill, $iconTypeWeight);
}

function IconSensorWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSensorWindow {
	return new IconSensorWindow($size, $fill, $iconTypeWeight);
}

function IconSentimentCalm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentCalm {
	return new IconSentimentCalm($size, $fill, $iconTypeWeight);
}

function IconSentimentContent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentContent {
	return new IconSentimentContent($size, $fill, $iconTypeWeight);
}

function IconSentimentDissatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentDissatisfied {
	return new IconSentimentDissatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentExcited(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentExcited {
	return new IconSentimentExcited($size, $fill, $iconTypeWeight);
}

function IconSentimentExtremelyDissatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentExtremelyDissatisfied {
	return new IconSentimentExtremelyDissatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentFrustrated(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentFrustrated {
	return new IconSentimentFrustrated($size, $fill, $iconTypeWeight);
}

function IconSentimentNeutral(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentNeutral {
	return new IconSentimentNeutral($size, $fill, $iconTypeWeight);
}

function IconSentimentSad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentSad {
	return new IconSentimentSad($size, $fill, $iconTypeWeight);
}

function IconSentimentSatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentSatisfied {
	return new IconSentimentSatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentStressed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentStressed {
	return new IconSentimentStressed($size, $fill, $iconTypeWeight);
}

function IconSentimentVeryDissatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentVeryDissatisfied {
	return new IconSentimentVeryDissatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentVerySatisfied(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentVerySatisfied {
	return new IconSentimentVerySatisfied($size, $fill, $iconTypeWeight);
}

function IconSentimentWorried(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSentimentWorried {
	return new IconSentimentWorried($size, $fill, $iconTypeWeight);
}

function IconSerif(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSerif {
	return new IconSerif($size, $fill, $iconTypeWeight);
}

function IconServerPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconServerPerson {
	return new IconServerPerson($size, $fill, $iconTypeWeight);
}

function IconServiceToolbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconServiceToolbox {
	return new IconServiceToolbox($size, $fill, $iconTypeWeight);
}

function IconSetMeal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSetMeal {
	return new IconSetMeal($size, $fill, $iconTypeWeight);
}

function IconSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettings {
	return new IconSettings($size, $fill, $iconTypeWeight);
}

function IconSettingsAccessibility(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsAccessibility {
	return new IconSettingsAccessibility($size, $fill, $iconTypeWeight);
}

function IconSettingsAccountBox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsAccountBox {
	return new IconSettingsAccountBox($size, $fill, $iconTypeWeight);
}

function IconSettingsAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsAlert {
	return new IconSettingsAlert($size, $fill, $iconTypeWeight);
}

function IconSettingsApplications(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsApplications {
	return new IconSettingsApplications($size, $fill, $iconTypeWeight);
}

function IconSettingsBackupRestore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBackupRestore {
	return new IconSettingsBackupRestore($size, $fill, $iconTypeWeight);
}

function IconSettingsBluetooth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBluetooth {
	return new IconSettingsBluetooth($size, $fill, $iconTypeWeight);
}

function IconSettingsBrightness(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBrightness {
	return new IconSettingsBrightness($size, $fill, $iconTypeWeight);
}

function IconSettingsBRoll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsBRoll {
	return new IconSettingsBRoll($size, $fill, $iconTypeWeight);
}

function IconSettingsCell(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsCell {
	return new IconSettingsCell($size, $fill, $iconTypeWeight);
}

function IconSettingsCinematicBlur(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsCinematicBlur {
	return new IconSettingsCinematicBlur($size, $fill, $iconTypeWeight);
}

function IconSettingsEthernet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsEthernet {
	return new IconSettingsEthernet($size, $fill, $iconTypeWeight);
}

function IconSettingsHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsHeart {
	return new IconSettingsHeart($size, $fill, $iconTypeWeight);
}

function IconSettingsInputAntenna(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputAntenna {
	return new IconSettingsInputAntenna($size, $fill, $iconTypeWeight);
}

function IconSettingsInputComponent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputComponent {
	return new IconSettingsInputComponent($size, $fill, $iconTypeWeight);
}

function IconSettingsInputHdmi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputHdmi {
	return new IconSettingsInputHdmi($size, $fill, $iconTypeWeight);
}

function IconSettingsInputSvideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsInputSvideo {
	return new IconSettingsInputSvideo($size, $fill, $iconTypeWeight);
}

function IconSettingsMotionMode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsMotionMode {
	return new IconSettingsMotionMode($size, $fill, $iconTypeWeight);
}

function IconSettingsNightSight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsNightSight {
	return new IconSettingsNightSight($size, $fill, $iconTypeWeight);
}

function IconSettingsOverscan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsOverscan {
	return new IconSettingsOverscan($size, $fill, $iconTypeWeight);
}

function IconSettingsPanorama(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPanorama {
	return new IconSettingsPanorama($size, $fill, $iconTypeWeight);
}

function IconSettingsPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPhone {
	return new IconSettingsPhone($size, $fill, $iconTypeWeight);
}

function IconSettingsPhotoCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPhotoCamera {
	return new IconSettingsPhotoCamera($size, $fill, $iconTypeWeight);
}

function IconSettingsPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsPower {
	return new IconSettingsPower($size, $fill, $iconTypeWeight);
}

function IconSettingsRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsRemote {
	return new IconSettingsRemote($size, $fill, $iconTypeWeight);
}

function IconSettingsSlowMotion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsSlowMotion {
	return new IconSettingsSlowMotion($size, $fill, $iconTypeWeight);
}

function IconSettingsSystemDaydream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsSystemDaydream {
	return new IconSettingsSystemDaydream($size, $fill, $iconTypeWeight);
}

function IconSettingsTimelapse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsTimelapse {
	return new IconSettingsTimelapse($size, $fill, $iconTypeWeight);
}

function IconSettingsVideoCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsVideoCamera {
	return new IconSettingsVideoCamera($size, $fill, $iconTypeWeight);
}

function IconSettingsVoice(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettingsVoice {
	return new IconSettingsVoice($size, $fill, $iconTypeWeight);
}

function IconSettopComponent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSettopComponent {
	return new IconSettopComponent($size, $fill, $iconTypeWeight);
}

function IconSevereCold(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSevereCold {
	return new IconSevereCold($size, $fill, $iconTypeWeight);
}

function IconShadow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShadow {
	return new IconShadow($size, $fill, $iconTypeWeight);
}

function IconShadowAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShadowAdd {
	return new IconShadowAdd($size, $fill, $iconTypeWeight);
}

function IconShadowMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShadowMinus {
	return new IconShadowMinus($size, $fill, $iconTypeWeight);
}

function IconShapeLine(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShapeLine {
	return new IconShapeLine($size, $fill, $iconTypeWeight);
}

function IconShapes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShapes {
	return new IconShapes($size, $fill, $iconTypeWeight);
}

function IconShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShare {
	return new IconShare($size, $fill, $iconTypeWeight);
}

function IconShareEta(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareEta {
	return new IconShareEta($size, $fill, $iconTypeWeight);
}

function IconShareLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareLocation {
	return new IconShareLocation($size, $fill, $iconTypeWeight);
}

function IconShareOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareOff {
	return new IconShareOff($size, $fill, $iconTypeWeight);
}

function IconShareReviews(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareReviews {
	return new IconShareReviews($size, $fill, $iconTypeWeight);
}

function IconShareWindows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShareWindows {
	return new IconShareWindows($size, $fill, $iconTypeWeight);
}

function IconSheetsRtl(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSheetsRtl {
	return new IconSheetsRtl($size, $fill, $iconTypeWeight);
}

function IconShelfAutoHide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShelfAutoHide {
	return new IconShelfAutoHide($size, $fill, $iconTypeWeight);
}

function IconShelfPosition(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShelfPosition {
	return new IconShelfPosition($size, $fill, $iconTypeWeight);
}

function IconShelves(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShelves {
	return new IconShelves($size, $fill, $iconTypeWeight);
}

function IconShield(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShield {
	return new IconShield($size, $fill, $iconTypeWeight);
}

function IconShieldLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldLock {
	return new IconShieldLock($size, $fill, $iconTypeWeight);
}

function IconShieldLocked(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldLocked {
	return new IconShieldLocked($size, $fill, $iconTypeWeight);
}

function IconShieldMoon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldMoon {
	return new IconShieldMoon($size, $fill, $iconTypeWeight);
}

function IconShieldPerson(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldPerson {
	return new IconShieldPerson($size, $fill, $iconTypeWeight);
}

function IconShieldQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldQuestion {
	return new IconShieldQuestion($size, $fill, $iconTypeWeight);
}

function IconShieldWithHeart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldWithHeart {
	return new IconShieldWithHeart($size, $fill, $iconTypeWeight);
}

function IconShieldWithHouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShieldWithHouse {
	return new IconShieldWithHouse($size, $fill, $iconTypeWeight);
}

function IconShift(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShift {
	return new IconShift($size, $fill, $iconTypeWeight);
}

function IconShiftLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShiftLock {
	return new IconShiftLock($size, $fill, $iconTypeWeight);
}

function IconShiftLockOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShiftLockOff {
	return new IconShiftLockOff($size, $fill, $iconTypeWeight);
}

function IconShop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShop {
	return new IconShop($size, $fill, $iconTypeWeight);
}

function IconShoppingBag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingBag {
	return new IconShoppingBag($size, $fill, $iconTypeWeight);
}

function IconShoppingBagSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingBagSpeed {
	return new IconShoppingBagSpeed($size, $fill, $iconTypeWeight);
}

function IconShoppingBasket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingBasket {
	return new IconShoppingBasket($size, $fill, $iconTypeWeight);
}

function IconShoppingCart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingCart {
	return new IconShoppingCart($size, $fill, $iconTypeWeight);
}

function IconShoppingCartCheckout(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingCartCheckout {
	return new IconShoppingCartCheckout($size, $fill, $iconTypeWeight);
}

function IconShoppingCartOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingCartOff {
	return new IconShoppingCartOff($size, $fill, $iconTypeWeight);
}

function IconShoppingmode(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShoppingmode {
	return new IconShoppingmode($size, $fill, $iconTypeWeight);
}

function IconShopTwo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShopTwo {
	return new IconShopTwo($size, $fill, $iconTypeWeight);
}

function IconShortStay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShortStay {
	return new IconShortStay($size, $fill, $iconTypeWeight);
}

function IconShortText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShortText {
	return new IconShortText($size, $fill, $iconTypeWeight);
}

function IconShowChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShowChart {
	return new IconShowChart($size, $fill, $iconTypeWeight);
}

function IconShower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShower {
	return new IconShower($size, $fill, $iconTypeWeight);
}

function IconShuffle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShuffle {
	return new IconShuffle($size, $fill, $iconTypeWeight);
}

function IconShuffleOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShuffleOn {
	return new IconShuffleOn($size, $fill, $iconTypeWeight);
}

function IconShutterSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShutterSpeed {
	return new IconShutterSpeed($size, $fill, $iconTypeWeight);
}

function IconShutterSpeedAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShutterSpeedAdd {
	return new IconShutterSpeedAdd($size, $fill, $iconTypeWeight);
}

function IconShutterSpeedMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconShutterSpeedMinus {
	return new IconShutterSpeedMinus($size, $fill, $iconTypeWeight);
}

function IconSick(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSick {
	return new IconSick($size, $fill, $iconTypeWeight);
}

function IconSideNavigation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSideNavigation {
	return new IconSideNavigation($size, $fill, $iconTypeWeight);
}

function IconSignalCellular0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular0Bar {
	return new IconSignalCellular0Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular1Bar {
	return new IconSignalCellular1Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular2Bar {
	return new IconSignalCellular2Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular3Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular3Bar {
	return new IconSignalCellular3Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellular4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellular4Bar {
	return new IconSignalCellular4Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAdd {
	return new IconSignalCellularAdd($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAlt {
	return new IconSignalCellularAlt($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAlt1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAlt1Bar {
	return new IconSignalCellularAlt1Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularAlt2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularAlt2Bar {
	return new IconSignalCellularAlt2Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularConnectedNoInternet0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularConnectedNoInternet0Bar {
	return new IconSignalCellularConnectedNoInternet0Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularConnectedNoInternet4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularConnectedNoInternet4Bar {
	return new IconSignalCellularConnectedNoInternet4Bar($size, $fill, $iconTypeWeight);
}

function IconSignalCellularNodata(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularNodata {
	return new IconSignalCellularNodata($size, $fill, $iconTypeWeight);
}

function IconSignalCellularNull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularNull {
	return new IconSignalCellularNull($size, $fill, $iconTypeWeight);
}

function IconSignalCellularOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularOff {
	return new IconSignalCellularOff($size, $fill, $iconTypeWeight);
}

function IconSignalCellularPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalCellularPause {
	return new IconSignalCellularPause($size, $fill, $iconTypeWeight);
}

function IconSignalDisconnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalDisconnected {
	return new IconSignalDisconnected($size, $fill, $iconTypeWeight);
}

function IconSignalWifi0Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifi0Bar {
	return new IconSignalWifi0Bar($size, $fill, $iconTypeWeight);
}

function IconSignalWifi4Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifi4Bar {
	return new IconSignalWifi4Bar($size, $fill, $iconTypeWeight);
}

function IconSignalWifiBad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiBad {
	return new IconSignalWifiBad($size, $fill, $iconTypeWeight);
}

function IconSignalWifiOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiOff {
	return new IconSignalWifiOff($size, $fill, $iconTypeWeight);
}

function IconSignalWifiStatusbarNotConnected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiStatusbarNotConnected {
	return new IconSignalWifiStatusbarNotConnected($size, $fill, $iconTypeWeight);
}

function IconSignalWifiStatusbarNull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignalWifiStatusbarNull {
	return new IconSignalWifiStatusbarNull($size, $fill, $iconTypeWeight);
}

function IconSignature(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignature {
	return new IconSignature($size, $fill, $iconTypeWeight);
}

function IconSignLanguage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignLanguage {
	return new IconSignLanguage($size, $fill, $iconTypeWeight);
}

function IconSignpost(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSignpost {
	return new IconSignpost($size, $fill, $iconTypeWeight);
}

function IconSimCard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSimCard {
	return new IconSimCard($size, $fill, $iconTypeWeight);
}

function IconSimCardDownload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSimCardDownload {
	return new IconSimCardDownload($size, $fill, $iconTypeWeight);
}

function IconSimulation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSimulation {
	return new IconSimulation($size, $fill, $iconTypeWeight);
}

function IconSingleBed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSingleBed {
	return new IconSingleBed($size, $fill, $iconTypeWeight);
}

function IconSip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSip {
	return new IconSip($size, $fill, $iconTypeWeight);
}

function IconSiren(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSiren {
	return new IconSiren($size, $fill, $iconTypeWeight);
}

function IconSirenCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSirenCheck {
	return new IconSirenCheck($size, $fill, $iconTypeWeight);
}

function IconSirenOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSirenOpen {
	return new IconSirenOpen($size, $fill, $iconTypeWeight);
}

function IconSirenQuestion(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSirenQuestion {
	return new IconSirenQuestion($size, $fill, $iconTypeWeight);
}

function IconSkateboarding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkateboarding {
	return new IconSkateboarding($size, $fill, $iconTypeWeight);
}

function IconSkeleton(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkeleton {
	return new IconSkeleton($size, $fill, $iconTypeWeight);
}

function IconSkillet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkillet {
	return new IconSkillet($size, $fill, $iconTypeWeight);
}

function IconSkilletCooktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkilletCooktop {
	return new IconSkilletCooktop($size, $fill, $iconTypeWeight);
}

function IconSkipNext(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkipNext {
	return new IconSkipNext($size, $fill, $iconTypeWeight);
}

function IconSkipPrevious(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkipPrevious {
	return new IconSkipPrevious($size, $fill, $iconTypeWeight);
}

function IconSkull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkull {
	return new IconSkull($size, $fill, $iconTypeWeight);
}

function IconSkullList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSkullList {
	return new IconSkullList($size, $fill, $iconTypeWeight);
}

function IconSlabSerif(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlabSerif {
	return new IconSlabSerif($size, $fill, $iconTypeWeight);
}

function IconSledding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSledding {
	return new IconSledding($size, $fill, $iconTypeWeight);
}

function IconSleepScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSleepScore {
	return new IconSleepScore($size, $fill, $iconTypeWeight);
}

function IconSlideLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlideLibrary {
	return new IconSlideLibrary($size, $fill, $iconTypeWeight);
}

function IconSliders(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSliders {
	return new IconSliders($size, $fill, $iconTypeWeight);
}

function IconSlideshow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlideshow {
	return new IconSlideshow($size, $fill, $iconTypeWeight);
}

function IconSlowMotionVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSlowMotionVideo {
	return new IconSlowMotionVideo($size, $fill, $iconTypeWeight);
}

function IconSmartCardReader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartCardReader {
	return new IconSmartCardReader($size, $fill, $iconTypeWeight);
}

function IconSmartCardReaderOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartCardReaderOff {
	return new IconSmartCardReaderOff($size, $fill, $iconTypeWeight);
}

function IconSmartDisplay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartDisplay {
	return new IconSmartDisplay($size, $fill, $iconTypeWeight);
}

function IconSmartOutlet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartOutlet {
	return new IconSmartOutlet($size, $fill, $iconTypeWeight);
}

function IconSmartphone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartphone {
	return new IconSmartphone($size, $fill, $iconTypeWeight);
}

function IconSmartphoneCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartphoneCamera {
	return new IconSmartphoneCamera($size, $fill, $iconTypeWeight);
}

function IconSmartScreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartScreen {
	return new IconSmartScreen($size, $fill, $iconTypeWeight);
}

function IconSmartToy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmartToy {
	return new IconSmartToy($size, $fill, $iconTypeWeight);
}

function IconSmbShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmbShare {
	return new IconSmbShare($size, $fill, $iconTypeWeight);
}

function IconSmokeFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmokeFree {
	return new IconSmokeFree($size, $fill, $iconTypeWeight);
}

function IconSmokingRooms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSmokingRooms {
	return new IconSmokingRooms($size, $fill, $iconTypeWeight);
}

function IconSms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSms {
	return new IconSms($size, $fill, $iconTypeWeight);
}

function IconSnippetFolder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnippetFolder {
	return new IconSnippetFolder($size, $fill, $iconTypeWeight);
}

function IconSnooze(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnooze {
	return new IconSnooze($size, $fill, $iconTypeWeight);
}

function IconSnowboarding(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowboarding {
	return new IconSnowboarding($size, $fill, $iconTypeWeight);
}

function IconSnowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowing {
	return new IconSnowing($size, $fill, $iconTypeWeight);
}

function IconSnowingHeavy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowingHeavy {
	return new IconSnowingHeavy($size, $fill, $iconTypeWeight);
}

function IconSnowmobile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowmobile {
	return new IconSnowmobile($size, $fill, $iconTypeWeight);
}

function IconSnowshoeing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSnowshoeing {
	return new IconSnowshoeing($size, $fill, $iconTypeWeight);
}

function IconSoap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoap {
	return new IconSoap($size, $fill, $iconTypeWeight);
}

function IconSocialDistance(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSocialDistance {
	return new IconSocialDistance($size, $fill, $iconTypeWeight);
}

function IconSocialLeaderboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSocialLeaderboard {
	return new IconSocialLeaderboard($size, $fill, $iconTypeWeight);
}

function IconSolarPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSolarPower {
	return new IconSolarPower($size, $fill, $iconTypeWeight);
}

function IconSort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSort {
	return new IconSort($size, $fill, $iconTypeWeight);
}

function IconSortByAlpha(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSortByAlpha {
	return new IconSortByAlpha($size, $fill, $iconTypeWeight);
}

function IconSos(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSos {
	return new IconSos($size, $fill, $iconTypeWeight);
}

function IconSoundDetectionDogBarking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundDetectionDogBarking {
	return new IconSoundDetectionDogBarking($size, $fill, $iconTypeWeight);
}

function IconSoundDetectionGlassBreak(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundDetectionGlassBreak {
	return new IconSoundDetectionGlassBreak($size, $fill, $iconTypeWeight);
}

function IconSoundDetectionLoudSound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundDetectionLoudSound {
	return new IconSoundDetectionLoudSound($size, $fill, $iconTypeWeight);
}

function IconSoundSampler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoundSampler {
	return new IconSoundSampler($size, $fill, $iconTypeWeight);
}

function IconSoupKitchen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSoupKitchen {
	return new IconSoupKitchen($size, $fill, $iconTypeWeight);
}

function IconSourceEnvironment(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSourceEnvironment {
	return new IconSourceEnvironment($size, $fill, $iconTypeWeight);
}

function IconSourceNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSourceNotes {
	return new IconSourceNotes($size, $fill, $iconTypeWeight);
}

function IconSouth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouth {
	return new IconSouth($size, $fill, $iconTypeWeight);
}

function IconSouthAmerica(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouthAmerica {
	return new IconSouthAmerica($size, $fill, $iconTypeWeight);
}

function IconSouthEast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouthEast {
	return new IconSouthEast($size, $fill, $iconTypeWeight);
}

function IconSouthWest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSouthWest {
	return new IconSouthWest($size, $fill, $iconTypeWeight);
}

function IconSpa(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpa {
	return new IconSpa($size, $fill, $iconTypeWeight);
}

function IconSpaceBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpaceBar {
	return new IconSpaceBar($size, $fill, $iconTypeWeight);
}

function IconSpaceDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpaceDashboard {
	return new IconSpaceDashboard($size, $fill, $iconTypeWeight);
}

function IconSpatialAudio(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialAudio {
	return new IconSpatialAudio($size, $fill, $iconTypeWeight);
}

function IconSpatialAudioOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialAudioOff {
	return new IconSpatialAudioOff($size, $fill, $iconTypeWeight);
}

function IconSpatialSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialSpeaker {
	return new IconSpatialSpeaker($size, $fill, $iconTypeWeight);
}

function IconSpatialTracking(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpatialTracking {
	return new IconSpatialTracking($size, $fill, $iconTypeWeight);
}

function IconSpeaker(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeaker {
	return new IconSpeaker($size, $fill, $iconTypeWeight);
}

function IconSpeakerGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerGroup {
	return new IconSpeakerGroup($size, $fill, $iconTypeWeight);
}

function IconSpeakerNotes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerNotes {
	return new IconSpeakerNotes($size, $fill, $iconTypeWeight);
}

function IconSpeakerNotesOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerNotesOff {
	return new IconSpeakerNotesOff($size, $fill, $iconTypeWeight);
}

function IconSpeakerPhone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeakerPhone {
	return new IconSpeakerPhone($size, $fill, $iconTypeWeight);
}

function IconSpecialCharacter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpecialCharacter {
	return new IconSpecialCharacter($size, $fill, $iconTypeWeight);
}

function IconSpecificGravity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpecificGravity {
	return new IconSpecificGravity($size, $fill, $iconTypeWeight);
}

function IconSpeechToText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeechToText {
	return new IconSpeechToText($size, $fill, $iconTypeWeight);
}

function IconSpeed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed {
	return new IconSpeed($size, $fill, $iconTypeWeight);
}

function IconSpeed025(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed025 {
	return new IconSpeed025($size, $fill, $iconTypeWeight);
}

function IconSpeed02x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed02x {
	return new IconSpeed02x($size, $fill, $iconTypeWeight);
}

function IconSpeed05(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed05 {
	return new IconSpeed05($size, $fill, $iconTypeWeight);
}

function IconSpeed05x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed05x {
	return new IconSpeed05x($size, $fill, $iconTypeWeight);
}

function IconSpeed075(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed075 {
	return new IconSpeed075($size, $fill, $iconTypeWeight);
}

function IconSpeed07x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed07x {
	return new IconSpeed07x($size, $fill, $iconTypeWeight);
}

function IconSpeed12(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed12 {
	return new IconSpeed12($size, $fill, $iconTypeWeight);
}

function IconSpeed125(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed125 {
	return new IconSpeed125($size, $fill, $iconTypeWeight);
}

function IconSpeed12x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed12x {
	return new IconSpeed12x($size, $fill, $iconTypeWeight);
}

function IconSpeed15(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed15 {
	return new IconSpeed15($size, $fill, $iconTypeWeight);
}

function IconSpeed15x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed15x {
	return new IconSpeed15x($size, $fill, $iconTypeWeight);
}

function IconSpeed175(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed175 {
	return new IconSpeed175($size, $fill, $iconTypeWeight);
}

function IconSpeed17x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed17x {
	return new IconSpeed17x($size, $fill, $iconTypeWeight);
}

function IconSpeed2x(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeed2x {
	return new IconSpeed2x($size, $fill, $iconTypeWeight);
}

function IconSpeedCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpeedCamera {
	return new IconSpeedCamera($size, $fill, $iconTypeWeight);
}

function IconSpellcheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpellcheck {
	return new IconSpellcheck($size, $fill, $iconTypeWeight);
}

function IconSplitScene(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitScene {
	return new IconSplitScene($size, $fill, $iconTypeWeight);
}

function IconSplitscreen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreen {
	return new IconSplitscreen($size, $fill, $iconTypeWeight);
}

function IconSplitscreenAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenAdd {
	return new IconSplitscreenAdd($size, $fill, $iconTypeWeight);
}

function IconSplitscreenBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenBottom {
	return new IconSplitscreenBottom($size, $fill, $iconTypeWeight);
}

function IconSplitscreenLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenLandscape {
	return new IconSplitscreenLandscape($size, $fill, $iconTypeWeight);
}

function IconSplitscreenLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenLeft {
	return new IconSplitscreenLeft($size, $fill, $iconTypeWeight);
}

function IconSplitscreenPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenPortrait {
	return new IconSplitscreenPortrait($size, $fill, $iconTypeWeight);
}

function IconSplitscreenRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenRight {
	return new IconSplitscreenRight($size, $fill, $iconTypeWeight);
}

function IconSplitscreenTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenTop {
	return new IconSplitscreenTop($size, $fill, $iconTypeWeight);
}

function IconSplitscreenVerticalAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSplitscreenVerticalAdd {
	return new IconSplitscreenVerticalAdd($size, $fill, $iconTypeWeight);
}

function IconSpo2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpo2 {
	return new IconSpo2($size, $fill, $iconTypeWeight);
}

function IconSpoke(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSpoke {
	return new IconSpoke($size, $fill, $iconTypeWeight);
}

function IconSports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSports {
	return new IconSports($size, $fill, $iconTypeWeight);
}

function IconSportsAndOutdoors(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsAndOutdoors {
	return new IconSportsAndOutdoors($size, $fill, $iconTypeWeight);
}

function IconSportsBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsBar {
	return new IconSportsBar($size, $fill, $iconTypeWeight);
}

function IconSportsBaseball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsBaseball {
	return new IconSportsBaseball($size, $fill, $iconTypeWeight);
}

function IconSportsBasketball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsBasketball {
	return new IconSportsBasketball($size, $fill, $iconTypeWeight);
}

function IconSportsCricket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsCricket {
	return new IconSportsCricket($size, $fill, $iconTypeWeight);
}

function IconSportsEsports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsEsports {
	return new IconSportsEsports($size, $fill, $iconTypeWeight);
}

function IconSportsFootball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsFootball {
	return new IconSportsFootball($size, $fill, $iconTypeWeight);
}

function IconSportsGolf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsGolf {
	return new IconSportsGolf($size, $fill, $iconTypeWeight);
}

function IconSportsGymnastics(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsGymnastics {
	return new IconSportsGymnastics($size, $fill, $iconTypeWeight);
}

function IconSportsHandball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsHandball {
	return new IconSportsHandball($size, $fill, $iconTypeWeight);
}

function IconSportsHockey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsHockey {
	return new IconSportsHockey($size, $fill, $iconTypeWeight);
}

function IconSportsKabaddi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsKabaddi {
	return new IconSportsKabaddi($size, $fill, $iconTypeWeight);
}

function IconSportsMartialArts(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsMartialArts {
	return new IconSportsMartialArts($size, $fill, $iconTypeWeight);
}

function IconSportsMma(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsMma {
	return new IconSportsMma($size, $fill, $iconTypeWeight);
}

function IconSportsMotorsports(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsMotorsports {
	return new IconSportsMotorsports($size, $fill, $iconTypeWeight);
}

function IconSportsRugby(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsRugby {
	return new IconSportsRugby($size, $fill, $iconTypeWeight);
}

function IconSportsScore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsScore {
	return new IconSportsScore($size, $fill, $iconTypeWeight);
}

function IconSportsSoccer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsSoccer {
	return new IconSportsSoccer($size, $fill, $iconTypeWeight);
}

function IconSportsTennis(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsTennis {
	return new IconSportsTennis($size, $fill, $iconTypeWeight);
}

function IconSportsVolleyball(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSportsVolleyball {
	return new IconSportsVolleyball($size, $fill, $iconTypeWeight);
}

function IconSprinkler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSprinkler {
	return new IconSprinkler($size, $fill, $iconTypeWeight);
}

function IconSprint(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSprint {
	return new IconSprint($size, $fill, $iconTypeWeight);
}

function IconSquare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSquare {
	return new IconSquare($size, $fill, $iconTypeWeight);
}

function IconSquareDot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSquareDot {
	return new IconSquareDot($size, $fill, $iconTypeWeight);
}

function IconSquareFoot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSquareFoot {
	return new IconSquareFoot($size, $fill, $iconTypeWeight);
}

function IconSsidChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSsidChart {
	return new IconSsidChart($size, $fill, $iconTypeWeight);
}

function IconStack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStack {
	return new IconStack($size, $fill, $iconTypeWeight);
}

function IconStackedBarChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedBarChart {
	return new IconStackedBarChart($size, $fill, $iconTypeWeight);
}

function IconStackedEmail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedEmail {
	return new IconStackedEmail($size, $fill, $iconTypeWeight);
}

function IconStackedInbox(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedInbox {
	return new IconStackedInbox($size, $fill, $iconTypeWeight);
}

function IconStackedLineChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackedLineChart {
	return new IconStackedLineChart($size, $fill, $iconTypeWeight);
}

function IconStackHexagon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackHexagon {
	return new IconStackHexagon($size, $fill, $iconTypeWeight);
}

function IconStackOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackOff {
	return new IconStackOff($size, $fill, $iconTypeWeight);
}

function IconStacks(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStacks {
	return new IconStacks($size, $fill, $iconTypeWeight);
}

function IconStackStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStackStar {
	return new IconStackStar($size, $fill, $iconTypeWeight);
}

function IconStadiaController(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStadiaController {
	return new IconStadiaController($size, $fill, $iconTypeWeight);
}

function IconStadium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStadium {
	return new IconStadium($size, $fill, $iconTypeWeight);
}

function IconStairs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStairs {
	return new IconStairs($size, $fill, $iconTypeWeight);
}

function IconStairs2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStairs2 {
	return new IconStairs2($size, $fill, $iconTypeWeight);
}

function IconStar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStar {
	return new IconStar($size, $fill, $iconTypeWeight);
}

function IconStarHalf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStarHalf {
	return new IconStarHalf($size, $fill, $iconTypeWeight);
}

function IconStarRate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStarRate {
	return new IconStarRate($size, $fill, $iconTypeWeight);
}

function IconStarRateHalf(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStarRateHalf {
	return new IconStarRateHalf($size, $fill, $iconTypeWeight);
}

function IconStars(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStars {
	return new IconStars($size, $fill, $iconTypeWeight);
}

function IconStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStart {
	return new IconStart($size, $fill, $iconTypeWeight);
}

function IconStat0(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat0 {
	return new IconStat0($size, $fill, $iconTypeWeight);
}

function IconStat1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat1 {
	return new IconStat1($size, $fill, $iconTypeWeight);
}

function IconStat2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat2 {
	return new IconStat2($size, $fill, $iconTypeWeight);
}

function IconStat3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStat3 {
	return new IconStat3($size, $fill, $iconTypeWeight);
}

function IconStatMinus1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStatMinus1 {
	return new IconStatMinus1($size, $fill, $iconTypeWeight);
}

function IconStatMinus2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStatMinus2 {
	return new IconStatMinus2($size, $fill, $iconTypeWeight);
}

function IconStatMinus3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStatMinus3 {
	return new IconStatMinus3($size, $fill, $iconTypeWeight);
}

function IconStayCurrentLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayCurrentLandscape {
	return new IconStayCurrentLandscape($size, $fill, $iconTypeWeight);
}

function IconStayCurrentPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayCurrentPortrait {
	return new IconStayCurrentPortrait($size, $fill, $iconTypeWeight);
}

function IconStayPrimaryLandscape(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayPrimaryLandscape {
	return new IconStayPrimaryLandscape($size, $fill, $iconTypeWeight);
}

function IconStayPrimaryPortrait(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStayPrimaryPortrait {
	return new IconStayPrimaryPortrait($size, $fill, $iconTypeWeight);
}

function IconStep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStep {
	return new IconStep($size, $fill, $iconTypeWeight);
}

function IconStepInto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStepInto {
	return new IconStepInto($size, $fill, $iconTypeWeight);
}

function IconStepOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStepOut {
	return new IconStepOut($size, $fill, $iconTypeWeight);
}

function IconStepOver(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStepOver {
	return new IconStepOver($size, $fill, $iconTypeWeight);
}

function IconSteppers(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSteppers {
	return new IconSteppers($size, $fill, $iconTypeWeight);
}

function IconSteps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSteps {
	return new IconSteps($size, $fill, $iconTypeWeight);
}

function IconStethoscope(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStethoscope {
	return new IconStethoscope($size, $fill, $iconTypeWeight);
}

function IconStethoscopeArrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStethoscopeArrow {
	return new IconStethoscopeArrow($size, $fill, $iconTypeWeight);
}

function IconStethoscopeCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStethoscopeCheck {
	return new IconStethoscopeCheck($size, $fill, $iconTypeWeight);
}

function IconStickyNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStickyNote {
	return new IconStickyNote($size, $fill, $iconTypeWeight);
}

function IconStickyNote2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStickyNote2 {
	return new IconStickyNote2($size, $fill, $iconTypeWeight);
}

function IconStockMedia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStockMedia {
	return new IconStockMedia($size, $fill, $iconTypeWeight);
}

function IconStockpot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStockpot {
	return new IconStockpot($size, $fill, $iconTypeWeight);
}

function IconStop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStop {
	return new IconStop($size, $fill, $iconTypeWeight);
}

function IconStopCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStopCircle {
	return new IconStopCircle($size, $fill, $iconTypeWeight);
}

function IconStopScreenShare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStopScreenShare {
	return new IconStopScreenShare($size, $fill, $iconTypeWeight);
}

function IconStorage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStorage {
	return new IconStorage($size, $fill, $iconTypeWeight);
}

function IconStore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStore {
	return new IconStore($size, $fill, $iconTypeWeight);
}

function IconStorefront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStorefront {
	return new IconStorefront($size, $fill, $iconTypeWeight);
}

function IconStorm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStorm {
	return new IconStorm($size, $fill, $iconTypeWeight);
}

function IconStraight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStraight {
	return new IconStraight($size, $fill, $iconTypeWeight);
}

function IconStraighten(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStraighten {
	return new IconStraighten($size, $fill, $iconTypeWeight);
}

function IconStrategy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrategy {
	return new IconStrategy($size, $fill, $iconTypeWeight);
}

function IconStream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStream {
	return new IconStream($size, $fill, $iconTypeWeight);
}

function IconStreamApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStreamApps {
	return new IconStreamApps($size, $fill, $iconTypeWeight);
}

function IconStreetview(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStreetview {
	return new IconStreetview($size, $fill, $iconTypeWeight);
}

function IconStressManagement(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStressManagement {
	return new IconStressManagement($size, $fill, $iconTypeWeight);
}

function IconStrikethroughS(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrikethroughS {
	return new IconStrikethroughS($size, $fill, $iconTypeWeight);
}

function IconStrokeFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrokeFull {
	return new IconStrokeFull($size, $fill, $iconTypeWeight);
}

function IconStrokePartial(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStrokePartial {
	return new IconStrokePartial($size, $fill, $iconTypeWeight);
}

function IconStroller(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStroller {
	return new IconStroller($size, $fill, $iconTypeWeight);
}

function IconStyle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStyle {
	return new IconStyle($size, $fill, $iconTypeWeight);
}

function IconStyler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStyler {
	return new IconStyler($size, $fill, $iconTypeWeight);
}

function IconStylus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStylus {
	return new IconStylus($size, $fill, $iconTypeWeight);
}

function IconStylusLaserPointer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStylusLaserPointer {
	return new IconStylusLaserPointer($size, $fill, $iconTypeWeight);
}

function IconStylusNote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconStylusNote {
	return new IconStylusNote($size, $fill, $iconTypeWeight);
}

function IconSubdirectoryArrowLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubdirectoryArrowLeft {
	return new IconSubdirectoryArrowLeft($size, $fill, $iconTypeWeight);
}

function IconSubdirectoryArrowRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubdirectoryArrowRight {
	return new IconSubdirectoryArrowRight($size, $fill, $iconTypeWeight);
}

function IconSubheader(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubheader {
	return new IconSubheader($size, $fill, $iconTypeWeight);
}

function IconSubject(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubject {
	return new IconSubject($size, $fill, $iconTypeWeight);
}

function IconSubscript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubscript {
	return new IconSubscript($size, $fill, $iconTypeWeight);
}

function IconSubscriptions(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubscriptions {
	return new IconSubscriptions($size, $fill, $iconTypeWeight);
}

function IconSubtitles(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubtitles {
	return new IconSubtitles($size, $fill, $iconTypeWeight);
}

function IconSubtitlesOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubtitlesOff {
	return new IconSubtitlesOff($size, $fill, $iconTypeWeight);
}

function IconSubway(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSubway {
	return new IconSubway($size, $fill, $iconTypeWeight);
}

function IconSummarize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSummarize {
	return new IconSummarize($size, $fill, $iconTypeWeight);
}

function IconSunny(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSunny {
	return new IconSunny($size, $fill, $iconTypeWeight);
}

function IconSunnySnowing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSunnySnowing {
	return new IconSunnySnowing($size, $fill, $iconTypeWeight);
}

function IconSuperscript(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSuperscript {
	return new IconSuperscript($size, $fill, $iconTypeWeight);
}

function IconSupervisedUserCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupervisedUserCircle {
	return new IconSupervisedUserCircle($size, $fill, $iconTypeWeight);
}

function IconSupervisedUserCircleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupervisedUserCircleOff {
	return new IconSupervisedUserCircleOff($size, $fill, $iconTypeWeight);
}

function IconSupervisorAccount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupervisorAccount {
	return new IconSupervisorAccount($size, $fill, $iconTypeWeight);
}

function IconSupport(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupport {
	return new IconSupport($size, $fill, $iconTypeWeight);
}

function IconSupportAgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSupportAgent {
	return new IconSupportAgent($size, $fill, $iconTypeWeight);
}

function IconSurfing(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSurfing {
	return new IconSurfing($size, $fill, $iconTypeWeight);
}

function IconSurgical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSurgical {
	return new IconSurgical($size, $fill, $iconTypeWeight);
}

function IconSurroundSound(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSurroundSound {
	return new IconSurroundSound($size, $fill, $iconTypeWeight);
}

function IconSwapCalls(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapCalls {
	return new IconSwapCalls($size, $fill, $iconTypeWeight);
}

function IconSwapDrivingApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapDrivingApps {
	return new IconSwapDrivingApps($size, $fill, $iconTypeWeight);
}

function IconSwapDrivingAppsWheel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapDrivingAppsWheel {
	return new IconSwapDrivingAppsWheel($size, $fill, $iconTypeWeight);
}

function IconSwapHoriz(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapHoriz {
	return new IconSwapHoriz($size, $fill, $iconTypeWeight);
}

function IconSwapHorizontalCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapHorizontalCircle {
	return new IconSwapHorizontalCircle($size, $fill, $iconTypeWeight);
}

function IconSwapVert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapVert {
	return new IconSwapVert($size, $fill, $iconTypeWeight);
}

function IconSwapVerticalCircle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwapVerticalCircle {
	return new IconSwapVerticalCircle($size, $fill, $iconTypeWeight);
}

function IconSweep(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSweep {
	return new IconSweep($size, $fill, $iconTypeWeight);
}

function IconSwipe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipe {
	return new IconSwipe($size, $fill, $iconTypeWeight);
}

function IconSwipeDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeDown {
	return new IconSwipeDown($size, $fill, $iconTypeWeight);
}

function IconSwipeDownAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeDownAlt {
	return new IconSwipeDownAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeLeft {
	return new IconSwipeLeft($size, $fill, $iconTypeWeight);
}

function IconSwipeLeftAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeLeftAlt {
	return new IconSwipeLeftAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeRight {
	return new IconSwipeRight($size, $fill, $iconTypeWeight);
}

function IconSwipeRightAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeRightAlt {
	return new IconSwipeRightAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeUp {
	return new IconSwipeUp($size, $fill, $iconTypeWeight);
}

function IconSwipeUpAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeUpAlt {
	return new IconSwipeUpAlt($size, $fill, $iconTypeWeight);
}

function IconSwipeVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwipeVertical {
	return new IconSwipeVertical($size, $fill, $iconTypeWeight);
}

function IconSwitch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitch {
	return new IconSwitch($size, $fill, $iconTypeWeight);
}

function IconSwitchAccess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccess {
	return new IconSwitchAccess($size, $fill, $iconTypeWeight);
}

function IconSwitchAccess2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccess2 {
	return new IconSwitchAccess2($size, $fill, $iconTypeWeight);
}

function IconSwitchAccessShortcut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccessShortcut {
	return new IconSwitchAccessShortcut($size, $fill, $iconTypeWeight);
}

function IconSwitchAccessShortcutAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccessShortcutAdd {
	return new IconSwitchAccessShortcutAdd($size, $fill, $iconTypeWeight);
}

function IconSwitchAccount(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchAccount {
	return new IconSwitchAccount($size, $fill, $iconTypeWeight);
}

function IconSwitchCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchCamera {
	return new IconSwitchCamera($size, $fill, $iconTypeWeight);
}

function IconSwitches(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitches {
	return new IconSwitches($size, $fill, $iconTypeWeight);
}

function IconSwitchLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchLeft {
	return new IconSwitchLeft($size, $fill, $iconTypeWeight);
}

function IconSwitchRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchRight {
	return new IconSwitchRight($size, $fill, $iconTypeWeight);
}

function IconSwitchVideo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwitchVideo {
	return new IconSwitchVideo($size, $fill, $iconTypeWeight);
}

function IconSwordRose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwordRose {
	return new IconSwordRose($size, $fill, $iconTypeWeight);
}

function IconSwords(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSwords {
	return new IconSwords($size, $fill, $iconTypeWeight);
}

function IconSymptoms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSymptoms {
	return new IconSymptoms($size, $fill, $iconTypeWeight);
}

function IconSynagogue(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSynagogue {
	return new IconSynagogue($size, $fill, $iconTypeWeight);
}

function IconSync(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSync {
	return new IconSync($size, $fill, $iconTypeWeight);
}

function IconSyncAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncAlt {
	return new IconSyncAlt($size, $fill, $iconTypeWeight);
}

function IconSyncArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncArrowDown {
	return new IconSyncArrowDown($size, $fill, $iconTypeWeight);
}

function IconSyncArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncArrowUp {
	return new IconSyncArrowUp($size, $fill, $iconTypeWeight);
}

function IconSyncDesktop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncDesktop {
	return new IconSyncDesktop($size, $fill, $iconTypeWeight);
}

function IconSyncDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncDisabled {
	return new IconSyncDisabled($size, $fill, $iconTypeWeight);
}

function IconSyncLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncLock {
	return new IconSyncLock($size, $fill, $iconTypeWeight);
}

function IconSyncProblem(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncProblem {
	return new IconSyncProblem($size, $fill, $iconTypeWeight);
}

function IconSyncSavedLocally(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyncSavedLocally {
	return new IconSyncSavedLocally($size, $fill, $iconTypeWeight);
}

function IconSyringe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSyringe {
	return new IconSyringe($size, $fill, $iconTypeWeight);
}

function IconSystemUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSystemUpdate {
	return new IconSystemUpdate($size, $fill, $iconTypeWeight);
}

function IconSystemUpdateAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconSystemUpdateAlt {
	return new IconSystemUpdateAlt($size, $fill, $iconTypeWeight);
}

function IconTab(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTab {
	return new IconTab($size, $fill, $iconTypeWeight);
}

function IconTabClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabClose {
	return new IconTabClose($size, $fill, $iconTypeWeight);
}

function IconTabCloseInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabCloseInactive {
	return new IconTabCloseInactive($size, $fill, $iconTypeWeight);
}

function IconTabCloseRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabCloseRight {
	return new IconTabCloseRight($size, $fill, $iconTypeWeight);
}

function IconTabDuplicate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabDuplicate {
	return new IconTabDuplicate($size, $fill, $iconTypeWeight);
}

function IconTabGroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabGroup {
	return new IconTabGroup($size, $fill, $iconTypeWeight);
}

function IconTabInactive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabInactive {
	return new IconTabInactive($size, $fill, $iconTypeWeight);
}

function IconTable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTable {
	return new IconTable($size, $fill, $iconTypeWeight);
}

function IconTableBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableBar {
	return new IconTableBar($size, $fill, $iconTypeWeight);
}

function IconTableChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableChart {
	return new IconTableChart($size, $fill, $iconTypeWeight);
}

function IconTableChartView(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableChartView {
	return new IconTableChartView($size, $fill, $iconTypeWeight);
}

function IconTableConvert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableConvert {
	return new IconTableConvert($size, $fill, $iconTypeWeight);
}

function IconTableEdit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableEdit {
	return new IconTableEdit($size, $fill, $iconTypeWeight);
}

function IconTableEye(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableEye {
	return new IconTableEye($size, $fill, $iconTypeWeight);
}

function IconTableLamp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableLamp {
	return new IconTableLamp($size, $fill, $iconTypeWeight);
}

function IconTableRestaurant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableRestaurant {
	return new IconTableRestaurant($size, $fill, $iconTypeWeight);
}

function IconTableRows(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableRows {
	return new IconTableRows($size, $fill, $iconTypeWeight);
}

function IconTableRowsNarrow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableRowsNarrow {
	return new IconTableRowsNarrow($size, $fill, $iconTypeWeight);
}

function IconTablet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTablet {
	return new IconTablet($size, $fill, $iconTypeWeight);
}

function IconTabletAndroid(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabletAndroid {
	return new IconTabletAndroid($size, $fill, $iconTypeWeight);
}

function IconTabletCamera(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabletCamera {
	return new IconTabletCamera($size, $fill, $iconTypeWeight);
}

function IconTabletMac(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabletMac {
	return new IconTabletMac($size, $fill, $iconTypeWeight);
}

function IconTableView(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTableView {
	return new IconTableView($size, $fill, $iconTypeWeight);
}

function IconTabMove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabMove {
	return new IconTabMove($size, $fill, $iconTypeWeight);
}

function IconTabNewRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabNewRight {
	return new IconTabNewRight($size, $fill, $iconTypeWeight);
}

function IconTabRecent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabRecent {
	return new IconTabRecent($size, $fill, $iconTypeWeight);
}

function IconTabs(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabs {
	return new IconTabs($size, $fill, $iconTypeWeight);
}

function IconTabUnselected(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTabUnselected {
	return new IconTabUnselected($size, $fill, $iconTypeWeight);
}

function IconTactic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTactic {
	return new IconTactic($size, $fill, $iconTypeWeight);
}

function IconTag(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTag {
	return new IconTag($size, $fill, $iconTypeWeight);
}

function IconTakeoutDining(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTakeoutDining {
	return new IconTakeoutDining($size, $fill, $iconTypeWeight);
}

function IconTamperDetectionOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTamperDetectionOff {
	return new IconTamperDetectionOff($size, $fill, $iconTypeWeight);
}

function IconTamperDetectionOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTamperDetectionOn {
	return new IconTamperDetectionOn($size, $fill, $iconTypeWeight);
}

function IconTapAndPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTapAndPlay {
	return new IconTapAndPlay($size, $fill, $iconTypeWeight);
}

function IconTapas(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTapas {
	return new IconTapas($size, $fill, $iconTypeWeight);
}

function IconTarget(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTarget {
	return new IconTarget($size, $fill, $iconTypeWeight);
}

function IconTask(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTask {
	return new IconTask($size, $fill, $iconTypeWeight);
}

function IconTaskAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTaskAlt {
	return new IconTaskAlt($size, $fill, $iconTypeWeight);
}

function IconTaunt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTaunt {
	return new IconTaunt($size, $fill, $iconTypeWeight);
}

function IconTaxiAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTaxiAlert {
	return new IconTaxiAlert($size, $fill, $iconTypeWeight);
}

function IconTeamDashboard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTeamDashboard {
	return new IconTeamDashboard($size, $fill, $iconTypeWeight);
}

function IconTempleBuddhist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTempleBuddhist {
	return new IconTempleBuddhist($size, $fill, $iconTypeWeight);
}

function IconTempleHindu(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTempleHindu {
	return new IconTempleHindu($size, $fill, $iconTypeWeight);
}

function IconTempPreferencesEco(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTempPreferencesEco {
	return new IconTempPreferencesEco($size, $fill, $iconTypeWeight);
}

function IconTenancy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTenancy {
	return new IconTenancy($size, $fill, $iconTypeWeight);
}

function IconTerminal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTerminal {
	return new IconTerminal($size, $fill, $iconTypeWeight);
}

function IconTextAd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextAd {
	return new IconTextAd($size, $fill, $iconTypeWeight);
}

function IconTextCompare(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextCompare {
	return new IconTextCompare($size, $fill, $iconTypeWeight);
}

function IconTextDecrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextDecrease {
	return new IconTextDecrease($size, $fill, $iconTypeWeight);
}

function IconTextFields(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextFields {
	return new IconTextFields($size, $fill, $iconTypeWeight);
}

function IconTextFieldsAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextFieldsAlt {
	return new IconTextFieldsAlt($size, $fill, $iconTypeWeight);
}

function IconTextFormat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextFormat {
	return new IconTextFormat($size, $fill, $iconTypeWeight);
}

function IconTextIncrease(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextIncrease {
	return new IconTextIncrease($size, $fill, $iconTypeWeight);
}

function IconTextRotateUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotateUp {
	return new IconTextRotateUp($size, $fill, $iconTypeWeight);
}

function IconTextRotateVertical(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotateVertical {
	return new IconTextRotateVertical($size, $fill, $iconTypeWeight);
}

function IconTextRotationAngledown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationAngledown {
	return new IconTextRotationAngledown($size, $fill, $iconTypeWeight);
}

function IconTextRotationAngleup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationAngleup {
	return new IconTextRotationAngleup($size, $fill, $iconTypeWeight);
}

function IconTextRotationDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationDown {
	return new IconTextRotationDown($size, $fill, $iconTypeWeight);
}

function IconTextRotationNone(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextRotationNone {
	return new IconTextRotationNone($size, $fill, $iconTypeWeight);
}

function IconTextSelectEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectEnd {
	return new IconTextSelectEnd($size, $fill, $iconTypeWeight);
}

function IconTextSelectJumpToBeginning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectJumpToBeginning {
	return new IconTextSelectJumpToBeginning($size, $fill, $iconTypeWeight);
}

function IconTextSelectJumpToEnd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectJumpToEnd {
	return new IconTextSelectJumpToEnd($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveBackCharacter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveBackCharacter {
	return new IconTextSelectMoveBackCharacter($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveBackWord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveBackWord {
	return new IconTextSelectMoveBackWord($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveDown {
	return new IconTextSelectMoveDown($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveForwardCharacter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveForwardCharacter {
	return new IconTextSelectMoveForwardCharacter($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveForwardWord(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveForwardWord {
	return new IconTextSelectMoveForwardWord($size, $fill, $iconTypeWeight);
}

function IconTextSelectMoveUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectMoveUp {
	return new IconTextSelectMoveUp($size, $fill, $iconTypeWeight);
}

function IconTextSelectStart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSelectStart {
	return new IconTextSelectStart($size, $fill, $iconTypeWeight);
}

function IconTextSnippet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextSnippet {
	return new IconTextSnippet($size, $fill, $iconTypeWeight);
}

function IconTextToSpeech(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextToSpeech {
	return new IconTextToSpeech($size, $fill, $iconTypeWeight);
}

function IconTextUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextUp {
	return new IconTextUp($size, $fill, $iconTypeWeight);
}

function IconTexture(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTexture {
	return new IconTexture($size, $fill, $iconTypeWeight);
}

function IconTextureAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextureAdd {
	return new IconTextureAdd($size, $fill, $iconTypeWeight);
}

function IconTextureMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTextureMinus {
	return new IconTextureMinus($size, $fill, $iconTypeWeight);
}

function IconTheaterComedy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTheaterComedy {
	return new IconTheaterComedy($size, $fill, $iconTypeWeight);
}

function IconTheaters(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTheaters {
	return new IconTheaters($size, $fill, $iconTypeWeight);
}

function IconThermometer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometer {
	return new IconThermometer($size, $fill, $iconTypeWeight);
}

function IconThermometerAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerAdd {
	return new IconThermometerAdd($size, $fill, $iconTypeWeight);
}

function IconThermometerGain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerGain {
	return new IconThermometerGain($size, $fill, $iconTypeWeight);
}

function IconThermometerLoss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerLoss {
	return new IconThermometerLoss($size, $fill, $iconTypeWeight);
}

function IconThermometerMinus(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermometerMinus {
	return new IconThermometerMinus($size, $fill, $iconTypeWeight);
}

function IconThermostat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostat {
	return new IconThermostat($size, $fill, $iconTypeWeight);
}

function IconThermostatArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatArrowDown {
	return new IconThermostatArrowDown($size, $fill, $iconTypeWeight);
}

function IconThermostatArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatArrowUp {
	return new IconThermostatArrowUp($size, $fill, $iconTypeWeight);
}

function IconThermostatAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatAuto {
	return new IconThermostatAuto($size, $fill, $iconTypeWeight);
}

function IconThermostatCarbon(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThermostatCarbon {
	return new IconThermostatCarbon($size, $fill, $iconTypeWeight);
}

function IconThingsToDo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThingsToDo {
	return new IconThingsToDo($size, $fill, $iconTypeWeight);
}

function IconThreadUnread(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThreadUnread {
	return new IconThreadUnread($size, $fill, $iconTypeWeight);
}

function IconThreatIntelligence(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThreatIntelligence {
	return new IconThreatIntelligence($size, $fill, $iconTypeWeight);
}

function IconThumbDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbDown {
	return new IconThumbDown($size, $fill, $iconTypeWeight);
}

function IconThumbnailBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbnailBar {
	return new IconThumbnailBar($size, $fill, $iconTypeWeight);
}

function IconThumbsUpDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbsUpDown {
	return new IconThumbsUpDown($size, $fill, $iconTypeWeight);
}

function IconThumbUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThumbUp {
	return new IconThumbUp($size, $fill, $iconTypeWeight);
}

function IconThunderstorm(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconThunderstorm {
	return new IconThunderstorm($size, $fill, $iconTypeWeight);
}

function IconTibia(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTibia {
	return new IconTibia($size, $fill, $iconTypeWeight);
}

function IconTibiaAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTibiaAlt {
	return new IconTibiaAlt($size, $fill, $iconTypeWeight);
}

function IconTileLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTileLarge {
	return new IconTileLarge($size, $fill, $iconTypeWeight);
}

function IconTileMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTileMedium {
	return new IconTileMedium($size, $fill, $iconTypeWeight);
}

function IconTileSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTileSmall {
	return new IconTileSmall($size, $fill, $iconTypeWeight);
}

function IconTimeAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimeAuto {
	return new IconTimeAuto($size, $fill, $iconTypeWeight);
}

function IconTimelapse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimelapse {
	return new IconTimelapse($size, $fill, $iconTypeWeight);
}

function IconTimeline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimeline {
	return new IconTimeline($size, $fill, $iconTypeWeight);
}

function IconTimer(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer {
	return new IconTimer($size, $fill, $iconTypeWeight);
}

function IconTimer10(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer10 {
	return new IconTimer10($size, $fill, $iconTypeWeight);
}

function IconTimer10Alt1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer10Alt1 {
	return new IconTimer10Alt1($size, $fill, $iconTypeWeight);
}

function IconTimer10Select(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer10Select {
	return new IconTimer10Select($size, $fill, $iconTypeWeight);
}

function IconTimer3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer3 {
	return new IconTimer3($size, $fill, $iconTypeWeight);
}

function IconTimer3Alt1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer3Alt1 {
	return new IconTimer3Alt1($size, $fill, $iconTypeWeight);
}

function IconTimer3Select(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer3Select {
	return new IconTimer3Select($size, $fill, $iconTypeWeight);
}

function IconTimer5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer5 {
	return new IconTimer5($size, $fill, $iconTypeWeight);
}

function IconTimer5Shutter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimer5Shutter {
	return new IconTimer5Shutter($size, $fill, $iconTypeWeight);
}

function IconTimerArrowDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerArrowDown {
	return new IconTimerArrowDown($size, $fill, $iconTypeWeight);
}

function IconTimerArrowUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerArrowUp {
	return new IconTimerArrowUp($size, $fill, $iconTypeWeight);
}

function IconTimerOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerOff {
	return new IconTimerOff($size, $fill, $iconTypeWeight);
}

function IconTimerPause(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerPause {
	return new IconTimerPause($size, $fill, $iconTypeWeight);
}

function IconTimerPlay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTimerPlay {
	return new IconTimerPlay($size, $fill, $iconTypeWeight);
}

function IconTireRepair(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTireRepair {
	return new IconTireRepair($size, $fill, $iconTypeWeight);
}

function IconTitle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTitle {
	return new IconTitle($size, $fill, $iconTypeWeight);
}

function IconTitlecase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTitlecase {
	return new IconTitlecase($size, $fill, $iconTypeWeight);
}

function IconToast(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToast {
	return new IconToast($size, $fill, $iconTypeWeight);
}

function IconToc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToc {
	return new IconToc($size, $fill, $iconTypeWeight);
}

function IconToday(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToday {
	return new IconToday($size, $fill, $iconTypeWeight);
}

function IconToggleOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToggleOff {
	return new IconToggleOff($size, $fill, $iconTypeWeight);
}

function IconToggleOn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToggleOn {
	return new IconToggleOn($size, $fill, $iconTypeWeight);
}

function IconToken(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToken {
	return new IconToken($size, $fill, $iconTypeWeight);
}

function IconToll(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToll {
	return new IconToll($size, $fill, $iconTypeWeight);
}

function IconTonality(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTonality {
	return new IconTonality($size, $fill, $iconTypeWeight);
}

function IconToolbar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolbar {
	return new IconToolbar($size, $fill, $iconTypeWeight);
}

function IconToolsFlatHead(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsFlatHead {
	return new IconToolsFlatHead($size, $fill, $iconTypeWeight);
}

function IconToolsInstallationKit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsInstallationKit {
	return new IconToolsInstallationKit($size, $fill, $iconTypeWeight);
}

function IconToolsLadder(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsLadder {
	return new IconToolsLadder($size, $fill, $iconTypeWeight);
}

function IconToolsLevel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsLevel {
	return new IconToolsLevel($size, $fill, $iconTypeWeight);
}

function IconToolsPhillips(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsPhillips {
	return new IconToolsPhillips($size, $fill, $iconTypeWeight);
}

function IconToolsPliersWireStripper(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsPliersWireStripper {
	return new IconToolsPliersWireStripper($size, $fill, $iconTypeWeight);
}

function IconToolsPowerDrill(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToolsPowerDrill {
	return new IconToolsPowerDrill($size, $fill, $iconTypeWeight);
}

function IconTooltip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTooltip {
	return new IconTooltip($size, $fill, $iconTypeWeight);
}

function IconTooltip2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTooltip2 {
	return new IconTooltip2($size, $fill, $iconTypeWeight);
}

function IconTopic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTopic {
	return new IconTopic($size, $fill, $iconTypeWeight);
}

function IconTopPanelClose(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTopPanelClose {
	return new IconTopPanelClose($size, $fill, $iconTypeWeight);
}

function IconTopPanelOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTopPanelOpen {
	return new IconTopPanelOpen($size, $fill, $iconTypeWeight);
}

function IconTornado(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTornado {
	return new IconTornado($size, $fill, $iconTypeWeight);
}

function IconTotalDissolvedSolids(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTotalDissolvedSolids {
	return new IconTotalDissolvedSolids($size, $fill, $iconTypeWeight);
}

function IconTouchApp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchApp {
	return new IconTouchApp($size, $fill, $iconTypeWeight);
}

function IconTouchDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchDouble {
	return new IconTouchDouble($size, $fill, $iconTypeWeight);
}

function IconTouchLong(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchLong {
	return new IconTouchLong($size, $fill, $iconTypeWeight);
}

function IconTouchpadMouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchpadMouse {
	return new IconTouchpadMouse($size, $fill, $iconTypeWeight);
}

function IconTouchpadMouseOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchpadMouseOff {
	return new IconTouchpadMouseOff($size, $fill, $iconTypeWeight);
}

function IconTouchTriple(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTouchTriple {
	return new IconTouchTriple($size, $fill, $iconTypeWeight);
}

function IconTour(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTour {
	return new IconTour($size, $fill, $iconTypeWeight);
}

function IconToys(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToys {
	return new IconToys($size, $fill, $iconTypeWeight);
}

function IconToysAndGames(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToysAndGames {
	return new IconToysAndGames($size, $fill, $iconTypeWeight);
}

function IconToysFan(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconToysFan {
	return new IconToysFan($size, $fill, $iconTypeWeight);
}

function IconTrackChanges(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackChanges {
	return new IconTrackChanges($size, $fill, $iconTypeWeight);
}

function IconTrackpadInput(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackpadInput {
	return new IconTrackpadInput($size, $fill, $iconTypeWeight);
}

function IconTrackpadInput2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackpadInput2 {
	return new IconTrackpadInput2($size, $fill, $iconTypeWeight);
}

function IconTrackpadInput3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrackpadInput3 {
	return new IconTrackpadInput3($size, $fill, $iconTypeWeight);
}

function IconTraffic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTraffic {
	return new IconTraffic($size, $fill, $iconTypeWeight);
}

function IconTrafficJam(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrafficJam {
	return new IconTrafficJam($size, $fill, $iconTypeWeight);
}

function IconTrailLength(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrailLength {
	return new IconTrailLength($size, $fill, $iconTypeWeight);
}

function IconTrailLengthMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrailLengthMedium {
	return new IconTrailLengthMedium($size, $fill, $iconTypeWeight);
}

function IconTrailLengthShort(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrailLengthShort {
	return new IconTrailLengthShort($size, $fill, $iconTypeWeight);
}

function IconTrain(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrain {
	return new IconTrain($size, $fill, $iconTypeWeight);
}

function IconTram(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTram {
	return new IconTram($size, $fill, $iconTypeWeight);
}

function IconTranscribe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTranscribe {
	return new IconTranscribe($size, $fill, $iconTypeWeight);
}

function IconTransferWithinAStation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransferWithinAStation {
	return new IconTransferWithinAStation($size, $fill, $iconTypeWeight);
}

function IconTransform(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransform {
	return new IconTransform($size, $fill, $iconTypeWeight);
}

function IconTransgender(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransgender {
	return new IconTransgender($size, $fill, $iconTypeWeight);
}

function IconTransitEnterexit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitEnterexit {
	return new IconTransitEnterexit($size, $fill, $iconTypeWeight);
}

function IconTransitionChop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionChop {
	return new IconTransitionChop($size, $fill, $iconTypeWeight);
}

function IconTransitionDissolve(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionDissolve {
	return new IconTransitionDissolve($size, $fill, $iconTypeWeight);
}

function IconTransitionFade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionFade {
	return new IconTransitionFade($size, $fill, $iconTypeWeight);
}

function IconTransitionPush(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionPush {
	return new IconTransitionPush($size, $fill, $iconTypeWeight);
}

function IconTransitionSlide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitionSlide {
	return new IconTransitionSlide($size, $fill, $iconTypeWeight);
}

function IconTransitTicket(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransitTicket {
	return new IconTransitTicket($size, $fill, $iconTypeWeight);
}

function IconTranslate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTranslate {
	return new IconTranslate($size, $fill, $iconTypeWeight);
}

function IconTransportation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTransportation {
	return new IconTransportation($size, $fill, $iconTypeWeight);
}

function IconTravel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTravel {
	return new IconTravel($size, $fill, $iconTypeWeight);
}

function IconTravelExplore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTravelExplore {
	return new IconTravelExplore($size, $fill, $iconTypeWeight);
}

function IconTravelLuggageAndBags(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTravelLuggageAndBags {
	return new IconTravelLuggageAndBags($size, $fill, $iconTypeWeight);
}

function IconTrendingDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrendingDown {
	return new IconTrendingDown($size, $fill, $iconTypeWeight);
}

function IconTrendingFlat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrendingFlat {
	return new IconTrendingFlat($size, $fill, $iconTypeWeight);
}

function IconTrendingUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrendingUp {
	return new IconTrendingUp($size, $fill, $iconTypeWeight);
}

function IconTrip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrip {
	return new IconTrip($size, $fill, $iconTypeWeight);
}

function IconTripOrigin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTripOrigin {
	return new IconTripOrigin($size, $fill, $iconTypeWeight);
}

function IconTrolley(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrolley {
	return new IconTrolley($size, $fill, $iconTypeWeight);
}

function IconTrolleyCableCar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrolleyCableCar {
	return new IconTrolleyCableCar($size, $fill, $iconTypeWeight);
}

function IconTrophy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTrophy {
	return new IconTrophy($size, $fill, $iconTypeWeight);
}

function IconTroubleshoot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTroubleshoot {
	return new IconTroubleshoot($size, $fill, $iconTypeWeight);
}

function IconTsunami(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTsunami {
	return new IconTsunami($size, $fill, $iconTypeWeight);
}

function IconTsv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTsv {
	return new IconTsv($size, $fill, $iconTypeWeight);
}

function IconTty(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTty {
	return new IconTty($size, $fill, $iconTypeWeight);
}

function IconTune(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTune {
	return new IconTune($size, $fill, $iconTypeWeight);
}

function IconTurnLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnLeft {
	return new IconTurnLeft($size, $fill, $iconTypeWeight);
}

function IconTurnRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnRight {
	return new IconTurnRight($size, $fill, $iconTypeWeight);
}

function IconTurnSharpLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSharpLeft {
	return new IconTurnSharpLeft($size, $fill, $iconTypeWeight);
}

function IconTurnSharpRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSharpRight {
	return new IconTurnSharpRight($size, $fill, $iconTypeWeight);
}

function IconTurnSlightLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSlightLeft {
	return new IconTurnSlightLeft($size, $fill, $iconTypeWeight);
}

function IconTurnSlightRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTurnSlightRight {
	return new IconTurnSlightRight($size, $fill, $iconTypeWeight);
}

function IconTv(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTv {
	return new IconTv($size, $fill, $iconTypeWeight);
}

function IconTvDisplays(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvDisplays {
	return new IconTvDisplays($size, $fill, $iconTypeWeight);
}

function IconTvGen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvGen {
	return new IconTvGen($size, $fill, $iconTypeWeight);
}

function IconTvGuide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvGuide {
	return new IconTvGuide($size, $fill, $iconTypeWeight);
}

function IconTvNext(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvNext {
	return new IconTvNext($size, $fill, $iconTypeWeight);
}

function IconTvOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvOff {
	return new IconTvOff($size, $fill, $iconTypeWeight);
}

function IconTvOptionsEditChannels(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvOptionsEditChannels {
	return new IconTvOptionsEditChannels($size, $fill, $iconTypeWeight);
}

function IconTvOptionsInputSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvOptionsInputSettings {
	return new IconTvOptionsInputSettings($size, $fill, $iconTypeWeight);
}

function IconTvRemote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvRemote {
	return new IconTvRemote($size, $fill, $iconTypeWeight);
}

function IconTvSignin(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvSignin {
	return new IconTvSignin($size, $fill, $iconTypeWeight);
}

function IconTvWithAssistant(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTvWithAssistant {
	return new IconTvWithAssistant($size, $fill, $iconTypeWeight);
}

function IconTwoPager(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTwoPager {
	return new IconTwoPager($size, $fill, $iconTypeWeight);
}

function IconTwoPagerStore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTwoPagerStore {
	return new IconTwoPagerStore($size, $fill, $iconTypeWeight);
}

function IconTwoWheeler(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTwoWheeler {
	return new IconTwoWheeler($size, $fill, $iconTypeWeight);
}

function IconTypeSpecimen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconTypeSpecimen {
	return new IconTypeSpecimen($size, $fill, $iconTypeWeight);
}

function IconUlnaRadius(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUlnaRadius {
	return new IconUlnaRadius($size, $fill, $iconTypeWeight);
}

function IconUlnaRadiusAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUlnaRadiusAlt {
	return new IconUlnaRadiusAlt($size, $fill, $iconTypeWeight);
}

function IconUmbrella(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUmbrella {
	return new IconUmbrella($size, $fill, $iconTypeWeight);
}

function IconUnarchive(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnarchive {
	return new IconUnarchive($size, $fill, $iconTypeWeight);
}

function IconUndo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUndo {
	return new IconUndo($size, $fill, $iconTypeWeight);
}

function IconUnfoldLess(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldLess {
	return new IconUnfoldLess($size, $fill, $iconTypeWeight);
}

function IconUnfoldLessDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldLessDouble {
	return new IconUnfoldLessDouble($size, $fill, $iconTypeWeight);
}

function IconUnfoldMore(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldMore {
	return new IconUnfoldMore($size, $fill, $iconTypeWeight);
}

function IconUnfoldMoreDouble(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnfoldMoreDouble {
	return new IconUnfoldMoreDouble($size, $fill, $iconTypeWeight);
}

function IconUngroup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUngroup {
	return new IconUngroup($size, $fill, $iconTypeWeight);
}

function IconUniversalCurrency(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUniversalCurrency {
	return new IconUniversalCurrency($size, $fill, $iconTypeWeight);
}

function IconUniversalCurrencyAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUniversalCurrencyAlt {
	return new IconUniversalCurrencyAlt($size, $fill, $iconTypeWeight);
}

function IconUniversalLocal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUniversalLocal {
	return new IconUniversalLocal($size, $fill, $iconTypeWeight);
}

function IconUnknown2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknown2 {
	return new IconUnknown2($size, $fill, $iconTypeWeight);
}

function IconUnknown5(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknown5 {
	return new IconUnknown5($size, $fill, $iconTypeWeight);
}

function IconUnknown7(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknown7 {
	return new IconUnknown7($size, $fill, $iconTypeWeight);
}

function IconUnknownDocument(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknownDocument {
	return new IconUnknownDocument($size, $fill, $iconTypeWeight);
}

function IconUnknownMed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnknownMed {
	return new IconUnknownMed($size, $fill, $iconTypeWeight);
}

function IconUnlicense(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnlicense {
	return new IconUnlicense($size, $fill, $iconTypeWeight);
}

function IconUnpavedRoad(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnpavedRoad {
	return new IconUnpavedRoad($size, $fill, $iconTypeWeight);
}

function IconUnpublished(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnpublished {
	return new IconUnpublished($size, $fill, $iconTypeWeight);
}

function IconUnsubscribe(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUnsubscribe {
	return new IconUnsubscribe($size, $fill, $iconTypeWeight);
}

function IconUpcoming(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpcoming {
	return new IconUpcoming($size, $fill, $iconTypeWeight);
}

function IconUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpdate {
	return new IconUpdate($size, $fill, $iconTypeWeight);
}

function IconUpdateDisabled(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpdateDisabled {
	return new IconUpdateDisabled($size, $fill, $iconTypeWeight);
}

function IconUpgrade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpgrade {
	return new IconUpgrade($size, $fill, $iconTypeWeight);
}

function IconUpiPay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpiPay {
	return new IconUpiPay($size, $fill, $iconTypeWeight);
}

function IconUpload(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpload {
	return new IconUpload($size, $fill, $iconTypeWeight);
}

function IconUpload2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUpload2 {
	return new IconUpload2($size, $fill, $iconTypeWeight);
}

function IconUploadFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUploadFile {
	return new IconUploadFile($size, $fill, $iconTypeWeight);
}

function IconUppercase(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUppercase {
	return new IconUppercase($size, $fill, $iconTypeWeight);
}

function IconUrology(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUrology {
	return new IconUrology($size, $fill, $iconTypeWeight);
}

function IconUsb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUsb {
	return new IconUsb($size, $fill, $iconTypeWeight);
}

function IconUsbOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUsbOff {
	return new IconUsbOff($size, $fill, $iconTypeWeight);
}

function IconUserAttributes(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUserAttributes {
	return new IconUserAttributes($size, $fill, $iconTypeWeight);
}

function IconUTurnLeft(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUTurnLeft {
	return new IconUTurnLeft($size, $fill, $iconTypeWeight);
}

function IconUTurnRight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconUTurnRight {
	return new IconUTurnRight($size, $fill, $iconTypeWeight);
}

function IconVaccines(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVaccines {
	return new IconVaccines($size, $fill, $iconTypeWeight);
}

function IconVacuum(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVacuum {
	return new IconVacuum($size, $fill, $iconTypeWeight);
}

function IconValve(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconValve {
	return new IconValve($size, $fill, $iconTypeWeight);
}

function IconVapeFree(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVapeFree {
	return new IconVapeFree($size, $fill, $iconTypeWeight);
}

function IconVapingRooms(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVapingRooms {
	return new IconVapingRooms($size, $fill, $iconTypeWeight);
}

function IconVariableAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariableAdd {
	return new IconVariableAdd($size, $fill, $iconTypeWeight);
}

function IconVariableInsert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariableInsert {
	return new IconVariableInsert($size, $fill, $iconTypeWeight);
}

function IconVariableRemove(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariableRemove {
	return new IconVariableRemove($size, $fill, $iconTypeWeight);
}

function IconVariables(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVariables {
	return new IconVariables($size, $fill, $iconTypeWeight);
}

function IconVentilator(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVentilator {
	return new IconVentilator($size, $fill, $iconTypeWeight);
}

function IconVerified(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerified {
	return new IconVerified($size, $fill, $iconTypeWeight);
}

function IconVerifiedUser(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerifiedUser {
	return new IconVerifiedUser($size, $fill, $iconTypeWeight);
}

function IconVerticalAlignBottom(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalAlignBottom {
	return new IconVerticalAlignBottom($size, $fill, $iconTypeWeight);
}

function IconVerticalAlignCenter(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalAlignCenter {
	return new IconVerticalAlignCenter($size, $fill, $iconTypeWeight);
}

function IconVerticalAlignTop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalAlignTop {
	return new IconVerticalAlignTop($size, $fill, $iconTypeWeight);
}

function IconVerticalDistribute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalDistribute {
	return new IconVerticalDistribute($size, $fill, $iconTypeWeight);
}

function IconVerticalShades(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalShades {
	return new IconVerticalShades($size, $fill, $iconTypeWeight);
}

function IconVerticalShadesClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalShadesClosed {
	return new IconVerticalShadesClosed($size, $fill, $iconTypeWeight);
}

function IconVerticalSplit(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVerticalSplit {
	return new IconVerticalSplit($size, $fill, $iconTypeWeight);
}

function IconVibration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVibration {
	return new IconVibration($size, $fill, $iconTypeWeight);
}

function IconVideoCall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCall {
	return new IconVideoCall($size, $fill, $iconTypeWeight);
}

function IconVideocam(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideocam {
	return new IconVideocam($size, $fill, $iconTypeWeight);
}

function IconVideocamAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideocamAlert {
	return new IconVideocamAlert($size, $fill, $iconTypeWeight);
}

function IconVideoCameraBack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraBack {
	return new IconVideoCameraBack($size, $fill, $iconTypeWeight);
}

function IconVideoCameraBackAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraBackAdd {
	return new IconVideoCameraBackAdd($size, $fill, $iconTypeWeight);
}

function IconVideoCameraFront(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraFront {
	return new IconVideoCameraFront($size, $fill, $iconTypeWeight);
}

function IconVideoCameraFrontOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoCameraFrontOff {
	return new IconVideoCameraFrontOff($size, $fill, $iconTypeWeight);
}

function IconVideocamOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideocamOff {
	return new IconVideocamOff($size, $fill, $iconTypeWeight);
}

function IconVideoChat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoChat {
	return new IconVideoChat($size, $fill, $iconTypeWeight);
}

function IconVideoFile(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoFile {
	return new IconVideoFile($size, $fill, $iconTypeWeight);
}

function IconVideogameAsset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideogameAsset {
	return new IconVideogameAsset($size, $fill, $iconTypeWeight);
}

function IconVideogameAssetOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideogameAssetOff {
	return new IconVideogameAssetOff($size, $fill, $iconTypeWeight);
}

function IconVideoLabel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoLabel {
	return new IconVideoLabel($size, $fill, $iconTypeWeight);
}

function IconVideoLibrary(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoLibrary {
	return new IconVideoLibrary($size, $fill, $iconTypeWeight);
}

function IconVideoSearch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoSearch {
	return new IconVideoSearch($size, $fill, $iconTypeWeight);
}

function IconVideoSettings(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoSettings {
	return new IconVideoSettings($size, $fill, $iconTypeWeight);
}

function IconVideoStable(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVideoStable {
	return new IconVideoStable($size, $fill, $iconTypeWeight);
}

function IconViewAgenda(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewAgenda {
	return new IconViewAgenda($size, $fill, $iconTypeWeight);
}

function IconViewApps(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewApps {
	return new IconViewApps($size, $fill, $iconTypeWeight);
}

function IconViewArray(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewArray {
	return new IconViewArray($size, $fill, $iconTypeWeight);
}

function IconViewCarousel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCarousel {
	return new IconViewCarousel($size, $fill, $iconTypeWeight);
}

function IconViewColumn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewColumn {
	return new IconViewColumn($size, $fill, $iconTypeWeight);
}

function IconViewColumn2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewColumn2 {
	return new IconViewColumn2($size, $fill, $iconTypeWeight);
}

function IconViewComfy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewComfy {
	return new IconViewComfy($size, $fill, $iconTypeWeight);
}

function IconViewComfyAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewComfyAlt {
	return new IconViewComfyAlt($size, $fill, $iconTypeWeight);
}

function IconViewCompact(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCompact {
	return new IconViewCompact($size, $fill, $iconTypeWeight);
}

function IconViewCompactAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCompactAlt {
	return new IconViewCompactAlt($size, $fill, $iconTypeWeight);
}

function IconViewCozy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewCozy {
	return new IconViewCozy($size, $fill, $iconTypeWeight);
}

function IconViewDay(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewDay {
	return new IconViewDay($size, $fill, $iconTypeWeight);
}

function IconViewHeadline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewHeadline {
	return new IconViewHeadline($size, $fill, $iconTypeWeight);
}

function IconViewInAr(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewInAr {
	return new IconViewInAr($size, $fill, $iconTypeWeight);
}

function IconViewInArOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewInArOff {
	return new IconViewInArOff($size, $fill, $iconTypeWeight);
}

function IconViewKanban(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewKanban {
	return new IconViewKanban($size, $fill, $iconTypeWeight);
}

function IconViewList(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewList {
	return new IconViewList($size, $fill, $iconTypeWeight);
}

function IconViewModule(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewModule {
	return new IconViewModule($size, $fill, $iconTypeWeight);
}

function IconViewObjectTrack(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewObjectTrack {
	return new IconViewObjectTrack($size, $fill, $iconTypeWeight);
}

function IconViewQuilt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewQuilt {
	return new IconViewQuilt($size, $fill, $iconTypeWeight);
}

function IconViewRealSize(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewRealSize {
	return new IconViewRealSize($size, $fill, $iconTypeWeight);
}

function IconViewSidebar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewSidebar {
	return new IconViewSidebar($size, $fill, $iconTypeWeight);
}

function IconViewStream(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewStream {
	return new IconViewStream($size, $fill, $iconTypeWeight);
}

function IconViewTimeline(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewTimeline {
	return new IconViewTimeline($size, $fill, $iconTypeWeight);
}

function IconViewWeek(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconViewWeek {
	return new IconViewWeek($size, $fill, $iconTypeWeight);
}

function IconVignette(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVignette {
	return new IconVignette($size, $fill, $iconTypeWeight);
}

function IconVilla(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVilla {
	return new IconVilla($size, $fill, $iconTypeWeight);
}

function IconVisibility(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVisibility {
	return new IconVisibility($size, $fill, $iconTypeWeight);
}

function IconVisibilityLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVisibilityLock {
	return new IconVisibilityLock($size, $fill, $iconTypeWeight);
}

function IconVisibilityOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVisibilityOff {
	return new IconVisibilityOff($size, $fill, $iconTypeWeight);
}

function IconVitalSigns(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVitalSigns {
	return new IconVitalSigns($size, $fill, $iconTypeWeight);
}

function IconVo2Max(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVo2Max {
	return new IconVo2Max($size, $fill, $iconTypeWeight);
}

function IconVoiceChat(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceChat {
	return new IconVoiceChat($size, $fill, $iconTypeWeight);
}

function IconVoicemail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoicemail {
	return new IconVoicemail($size, $fill, $iconTypeWeight);
}

function IconVoiceOverOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceOverOff {
	return new IconVoiceOverOff($size, $fill, $iconTypeWeight);
}

function IconVoiceSelection(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceSelection {
	return new IconVoiceSelection($size, $fill, $iconTypeWeight);
}

function IconVoiceSelectionOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVoiceSelectionOff {
	return new IconVoiceSelectionOff($size, $fill, $iconTypeWeight);
}

function IconVolcano(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolcano {
	return new IconVolcano($size, $fill, $iconTypeWeight);
}

function IconVolumeDown(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeDown {
	return new IconVolumeDown($size, $fill, $iconTypeWeight);
}

function IconVolumeDownAlt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeDownAlt {
	return new IconVolumeDownAlt($size, $fill, $iconTypeWeight);
}

function IconVolumeMute(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeMute {
	return new IconVolumeMute($size, $fill, $iconTypeWeight);
}

function IconVolumeOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeOff {
	return new IconVolumeOff($size, $fill, $iconTypeWeight);
}

function IconVolumeUp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolumeUp {
	return new IconVolumeUp($size, $fill, $iconTypeWeight);
}

function IconVolunteerActivism(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVolunteerActivism {
	return new IconVolunteerActivism($size, $fill, $iconTypeWeight);
}

function IconVotingChip(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVotingChip {
	return new IconVotingChip($size, $fill, $iconTypeWeight);
}

function IconVpnKey(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnKey {
	return new IconVpnKey($size, $fill, $iconTypeWeight);
}

function IconVpnKeyAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnKeyAlert {
	return new IconVpnKeyAlert($size, $fill, $iconTypeWeight);
}

function IconVpnKeyOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnKeyOff {
	return new IconVpnKeyOff($size, $fill, $iconTypeWeight);
}

function IconVpnLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVpnLock {
	return new IconVpnLock($size, $fill, $iconTypeWeight);
}

function IconVr180Create2d(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVr180Create2d {
	return new IconVr180Create2d($size, $fill, $iconTypeWeight);
}

function IconVr180Create2dOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVr180Create2dOff {
	return new IconVr180Create2dOff($size, $fill, $iconTypeWeight);
}

function IconVrpano(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconVrpano {
	return new IconVrpano($size, $fill, $iconTypeWeight);
}

function IconWallArt(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallArt {
	return new IconWallArt($size, $fill, $iconTypeWeight);
}

function IconWallet(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallet {
	return new IconWallet($size, $fill, $iconTypeWeight);
}

function IconWallLamp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallLamp {
	return new IconWallLamp($size, $fill, $iconTypeWeight);
}

function IconWallpaper(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallpaper {
	return new IconWallpaper($size, $fill, $iconTypeWeight);
}

function IconWallpaperSlideshow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWallpaperSlideshow {
	return new IconWallpaperSlideshow($size, $fill, $iconTypeWeight);
}

function IconWard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWard {
	return new IconWard($size, $fill, $iconTypeWeight);
}

function IconWarehouse(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWarehouse {
	return new IconWarehouse($size, $fill, $iconTypeWeight);
}

function IconWarning(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWarning {
	return new IconWarning($size, $fill, $iconTypeWeight);
}

function IconWarningOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWarningOff {
	return new IconWarningOff($size, $fill, $iconTypeWeight);
}

function IconWash(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWash {
	return new IconWash($size, $fill, $iconTypeWeight);
}

function IconWatch(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatch {
	return new IconWatch($size, $fill, $iconTypeWeight);
}

function IconWatchButtonPress(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchButtonPress {
	return new IconWatchButtonPress($size, $fill, $iconTypeWeight);
}

function IconWatchCheck(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchCheck {
	return new IconWatchCheck($size, $fill, $iconTypeWeight);
}

function IconWatchOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchOff {
	return new IconWatchOff($size, $fill, $iconTypeWeight);
}

function IconWatchScreentime(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchScreentime {
	return new IconWatchScreentime($size, $fill, $iconTypeWeight);
}

function IconWatchVibration(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchVibration {
	return new IconWatchVibration($size, $fill, $iconTypeWeight);
}

function IconWatchWake(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWatchWake {
	return new IconWatchWake($size, $fill, $iconTypeWeight);
}

function IconWater(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWater {
	return new IconWater($size, $fill, $iconTypeWeight);
}

function IconWaterBottle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterBottle {
	return new IconWaterBottle($size, $fill, $iconTypeWeight);
}

function IconWaterBottleLarge(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterBottleLarge {
	return new IconWaterBottleLarge($size, $fill, $iconTypeWeight);
}

function IconWaterDamage(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterDamage {
	return new IconWaterDamage($size, $fill, $iconTypeWeight);
}

function IconWaterDo(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterDo {
	return new IconWaterDo($size, $fill, $iconTypeWeight);
}

function IconWaterDrop(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterDrop {
	return new IconWaterDrop($size, $fill, $iconTypeWeight);
}

function IconWaterEc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterEc {
	return new IconWaterEc($size, $fill, $iconTypeWeight);
}

function IconWaterfallChart(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterfallChart {
	return new IconWaterfallChart($size, $fill, $iconTypeWeight);
}

function IconWaterFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterFull {
	return new IconWaterFull($size, $fill, $iconTypeWeight);
}

function IconWaterHeater(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterHeater {
	return new IconWaterHeater($size, $fill, $iconTypeWeight);
}

function IconWaterLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterLock {
	return new IconWaterLock($size, $fill, $iconTypeWeight);
}

function IconWaterLoss(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterLoss {
	return new IconWaterLoss($size, $fill, $iconTypeWeight);
}

function IconWaterLux(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterLux {
	return new IconWaterLux($size, $fill, $iconTypeWeight);
}

function IconWaterMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterMedium {
	return new IconWaterMedium($size, $fill, $iconTypeWeight);
}

function IconWaterOrp(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterOrp {
	return new IconWaterOrp($size, $fill, $iconTypeWeight);
}

function IconWaterPh(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterPh {
	return new IconWaterPh($size, $fill, $iconTypeWeight);
}

function IconWaterPump(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterPump {
	return new IconWaterPump($size, $fill, $iconTypeWeight);
}

function IconWaterVoc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaterVoc {
	return new IconWaterVoc($size, $fill, $iconTypeWeight);
}

function IconWaves(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWaves {
	return new IconWaves($size, $fill, $iconTypeWeight);
}

function IconWavingHand(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWavingHand {
	return new IconWavingHand($size, $fill, $iconTypeWeight);
}

function IconWbAuto(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbAuto {
	return new IconWbAuto($size, $fill, $iconTypeWeight);
}

function IconWbIncandescent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbIncandescent {
	return new IconWbIncandescent($size, $fill, $iconTypeWeight);
}

function IconWbIridescent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbIridescent {
	return new IconWbIridescent($size, $fill, $iconTypeWeight);
}

function IconWbShade(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbShade {
	return new IconWbShade($size, $fill, $iconTypeWeight);
}

function IconWbSunny(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbSunny {
	return new IconWbSunny($size, $fill, $iconTypeWeight);
}

function IconWbTwilight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWbTwilight {
	return new IconWbTwilight($size, $fill, $iconTypeWeight);
}

function IconWc(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWc {
	return new IconWc($size, $fill, $iconTypeWeight);
}

function IconWeatherHail(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeatherHail {
	return new IconWeatherHail($size, $fill, $iconTypeWeight);
}

function IconWeatherMix(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeatherMix {
	return new IconWeatherMix($size, $fill, $iconTypeWeight);
}

function IconWeatherSnowy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeatherSnowy {
	return new IconWeatherSnowy($size, $fill, $iconTypeWeight);
}

function IconWeb(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeb {
	return new IconWeb($size, $fill, $iconTypeWeight);
}

function IconWebAsset(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebAsset {
	return new IconWebAsset($size, $fill, $iconTypeWeight);
}

function IconWebAssetOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebAssetOff {
	return new IconWebAssetOff($size, $fill, $iconTypeWeight);
}

function IconWebhook(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebhook {
	return new IconWebhook($size, $fill, $iconTypeWeight);
}

function IconWebStories(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebStories {
	return new IconWebStories($size, $fill, $iconTypeWeight);
}

function IconWebTraffic(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWebTraffic {
	return new IconWebTraffic($size, $fill, $iconTypeWeight);
}

function IconWeekend(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeekend {
	return new IconWeekend($size, $fill, $iconTypeWeight);
}

function IconWeight(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWeight {
	return new IconWeight($size, $fill, $iconTypeWeight);
}

function IconWest(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWest {
	return new IconWest($size, $fill, $iconTypeWeight);
}

function IconWhatshot(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWhatshot {
	return new IconWhatshot($size, $fill, $iconTypeWeight);
}

function IconWheelchairPickup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWheelchairPickup {
	return new IconWheelchairPickup($size, $fill, $iconTypeWeight);
}

function IconWhereToVote(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWhereToVote {
	return new IconWhereToVote($size, $fill, $iconTypeWeight);
}

function IconWidgetMedium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgetMedium {
	return new IconWidgetMedium($size, $fill, $iconTypeWeight);
}

function IconWidgets(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgets {
	return new IconWidgets($size, $fill, $iconTypeWeight);
}

function IconWidgetSmall(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgetSmall {
	return new IconWidgetSmall($size, $fill, $iconTypeWeight);
}

function IconWidgetWidth(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidgetWidth {
	return new IconWidgetWidth($size, $fill, $iconTypeWeight);
}

function IconWidthFull(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidthFull {
	return new IconWidthFull($size, $fill, $iconTypeWeight);
}

function IconWidthNormal(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidthNormal {
	return new IconWidthNormal($size, $fill, $iconTypeWeight);
}

function IconWidthWide(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWidthWide {
	return new IconWidthWide($size, $fill, $iconTypeWeight);
}

function IconWifi(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifi {
	return new IconWifi($size, $fill, $iconTypeWeight);
}

function IconWifi1Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifi1Bar {
	return new IconWifi1Bar($size, $fill, $iconTypeWeight);
}

function IconWifi2Bar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifi2Bar {
	return new IconWifi2Bar($size, $fill, $iconTypeWeight);
}

function IconWifiAdd(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiAdd {
	return new IconWifiAdd($size, $fill, $iconTypeWeight);
}

function IconWifiCalling(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCalling {
	return new IconWifiCalling($size, $fill, $iconTypeWeight);
}

function IconWifiCallingBar1(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCallingBar1 {
	return new IconWifiCallingBar1($size, $fill, $iconTypeWeight);
}

function IconWifiCallingBar2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCallingBar2 {
	return new IconWifiCallingBar2($size, $fill, $iconTypeWeight);
}

function IconWifiCallingBar3(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiCallingBar3 {
	return new IconWifiCallingBar3($size, $fill, $iconTypeWeight);
}

function IconWifiChannel(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiChannel {
	return new IconWifiChannel($size, $fill, $iconTypeWeight);
}

function IconWifiFind(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiFind {
	return new IconWifiFind($size, $fill, $iconTypeWeight);
}

function IconWifiHome(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiHome {
	return new IconWifiHome($size, $fill, $iconTypeWeight);
}

function IconWifiLock(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiLock {
	return new IconWifiLock($size, $fill, $iconTypeWeight);
}

function IconWifiNotification(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiNotification {
	return new IconWifiNotification($size, $fill, $iconTypeWeight);
}

function IconWifiOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiOff {
	return new IconWifiOff($size, $fill, $iconTypeWeight);
}

function IconWifiPassword(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiPassword {
	return new IconWifiPassword($size, $fill, $iconTypeWeight);
}

function IconWifiProtectedSetup(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiProtectedSetup {
	return new IconWifiProtectedSetup($size, $fill, $iconTypeWeight);
}

function IconWifiProxy(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiProxy {
	return new IconWifiProxy($size, $fill, $iconTypeWeight);
}

function IconWifiTethering(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiTethering {
	return new IconWifiTethering($size, $fill, $iconTypeWeight);
}

function IconWifiTetheringError(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiTetheringError {
	return new IconWifiTetheringError($size, $fill, $iconTypeWeight);
}

function IconWifiTetheringOff(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWifiTetheringOff {
	return new IconWifiTetheringOff($size, $fill, $iconTypeWeight);
}

function IconWindow(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindow {
	return new IconWindow($size, $fill, $iconTypeWeight);
}

function IconWindowClosed(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindowClosed {
	return new IconWindowClosed($size, $fill, $iconTypeWeight);
}

function IconWindowOpen(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindowOpen {
	return new IconWindowOpen($size, $fill, $iconTypeWeight);
}

function IconWindowSensor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindowSensor {
	return new IconWindowSensor($size, $fill, $iconTypeWeight);
}

function IconWindPower(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWindPower {
	return new IconWindPower($size, $fill, $iconTypeWeight);
}

function IconWineBar(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWineBar {
	return new IconWineBar($size, $fill, $iconTypeWeight);
}

function IconWoman(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWoman {
	return new IconWoman($size, $fill, $iconTypeWeight);
}

function IconWoman2(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWoman2 {
	return new IconWoman2($size, $fill, $iconTypeWeight);
}

function IconWork(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWork {
	return new IconWork($size, $fill, $iconTypeWeight);
}

function IconWorkAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkAlert {
	return new IconWorkAlert($size, $fill, $iconTypeWeight);
}

function IconWorkHistory(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkHistory {
	return new IconWorkHistory($size, $fill, $iconTypeWeight);
}

function IconWorkspacePremium(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkspacePremium {
	return new IconWorkspacePremium($size, $fill, $iconTypeWeight);
}

function IconWorkspaces(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkspaces {
	return new IconWorkspaces($size, $fill, $iconTypeWeight);
}

function IconWorkUpdate(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWorkUpdate {
	return new IconWorkUpdate($size, $fill, $iconTypeWeight);
}

function IconWoundsInjuries(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWoundsInjuries {
	return new IconWoundsInjuries($size, $fill, $iconTypeWeight);
}

function IconWrapText(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWrapText {
	return new IconWrapText($size, $fill, $iconTypeWeight);
}

function IconWrist(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWrist {
	return new IconWrist($size, $fill, $iconTypeWeight);
}

function IconWrongLocation(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWrongLocation {
	return new IconWrongLocation($size, $fill, $iconTypeWeight);
}

function IconWysiwyg(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconWysiwyg {
	return new IconWysiwyg($size, $fill, $iconTypeWeight);
}

function IconYard(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYard {
	return new IconYard($size, $fill, $iconTypeWeight);
}

function IconYourTrips(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYourTrips {
	return new IconYourTrips($size, $fill, $iconTypeWeight);
}

function IconYoutubeActivity(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYoutubeActivity {
	return new IconYoutubeActivity($size, $fill, $iconTypeWeight);
}

function IconYoutubeSearchedFor(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconYoutubeSearchedFor {
	return new IconYoutubeSearchedFor($size, $fill, $iconTypeWeight);
}

function IconZonePersonAlert(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZonePersonAlert {
	return new IconZonePersonAlert($size, $fill, $iconTypeWeight);
}

function IconZonePersonIdle(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZonePersonIdle {
	return new IconZonePersonIdle($size, $fill, $iconTypeWeight);
}

function IconZonePersonUrgent(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZonePersonUrgent {
	return new IconZonePersonUrgent($size, $fill, $iconTypeWeight);
}

function IconZoomIn(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomIn {
	return new IconZoomIn($size, $fill, $iconTypeWeight);
}

function IconZoomInMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomInMap {
	return new IconZoomInMap($size, $fill, $iconTypeWeight);
}

function IconZoomOut(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomOut {
	return new IconZoomOut($size, $fill, $iconTypeWeight);
}

function IconZoomOutMap(
	int $size,
	array $fill = [ 0,0,0 ],
	IconTypeWeight $iconTypeWeight = IconTypeWeight::iw300
): IconZoomOutMap {
	return new IconZoomOutMap($size, $fill, $iconTypeWeight);
}

/* End Icons */