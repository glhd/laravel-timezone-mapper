<?php

namespace Galahad\TimezoneMapper;

class PolygonLookup
{
	/**
	 * @var \Galahad\TimezoneMapper\Polygon[]
	 */
	protected $polygons;
	
	public function __construct(array $polygons)
	{
		$this->polygons = $polygons;
	}
	
	public function lookup(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 7.123472) {
			return $this->call50($latitude, $longitude);
		} else if ($longitude < 105.104637) {
			if ($longitude < 43.199055) {
				if ($latitude < 58.776028) {
					if ($latitude < 36.495724) {
						if ($latitude < 16.352222) {
							return $this->call24($latitude, $longitude);
						} else {
							return $this->call25($latitude, $longitude);
						}
					} else if ($latitude < 44.885307) {
						return $this->call28($latitude, $longitude);
					} else if ($longitude < 12.963583) {
						if ($latitude < 55.276527) {
							if ($latitude < 54.561165) {
								if ($latitude < 53.259864) {
									if ($latitude < 45.502335) {
										if ($longitude < 7.181056) {
											if ($latitude < 45.286988) {
												if ($this->polygons[0]->contains($latitude, $longitude)) {
													return 297;
												} else {
													return 271;
												}
											} else if ($latitude < 45.409389) {
												if ($this->polygons[1]->contains($latitude, $longitude)) {
													return 297;
												} else {
													return 271;
												}
											} else {
												if ($this->polygons[2]->contains($latitude, $longitude)) {
													return 297;
												} else {
													return 271;
												}
											}
										} else {
											return 271;
										}
									} else if ($longitude < 10.491472) {
										if ($longitude < 8.721278) {
											if ($latitude < 46.464279) {
												if ($this->polygons[3]->contains($latitude, $longitude)) {
													return 172;
												} else {
													return 271;
												}
											} else if ($latitude < 49.182751) {
												if ($latitude < 47.805332) {
													if ($longitude < 7.922375) {
														if ($this->polygons[4]->contains($latitude, $longitude)) {
															return 6;
														}
														if ($this->polygons[5]->contains($latitude, $longitude)) {
															return 297;
														} else {
															return 172;
														}
													} else {
														if ($this->polygons[6]->contains($latitude, $longitude)) {
															return 6;
														}
														if ($this->polygons[7]->contains($latitude, $longitude)) {
															return 6;
														} else {
															return 172;
														}
													}
												} else {
													if ($this->polygons[8]->contains($latitude, $longitude)) {
														return 297;
													} else {
														return 6;
													}
												}
											} else {
												if ($this->polygons[9]->contains($latitude, $longitude)) {
													return 385;
												} else {
													return 6;
												}
											}
										} else if ($latitude < 46.939667) {
											if ($longitude < 9.606375) {
												if ($this->polygons[10]->contains($latitude, $longitude)) {
													return 271;
												} else {
													return 172;
												}
											} else {
												if ($this->polygons[11]->contains($latitude, $longitude)) {
													return 271;
												}
												if ($this->polygons[12]->contains($latitude, $longitude)) {
													return 276;
												}
												if ($this->polygons[13]->contains($latitude, $longitude)) {
													return 276;
												} else {
													return 172;
												}
											}
										} else if ($latitude < 50.099766) {
											if ($latitude < 48.519716) {
												if ($longitude < 9.606375) {
													if ($this->polygons[14]->contains($latitude, $longitude)) {
														return 6;
													}
													if ($this->polygons[15]->contains($latitude, $longitude)) {
														return 78;
													}
													if ($this->polygons[16]->contains($latitude, $longitude)) {
														return 276;
													}
													if ($this->polygons[17]->contains($latitude, $longitude)) {
														return 276;
													}
													if ($this->polygons[18]->contains($latitude, $longitude)) {
														return 276;
													} else {
														return 172;
													}
												} else {
													if ($this->polygons[19]->contains($latitude, $longitude)) {
														return 6;
													}
													if ($this->polygons[20]->contains($latitude, $longitude)) {
														return 78;
													}
													if ($this->polygons[21]->contains($latitude, $longitude)) {
														return 172;
													}
													if ($this->polygons[22]->contains($latitude, $longitude)) {
														return 172;
													}
													if ($this->polygons[23]->contains($latitude, $longitude)) {
														return 172;
													} else {
														return 276;
													}
												}
											} else {
												return 6;
											}
										} else {
											return 6;
										}
									} else if ($latitude < 45.546391) {
										return 271;
									} else if ($latitude < 47.794126) {
										if ($latitude < 47.095196) {
											if ($this->polygons[24]->contains($latitude, $longitude)) {
												return 276;
											}
											if ($this->polygons[25]->contains($latitude, $longitude)) {
												return 276;
											} else {
												return 271;
											}
										} else {
											if ($this->polygons[26]->contains($latitude, $longitude)) {
												return 276;
											}
											if ($this->polygons[27]->contains($latitude, $longitude)) {
												return 276;
											} else {
												return 6;
											}
										}
									} else if ($latitude < 48.216392) {
										if ($this->polygons[28]->contains($latitude, $longitude)) {
											return 276;
										} else {
											return 6;
										}
									} else {
										if ($this->polygons[29]->contains($latitude, $longitude)) {
											return 220;
										} else {
											return 6;
										}
									}
								} else {
									return 6;
								}
							} else if ($longitude < 10.036305) {
								if ($latitude < 54.760555) {
									return 6;
								} else if ($latitude < 55.045019) {
									if ($longitude < 8.408679) {
										return 6;
									} else if ($latitude < 54.913971) {
										if ($longitude < 9.604082) {
											if ($longitude < 8.817778) {
												if ($this->polygons[30]->contains($latitude, $longitude)) {
													return 319;
												} else {
													return 6;
												}
											} else {
												if ($this->polygons[31]->contains($latitude, $longitude)) {
													return 319;
												} else {
													return 6;
												}
											}
										} else if ($longitude < 9.782444) {
											if ($this->polygons[32]->contains($latitude, $longitude)) {
												return 6;
											} else {
												return 319;
											}
										} else if ($latitude < 54.802927) {
											return 6;
										} else {
											return 319;
										}
									} else {
										return 319;
									}
								} else {
									return 319;
								}
							} else {
								return 319;
							}
						} else if ($latitude < 57.760113) {
							if ($longitude < 11.307861) {
								return 319;
							} else if ($latitude < 56.739723) {
								if ($longitude < 12.102083) {
									return 319;
								} else if ($longitude < 12.792528) {
									if ($latitude < 56.120609) {
										if ($latitude < 55.698891) {
											return 319;
										} else if ($longitude < 12.635111) {
											if ($this->polygons[33]->contains($latitude, $longitude)) {
												return 375;
											} else {
												return 319;
											}
										} else {
											return 375;
										}
									} else {
										return 375;
									}
								} else {
									return 375;
								}
							} else {
								return 375;
							}
						} else if ($longitude < 9.394170) {
							return 355;
						} else {
							return 375;
						}
					} else if ($latitude < 56.900307) {
						return $this->call27($latitude, $longitude);
					} else if ($longitude < 19.184860) {
						return 375;
					} else if ($longitude < 23.412361) {
						if ($latitude < 58.394665) {
							if ($longitude < 19.362333) {
								return 375;
							} else if ($latitude < 57.761696) {
								return 332;
							} else {
								return 49;
							}
						} else {
							return 49;
						}
					} else if ($longitude < 23.499717) {
						if ($latitude < 57.042571) {
							return 332;
						} else {
							return 49;
						}
					} else if ($longitude < 24.020306) {
						if ($latitude < 57.039259) {
							return 332;
						} else {
							return 49;
						}
					} else if ($longitude < 33.609680) {
						if ($longitude < 28.814993) {
							if ($longitude < 26.417649) {
								if ($this->polygons[34]->contains($latitude, $longitude)) {
									return 332;
								} else {
									return 49;
								}
							} else {
								if ($this->polygons[35]->contains($latitude, $longitude)) {
									return 49;
								}
								if ($this->polygons[36]->contains($latitude, $longitude)) {
									return 332;
								} else {
									return 183;
								}
							}
						} else {
							return 183;
						}
					} else {
						return 183;
					}
				} else {
					return $this->call29($latitude, $longitude);
				}
			} else if ($latitude < 20.645721) {
				return $this->call40($latitude, $longitude);
			} else {
				return $this->call41($latitude, $longitude);
			}
		} else {
			return $this->call49($latitude, $longitude);
		}
	}
	
	protected function call0(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -58.655621) {
			if ($longitude < -62.365894) {
				if ($longitude < -70.680565) {
					if ($latitude < -36.247081) {
						if ($longitude < -72.442055) {
							return 31;
						} else if ($latitude < -36.383263) {
							if ($latitude < -39.927078) {
								if ($latitude < -41.698986) {
									if ($this->polygons[37]->contains($latitude, $longitude)) {
										return 88;
									}
									if ($this->polygons[38]->contains($latitude, $longitude)) {
										return 127;
									} else {
										return 31;
									}
								} else {
									if ($this->polygons[39]->contains($latitude, $longitude)) {
										return 127;
									} else {
										return 31;
									}
								}
							} else if ($latitude < -38.155170) {
								if ($this->polygons[40]->contains($latitude, $longitude)) {
									return 31;
								} else {
									return 127;
								}
							} else {
								if ($this->polygons[41]->contains($latitude, $longitude)) {
									return 127;
								} else {
									return 31;
								}
							}
						} else {
							if ($this->polygons[42]->contains($latitude, $longitude)) {
								return 127;
							} else {
								return 31;
							}
						}
					} else {
						return 31;
					}
				} else if ($latitude < -40.237473) {
					if ($longitude < -62.790363) {
						if ($latitude < -42.344032) {
							return 88;
						} else if ($latitude < -42.072571) {
							return 88;
						} else if ($longitude < -65.033895) {
							if ($this->polygons[43]->contains($latitude, $longitude)) {
								return 88;
							} else {
								return 127;
							}
						} else if ($longitude < -65.004135) {
							return 127;
						} else {
							if ($this->polygons[44]->contains($latitude, $longitude)) {
								return 226;
							} else {
								return 127;
							}
						}
					} else {
						return 226;
					}
				} else if ($latitude < -31.954723) {
					if ($longitude < -69.174179) {
						if ($latitude < -36.096098) {
							if ($this->polygons[45]->contains($latitude, $longitude)) {
								return 14;
							}
							if ($this->polygons[46]->contains($latitude, $longitude)) {
								return 31;
							}
							if ($this->polygons[47]->contains($latitude, $longitude)) {
								return 31;
							} else {
								return 127;
							}
						} else if ($latitude < -34.025411) {
							if ($this->polygons[48]->contains($latitude, $longitude)) {
								return 31;
							} else {
								return 14;
							}
						} else if ($latitude < -32.990067) {
							if ($this->polygons[49]->contains($latitude, $longitude)) {
								return 31;
							} else {
								return 14;
							}
						} else {
							if ($this->polygons[50]->contains($latitude, $longitude)) {
								return 31;
							}
							if ($this->polygons[51]->contains($latitude, $longitude)) {
								return 346;
							} else {
								return 14;
							}
						}
					} else if ($longitude < -66.501678) {
						if ($latitude < -36.096098) {
							if ($this->polygons[52]->contains($latitude, $longitude)) {
								return 14;
							} else {
								return 127;
							}
						} else if ($latitude < -34.025411) {
							if ($this->polygons[53]->contains($latitude, $longitude)) {
								return 127;
							}
							if ($this->polygons[54]->contains($latitude, $longitude)) {
								return 314;
							} else {
								return 14;
							}
						} else {
							if ($this->polygons[55]->contains($latitude, $longitude)) {
								return 314;
							}
							if ($this->polygons[56]->contains($latitude, $longitude)) {
								return 346;
							} else {
								return 14;
							}
						}
					} else {
						if ($this->polygons[57]->contains($latitude, $longitude)) {
							return 127;
						}
						if ($this->polygons[58]->contains($latitude, $longitude)) {
							return 226;
						}
						if ($this->polygons[59]->contains($latitude, $longitude)) {
							return 314;
						} else {
							return 278;
						}
					}
				} else if ($longitude < -66.523230) {
					if ($latitude < -28.555717) {
						if ($longitude < -68.601897) {
							if ($latitude < -30.255220) {
								if ($this->polygons[60]->contains($latitude, $longitude)) {
									return 346;
								} else {
									return 31;
								}
							} else {
								if ($this->polygons[61]->contains($latitude, $longitude)) {
									return 31;
								}
								if ($this->polygons[62]->contains($latitude, $longitude)) {
									return 249;
								} else {
									return 346;
								}
							}
						} else {
							if ($this->polygons[63]->contains($latitude, $longitude)) {
								return 249;
							}
							if ($this->polygons[64]->contains($latitude, $longitude)) {
								return 314;
							} else {
								return 346;
							}
						}
					} else if ($longitude < -68.601897) {
						if ($this->polygons[65]->contains($latitude, $longitude)) {
							return 88;
						}
						if ($this->polygons[66]->contains($latitude, $longitude)) {
							return 249;
						}
						if ($this->polygons[67]->contains($latitude, $longitude)) {
							return 346;
						} else {
							return 31;
						}
					} else if ($latitude < -26.856215) {
						if ($this->polygons[68]->contains($latitude, $longitude)) {
							return 31;
						}
						if ($this->polygons[69]->contains($latitude, $longitude)) {
							return 249;
						} else {
							return 88;
						}
					} else {
						if ($this->polygons[70]->contains($latitude, $longitude)) {
							return 31;
						}
						if ($this->polygons[71]->contains($latitude, $longitude)) {
							return 127;
						}
						if ($this->polygons[72]->contains($latitude, $longitude)) {
							return 127;
						} else {
							return 88;
						}
					}
				} else if ($latitude < -28.555717) {
					if ($this->polygons[73]->contains($latitude, $longitude)) {
						return 249;
					}
					if ($this->polygons[74]->contains($latitude, $longitude)) {
						return 278;
					}
					if ($this->polygons[75]->contains($latitude, $longitude)) {
						return 314;
					} else {
						return 88;
					}
				} else if ($longitude < -64.444562) {
					if ($latitude < -26.856215) {
						if ($longitude < -65.483896) {
							if ($this->polygons[76]->contains($latitude, $longitude)) {
								return 129;
							}
							if ($this->polygons[77]->contains($latitude, $longitude)) {
								return 249;
							} else {
								return 88;
							}
						} else {
							if ($this->polygons[78]->contains($latitude, $longitude)) {
								return 88;
							}
							if ($this->polygons[79]->contains($latitude, $longitude)) {
								return 129;
							} else {
								return 278;
							}
						}
					} else {
						if ($this->polygons[80]->contains($latitude, $longitude)) {
							return 88;
						}
						if ($this->polygons[81]->contains($latitude, $longitude)) {
							return 88;
						}
						if ($this->polygons[82]->contains($latitude, $longitude)) {
							return 127;
						}
						if ($this->polygons[83]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 129;
						}
					}
				} else {
					if ($this->polygons[84]->contains($latitude, $longitude)) {
						return 127;
					} else {
						return 278;
					}
				}
			} else if ($latitude < -38.766533) {
				return 226;
			} else {
				if ($this->polygons[85]->contains($latitude, $longitude)) {
					return 278;
				} else {
					return 226;
				}
			}
		} else if ($longitude < -53.073933) {
			if ($latitude < -33.963406) {
				if ($longitude < -58.364113) {
					if ($latitude < -34.247784) {
						return 226;
					} else if ($longitude < -58.432247) {
						if ($this->polygons[86]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 226;
						}
					} else if ($latitude < -34.015757) {
						return 226;
					} else {
						return 245;
					}
				} else if ($longitude < -56.669033) {
					if ($latitude < -34.604405) {
						if ($this->polygons[87]->contains($latitude, $longitude)) {
							return 245;
						} else {
							return 226;
						}
					} else if ($longitude < -58.238857) {
						if ($latitude < -34.121304) {
							return 226;
						} else {
							return 245;
						}
					} else {
						return 245;
					}
				} else {
					return 245;
				}
			} else if ($latitude < -32.746323) {
				if ($longitude < -58.113934) {
					if ($longitude < -58.179478) {
						if ($latitude < -33.112217) {
							if ($this->polygons[88]->contains($latitude, $longitude)) {
								return 278;
							} else {
								return 245;
							}
						} else if ($longitude < -58.244583) {
							return 278;
						} else {
							if ($this->polygons[89]->contains($latitude, $longitude)) {
								return 245;
							} else {
								return 278;
							}
						}
					} else if ($latitude < -33.078617) {
						return 245;
					} else if ($longitude < -58.151073) {
						if ($this->polygons[90]->contains($latitude, $longitude)) {
							return 245;
						} else {
							return 278;
						}
					} else if ($latitude < -33.051277) {
						return 245;
					} else {
						if ($this->polygons[91]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 245;
						}
					}
				} else if ($longitude < -58.083050) {
					return 245;
				} else {
					if ($this->polygons[92]->contains($latitude, $longitude)) {
						return 329;
					} else {
						return 245;
					}
				}
			} else if ($latitude < -28.951517) {
				if ($longitude < -55.864777) {
					if ($latitude < -30.848920) {
						if ($this->polygons[93]->contains($latitude, $longitude)) {
							return 278;
						}
						if ($this->polygons[94]->contains($latitude, $longitude)) {
							return 329;
						} else {
							return 245;
						}
					} else if ($longitude < -57.260199) {
						if ($this->polygons[95]->contains($latitude, $longitude)) {
							return 278;
						}
						if ($this->polygons[96]->contains($latitude, $longitude)) {
							return 329;
						} else {
							return 245;
						}
					} else if ($latitude < -29.900218) {
						if ($this->polygons[97]->contains($latitude, $longitude)) {
							return 329;
						} else {
							return 245;
						}
					} else {
						if ($this->polygons[98]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 329;
						}
					}
				} else {
					if ($this->polygons[99]->contains($latitude, $longitude)) {
						return 329;
					} else {
						return 245;
					}
				}
			} else if ($longitude < -55.864777) {
				if ($latitude < -27.054114) {
					if ($this->polygons[100]->contains($latitude, $longitude)) {
						return 219;
					}
					if ($this->polygons[101]->contains($latitude, $longitude)) {
						return 329;
					} else {
						return 278;
					}
				} else if ($longitude < -57.260199) {
					if ($latitude < -26.105413) {
						if ($this->polygons[102]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 219;
						}
					} else {
						if ($this->polygons[103]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 219;
						}
					}
				} else {
					return 219;
				}
			} else if ($latitude < -27.054114) {
				if ($longitude < -54.469355) {
					if ($latitude < -28.002816) {
						if ($this->polygons[104]->contains($latitude, $longitude)) {
							return 278;
						} else {
							return 329;
						}
					} else {
						if ($this->polygons[105]->contains($latitude, $longitude)) {
							return 219;
						}
						if ($this->polygons[106]->contains($latitude, $longitude)) {
							return 329;
						}
						if ($this->polygons[107]->contains($latitude, $longitude)) {
							return 329;
						} else {
							return 278;
						}
					}
				} else {
					if ($this->polygons[108]->contains($latitude, $longitude)) {
						return 278;
					}
					if ($this->polygons[109]->contains($latitude, $longitude)) {
						return 278;
					}
					if ($this->polygons[110]->contains($latitude, $longitude)) {
						return 278;
					} else {
						return 329;
					}
				}
			} else if ($longitude < -54.469355) {
				if ($this->polygons[111]->contains($latitude, $longitude)) {
					return 278;
				}
				if ($this->polygons[112]->contains($latitude, $longitude)) {
					return 329;
				} else {
					return 219;
				}
			} else if ($latitude < -26.105413) {
				if ($this->polygons[113]->contains($latitude, $longitude)) {
					return 329;
				}
				if ($this->polygons[114]->contains($latitude, $longitude)) {
					return 329;
				} else {
					return 278;
				}
			} else {
				if ($this->polygons[115]->contains($latitude, $longitude)) {
					return 219;
				}
				if ($this->polygons[116]->contains($latitude, $longitude)) {
					return 278;
				} else {
					return 329;
				}
			}
		} else if ($longitude < -47.913853) {
			return 329;
		} else {
			return 156;
		}
	}
	
	protected function call1(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -82.738289) {
			if ($latitude < 14.445067) {
				if ($latitude < 0.165531) {
					if ($longitude < -124.772850) {
						if ($longitude < -136.162170) {
							if ($latitude < -21.293276) {
								return 305;
							} else {
								return 312;
							}
						} else if ($longitude < -134.878342) {
							return 305;
						} else {
							return 107;
						}
					} else {
						return 114;
					}
				} else if ($latitude < 12.177296) {
					if ($latitude < 8.949529) {
						if ($longitude < -89.933998) {
							return 114;
						} else if ($longitude < -83.620537) {
							return 396;
						} else {
							if ($this->polygons[117]->contains($latitude, $longitude)) {
								return 22;
							} else {
								return 396;
							}
						}
					} else if ($latitude < 9.948153) {
						if ($longitude < -83.621902) {
							return 396;
						} else {
							if ($this->polygons[118]->contains($latitude, $longitude)) {
								return 22;
							} else {
								return 396;
							}
						}
					} else if ($latitude < 10.119060) {
						return 396;
					} else if ($longitude < -83.202422) {
						if ($latitude < 10.124827) {
							return 396;
						} else {
							if ($this->polygons[119]->contains($latitude, $longitude)) {
								return 259;
							} else {
								return 396;
							}
						}
					} else {
						return 259;
					}
				} else if ($longitude < -87.692162) {
					if ($latitude < 13.312460) {
						return 258;
					} else if ($longitude < -89.350505) {
						if ($longitude < -90.279968) {
							return 392;
						} else {
							if ($this->polygons[120]->contains($latitude, $longitude)) {
								return 392;
							} else {
								return 258;
							}
						}
					} else {
						if ($this->polygons[121]->contains($latitude, $longitude)) {
							return 258;
						}
						if ($this->polygons[122]->contains($latitude, $longitude)) {
							return 258;
						}
						if ($this->polygons[123]->contains($latitude, $longitude)) {
							return 258;
						} else {
							return 145;
						}
					}
				} else if ($longitude < -85.157913) {
					if ($longitude < -87.547157) {
						if ($latitude < 13.082987) {
							return 259;
						} else {
							return 145;
						}
					} else if ($latitude < 12.833526) {
						return 259;
					} else if ($latitude < 14.293488) {
						if ($latitude < 13.315682) {
							if ($this->polygons[124]->contains($latitude, $longitude)) {
								return 259;
							} else {
								return 145;
							}
						} else if ($longitude < -87.386246) {
							return 145;
						} else {
							if ($this->polygons[125]->contains($latitude, $longitude)) {
								return 259;
							} else {
								return 145;
							}
						}
					} else {
						if ($this->polygons[126]->contains($latitude, $longitude)) {
							return 259;
						} else {
							return 145;
						}
					}
				} else {
					return 259;
				}
			} else if ($latitude < 17.817400) {
				if ($longitude < -88.033722) {
					if ($longitude < -88.175591) {
						if ($longitude < -92.937019) {
							return 192;
						} else if ($longitude < -90.371544) {
							if ($latitude < 16.131234) {
								if ($this->polygons[127]->contains($latitude, $longitude)) {
									return 192;
								} else {
									return 392;
								}
							} else if ($longitude < -91.654282) {
								return 192;
							} else if ($latitude < 16.974317) {
								if ($this->polygons[128]->contains($latitude, $longitude)) {
									return 392;
								} else {
									return 192;
								}
							} else {
								if ($this->polygons[129]->contains($latitude, $longitude)) {
									return 392;
								} else {
									return 192;
								}
							}
						} else if ($latitude < 15.718479) {
							if ($this->polygons[130]->contains($latitude, $longitude)) {
								return 145;
							} else {
								return 392;
							}
						} else if ($longitude < -88.627838) {
							if ($this->polygons[131]->contains($latitude, $longitude)) {
								return 392;
							} else {
								return 41;
							}
						} else if ($latitude < 16.102887) {
							return 41;
						} else {
							return 392;
						}
					} else if ($latitude < 15.784808) {
						return 145;
					} else {
						return 41;
					}
				} else if ($latitude < 16.510256) {
					if ($longitude < -85.842651) {
						return 145;
					} else if ($longitude < -84.498272) {
						if ($this->polygons[132]->contains($latitude, $longitude)) {
							return 259;
						} else {
							return 145;
						}
					} else {
						if ($this->polygons[133]->contains($latitude, $longitude)) {
							return 145;
						} else {
							return 259;
						}
					}
				} else if ($longitude < -87.468124) {
					return 41;
				} else {
					return 145;
				}
			} else if ($longitude < -87.849937) {
				if ($longitude < -90.983063) {
					if ($longitude < -110.807060) {
						return 407;
					} else if ($longitude < -96.048988) {
						return 192;
					} else if ($longitude < -91.509560) {
						if ($this->polygons[134]->contains($latitude, $longitude)) {
							return 32;
						}
						if ($this->polygons[135]->contains($latitude, $longitude)) {
							return 32;
						} else {
							return 192;
						}
					} else if ($latitude < 18.103054) {
						if ($this->polygons[136]->contains($latitude, $longitude)) {
							return 192;
						} else {
							return 32;
						}
					} else {
						return 32;
					}
				} else if ($longitude < -88.067238) {
					if ($longitude < -88.080856) {
						if ($this->polygons[137]->contains($latitude, $longitude)) {
							return 32;
						}
						if ($this->polygons[138]->contains($latitude, $longitude)) {
							return 41;
						} else {
							return 401;
						}
					} else {
						return 401;
					}
				} else if ($latitude < 18.167719) {
					return 41;
				} else {
					return 401;
				}
			} else {
				return 401;
			}
		} else if ($latitude < 7.644825) {
			if ($latitude < 1.841667) {
				if ($longitude < -79.895477) {
					if ($latitude < -3.404815) {
						if ($longitude < -80.838730) {
							return 164;
						} else if ($longitude < -80.230945) {
							if ($latitude < -3.453752) {
								if ($latitude < -3.949543) {
									if ($this->polygons[139]->contains($latitude, $longitude)) {
										return 381;
									} else {
										return 164;
									}
								} else {
									if ($this->polygons[140]->contains($latitude, $longitude)) {
										return 381;
									} else {
										return 164;
									}
								}
							} else {
								if ($this->polygons[141]->contains($latitude, $longitude)) {
									return 164;
								} else {
									return 381;
								}
							}
						} else if ($latitude < -3.437323) {
							if ($latitude < -4.285207) {
								if ($longitude < -80.136307) {
									if ($this->polygons[142]->contains($latitude, $longitude)) {
										return 381;
									} else {
										return 164;
									}
								} else {
									if ($this->polygons[143]->contains($latitude, $longitude)) {
										return 381;
									} else {
										return 164;
									}
								}
							} else if ($latitude < -3.478404) {
								if ($this->polygons[144]->contains($latitude, $longitude)) {
									return 164;
								} else {
									return 381;
								}
							} else {
								if ($this->polygons[145]->contains($latitude, $longitude)) {
									return 164;
								} else {
									return 381;
								}
							}
						} else {
							return 381;
						}
					} else {
						return 381;
					}
				} else if ($latitude < -9.017232) {
					return 164;
				} else if ($latitude < 1.439020) {
					if ($longitude < -79.723465) {
						if ($latitude < -4.393893) {
							if ($this->polygons[146]->contains($latitude, $longitude)) {
								return 381;
							} else {
								return 164;
							}
						} else {
							return 381;
						}
					} else if ($latitude < -3.789106) {
						if ($this->polygons[147]->contains($latitude, $longitude)) {
							return 381;
						} else {
							return 164;
						}
					} else if ($longitude < -77.101025) {
						if ($this->polygons[148]->contains($latitude, $longitude)) {
							return 164;
						}
						if ($this->polygons[149]->contains($latitude, $longitude)) {
							return 390;
						} else {
							return 381;
						}
					} else if ($latitude < -1.175043) {
						if ($this->polygons[150]->contains($latitude, $longitude)) {
							return 381;
						} else {
							return 164;
						}
					} else if ($longitude < -75.789804) {
						if ($this->polygons[151]->contains($latitude, $longitude)) {
							return 390;
						} else {
							return 381;
						}
					} else if ($latitude < 0.131988) {
						if ($longitude < -75.134194) {
							if ($this->polygons[152]->contains($latitude, $longitude)) {
								return 164;
							}
							if ($this->polygons[153]->contains($latitude, $longitude)) {
								return 390;
							} else {
								return 381;
							}
						} else {
							if ($this->polygons[154]->contains($latitude, $longitude)) {
								return 390;
							} else {
								return 164;
							}
						}
					} else {
						return 390;
					}
				} else {
					return 390;
				}
			} else if ($latitude < 7.110721) {
				return 390;
			} else if ($longitude < -79.995277) {
				return 22;
			} else if ($longitude < -77.718857) {
				if ($latitude < 7.508337) {
					if ($this->polygons[155]->contains($latitude, $longitude)) {
						return 390;
					} else {
						return 22;
					}
				} else {
					if ($this->polygons[156]->contains($latitude, $longitude)) {
						return 390;
					} else {
						return 22;
					}
				}
			} else {
				if ($this->polygons[157]->contains($latitude, $longitude)) {
					return 22;
				} else {
					return 390;
				}
			}
		} else if ($longitude < -79.893906) {
			if ($latitude < 8.331585) {
				return 22;
			} else if ($longitude < -82.231812) {
				if ($longitude < -82.555992) {
					if ($latitude < 9.648608) {
						if ($latitude < 8.973391) {
							if ($this->polygons[158]->contains($latitude, $longitude)) {
								return 396;
							} else {
								return 22;
							}
						} else {
							if ($this->polygons[159]->contains($latitude, $longitude)) {
								return 396;
							} else {
								return 22;
							}
						}
					} else {
						return 259;
					}
				} else {
					return 22;
				}
			} else if ($latitude < 9.380544) {
				return 22;
			} else if ($latitude < 13.380502) {
				return 390;
			} else {
				return 221;
			}
		} else if ($longitude < -78.793159) {
			if ($latitude < 9.637514) {
				return 22;
			} else {
				return 221;
			}
		} else if ($latitude < 11.112972) {
			if ($longitude < -77.174110) {
				if ($longitude < -78.151619) {
					return 22;
				} else if ($latitude < 8.686544) {
					if ($longitude < -77.659527) {
						if ($this->polygons[160]->contains($latitude, $longitude)) {
							return 390;
						} else {
							return 22;
						}
					} else {
						if ($this->polygons[161]->contains($latitude, $longitude)) {
							return 22;
						} else {
							return 390;
						}
					}
				} else {
					return 22;
				}
			} else {
				return 390;
			}
		} else if ($latitude < 18.526976) {
			return 72;
		} else if ($longitude < -77.162140) {
			return 376;
		} else {
			if ($this->polygons[162]->contains($latitude, $longitude)) {
				return 165;
			}
			if ($this->polygons[163]->contains($latitude, $longitude)) {
				return 165;
			} else {
				return 376;
			}
		}
	}
	
	protected function call2(float $latitude, float $longitude) : ?int
	{
		if ($latitude < -4.122895) {
			if ($longitude < -67.557743) {
				if ($latitude < -10.505639) {
					if ($longitude < -71.018164) {
						return 164;
					} else if ($latitude < -12.734070) {
						if ($this->polygons[164]->contains($latitude, $longitude)) {
							return 190;
						} else {
							return 164;
						}
					} else if ($longitude < -69.287953) {
						if ($this->polygons[165]->contains($latitude, $longitude)) {
							return 164;
						}
						if ($this->polygons[166]->contains($latitude, $longitude)) {
							return 190;
						} else {
							return 180;
						}
					} else {
						if ($this->polygons[167]->contains($latitude, $longitude)) {
							return 164;
						}
						if ($this->polygons[168]->contains($latitude, $longitude)) {
							return 180;
						} else {
							return 190;
						}
					}
				} else if ($longitude < -71.018164) {
					if ($latitude < -7.314267) {
						if ($longitude < -72.748374) {
							if ($latitude < -8.909953) {
								if ($this->polygons[169]->contains($latitude, $longitude)) {
									return 180;
								} else {
									return 164;
								}
							} else if ($longitude < -73.613479) {
								if ($this->polygons[170]->contains($latitude, $longitude)) {
									return 180;
								} else {
									return 164;
								}
							} else {
								if ($this->polygons[171]->contains($latitude, $longitude)) {
									return 164;
								}
								if ($this->polygons[172]->contains($latitude, $longitude)) {
									return 241;
								} else {
									return 180;
								}
							}
						} else {
							if ($this->polygons[173]->contains($latitude, $longitude)) {
								return 164;
							}
							if ($this->polygons[174]->contains($latitude, $longitude)) {
								return 241;
							} else {
								return 180;
							}
						}
					} else if ($longitude < -72.748374) {
						if ($latitude < -5.718581) {
							if ($this->polygons[175]->contains($latitude, $longitude)) {
								return 180;
							}
							if ($this->polygons[176]->contains($latitude, $longitude)) {
								return 241;
							} else {
								return 164;
							}
						} else {
							if ($this->polygons[177]->contains($latitude, $longitude)) {
								return 241;
							} else {
								return 164;
							}
						}
					} else if ($latitude < -5.718581) {
						return 241;
					} else if ($longitude < -71.883269) {
						if ($this->polygons[178]->contains($latitude, $longitude)) {
							return 241;
						} else {
							return 164;
						}
					} else {
						if ($this->polygons[179]->contains($latitude, $longitude)) {
							return 241;
						} else {
							return 164;
						}
					}
				} else if ($latitude < -7.314267) {
					if ($this->polygons[180]->contains($latitude, $longitude)) {
						return 7;
					}
					if ($this->polygons[181]->contains($latitude, $longitude)) {
						return 164;
					}
					if ($this->polygons[182]->contains($latitude, $longitude)) {
						return 241;
					} else {
						return 180;
					}
				} else if ($longitude < -69.287953) {
					if ($latitude < -5.718581) {
						return 241;
					} else if ($longitude < -70.153058) {
						if ($latitude < -4.920738) {
							return 241;
						} else if ($longitude < -70.585611) {
							if ($this->polygons[183]->contains($latitude, $longitude)) {
								return 164;
							} else {
								return 241;
							}
						} else {
							if ($this->polygons[184]->contains($latitude, $longitude)) {
								return 241;
							}
							if ($this->polygons[185]->contains($latitude, $longitude)) {
								return 241;
							} else {
								return 164;
							}
						}
					} else {
						if ($this->polygons[186]->contains($latitude, $longitude)) {
							return 7;
						}
						if ($this->polygons[187]->contains($latitude, $longitude)) {
							return 164;
						}
						if ($this->polygons[188]->contains($latitude, $longitude)) {
							return 164;
						}
						if ($this->polygons[189]->contains($latitude, $longitude)) {
							return 390;
						} else {
							return 241;
						}
					}
				} else {
					if ($this->polygons[190]->contains($latitude, $longitude)) {
						return 241;
					} else {
						return 7;
					}
				}
			} else if ($longitude < -59.818611) {
				if ($latitude < -9.542698) {
					if ($longitude < -63.688177) {
						if ($latitude < -12.252600) {
							if ($this->polygons[191]->contains($latitude, $longitude)) {
								return 341;
							} else {
								return 190;
							}
						} else if ($longitude < -65.622960) {
							if ($latitude < -10.897649) {
								return 190;
							} else if ($longitude < -66.590351) {
								if ($this->polygons[192]->contains($latitude, $longitude)) {
									return 7;
								}
								if ($this->polygons[193]->contains($latitude, $longitude)) {
									return 180;
								}
								if ($this->polygons[194]->contains($latitude, $longitude)) {
									return 341;
								} else {
									return 190;
								}
							} else {
								if ($this->polygons[195]->contains($latitude, $longitude)) {
									return 7;
								}
								if ($this->polygons[196]->contains($latitude, $longitude)) {
									return 7;
								}
								if ($this->polygons[197]->contains($latitude, $longitude)) {
									return 190;
								} else {
									return 341;
								}
							}
						} else if ($latitude < -10.897649) {
							if ($this->polygons[198]->contains($latitude, $longitude)) {
								return 341;
							} else {
								return 190;
							}
						} else {
							if ($this->polygons[199]->contains($latitude, $longitude)) {
								return 190;
							} else {
								return 341;
							}
						}
					} else if ($latitude < -12.252600) {
						if ($longitude < -61.753394) {
							if ($this->polygons[200]->contains($latitude, $longitude)) {
								return 341;
							} else {
								return 190;
							}
						} else if ($latitude < -13.607551) {
							if ($this->polygons[201]->contains($latitude, $longitude)) {
								return 341;
							}
							if ($this->polygons[202]->contains($latitude, $longitude)) {
								return 363;
							} else {
								return 190;
							}
						} else {
							if ($this->polygons[203]->contains($latitude, $longitude)) {
								return 190;
							}
							if ($this->polygons[204]->contains($latitude, $longitude)) {
								return 363;
							} else {
								return 341;
							}
						}
					} else {
						if ($this->polygons[205]->contains($latitude, $longitude)) {
							return 341;
						} else {
							return 363;
						}
					}
				} else if ($longitude < -63.688177) {
					if ($latitude < -6.832796) {
						if ($longitude < -65.622960) {
							if ($this->polygons[206]->contains($latitude, $longitude)) {
								return 180;
							}
							if ($this->polygons[207]->contains($latitude, $longitude)) {
								return 341;
							}
							if ($this->polygons[208]->contains($latitude, $longitude)) {
								return 341;
							} else {
								return 7;
							}
						} else {
							if ($this->polygons[209]->contains($latitude, $longitude)) {
								return 341;
							} else {
								return 7;
							}
						}
					} else {
						return 7;
					}
				} else {
					if ($this->polygons[210]->contains($latitude, $longitude)) {
						return 7;
					}
					if ($this->polygons[211]->contains($latitude, $longitude)) {
						return 363;
					} else {
						return 341;
					}
				}
			} else if ($latitude < -9.542698) {
				return 363;
			} else if ($latitude < -6.832796) {
				if ($longitude < -58.062149) {
					if ($this->polygons[212]->contains($latitude, $longitude)) {
						return 310;
					}
					if ($this->polygons[213]->contains($latitude, $longitude)) {
						return 363;
					} else {
						return 7;
					}
				} else {
					if ($this->polygons[214]->contains($latitude, $longitude)) {
						return 363;
					} else {
						return 310;
					}
				}
			} else {
				if ($this->polygons[215]->contains($latitude, $longitude)) {
					return 310;
				} else {
					return 7;
				}
			}
		} else if ($longitude < -66.869835) {
			if ($latitude < 0.940826) {
				if ($longitude < -70.674210) {
					if ($latitude < -1.591035) {
						if ($longitude < -72.576397) {
							if ($this->polygons[216]->contains($latitude, $longitude)) {
								return 390;
							} else {
								return 164;
							}
						} else if ($latitude < -2.856965) {
							if ($this->polygons[217]->contains($latitude, $longitude)) {
								return 390;
							} else {
								return 164;
							}
						} else {
							if ($this->polygons[218]->contains($latitude, $longitude)) {
								return 164;
							} else {
								return 390;
							}
						}
					} else {
						if ($this->polygons[219]->contains($latitude, $longitude)) {
							return 164;
						} else {
							return 390;
						}
					}
				} else if ($latitude < -1.591035) {
					if ($this->polygons[220]->contains($latitude, $longitude)) {
						return 7;
					}
					if ($this->polygons[221]->contains($latitude, $longitude)) {
						return 164;
					}
					if ($this->polygons[222]->contains($latitude, $longitude)) {
						return 164;
					} else {
						return 390;
					}
				} else {
					if ($this->polygons[223]->contains($latitude, $longitude)) {
						return 390;
					} else {
						return 7;
					}
				}
			} else if ($longitude < -70.674210) {
				return 390;
			} else if ($latitude < 3.472686) {
				if ($longitude < -68.772022) {
					if ($this->polygons[224]->contains($latitude, $longitude)) {
						return 7;
					} else {
						return 390;
					}
				} else if ($latitude < 2.206756) {
					if ($this->polygons[225]->contains($latitude, $longitude)) {
						return 7;
					}
					if ($this->polygons[226]->contains($latitude, $longitude)) {
						return 397;
					} else {
						return 390;
					}
				} else {
					if ($this->polygons[227]->contains($latitude, $longitude)) {
						return 397;
					} else {
						return 390;
					}
				}
			} else {
				if ($this->polygons[228]->contains($latitude, $longitude)) {
					return 397;
				} else {
					return 390;
				}
			}
		} else if ($latitude < -2.231925) {
			if ($this->polygons[229]->contains($latitude, $longitude)) {
				return 7;
			} else {
				return 310;
			}
		} else if ($longitude < -61.587761) {
			if ($latitude < 1.886310) {
				if ($longitude < -64.228798) {
					if ($this->polygons[230]->contains($latitude, $longitude)) {
						return 397;
					} else {
						return 7;
					}
				} else if ($latitude < -0.172808) {
					if ($this->polygons[231]->contains($latitude, $longitude)) {
						return 349;
					} else {
						return 7;
					}
				} else {
					if ($this->polygons[232]->contains($latitude, $longitude)) {
						return 349;
					}
					if ($this->polygons[233]->contains($latitude, $longitude)) {
						return 397;
					} else {
						return 7;
					}
				}
			} else if ($longitude < -64.228798) {
				if ($this->polygons[234]->contains($latitude, $longitude)) {
					return 349;
				}
				if ($this->polygons[235]->contains($latitude, $longitude)) {
					return 349;
				} else {
					return 397;
				}
			} else if ($latitude < 3.945428) {
				if ($longitude < -62.908279) {
					if ($latitude < 2.915869) {
						if ($this->polygons[236]->contains($latitude, $longitude)) {
							return 7;
						}
						if ($this->polygons[237]->contains($latitude, $longitude)) {
							return 349;
						} else {
							return 397;
						}
					} else {
						if ($this->polygons[238]->contains($latitude, $longitude)) {
							return 397;
						}
						if ($this->polygons[239]->contains($latitude, $longitude)) {
							return 397;
						}
						if ($this->polygons[240]->contains($latitude, $longitude)) {
							return 397;
						}
						if ($this->polygons[241]->contains($latitude, $longitude)) {
							return 397;
						}
						if ($this->polygons[242]->contains($latitude, $longitude)) {
							return 397;
						} else {
							return 349;
						}
					}
				} else {
					if ($this->polygons[243]->contains($latitude, $longitude)) {
						return 7;
					}
					if ($this->polygons[244]->contains($latitude, $longitude)) {
						return 397;
					} else {
						return 349;
					}
				}
			} else {
				if ($this->polygons[245]->contains($latitude, $longitude)) {
					return 349;
				}
				if ($this->polygons[246]->contains($latitude, $longitude)) {
					return 349;
				}
				if ($this->polygons[247]->contains($latitude, $longitude)) {
					return 349;
				}
				if ($this->polygons[248]->contains($latitude, $longitude)) {
					return 349;
				} else {
					return 397;
				}
			}
		} else if ($latitude < 1.886310) {
			if ($longitude < -58.946724) {
				if ($latitude < -0.172808) {
					if ($this->polygons[249]->contains($latitude, $longitude)) {
						return 349;
					} else {
						return 7;
					}
				} else {
					if ($this->polygons[250]->contains($latitude, $longitude)) {
						return 7;
					}
					if ($this->polygons[251]->contains($latitude, $longitude)) {
						return 298;
					}
					if ($this->polygons[252]->contains($latitude, $longitude)) {
						return 310;
					} else {
						return 349;
					}
				}
			} else if ($latitude < -0.172808) {
				if ($this->polygons[253]->contains($latitude, $longitude)) {
					return 310;
				} else {
					return 7;
				}
			} else {
				if ($this->polygons[254]->contains($latitude, $longitude)) {
					return 7;
				}
				if ($this->polygons[255]->contains($latitude, $longitude)) {
					return 298;
				}
				if ($this->polygons[256]->contains($latitude, $longitude)) {
					return 298;
				}
				if ($this->polygons[257]->contains($latitude, $longitude)) {
					return 349;
				} else {
					return 310;
				}
			}
		} else if ($longitude < -58.946724) {
			if ($latitude < 3.945428) {
				if ($this->polygons[258]->contains($latitude, $longitude)) {
					return 349;
				} else {
					return 298;
				}
			} else if ($longitude < -60.267242) {
				if ($this->polygons[259]->contains($latitude, $longitude)) {
					return 298;
				}
				if ($this->polygons[260]->contains($latitude, $longitude)) {
					return 397;
				} else {
					return 349;
				}
			} else {
				if ($this->polygons[261]->contains($latitude, $longitude)) {
					return 349;
				} else {
					return 298;
				}
			}
		} else if ($latitude < 3.945428) {
			if ($longitude < -57.626205) {
				if ($this->polygons[262]->contains($latitude, $longitude)) {
					return 200;
				} else {
					return 298;
				}
			} else if ($latitude < 2.915869) {
				if ($this->polygons[263]->contains($latitude, $longitude)) {
					return 200;
				}
				if ($this->polygons[264]->contains($latitude, $longitude)) {
					return 310;
				}
				if ($this->polygons[265]->contains($latitude, $longitude)) {
					return 310;
				} else {
					return 298;
				}
			} else {
				if ($this->polygons[266]->contains($latitude, $longitude)) {
					return 298;
				} else {
					return 200;
				}
			}
		} else {
			if ($this->polygons[267]->contains($latitude, $longitude)) {
				return 298;
			} else {
				return 200;
			}
		}
	}
	
	protected function call3(float $latitude, float $longitude) : ?int
	{
		if ($latitude < -14.962502) {
			if ($longitude < -64.158066) {
				if ($longitude < -68.814156) {
					if ($latitude < -23.428734) {
						return 31;
					} else if ($latitude < -16.337534) {
						if ($latitude < -19.883134) {
							return 31;
						} else if ($longitude < -71.069149) {
							return 164;
						} else if ($latitude < -18.110334) {
							if ($this->polygons[268]->contains($latitude, $longitude)) {
								return 164;
							}
							if ($this->polygons[269]->contains($latitude, $longitude)) {
								return 190;
							} else {
								return 31;
							}
						} else {
							if ($this->polygons[270]->contains($latitude, $longitude)) {
								return 31;
							}
							if ($this->polygons[271]->contains($latitude, $longitude)) {
								return 190;
							} else {
								return 164;
							}
						}
					} else {
						if ($this->polygons[272]->contains($latitude, $longitude)) {
							return 190;
						} else {
							return 164;
						}
					}
				} else if ($latitude < -20.059607) {
					if ($latitude < -22.608159) {
						if ($longitude < -66.486111) {
							if ($this->polygons[273]->contains($latitude, $longitude)) {
								return 31;
							}
							if ($this->polygons[274]->contains($latitude, $longitude)) {
								return 159;
							}
							if ($this->polygons[275]->contains($latitude, $longitude)) {
								return 190;
							} else {
								return 127;
							}
						} else if ($latitude < -23.882435) {
							if ($this->polygons[276]->contains($latitude, $longitude)) {
								return 159;
							}
							if ($this->polygons[277]->contains($latitude, $longitude)) {
								return 159;
							} else {
								return 127;
							}
						} else {
							if ($this->polygons[278]->contains($latitude, $longitude)) {
								return 159;
							}
							if ($this->polygons[279]->contains($latitude, $longitude)) {
								return 190;
							} else {
								return 127;
							}
						}
					} else if ($longitude < -66.486111) {
						if ($this->polygons[280]->contains($latitude, $longitude)) {
							return 31;
						}
						if ($this->polygons[281]->contains($latitude, $longitude)) {
							return 159;
						} else {
							return 190;
						}
					} else {
						if ($this->polygons[282]->contains($latitude, $longitude)) {
							return 127;
						}
						if ($this->polygons[283]->contains($latitude, $longitude)) {
							return 127;
						}
						if ($this->polygons[284]->contains($latitude, $longitude)) {
							return 159;
						} else {
							return 190;
						}
					}
				} else {
					if ($this->polygons[285]->contains($latitude, $longitude)) {
						return 31;
					} else {
						return 190;
					}
				}
			} else if ($latitude < -19.294041) {
				if ($longitude < -59.983578) {
					if ($latitude < -22.225376) {
						if ($longitude < -62.070822) {
							if ($this->polygons[286]->contains($latitude, $longitude)) {
								return 127;
							}
							if ($this->polygons[287]->contains($latitude, $longitude)) {
								return 190;
							}
							if ($this->polygons[288]->contains($latitude, $longitude)) {
								return 190;
							}
							if ($this->polygons[289]->contains($latitude, $longitude)) {
								return 278;
							} else {
								return 219;
							}
						} else {
							if ($this->polygons[290]->contains($latitude, $longitude)) {
								return 278;
							} else {
								return 219;
							}
						}
					} else {
						if ($this->polygons[291]->contains($latitude, $longitude)) {
							return 127;
						}
						if ($this->polygons[292]->contains($latitude, $longitude)) {
							return 219;
						} else {
							return 190;
						}
					}
				} else if ($longitude < -55.612143) {
					if ($latitude < -22.225376) {
						if ($longitude < -57.797860) {
							if ($this->polygons[293]->contains($latitude, $longitude)) {
								return 278;
							} else {
								return 219;
							}
						} else {
							if ($this->polygons[294]->contains($latitude, $longitude)) {
								return 278;
							}
							if ($this->polygons[295]->contains($latitude, $longitude)) {
								return 317;
							}
							if ($this->polygons[296]->contains($latitude, $longitude)) {
								return 317;
							}
							if ($this->polygons[297]->contains($latitude, $longitude)) {
								return 317;
							}
							if ($this->polygons[298]->contains($latitude, $longitude)) {
								return 317;
							}
							if ($this->polygons[299]->contains($latitude, $longitude)) {
								return 317;
							}
							if ($this->polygons[300]->contains($latitude, $longitude)) {
								return 317;
							} else {
								return 219;
							}
						}
					} else if ($longitude < -57.797860) {
						if ($latitude < -20.759708) {
							if ($this->polygons[301]->contains($latitude, $longitude)) {
								return 317;
							} else {
								return 219;
							}
						} else {
							if ($this->polygons[302]->contains($latitude, $longitude)) {
								return 190;
							}
							if ($this->polygons[303]->contains($latitude, $longitude)) {
								return 219;
							} else {
								return 317;
							}
						}
					} else {
						if ($this->polygons[304]->contains($latitude, $longitude)) {
							return 219;
						}
						if ($this->polygons[305]->contains($latitude, $longitude)) {
							return 219;
						}
						if ($this->polygons[306]->contains($latitude, $longitude)) {
							return 219;
						}
						if ($this->polygons[307]->contains($latitude, $longitude)) {
							return 219;
						}
						if ($this->polygons[308]->contains($latitude, $longitude)) {
							return 219;
						}
						if ($this->polygons[309]->contains($latitude, $longitude)) {
							return 219;
						} else {
							return 317;
						}
					}
				} else if ($latitude < -22.225376) {
					if ($longitude < -53.426425) {
						if ($latitude < -23.691044) {
							if ($this->polygons[310]->contains($latitude, $longitude)) {
								return 317;
							}
							if ($this->polygons[311]->contains($latitude, $longitude)) {
								return 329;
							} else {
								return 219;
							}
						} else {
							if ($this->polygons[312]->contains($latitude, $longitude)) {
								return 219;
							}
							if ($this->polygons[313]->contains($latitude, $longitude)) {
								return 329;
							} else {
								return 317;
							}
						}
					} else {
						if ($this->polygons[314]->contains($latitude, $longitude)) {
							return 317;
						} else {
							return 329;
						}
					}
				} else {
					if ($this->polygons[315]->contains($latitude, $longitude)) {
						return 329;
					} else {
						return 317;
					}
				}
			} else if ($longitude < -57.699387) {
				if ($longitude < -60.928726) {
					return 190;
				} else if ($latitude < -17.128271) {
					if ($this->polygons[316]->contains($latitude, $longitude)) {
						return 317;
					}
					if ($this->polygons[317]->contains($latitude, $longitude)) {
						return 317;
					}
					if ($this->polygons[318]->contains($latitude, $longitude)) {
						return 317;
					}
					if ($this->polygons[319]->contains($latitude, $longitude)) {
						return 363;
					} else {
						return 190;
					}
				} else {
					if ($this->polygons[320]->contains($latitude, $longitude)) {
						return 363;
					} else {
						return 190;
					}
				}
			} else if ($longitude < -54.470047) {
				if ($this->polygons[321]->contains($latitude, $longitude)) {
					return 190;
				}
				if ($this->polygons[322]->contains($latitude, $longitude)) {
					return 190;
				}
				if ($this->polygons[323]->contains($latitude, $longitude)) {
					return 363;
				} else {
					return 317;
				}
			} else if ($latitude < -17.128271) {
				if ($longitude < -52.855377) {
					if ($this->polygons[324]->contains($latitude, $longitude)) {
						return 329;
					}
					if ($this->polygons[325]->contains($latitude, $longitude)) {
						return 329;
					}
					if ($this->polygons[326]->contains($latitude, $longitude)) {
						return 363;
					} else {
						return 317;
					}
				} else {
					if ($this->polygons[327]->contains($latitude, $longitude)) {
						return 329;
					} else {
						return 317;
					}
				}
			} else {
				if ($this->polygons[328]->contains($latitude, $longitude)) {
					return 329;
				} else {
					return 363;
				}
			}
		} else if ($longitude < -56.305687) {
			return $this->call2($latitude, $longitude);
		} else if ($longitude < -51.613949) {
			if ($latitude < -9.477882) {
				if ($this->polygons[329]->contains($latitude, $longitude)) {
					return 310;
				}
				if ($this->polygons[330]->contains($latitude, $longitude)) {
					return 363;
				} else {
					return 400;
				}
			} else if ($latitude < -1.736668) {
				if ($latitude < -5.607275) {
					if ($longitude < -53.959818) {
						return 310;
					} else if ($latitude < -7.542579) {
						if ($this->polygons[331]->contains($latitude, $longitude)) {
							return 400;
						} else {
							return 310;
						}
					} else {
						if ($this->polygons[332]->contains($latitude, $longitude)) {
							return 400;
						} else {
							return 310;
						}
					}
				} else {
					if ($this->polygons[333]->contains($latitude, $longitude)) {
						return 400;
					} else {
						return 310;
					}
				}
			} else if ($latitude < 2.133939) {
				if ($longitude < -53.959818) {
					if ($this->polygons[334]->contains($latitude, $longitude)) {
						return 200;
					}
					if ($this->polygons[335]->contains($latitude, $longitude)) {
						return 362;
					}
					if ($this->polygons[336]->contains($latitude, $longitude)) {
						return 400;
					} else {
						return 310;
					}
				} else if ($latitude < 0.198636) {
					if ($this->polygons[337]->contains($latitude, $longitude)) {
						return 400;
					} else {
						return 310;
					}
				} else {
					if ($this->polygons[338]->contains($latitude, $longitude)) {
						return 310;
					} else {
						return 400;
					}
				}
			} else if ($longitude < -53.959818) {
				if ($latitude < 4.069243) {
					if ($longitude < -55.132752) {
						if ($this->polygons[339]->contains($latitude, $longitude)) {
							return 310;
						} else {
							return 200;
						}
					} else if ($latitude < 3.101591) {
						if ($longitude < -54.546285) {
							if ($this->polygons[340]->contains($latitude, $longitude)) {
								return 310;
							}
							if ($this->polygons[341]->contains($latitude, $longitude)) {
								return 400;
							} else {
								return 200;
							}
						} else {
							if ($this->polygons[342]->contains($latitude, $longitude)) {
								return 200;
							}
							if ($this->polygons[343]->contains($latitude, $longitude)) {
								return 400;
							}
							if ($this->polygons[344]->contains($latitude, $longitude)) {
								return 400;
							} else {
								return 362;
							}
						}
					} else {
						if ($this->polygons[345]->contains($latitude, $longitude)) {
							return 362;
						} else {
							return 200;
						}
					}
				} else {
					if ($this->polygons[346]->contains($latitude, $longitude)) {
						return 362;
					} else {
						return 200;
					}
				}
			} else {
				if ($this->polygons[347]->contains($latitude, $longitude)) {
					return 400;
				} else {
					return 362;
				}
			}
		} else if ($latitude < -9.768946) {
			if ($this->polygons[348]->contains($latitude, $longitude)) {
				return 400;
			} else {
				return 363;
			}
		} else {
			return 400;
		}
	}
	
	protected function call4(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -5.327115) {
			if ($latitude < 10.000000) {
				if ($longitude < -7.365113) {
					if ($longitude < -11.496679) {
						if ($latitude < 7.561782) {
							return 68;
						} else {
							if ($this->polygons[349]->contains($latitude, $longitude)) {
								return 184;
							} else {
								return 68;
							}
						}
					} else if ($latitude < 5.327682) {
						if ($this->polygons[350]->contains($latitude, $longitude)) {
							return 300;
						} else {
							return 356;
						}
					} else if ($latitude < 7.663841) {
						if ($longitude < -9.430896) {
							if ($this->polygons[351]->contains($latitude, $longitude)) {
								return 68;
							}
							if ($this->polygons[352]->contains($latitude, $longitude)) {
								return 184;
							} else {
								return 356;
							}
						} else if ($latitude < 6.495762) {
							if ($this->polygons[353]->contains($latitude, $longitude)) {
								return 300;
							} else {
								return 356;
							}
						} else if ($longitude < -8.398005) {
							if ($this->polygons[354]->contains($latitude, $longitude)) {
								return 184;
							}
							if ($this->polygons[355]->contains($latitude, $longitude)) {
								return 184;
							}
							if ($this->polygons[356]->contains($latitude, $longitude)) {
								return 300;
							}
							if ($this->polygons[357]->contains($latitude, $longitude)) {
								return 300;
							} else {
								return 356;
							}
						} else {
							if ($this->polygons[358]->contains($latitude, $longitude)) {
								return 184;
							}
							if ($this->polygons[359]->contains($latitude, $longitude)) {
								return 356;
							} else {
								return 300;
							}
						}
					} else if ($longitude < -9.430896) {
						if ($latitude < 8.831921) {
							if ($longitude < -10.463788) {
								if ($this->polygons[360]->contains($latitude, $longitude)) {
									return 184;
								}
								if ($this->polygons[361]->contains($latitude, $longitude)) {
									return 356;
								} else {
									return 68;
								}
							} else {
								if ($this->polygons[362]->contains($latitude, $longitude)) {
									return 68;
								}
								if ($this->polygons[363]->contains($latitude, $longitude)) {
									return 184;
								}
								if ($this->polygons[364]->contains($latitude, $longitude)) {
									return 184;
								} else {
									return 356;
								}
							}
						} else {
							if ($this->polygons[365]->contains($latitude, $longitude)) {
								return 68;
							} else {
								return 184;
							}
						}
					} else if ($latitude < 8.831921) {
						if ($longitude < -8.398005) {
							if ($this->polygons[366]->contains($latitude, $longitude)) {
								return 356;
							}
							if ($this->polygons[367]->contains($latitude, $longitude)) {
								return 356;
							}
							if ($this->polygons[368]->contains($latitude, $longitude)) {
								return 356;
							} else {
								return 184;
							}
						} else {
							if ($this->polygons[369]->contains($latitude, $longitude)) {
								return 184;
							} else {
								return 300;
							}
						}
					} else {
						if ($this->polygons[370]->contains($latitude, $longitude)) {
							return 300;
						} else {
							return 184;
						}
					}
				} else if ($latitude < -15.897190) {
					return 156;
				} else {
					return 300;
				}
			} else if ($latitude < 11.842492) {
				if ($longitude < -8.890819) {
					return 184;
				} else if ($longitude < -7.108967) {
					if ($latitude < 10.921246) {
						if ($this->polygons[371]->contains($latitude, $longitude)) {
							return 184;
						}
						if ($this->polygons[372]->contains($latitude, $longitude)) {
							return 300;
						} else {
							return 181;
						}
					} else {
						if ($this->polygons[373]->contains($latitude, $longitude)) {
							return 184;
						} else {
							return 181;
						}
					}
				} else if ($latitude < 10.921246) {
					if ($longitude < -6.218041) {
						if ($this->polygons[374]->contains($latitude, $longitude)) {
							return 181;
						}
						if ($this->polygons[375]->contains($latitude, $longitude)) {
							return 181;
						}
						if ($this->polygons[376]->contains($latitude, $longitude)) {
							return 181;
						}
						if ($this->polygons[377]->contains($latitude, $longitude)) {
							return 181;
						}
						if ($this->polygons[378]->contains($latitude, $longitude)) {
							return 181;
						} else {
							return 300;
						}
					} else {
						if ($this->polygons[379]->contains($latitude, $longitude)) {
							return 181;
						}
						if ($this->polygons[380]->contains($latitude, $longitude)) {
							return 262;
						} else {
							return 300;
						}
					}
				} else {
					if ($this->polygons[381]->contains($latitude, $longitude)) {
						return 262;
					}
					if ($this->polygons[382]->contains($latitude, $longitude)) {
						return 262;
					} else {
						return 181;
					}
				}
			} else if ($latitude < 16.333138) {
				if ($longitude < -8.890819) {
					if ($latitude < 14.087815) {
						if ($longitude < -10.672671) {
							if ($latitude < 12.965153) {
								if ($longitude < -11.563597) {
									if ($this->polygons[383]->contains($latitude, $longitude)) {
										return 225;
									} else {
										return 184;
									}
								} else if ($latitude < 12.403823) {
									if ($this->polygons[384]->contains($latitude, $longitude)) {
										return 181;
									} else {
										return 184;
									}
								} else {
									if ($this->polygons[385]->contains($latitude, $longitude)) {
										return 184;
									}
									if ($this->polygons[386]->contains($latitude, $longitude)) {
										return 225;
									} else {
										return 181;
									}
								}
							} else {
								if ($this->polygons[387]->contains($latitude, $longitude)) {
									return 225;
								}
								if ($this->polygons[388]->contains($latitude, $longitude)) {
									return 225;
								} else {
									return 181;
								}
							}
						} else {
							if ($this->polygons[389]->contains($latitude, $longitude)) {
								return 184;
							} else {
								return 181;
							}
						}
					} else if ($longitude < -10.672671) {
						if ($latitude < 15.210476) {
							if ($this->polygons[390]->contains($latitude, $longitude)) {
								return 33;
							}
							if ($this->polygons[391]->contains($latitude, $longitude)) {
								return 33;
							}
							if ($this->polygons[392]->contains($latitude, $longitude)) {
								return 225;
							} else {
								return 181;
							}
						} else {
							if ($this->polygons[393]->contains($latitude, $longitude)) {
								return 33;
							} else {
								return 181;
							}
						}
					} else {
						if ($this->polygons[394]->contains($latitude, $longitude)) {
							return 181;
						} else {
							return 33;
						}
					}
				} else {
					if ($this->polygons[395]->contains($latitude, $longitude)) {
						return 33;
					}
					if ($this->polygons[396]->contains($latitude, $longitude)) {
						return 184;
					} else {
						return 181;
					}
				}
			} else {
				if ($this->polygons[397]->contains($latitude, $longitude)) {
					return 181;
				} else {
					return 33;
				}
			}
		} else if ($latitude < 4.509286) {
			if ($latitude < 0.415882) {
				if ($longitude < 5.635208) {
					return 201;
				} else {
					return 161;
				}
			} else {
				return 96;
			}
		} else if ($latitude < 11.173301) {
			if ($longitude < -0.273275) {
				if ($latitude < 7.955012) {
					if ($this->polygons[398]->contains($latitude, $longitude)) {
						return 300;
					} else {
						return 70;
					}
				} else if ($longitude < -2.800195) {
					if ($latitude < 9.564156) {
						if ($this->polygons[399]->contains($latitude, $longitude)) {
							return 262;
						} else {
							return 300;
						}
					} else if ($longitude < -4.063655) {
						if ($latitude < 10.368729) {
							if ($longitude < -4.695385) {
								if ($this->polygons[400]->contains($latitude, $longitude)) {
									return 300;
								} else {
									return 262;
								}
							} else {
								if ($this->polygons[401]->contains($latitude, $longitude)) {
									return 300;
								} else {
									return 262;
								}
							}
						} else {
							return 262;
						}
					} else {
						if ($this->polygons[402]->contains($latitude, $longitude)) {
							return 70;
						}
						if ($this->polygons[403]->contains($latitude, $longitude)) {
							return 70;
						}
						if ($this->polygons[404]->contains($latitude, $longitude)) {
							return 300;
						} else {
							return 262;
						}
					}
				} else if ($latitude < 9.564156) {
					if ($this->polygons[405]->contains($latitude, $longitude)) {
						return 70;
					}
					if ($this->polygons[406]->contains($latitude, $longitude)) {
						return 262;
					} else {
						return 300;
					}
				} else {
					if ($this->polygons[407]->contains($latitude, $longitude)) {
						return 70;
					} else {
						return 262;
					}
				}
			} else if ($longitude < 1.806693) {
				if ($latitude < 8.347418) {
					if ($latitude < 6.934477) {
						if ($longitude < 0.766709) {
							if ($this->polygons[408]->contains($latitude, $longitude)) {
								return 272;
							} else {
								return 70;
							}
						} else {
							if ($this->polygons[409]->contains($latitude, $longitude)) {
								return 70;
							}
							if ($this->polygons[410]->contains($latitude, $longitude)) {
								return 84;
							}
							if ($this->polygons[411]->contains($latitude, $longitude)) {
								return 84;
							} else {
								return 272;
							}
						}
					} else {
						if ($this->polygons[412]->contains($latitude, $longitude)) {
							return 70;
						}
						if ($this->polygons[413]->contains($latitude, $longitude)) {
							return 84;
						} else {
							return 272;
						}
					}
				} else if ($latitude < 9.760359) {
					if ($this->polygons[414]->contains($latitude, $longitude)) {
						return 70;
					}
					if ($this->polygons[415]->contains($latitude, $longitude)) {
						return 84;
					} else {
						return 272;
					}
				} else if ($longitude < 0.766709) {
					if ($this->polygons[416]->contains($latitude, $longitude)) {
						return 70;
					}
					if ($this->polygons[417]->contains($latitude, $longitude)) {
						return 262;
					} else {
						return 272;
					}
				} else {
					if ($this->polygons[418]->contains($latitude, $longitude)) {
						return 262;
					}
					if ($this->polygons[419]->contains($latitude, $longitude)) {
						return 272;
					} else {
						return 84;
					}
				}
			} else if ($latitude < 7.841293) {
				if ($this->polygons[420]->contains($latitude, $longitude)) {
					return 84;
				} else {
					return 96;
				}
			} else if ($longitude < 4.465083) {
				if ($latitude < 9.507297) {
					if ($this->polygons[421]->contains($latitude, $longitude)) {
						return 96;
					} else {
						return 84;
					}
				} else {
					if ($this->polygons[422]->contains($latitude, $longitude)) {
						return 96;
					} else {
						return 84;
					}
				}
			} else {
				return 96;
			}
		} else if ($longitude < -5.199527) {
			if ($latitude < 11.432508) {
				if ($this->polygons[423]->contains($latitude, $longitude)) {
					return 181;
				} else {
					return 262;
				}
			} else if ($latitude < 11.788111) {
				if ($this->polygons[424]->contains($latitude, $longitude)) {
					return 262;
				} else {
					return 181;
				}
			} else {
				if ($this->polygons[425]->contains($latitude, $longitude)) {
					return 181;
				} else {
					return 262;
				}
			}
		} else if ($latitude < 15.082593) {
			if ($longitude < -0.462076) {
				if ($longitude < -2.830801) {
					if ($latitude < 13.127947) {
						if ($this->polygons[426]->contains($latitude, $longitude)) {
							return 181;
						} else {
							return 262;
						}
					} else {
						if ($this->polygons[427]->contains($latitude, $longitude)) {
							return 262;
						} else {
							return 181;
						}
					}
				} else {
					if ($this->polygons[428]->contains($latitude, $longitude)) {
						return 181;
					} else {
						return 262;
					}
				}
			} else if ($longitude < 3.330698) {
				if ($latitude < 13.127947) {
					if ($longitude < 1.434311) {
						if ($this->polygons[429]->contains($latitude, $longitude)) {
							return 84;
						}
						if ($this->polygons[430]->contains($latitude, $longitude)) {
							return 260;
						} else {
							return 262;
						}
					} else if ($latitude < 12.150624) {
						if ($this->polygons[431]->contains($latitude, $longitude)) {
							return 260;
						}
						if ($this->polygons[432]->contains($latitude, $longitude)) {
							return 260;
						}
						if ($this->polygons[433]->contains($latitude, $longitude)) {
							return 262;
						} else {
							return 84;
						}
					} else {
						if ($this->polygons[434]->contains($latitude, $longitude)) {
							return 84;
						}
						if ($this->polygons[435]->contains($latitude, $longitude)) {
							return 262;
						} else {
							return 260;
						}
					}
				} else {
					if ($this->polygons[436]->contains($latitude, $longitude)) {
						return 181;
					}
					if ($this->polygons[437]->contains($latitude, $longitude)) {
						return 262;
					} else {
						return 260;
					}
				}
			} else {
				if ($this->polygons[438]->contains($latitude, $longitude)) {
					return 84;
				}
				if ($this->polygons[439]->contains($latitude, $longitude)) {
					return 96;
				} else {
					return 260;
				}
			}
		} else if ($longitude < 0.961973) {
			return 181;
		} else if ($longitude < 4.042722) {
			if ($this->polygons[440]->contains($latitude, $longitude)) {
				return 260;
			}
			if ($this->polygons[441]->contains($latitude, $longitude)) {
				return 380;
			} else {
				return 181;
			}
		} else {
			if ($this->polygons[442]->contains($latitude, $longitude)) {
				return 181;
			}
			if ($this->polygons[443]->contains($latitude, $longitude)) {
				return 380;
			} else {
				return 260;
			}
		}
	}
	
	protected function call5(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -39.243401) {
			if ($latitude < -1.820639) {
				if ($latitude < -2.685229) {
					if ($latitude < -21.599977) {
						return 329;
					} else if ($latitude < -3.148118) {
						if ($latitude < -7.354445) {
							if ($latitude < -12.556720) {
								if ($longitude < -39.656792) {
									if ($longitude < -44.428988) {
										if ($latitude < -17.078349) {
											return 329;
										} else if ($longitude < -46.815085) {
											if ($this->polygons[444]->contains($latitude, $longitude)) {
												return 329;
											} else {
												return 61;
											}
										} else if ($latitude < -14.817534) {
											if ($this->polygons[445]->contains($latitude, $longitude)) {
												return 171;
											} else {
												return 329;
											}
										} else {
											if ($this->polygons[446]->contains($latitude, $longitude)) {
												return 61;
											}
											if ($this->polygons[447]->contains($latitude, $longitude)) {
												return 171;
											} else {
												return 329;
											}
										}
									} else if ($latitude < -17.078349) {
										if ($this->polygons[448]->contains($latitude, $longitude)) {
											return 171;
										} else {
											return 329;
										}
									} else if ($longitude < -42.042890) {
										if ($this->polygons[449]->contains($latitude, $longitude)) {
											return 329;
										} else {
											return 171;
										}
									} else {
										if ($this->polygons[450]->contains($latitude, $longitude)) {
											return 329;
										} else {
											return 171;
										}
									}
								} else {
									return 171;
								}
							} else if ($longitude < -49.154449) {
								if ($latitude < -7.791389) {
									if ($this->polygons[451]->contains($latitude, $longitude)) {
										return 400;
									} else {
										return 61;
									}
								} else {
									if ($this->polygons[452]->contains($latitude, $longitude)) {
										return 400;
									} else {
										return 61;
									}
								}
							} else if ($longitude < -44.198925) {
								if ($latitude < -9.955582) {
									if ($longitude < -46.676687) {
										return 61;
									} else if ($latitude < -11.256151) {
										if ($this->polygons[453]->contains($latitude, $longitude)) {
											return 171;
										} else {
											return 61;
										}
									} else {
										if ($this->polygons[454]->contains($latitude, $longitude)) {
											return 61;
										}
										if ($this->polygons[455]->contains($latitude, $longitude)) {
											return 143;
										} else {
											return 171;
										}
									}
								} else if ($longitude < -46.676687) {
									if ($this->polygons[456]->contains($latitude, $longitude)) {
										return 143;
									}
									if ($this->polygons[457]->contains($latitude, $longitude)) {
										return 143;
									} else {
										return 61;
									}
								} else {
									if ($this->polygons[458]->contains($latitude, $longitude)) {
										return 61;
									}
									if ($this->polygons[459]->contains($latitude, $longitude)) {
										return 61;
									} else {
										return 143;
									}
								}
							} else if ($latitude < -9.955582) {
								if ($this->polygons[460]->contains($latitude, $longitude)) {
									return 143;
								} else {
									return 171;
								}
							} else if ($longitude < -41.721163) {
								if ($this->polygons[461]->contains($latitude, $longitude)) {
									return 171;
								} else {
									return 143;
								}
							} else if ($latitude < -8.655013) {
								if ($this->polygons[462]->contains($latitude, $longitude)) {
									return 143;
								}
								if ($this->polygons[463]->contains($latitude, $longitude)) {
									return 191;
								} else {
									return 171;
								}
							} else {
								if ($this->polygons[464]->contains($latitude, $longitude)) {
									return 143;
								}
								if ($this->polygons[465]->contains($latitude, $longitude)) {
									return 143;
								}
								if ($this->polygons[466]->contains($latitude, $longitude)) {
									return 171;
								} else {
									return 191;
								}
							}
						} else if ($longitude < -46.716667) {
							if ($latitude < -3.180000) {
								if ($latitude < -5.267222) {
									if ($longitude < -47.958925) {
										if ($this->polygons[467]->contains($latitude, $longitude)) {
											return 143;
										}
										if ($this->polygons[468]->contains($latitude, $longitude)) {
											return 143;
										}
										if ($this->polygons[469]->contains($latitude, $longitude)) {
											return 400;
										}
										if ($this->polygons[470]->contains($latitude, $longitude)) {
											return 400;
										} else {
											return 61;
										}
									} else {
										if ($this->polygons[471]->contains($latitude, $longitude)) {
											return 143;
										} else {
											return 61;
										}
									}
								} else {
									if ($this->polygons[472]->contains($latitude, $longitude)) {
										return 61;
									}
									if ($this->polygons[473]->contains($latitude, $longitude)) {
										return 61;
									}
									if ($this->polygons[474]->contains($latitude, $longitude)) {
										return 400;
									} else {
										return 143;
									}
								}
							} else {
								if ($this->polygons[475]->contains($latitude, $longitude)) {
									return 143;
								} else {
									return 400;
								}
							}
						} else {
							return 143;
						}
					} else if ($longitude < -46.568893) {
						if ($longitude < -46.698047) {
							if ($this->polygons[476]->contains($latitude, $longitude)) {
								return 143;
							} else {
								return 400;
							}
						} else {
							if ($this->polygons[477]->contains($latitude, $longitude)) {
								return 400;
							} else {
								return 143;
							}
						}
					} else {
						return 143;
					}
				} else if ($longitude < -46.206947) {
					if ($longitude < -49.192532) {
						return 400;
					} else {
						if ($this->polygons[478]->contains($latitude, $longitude)) {
							return 143;
						} else {
							return 400;
						}
					}
				} else {
					return 143;
				}
			} else if ($longitude < -46.319450) {
				return 400;
			} else if ($longitude < -46.049419) {
				if ($latitude < -1.159195) {
					if ($latitude < -1.745833) {
						if ($this->polygons[479]->contains($latitude, $longitude)) {
							return 400;
						} else {
							return 143;
						}
					} else {
						if ($this->polygons[480]->contains($latitude, $longitude)) {
							return 143;
						} else {
							return 400;
						}
					}
				} else {
					return 400;
				}
			} else {
				return 143;
			}
		} else if ($longitude < -15.836494) {
			if ($longitude < -23.098490) {
				if ($latitude < -12.650455) {
					return 171;
				} else if ($longitude < -32.382004) {
					if ($longitude < -34.790123) {
						if ($latitude < -8.632456) {
							if ($longitude < -37.151226) {
								if ($latitude < -10.641456) {
									if ($this->polygons[481]->contains($latitude, $longitude)) {
										return 325;
									} else {
										return 171;
									}
								} else if ($longitude < -38.197313) {
									if ($this->polygons[482]->contains($latitude, $longitude)) {
										return 191;
									}
									if ($this->polygons[483]->contains($latitude, $longitude)) {
										return 325;
									} else {
										return 171;
									}
								} else {
									if ($this->polygons[484]->contains($latitude, $longitude)) {
										return 171;
									}
									if ($this->polygons[485]->contains($latitude, $longitude)) {
										return 191;
									} else {
										return 325;
									}
								}
							} else {
								if ($this->polygons[486]->contains($latitude, $longitude)) {
									return 191;
								} else {
									return 325;
								}
							}
						} else if ($latitude < -5.932234) {
							if ($longitude < -37.016762) {
								if ($latitude < -7.282345) {
									if ($longitude < -38.130081) {
										if ($this->polygons[487]->contains($latitude, $longitude)) {
											return 191;
										} else {
											return 143;
										}
									} else {
										if ($this->polygons[488]->contains($latitude, $longitude)) {
											return 191;
										} else {
											return 143;
										}
									}
								} else {
									if ($this->polygons[489]->contains($latitude, $longitude)) {
										return 191;
									} else {
										return 143;
									}
								}
							} else if ($latitude < -7.282345) {
								if ($this->polygons[490]->contains($latitude, $longitude)) {
									return 143;
								} else {
									return 191;
								}
							} else {
								return 143;
							}
						} else {
							return 143;
						}
					} else {
						return 295;
					}
				} else {
					return 353;
				}
			} else if ($latitude < 11.974076) {
				return 38;
			} else if ($latitude < 16.853725) {
				if ($latitude < 13.691580) {
					if ($latitude < 13.588785) {
						if ($latitude < 13.159023) {
							if ($latitude < 12.469320) {
								if ($longitude < -16.062716) {
									if ($this->polygons[491]->contains($latitude, $longitude)) {
										return 225;
									} else {
										return 38;
									}
								} else {
									if ($this->polygons[492]->contains($latitude, $longitude)) {
										return 225;
									} else {
										return 38;
									}
								}
							} else {
								if ($this->polygons[493]->contains($latitude, $longitude)) {
									return 252;
								} else {
									return 225;
								}
							}
						} else if ($latitude < 13.488581) {
							return 252;
						} else {
							if ($this->polygons[494]->contains($latitude, $longitude)) {
								return 225;
							} else {
								return 252;
							}
						}
					} else {
						return 225;
					}
				} else if ($longitude < -22.669443) {
					return 353;
				} else if ($longitude < -16.604567) {
					return 225;
				} else {
					if ($this->polygons[495]->contains($latitude, $longitude)) {
						return 33;
					} else {
						return 225;
					}
				}
			} else {
				return 33;
			}
		} else if ($longitude < -13.435683) {
			if ($latitude < 11.075797) {
				if ($longitude < -15.169497) {
					return 38;
				} else if ($longitude < -14.295186) {
					if ($longitude < -14.897633) {
						if ($longitude < -14.918398) {
							if ($latitude < 10.889210) {
								return 184;
							} else if ($latitude < 11.046461) {
								if ($this->polygons[496]->contains($latitude, $longitude)) {
									return 38;
								} else {
									return 184;
								}
							} else {
								if ($this->polygons[497]->contains($latitude, $longitude)) {
									return 184;
								} else {
									return 38;
								}
							}
						} else {
							return 184;
						}
					} else if ($latitude < -7.887815) {
						return 156;
					} else {
						return 184;
					}
				} else {
					return 184;
				}
			} else if ($latitude < 11.377222) {
				if ($longitude < -15.225043) {
					return 38;
				} else {
					if ($this->polygons[498]->contains($latitude, $longitude)) {
						return 184;
					} else {
						return 38;
					}
				}
			} else if ($latitude < 12.680789) {
				if ($longitude < -15.179247) {
					if ($latitude < 11.882746) {
						return 38;
					} else {
						if ($this->polygons[499]->contains($latitude, $longitude)) {
							return 225;
						} else {
							return 38;
						}
					}
				} else {
					if ($this->polygons[500]->contains($latitude, $longitude)) {
						return 184;
					}
					if ($this->polygons[501]->contains($latitude, $longitude)) {
						return 225;
					} else {
						return 38;
					}
				}
			} else if ($latitude < 13.826571) {
				if ($this->polygons[502]->contains($latitude, $longitude)) {
					return 225;
				}
				if ($this->polygons[503]->contains($latitude, $longitude)) {
					return 225;
				} else {
					return 252;
				}
			} else if ($latitude < 17.100223) {
				if ($latitude < 15.463397) {
					return 225;
				} else if ($longitude < -14.636089) {
					if ($this->polygons[504]->contains($latitude, $longitude)) {
						return 225;
					} else {
						return 33;
					}
				} else {
					if ($this->polygons[505]->contains($latitude, $longitude)) {
						return 225;
					} else {
						return 33;
					}
				}
			} else {
				return 33;
			}
		} else if ($longitude < -12.454523) {
			if ($latitude < 8.912874) {
				return 68;
			} else if ($latitude < 9.868772) {
				if ($longitude < -13.420199) {
					return 184;
				} else {
					if ($this->polygons[506]->contains($latitude, $longitude)) {
						return 68;
					} else {
						return 184;
					}
				}
			} else if ($latitude < 12.661082) {
				if ($this->polygons[507]->contains($latitude, $longitude)) {
					return 184;
				} else {
					return 225;
				}
			} else {
				if ($this->polygons[508]->contains($latitude, $longitude)) {
					return 33;
				} else {
					return 225;
				}
			}
		} else {
			return $this->call4($latitude, $longitude);
		}
	}
	
	protected function call6(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -74.478584) {
			if ($longitude < -138.593521) {
				if ($longitude < -149.919128) {
					if ($longitude < -172.053955) {
						if ($longitude < -178.235748) {
							return 147;
						} else if ($longitude < -174.397614) {
							if ($latitude < -19.878145) {
								return 119;
							} else if ($longitude < -175.597549) {
								if ($latitude < -15.562988) {
									if ($latitude < -17.727858) {
										return 119;
									} else {
										return 147;
									}
								} else {
									return 5;
								}
							} else if ($latitude < -18.782106) {
								return 119;
							} else {
								return 282;
							}
						} else if ($longitude < -173.702484) {
							return 119;
						} else if ($latitude < -13.432207) {
							return 199;
						} else if ($longitude < -172.481934) {
							return 336;
						} else {
							return 282;
						}
					} else if ($latitude < -15.787958) {
						if ($longitude < -157.312134) {
							if ($longitude < -169.775177) {
								return 372;
							} else {
								return 360;
							}
						} else {
							return 312;
						}
					} else if ($longitude < -161.067062) {
						if ($longitude < -169.416077) {
							if ($latitude < -14.161497) {
								return 44;
							} else if ($longitude < -171.409317) {
								if ($latitude < -13.786870) {
									return 199;
								} else if ($latitude < -6.019926) {
									return 282;
								} else {
									return 336;
								}
							} else if ($longitude < -171.211426) {
								if ($latitude < -6.907127) {
									return 282;
								} else {
									return 336;
								}
							} else if ($longitude < -171.059448) {
								if ($latitude < -7.099203) {
									return 44;
								} else {
									return 282;
								}
							} else {
								return 50;
							}
						} else {
							return 360;
						}
					} else if ($longitude < -157.964737) {
						if ($latitude < -8.944030) {
							return 360;
						} else {
							return 237;
						}
					} else if ($longitude < -157.178757) {
						if ($longitude < -157.907135) {
							return 360;
						} else {
							return 237;
						}
					} else if ($latitude < -3.989176) {
						return 237;
					} else {
						return 244;
					}
				} else if ($latitude < -10.539028) {
					return 312;
				} else {
					return 102;
				}
			} else {
				return $this->call1($latitude, $longitude);
			}
		} else if ($longitude < -49.201183) {
			if ($latitude < 8.980554) {
				if ($longitude < -51.240707) {
					if ($latitude < 8.600101) {
						if ($latitude < 6.004546) {
							return $this->call3($latitude, $longitude);
						} else if ($longitude < -59.803780) {
							if ($longitude < -67.422675) {
								if ($longitude < -70.950629) {
									if ($this->polygons[509]->contains($latitude, $longitude)) {
										return 397;
									} else {
										return 390;
									}
								} else {
									if ($this->polygons[510]->contains($latitude, $longitude)) {
										return 390;
									} else {
										return 397;
									}
								}
							} else if ($latitude < 8.557567) {
								if ($longitude < -63.613227) {
									return 397;
								} else if ($longitude < -61.708503) {
									return 397;
								} else if ($latitude < 7.281056) {
									if ($this->polygons[511]->contains($latitude, $longitude)) {
										return 397;
									} else {
										return 298;
									}
								} else {
									if ($this->polygons[512]->contains($latitude, $longitude)) {
										return 298;
									} else {
										return 397;
									}
								}
							} else {
								return 397;
							}
						} else {
							return 298;
						}
					} else if ($longitude < -72.626933) {
						if ($this->polygons[513]->contains($latitude, $longitude)) {
							return 397;
						} else {
							return 390;
						}
					} else {
						return 397;
					}
				} else if ($latitude < -2.030330) {
					if ($latitude < -8.062619) {
						if ($latitude < -19.269809) {
							if ($this->polygons[514]->contains($latitude, $longitude)) {
								return 317;
							} else {
								return 329;
							}
						} else if ($latitude < -13.666214) {
							if ($this->polygons[515]->contains($latitude, $longitude)) {
								return 363;
							} else {
								return 329;
							}
						} else if ($latitude < -10.864416) {
							if ($latitude < -12.265315) {
								if ($longitude < -50.220945) {
									if ($this->polygons[516]->contains($latitude, $longitude)) {
										return 61;
									}
									if ($this->polygons[517]->contains($latitude, $longitude)) {
										return 329;
									} else {
										return 363;
									}
								} else {
									if ($this->polygons[518]->contains($latitude, $longitude)) {
										return 329;
									} else {
										return 61;
									}
								}
							} else {
								if ($this->polygons[519]->contains($latitude, $longitude)) {
									return 363;
								} else {
									return 61;
								}
							}
						} else {
							if ($this->polygons[520]->contains($latitude, $longitude)) {
								return 363;
							}
							if ($this->polygons[521]->contains($latitude, $longitude)) {
								return 400;
							} else {
								return 61;
							}
						}
					} else if ($latitude < -6.923692) {
						if ($latitude < -7.274446) {
							if ($this->polygons[522]->contains($latitude, $longitude)) {
								return 61;
							} else {
								return 400;
							}
						} else {
							if ($this->polygons[523]->contains($latitude, $longitude)) {
								return 61;
							} else {
								return 400;
							}
						}
					} else {
						return 400;
					}
				} else {
					return 400;
				}
			} else if ($latitude < 12.691054) {
				if ($longitude < -64.505745) {
					if ($longitude < -68.192307) {
						if ($longitude < -71.116249) {
							if ($longitude < -71.624382) {
								if ($latitude < 10.721931) {
									if ($this->polygons[524]->contains($latitude, $longitude)) {
										return 390;
									} else {
										return 397;
									}
								} else {
									if ($this->polygons[525]->contains($latitude, $longitude)) {
										return 397;
									}
									if ($this->polygons[526]->contains($latitude, $longitude)) {
										return 397;
									} else {
										return 390;
									}
								}
							} else if ($latitude < 11.051531) {
								return 397;
							} else {
								if ($this->polygons[527]->contains($latitude, $longitude)) {
									return 397;
								} else {
									return 390;
								}
							}
						} else if ($latitude < 10.845729) {
							return 397;
						} else if ($longitude < -68.733948) {
							if ($latitude < 12.385672) {
								if ($this->polygons[528]->contains($latitude, $longitude)) {
									return 91;
								} else {
									return 397;
								}
							} else {
								return 234;
							}
						} else if ($latitude < 11.998877) {
							if ($latitude < 11.664527) {
								return 91;
							} else {
								return 397;
							}
						} else {
							return 138;
						}
					} else {
						return 397;
					}
				} else if ($latitude < 9.922397) {
					return 397;
				} else if ($longitude < -61.981004) {
					return 397;
				} else if ($latitude < 11.338342) {
					if ($longitude < -61.843590) {
						if ($latitude < 10.095178) {
							return 168;
						} else {
							return 397;
						}
					} else {
						return 168;
					}
				} else if ($latitude < 12.529215) {
					return 86;
				} else {
					return 2;
				}
			} else if ($longitude < -64.555527) {
				if ($longitude < -65.592079) {
					if ($longitude < -72.619797) {
						if ($longitude < -74.131775) {
							if ($latitude < 19.376385) {
								return 19;
							} else {
								return 376;
							}
						} else {
							return 19;
						}
					} else if ($longitude < -68.320000) {
						if ($longitude < -71.613358) {
							if ($latitude < 17.481750) {
								return 229;
							} else if ($latitude < 19.201639) {
								if ($this->polygons[529]->contains($latitude, $longitude)) {
									return 229;
								} else {
									return 19;
								}
							} else {
								if ($this->polygons[530]->contains($latitude, $longitude)) {
									return 229;
								} else {
									return 19;
								}
							}
						} else {
							return 229;
						}
					} else {
						return 393;
					}
				} else if ($longitude < -64.833633) {
					if ($longitude < -65.242737) {
						return 393;
					} else {
						return 338;
					}
				} else if ($latitude < 18.379963) {
					if ($latitude < 17.795403) {
						return 338;
					} else if ($longitude < -64.662430) {
						return 338;
					} else {
						return 301;
					}
				} else {
					return 301;
				}
			} else if ($longitude < -62.146420) {
				if ($longitude < -64.268768) {
					return 301;
				} else if ($latitude < 18.130697) {
					if ($longitude < -62.943668) {
						if ($latitude < 17.656101) {
							return 138;
						} else if ($longitude < -63.012993) {
							if ($this->polygons[531]->contains($latitude, $longitude)) {
								return 354;
							} else {
								return 394;
							}
						} else {
							return 277;
						}
					} else if ($latitude < 17.209156) {
						if ($latitude < 16.956336) {
							return 80;
						} else {
							return 342;
						}
					} else if ($latitude < 17.652030) {
						return 173;
					} else {
						return 342;
					}
				} else {
					return 176;
				}
			} else if ($latitude < 14.878819) {
				if ($latitude < 12.964186) {
					return 2;
				} else if ($latitude < 14.103245) {
					if ($longitude < -61.113880) {
						return 2;
					} else if ($latitude < 13.516017) {
						return 228;
					} else {
						return 386;
					}
				} else {
					return 328;
				}
			} else if ($longitude < -61.546261) {
				if ($latitude < 16.368206) {
					return 277;
				} else {
					return 204;
				}
			} else if ($latitude < 15.631809) {
				return 1;
			} else {
				return 277;
			}
		} else {
			return $this->call5($latitude, $longitude);
		}
	}
	
	protected function call7(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -103.047236) {
			if ($longitude < -109.624168) {
				if ($latitude < 27.090626) {
					if ($longitude < -110.792007) {
						return 407;
					} else {
						return 402;
					}
				} else if ($latitude < 27.905155) {
					return 402;
				} else if ($latitude < 31.330078) {
					if ($this->polygons[532]->contains($latitude, $longitude)) {
						return 9;
					} else {
						return 402;
					}
				} else {
					if ($this->polygons[533]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 9;
					}
				}
			} else if ($latitude < 25.528921) {
				if ($longitude < -108.804733) {
					return 407;
				} else {
					if ($this->polygons[534]->contains($latitude, $longitude)) {
						return 384;
					} else {
						return 407;
					}
				}
			} else if ($latitude < 27.061386) {
				if ($longitude < -106.335702) {
					if ($longitude < -107.979935) {
						if ($this->polygons[535]->contains($latitude, $longitude)) {
							return 185;
						}
						if ($this->polygons[536]->contains($latitude, $longitude)) {
							return 402;
						} else {
							return 407;
						}
					} else {
						if ($this->polygons[537]->contains($latitude, $longitude)) {
							return 384;
						}
						if ($this->polygons[538]->contains($latitude, $longitude)) {
							return 407;
						} else {
							return 185;
						}
					}
				} else {
					if ($this->polygons[539]->contains($latitude, $longitude)) {
						return 185;
					} else {
						return 384;
					}
				}
			} else if ($longitude < -108.558060) {
				if ($latitude < 31.330776) {
					if ($latitude < 29.992775) {
						if ($this->polygons[540]->contains($latitude, $longitude)) {
							return 185;
						} else {
							return 402;
						}
					} else {
						if ($this->polygons[541]->contains($latitude, $longitude)) {
							return 185;
						}
						if ($this->polygons[542]->contains($latitude, $longitude)) {
							return 402;
						} else {
							return 133;
						}
					}
				} else {
					if ($this->polygons[543]->contains($latitude, $longitude)) {
						return 9;
					} else {
						return 273;
					}
				}
			} else if ($latitude < 31.159515) {
				if ($longitude < -105.802648) {
					if ($this->polygons[544]->contains($latitude, $longitude)) {
						return 185;
					} else {
						return 133;
					}
				} else if ($latitude < 29.110451) {
					if ($longitude < -104.424942) {
						return 185;
					} else if ($latitude < 28.085918) {
						if ($this->polygons[545]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 185;
						}
					} else if ($longitude < -103.736089) {
						if ($this->polygons[546]->contains($latitude, $longitude)) {
							return 133;
						}
						if ($this->polygons[547]->contains($latitude, $longitude)) {
							return 133;
						}
						if ($this->polygons[548]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 185;
						}
					} else if ($latitude < 28.598185) {
						if ($this->polygons[549]->contains($latitude, $longitude)) {
							return 185;
						} else {
							return 384;
						}
					} else if ($longitude < -103.391663) {
						if ($this->polygons[550]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[551]->contains($latitude, $longitude)) {
							return 185;
						}
						if ($this->polygons[552]->contains($latitude, $longitude)) {
							return 374;
						}
						if ($this->polygons[553]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 133;
						}
					} else {
						if ($this->polygons[554]->contains($latitude, $longitude)) {
							return 133;
						}
						if ($this->polygons[555]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[556]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 374;
						}
					}
				} else if ($longitude < -104.424942) {
					if ($latitude < 30.134983) {
						if ($this->polygons[557]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[558]->contains($latitude, $longitude)) {
							return 185;
						} else {
							return 133;
						}
					} else if ($longitude < -105.113795) {
						if ($this->polygons[559]->contains($latitude, $longitude)) {
							return 185;
						}
						if ($this->polygons[560]->contains($latitude, $longitude)) {
							return 273;
						} else {
							return 133;
						}
					} else {
						if ($this->polygons[561]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[562]->contains($latitude, $longitude)) {
							return 185;
						}
						if ($this->polygons[563]->contains($latitude, $longitude)) {
							return 185;
						}
						if ($this->polygons[564]->contains($latitude, $longitude)) {
							return 273;
						} else {
							return 133;
						}
					}
				} else {
					if ($this->polygons[565]->contains($latitude, $longitude)) {
						return 160;
					}
					if ($this->polygons[566]->contains($latitude, $longitude)) {
						return 185;
					} else {
						return 133;
					}
				}
			} else if ($longitude < -105.802648) {
				if ($this->polygons[567]->contains($latitude, $longitude)) {
					return 185;
				}
				if ($this->polygons[568]->contains($latitude, $longitude)) {
					return 185;
				}
				if ($this->polygons[569]->contains($latitude, $longitude)) {
					return 273;
				} else {
					return 133;
				}
			} else {
				if ($this->polygons[570]->contains($latitude, $longitude)) {
					return 133;
				}
				if ($this->polygons[571]->contains($latitude, $longitude)) {
					return 160;
				} else {
					return 273;
				}
			}
		} else if ($longitude < -97.475403) {
			if ($latitude < 26.857126) {
				if ($longitude < -100.261320) {
					return 384;
				} else if ($longitude < -98.868361) {
					if ($this->polygons[572]->contains($latitude, $longitude)) {
						return 160;
					}
					if ($this->polygons[573]->contains($latitude, $longitude)) {
						return 384;
					} else {
						return 374;
					}
				} else if ($latitude < 26.155322) {
					if ($longitude < -98.171882) {
						if ($this->polygons[574]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[575]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[576]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 374;
						}
					} else {
						if ($this->polygons[577]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[578]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 374;
						}
					}
				} else {
					if ($this->polygons[579]->contains($latitude, $longitude)) {
						return 374;
					}
					if ($this->polygons[580]->contains($latitude, $longitude)) {
						return 374;
					} else {
						return 160;
					}
				}
			} else if ($longitude < -99.285888) {
				if ($latitude < 31.057385) {
					if ($latitude < 28.957256) {
						if ($longitude < -101.166562) {
							if ($this->polygons[581]->contains($latitude, $longitude)) {
								return 374;
							} else {
								return 384;
							}
						} else if ($latitude < 27.907191) {
							if ($longitude < -100.226225) {
								if ($this->polygons[582]->contains($latitude, $longitude)) {
									return 374;
								} else {
									return 384;
								}
							} else if ($latitude < 27.382159) {
								if ($this->polygons[583]->contains($latitude, $longitude)) {
									return 160;
								}
								if ($this->polygons[584]->contains($latitude, $longitude)) {
									return 384;
								} else {
									return 374;
								}
							} else {
								if ($this->polygons[585]->contains($latitude, $longitude)) {
									return 160;
								}
								if ($this->polygons[586]->contains($latitude, $longitude)) {
									return 384;
								} else {
									return 374;
								}
							}
						} else {
							if ($this->polygons[587]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[588]->contains($latitude, $longitude)) {
								return 384;
							} else {
								return 374;
							}
						}
					} else if ($longitude < -101.166562) {
						if ($latitude < 30.007321) {
							if ($longitude < -102.106899) {
								if ($latitude < 29.482288) {
									if ($this->polygons[589]->contains($latitude, $longitude)) {
										return 160;
									}
									if ($this->polygons[590]->contains($latitude, $longitude)) {
										return 384;
									} else {
										return 374;
									}
								} else {
									if ($this->polygons[591]->contains($latitude, $longitude)) {
										return 160;
									}
									if ($this->polygons[592]->contains($latitude, $longitude)) {
										return 384;
									} else {
										return 374;
									}
								}
							} else if ($latitude < 29.482288) {
								if ($this->polygons[593]->contains($latitude, $longitude)) {
									return 160;
								}
								if ($this->polygons[594]->contains($latitude, $longitude)) {
									return 384;
								} else {
									return 374;
								}
							} else {
								if ($this->polygons[595]->contains($latitude, $longitude)) {
									return 160;
								}
								if ($this->polygons[596]->contains($latitude, $longitude)) {
									return 384;
								}
								if ($this->polygons[597]->contains($latitude, $longitude)) {
									return 384;
								}
								if ($this->polygons[598]->contains($latitude, $longitude)) {
									return 384;
								}
								if ($this->polygons[599]->contains($latitude, $longitude)) {
									return 384;
								} else {
									return 374;
								}
							}
						} else {
							return 160;
						}
					} else {
						if ($this->polygons[600]->contains($latitude, $longitude)) {
							return 160;
						}
						if ($this->polygons[601]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 374;
						}
					}
				} else {
					return 160;
				}
			} else {
				return 160;
			}
		} else if ($latitude < 25.878584) {
			if ($latitude < 25.603125) {
				if ($longitude < -97.450340) {
					if ($this->polygons[602]->contains($latitude, $longitude)) {
						return 374;
					} else {
						return 384;
					}
				} else {
					if ($this->polygons[603]->contains($latitude, $longitude)) {
						return 374;
					} else {
						return 384;
					}
				}
			} else {
				if ($this->polygons[604]->contains($latitude, $longitude)) {
					return 160;
				} else {
					return 374;
				}
			}
		} else {
			return 160;
		}
	}
	
	protected function call8(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -118.678200) {
			if ($latitude < 48.419193) {
				return 39;
			} else if ($latitude < 49.002640) {
				if ($longitude < -122.902634) {
					if ($latitude < 48.722092) {
						if ($latitude < 48.429218) {
							return 45;
						} else {
							return 39;
						}
					} else if ($longitude < -123.176979) {
						return 45;
					} else if ($latitude < 48.820377) {
						if ($longitude < -123.040512) {
							return 45;
						} else {
							return 39;
						}
					} else {
						if ($this->polygons[605]->contains($latitude, $longitude)) {
							return 45;
						} else {
							return 39;
						}
					}
				} else if ($latitude < 48.744881) {
					return 39;
				} else {
					if ($this->polygons[606]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 39;
					}
				}
			} else {
				return 45;
			}
		} else if ($latitude < 27.895760) {
			return 407;
		} else if ($latitude < 29.996002) {
			if ($longitude < -114.366554) {
				if ($latitude < 27.899921) {
					return 407;
				} else {
					return 367;
				}
			} else if ($longitude < -112.753685) {
				if ($latitude < 28.002499) {
					if ($latitude < 27.946997) {
						return 407;
					} else {
						if ($this->polygons[607]->contains($latitude, $longitude)) {
							return 367;
						} else {
							return 407;
						}
					}
				} else {
					return 367;
				}
			} else {
				return 402;
			}
		} else if ($latitude < 33.478561) {
			if ($longitude < -118.299171) {
				return 39;
			} else if ($longitude < -116.797958) {
				if ($latitude < 32.419422) {
					return 194;
				} else {
					if ($this->polygons[608]->contains($latitude, $longitude)) {
						return 194;
					} else {
						return 39;
					}
				}
			} else if ($latitude < 30.494665) {
				if ($longitude < -114.543932) {
					return 367;
				} else {
					return 402;
				}
			} else if ($longitude < -113.899330) {
				if ($latitude < 31.986613) {
					if ($this->polygons[609]->contains($latitude, $longitude)) {
						return 194;
					}
					if ($this->polygons[610]->contains($latitude, $longitude)) {
						return 402;
					} else {
						return 367;
					}
				} else {
					if ($this->polygons[611]->contains($latitude, $longitude)) {
						return 39;
					}
					if ($this->polygons[612]->contains($latitude, $longitude)) {
						return 194;
					}
					if ($this->polygons[613]->contains($latitude, $longitude)) {
						return 367;
					}
					if ($this->polygons[614]->contains($latitude, $longitude)) {
						return 402;
					} else {
						return 9;
					}
				}
			} else {
				if ($this->polygons[615]->contains($latitude, $longitude)) {
					return 9;
				} else {
					return 402;
				}
			}
		} else if ($latitude < 46.038212) {
			if ($latitude < 37.004261) {
				if ($longitude < -114.047243) {
					if ($longitude < -116.362721) {
						return 39;
					} else if ($latitude < 35.241411) {
						if ($this->polygons[616]->contains($latitude, $longitude)) {
							return 9;
						} else {
							return 39;
						}
					} else {
						if ($this->polygons[617]->contains($latitude, $longitude)) {
							return 9;
						} else {
							return 39;
						}
					}
				} else if ($latitude < 35.241411) {
					if ($this->polygons[618]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 9;
					}
				} else if ($longitude < -112.523972) {
					return 9;
				} else if ($latitude < 36.122836) {
					if ($this->polygons[619]->contains($latitude, $longitude)) {
						return 9;
					}
					if ($this->polygons[620]->contains($latitude, $longitude)) {
						return 9;
					} else {
						return 273;
					}
				} else {
					if ($this->polygons[621]->contains($latitude, $longitude)) {
						return 9;
					}
					if ($this->polygons[622]->contains($latitude, $longitude)) {
						return 9;
					}
					if ($this->polygons[623]->contains($latitude, $longitude)) {
						return 9;
					}
					if ($this->polygons[624]->contains($latitude, $longitude)) {
						return 9;
					} else {
						return 273;
					}
				}
			} else if ($latitude < 41.521236) {
				if ($this->polygons[625]->contains($latitude, $longitude)) {
					return 39;
				} else {
					return 273;
				}
			} else if ($longitude < -114.839451) {
				if ($latitude < 43.779724) {
					if ($this->polygons[626]->contains($latitude, $longitude)) {
						return 27;
					} else {
						return 39;
					}
				} else if ($longitude < -116.758825) {
					if ($this->polygons[627]->contains($latitude, $longitude)) {
						return 27;
					}
					if ($this->polygons[628]->contains($latitude, $longitude)) {
						return 27;
					} else {
						return 39;
					}
				} else {
					if ($this->polygons[629]->contains($latitude, $longitude)) {
						return 27;
					} else {
						return 39;
					}
				}
			} else if ($latitude < 43.779724) {
				if ($this->polygons[630]->contains($latitude, $longitude)) {
					return 27;
				}
				if ($this->polygons[631]->contains($latitude, $longitude)) {
					return 39;
				} else {
					return 273;
				}
			} else if ($longitude < -112.920076) {
				if ($latitude < 44.908968) {
					if ($this->polygons[632]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 27;
					}
				} else if ($longitude < -113.879764) {
					if ($this->polygons[633]->contains($latitude, $longitude)) {
						return 27;
					}
					if ($this->polygons[634]->contains($latitude, $longitude)) {
						return 39;
					} else {
						return 273;
					}
				} else {
					if ($this->polygons[635]->contains($latitude, $longitude)) {
						return 27;
					} else {
						return 273;
					}
				}
			} else {
				if ($this->polygons[636]->contains($latitude, $longitude)) {
					return 27;
				} else {
					return 273;
				}
			}
		} else if ($latitude < 52.150300) {
			if ($longitude < -114.839451) {
				if ($latitude < 49.094256) {
					if ($this->polygons[637]->contains($latitude, $longitude)) {
						return 45;
					}
					if ($this->polygons[638]->contains($latitude, $longitude)) {
						return 227;
					}
					if ($this->polygons[639]->contains($latitude, $longitude)) {
						return 253;
					}
					if ($this->polygons[640]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 39;
					}
				} else if ($longitude < -116.758825) {
					if ($latitude < 50.622278) {
						if ($this->polygons[641]->contains($latitude, $longitude)) {
							return 253;
						}
						if ($this->polygons[642]->contains($latitude, $longitude)) {
							return 253;
						} else {
							return 45;
						}
					} else {
						if ($this->polygons[643]->contains($latitude, $longitude)) {
							return 227;
						} else {
							return 45;
						}
					}
				} else if ($latitude < 50.622278) {
					if ($longitude < -115.799138) {
						if ($latitude < 49.858267) {
							if ($this->polygons[644]->contains($latitude, $longitude)) {
								return 45;
							}
							if ($this->polygons[645]->contains($latitude, $longitude)) {
								return 45;
							}
							if ($this->polygons[646]->contains($latitude, $longitude)) {
								return 227;
							} else {
								return 253;
							}
						} else {
							if ($this->polygons[647]->contains($latitude, $longitude)) {
								return 227;
							} else {
								return 45;
							}
						}
					} else {
						return 227;
					}
				} else {
					if ($this->polygons[648]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 227;
					}
				}
			} else {
				if ($this->polygons[649]->contains($latitude, $longitude)) {
					return 39;
				}
				if ($this->polygons[650]->contains($latitude, $longitude)) {
					return 227;
				} else {
					return 273;
				}
			}
		} else {
			if ($this->polygons[651]->contains($latitude, $longitude)) {
				return 45;
			} else {
				return 227;
			}
		}
	}
	
	protected function call9(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 25.453518) {
			if ($longitude < -108.089081) {
				return 407;
			} else if ($latitude < 24.790808) {
				if ($longitude < -101.290734) {
					if ($longitude < -106.203979) {
						if ($latitude < 21.819218) {
							return 407;
						} else {
							if ($this->polygons[652]->contains($latitude, $longitude)) {
								return 384;
							} else {
								return 407;
							}
						}
					} else if ($longitude < -102.505865) {
						if ($latitude < 22.582341) {
							if ($longitude < -104.208678) {
								if ($this->polygons[653]->contains($latitude, $longitude)) {
									return 34;
								}
								if ($this->polygons[654]->contains($latitude, $longitude)) {
									return 192;
								}
								if ($this->polygons[655]->contains($latitude, $longitude)) {
									return 192;
								}
								if ($this->polygons[656]->contains($latitude, $longitude)) {
									return 384;
								}
								if ($this->polygons[657]->contains($latitude, $longitude)) {
									return 384;
								} else {
									return 407;
								}
							} else {
								if ($this->polygons[658]->contains($latitude, $longitude)) {
									return 407;
								} else {
									return 192;
								}
							}
						} else {
							if ($this->polygons[659]->contains($latitude, $longitude)) {
								return 192;
							}
							if ($this->polygons[660]->contains($latitude, $longitude)) {
								return 407;
							}
							if ($this->polygons[661]->contains($latitude, $longitude)) {
								return 407;
							} else {
								return 384;
							}
						}
					} else if ($longitude < -101.403413) {
						if ($this->polygons[662]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 192;
						}
					} else {
						if ($this->polygons[663]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 192;
						}
					}
				} else if ($longitude < -97.596219) {
					if ($latitude < 24.653814) {
						if ($longitude < -97.731384) {
							if ($latitude < 22.513844) {
								if ($this->polygons[664]->contains($latitude, $longitude)) {
									return 384;
								} else {
									return 192;
								}
							} else {
								if ($this->polygons[665]->contains($latitude, $longitude)) {
									return 192;
								} else {
									return 384;
								}
							}
						} else if ($latitude < 22.034286) {
							return 192;
						} else {
							return 384;
						}
					} else if ($longitude < -101.085294) {
						if ($this->polygons[666]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 192;
						}
					} else {
						return 384;
					}
				} else {
					return 192;
				}
			} else if ($longitude < -101.222706) {
				if ($longitude < -108.038940) {
					return 407;
				} else if ($longitude < -101.585564) {
					if ($longitude < -106.892400) {
						if ($this->polygons[667]->contains($latitude, $longitude)) {
							return 384;
						} else {
							return 407;
						}
					} else {
						if ($this->polygons[668]->contains($latitude, $longitude)) {
							return 192;
						} else {
							return 384;
						}
					}
				} else if ($longitude < -101.332363) {
					if ($this->polygons[669]->contains($latitude, $longitude)) {
						return 192;
					} else {
						return 384;
					}
				} else {
					if ($this->polygons[670]->contains($latitude, $longitude)) {
						return 192;
					} else {
						return 384;
					}
				}
			} else {
				return 384;
			}
		} else if ($longitude < -97.406975) {
			if ($latitude < 35.257645) {
				return $this->call7($latitude, $longitude);
			} else if ($longitude < -108.883000) {
				if ($latitude < 37.340875) {
					if ($longitude < -109.941851) {
						if ($latitude < 36.299260) {
							if ($longitude < -110.471276) {
								if ($this->polygons[671]->contains($latitude, $longitude)) {
									return 9;
								}
								if ($this->polygons[672]->contains($latitude, $longitude)) {
									return 9;
								} else {
									return 273;
								}
							} else {
								if ($this->polygons[673]->contains($latitude, $longitude)) {
									return 9;
								}
								if ($this->polygons[674]->contains($latitude, $longitude)) {
									return 9;
								}
								if ($this->polygons[675]->contains($latitude, $longitude)) {
									return 9;
								} else {
									return 273;
								}
							}
						} else {
							if ($this->polygons[676]->contains($latitude, $longitude)) {
								return 9;
							}
							if ($this->polygons[677]->contains($latitude, $longitude)) {
								return 9;
							} else {
								return 273;
							}
						}
					} else {
						return 273;
					}
				} else {
					if ($this->polygons[678]->contains($latitude, $longitude)) {
						return 227;
					}
					if ($this->polygons[679]->contains($latitude, $longitude)) {
						return 227;
					}
					if ($this->polygons[680]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 308;
					}
				}
			} else if ($latitude < 47.575298) {
				if ($longitude < -103.093439) {
					if ($longitude < -103.434273) {
						if ($this->polygons[681]->contains($latitude, $longitude)) {
							return 160;
						} else {
							return 273;
						}
					} else {
						if ($this->polygons[682]->contains($latitude, $longitude)) {
							return 160;
						} else {
							return 273;
						}
					}
				} else if ($longitude < -102.432684) {
					if ($latitude < 36.998989) {
						if ($this->polygons[683]->contains($latitude, $longitude)) {
							return 160;
						} else {
							return 273;
						}
					} else {
						if ($this->polygons[684]->contains($latitude, $longitude)) {
							return 160;
						} else {
							return 273;
						}
					}
				} else if ($latitude < 41.416471) {
					if ($this->polygons[685]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 160;
					}
				} else if ($latitude < 44.495885) {
					if ($this->polygons[686]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 160;
					}
				} else if ($longitude < -99.919829) {
					if ($latitude < 46.035592) {
						if ($this->polygons[687]->contains($latitude, $longitude)) {
							return 160;
						} else {
							return 273;
						}
					} else if ($longitude < -101.176257) {
						if ($latitude < 46.805445) {
							if ($this->polygons[688]->contains($latitude, $longitude)) {
								return 52;
							}
							if ($this->polygons[689]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 273;
							}
						} else {
							if ($this->polygons[690]->contains($latitude, $longitude)) {
								return 52;
							}
							if ($this->polygons[691]->contains($latitude, $longitude)) {
								return 105;
							}
							if ($this->polygons[692]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[693]->contains($latitude, $longitude)) {
								return 273;
							} else {
								return 71;
							}
						}
					} else {
						if ($this->polygons[694]->contains($latitude, $longitude)) {
							return 52;
						}
						if ($this->polygons[695]->contains($latitude, $longitude)) {
							return 105;
						}
						if ($this->polygons[696]->contains($latitude, $longitude)) {
							return 273;
						} else {
							return 160;
						}
					}
				} else {
					return 160;
				}
			} else if ($longitude < -103.610133) {
				if ($latitude < 48.997666) {
					if ($this->polygons[697]->contains($latitude, $longitude)) {
						return 160;
					}
					if ($this->polygons[698]->contains($latitude, $longitude)) {
						return 308;
					} else {
						return 273;
					}
				} else {
					if ($this->polygons[699]->contains($latitude, $longitude)) {
						return 74;
					} else {
						return 308;
					}
				}
			} else if ($latitude < 47.674011) {
				if ($longitude < -102.711964) {
					if ($this->polygons[700]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 160;
					}
				} else {
					if ($this->polygons[701]->contains($latitude, $longitude)) {
						return 273;
					} else {
						return 160;
					}
				}
			} else if ($latitude < 48.994424) {
				if ($this->polygons[702]->contains($latitude, $longitude)) {
					return 308;
				} else {
					return 160;
				}
			} else {
				if ($this->polygons[703]->contains($latitude, $longitude)) {
					return 308;
				} else {
					return 284;
				}
			}
		} else if ($latitude < 27.880161) {
			if ($latitude < 25.959148) {
				if ($latitude < 25.643694) {
					if ($this->polygons[704]->contains($latitude, $longitude)) {
						return 374;
					} else {
						return 384;
					}
				} else {
					if ($this->polygons[705]->contains($latitude, $longitude)) {
						return 160;
					} else {
						return 374;
					}
				}
			} else {
				return 160;
			}
		} else if ($latitude < 29.841980) {
			return 160;
		} else {
			if ($this->polygons[706]->contains($latitude, $longitude)) {
				return 284;
			}
			if ($this->polygons[707]->contains($latitude, $longitude)) {
				return 378;
			} else {
				return 160;
			}
		}
	}
	
	protected function call10(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 44.018513) {
			if ($longitude < -87.921288) {
				return 160;
			} else if ($longitude < -84.575844) {
				if ($latitude < 30.474203) {
					if ($longitude < -85.625534) {
						return 160;
					} else if ($latitude < 29.760227) {
						return 165;
					} else if ($longitude < -84.981323) {
						if ($latitude < 30.444105) {
							if ($this->polygons[708]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 160;
							}
						} else {
							if ($this->polygons[709]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 160;
							}
						}
					} else {
						return 165;
					}
				} else if ($latitude < 38.929596) {
					if ($latitude < 36.997822) {
						if ($latitude < 33.736012) {
							if ($this->polygons[710]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 160;
							}
						} else if ($longitude < -86.248566) {
							return 160;
						} else if ($latitude < 35.366917) {
							if ($this->polygons[711]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 160;
							}
						} else if ($longitude < -85.412205) {
							return 160;
						} else if ($latitude < 36.182369) {
							if ($this->polygons[712]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 160;
							}
						} else {
							if ($this->polygons[713]->contains($latitude, $longitude)) {
								return 110;
							}
							if ($this->polygons[714]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 165;
							}
						}
					} else if ($longitude < -87.072258) {
						if ($latitude < 37.963709) {
							return 160;
						} else if ($latitude < 38.446652) {
							if ($this->polygons[715]->contains($latitude, $longitude)) {
								return 54;
							}
							if ($this->polygons[716]->contains($latitude, $longitude)) {
								return 309;
							} else {
								return 160;
							}
						} else {
							if ($this->polygons[717]->contains($latitude, $longitude)) {
								return 54;
							}
							if ($this->polygons[718]->contains($latitude, $longitude)) {
								return 89;
							}
							if ($this->polygons[719]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[720]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 309;
							}
						}
					} else if ($longitude < -85.824051) {
						if ($latitude < 37.963688) {
							if ($this->polygons[721]->contains($latitude, $longitude)) {
								return 90;
							}
							if ($this->polygons[722]->contains($latitude, $longitude)) {
								return 130;
							}
							if ($this->polygons[723]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 160;
							}
						} else if ($longitude < -86.448154) {
							if ($this->polygons[724]->contains($latitude, $longitude)) {
								return 89;
							}
							if ($this->polygons[725]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[726]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[727]->contains($latitude, $longitude)) {
								return 165;
							}
							if ($this->polygons[728]->contains($latitude, $longitude)) {
								return 165;
							}
							if ($this->polygons[729]->contains($latitude, $longitude)) {
								return 309;
							}
							if ($this->polygons[730]->contains($latitude, $longitude)) {
								return 388;
							} else {
								return 90;
							}
						} else if ($latitude < 38.446592) {
							if ($this->polygons[731]->contains($latitude, $longitude)) {
								return 89;
							}
							if ($this->polygons[732]->contains($latitude, $longitude)) {
								return 90;
							}
							if ($this->polygons[733]->contains($latitude, $longitude)) {
								return 130;
							}
							if ($this->polygons[734]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[735]->contains($latitude, $longitude)) {
								return 388;
							} else {
								return 165;
							}
						} else {
							if ($this->polygons[736]->contains($latitude, $longitude)) {
								return 130;
							} else {
								return 89;
							}
						}
					} else if ($latitude < 37.963709) {
						if ($this->polygons[737]->contains($latitude, $longitude)) {
							return 160;
						} else {
							return 165;
						}
					} else {
						if ($this->polygons[738]->contains($latitude, $longitude)) {
							return 89;
						}
						if ($this->polygons[739]->contains($latitude, $longitude)) {
							return 130;
						}
						if ($this->polygons[740]->contains($latitude, $longitude)) {
							return 391;
						} else {
							return 165;
						}
					}
				} else if ($longitude < -86.466347) {
					if ($latitude < 41.760455) {
						if ($this->polygons[741]->contains($latitude, $longitude)) {
							return 89;
						}
						if ($this->polygons[742]->contains($latitude, $longitude)) {
							return 248;
						}
						if ($this->polygons[743]->contains($latitude, $longitude)) {
							return 257;
						} else {
							return 160;
						}
					} else if ($longitude < -87.550373) {
						return 160;
					} else {
						return 93;
					}
				} else {
					if ($this->polygons[744]->contains($latitude, $longitude)) {
						return 89;
					}
					if ($this->polygons[745]->contains($latitude, $longitude)) {
						return 165;
					} else {
						return 93;
					}
				}
			} else if ($latitude < 41.697075) {
				return 165;
			} else if ($longitude < -83.173058) {
				if ($latitude < 41.733951) {
					if ($longitude < -83.446740) {
						if ($this->polygons[746]->contains($latitude, $longitude)) {
							return 165;
						} else {
							return 93;
						}
					} else {
						return 165;
					}
				} else {
					return 93;
				}
			} else if ($longitude < -82.407822) {
				if ($latitude < 41.829945) {
					if ($longitude < -82.742973) {
						return 165;
					} else {
						return 238;
					}
				} else {
					if ($this->polygons[747]->contains($latitude, $longitude)) {
						return 238;
					} else {
						return 93;
					}
				}
			} else if ($latitude < 42.303441) {
				if ($longitude < -81.847701) {
					return 238;
				} else {
					return 165;
				}
			} else {
				return 238;
			}
		} else if ($longitude < -86.503700) {
			if ($latitude < 47.860935) {
				if ($longitude < -90.438179) {
					return 160;
				} else if ($latitude < 45.424801) {
					if ($longitude < -87.351521) {
						if ($longitude < -87.652123) {
							if ($latitude < 45.240341) {
								if ($this->polygons[748]->contains($latitude, $longitude)) {
									return 94;
								}
								if ($this->polygons[749]->contains($latitude, $longitude)) {
									return 94;
								}
								if ($this->polygons[750]->contains($latitude, $longitude)) {
									return 94;
								} else {
									return 160;
								}
							} else {
								if ($this->polygons[751]->contains($latitude, $longitude)) {
									return 160;
								} else {
									return 94;
								}
							}
						} else if ($latitude < 44.970303) {
							return 160;
						} else if ($longitude < -87.580826) {
							if ($this->polygons[752]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[753]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 94;
							}
						} else {
							if ($this->polygons[754]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 94;
							}
						}
					} else {
						return 160;
					}
				} else if ($longitude < -87.267632) {
					if ($latitude < 46.767605) {
						if ($longitude < -88.852905) {
							if ($this->polygons[755]->contains($latitude, $longitude)) {
								return 93;
							}
							if ($this->polygons[756]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 94;
							}
						} else if ($longitude < -88.060268) {
							if ($this->polygons[757]->contains($latitude, $longitude)) {
								return 93;
							}
							if ($this->polygons[758]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 94;
							}
						} else {
							if ($this->polygons[759]->contains($latitude, $longitude)) {
								return 93;
							}
							if ($this->polygons[760]->contains($latitude, $longitude)) {
								return 93;
							}
							if ($this->polygons[761]->contains($latitude, $longitude)) {
								return 160;
							} else {
								return 94;
							}
						}
					} else if ($longitude < -89.863985) {
						if ($latitude < 46.772694) {
							return 93;
						} else {
							return 160;
						}
					} else {
						return 93;
					}
				} else {
					return 93;
				}
			} else if ($longitude < -88.182213) {
				if ($longitude < -89.000000) {
					if ($latitude < 48.175171) {
						if ($longitude < -89.307442) {
							if ($longitude < -89.505821) {
								if ($longitude < -91.087389) {
									if ($this->polygons[762]->contains($latitude, $longitude)) {
										return 223;
									} else {
										return 160;
									}
								} else {
									if ($this->polygons[763]->contains($latitude, $longitude)) {
										return 223;
									}
									if ($this->polygons[764]->contains($latitude, $longitude)) {
										return 238;
									} else {
										return 160;
									}
								}
							} else {
								return 238;
							}
						} else if ($latitude < 47.993145) {
							return 93;
						} else {
							return 238;
						}
					} else if ($longitude < -89.998705) {
						if ($longitude < -91.732543) {
							if ($latitude < 48.464100) {
								if ($this->polygons[765]->contains($latitude, $longitude)) {
									return 160;
								}
								if ($this->polygons[766]->contains($latitude, $longitude)) {
									return 284;
								} else {
									return 223;
								}
							} else {
								if ($this->polygons[767]->contains($latitude, $longitude)) {
									return 223;
								} else {
									return 284;
								}
							}
						} else if ($latitude < 49.000000) {
							if ($this->polygons[768]->contains($latitude, $longitude)) {
								return 160;
							}
							if ($this->polygons[769]->contains($latitude, $longitude)) {
								return 238;
							} else {
								return 223;
							}
						} else {
							if ($this->polygons[770]->contains($latitude, $longitude)) {
								return 284;
							} else {
								return 238;
							}
						}
					} else if ($latitude < 48.269608) {
						return 238;
					} else if ($latitude < 52.750000) {
						if ($this->polygons[771]->contains($latitude, $longitude)) {
							return 238;
						} else {
							return 358;
						}
					} else {
						return 284;
					}
				} else if ($longitude < -88.434196) {
					if ($latitude < 48.185020) {
						return 93;
					} else {
						return 238;
					}
				} else if ($latitude < 48.517834) {
					if ($longitude < -88.375648) {
						return 238;
					} else {
						return 93;
					}
				} else if ($latitude < 48.556038) {
					return 238;
				} else {
					if ($this->polygons[772]->contains($latitude, $longitude)) {
						return 335;
					} else {
						return 238;
					}
				}
			} else {
				return 238;
			}
		} else if ($longitude < -81.695793) {
			if ($longitude < -83.252220) {
				if ($latitude < 45.828533) {
					return 93;
				} else if ($latitude < 46.770527) {
					if ($longitude < -84.597824) {
						if ($longitude < -84.706245) {
							if ($this->polygons[773]->contains($latitude, $longitude)) {
								return 238;
							} else {
								return 93;
							}
						} else {
							return 93;
						}
					} else if ($longitude < -84.557343) {
						if ($latitude < 46.441211) {
							return 93;
						} else {
							return 238;
						}
					} else if ($longitude < -84.298393) {
						if ($latitude < 45.987839) {
							return 93;
						} else {
							if ($this->polygons[774]->contains($latitude, $longitude)) {
								return 238;
							} else {
								return 93;
							}
						}
					} else {
						if ($this->polygons[775]->contains($latitude, $longitude)) {
							return 238;
						} else {
							return 93;
						}
					}
				} else {
					return 238;
				}
			} else if ($latitude < 45.048958) {
				if ($longitude < -82.802887) {
					return 93;
				} else {
					return 238;
				}
			} else {
				return 238;
			}
		} else if ($latitude < 52.532292) {
			return 238;
		} else {
			return 137;
		}
	}
	
	protected function call11(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 47.560501) {
			if ($latitude < 39.177528) {
				if ($latitude < 35.928028) {
					if ($longitude < -15.360811) {
						if ($latitude < 28.585676) {
							if ($latitude < 20.641302) {
								return 33;
							} else if ($latitude < 24.286565) {
								if ($latitude < 21.330532) {
									if ($this->polygons[776]->contains($latitude, $longitude)) {
										return 29;
									} else {
										return 33;
									}
								} else {
									return 29;
								}
							} else {
								return 264;
							}
						} else {
							return 63;
						}
					} else if ($longitude < -13.417682) {
						if ($latitude < 27.131824) {
							if ($this->polygons[777]->contains($latitude, $longitude)) {
								return 33;
							} else {
								return 29;
							}
						} else {
							return 264;
						}
					} else if ($latitude < 27.298073) {
						if ($longitude < 1.713168) {
							if ($this->polygons[778]->contains($latitude, $longitude)) {
								return 29;
							}
							if ($this->polygons[779]->contains($latitude, $longitude)) {
								return 33;
							}
							if ($this->polygons[780]->contains($latitude, $longitude)) {
								return 380;
							} else {
								return 181;
							}
						} else {
							if ($this->polygons[781]->contains($latitude, $longitude)) {
								return 260;
							} else {
								return 380;
							}
						}
					} else if ($longitude < -5.275472) {
						if ($latitude < 29.949635) {
							if ($this->polygons[782]->contains($latitude, $longitude)) {
								return 29;
							}
							if ($this->polygons[783]->contains($latitude, $longitude)) {
								return 380;
							} else {
								return 343;
							}
						} else {
							if ($this->polygons[784]->contains($latitude, $longitude)) {
								return 315;
							} else {
								return 343;
							}
						}
					} else if ($latitude < 35.690445) {
						if ($longitude < 0.924000) {
							if ($latitude < 31.494259) {
								if ($this->polygons[785]->contains($latitude, $longitude)) {
									return 343;
								} else {
									return 380;
								}
							} else if ($longitude < -2.175736) {
								if ($this->polygons[786]->contains($latitude, $longitude)) {
									return 315;
								}
								if ($this->polygons[787]->contains($latitude, $longitude)) {
									return 380;
								}
								if ($this->polygons[788]->contains($latitude, $longitude)) {
									return 380;
								} else {
									return 343;
								}
							} else {
								if ($this->polygons[789]->contains($latitude, $longitude)) {
									return 343;
								} else {
									return 380;
								}
							}
						} else {
							return 380;
						}
					} else {
						return 380;
					}
				} else if ($longitude < -7.828166) {
					return 57;
				} else if ($longitude < -0.467861) {
					if ($longitude < -5.339639) {
						if ($longitude < -6.933861) {
							if ($this->polygons[790]->contains($latitude, $longitude)) {
								return 57;
							} else {
								return 334;
							}
						} else if ($longitude < -6.877555) {
							return 334;
						} else {
							if ($this->polygons[791]->contains($latitude, $longitude)) {
								return 405;
							} else {
								return 334;
							}
						}
					} else {
						return 334;
					}
				} else if ($latitude < 37.093723) {
					return 380;
				} else {
					return 334;
				}
			} else if ($latitude < 43.791721) {
				if ($latitude < 42.254749) {
					if ($longitude < -6.182694) {
						if ($latitude < 42.145638) {
							if ($longitude < -7.794903) {
								if ($this->polygons[792]->contains($latitude, $longitude)) {
									return 334;
								} else {
									return 57;
								}
							} else if ($latitude < 40.661583) {
								if ($this->polygons[793]->contains($latitude, $longitude)) {
									return 334;
								} else {
									return 57;
								}
							} else {
								if ($this->polygons[794]->contains($latitude, $longitude)) {
									return 57;
								} else {
									return 334;
								}
							}
						} else {
							return 334;
						}
					} else {
						return 334;
					}
				} else if ($longitude < 3.315139) {
					if ($longitude < -8.847362) {
						return 334;
					} else if ($longitude < 1.780389) {
						if ($longitude < -3.533486) {
							return 334;
						} else if ($longitude < -0.876549) {
							if ($this->polygons[795]->contains($latitude, $longitude)) {
								return 297;
							} else {
								return 334;
							}
						} else {
							if ($this->polygons[796]->contains($latitude, $longitude)) {
								return 136;
							}
							if ($this->polygons[797]->contains($latitude, $longitude)) {
								return 297;
							}
							if ($this->polygons[798]->contains($latitude, $longitude)) {
								return 297;
							} else {
								return 334;
							}
						}
					} else {
						if ($this->polygons[799]->contains($latitude, $longitude)) {
							return 334;
						}
						if ($this->polygons[800]->contains($latitude, $longitude)) {
							return 334;
						} else {
							return 297;
						}
					}
				} else {
					return 297;
				}
			} else if ($longitude < -0.597833) {
				return 297;
			} else if ($latitude < 45.349019) {
				if ($latitude < 45.262008) {
					if ($this->polygons[801]->contains($latitude, $longitude)) {
						return 271;
					} else {
						return 297;
					}
				} else {
					if ($this->polygons[802]->contains($latitude, $longitude)) {
						return 271;
					} else {
						return 297;
					}
				}
			} else if ($longitude < 3.262819) {
				return 297;
			} else if ($longitude < 5.193146) {
				return 297;
			} else if ($latitude < 46.454760) {
				if ($this->polygons[803]->contains($latitude, $longitude)) {
					return 172;
				}
				if ($this->polygons[804]->contains($latitude, $longitude)) {
					return 172;
				}
				if ($this->polygons[805]->contains($latitude, $longitude)) {
					return 172;
				}
				if ($this->polygons[806]->contains($latitude, $longitude)) {
					return 271;
				} else {
					return 297;
				}
			} else {
				if ($this->polygons[807]->contains($latitude, $longitude)) {
					return 297;
				}
				if ($this->polygons[808]->contains($latitude, $longitude)) {
					return 297;
				} else {
					return 172;
				}
			}
		} else if ($longitude < -3.590778) {
			if ($longitude < -6.628972) {
				return 285;
			} else if ($latitude < 48.755917) {
				return 297;
			} else if ($latitude < 51.883221) {
				return 303;
			} else if ($longitude < -6.040233) {
				return 285;
			} else {
				return 303;
			}
		} else if ($longitude < 0.689972) {
			if ($latitude < 49.871569) {
				if ($longitude < -2.702667) {
					return 297;
				} else if ($longitude < -2.450417) {
					if ($latitude < 48.654946) {
						return 297;
					} else {
						return 296;
					}
				} else if ($longitude < -2.351278) {
					if ($latitude < 49.044780) {
						return 296;
					} else {
						return 297;
					}
				} else if ($latitude < 49.265057) {
					if ($this->polygons[809]->contains($latitude, $longitude)) {
						return 139;
					} else {
						return 297;
					}
				} else if ($longitude < -2.055792) {
					return 296;
				} else {
					return 297;
				}
			} else {
				return 303;
			}
		} else if ($longitude < 1.759000) {
			if ($latitude < 50.950080) {
				if ($this->polygons[810]->contains($latitude, $longitude)) {
					return 303;
				}
				if ($this->polygons[811]->contains($latitude, $longitude)) {
					return 303;
				} else {
					return 297;
				}
			} else {
				return 303;
			}
		} else if ($latitude < 51.770695) {
			if ($latitude < 51.505444) {
				if ($longitude < 4.441236) {
					if ($latitude < 49.532972) {
						return 297;
					} else if ($longitude < 3.100118) {
						if ($this->polygons[812]->contains($latitude, $longitude)) {
							return 254;
						} else {
							return 297;
						}
					} else if ($latitude < 50.519208) {
						if ($this->polygons[813]->contains($latitude, $longitude)) {
							return 254;
						}
						if ($this->polygons[814]->contains($latitude, $longitude)) {
							return 254;
						} else {
							return 297;
						}
					} else {
						if ($this->polygons[815]->contains($latitude, $longitude)) {
							return 254;
						}
						if ($this->polygons[816]->contains($latitude, $longitude)) {
							return 297;
						}
						if ($this->polygons[817]->contains($latitude, $longitude)) {
							return 297;
						} else {
							return 385;
						}
					}
				} else if ($latitude < 49.532972) {
					if ($this->polygons[818]->contains($latitude, $longitude)) {
						return 6;
					}
					if ($this->polygons[819]->contains($latitude, $longitude)) {
						return 211;
					}
					if ($this->polygons[820]->contains($latitude, $longitude)) {
						return 254;
					} else {
						return 297;
					}
				} else if ($longitude < 5.782354) {
					if ($latitude < 50.519208) {
						if ($this->polygons[821]->contains($latitude, $longitude)) {
							return 211;
						}
						if ($this->polygons[822]->contains($latitude, $longitude)) {
							return 211;
						}
						if ($this->polygons[823]->contains($latitude, $longitude)) {
							return 297;
						}
						if ($this->polygons[824]->contains($latitude, $longitude)) {
							return 297;
						} else {
							return 254;
						}
					} else {
						if ($this->polygons[825]->contains($latitude, $longitude)) {
							return 254;
						} else {
							return 385;
						}
					}
				} else if ($latitude < 50.519208) {
					if ($longitude < 6.452913) {
						if ($latitude < 50.026090) {
							if ($this->polygons[826]->contains($latitude, $longitude)) {
								return 6;
							}
							if ($this->polygons[827]->contains($latitude, $longitude)) {
								return 6;
							}
							if ($this->polygons[828]->contains($latitude, $longitude)) {
								return 254;
							}
							if ($this->polygons[829]->contains($latitude, $longitude)) {
								return 254;
							}
							if ($this->polygons[830]->contains($latitude, $longitude)) {
								return 254;
							}
							if ($this->polygons[831]->contains($latitude, $longitude)) {
								return 297;
							} else {
								return 211;
							}
						} else {
							if ($this->polygons[832]->contains($latitude, $longitude)) {
								return 6;
							}
							if ($this->polygons[833]->contains($latitude, $longitude)) {
								return 211;
							} else {
								return 254;
							}
						}
					} else {
						if ($this->polygons[834]->contains($latitude, $longitude)) {
							return 211;
						} else {
							return 6;
						}
					}
				} else {
					if ($this->polygons[835]->contains($latitude, $longitude)) {
						return 254;
					}
					if ($this->polygons[836]->contains($latitude, $longitude)) {
						return 254;
					}
					if ($this->polygons[837]->contains($latitude, $longitude)) {
						return 385;
					} else {
						return 6;
					}
				}
			} else if ($longitude < 4.356167) {
				return 385;
			} else {
				if ($this->polygons[838]->contains($latitude, $longitude)) {
					return 6;
				} else {
					return 385;
				}
			}
		} else if ($longitude < 5.862928) {
			return 385;
		} else {
			if ($this->polygons[839]->contains($latitude, $longitude)) {
				return 6;
			} else {
				return 385;
			}
		}
	}
	
	protected function call12(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 47.060444) {
			if ($longitude < -66.343018) {
				if ($latitude < 44.229080) {
					return 165;
				} else if ($longitude < -67.827522) {
					if ($longitude < -69.624689) {
						if ($this->polygons[840]->contains($latitude, $longitude)) {
							return 20;
						} else {
							return 165;
						}
					} else {
						return 165;
					}
				} else if ($longitude < -66.941940) {
					if ($latitude < 44.620262) {
						return 165;
					} else if ($latitude < 45.028847) {
						if ($this->polygons[841]->contains($latitude, $longitude)) {
							return 77;
						}
						if ($this->polygons[842]->contains($latitude, $longitude)) {
							return 77;
						} else {
							return 165;
						}
					} else if ($longitude < -67.090355) {
						if ($this->polygons[843]->contains($latitude, $longitude)) {
							return 77;
						} else {
							return 165;
						}
					} else {
						return 77;
					}
				} else if ($latitude < 44.283012) {
					return 118;
				} else {
					return 77;
				}
			} else if ($latitude < 44.991669) {
				if ($latitude < 32.393833) {
					return 256;
				} else {
					return 118;
				}
			} else if ($longitude < -61.939835) {
				if ($longitude < -63.777946) {
					if ($latitude < 46.279369) {
						if ($latitude < 46.006592) {
							if ($longitude < -64.992493) {
								if ($latitude < 45.085256) {
									return 118;
								} else {
									if ($this->polygons[844]->contains($latitude, $longitude)) {
										return 118;
									} else {
										return 77;
									}
								}
							} else if ($latitude < 45.387333) {
								return 118;
							} else {
								if ($this->polygons[845]->contains($latitude, $longitude)) {
									return 77;
								} else {
									return 118;
								}
							}
						} else {
							return 77;
						}
					} else if ($longitude < -64.516182) {
						return 77;
					} else {
						return 118;
					}
				} else {
					return 118;
				}
			} else if ($longitude < -60.897530) {
				return 118;
			} else if ($latitude < 45.826886) {
				if ($longitude < -60.766365) {
					return 118;
				} else {
					if ($this->polygons[846]->contains($latitude, $longitude)) {
						return 81;
					} else {
						return 118;
					}
				}
			} else if ($longitude < -60.311749) {
				if ($this->polygons[847]->contains($latitude, $longitude)) {
					return 81;
				}
				if ($this->polygons[848]->contains($latitude, $longitude)) {
					return 81;
				} else {
					return 118;
				}
			} else {
				return 81;
			}
		} else if ($longitude < -59.584435) {
			if ($latitude < 50.081348) {
				if ($latitude < 47.639160) {
					if ($longitude < -64.803614) {
						if ($longitude < -67.786521) {
							if ($this->polygons[849]->contains($latitude, $longitude)) {
								return 20;
							}
							if ($this->polygons[850]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 77;
							}
						} else {
							return 77;
						}
					} else {
						return 118;
					}
				} else if ($latitude < 48.065315) {
					if ($longitude < -66.119873) {
						if ($longitude < -66.526045) {
							if ($longitude < -69.406061) {
								return 20;
							} else {
								if ($this->polygons[851]->contains($latitude, $longitude)) {
									return 77;
								}
								if ($this->polygons[852]->contains($latitude, $longitude)) {
									return 77;
								} else {
									return 20;
								}
							}
						} else if ($longitude < -66.291616) {
							if ($this->polygons[853]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 77;
							}
						} else {
							return 77;
						}
					} else if ($longitude < -64.751419) {
						if ($latitude < 47.945091) {
							return 77;
						} else {
							return 20;
						}
					} else if ($longitude < -64.470963) {
						return 77;
					} else {
						return 118;
					}
				} else {
					return 20;
				}
			} else if ($longitude < -63.049610) {
				if ($latitude < 50.567280) {
					return 20;
				} else if ($longitude < -66.638208) {
					if ($this->polygons[854]->contains($latitude, $longitude)) {
						return 182;
					} else {
						return 20;
					}
				} else if ($longitude < -64.843909) {
					if ($latitude < 51.732883) {
						if ($this->polygons[855]->contains($latitude, $longitude)) {
							return 182;
						} else {
							return 20;
						}
					} else if ($longitude < -65.741058) {
						if ($this->polygons[856]->contains($latitude, $longitude)) {
							return 182;
						} else {
							return 20;
						}
					} else {
						if ($this->polygons[857]->contains($latitude, $longitude)) {
							return 182;
						} else {
							return 20;
						}
					}
				} else if ($latitude < 51.732883) {
					if ($this->polygons[858]->contains($latitude, $longitude)) {
						return 182;
					} else {
						return 20;
					}
				} else {
					if ($this->polygons[859]->contains($latitude, $longitude)) {
						return 182;
					} else {
						return 20;
					}
				}
			} else if ($latitude < 50.218616) {
				if ($longitude < -61.578325) {
					if ($longitude < -62.098534) {
						return 20;
					} else {
						if ($this->polygons[860]->contains($latitude, $longitude)) {
							return 243;
						}
						if ($this->polygons[861]->contains($latitude, $longitude)) {
							return 243;
						} else {
							return 20;
						}
					}
				} else {
					return 243;
				}
			} else if ($latitude < 50.348381) {
				if ($longitude < -61.174600) {
					if ($latitude < 50.275000) {
						if ($longitude < -62.354403) {
							return 20;
						} else {
							if ($this->polygons[862]->contains($latitude, $longitude)) {
								return 243;
							} else {
								return 20;
							}
						}
					} else {
						if ($this->polygons[863]->contains($latitude, $longitude)) {
							return 243;
						} else {
							return 20;
						}
					}
				} else {
					return 243;
				}
			} else if ($latitude < 50.675139) {
				if ($this->polygons[864]->contains($latitude, $longitude)) {
					return 20;
				} else {
					return 243;
				}
			} else {
				if ($this->polygons[865]->contains($latitude, $longitude)) {
					return 182;
				} else {
					return 20;
				}
			}
		} else if ($latitude < 50.841103) {
			if ($longitude < -58.832348) {
				if ($latitude < 50.645809) {
					if ($latitude < 48.753311) {
						return 290;
					} else {
						return 243;
					}
				} else if ($longitude < -59.432320) {
					if ($this->polygons[866]->contains($latitude, $longitude)) {
						return 243;
					} else {
						return 20;
					}
				} else {
					return 243;
				}
			} else {
				return 290;
			}
		} else if ($longitude < -58.273293) {
			if ($latitude < 51.162445) {
				if ($longitude < -59.102900) {
					if ($this->polygons[867]->contains($latitude, $longitude)) {
						return 20;
					} else {
						return 243;
					}
				} else {
					return 243;
				}
			} else if ($longitude < -58.370186) {
				if ($latitude < 51.204712) {
					if ($longitude < -58.864370) {
						if ($this->polygons[868]->contains($latitude, $longitude)) {
							return 243;
						} else {
							return 20;
						}
					} else {
						return 243;
					}
				} else if ($latitude < 51.457100) {
					if ($longitude < -58.647963) {
						if ($this->polygons[869]->contains($latitude, $longitude)) {
							return 243;
						}
						if ($this->polygons[870]->contains($latitude, $longitude)) {
							return 243;
						}
						if ($this->polygons[871]->contains($latitude, $longitude)) {
							return 243;
						} else {
							return 20;
						}
					} else if ($latitude < 51.296436) {
						return 243;
					} else if ($longitude < -58.432500) {
						if ($this->polygons[872]->contains($latitude, $longitude)) {
							return 20;
						} else {
							return 243;
						}
					} else {
						if ($this->polygons[873]->contains($latitude, $longitude)) {
							return 20;
						} else {
							return 243;
						}
					}
				} else {
					if ($this->polygons[874]->contains($latitude, $longitude)) {
						return 182;
					} else {
						return 20;
					}
				}
			} else if ($latitude < 51.376093) {
				return 243;
			} else if ($latitude < 51.456603) {
				if ($this->polygons[875]->contains($latitude, $longitude)) {
					return 20;
				} else {
					return 243;
				}
			} else {
				if ($this->polygons[876]->contains($latitude, $longitude)) {
					return 182;
				} else {
					return 20;
				}
			}
		} else if ($latitude < 51.395161) {
			if ($longitude < -57.116951) {
				return 243;
			} else {
				return 290;
			}
		} else if ($latitude < 51.401176) {
			return 243;
		} else if ($longitude < -57.687763) {
			if ($latitude < 51.446266) {
				return 243;
			} else if ($latitude < 51.588950) {
				if ($this->polygons[877]->contains($latitude, $longitude)) {
					return 20;
				} else {
					return 243;
				}
			} else {
				if ($this->polygons[878]->contains($latitude, $longitude)) {
					return 182;
				} else {
					return 20;
				}
			}
		} else if ($latitude < 51.465385) {
			if ($longitude < -57.257164) {
				return 243;
			} else if ($longitude < -57.096817) {
				if ($this->polygons[879]->contains($latitude, $longitude)) {
					return 290;
				} else {
					return 243;
				}
			} else {
				return 290;
			}
		} else {
			if ($this->polygons[880]->contains($latitude, $longitude)) {
				return 20;
			}
			if ($this->polygons[881]->contains($latitude, $longitude)) {
				return 182;
			}
			if ($this->polygons[882]->contains($latitude, $longitude)) {
				return 290;
			} else {
				return 243;
			}
		}
	}
	
	protected function call13(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -79.668747) {
			if ($longitude < -92.267200) {
				if ($longitude < -123.252068) {
					if ($latitude < 51.088554) {
						if ($latitude < 48.589012) {
							if ($latitude < 26.074541) {
								return 244;
							} else if ($latitude < 46.253250) {
								if ($longitude < -177.319321) {
									return 196;
								} else {
									return 39;
								}
							} else if ($latitude < 46.976349) {
								return 39;
							} else if ($latitude < 48.394943) {
								if ($this->polygons[883]->contains($latitude, $longitude)) {
									return 45;
								} else {
									return 39;
								}
							} else {
								return 45;
							}
						} else {
							return 45;
						}
					} else if ($longitude < -131.767334) {
						if ($longitude < -169.674606) {
							return 158;
						} else if ($longitude < -168.881073) {
							return 134;
						} else {
							return 45;
						}
					} else {
						return 45;
					}
				} else if ($longitude < -111.000702) {
					return $this->call8($latitude, $longitude);
				} else {
					return $this->call9($latitude, $longitude);
				}
			} else if ($latitude < 29.388796) {
				if ($latitude < 24.771822) {
					if ($latitude < 22.785154) {
						if ($longitude < -86.703392) {
							if ($longitude < -87.539192) {
								if ($longitude < -89.633240) {
									return 32;
								} else {
									if ($this->polygons[884]->contains($latitude, $longitude)) {
										return 401;
									} else {
										return 32;
									}
								}
							} else {
								return 401;
							}
						} else {
							return 376;
						}
					} else if ($latitude < 23.239244) {
						return 376;
					} else if ($latitude < 24.000000) {
						if ($longitude < -80.865501) {
							return 376;
						} else {
							return 281;
						}
					} else {
						return 165;
					}
				} else if ($longitude < -88.995483) {
					return 160;
				} else {
					return 165;
				}
			} else {
				return $this->call10($latitude, $longitude);
			}
		} else if ($longitude < -69.652000) {
			if ($latitude < 25.591423) {
				if ($latitude < 23.625103) {
					if ($longitude < -77.591835) {
						return 376;
					} else if ($latitude < 22.128616) {
						if ($longitude < -72.914970) {
							if ($longitude < -74.517632) {
								return 376;
							} else {
								return 281;
							}
						} else {
							return 103;
						}
					} else {
						return 281;
					}
				} else {
					return 281;
				}
			} else if ($latitude < 37.677757) {
				if ($latitude < 27.217571) {
					return 281;
				} else if ($latitude < 27.232027) {
					return 281;
				} else {
					return 165;
				}
			} else if ($latitude < 42.831356) {
				return 165;
			} else if ($latitude < 47.366436) {
				if ($latitude < 44.056385) {
					if ($longitude < -76.605095) {
						if ($latitude < 43.433300) {
							if ($this->polygons[885]->contains($latitude, $longitude)) {
								return 238;
							} else {
								return 165;
							}
						} else {
							return 238;
						}
					} else {
						return 165;
					}
				} else if ($latitude < 44.366348) {
					if ($longitude < -76.498672) {
						return 238;
					} else if ($latitude < 44.198559) {
						if ($longitude < -76.328499) {
							if ($this->polygons[886]->contains($latitude, $longitude)) {
								return 165;
							} else {
								return 238;
							}
						} else {
							return 165;
						}
					} else if ($longitude < -76.185989) {
						if ($latitude < 44.210916) {
							if ($longitude < -76.250479) {
								return 165;
							} else {
								return 238;
							}
						} else {
							return 238;
						}
					} else if ($latitude < 44.310806) {
						return 165;
					} else {
						if ($this->polygons[887]->contains($latitude, $longitude)) {
							return 238;
						}
						if ($this->polygons[888]->contains($latitude, $longitude)) {
							return 238;
						} else {
							return 165;
						}
					}
				} else if ($longitude < -74.322990) {
					if ($latitude < 44.438393) {
						if ($longitude < -75.882416) {
							if ($latitude < 44.368198) {
								if ($longitude < -75.948382) {
									return 165;
								} else {
									return 238;
								}
							} else {
								return 238;
							}
						} else if ($longitude < -75.846375) {
							if ($latitude < 44.395919) {
								return 165;
							} else {
								return 238;
							}
						} else {
							return 165;
						}
					} else if ($latitude < 45.189449) {
						if ($this->polygons[889]->contains($latitude, $longitude)) {
							return 20;
						}
						if ($this->polygons[890]->contains($latitude, $longitude)) {
							return 238;
						} else {
							return 165;
						}
					} else {
						if ($this->polygons[891]->contains($latitude, $longitude)) {
							return 20;
						} else {
							return 238;
						}
					}
				} else if ($longitude < -70.717628) {
					if ($latitude < 45.422798) {
						if ($longitude < -70.752113) {
							if ($this->polygons[892]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 165;
							}
						} else {
							if ($this->polygons[893]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 165;
							}
						}
					} else {
						return 20;
					}
				} else if ($latitude < 47.033193) {
					if ($this->polygons[894]->contains($latitude, $longitude)) {
						return 165;
					} else {
						return 20;
					}
				} else {
					return 20;
				}
			} else if ($latitude < 52.114346) {
				if ($longitude < -78.852051) {
					if ($latitude < 51.836979) {
						if ($longitude < -79.051132) {
							if ($latitude < 51.665241) {
								if ($longitude < -79.509407) {
									if ($latitude < 51.471649) {
										if ($latitude < 47.537216) {
											if ($this->polygons[895]->contains($latitude, $longitude)) {
												return 20;
											} else {
												return 238;
											}
										} else {
											if ($this->polygons[896]->contains($latitude, $longitude)) {
												return 20;
											} else {
												return 238;
											}
										}
									} else {
										return 20;
									}
								} else {
									if ($this->polygons[897]->contains($latitude, $longitude)) {
										return 137;
									} else {
										return 20;
									}
								}
							} else {
								return 137;
							}
						} else {
							return 20;
						}
					} else if ($longitude < -78.941681) {
						return 137;
					} else if ($latitude < 51.943222) {
						return 20;
					} else {
						return 137;
					}
				} else {
					return 20;
				}
			} else if ($longitude < -78.946602) {
				return 137;
			} else if ($latitude < 52.447598) {
				if ($longitude < -78.703720) {
					return 137;
				} else if ($latitude < 52.395023) {
					if ($this->polygons[898]->contains($latitude, $longitude)) {
						return 137;
					} else {
						return 20;
					}
				} else if ($longitude < -78.558243) {
					return 20;
				} else {
					return 137;
				}
			} else if ($longitude < -78.775826) {
				if ($latitude < 52.728059) {
					return 20;
				} else if ($latitude < 52.776230) {
					if ($longitude < -78.855316) {
						if ($latitude < 52.752114) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[899]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else {
					return 20;
				}
			} else if ($longitude < -78.753601) {
				if ($latitude < 52.665272) {
					if ($latitude < 52.558494) {
						return 20;
					} else {
						if ($this->polygons[900]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else {
					return 20;
				}
			} else {
				if ($this->polygons[901]->contains($latitude, $longitude)) {
					return 137;
				} else {
					return 20;
				}
			}
		} else if ($longitude < -56.718918) {
			return $this->call12($latitude, $longitude);
		} else if ($longitude < -17.721861) {
			if ($latitude < 47.258224) {
				if ($latitude < 39.531334) {
					if ($longitude < -25.015833) {
						return 283;
					} else {
						return 264;
					}
				} else if ($longitude < -54.807180) {
					if ($longitude < -56.166119) {
						return 92;
					} else {
						return 290;
					}
				} else if ($longitude < -52.813107) {
					return 290;
				} else {
					return 283;
				}
			} else {
				return 290;
			}
		} else {
			return $this->call11($latitude, $longitude);
		}
	}
	
	protected function call14(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -131.905807) {
			if ($latitude < 56.000004) {
				if ($latitude < 54.686905) {
					if ($latitude < 54.256939) {
						return 45;
					} else {
						return 23;
					}
				} else {
					return 23;
				}
			} else if ($latitude < 56.786789) {
				return 23;
			} else if ($latitude < 57.121727) {
				if ($longitude < -133.828668) {
					if ($longitude < -134.365097) {
						if ($longitude < -134.656831) {
							return 23;
						} else if ($latitude < 56.935338) {
							return 23;
						} else {
							return 359;
						}
					} else {
						return 23;
					}
				} else if ($longitude < -132.799744) {
					return 23;
				} else {
					if ($this->polygons[902]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 23;
					}
				}
			} else if ($latitude < 57.559906) {
				if ($longitude < -133.791367) {
					return 359;
				} else {
					if ($this->polygons[903]->contains($latitude, $longitude)) {
						return 23;
					}
					if ($this->polygons[904]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 359;
					}
				}
			} else if ($latitude < 57.895130) {
				if ($longitude < -133.146686) {
					return 359;
				} else if ($longitude < -133.143158) {
					return 359;
				} else {
					if ($this->polygons[905]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 359;
					}
				}
			} else if ($latitude < 60.000000) {
				if ($longitude < -133.977960) {
					if ($latitude < 58.412121) {
						return 359;
					} else {
						if ($this->polygons[906]->contains($latitude, $longitude)) {
							return 45;
						} else {
							return 359;
						}
					}
				} else {
					if ($this->polygons[907]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 359;
					}
				}
			} else {
				return 324;
			}
		} else if ($latitude < 54.191448) {
			if ($longitude < -127.544479) {
				return 45;
			} else if ($longitude < -118.607060) {
				if ($this->polygons[908]->contains($latitude, $longitude)) {
					return 116;
				}
				if ($this->polygons[909]->contains($latitude, $longitude)) {
					return 227;
				} else {
					return 45;
				}
			} else if ($longitude < -118.465407) {
				if ($this->polygons[910]->contains($latitude, $longitude)) {
					return 45;
				} else {
					return 227;
				}
			} else {
				if ($this->polygons[911]->contains($latitude, $longitude)) {
					return 308;
				}
				if ($this->polygons[912]->contains($latitude, $longitude)) {
					return 308;
				} else {
					return 227;
				}
			}
		} else if ($longitude < -130.888184) {
			if ($latitude < 55.457150) {
				if ($longitude < -131.176437) {
					if ($latitude < 55.110420) {
						if ($longitude < -131.351639) {
							if ($latitude < 54.977901) {
								return 23;
							} else {
								if ($this->polygons[913]->contains($latitude, $longitude)) {
									return 23;
								} else {
									return 195;
								}
							}
						} else {
							return 23;
						}
					} else if ($latitude < 55.283344) {
						if ($longitude < -131.628221) {
							return 23;
						} else if ($longitude < -131.328003) {
							if ($latitude < 55.190212) {
								return 195;
							} else {
								if ($this->polygons[914]->contains($latitude, $longitude)) {
									return 195;
								} else {
									return 23;
								}
							}
						} else {
							return 23;
						}
					} else {
						return 23;
					}
				} else if ($latitude < 54.626297) {
					return 45;
				} else {
					return 23;
				}
			} else if ($latitude < 55.990891) {
				return 23;
			} else if ($latitude < 60.000000) {
				if ($this->polygons[915]->contains($latitude, $longitude)) {
					return 45;
				} else {
					return 23;
				}
			} else {
				return 324;
			}
		} else if ($longitude < -130.147552) {
			if ($latitude < 54.663948) {
				return 45;
			} else if ($latitude < 55.027081) {
				if ($longitude < -130.246087) {
					if ($longitude < -130.681854) {
						return 23;
					} else if ($longitude < -130.429123) {
						if ($latitude < 54.759205) {
							if ($this->polygons[916]->contains($latitude, $longitude)) {
								return 23;
							} else {
								return 45;
							}
						} else if ($longitude < -130.630005) {
							return 23;
						} else if ($latitude < 54.770226) {
							return 45;
						} else {
							if ($this->polygons[917]->contains($latitude, $longitude)) {
								return 45;
							}
							if ($this->polygons[918]->contains($latitude, $longitude)) {
								return 45;
							} else {
								return 23;
							}
						}
					} else if ($latitude < 54.778793) {
						return 45;
					} else {
						if ($this->polygons[919]->contains($latitude, $longitude)) {
							return 23;
						} else {
							return 45;
						}
					}
				} else {
					return 45;
				}
			} else if ($latitude < 60.000000) {
				if ($latitude < 55.116245) {
					if ($longitude < -130.180752) {
						return 23;
					} else {
						return 45;
					}
				} else {
					if ($this->polygons[920]->contains($latitude, $longitude)) {
						return 45;
					} else {
						return 23;
					}
				}
			} else {
				return 324;
			}
		} else if ($longitude < -129.451582) {
			if ($latitude < 55.063297) {
				return 45;
			} else if ($latitude < 55.692310) {
				if ($longitude < -129.989868) {
					if ($latitude < 55.250920) {
						if ($this->polygons[921]->contains($latitude, $longitude)) {
							return 23;
						} else {
							return 45;
						}
					} else {
						if ($this->polygons[922]->contains($latitude, $longitude)) {
							return 23;
						} else {
							return 45;
						}
					}
				} else {
					return 45;
				}
			} else if ($latitude < 60.000000) {
				if ($this->polygons[923]->contains($latitude, $longitude)) {
					return 23;
				} else {
					return 45;
				}
			} else {
				return 324;
			}
		} else if ($latitude < 60.000000) {
			if ($longitude < -129.253204) {
				return 45;
			} else if ($longitude < -110.000000) {
				if ($longitude < -120.000000) {
					if ($longitude < -124.626602) {
						return 45;
					} else if ($latitude < 57.095724) {
						if ($longitude < -122.313301) {
							if ($latitude < 55.643586) {
								if ($this->polygons[924]->contains($latitude, $longitude)) {
									return 116;
								} else {
									return 45;
								}
							} else {
								if ($this->polygons[925]->contains($latitude, $longitude)) {
									return 116;
								} else {
									return 45;
								}
							}
						} else if ($latitude < 55.643586) {
							if ($this->polygons[926]->contains($latitude, $longitude)) {
								return 45;
							} else {
								return 116;
							}
						} else {
							if ($this->polygons[927]->contains($latitude, $longitude)) {
								return 45;
							} else {
								return 116;
							}
						}
					} else {
						if ($this->polygons[928]->contains($latitude, $longitude)) {
							return 116;
						}
						if ($this->polygons[929]->contains($latitude, $longitude)) {
							return 116;
						}
						if ($this->polygons[930]->contains($latitude, $longitude)) {
							return 116;
						} else {
							return 45;
						}
					}
				} else {
					return 227;
				}
			} else {
				return 308;
			}
		} else {
			if ($this->polygons[931]->contains($latitude, $longitude)) {
				return 324;
			} else {
				return 142;
			}
		}
	}
	
	protected function call15(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -123.791763) {
			if ($longitude < -141.000000) {
				if ($longitude < -162.000000) {
					if ($longitude < -168.892441) {
						if ($longitude < -174.074051) {
							return 365;
						} else if ($latitude < 64.842125) {
							if ($latitude < 63.787884) {
								return 134;
							} else {
								return 365;
							}
						} else if ($longitude < -169.002365) {
							return 365;
						} else {
							return 134;
						}
					} else {
						return 134;
					}
				} else {
					return 370;
				}
			} else if ($latitude < 69.665329) {
				if ($longitude < -135.200684) {
					if ($latitude < 69.206284) {
						if ($latitude < 68.963966) {
							if ($longitude < -136.526718) {
								if ($longitude < -139.361644) {
									if ($this->polygons[932]->contains($latitude, $longitude)) {
										return 330;
									} else {
										return 324;
									}
								} else {
									return 324;
								}
							} else {
								if ($this->polygons[933]->contains($latitude, $longitude)) {
									return 324;
								} else {
									return 142;
								}
							}
						} else if ($longitude < -137.210114) {
							return 324;
						} else {
							return 142;
						}
					} else if ($longitude < -138.279434) {
						return 324;
					} else {
						return 142;
					}
				} else if ($latitude < 68.416974) {
					if ($latitude < 67.004977) {
						if ($longitude < -129.496223) {
							if ($latitude < 63.808471) {
								if ($this->polygons[934]->contains($latitude, $longitude)) {
									return 142;
								}
								if ($this->polygons[935]->contains($latitude, $longitude)) {
									return 142;
								} else {
									return 324;
								}
							} else if ($longitude < -132.348454) {
								if ($latitude < 65.406724) {
									if ($this->polygons[936]->contains($latitude, $longitude)) {
										return 142;
									}
									if ($this->polygons[937]->contains($latitude, $longitude)) {
										return 142;
									} else {
										return 324;
									}
								} else {
									if ($this->polygons[938]->contains($latitude, $longitude)) {
										return 324;
									} else {
										return 142;
									}
								}
							} else {
								if ($this->polygons[939]->contains($latitude, $longitude)) {
									return 324;
								}
								if ($this->polygons[940]->contains($latitude, $longitude)) {
									return 324;
								}
								if ($this->polygons[941]->contains($latitude, $longitude)) {
									return 324;
								}
								if ($this->polygons[942]->contains($latitude, $longitude)) {
									return 324;
								} else {
									return 142;
								}
							}
						} else if ($latitude < 63.808471) {
							if ($longitude < -126.643993) {
								if ($this->polygons[943]->contains($latitude, $longitude)) {
									return 324;
								}
								if ($this->polygons[944]->contains($latitude, $longitude)) {
									return 324;
								} else {
									return 142;
								}
							} else {
								if ($this->polygons[945]->contains($latitude, $longitude)) {
									return 324;
								} else {
									return 142;
								}
							}
						} else {
							return 142;
						}
					} else {
						if ($this->polygons[946]->contains($latitude, $longitude)) {
							return 142;
						}
						if ($this->polygons[947]->contains($latitude, $longitude)) {
							return 142;
						} else {
							return 56;
						}
					}
				} else {
					return 142;
				}
			} else {
				return 142;
			}
		} else if ($latitude < 68.452187) {
			if ($longitude < -109.338089) {
				if ($longitude < -113.141373) {
					if ($longitude < -114.096313) {
						if ($longitude < -114.526794) {
							if ($longitude < -114.826683) {
								if ($longitude < -114.954285) {
									if ($this->polygons[948]->contains($latitude, $longitude)) {
										return 142;
									} else {
										return 108;
									}
								} else if ($latitude < 66.009722) {
									if ($this->polygons[949]->contains($latitude, $longitude)) {
										return 108;
									} else {
										return 142;
									}
								} else {
									return 108;
								}
							} else if ($latitude < 65.964136) {
								if ($this->polygons[950]->contains($latitude, $longitude)) {
									return 108;
								} else {
									return 142;
								}
							} else {
								return 108;
							}
						} else if ($latitude < 65.857001) {
							if ($this->polygons[951]->contains($latitude, $longitude)) {
								return 108;
							} else {
								return 142;
							}
						} else {
							return 108;
						}
					} else if ($latitude < 65.703211) {
						if ($this->polygons[952]->contains($latitude, $longitude)) {
							return 108;
						} else {
							return 142;
						}
					} else {
						return 108;
					}
				} else if ($latitude < 65.481310) {
					if ($this->polygons[953]->contains($latitude, $longitude)) {
						return 108;
					} else {
						return 142;
					}
				} else {
					return 108;
				}
			} else if ($latitude < 66.829147) {
				if ($latitude < 64.649325) {
					if ($this->polygons[954]->contains($latitude, $longitude)) {
						return 108;
					} else {
						return 142;
					}
				} else {
					return 108;
				}
			} else {
				return 108;
			}
		} else if ($latitude < 72.171257) {
			if ($latitude < 70.471046) {
				if ($longitude < -113.461769) {
					if ($longitude < -113.989479) {
						if ($latitude < 68.929214) {
							if ($longitude < -121.789716) {
								if ($this->polygons[955]->contains($latitude, $longitude)) {
									return 108;
								} else {
									return 142;
								}
							} else {
								return 108;
							}
						} else if ($longitude < -117.239929) {
							if ($latitude < 69.666817) {
								if ($this->polygons[956]->contains($latitude, $longitude)) {
									return 108;
								} else {
									return 142;
								}
							} else {
								return 142;
							}
						} else if ($latitude < 69.653069) {
							return 108;
						} else {
							if ($this->polygons[957]->contains($latitude, $longitude)) {
								return 108;
							} else {
								return 142;
							}
						}
					} else if ($latitude < 69.212112) {
						return 108;
					} else {
						if ($this->polygons[958]->contains($latitude, $longitude)) {
							return 142;
						} else {
							return 108;
						}
					}
				} else if ($latitude < 68.873958) {
					return 108;
				} else if ($longitude < -112.620987) {
					if ($latitude < 70.034142) {
						if ($this->polygons[959]->contains($latitude, $longitude)) {
							return 142;
						} else {
							return 108;
						}
					} else {
						return 142;
					}
				} else if ($longitude < -112.567856) {
					if ($latitude < 69.785159) {
						if ($this->polygons[960]->contains($latitude, $longitude)) {
							return 142;
						} else {
							return 108;
						}
					} else {
						return 142;
					}
				} else {
					if ($this->polygons[961]->contains($latitude, $longitude)) {
						return 108;
					} else {
						return 142;
					}
				}
			} else if ($longitude < -109.971375) {
				return 142;
			} else {
				return 108;
			}
		} else if ($longitude < -109.972572) {
			return 142;
		} else if ($longitude < -109.971375) {
			return 142;
		} else {
			return 108;
		}
	}
	
	protected function call16(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 57.616158) {
			if ($latitude < 56.072720) {
				if ($latitude < 54.708080) {
					if ($latitude < 53.544559) {
						if ($longitude < -79.220665) {
							return 137;
						} else if ($latitude < 53.295464) {
							if ($longitude < -79.004341) {
								return 137;
							} else if ($longitude < -78.951660) {
								if ($latitude < 53.037329) {
									if ($latitude < 52.940544) {
										return 137;
									} else {
										return 20;
									}
								} else if ($longitude < -78.976112) {
									if ($latitude < 53.180402) {
										return 20;
									} else {
										return 137;
									}
								} else {
									return 20;
								}
							} else if ($longitude < -78.911201) {
								if ($latitude < 52.978027) {
									if ($latitude < 52.914364) {
										return 20;
									} else {
										return 137;
									}
								} else {
									return 20;
								}
							} else {
								if ($this->polygons[962]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							}
						} else if ($latitude < 53.413036) {
							if ($longitude < -79.010345) {
								if ($latitude < 53.361423) {
									return 137;
								} else {
									if ($this->polygons[963]->contains($latitude, $longitude)) {
										return 137;
									} else {
										return 20;
									}
								}
							} else if ($longitude < -78.996750) {
								return 137;
							} else if ($longitude < -78.969765) {
								if ($latitude < 53.309853) {
									return 137;
								} else {
									return 20;
								}
							} else {
								if ($this->polygons[964]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							}
						} else if ($longitude < -79.115227) {
							if ($latitude < 53.459244) {
								return 20;
							} else {
								return 137;
							}
						} else if ($latitude < 53.434547) {
							if ($longitude < -79.082458) {
								return 137;
							} else {
								return 20;
							}
						} else {
							if ($this->polygons[965]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 54.116554) {
						if ($longitude < -79.182358) {
							return 137;
						} else if ($latitude < 53.833500) {
							if ($longitude < -79.100655) {
								return 137;
							} else if ($latitude < 53.552872) {
								return 20;
							} else {
								if ($this->polygons[966]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							}
						} else if ($longitude < -79.174927) {
							return 137;
						} else if ($latitude < 53.874668) {
							if ($longitude < -79.087925) {
								return 20;
							} else {
								return 137;
							}
						} else {
							if ($this->polygons[967]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 54.247169) {
						if ($longitude < -79.412979) {
							return 137;
						} else if ($longitude < -79.237053) {
							if ($latitude < 54.174984) {
								if ($this->polygons[968]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							} else {
								return 20;
							}
						} else {
							if ($this->polygons[969]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 54.416172) {
						if ($longitude < -79.520157) {
							return 137;
						} else {
							if ($this->polygons[970]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 54.467125) {
						if ($longitude < -79.543602) {
							return 20;
						} else {
							return 137;
						}
					} else if ($longitude < -79.566742) {
						if ($latitude < 54.554594) {
							return 20;
						} else if ($latitude < 54.600740) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[971]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else if ($latitude < 55.653851) {
					if ($latitude < 54.798294) {
						if ($longitude < -79.658430) {
							return 137;
						} else if ($longitude < -79.557785) {
							if ($latitude < 54.722511) {
								if ($this->polygons[972]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							} else {
								return 137;
							}
						} else if ($latitude < 54.768631) {
							if ($this->polygons[973]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 137;
							}
						} else if ($longitude < -79.384746) {
							return 20;
						} else {
							return 137;
						}
					} else if ($longitude < -79.441200) {
						return 137;
					} else if ($longitude < -77.706451) {
						if ($latitude < 55.322748) {
							if ($this->polygons[974]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						} else {
							return 137;
						}
					} else if ($longitude < -77.671234) {
						if ($latitude < 55.371513) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[975]->contains($latitude, $longitude)) {
							return 20;
						} else {
							return 137;
						}
					}
				} else if ($longitude < -78.680573) {
					return 137;
				} else {
					if ($this->polygons[976]->contains($latitude, $longitude)) {
						return 137;
					} else {
						return 20;
					}
				}
			} else if ($longitude < -76.914421) {
				return 137;
			} else if ($latitude < 56.715569) {
				if ($longitude < -76.714203) {
					return 137;
				} else if ($latitude < 56.383667) {
					if ($latitude < 56.352753) {
						if ($this->polygons[977]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					} else if ($longitude < -76.608892) {
						return 20;
					} else {
						return 137;
					}
				} else if ($longitude < -76.620346) {
					return 137;
				} else {
					return 20;
				}
			} else if ($latitude < 57.060780) {
				if ($longitude < -76.620895) {
					return 137;
				} else {
					return 20;
				}
			} else if ($latitude < 57.274315) {
				if ($longitude < -76.650459) {
					return 137;
				} else {
					return 20;
				}
			} else if ($longitude < -76.866554) {
				if ($latitude < 57.600049) {
					return 20;
				} else {
					return 137;
				}
			} else {
				if ($this->polygons[978]->contains($latitude, $longitude)) {
					return 137;
				} else {
					return 20;
				}
			}
		} else if ($latitude < 60.192261) {
			if ($longitude < -78.628052) {
				return 137;
			} else if ($latitude < 58.644310) {
				if ($latitude < 58.337955) {
					if ($latitude < 58.169769) {
						if ($longitude < -78.124222) {
							return 137;
						} else if ($longitude < -77.527397) {
							if ($this->polygons[979]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 137;
							}
						} else if ($longitude < -77.205544) {
							if ($latitude < 58.004467) {
								return 20;
							} else {
								if ($this->polygons[980]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							}
						} else {
							if ($this->polygons[981]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($longitude < -77.701317) {
						if ($latitude < 58.276955) {
							return 137;
						} else {
							if ($this->polygons[982]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 137;
							}
						}
					} else {
						if ($this->polygons[983]->contains($latitude, $longitude)) {
							return 137;
						}
						if ($this->polygons[984]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else if ($longitude < -78.495689) {
					if ($longitude < -78.583992) {
						return 137;
					} else if ($latitude < 58.579838) {
						return 137;
					} else {
						if ($this->polygons[985]->contains($latitude, $longitude)) {
							return 20;
						} else {
							return 137;
						}
					}
				} else if ($longitude < -78.293175) {
					if ($latitude < 58.508587) {
						return 137;
					} else {
						return 20;
					}
				} else if ($latitude < 58.369335) {
					if ($this->polygons[986]->contains($latitude, $longitude)) {
						return 137;
					} else {
						return 20;
					}
				} else if ($latitude < 58.411152) {
					if ($longitude < -78.077976) {
						return 20;
					} else {
						return 137;
					}
				} else {
					if ($this->polygons[987]->contains($latitude, $longitude)) {
						return 137;
					} else {
						return 20;
					}
				}
			} else if ($latitude < 59.110462) {
				if ($longitude < -78.562523) {
					if ($latitude < 58.697945) {
						return 20;
					} else if ($latitude < 58.829868) {
						if ($longitude < -78.599251) {
							return 137;
						} else if ($latitude < 58.795967) {
							if ($this->polygons[988]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[989]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else if ($longitude < -78.392517) {
					if ($latitude < 58.776039) {
						if ($longitude < -78.530769) {
							if ($latitude < 58.697453) {
								return 20;
							} else {
								if ($this->polygons[990]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							}
						} else {
							return 20;
						}
					} else {
						if ($this->polygons[991]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else if ($longitude < -78.187141) {
					if ($longitude < -78.310013) {
						if ($latitude < 58.976772) {
							return 20;
						} else if ($latitude < 59.015853) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[992]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else {
					return 20;
				}
			} else if ($longitude < -77.730873) {
				if ($latitude < 59.389897) {
					if ($this->polygons[993]->contains($latitude, $longitude)) {
						return 137;
					} else {
						return 20;
					}
				} else if ($latitude < 59.555698) {
					if ($this->polygons[994]->contains($latitude, $longitude)) {
						return 137;
					} else {
						return 20;
					}
				} else if ($latitude < 59.722752) {
					return 20;
				} else {
					return 137;
				}
			} else if ($longitude < -77.626198) {
				if ($latitude < 59.736664) {
					if ($latitude < 59.691815) {
						return 20;
					} else {
						return 137;
					}
				} else {
					return 20;
				}
			} else if ($longitude < -77.502136) {
				if ($latitude < 59.780479) {
					if ($latitude < 59.706220) {
						return 20;
					} else {
						if ($this->polygons[995]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else {
					return 20;
				}
			} else if ($latitude < 59.880760) {
				if ($this->polygons[996]->contains($latitude, $longitude)) {
					return 137;
				} else {
					return 20;
				}
			} else {
				if ($this->polygons[997]->contains($latitude, $longitude)) {
					return 137;
				} else {
					return 20;
				}
			}
		} else if ($latitude < 64.088704) {
			if ($latitude < 62.414604) {
				if ($latitude < 61.487820) {
					if ($longitude < -77.790176) {
						if ($longitude < -77.962517) {
							if ($latitude < 60.775932) {
								return 137;
							} else if ($longitude < -78.257248) {
								return 137;
							} else if ($longitude < -78.080475) {
								if ($this->polygons[998]->contains($latitude, $longitude)) {
									return 137;
								} else {
									return 20;
								}
							} else {
								return 20;
							}
						} else if ($latitude < 60.744922) {
							return 20;
						} else if ($latitude < 60.768257) {
							if ($longitude < -77.833070) {
								return 20;
							} else {
								return 137;
							}
						} else {
							return 20;
						}
					} else if ($latitude < 60.234997) {
						if ($longitude < -77.638252) {
							return 137;
						} else {
							return 20;
						}
					} else if ($longitude < -77.757133) {
						if ($latitude < 61.259742) {
							return 20;
						} else {
							if ($this->polygons[999]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 60.274155) {
						if ($longitude < -77.606060) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[1000]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else if ($longitude < -78.011292) {
					if ($longitude < -79.269890) {
						return 137;
					} else if ($latitude < 62.366461) {
						return 20;
					} else {
						return 137;
					}
				} else if ($longitude < -77.801331) {
					if ($latitude < 61.679256) {
						return 137;
					} else {
						return 20;
					}
				} else if ($longitude < -77.754745) {
					if ($latitude < 61.635977) {
						return 20;
					} else {
						return 137;
					}
				} else {
					return 20;
				}
			} else if ($latitude < 63.518543) {
				if ($latitude < 62.585182) {
					if ($longitude < -78.029663) {
						return 137;
					} else if ($latitude < 62.422283) {
						return 20;
					} else if ($longitude < -77.859993) {
						if ($latitude < 62.488289) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[1001]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else {
					return 137;
				}
			} else if ($longitude < -80.147430) {
				return 64;
			} else {
				return 137;
			}
		} else {
			return 137;
		}
	}
	
	protected function call17(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 68.311264) {
			if ($longitude < -80.829857) {
				if ($longitude < -92.028229) {
					if ($latitude < 67.171684) {
						if ($latitude < 61.955357) {
							if ($latitude < 61.434013) {
								if ($latitude < 60.000000) {
									if ($longitude < -93.769402) {
										if ($longitude < -101.665837) {
											if ($this->polygons[1002]->contains($latitude, $longitude)) {
												return 308;
											} else {
												return 284;
											}
										} else if ($latitude < 59.072639) {
											if ($longitude < -94.795906) {
												if ($this->polygons[1003]->contains($latitude, $longitude)) {
													return 307;
												} else {
													return 284;
												}
											} else {
												if ($this->polygons[1004]->contains($latitude, $longitude)) {
													return 307;
												} else {
													return 284;
												}
											}
										} else if ($latitude < 59.348492) {
											if ($longitude < -94.781494) {
												if ($this->polygons[1005]->contains($latitude, $longitude)) {
													return 307;
												} else {
													return 284;
												}
											} else {
												return 284;
											}
										} else {
											if ($this->polygons[1006]->contains($latitude, $longitude)) {
												return 307;
											} else {
												return 284;
											}
										}
									} else if ($longitude < -93.572128) {
										if ($longitude < -93.629883) {
											if ($this->polygons[1007]->contains($latitude, $longitude)) {
												return 307;
											} else {
												return 284;
											}
										} else if ($latitude < 58.785896) {
											return 284;
										} else {
											return 307;
										}
									} else if ($longitude < -92.852669) {
										if ($longitude < -93.029205) {
											if ($this->polygons[1008]->contains($latitude, $longitude)) {
												return 307;
											} else {
												return 284;
											}
										} else {
											if ($this->polygons[1009]->contains($latitude, $longitude)) {
												return 307;
											} else {
												return 284;
											}
										}
									} else {
										return 284;
									}
								} else if ($longitude < -102.008194) {
									return 142;
								} else {
									return 307;
								}
							} else if ($longitude < -102.008194) {
								return 142;
							} else {
								return 307;
							}
						} else if ($longitude < -92.635559) {
							if ($latitude < 62.243343) {
								if ($longitude < -102.008194) {
									return 142;
								} else {
									return 307;
								}
							} else if ($longitude < -93.469185) {
								if ($longitude < -102.008194) {
									if ($this->polygons[1010]->contains($latitude, $longitude)) {
										return 142;
									} else {
										return 108;
									}
								} else if ($latitude < 63.965088) {
									return 307;
								} else {
									if ($this->polygons[1011]->contains($latitude, $longitude)) {
										return 108;
									} else {
										return 307;
									}
								}
							} else if ($latitude < 63.971210) {
								return 307;
							} else {
								if ($this->polygons[1012]->contains($latitude, $longitude)) {
									return 108;
								} else {
									return 307;
								}
							}
						} else if ($latitude < 63.815735) {
							return 307;
						} else {
							if ($this->polygons[1013]->contains($latitude, $longitude)) {
								return 108;
							} else {
								return 307;
							}
						}
					} else {
						return 108;
					}
				} else if ($latitude < 65.453690) {
					if ($longitude < -89.957558) {
						if ($latitude < 57.251442) {
							if ($longitude < -90.639900) {
								if ($this->polygons[1014]->contains($latitude, $longitude)) {
									return 307;
								} else {
									return 284;
								}
							} else {
								if ($this->polygons[1015]->contains($latitude, $longitude)) {
									return 238;
								} else {
									return 284;
								}
							}
						} else {
							return 307;
						}
					} else if ($longitude < -88.378349) {
						if ($latitude < 56.984006) {
							if ($latitude < 54.000000) {
								if ($this->polygons[1016]->contains($latitude, $longitude)) {
									return 284;
								} else {
									return 238;
								}
							} else if ($longitude < -88.990593) {
								if ($this->polygons[1017]->contains($latitude, $longitude)) {
									return 284;
								} else {
									return 238;
								}
							} else {
								if ($this->polygons[1018]->contains($latitude, $longitude)) {
									return 307;
								} else {
									return 238;
								}
							}
						} else {
							return 307;
						}
					} else if ($latitude < 63.038517) {
						if ($latitude < 55.199287) {
							if ($longitude < -82.117599) {
								if ($longitude < -82.722824) {
									if ($this->polygons[1019]->contains($latitude, $longitude)) {
										return 137;
									} else {
										return 238;
									}
								} else {
									return 238;
								}
							} else {
								return 137;
							}
						} else if ($latitude < 55.223709) {
							return 238;
						} else if ($latitude < 56.591577) {
							if ($longitude < -83.479806) {
								return 238;
							} else {
								return 137;
							}
						} else {
							return 64;
						}
					} else if ($longitude < -86.900711) {
						if ($latitude < 63.907318) {
							return 64;
						} else {
							return 307;
						}
					} else {
						return 64;
					}
				} else if ($longitude < -84.382332) {
					if ($latitude < 66.466286) {
						if ($longitude < -84.991508) {
							if ($longitude < -88.369072) {
								return 307;
							} else if ($latitude < 66.086807) {
								if ($longitude < -85.977935) {
									if ($this->polygons[1020]->contains($latitude, $longitude)) {
										return 64;
									} else {
										return 307;
									}
								} else {
									return 64;
								}
							} else {
								return 307;
							}
						} else if ($latitude < 65.950470) {
							return 64;
						} else if ($longitude < -84.818901) {
							if ($latitude < 66.025795) {
								return 64;
							} else {
								return 137;
							}
						} else {
							return 137;
						}
					} else if ($longitude < -85.000000) {
						if ($longitude < -89.000000) {
							if ($latitude < 67.000000) {
								if ($this->polygons[1021]->contains($latitude, $longitude)) {
									return 108;
								} else {
									return 307;
								}
							} else {
								return 108;
							}
						} else {
							return 307;
						}
					} else {
						return 137;
					}
				} else {
					return 137;
				}
			} else {
				return $this->call16($latitude, $longitude);
			}
		} else if ($latitude < 69.936737) {
			if ($longitude < -89.775421) {
				return 108;
			} else if ($longitude < -85.000000) {
				if ($longitude < -89.000000) {
					return 108;
				} else {
					return 307;
				}
			} else {
				return 137;
			}
		} else if ($latitude < 74.186783) {
			if ($longitude < -96.420212) {
				if ($latitude < 71.806007) {
					return 108;
				} else if ($longitude < -101.909744) {
					return 108;
				} else if ($latitude < 73.199013) {
					if ($longitude < -100.585571) {
						return 108;
					} else if ($longitude < -98.208565) {
						if ($latitude < 72.802119) {
							return 108;
						} else {
							if ($this->polygons[1022]->contains($latitude, $longitude)) {
								return 307;
							}
							if ($this->polygons[1023]->contains($latitude, $longitude)) {
								return 307;
							} else {
								return 108;
							}
						}
					} else if ($latitude < 72.869066) {
						if ($longitude < -96.998177) {
							if ($this->polygons[1024]->contains($latitude, $longitude)) {
								return 307;
							} else {
								return 108;
							}
						} else if ($latitude < 72.679507) {
							if ($this->polygons[1025]->contains($latitude, $longitude)) {
								return 307;
							} else {
								return 108;
							}
						} else {
							return 307;
						}
					} else {
						return 307;
					}
				} else {
					return 307;
				}
			} else if ($longitude < -85.000000) {
				if ($longitude < -90.483345) {
					if ($latitude < 72.096191) {
						return 108;
					} else if ($latitude < 72.603363) {
						if ($longitude < -95.507271) {
							if ($longitude < -96.268059) {
								return 108;
							} else {
								return 307;
							}
						} else if ($longitude < -95.335034) {
							return 307;
						} else {
							if ($this->polygons[1026]->contains($latitude, $longitude)) {
								return 108;
							} else {
								return 307;
							}
						}
					} else {
						return 307;
					}
				} else {
					return 307;
				}
			} else {
				return 137;
			}
		} else if ($latitude < 77.060905) {
			if ($longitude < -98.114273) {
				if ($longitude < -102.000000) {
					return 108;
				} else {
					return 307;
				}
			} else if ($longitude < -96.694435) {
				return 307;
			} else if ($longitude < -93.393501) {
				if ($latitude < 75.642746) {
					if ($latitude < 74.746109) {
						if ($longitude < -96.132774) {
							return 307;
						} else if ($longitude < -95.229347) {
							if ($latitude < 74.697929) {
								return 153;
							} else {
								return 307;
							}
						} else {
							return 153;
						}
					} else if ($latitude < 74.843742) {
						if ($longitude < -96.103386) {
							return 153;
						} else {
							return 307;
						}
					} else {
						if ($this->polygons[1027]->contains($latitude, $longitude)) {
							return 307;
						}
						if ($this->polygons[1028]->contains($latitude, $longitude)) {
							return 307;
						} else {
							return 153;
						}
					}
				} else {
					return 307;
				}
			} else if ($longitude < -85.000000) {
				return 307;
			} else {
				return 137;
			}
		} else if ($longitude < -92.025925) {
			if ($longitude < -102.000000) {
				return 108;
			} else {
				return 307;
			}
		} else if ($longitude < -85.000000) {
			return 307;
		} else {
			return 137;
		}
	}
	
	protected function call18(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 56.190918) {
			if ($longitude < -59.178490) {
				if ($longitude < -61.338535) {
					if ($longitude < -63.322098) {
						if ($longitude < -69.141731) {
							return 20;
						} else if ($longitude < -66.231915) {
							if ($latitude < 54.544703) {
								if ($longitude < -67.686823) {
									if ($this->polygons[1029]->contains($latitude, $longitude)) {
										return 182;
									}
									if ($this->polygons[1030]->contains($latitude, $longitude)) {
										return 182;
									} else {
										return 20;
									}
								} else if ($latitude < 53.721595) {
									if ($this->polygons[1031]->contains($latitude, $longitude)) {
										return 182;
									}
									if ($this->polygons[1032]->contains($latitude, $longitude)) {
										return 182;
									} else {
										return 20;
									}
								} else {
									if ($this->polygons[1033]->contains($latitude, $longitude)) {
										return 182;
									} else {
										return 20;
									}
								}
							} else {
								if ($this->polygons[1034]->contains($latitude, $longitude)) {
									return 182;
								} else {
									return 20;
								}
							}
						} else if ($latitude < 54.544703) {
							return 182;
						} else if ($longitude < -64.777006) {
							if ($this->polygons[1035]->contains($latitude, $longitude)) {
								return 182;
							} else {
								return 20;
							}
						} else if ($latitude < 55.367810) {
							if ($this->polygons[1036]->contains($latitude, $longitude)) {
								return 20;
							} else {
								return 182;
							}
						} else {
							if ($this->polygons[1037]->contains($latitude, $longitude)) {
								return 182;
							} else {
								return 20;
							}
						}
					} else {
						return 182;
					}
				} else {
					return 182;
				}
			} else if ($latitude < 53.691547) {
				if ($longitude < -56.276463) {
					if ($latitude < 53.630226) {
						if ($longitude < -57.271252) {
							if ($this->polygons[1038]->contains($latitude, $longitude)) {
								return 290;
							} else {
								return 182;
							}
						} else {
							if ($this->polygons[1039]->contains($latitude, $longitude)) {
								return 182;
							} else {
								return 290;
							}
						}
					} else {
						return 182;
					}
				} else {
					return 290;
				}
			} else {
				return 182;
			}
		} else if ($longitude < -62.987293) {
			if ($longitude < -67.891647) {
				if ($longitude < -69.269768) {
					if ($longitude < -69.456772) {
						if ($longitude < -69.770439) {
							if ($longitude < -69.818451) {
								return 20;
							} else if ($latitude < 58.711903) {
								return 20;
							} else if ($longitude < -69.791435) {
								return 20;
							} else if ($latitude < 58.928640) {
								return 20;
							} else {
								return 137;
							}
						} else if ($latitude < 58.798076) {
							if ($longitude < -69.671379) {
								if ($latitude < 58.723164) {
									return 20;
								} else {
									return 137;
								}
							} else {
								return 20;
							}
						} else if ($longitude < -69.700226) {
							if ($latitude < 58.928741) {
								return 20;
							} else {
								return 137;
							}
						} else {
							if ($this->polygons[1040]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 58.900829) {
						if ($longitude < -69.454346) {
							return 20;
						} else {
							if ($this->polygons[1041]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 58.986942) {
						if ($longitude < -69.391823) {
							return 137;
						} else {
							return 20;
						}
					} else if ($latitude < 59.032063) {
						if ($longitude < -69.430695) {
							if ($latitude < 59.015503) {
								return 20;
							} else {
								return 137;
							}
						} else if ($longitude < -69.336906) {
							return 20;
						} else {
							return 137;
						}
					} else {
						return 20;
					}
				} else if ($latitude < 58.919376) {
					if ($longitude < -68.975906) {
						if ($longitude < -69.177109) {
							if ($this->polygons[1042]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						} else {
							return 20;
						}
					} else if ($longitude < -68.692970) {
						if ($latitude < 57.985935) {
							if ($this->polygons[1043]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						} else {
							if ($this->polygons[1044]->contains($latitude, $longitude)) {
								return 137;
							} else {
								return 20;
							}
						}
					} else {
						return 20;
					}
				} else if ($longitude < -69.095367) {
					if ($longitude < -69.227913) {
						return 20;
					} else if ($latitude < 58.967100) {
						if ($longitude < -69.160118) {
							return 20;
						} else {
							return 137;
						}
					} else {
						if ($this->polygons[1045]->contains($latitude, $longitude)) {
							return 137;
						} else {
							return 20;
						}
					}
				} else {
					return 137;
				}
			} else if ($longitude < -65.941536) {
				if ($longitude < -66.467194) {
					if ($longitude < -67.493484) {
						if ($longitude < -67.852905) {
							return 20;
						} else {
							if ($this->polygons[1046]->contains($latitude, $longitude)) {
								return 166;
							}
							if ($this->polygons[1047]->contains($latitude, $longitude)) {
								return 166;
							} else {
								return 20;
							}
						}
					} else if ($latitude < 58.717937) {
						if ($this->polygons[1048]->contains($latitude, $longitude)) {
							return 166;
						} else {
							return 20;
						}
					} else {
						return 166;
					}
				} else if ($latitude < 58.867237) {
					if ($longitude < -66.127945) {
						if ($this->polygons[1049]->contains($latitude, $longitude)) {
							return 166;
						} else {
							return 20;
						}
					} else if ($latitude < 58.730328) {
						return 20;
					} else {
						if ($this->polygons[1050]->contains($latitude, $longitude)) {
							return 166;
						} else {
							return 20;
						}
					}
				} else if ($latitude < 58.928638) {
					return 20;
				} else {
					return 166;
				}
			} else if ($longitude < -65.824425) {
				if ($latitude < 58.990658) {
					if ($latitude < 58.848312) {
						return 20;
					} else {
						if ($this->polygons[1051]->contains($latitude, $longitude)) {
							return 166;
						} else {
							return 20;
						}
					}
				} else {
					return 166;
				}
			} else if ($longitude < -65.671173) {
				if ($latitude < 59.082661) {
					if ($latitude < 58.991425) {
						return 20;
					} else if ($longitude < -65.815163) {
						return 166;
					} else {
						if ($this->polygons[1052]->contains($latitude, $longitude)) {
							return 166;
						} else {
							return 20;
						}
					}
				} else if ($longitude < -65.750923) {
					return 166;
				} else if ($latitude < 59.146431) {
					if ($this->polygons[1053]->contains($latitude, $longitude)) {
						return 20;
					} else {
						return 166;
					}
				} else {
					return 20;
				}
			} else if ($longitude < -63.468971) {
				if ($longitude < -65.599258) {
					if ($latitude < 59.055573) {
						if ($this->polygons[1054]->contains($latitude, $longitude)) {
							return 166;
						} else {
							return 20;
						}
					} else {
						return 20;
					}
				} else if ($latitude < 57.734932) {
					if ($this->polygons[1055]->contains($latitude, $longitude)) {
						return 182;
					} else {
						return 20;
					}
				} else if ($longitude < -64.534115) {
					if ($this->polygons[1056]->contains($latitude, $longitude)) {
						return 182;
					} else {
						return 20;
					}
				} else {
					if ($this->polygons[1057]->contains($latitude, $longitude)) {
						return 20;
					}
					if ($this->polygons[1058]->contains($latitude, $longitude)) {
						return 20;
					} else {
						return 182;
					}
				}
			} else {
				return 182;
			}
		} else {
			return 182;
		}
	}
	
	protected function call19(float $latitude, float $longitude) : ?int
	{
		if ($longitude < -54.102795) {
			if ($latitude < 63.936062) {
				if ($latitude < 59.278946) {
					return $this->call18($latitude, $longitude);
				} else if ($longitude < -67.629715) {
					if ($latitude < 63.325298) {
						if ($longitude < -70.120392) {
							if ($latitude < 62.477734) {
								return 20;
							} else {
								return 137;
							}
						} else if ($longitude < -68.000000) {
							if ($latitude < 61.080311) {
								if ($latitude < 60.850647) {
									if ($latitude < 59.984997) {
										if ($longitude < -69.924110) {
											if ($this->polygons[1059]->contains($latitude, $longitude)) {
												return 137;
											} else {
												return 20;
											}
										} else if ($longitude < -69.638916) {
											if ($this->polygons[1060]->contains($latitude, $longitude)) {
												return 137;
											} else {
												return 20;
											}
										} else if ($latitude < 59.391781) {
											return 20;
										} else if ($latitude < 59.699116) {
											if ($this->polygons[1061]->contains($latitude, $longitude)) {
												return 137;
											} else {
												return 20;
											}
										} else {
											if ($this->polygons[1062]->contains($latitude, $longitude)) {
												return 137;
											} else {
												return 20;
											}
										}
									} else if ($longitude < -69.876434) {
										return 20;
									} else if ($longitude < -69.363411) {
										if ($latitude < 60.083309) {
											if ($longitude < -69.607597) {
												return 20;
											} else {
												return 137;
											}
										} else {
											if ($this->polygons[1063]->contains($latitude, $longitude)) {
												return 137;
											} else {
												return 20;
											}
										}
									} else {
										return 137;
									}
								} else if ($longitude < -70.065117) {
									if ($latitude < 60.979642) {
										if ($latitude < 60.881176) {
											return 20;
										} else {
											if ($this->polygons[1064]->contains($latitude, $longitude)) {
												return 137;
											} else {
												return 20;
											}
										}
									} else if ($latitude < 61.035766) {
										return 20;
									} else {
										return 137;
									}
								} else if ($longitude < -69.893997) {
									if ($latitude < 60.913162) {
										return 137;
									} else {
										return 20;
									}
								} else {
									if ($this->polygons[1065]->contains($latitude, $longitude)) {
										return 137;
									} else {
										return 20;
									}
								}
							} else {
								return 137;
							}
						} else {
							return 166;
						}
					} else if ($longitude < -68.000000) {
						return 137;
					} else {
						return 166;
					}
				} else if ($latitude < 60.695583) {
					if ($latitude < 60.372677) {
						if ($longitude < -64.353218) {
							if ($longitude < -65.378146) {
								if ($latitude < 59.453045) {
									if ($longitude < -65.590347) {
										return 166;
									} else if ($longitude < -65.506706) {
										if ($latitude < 59.385551) {
											if ($this->polygons[1066]->contains($latitude, $longitude)) {
												return 166;
											} else {
												return 20;
											}
										} else {
											return 166;
										}
									} else if ($latitude < 59.336494) {
										if ($this->polygons[1067]->contains($latitude, $longitude)) {
											return 166;
										} else {
											return 20;
										}
									} else {
										return 20;
									}
								} else if ($longitude < -65.469658) {
									if ($latitude < 59.504585) {
										if ($longitude < -65.523506) {
											return 166;
										} else if ($latitude < 59.484665) {
											return 20;
										} else {
											return 166;
										}
									} else {
										return 20;
									}
								} else {
									return 20;
								}
							} else if ($longitude < -65.101463) {
								return 20;
							} else if ($latitude < 60.227196) {
								if ($latitude < 59.753071) {
									if ($this->polygons[1068]->contains($latitude, $longitude)) {
										return 20;
									} else {
										return 182;
									}
								} else {
									if ($this->polygons[1069]->contains($latitude, $longitude)) {
										return 182;
									} else {
										return 20;
									}
								}
							} else {
								if ($this->polygons[1070]->contains($latitude, $longitude)) {
									return 182;
								}
								if ($this->polygons[1071]->contains($latitude, $longitude)) {
									return 182;
								} else {
									return 20;
								}
							}
						} else {
							return 182;
						}
					} else {
						return 20;
					}
				} else {
					return 166;
				}
			} else if ($latitude < 67.483208) {
				if ($longitude < -68.000000) {
					return 137;
				} else {
					return 166;
				}
			} else if ($longitude < -60.919846) {
				if ($latitude < 70.351471) {
					if ($longitude < -68.000000) {
						return 137;
					} else {
						return 166;
					}
				} else if ($longitude < -68.000000) {
					if ($latitude < 72.289263) {
						return 137;
					} else if ($latitude < 78.368271) {
						return 306;
					} else if ($longitude < -72.985229) {
						return 137;
					} else if ($latitude < 79.070419) {
						return 306;
					} else {
						return 137;
					}
				} else if ($latitude < 77.469055) {
					if ($longitude < -63.736012) {
						if ($latitude < 76.134232) {
							return 306;
						} else if ($longitude < -66.141296) {
							return 306;
						} else {
							if ($this->polygons[1072]->contains($latitude, $longitude)) {
								return 16;
							} else {
								return 306;
							}
						}
					} else {
						return 16;
					}
				} else if ($latitude < 80.684196) {
					if ($latitude < 79.171616) {
						if ($longitude < -66.601120) {
							return 306;
						} else if ($latitude < 77.519371) {
							if ($longitude < -66.168510) {
								return 306;
							} else {
								if ($this->polygons[1073]->contains($latitude, $longitude)) {
									return 16;
								} else {
									return 306;
								}
							}
						} else {
							if ($this->polygons[1074]->contains($latitude, $longitude)) {
								return 306;
							} else {
								return 16;
							}
						}
					} else {
						return 16;
					}
				} else if ($longitude < -66.286903) {
					return 166;
				} else if ($latitude < 81.547485) {
					if ($longitude < -64.459412) {
						if ($latitude < 81.074245) {
							return 16;
						} else {
							return 166;
						}
					} else {
						return 16;
					}
				} else if ($longitude < -64.431755) {
					return 166;
				} else {
					if ($this->polygons[1075]->contains($latitude, $longitude)) {
						return 16;
					} else {
						return 166;
					}
				}
			} else {
				return 16;
			}
		} else if ($longitude < -24.752028) {
			return 16;
		} else if ($latitude < 60.846443) {
			if ($longitude < -1.743917) {
				if ($latitude < 55.436916) {
					if ($longitude < -8.195111) {
						return 285;
					} else if ($longitude < -5.434611) {
						if ($longitude < -6.002389) {
							if ($latitude < 53.499805) {
								return 285;
							} else if ($latitude < 55.253502) {
								if ($longitude < -7.098750) {
									if ($latitude < 54.376654) {
										if ($this->polygons[1076]->contains($latitude, $longitude)) {
											return 303;
										} else {
											return 285;
										}
									} else {
										if ($this->polygons[1077]->contains($latitude, $longitude)) {
											return 303;
										}
										if ($this->polygons[1078]->contains($latitude, $longitude)) {
											return 303;
										} else {
											return 285;
										}
									}
								} else {
									if ($this->polygons[1079]->contains($latitude, $longitude)) {
										return 303;
									} else {
										return 285;
									}
								}
							} else if ($longitude < -6.953667) {
								return 285;
							} else {
								return 303;
							}
						} else {
							return 303;
						}
					} else if ($latitude < 53.433556) {
						return 303;
					} else if ($longitude < -4.311500) {
						if ($latitude < 54.419724) {
							return 242;
						} else {
							return 303;
						}
					} else {
						return 303;
					}
				} else {
					return 303;
				}
			} else if ($latitude < 59.846554) {
				if ($latitude < 59.034222) {
					if ($latitude < 55.619720) {
						if ($longitude < 5.153944) {
							if ($longitude < 1.369295) {
								return 303;
							} else {
								return 385;
							}
						} else if ($longitude < 6.615556) {
							return 385;
						} else if ($latitude < 53.470085) {
							if ($this->polygons[1080]->contains($latitude, $longitude)) {
								return 6;
							} else {
								return 385;
							}
						} else {
							return 6;
						}
					} else {
						return 355;
					}
				} else if ($longitude < -1.614194) {
					return 303;
				} else {
					return 355;
				}
			} else if ($longitude < 4.695556) {
				return 303;
			} else {
				return 355;
			}
		} else if ($latitude < 72.417862) {
			if ($longitude < 4.650167) {
				if ($longitude < -17.130816) {
					if ($latitude < 66.563774) {
						return 21;
					} else if ($longitude < -21.973426) {
						if ($latitude < 70.304049) {
							return 16;
						} else if ($latitude < 70.436001) {
							return 73;
						} else if ($latitude < 72.348299) {
							if ($longitude < -24.400325) {
								if ($this->polygons[1081]->contains($latitude, $longitude)) {
									return 73;
								} else {
									return 16;
								}
							} else {
								if ($this->polygons[1082]->contains($latitude, $longitude)) {
									return 16;
								} else {
									return 73;
								}
							}
						} else {
							return 16;
						}
					} else {
						return 73;
					}
				} else if ($longitude < -13.495815) {
					return 21;
				} else if ($longitude < -7.920997) {
					return 111;
				} else {
					return 361;
				}
			} else {
				return 355;
			}
		} else if ($latitude < 77.352264) {
			if ($latitude < 75.090202) {
				return 16;
			} else if ($latitude < 76.526947) {
				if ($latitude < 76.369011) {
					if ($longitude < -20.440577) {
						if ($longitude < -21.152466) {
							if ($latitude < 76.295341) {
								if ($this->polygons[1083]->contains($latitude, $longitude)) {
									return 25;
								}
								if ($this->polygons[1084]->contains($latitude, $longitude)) {
									return 25;
								}
								if ($this->polygons[1085]->contains($latitude, $longitude)) {
									return 25;
								} else {
									return 16;
								}
							} else if ($longitude < -22.890951) {
								if ($this->polygons[1086]->contains($latitude, $longitude)) {
									return 25;
								} else {
									return 16;
								}
							} else {
								return 25;
							}
						} else if ($latitude < 75.841735) {
							if ($latitude < 75.325089) {
								return 16;
							} else {
								if ($this->polygons[1087]->contains($latitude, $longitude)) {
									return 25;
								} else {
									return 16;
								}
							}
						} else {
							return 25;
						}
					} else if ($latitude < 75.798696) {
						if ($longitude < -19.495006) {
							if ($this->polygons[1088]->contains($latitude, $longitude)) {
								return 25;
							} else {
								return 16;
							}
						} else {
							return 16;
						}
					} else {
						return 25;
					}
				} else if ($longitude < -22.880474) {
					if ($this->polygons[1089]->contains($latitude, $longitude)) {
						return 25;
					} else {
						return 16;
					}
				} else {
					return 25;
				}
			} else if ($longitude < -22.825729) {
				if ($this->polygons[1090]->contains($latitude, $longitude)) {
					return 25;
				} else {
					return 16;
				}
			} else {
				return 25;
			}
		} else if ($latitude < 78.385384) {
			if ($longitude < -21.049835) {
				if ($longitude < -22.757199) {
					if ($this->polygons[1091]->contains($latitude, $longitude)) {
						return 25;
					} else {
						return 16;
					}
				} else {
					return 25;
				}
			} else {
				return 25;
			}
		} else if ($latitude < 79.653531) {
			if ($longitude < -19.217758) {
				if ($latitude < 78.890169) {
					if ($longitude < -22.723715) {
						if ($this->polygons[1092]->contains($latitude, $longitude)) {
							return 25;
						} else {
							return 16;
						}
					} else {
						return 25;
					}
				} else if ($longitude < -22.673079) {
					if ($this->polygons[1093]->contains($latitude, $longitude)) {
						return 25;
					} else {
						return 16;
					}
				} else if ($latitude < 79.360726) {
					return 25;
				} else {
					if ($this->polygons[1094]->contains($latitude, $longitude)) {
						return 16;
					} else {
						return 25;
					}
				}
			} else {
				return 25;
			}
		} else {
			return 16;
		}
	}
	
	protected function call20(float $latitude, float $longitude) : ?int
	{
		if ($latitude < -28.572058) {
			if ($latitude < -33.408588) {
				return 169;
			} else if ($longitude < 19.539615) {
				if ($longitude < 16.478859) {
					if ($this->polygons[1095]->contains($latitude, $longitude)) {
						return 189;
					} else {
						return 169;
					}
				} else {
					if ($this->polygons[1096]->contains($latitude, $longitude)) {
						return 189;
					} else {
						return 169;
					}
				}
			} else if ($longitude < 25.950998) {
				return 169;
			} else if ($longitude < 29.156690) {
				if ($latitude < -30.990323) {
					return 169;
				} else if ($longitude < 27.553844) {
					if ($this->polygons[1097]->contains($latitude, $longitude)) {
						return 339;
					} else {
						return 169;
					}
				} else if ($latitude < -29.781190) {
					if ($this->polygons[1098]->contains($latitude, $longitude)) {
						return 339;
					} else {
						return 169;
					}
				} else {
					if ($this->polygons[1099]->contains($latitude, $longitude)) {
						return 339;
					} else {
						return 169;
					}
				}
			} else {
				if ($this->polygons[1100]->contains($latitude, $longitude)) {
					return 339;
				}
				if ($this->polygons[1101]->contains($latitude, $longitude)) {
					return 339;
				} else {
					return 169;
				}
			}
		} else if ($longitude < 29.360781) {
			if ($longitude < 17.403767) {
				if ($latitude < -28.037775) {
					if ($longitude < 17.083324) {
						if ($this->polygons[1102]->contains($latitude, $longitude)) {
							return 169;
						} else {
							return 189;
						}
					} else if ($latitude < -28.411060) {
						if ($this->polygons[1103]->contains($latitude, $longitude)) {
							return 189;
						} else {
							return 169;
						}
					} else {
						if ($this->polygons[1104]->contains($latitude, $longitude)) {
							return 189;
						} else {
							return 169;
						}
					}
				} else if ($latitude < -26.993246) {
					return 189;
				} else if ($latitude < -16.959894) {
					if ($longitude < 13.142432) {
						if ($this->polygons[1105]->contains($latitude, $longitude)) {
							return 299;
						} else {
							return 189;
						}
					} else {
						if ($this->polygons[1106]->contains($latitude, $longitude)) {
							return 299;
						} else {
							return 189;
						}
					}
				} else {
					return 299;
				}
			} else if ($latitude < -22.090446) {
				if ($longitude < 23.382274) {
					if ($latitude < -25.331252) {
						if ($longitude < 20.393020) {
							if ($this->polygons[1107]->contains($latitude, $longitude)) {
								return 169;
							} else {
								return 189;
							}
						} else if ($latitude < -26.951655) {
							return 169;
						} else if ($longitude < 21.887647) {
							if ($this->polygons[1108]->contains($latitude, $longitude)) {
								return 12;
							} else {
								return 169;
							}
						} else {
							if ($this->polygons[1109]->contains($latitude, $longitude)) {
								return 12;
							} else {
								return 169;
							}
						}
					} else {
						if ($this->polygons[1110]->contains($latitude, $longitude)) {
							return 169;
						}
						if ($this->polygons[1111]->contains($latitude, $longitude)) {
							return 169;
						}
						if ($this->polygons[1112]->contains($latitude, $longitude)) {
							return 189;
						} else {
							return 12;
						}
					}
				} else if ($latitude < -25.331252) {
					if ($this->polygons[1113]->contains($latitude, $longitude)) {
						return 12;
					} else {
						return 169;
					}
				} else if ($longitude < 26.371527) {
					if ($this->polygons[1114]->contains($latitude, $longitude)) {
						return 169;
					}
					if ($this->polygons[1115]->contains($latitude, $longitude)) {
						return 169;
					} else {
						return 12;
					}
				} else if ($latitude < -23.710849) {
					if ($this->polygons[1116]->contains($latitude, $longitude)) {
						return 169;
					} else {
						return 12;
					}
				} else if ($longitude < 27.866154) {
					if ($this->polygons[1117]->contains($latitude, $longitude)) {
						return 169;
					} else {
						return 12;
					}
				} else {
					if ($this->polygons[1118]->contains($latitude, $longitude)) {
						return 12;
					}
					if ($this->polygons[1119]->contains($latitude, $longitude)) {
						return 269;
					} else {
						return 169;
					}
				}
			} else if ($longitude < 23.382274) {
				if ($latitude < -18.849641) {
					if ($this->polygons[1120]->contains($latitude, $longitude)) {
						return 189;
					} else {
						return 12;
					}
				} else if ($longitude < 20.393020) {
					if ($this->polygons[1121]->contains($latitude, $longitude)) {
						return 299;
					} else {
						return 189;
					}
				} else if ($latitude < -17.229238) {
					if ($this->polygons[1122]->contains($latitude, $longitude)) {
						return 12;
					}
					if ($this->polygons[1123]->contains($latitude, $longitude)) {
						return 267;
					}
					if ($this->polygons[1124]->contains($latitude, $longitude)) {
						return 299;
					} else {
						return 189;
					}
				} else {
					if ($this->polygons[1125]->contains($latitude, $longitude)) {
						return 299;
					} else {
						return 267;
					}
				}
			} else if ($latitude < -18.849641) {
				if ($longitude < 26.371527) {
					if ($this->polygons[1126]->contains($latitude, $longitude)) {
						return 269;
					} else {
						return 12;
					}
				} else if ($latitude < -20.470044) {
					if ($this->polygons[1127]->contains($latitude, $longitude)) {
						return 269;
					} else {
						return 12;
					}
				} else {
					if ($this->polygons[1128]->contains($latitude, $longitude)) {
						return 12;
					} else {
						return 269;
					}
				}
			} else if ($longitude < 26.371527) {
				if ($latitude < -17.229238) {
					if ($longitude < 24.876900) {
						if ($latitude < -18.039439) {
							if ($this->polygons[1129]->contains($latitude, $longitude)) {
								return 189;
							}
							if ($this->polygons[1130]->contains($latitude, $longitude)) {
								return 189;
							} else {
								return 12;
							}
						} else {
							if ($this->polygons[1131]->contains($latitude, $longitude)) {
								return 12;
							}
							if ($this->polygons[1132]->contains($latitude, $longitude)) {
								return 12;
							}
							if ($this->polygons[1133]->contains($latitude, $longitude)) {
								return 267;
							}
							if ($this->polygons[1134]->contains($latitude, $longitude)) {
								return 299;
							} else {
								return 189;
							}
						}
					} else if ($latitude < -18.039439) {
						if ($this->polygons[1135]->contains($latitude, $longitude)) {
							return 12;
						} else {
							return 269;
						}
					} else if ($longitude < 25.624214) {
						if ($this->polygons[1136]->contains($latitude, $longitude)) {
							return 12;
						}
						if ($this->polygons[1137]->contains($latitude, $longitude)) {
							return 189;
						}
						if ($this->polygons[1138]->contains($latitude, $longitude)) {
							return 269;
						} else {
							return 267;
						}
					} else {
						if ($this->polygons[1139]->contains($latitude, $longitude)) {
							return 267;
						} else {
							return 269;
						}
					}
				} else {
					return 267;
				}
			} else {
				if ($this->polygons[1140]->contains($latitude, $longitude)) {
					return 269;
				} else {
					return 267;
				}
			}
		} else if ($latitude < -25.719648) {
			if ($longitude < 32.895973) {
				if ($longitude < 32.137260) {
					if ($this->polygons[1141]->contains($latitude, $longitude)) {
						return 169;
					}
					if ($this->polygons[1142]->contains($latitude, $longitude)) {
						return 169;
					}
					if ($this->polygons[1143]->contains($latitude, $longitude)) {
						return 364;
					} else {
						return 117;
					}
				} else if ($latitude < -26.830089) {
					if ($this->polygons[1144]->contains($latitude, $longitude)) {
						return 364;
					} else {
						return 169;
					}
				} else {
					return 364;
				}
			} else {
				return 364;
			}
		} else if ($latitude < -20.664242) {
			if ($latitude < -23.191945) {
				if ($this->polygons[1145]->contains($latitude, $longitude)) {
					return 169;
				} else {
					return 364;
				}
			} else {
				if ($this->polygons[1146]->contains($latitude, $longitude)) {
					return 169;
				}
				if ($this->polygons[1147]->contains($latitude, $longitude)) {
					return 364;
				} else {
					return 269;
				}
			}
		} else if ($latitude < -18.136539) {
			if ($this->polygons[1148]->contains($latitude, $longitude)) {
				return 364;
			} else {
				return 269;
			}
		} else if ($longitude < 31.533242) {
			if ($this->polygons[1149]->contains($latitude, $longitude)) {
				return 267;
			}
			if ($this->polygons[1150]->contains($latitude, $longitude)) {
				return 364;
			} else {
				return 269;
			}
		} else {
			if ($this->polygons[1151]->contains($latitude, $longitude)) {
				return 269;
			} else {
				return 364;
			}
		}
	}
	
	protected function call21(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 24.421398) {
			if ($latitude < -5.927235) {
				if ($longitude < 12.664001) {
					if ($latitude < -6.026062) {
						if ($longitude < 12.560946) {
							if ($latitude < -6.060813) {
								return 299;
							} else {
								return 331;
							}
						} else {
							return 299;
						}
					} else {
						return 331;
					}
				} else if ($longitude < 12.869216) {
					if ($latitude < -6.012101) {
						return 299;
					} else if ($latitude < -5.979688) {
						if ($longitude < 12.722283) {
							return 331;
						} else {
							return 299;
						}
					} else {
						return 331;
					}
				} else if ($longitude < 12.944152) {
					return 299;
				} else if ($longitude < 18.682775) {
					if ($longitude < 15.813463) {
						return 299;
					} else if ($longitude < 17.248119) {
						if ($this->polygons[1152]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 299;
						}
					} else {
						if ($this->polygons[1153]->contains($latitude, $longitude)) {
							return 299;
						} else {
							return 331;
						}
					}
				} else if ($longitude < 21.552087) {
					if ($this->polygons[1154]->contains($latitude, $longitude)) {
						return 299;
					}
					if ($this->polygons[1155]->contains($latitude, $longitude)) {
						return 352;
					} else {
						return 331;
					}
				} else {
					if ($this->polygons[1156]->contains($latitude, $longitude)) {
						return 299;
					} else {
						return 352;
					}
				}
			} else if ($longitude < 9.921646) {
				return 155;
			} else if ($longitude < 17.865310) {
				if ($latitude < -5.841628) {
					if ($longitude < 12.922298) {
						if ($longitude < 12.876115) {
							if ($this->polygons[1157]->contains($latitude, $longitude)) {
								return 299;
							} else {
								return 331;
							}
						} else {
							return 331;
						}
					} else if ($longitude < 13.986273) {
						if ($this->polygons[1158]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 299;
						}
					} else {
						if ($this->polygons[1159]->contains($latitude, $longitude)) {
							return 299;
						} else {
							return 331;
						}
					}
				} else if ($longitude < 13.893478) {
					if ($latitude < -2.791343) {
						if ($longitude < 11.956557) {
							if ($this->polygons[1160]->contains($latitude, $longitude)) {
								return 155;
							} else {
								return 154;
							}
						} else if ($latitude < -4.316486) {
							if ($longitude < 12.925017) {
								if ($this->polygons[1161]->contains($latitude, $longitude)) {
									return 154;
								}
								if ($this->polygons[1162]->contains($latitude, $longitude)) {
									return 331;
								} else {
									return 299;
								}
							} else {
								if ($this->polygons[1163]->contains($latitude, $longitude)) {
									return 299;
								}
								if ($this->polygons[1164]->contains($latitude, $longitude)) {
									return 331;
								} else {
									return 154;
								}
							}
						} else {
							if ($this->polygons[1165]->contains($latitude, $longitude)) {
								return 155;
							}
							if ($this->polygons[1166]->contains($latitude, $longitude)) {
								return 155;
							} else {
								return 154;
							}
						}
					} else if ($longitude < 11.907562) {
						if ($this->polygons[1167]->contains($latitude, $longitude)) {
							return 154;
						} else {
							return 155;
						}
					} else {
						if ($this->polygons[1168]->contains($latitude, $longitude)) {
							return 154;
						}
						if ($this->polygons[1169]->contains($latitude, $longitude)) {
							return 154;
						}
						if ($this->polygons[1170]->contains($latitude, $longitude)) {
							return 154;
						} else {
							return 155;
						}
					}
				} else if ($latitude < -2.791343) {
					if ($this->polygons[1171]->contains($latitude, $longitude)) {
						return 154;
					} else {
						return 331;
					}
				} else if ($longitude < 15.879394) {
					if ($this->polygons[1172]->contains($latitude, $longitude)) {
						return 154;
					}
					if ($this->polygons[1173]->contains($latitude, $longitude)) {
						return 154;
					} else {
						return 155;
					}
				} else {
					if ($this->polygons[1174]->contains($latitude, $longitude)) {
						return 331;
					} else {
						return 154;
					}
				}
			} else if ($longitude < 21.143354) {
				if ($this->polygons[1175]->contains($latitude, $longitude)) {
					return 352;
				} else {
					return 331;
				}
			} else if ($latitude < -2.834147) {
				return 352;
			} else if ($longitude < 22.782376) {
				if ($this->polygons[1176]->contains($latitude, $longitude)) {
					return 352;
				} else {
					return 331;
				}
			} else {
				if ($this->polygons[1177]->contains($latitude, $longitude)) {
					return 331;
				} else {
					return 352;
				}
			}
		} else if ($latitude < -5.718678) {
			if ($longitude < 30.744639) {
				if ($this->polygons[1178]->contains($latitude, $longitude)) {
					return 17;
				} else {
					return 352;
				}
			} else {
				return 17;
			}
		} else if ($longitude < 39.221806) {
			if ($longitude < 30.895958) {
				if ($latitude < -2.078556) {
					if ($longitude < 27.658678) {
						return 352;
					} else if ($latitude < -3.898617) {
						if ($this->polygons[1179]->contains($latitude, $longitude)) {
							return 83;
						}
						if ($this->polygons[1180]->contains($latitude, $longitude)) {
							return 352;
						} else {
							return 17;
						}
					} else if ($longitude < 29.277318) {
						if ($this->polygons[1181]->contains($latitude, $longitude)) {
							return 83;
						}
						if ($this->polygons[1182]->contains($latitude, $longitude)) {
							return 293;
						} else {
							return 352;
						}
					} else if ($latitude < -2.988586) {
						if ($this->polygons[1183]->contains($latitude, $longitude)) {
							return 83;
						} else {
							return 17;
						}
					} else if ($longitude < 30.086638) {
						if ($this->polygons[1184]->contains($latitude, $longitude)) {
							return 293;
						} else {
							return 83;
						}
					} else {
						if ($this->polygons[1185]->contains($latitude, $longitude)) {
							return 17;
						}
						if ($this->polygons[1186]->contains($latitude, $longitude)) {
							return 293;
						} else {
							return 83;
						}
					}
				} else if ($longitude < 27.658678) {
					return 352;
				} else if ($longitude < 29.277318) {
					if ($this->polygons[1187]->contains($latitude, $longitude)) {
						return 293;
					} else {
						return 352;
					}
				} else if ($latitude < -0.909808) {
					if ($longitude < 30.086638) {
						if ($this->polygons[1188]->contains($latitude, $longitude)) {
							return 293;
						}
						if ($this->polygons[1189]->contains($latitude, $longitude)) {
							return 352;
						} else {
							return 179;
						}
					} else {
						if ($this->polygons[1190]->contains($latitude, $longitude)) {
							return 17;
						}
						if ($this->polygons[1191]->contains($latitude, $longitude)) {
							return 179;
						} else {
							return 293;
						}
					}
				} else {
					if ($this->polygons[1192]->contains($latitude, $longitude)) {
						return 352;
					} else {
						return 179;
					}
				}
			} else if ($latitude < -5.085639) {
				return 17;
			} else {
				if ($this->polygons[1193]->contains($latitude, $longitude)) {
					return 122;
				}
				if ($this->polygons[1194]->contains($latitude, $longitude)) {
					return 179;
				} else {
					return 17;
				}
			}
		} else {
			return 122;
		}
	}
	
	protected function call22(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 31.305912) {
			if ($latitude < 5.386098) {
				if ($longitude < 23.651386) {
					if ($latitude < 2.822519) {
						if ($this->polygons[1195]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 352;
						}
					} else if ($longitude < 21.150613) {
						if ($this->polygons[1196]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 214;
						}
					} else if ($latitude < 4.104309) {
						if ($this->polygons[1197]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 352;
						}
					} else {
						if ($this->polygons[1198]->contains($latitude, $longitude)) {
							return 331;
						}
						if ($this->polygons[1199]->contains($latitude, $longitude)) {
							return 352;
						} else {
							return 214;
						}
					}
				} else if ($longitude < 27.478649) {
					if ($latitude < 2.822519) {
						return 352;
					} else if ($longitude < 25.565018) {
						if ($latitude < 4.104309) {
							return 352;
						} else if ($longitude < 24.608202) {
							if ($this->polygons[1200]->contains($latitude, $longitude)) {
								return 352;
							} else {
								return 214;
							}
						} else {
							if ($this->polygons[1201]->contains($latitude, $longitude)) {
								return 352;
							} else {
								return 214;
							}
						}
					} else if ($latitude < 4.104309) {
						return 352;
					} else if ($longitude < 26.521833) {
						if ($this->polygons[1202]->contains($latitude, $longitude)) {
							return 214;
						} else {
							return 352;
						}
					} else {
						if ($this->polygons[1203]->contains($latitude, $longitude)) {
							return 352;
						}
						if ($this->polygons[1204]->contains($latitude, $longitude)) {
							return 395;
						} else {
							return 214;
						}
					}
				} else if ($latitude < 2.822519) {
					if ($this->polygons[1205]->contains($latitude, $longitude)) {
						return 352;
					} else {
						return 179;
					}
				} else if ($longitude < 29.392281) {
					if ($this->polygons[1206]->contains($latitude, $longitude)) {
						return 352;
					} else {
						return 395;
					}
				} else if ($latitude < 4.104309) {
					if ($this->polygons[1207]->contains($latitude, $longitude)) {
						return 179;
					}
					if ($this->polygons[1208]->contains($latitude, $longitude)) {
						return 395;
					} else {
						return 352;
					}
				} else {
					if ($this->polygons[1209]->contains($latitude, $longitude)) {
						return 352;
					} else {
						return 395;
					}
				}
			} else if ($longitude < 24.977876) {
				if ($latitude < 10.869160) {
					if ($longitude < 21.813858) {
						if ($latitude < 8.127629) {
							return 214;
						} else if ($longitude < 20.231848) {
							if ($this->polygons[1210]->contains($latitude, $longitude)) {
								return 214;
							} else {
								return 202;
							}
						} else if ($latitude < 9.498395) {
							if ($this->polygons[1211]->contains($latitude, $longitude)) {
								return 202;
							} else {
								return 214;
							}
						} else {
							if ($this->polygons[1212]->contains($latitude, $longitude)) {
								return 214;
							} else {
								return 202;
							}
						}
					} else if ($latitude < 8.127629) {
						if ($this->polygons[1213]->contains($latitude, $longitude)) {
							return 395;
						} else {
							return 214;
						}
					} else if ($longitude < 23.395867) {
						if ($this->polygons[1214]->contains($latitude, $longitude)) {
							return 202;
						}
						if ($this->polygons[1215]->contains($latitude, $longitude)) {
							return 202;
						}
						if ($this->polygons[1216]->contains($latitude, $longitude)) {
							return 202;
						}
						if ($this->polygons[1217]->contains($latitude, $longitude)) {
							return 322;
						} else {
							return 214;
						}
					} else if ($latitude < 9.498395) {
						if ($longitude < 24.186871) {
							if ($this->polygons[1218]->contains($latitude, $longitude)) {
								return 322;
							}
							if ($this->polygons[1219]->contains($latitude, $longitude)) {
								return 395;
							}
							if ($this->polygons[1220]->contains($latitude, $longitude)) {
								return 395;
							} else {
								return 214;
							}
						} else {
							if ($this->polygons[1221]->contains($latitude, $longitude)) {
								return 214;
							}
							if ($this->polygons[1222]->contains($latitude, $longitude)) {
								return 214;
							}
							if ($this->polygons[1223]->contains($latitude, $longitude)) {
								return 322;
							} else {
								return 395;
							}
						}
					} else {
						if ($this->polygons[1224]->contains($latitude, $longitude)) {
							return 214;
						}
						if ($this->polygons[1225]->contains($latitude, $longitude)) {
							return 395;
						} else {
							return 322;
						}
					}
				} else if ($longitude < 21.813858) {
					return 202;
				} else if ($latitude < 13.610691) {
					if ($this->polygons[1226]->contains($latitude, $longitude)) {
						return 214;
					}
					if ($this->polygons[1227]->contains($latitude, $longitude)) {
						return 322;
					} else {
						return 202;
					}
				} else {
					if ($this->polygons[1228]->contains($latitude, $longitude)) {
						return 322;
					} else {
						return 202;
					}
				}
			} else if ($latitude < 10.869160) {
				if ($longitude < 28.141894) {
					if ($latitude < 8.127629) {
						if ($longitude < 26.559885) {
							if ($latitude < 6.756863) {
								if ($this->polygons[1229]->contains($latitude, $longitude)) {
									return 395;
								} else {
									return 214;
								}
							} else {
								if ($this->polygons[1230]->contains($latitude, $longitude)) {
									return 214;
								} else {
									return 395;
								}
							}
						} else {
							if ($this->polygons[1231]->contains($latitude, $longitude)) {
								return 214;
							} else {
								return 395;
							}
						}
					} else {
						if ($this->polygons[1232]->contains($latitude, $longitude)) {
							return 322;
						} else {
							return 395;
						}
					}
				} else {
					if ($this->polygons[1233]->contains($latitude, $longitude)) {
						return 395;
					} else {
						return 322;
					}
				}
			} else {
				return 322;
			}
		} else if ($latitude < 12.219149) {
			if ($latitude < 4.629333) {
				if ($longitude < 35.947697) {
					if ($longitude < 33.626804) {
						if ($this->polygons[1234]->contains($latitude, $longitude)) {
							return 395;
						} else {
							return 179;
						}
					} else if ($latitude < 2.444137) {
						if ($this->polygons[1235]->contains($latitude, $longitude)) {
							return 179;
						} else {
							return 122;
						}
					} else {
						if ($this->polygons[1236]->contains($latitude, $longitude)) {
							return 179;
						}
						if ($this->polygons[1237]->contains($latitude, $longitude)) {
							return 395;
						} else {
							return 122;
						}
					}
				} else {
					if ($this->polygons[1238]->contains($latitude, $longitude)) {
						return 350;
					} else {
						return 122;
					}
				}
			} else if ($longitude < 35.437428) {
				if ($latitude < 8.424241) {
					if ($longitude < 33.371670) {
						if ($this->polygons[1239]->contains($latitude, $longitude)) {
							return 350;
						} else {
							return 395;
						}
					} else if ($latitude < 6.526787) {
						if ($this->polygons[1240]->contains($latitude, $longitude)) {
							return 350;
						} else {
							return 395;
						}
					} else {
						if ($this->polygons[1241]->contains($latitude, $longitude)) {
							return 395;
						}
						if ($this->polygons[1242]->contains($latitude, $longitude)) {
							return 395;
						}
						if ($this->polygons[1243]->contains($latitude, $longitude)) {
							return 395;
						} else {
							return 350;
						}
					}
				} else if ($longitude < 33.371670) {
					if ($this->polygons[1244]->contains($latitude, $longitude)) {
						return 322;
					}
					if ($this->polygons[1245]->contains($latitude, $longitude)) {
						return 322;
					}
					if ($this->polygons[1246]->contains($latitude, $longitude)) {
						return 350;
					}
					if ($this->polygons[1247]->contains($latitude, $longitude)) {
						return 350;
					} else {
						return 395;
					}
				} else if ($latitude < 10.321695) {
					if ($this->polygons[1248]->contains($latitude, $longitude)) {
						return 322;
					}
					if ($this->polygons[1249]->contains($latitude, $longitude)) {
						return 350;
					}
					if ($this->polygons[1250]->contains($latitude, $longitude)) {
						return 350;
					}
					if ($this->polygons[1251]->contains($latitude, $longitude)) {
						return 350;
					} else {
						return 395;
					}
				} else {
					if ($this->polygons[1252]->contains($latitude, $longitude)) {
						return 350;
					}
					if ($this->polygons[1253]->contains($latitude, $longitude)) {
						return 350;
					}
					if ($this->polygons[1254]->contains($latitude, $longitude)) {
						return 395;
					} else {
						return 322;
					}
				}
			} else {
				if ($this->polygons[1255]->contains($latitude, $longitude)) {
					return 322;
				}
				if ($this->polygons[1256]->contains($latitude, $longitude)) {
					return 395;
				} else {
					return 350;
				}
			}
		} else if ($longitude < 35.437428) {
			if ($this->polygons[1257]->contains($latitude, $longitude)) {
				return 350;
			} else {
				return 322;
			}
		} else if ($latitude < 14.285686) {
			if ($this->polygons[1258]->contains($latitude, $longitude)) {
				return 149;
			}
			if ($this->polygons[1259]->contains($latitude, $longitude)) {
				return 149;
			}
			if ($this->polygons[1260]->contains($latitude, $longitude)) {
				return 149;
			}
			if ($this->polygons[1261]->contains($latitude, $longitude)) {
				return 322;
			} else {
				return 350;
			}
		} else {
			if ($this->polygons[1262]->contains($latitude, $longitude)) {
				return 322;
			}
			if ($this->polygons[1263]->contains($latitude, $longitude)) {
				return 350;
			}
			if ($this->polygons[1264]->contains($latitude, $longitude)) {
				return 350;
			}
			if ($this->polygons[1265]->contains($latitude, $longitude)) {
				return 350;
			} else {
				return 149;
			}
		}
	}
	
	protected function call23(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 39.923779) {
			if ($longitude < 18.649839) {
				if ($latitude < 3.973938) {
					if ($longitude < 8.937982) {
						if ($longitude < 7.466374) {
							return 161;
						} else {
							return 201;
						}
					} else if ($longitude < 9.527758) {
						if ($latitude < 0.922485) {
							if ($latitude < 0.668440) {
								return 155;
							} else {
								return 201;
							}
						} else if ($latitude < 1.464501) {
							return 201;
						} else {
							return 326;
						}
					} else if ($longitude < 11.335724) {
						if ($latitude < 0.279823) {
							return 155;
						} else if ($latitude < 2.346989) {
							if ($this->polygons[1266]->contains($latitude, $longitude)) {
								return 155;
							}
							if ($this->polygons[1267]->contains($latitude, $longitude)) {
								return 326;
							} else {
								return 201;
							}
						} else {
							return 326;
						}
					} else if ($longitude < 14.992782) {
						if ($latitude < 2.116439) {
							if ($longitude < 13.164253) {
								if ($this->polygons[1268]->contains($latitude, $longitude)) {
									return 154;
								}
								if ($this->polygons[1269]->contains($latitude, $longitude)) {
									return 154;
								}
								if ($this->polygons[1270]->contains($latitude, $longitude)) {
									return 154;
								} else {
									return 155;
								}
							} else if ($latitude < 1.187690) {
								if ($this->polygons[1271]->contains($latitude, $longitude)) {
									return 155;
								} else {
									return 154;
								}
							} else if ($longitude < 14.078517) {
								if ($this->polygons[1272]->contains($latitude, $longitude)) {
									return 154;
								} else {
									return 155;
								}
							} else {
								if ($this->polygons[1273]->contains($latitude, $longitude)) {
									return 155;
								}
								if ($this->polygons[1274]->contains($latitude, $longitude)) {
									return 326;
								}
								if ($this->polygons[1275]->contains($latitude, $longitude)) {
									return 326;
								} else {
									return 154;
								}
							}
						} else {
							if ($this->polygons[1276]->contains($latitude, $longitude)) {
								return 154;
							}
							if ($this->polygons[1277]->contains($latitude, $longitude)) {
								return 154;
							}
							if ($this->polygons[1278]->contains($latitude, $longitude)) {
								return 155;
							} else {
								return 326;
							}
						}
					} else if ($latitude < 2.116439) {
						if ($longitude < 16.821311) {
							if ($this->polygons[1279]->contains($latitude, $longitude)) {
								return 326;
							} else {
								return 154;
							}
						} else {
							if ($this->polygons[1280]->contains($latitude, $longitude)) {
								return 331;
							} else {
								return 154;
							}
						}
					} else if ($longitude < 16.821311) {
						if ($this->polygons[1281]->contains($latitude, $longitude)) {
							return 154;
						}
						if ($this->polygons[1282]->contains($latitude, $longitude)) {
							return 326;
						} else {
							return 214;
						}
					} else if ($latitude < 3.045189) {
						if ($this->polygons[1283]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 154;
						}
					} else {
						if ($this->polygons[1284]->contains($latitude, $longitude)) {
							return 214;
						}
						if ($this->polygons[1285]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 154;
						}
					}
				} else if ($longitude < 8.341630) {
					if ($latitude < 4.832398) {
						return 96;
					} else {
						if ($this->polygons[1286]->contains($latitude, $longitude)) {
							return 260;
						} else {
							return 96;
						}
					}
				} else if ($latitude < 4.686236) {
					if ($longitude < 8.714308) {
						return 326;
					} else if ($longitude < 15.183470) {
						if ($latitude < 4.054228) {
							if ($longitude < 9.648236) {
								return 326;
							} else {
								if ($this->polygons[1287]->contains($latitude, $longitude)) {
									return 214;
								} else {
									return 326;
								}
							}
						} else {
							if ($this->polygons[1288]->contains($latitude, $longitude)) {
								return 214;
							} else {
								return 326;
							}
						}
					} else {
						if ($this->polygons[1289]->contains($latitude, $longitude)) {
							return 331;
						} else {
							return 214;
						}
					}
				} else if ($latitude < 10.519229) {
					if ($longitude < 13.495735) {
						if ($latitude < 7.602733) {
							if ($longitude < 10.918682) {
								if ($latitude < 6.144484) {
									if ($this->polygons[1290]->contains($latitude, $longitude)) {
										return 326;
									} else {
										return 96;
									}
								} else {
									if ($this->polygons[1291]->contains($latitude, $longitude)) {
										return 326;
									} else {
										return 96;
									}
								}
							} else {
								if ($this->polygons[1292]->contains($latitude, $longitude)) {
									return 96;
								} else {
									return 326;
								}
							}
						} else {
							if ($this->polygons[1293]->contains($latitude, $longitude)) {
								return 326;
							} else {
								return 96;
							}
						}
					} else if ($latitude < 7.602733) {
						if ($longitude < 16.072787) {
							if ($latitude < 6.144484) {
								if ($this->polygons[1294]->contains($latitude, $longitude)) {
									return 326;
								} else {
									return 214;
								}
							} else {
								if ($this->polygons[1295]->contains($latitude, $longitude)) {
									return 202;
								}
								if ($this->polygons[1296]->contains($latitude, $longitude)) {
									return 326;
								} else {
									return 214;
								}
							}
						} else {
							if ($this->polygons[1297]->contains($latitude, $longitude)) {
								return 202;
							}
							if ($this->polygons[1298]->contains($latitude, $longitude)) {
								return 202;
							} else {
								return 214;
							}
						}
					} else if ($longitude < 16.072787) {
						if ($latitude < 9.060981) {
							if ($this->polygons[1299]->contains($latitude, $longitude)) {
								return 326;
							} else {
								return 202;
							}
						} else {
							if ($this->polygons[1300]->contains($latitude, $longitude)) {
								return 96;
							}
							if ($this->polygons[1301]->contains($latitude, $longitude)) {
								return 202;
							} else {
								return 326;
							}
						}
					} else {
						if ($this->polygons[1302]->contains($latitude, $longitude)) {
							return 214;
						}
						if ($this->polygons[1303]->contains($latitude, $longitude)) {
							return 214;
						} else {
							return 202;
						}
					}
				} else if ($longitude < 13.495735) {
					if ($latitude < 13.435726) {
						if ($this->polygons[1304]->contains($latitude, $longitude)) {
							return 260;
						} else {
							return 96;
						}
					} else {
						if ($this->polygons[1305]->contains($latitude, $longitude)) {
							return 96;
						}
						if ($this->polygons[1306]->contains($latitude, $longitude)) {
							return 202;
						} else {
							return 260;
						}
					}
				} else if ($latitude < 13.435726) {
					if ($longitude < 16.072787) {
						if ($latitude < 11.977477) {
							if ($this->polygons[1307]->contains($latitude, $longitude)) {
								return 96;
							}
							if ($this->polygons[1308]->contains($latitude, $longitude)) {
								return 202;
							} else {
								return 326;
							}
						} else if ($longitude < 14.784261) {
							if ($this->polygons[1309]->contains($latitude, $longitude)) {
								return 96;
							}
							if ($this->polygons[1310]->contains($latitude, $longitude)) {
								return 202;
							} else {
								return 326;
							}
						} else {
							if ($this->polygons[1311]->contains($latitude, $longitude)) {
								return 326;
							} else {
								return 202;
							}
						}
					} else {
						return 202;
					}
				} else {
					if ($this->polygons[1312]->contains($latitude, $longitude)) {
						return 96;
					}
					if ($this->polygons[1313]->contains($latitude, $longitude)) {
						return 260;
					}
					if ($this->polygons[1314]->contains($latitude, $longitude)) {
						return 260;
					} else {
						return 202;
					}
				}
			} else if ($longitude < 39.568943) {
				return $this->call22($latitude, $longitude);
			} else if ($latitude < 14.553577) {
				if ($latitude < 3.903177) {
					if ($this->polygons[1315]->contains($latitude, $longitude)) {
						return 350;
					} else {
						return 122;
					}
				} else {
					if ($this->polygons[1316]->contains($latitude, $longitude)) {
						return 149;
					} else {
						return 350;
					}
				}
			} else {
				return 149;
			}
		} else if ($latitude < 14.457556) {
			if ($latitude < 4.141098) {
				if ($this->polygons[1317]->contains($latitude, $longitude)) {
					return 350;
				} else {
					return 122;
				}
			} else if ($longitude < 40.114882) {
				if ($this->polygons[1318]->contains($latitude, $longitude)) {
					return 149;
				} else {
					return 350;
				}
			} else {
				if ($this->polygons[1319]->contains($latitude, $longitude)) {
					return 149;
				} else {
					return 350;
				}
			}
		} else {
			return 149;
		}
	}
	
	protected function call24(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 0.258941) {
			if ($latitude < -8.129065) {
				if ($longitude < 35.916821) {
					if ($longitude < 33.705704) {
						if ($latitude < -15.608835) {
							return $this->call20($latitude, $longitude);
						} else if ($longitude < 13.264205) {
							return 299;
						} else if ($longitude < 24.082119) {
							if ($latitude < -11.397731) {
								if ($this->polygons[1320]->contains($latitude, $longitude)) {
									return 267;
								} else {
									return 299;
								}
							} else if ($longitude < 18.673162) {
								return 299;
							} else if ($longitude < 21.377640) {
								return 299;
							} else if ($latitude < -9.763398) {
								if ($this->polygons[1321]->contains($latitude, $longitude)) {
									return 267;
								}
								if ($this->polygons[1322]->contains($latitude, $longitude)) {
									return 352;
								} else {
									return 299;
								}
							} else {
								if ($this->polygons[1323]->contains($latitude, $longitude)) {
									return 352;
								} else {
									return 299;
								}
							}
						} else if ($latitude < -13.998108) {
							if ($this->polygons[1324]->contains($latitude, $longitude)) {
								return 206;
							}
							if ($this->polygons[1325]->contains($latitude, $longitude)) {
								return 206;
							}
							if ($this->polygons[1326]->contains($latitude, $longitude)) {
								return 267;
							} else {
								return 364;
							}
						} else if ($longitude < 30.774246) {
							if ($latitude < -8.224360) {
								if ($longitude < 27.428183) {
									if ($latitude < -11.111234) {
										if ($longitude < 25.755151) {
											if ($this->polygons[1327]->contains($latitude, $longitude)) {
												return 352;
											} else {
												return 267;
											}
										} else {
											if ($this->polygons[1328]->contains($latitude, $longitude)) {
												return 352;
											} else {
												return 267;
											}
										}
									} else {
										if ($this->polygons[1329]->contains($latitude, $longitude)) {
											return 267;
										} else {
											return 352;
										}
									}
								} else if ($latitude < -11.111234) {
									if ($longitude < 29.101214) {
										if ($latitude < -12.554671) {
											if ($this->polygons[1330]->contains($latitude, $longitude)) {
												return 352;
											} else {
												return 267;
											}
										} else {
											if ($this->polygons[1331]->contains($latitude, $longitude)) {
												return 352;
											} else {
												return 267;
											}
										}
									} else {
										if ($this->polygons[1332]->contains($latitude, $longitude)) {
											return 352;
										} else {
											return 267;
										}
									}
								} else {
									if ($this->polygons[1333]->contains($latitude, $longitude)) {
										return 267;
									} else {
										return 352;
									}
								}
							} else {
								if ($this->polygons[1334]->contains($latitude, $longitude)) {
									return 17;
								} else {
									return 352;
								}
							}
						} else if ($latitude < -11.063586) {
							if ($latitude < -12.530847) {
								if ($this->polygons[1335]->contains($latitude, $longitude)) {
									return 267;
								}
								if ($this->polygons[1336]->contains($latitude, $longitude)) {
									return 267;
								}
								if ($this->polygons[1337]->contains($latitude, $longitude)) {
									return 267;
								} else {
									return 206;
								}
							} else {
								if ($this->polygons[1338]->contains($latitude, $longitude)) {
									return 267;
								} else {
									return 206;
								}
							}
						} else if ($latitude < -9.596325) {
							if ($this->polygons[1339]->contains($latitude, $longitude)) {
								return 17;
							}
							if ($this->polygons[1340]->contains($latitude, $longitude)) {
								return 17;
							}
							if ($this->polygons[1341]->contains($latitude, $longitude)) {
								return 267;
							} else {
								return 206;
							}
						} else if ($longitude < 32.239975) {
							if ($this->polygons[1342]->contains($latitude, $longitude)) {
								return 17;
							} else {
								return 267;
							}
						} else {
							if ($this->polygons[1343]->contains($latitude, $longitude)) {
								return 206;
							}
							if ($this->polygons[1344]->contains($latitude, $longitude)) {
								return 206;
							}
							if ($this->polygons[1345]->contains($latitude, $longitude)) {
								return 267;
							} else {
								return 17;
							}
						}
					} else if ($latitude < -19.090635) {
						return 364;
					} else if ($latitude < -13.609850) {
						if ($latitude < -16.350243) {
							if ($this->polygons[1346]->contains($latitude, $longitude)) {
								return 206;
							} else {
								return 364;
							}
						} else if ($latitude < -14.980046) {
							if ($this->polygons[1347]->contains($latitude, $longitude)) {
								return 206;
							} else {
								return 364;
							}
						} else {
							if ($this->polygons[1348]->contains($latitude, $longitude)) {
								return 206;
							}
							if ($this->polygons[1349]->contains($latitude, $longitude)) {
								return 206;
							} else {
								return 364;
							}
						}
					} else if ($latitude < -10.869457) {
						if ($this->polygons[1350]->contains($latitude, $longitude)) {
							return 206;
						}
						if ($this->polygons[1351]->contains($latitude, $longitude)) {
							return 364;
						} else {
							return 17;
						}
					} else {
						if ($this->polygons[1352]->contains($latitude, $longitude)) {
							return 206;
						} else {
							return 17;
						}
					}
				} else if ($longitude < 40.443222) {
					if ($latitude < -16.279331) {
						if ($latitude < -46.609653) {
							return 169;
						} else {
							return 364;
						}
					} else if ($latitude < -10.481017) {
						if ($latitude < -12.512221) {
							return 364;
						} else {
							if ($this->polygons[1353]->contains($latitude, $longitude)) {
								return 17;
							} else {
								return 364;
							}
						}
					} else {
						return 17;
					}
				} else if ($longitude < 40.842995) {
					return 364;
				} else {
					return 101;
				}
			} else if ($longitude < 39.579086) {
				return $this->call21($latitude, $longitude);
			} else if ($latitude < -4.865081) {
				return 17;
			} else if ($latitude < -1.742535) {
				return 122;
			} else if ($longitude < 41.567944) {
				if ($this->polygons[1354]->contains($latitude, $longitude)) {
					return 250;
				} else {
					return 122;
				}
			} else {
				return 250;
			}
		} else if ($longitude < 40.467030) {
			return $this->call23($latitude, $longitude);
		} else if ($latitude < 15.249888) {
			if ($latitude < 13.170722) {
				if ($latitude < 12.845361) {
					if ($latitude < 4.667434) {
						if ($this->polygons[1355]->contains($latitude, $longitude)) {
							return 122;
						}
						if ($this->polygons[1356]->contains($latitude, $longitude)) {
							return 250;
						} else {
							return 350;
						}
					} else if ($latitude < 11.730194) {
						if ($this->polygons[1357]->contains($latitude, $longitude)) {
							return 250;
						}
						if ($this->polygons[1358]->contains($latitude, $longitude)) {
							return 350;
						} else {
							return 311;
						}
					} else {
						if ($this->polygons[1359]->contains($latitude, $longitude)) {
							return 311;
						}
						if ($this->polygons[1360]->contains($latitude, $longitude)) {
							return 350;
						} else {
							return 149;
						}
					}
				} else if ($longitude < 42.010485) {
					if ($this->polygons[1361]->contains($latitude, $longitude)) {
						return 149;
					} else {
						return 350;
					}
				} else {
					return 149;
				}
			} else if ($longitude < 42.562199) {
				if ($longitude < 41.809405) {
					if ($latitude < 14.277273) {
						if ($this->polygons[1362]->contains($latitude, $longitude)) {
							return 350;
						} else {
							return 149;
						}
					} else {
						return 149;
					}
				} else if ($latitude < 13.918802) {
					return 149;
				} else {
					return 215;
				}
			} else {
				return 215;
			}
		} else if ($longitude < 41.297417) {
			return 149;
		} else if ($latitude < 15.769584) {
			return 215;
		} else if ($longitude < 42.506054) {
			return 163;
		} else {
			return 215;
		}
	}
	
	protected function call25(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 25.886833) {
			if ($longitude < 38.296612) {
				if ($longitude < 36.739277) {
					if ($longitude < 36.155724) {
						if ($longitude < 35.794861) {
							if ($longitude < 35.183971) {
								if ($longitude < 24.002261) {
									if ($longitude < 15.562867) {
										if ($this->polygons[1363]->contains($latitude, $longitude)) {
											return 202;
										}
										if ($this->polygons[1364]->contains($latitude, $longitude)) {
											return 202;
										}
										if ($this->polygons[1365]->contains($latitude, $longitude)) {
											return 202;
										}
										if ($this->polygons[1366]->contains($latitude, $longitude)) {
											return 333;
										}
										if ($this->polygons[1367]->contains($latitude, $longitude)) {
											return 380;
										} else {
											return 260;
										}
									} else {
										if ($this->polygons[1368]->contains($latitude, $longitude)) {
											return 260;
										}
										if ($this->polygons[1369]->contains($latitude, $longitude)) {
											return 260;
										}
										if ($this->polygons[1370]->contains($latitude, $longitude)) {
											return 322;
										}
										if ($this->polygons[1371]->contains($latitude, $longitude)) {
											return 333;
										} else {
											return 202;
										}
									}
								} else {
									if ($this->polygons[1372]->contains($latitude, $longitude)) {
										return 322;
									}
									if ($this->polygons[1373]->contains($latitude, $longitude)) {
										return 333;
									} else {
										return 112;
									}
								}
							} else if ($latitude < 23.146889) {
								if ($longitude < 35.623360) {
									if ($this->polygons[1374]->contains($latitude, $longitude)) {
										return 112;
									} else {
										return 322;
									}
								} else {
									return 322;
								}
							} else {
								return 112;
							}
						} else {
							return 322;
						}
					} else if ($latitude < 22.913195) {
						return 322;
					} else if ($longitude < 36.208694) {
						return 112;
					} else {
						return 163;
					}
				} else if ($latitude < 22.173639) {
					if ($latitude < 17.632252) {
						if ($this->polygons[1375]->contains($latitude, $longitude)) {
							return 149;
						} else {
							return 322;
						}
					} else {
						return 322;
					}
				} else {
					return 163;
				}
			} else if ($latitude < 18.271140) {
				if ($longitude < 41.825443) {
					if ($longitude < 40.183971) {
						if ($latitude < 18.003084) {
							if ($longitude < 38.562808) {
								if ($this->polygons[1376]->contains($latitude, $longitude)) {
									return 322;
								} else {
									return 149;
								}
							} else {
								return 149;
							}
						} else {
							return 322;
						}
					} else {
						return 163;
					}
				} else if ($longitude < 42.777195) {
					return 163;
				} else if ($latitude < 16.674110) {
					if ($this->polygons[1377]->contains($latitude, $longitude)) {
						return 215;
					} else {
						return 163;
					}
				} else {
					if ($this->polygons[1378]->contains($latitude, $longitude)) {
						return 215;
					} else {
						return 163;
					}
				}
			} else {
				return 163;
			}
		} else if ($longitude < 32.013668) {
			if ($longitude < 26.336222) {
				if ($longitude < 23.207056) {
					if ($longitude < 11.598278) {
						if ($latitude < 33.904083) {
							if ($longitude < 11.071555) {
								if ($latitude < 29.895458) {
									if ($this->polygons[1379]->contains($latitude, $longitude)) {
										return 380;
									} else {
										return 333;
									}
								} else {
									if ($this->polygons[1380]->contains($latitude, $longitude)) {
										return 333;
									}
									if ($this->polygons[1381]->contains($latitude, $longitude)) {
										return 380;
									} else {
										return 318;
									}
								}
							} else if ($latitude < 33.168999) {
								if ($latitude < 32.523556) {
									if ($this->polygons[1382]->contains($latitude, $longitude)) {
										return 318;
									} else {
										return 333;
									}
								} else {
									if ($this->polygons[1383]->contains($latitude, $longitude)) {
										return 333;
									} else {
										return 318;
									}
								}
							} else {
								return 318;
							}
						} else if ($longitude < 8.473444) {
							if ($latitude < 35.242054) {
								if ($this->polygons[1384]->contains($latitude, $longitude)) {
									return 380;
								} else {
									return 318;
								}
							} else {
								if ($this->polygons[1385]->contains($latitude, $longitude)) {
									return 318;
								} else {
									return 380;
								}
							}
						} else {
							return 318;
						}
					} else if ($latitude < 36.082027) {
						if ($latitude < 35.877888) {
							if ($latitude < 35.528362) {
								if ($latitude < 34.318742) {
									return 271;
								} else {
									return 333;
								}
							} else if ($longitude < 13.613921) {
								return 271;
							} else {
								return 302;
							}
						} else {
							return 302;
						}
					} else {
						return 152;
					}
				} else if ($latitude < 32.286731) {
					if ($longitude < 23.294111) {
						return 333;
					} else {
						if ($this->polygons[1386]->contains($latitude, $longitude)) {
							return 112;
						} else {
							return 333;
						}
					}
				} else {
					return 152;
				}
			} else if ($latitude < 31.601473) {
				return 112;
			} else if ($longitude < 28.246389) {
				return 152;
			} else if ($longitude < 29.647083) {
				if ($longitude < 29.370945) {
					return 205;
				} else if ($latitude < 36.115612) {
					return 152;
				} else if ($longitude < 29.513166) {
					if ($latitude < 36.188656) {
						return 152;
					} else {
						return 205;
					}
				} else {
					if ($this->polygons[1387]->contains($latitude, $longitude)) {
						return 152;
					} else {
						return 205;
					}
				}
			} else {
				return 205;
			}
		} else if ($longitude < 33.897335) {
			if ($latitude < 31.414772) {
				return 112;
			} else if ($latitude < 35.429267) {
				return 174;
			} else {
				return 205;
			}
		} else if ($latitude < 27.855917) {
			if ($longitude < 34.419202) {
				return 112;
			} else {
				return 163;
			}
		} else if ($latitude < 28.084833) {
			if ($longitude < 34.444985) {
				return 112;
			} else {
				return 163;
			}
		} else if ($latitude < 34.684856) {
			if ($longitude < 34.546276) {
				if ($latitude < 30.429844) {
					if ($this->polygons[1388]->contains($latitude, $longitude)) {
						return 8;
					} else {
						return 112;
					}
				} else if ($latitude < 31.523390) {
					if ($this->polygons[1389]->contains($latitude, $longitude)) {
						return 112;
					}
					if ($this->polygons[1390]->contains($latitude, $longitude)) {
						return 255;
					} else {
						return 8;
					}
				} else {
					if ($this->polygons[1391]->contains($latitude, $longitude)) {
						return 255;
					} else {
						return 8;
					}
				}
			} else if ($longitude < 34.557480) {
				if ($latitude < 30.410903) {
					if ($this->polygons[1392]->contains($latitude, $longitude)) {
						return 8;
					} else {
						return 112;
					}
				} else if ($latitude < 30.494701) {
					if ($this->polygons[1393]->contains($latitude, $longitude)) {
						return 112;
					} else {
						return 8;
					}
				} else {
					if ($this->polygons[1394]->contains($latitude, $longitude)) {
						return 112;
					} else {
						return 8;
					}
				}
			} else if ($longitude < 38.878267) {
				if ($latitude < 31.384845) {
					if ($longitude < 36.717874) {
						if ($latitude < 29.734839) {
							if ($this->polygons[1395]->contains($latitude, $longitude)) {
								return 8;
							}
							if ($this->polygons[1396]->contains($latitude, $longitude)) {
								return 112;
							}
							if ($this->polygons[1397]->contains($latitude, $longitude)) {
								return 193;
							} else {
								return 163;
							}
						} else {
							if ($this->polygons[1398]->contains($latitude, $longitude)) {
								return 112;
							}
							if ($this->polygons[1399]->contains($latitude, $longitude)) {
								return 163;
							}
							if ($this->polygons[1400]->contains($latitude, $longitude)) {
								return 193;
							}
							if ($this->polygons[1401]->contains($latitude, $longitude)) {
								return 344;
							} else {
								return 8;
							}
						}
					} else {
						if ($this->polygons[1402]->contains($latitude, $longitude)) {
							return 193;
						} else {
							return 163;
						}
					}
				} else if ($longitude < 36.717874) {
					if ($latitude < 33.034851) {
						if ($longitude < 35.637677) {
							if ($latitude < 32.209848) {
								if ($this->polygons[1403]->contains($latitude, $longitude)) {
									return 193;
								}
								if ($this->polygons[1404]->contains($latitude, $longitude)) {
									return 344;
								} else {
									return 8;
								}
							} else {
								if ($this->polygons[1405]->contains($latitude, $longitude)) {
									return 193;
								}
								if ($this->polygons[1406]->contains($latitude, $longitude)) {
									return 344;
								}
								if ($this->polygons[1407]->contains($latitude, $longitude)) {
									return 368;
								}
								if ($this->polygons[1408]->contains($latitude, $longitude)) {
									return 368;
								} else {
									return 8;
								}
							}
						} else {
							if ($this->polygons[1409]->contains($latitude, $longitude)) {
								return 8;
							}
							if ($this->polygons[1410]->contains($latitude, $longitude)) {
								return 8;
							}
							if ($this->polygons[1411]->contains($latitude, $longitude)) {
								return 193;
							} else {
								return 368;
							}
						}
					} else if ($latitude < 33.859854) {
						if ($this->polygons[1412]->contains($latitude, $longitude)) {
							return 8;
						}
						if ($this->polygons[1413]->contains($latitude, $longitude)) {
							return 368;
						} else {
							return 404;
						}
					} else {
						if ($this->polygons[1414]->contains($latitude, $longitude)) {
							return 368;
						} else {
							return 404;
						}
					}
				} else {
					if ($this->polygons[1415]->contains($latitude, $longitude)) {
						return 28;
					}
					if ($this->polygons[1416]->contains($latitude, $longitude)) {
						return 163;
					}
					if ($this->polygons[1417]->contains($latitude, $longitude)) {
						return 368;
					} else {
						return 193;
					}
				}
			} else {
				if ($this->polygons[1418]->contains($latitude, $longitude)) {
					return 163;
				}
				if ($this->polygons[1419]->contains($latitude, $longitude)) {
					return 193;
				}
				if ($this->polygons[1420]->contains($latitude, $longitude)) {
					return 368;
				} else {
					return 28;
				}
			}
		} else if ($longitude < 34.597916) {
			if ($latitude < 35.956875) {
				return 174;
			} else {
				return 205;
			}
		} else if ($longitude < 36.704777) {
			if ($this->polygons[1421]->contains($latitude, $longitude)) {
				return 205;
			} else {
				return 368;
			}
		} else {
			if ($this->polygons[1422]->contains($latitude, $longitude)) {
				return 368;
			} else {
				return 28;
			}
		}
	}
	
	protected function call26(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 19.449118) {
			if ($latitude < 46.538750) {
				if ($longitude < 18.806608) {
					if ($latitude < 45.239193) {
						if ($this->polygons[1423]->contains($latitude, $longitude)) {
							return 348;
						} else {
							return 30;
						}
					} else if ($longitude < 16.881983) {
						if ($this->polygons[1424]->contains($latitude, $longitude)) {
							return 177;
						}
						if ($this->polygons[1425]->contains($latitude, $longitude)) {
							return 198;
						} else {
							return 30;
						}
					} else {
						if ($this->polygons[1426]->contains($latitude, $longitude)) {
							return 30;
						} else {
							return 198;
						}
					}
				} else if ($latitude < 45.712029) {
					if ($this->polygons[1427]->contains($latitude, $longitude)) {
						return 30;
					}
					if ($this->polygons[1428]->contains($latitude, $longitude)) {
						return 348;
					} else {
						return 209;
					}
				} else {
					if ($this->polygons[1429]->contains($latitude, $longitude)) {
						return 30;
					}
					if ($this->polygons[1430]->contains($latitude, $longitude)) {
						return 30;
					}
					if ($this->polygons[1431]->contains($latitude, $longitude)) {
						return 198;
					} else {
						return 209;
					}
				}
			} else if ($latitude < 48.102692) {
				if ($longitude < 17.203238) {
					if ($longitude < 16.080298) {
						if ($this->polygons[1432]->contains($latitude, $longitude)) {
							return 177;
						} else {
							return 276;
						}
					} else if ($latitude < 47.320721) {
						if ($this->polygons[1433]->contains($latitude, $longitude)) {
							return 177;
						}
						if ($this->polygons[1434]->contains($latitude, $longitude)) {
							return 276;
						} else {
							return 198;
						}
					} else {
						if ($this->polygons[1435]->contains($latitude, $longitude)) {
							return 162;
						}
						if ($this->polygons[1436]->contains($latitude, $longitude)) {
							return 198;
						} else {
							return 276;
						}
					}
				} else {
					if ($this->polygons[1437]->contains($latitude, $longitude)) {
						return 198;
					} else {
						return 162;
					}
				}
			} else if ($longitude < 17.203238) {
				if ($latitude < 49.580790) {
					if ($this->polygons[1438]->contains($latitude, $longitude)) {
						return 162;
					}
					if ($this->polygons[1439]->contains($latitude, $longitude)) {
						return 220;
					}
					if ($this->polygons[1440]->contains($latitude, $longitude)) {
						return 220;
					} else {
						return 276;
					}
				} else if ($longitude < 16.080298) {
					if ($this->polygons[1441]->contains($latitude, $longitude)) {
						return 220;
					} else {
						return 186;
					}
				} else {
					if ($this->polygons[1442]->contains($latitude, $longitude)) {
						return 220;
					} else {
						return 186;
					}
				}
			} else if ($latitude < 49.580790) {
				if ($this->polygons[1443]->contains($latitude, $longitude)) {
					return 186;
				}
				if ($this->polygons[1444]->contains($latitude, $longitude)) {
					return 220;
				} else {
					return 162;
				}
			} else {
				if ($this->polygons[1445]->contains($latitude, $longitude)) {
					return 162;
				}
				if ($this->polygons[1446]->contains($latitude, $longitude)) {
					return 220;
				} else {
					return 186;
				}
			}
		} else if ($longitude < 24.644997) {
			if ($latitude < 46.189445) {
				if ($longitude < 22.047057) {
					if ($longitude < 20.748087) {
						if ($this->polygons[1447]->contains($latitude, $longitude)) {
							return 198;
						}
						if ($this->polygons[1448]->contains($latitude, $longitude)) {
							return 198;
						}
						if ($this->polygons[1449]->contains($latitude, $longitude)) {
							return 266;
						} else {
							return 209;
						}
					} else {
						if ($this->polygons[1450]->contains($latitude, $longitude)) {
							return 209;
						} else {
							return 266;
						}
					}
				} else {
					return 266;
				}
			} else if ($latitude < 46.192638) {
				if ($longitude < 20.503389) {
					if ($this->polygons[1451]->contains($latitude, $longitude)) {
						return 266;
					} else {
						return 198;
					}
				} else if ($longitude < 20.511267) {
					if ($this->polygons[1452]->contains($latitude, $longitude)) {
						return 266;
					} else {
						return 198;
					}
				} else {
					if ($this->polygons[1453]->contains($latitude, $longitude)) {
						return 266;
					} else {
						return 198;
					}
				}
			} else if ($longitude < 22.047057) {
				if ($latitude < 48.625763) {
					if ($longitude < 20.748087) {
						if ($this->polygons[1454]->contains($latitude, $longitude)) {
							return 198;
						}
						if ($this->polygons[1455]->contains($latitude, $longitude)) {
							return 266;
						} else {
							return 162;
						}
					} else if ($latitude < 47.409201) {
						if ($this->polygons[1456]->contains($latitude, $longitude)) {
							return 198;
						} else {
							return 266;
						}
					} else {
						if ($this->polygons[1457]->contains($latitude, $longitude)) {
							return 162;
						}
						if ($this->polygons[1458]->contains($latitude, $longitude)) {
							return 266;
						} else {
							return 198;
						}
					}
				} else {
					if ($this->polygons[1459]->contains($latitude, $longitude)) {
						return 162;
					} else {
						return 186;
					}
				}
			} else if ($latitude < 48.625763) {
				if ($longitude < 23.346027) {
					if ($latitude < 47.409201) {
						return 266;
					} else if ($longitude < 22.696542) {
						if ($this->polygons[1460]->contains($latitude, $longitude)) {
							return 162;
						}
						if ($this->polygons[1461]->contains($latitude, $longitude)) {
							return 266;
						}
						if ($this->polygons[1462]->contains($latitude, $longitude)) {
							return 387;
						} else {
							return 198;
						}
					} else {
						if ($this->polygons[1463]->contains($latitude, $longitude)) {
							return 198;
						}
						if ($this->polygons[1464]->contains($latitude, $longitude)) {
							return 266;
						} else {
							return 387;
						}
					}
				} else {
					if ($this->polygons[1465]->contains($latitude, $longitude)) {
						return 266;
					}
					if ($this->polygons[1466]->contains($latitude, $longitude)) {
						return 275;
					}
					if ($this->polygons[1467]->contains($latitude, $longitude)) {
						return 275;
					} else {
						return 387;
					}
				}
			} else if ($longitude < 23.346027) {
				if ($latitude < 49.842325) {
					if ($longitude < 22.696542) {
						if ($this->polygons[1468]->contains($latitude, $longitude)) {
							return 162;
						}
						if ($this->polygons[1469]->contains($latitude, $longitude)) {
							return 275;
						}
						if ($this->polygons[1470]->contains($latitude, $longitude)) {
							return 387;
						} else {
							return 186;
						}
					} else {
						if ($this->polygons[1471]->contains($latitude, $longitude)) {
							return 186;
						}
						if ($this->polygons[1472]->contains($latitude, $longitude)) {
							return 186;
						}
						if ($this->polygons[1473]->contains($latitude, $longitude)) {
							return 387;
						} else {
							return 275;
						}
					}
				} else {
					if ($this->polygons[1474]->contains($latitude, $longitude)) {
						return 275;
					} else {
						return 186;
					}
				}
			} else {
				if ($this->polygons[1475]->contains($latitude, $longitude)) {
					return 186;
				}
				if ($this->polygons[1476]->contains($latitude, $longitude)) {
					return 387;
				} else {
					return 275;
				}
			}
		} else if ($latitude < 47.972097) {
			if ($longitude < 27.390221) {
				if ($this->polygons[1477]->contains($latitude, $longitude)) {
					return 275;
				}
				if ($this->polygons[1478]->contains($latitude, $longitude)) {
					return 294;
				} else {
					return 266;
				}
			} else if ($latitude < 46.428702) {
				if ($longitude < 28.762833) {
					if ($this->polygons[1479]->contains($latitude, $longitude)) {
						return 266;
					}
					if ($this->polygons[1480]->contains($latitude, $longitude)) {
						return 275;
					} else {
						return 294;
					}
				} else {
					if ($this->polygons[1481]->contains($latitude, $longitude)) {
						return 266;
					}
					if ($this->polygons[1482]->contains($latitude, $longitude)) {
						return 294;
					}
					if ($this->polygons[1483]->contains($latitude, $longitude)) {
						return 294;
					}
					if ($this->polygons[1484]->contains($latitude, $longitude)) {
						return 294;
					}
					if ($this->polygons[1485]->contains($latitude, $longitude)) {
						return 294;
					}
					if ($this->polygons[1486]->contains($latitude, $longitude)) {
						return 294;
					} else {
						return 275;
					}
				}
			} else if ($longitude < 28.762833) {
				if ($this->polygons[1487]->contains($latitude, $longitude)) {
					return 266;
				} else {
					return 294;
				}
			} else if ($latitude < 47.200400) {
				if ($longitude < 29.449139) {
					if ($this->polygons[1488]->contains($latitude, $longitude)) {
						return 275;
					}
					if ($this->polygons[1489]->contains($latitude, $longitude)) {
						return 275;
					} else {
						return 294;
					}
				} else {
					if ($this->polygons[1490]->contains($latitude, $longitude)) {
						return 294;
					} else {
						return 275;
					}
				}
			} else {
				if ($this->polygons[1491]->contains($latitude, $longitude)) {
					return 294;
				} else {
					return 275;
				}
			}
		} else if ($longitude < 27.390221) {
			if ($latitude < 49.515492) {
				if ($longitude < 26.017609) {
					if ($this->polygons[1492]->contains($latitude, $longitude)) {
						return 266;
					} else {
						return 275;
					}
				} else if ($latitude < 48.743795) {
					if ($longitude < 26.703915) {
						if ($this->polygons[1493]->contains($latitude, $longitude)) {
							return 266;
						}
						if ($this->polygons[1494]->contains($latitude, $longitude)) {
							return 294;
						} else {
							return 275;
						}
					} else {
						if ($this->polygons[1495]->contains($latitude, $longitude)) {
							return 266;
						}
						if ($this->polygons[1496]->contains($latitude, $longitude)) {
							return 275;
						} else {
							return 294;
						}
					}
				} else {
					return 275;
				}
			} else {
				return 275;
			}
		} else {
			if ($this->polygons[1497]->contains($latitude, $longitude)) {
				return 294;
			}
			if ($this->polygons[1498]->contains($latitude, $longitude)) {
				return 294;
			} else {
				return 275;
			}
		}
	}
	
	protected function call27(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 51.058887) {
			if ($longitude < 30.135445) {
				if ($longitude < 14.957358) {
					if ($latitude < 45.246277) {
						return 30;
					} else if ($latitude < 46.630390) {
						if ($longitude < 13.369805) {
							if ($latitude < 45.721138) {
								return 271;
							} else {
								if ($this->polygons[1499]->contains($latitude, $longitude)) {
									return 276;
								} else {
									return 271;
								}
							}
						} else if ($latitude < 45.749973) {
							if ($longitude < 13.470082) {
								return 271;
							} else if ($longitude < 13.552361) {
								if ($latitude < 45.506027) {
									return 30;
								} else {
									return 271;
								}
							} else {
								if ($this->polygons[1500]->contains($latitude, $longitude)) {
									return 177;
								}
								if ($this->polygons[1501]->contains($latitude, $longitude)) {
									return 271;
								} else {
									return 30;
								}
							}
						} else if ($longitude < 14.955778) {
							if ($this->polygons[1502]->contains($latitude, $longitude)) {
								return 271;
							}
							if ($this->polygons[1503]->contains($latitude, $longitude)) {
								return 276;
							} else {
								return 177;
							}
						} else {
							if ($this->polygons[1504]->contains($latitude, $longitude)) {
								return 276;
							} else {
								return 177;
							}
						}
					} else if ($latitude < 47.915885) {
						if ($latitude < 47.721027) {
							if ($this->polygons[1505]->contains($latitude, $longitude)) {
								return 6;
							} else {
								return 276;
							}
						} else {
							if ($this->polygons[1506]->contains($latitude, $longitude)) {
								return 6;
							} else {
								return 276;
							}
						}
					} else if ($latitude < 49.336078) {
						if ($longitude < 13.960470) {
							if ($this->polygons[1507]->contains($latitude, $longitude)) {
								return 220;
							}
							if ($this->polygons[1508]->contains($latitude, $longitude)) {
								return 276;
							} else {
								return 6;
							}
						} else {
							if ($this->polygons[1509]->contains($latitude, $longitude)) {
								return 276;
							}
							if ($this->polygons[1510]->contains($latitude, $longitude)) {
								return 276;
							} else {
								return 220;
							}
						}
					} else {
						if ($this->polygons[1511]->contains($latitude, $longitude)) {
							return 6;
						}
						if ($this->polygons[1512]->contains($latitude, $longitude)) {
							return 186;
						} else {
							return 220;
						}
					}
				} else {
					return $this->call26($latitude, $longitude);
				}
			} else if ($longitude < 32.325027) {
				return 275;
			} else if ($longitude < 33.260555) {
				if ($latitude < 45.807167) {
					return 197;
				} else {
					return 275;
				}
			} else if ($longitude < 37.223877) {
				if ($latitude < 45.442917) {
					if ($longitude < 36.583805) {
						if ($this->polygons[1513]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 197;
						}
					} else {
						if ($this->polygons[1514]->contains($latitude, $longitude)) {
							return 197;
						} else {
							return 183;
						}
					}
				} else if ($latitude < 45.476776) {
					return 197;
				} else if ($latitude < 48.130928) {
					if ($longitude < 35.246422) {
						if ($latitude < 46.282494) {
							if ($longitude < 34.253489) {
								if ($this->polygons[1515]->contains($latitude, $longitude)) {
									return 197;
								} else {
									return 275;
								}
							} else {
								if ($this->polygons[1516]->contains($latitude, $longitude)) {
									return 146;
								}
								if ($this->polygons[1517]->contains($latitude, $longitude)) {
									return 197;
								} else {
									return 275;
								}
							}
						} else if ($longitude < 34.253489) {
							if ($this->polygons[1518]->contains($latitude, $longitude)) {
								return 146;
							} else {
								return 275;
							}
						} else if ($latitude < 47.206711) {
							if ($this->polygons[1519]->contains($latitude, $longitude)) {
								return 275;
							} else {
								return 146;
							}
						} else {
							if ($this->polygons[1520]->contains($latitude, $longitude)) {
								return 146;
							} else {
								return 275;
							}
						}
					} else if ($longitude < 36.235149) {
						if ($this->polygons[1521]->contains($latitude, $longitude)) {
							return 275;
						} else {
							return 146;
						}
					} else {
						if ($this->polygons[1522]->contains($latitude, $longitude)) {
							return 275;
						}
						if ($this->polygons[1523]->contains($latitude, $longitude)) {
							return 275;
						} else {
							return 146;
						}
					}
				} else if ($longitude < 35.303777) {
					if ($this->polygons[1524]->contains($latitude, $longitude)) {
						return 183;
					} else {
						return 275;
					}
				} else {
					if ($this->polygons[1525]->contains($latitude, $longitude)) {
						return 183;
					} else {
						return 275;
					}
				}
			} else if ($latitude < 46.770611) {
				return 183;
			} else if ($longitude < 40.207390) {
				if ($latitude < 48.914749) {
					if ($longitude < 38.715633) {
						if ($this->polygons[1526]->contains($latitude, $longitude)) {
							return 183;
						}
						if ($this->polygons[1527]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 275;
						}
					} else {
						if ($this->polygons[1528]->contains($latitude, $longitude)) {
							return 275;
						} else {
							return 183;
						}
					}
				} else {
					if ($this->polygons[1529]->contains($latitude, $longitude)) {
						return 275;
					} else {
						return 183;
					}
				}
			} else if ($latitude < 48.914749) {
				if ($this->polygons[1530]->contains($latitude, $longitude)) {
					return 99;
				} else {
					return 183;
				}
			} else {
				if ($this->polygons[1531]->contains($latitude, $longitude)) {
					return 183;
				} else {
					return 99;
				}
			}
		} else if ($longitude < 15.497833) {
			if ($latitude < 54.210609) {
				if ($longitude < 13.778584) {
					return 6;
				} else if ($longitude < 13.804861) {
					return 6;
				} else if ($longitude < 14.358836) {
					if ($latitude < 53.741001) {
						if ($latitude < 53.088120) {
							if ($this->polygons[1532]->contains($latitude, $longitude)) {
								return 186;
							} else {
								return 6;
							}
						} else {
							if ($this->polygons[1533]->contains($latitude, $longitude)) {
								return 186;
							} else {
								return 6;
							}
						}
					} else if ($longitude < 14.092113) {
						return 6;
					} else if ($latitude < 53.759693) {
						return 6;
					} else if ($longitude < 14.224361) {
						if ($this->polygons[1534]->contains($latitude, $longitude)) {
							return 186;
						} else {
							return 6;
						}
					} else {
						return 186;
					}
				} else if ($latitude < 53.467436) {
					if ($latitude < 52.747607) {
						if ($this->polygons[1535]->contains($latitude, $longitude)) {
							return 6;
						} else {
							return 186;
						}
					} else {
						if ($this->polygons[1536]->contains($latitude, $longitude)) {
							return 6;
						} else {
							return 186;
						}
					}
				} else {
					return 186;
				}
			} else if ($latitude < 54.683807) {
				return 6;
			} else if ($latitude < 55.300140) {
				return 319;
			} else {
				return 375;
			}
		} else if ($longitude < 16.890838) {
			if ($latitude < 54.592905) {
				return 186;
			} else {
				return 375;
			}
		} else if ($longitude < 35.202944) {
			if ($longitude < 22.892805) {
				if ($latitude < 55.724445) {
					if ($latitude < 54.813721) {
						if ($this->polygons[1537]->contains($latitude, $longitude)) {
							return 53;
						}
						if ($this->polygons[1538]->contains($latitude, $longitude)) {
							return 175;
						}
						if ($this->polygons[1539]->contains($latitude, $longitude)) {
							return 175;
						} else {
							return 186;
						}
					} else if ($longitude < 18.363342) {
						return 186;
					} else {
						if ($this->polygons[1540]->contains($latitude, $longitude)) {
							return 53;
						}
						if ($this->polygons[1541]->contains($latitude, $longitude)) {
							return 53;
						} else {
							return 175;
						}
					}
				} else {
					if ($this->polygons[1542]->contains($latitude, $longitude)) {
						return 53;
					} else {
						return 332;
					}
				}
			} else if ($longitude < 29.047875) {
				if ($longitude < 25.970340) {
					if ($latitude < 53.979597) {
						if ($longitude < 24.431573) {
							if ($latitude < 52.519242) {
								if ($longitude < 23.662189) {
									if ($this->polygons[1543]->contains($latitude, $longitude)) {
										return 275;
									}
									if ($this->polygons[1544]->contains($latitude, $longitude)) {
										return 275;
									}
									if ($this->polygons[1545]->contains($latitude, $longitude)) {
										return 275;
									}
									if ($this->polygons[1546]->contains($latitude, $longitude)) {
										return 275;
									}
									if ($this->polygons[1547]->contains($latitude, $longitude)) {
										return 399;
									}
									if ($this->polygons[1548]->contains($latitude, $longitude)) {
										return 399;
									} else {
										return 186;
									}
								} else {
									if ($this->polygons[1549]->contains($latitude, $longitude)) {
										return 186;
									}
									if ($this->polygons[1550]->contains($latitude, $longitude)) {
										return 186;
									}
									if ($this->polygons[1551]->contains($latitude, $longitude)) {
										return 186;
									}
									if ($this->polygons[1552]->contains($latitude, $longitude)) {
										return 186;
									}
									if ($this->polygons[1553]->contains($latitude, $longitude)) {
										return 399;
									}
									if ($this->polygons[1554]->contains($latitude, $longitude)) {
										return 399;
									} else {
										return 275;
									}
								}
							} else {
								if ($this->polygons[1555]->contains($latitude, $longitude)) {
									return 53;
								}
								if ($this->polygons[1556]->contains($latitude, $longitude)) {
									return 186;
								} else {
									return 399;
								}
							}
						} else {
							if ($this->polygons[1557]->contains($latitude, $longitude)) {
								return 53;
							}
							if ($this->polygons[1558]->contains($latitude, $longitude)) {
								return 53;
							}
							if ($this->polygons[1559]->contains($latitude, $longitude)) {
								return 275;
							} else {
								return 399;
							}
						}
					} else if ($longitude < 24.431573) {
						if ($this->polygons[1560]->contains($latitude, $longitude)) {
							return 186;
						}
						if ($this->polygons[1561]->contains($latitude, $longitude)) {
							return 332;
						} else {
							return 53;
						}
					} else {
						if ($this->polygons[1562]->contains($latitude, $longitude)) {
							return 332;
						}
						if ($this->polygons[1563]->contains($latitude, $longitude)) {
							return 399;
						}
						if ($this->polygons[1564]->contains($latitude, $longitude)) {
							return 399;
						} else {
							return 53;
						}
					}
				} else if ($latitude < 53.979597) {
					if ($this->polygons[1565]->contains($latitude, $longitude)) {
						return 399;
					} else {
						return 275;
					}
				} else if ($longitude < 27.509107) {
					if ($latitude < 55.439952) {
						if ($this->polygons[1566]->contains($latitude, $longitude)) {
							return 53;
						} else {
							return 399;
						}
					} else {
						if ($this->polygons[1567]->contains($latitude, $longitude)) {
							return 53;
						}
						if ($this->polygons[1568]->contains($latitude, $longitude)) {
							return 399;
						} else {
							return 332;
						}
					}
				} else {
					if ($this->polygons[1569]->contains($latitude, $longitude)) {
						return 332;
					}
					if ($this->polygons[1570]->contains($latitude, $longitude)) {
						return 399;
					} else {
						return 183;
					}
				}
			} else if ($longitude < 32.125410) {
				if ($latitude < 53.979597) {
					if ($longitude < 30.586642) {
						if ($this->polygons[1571]->contains($latitude, $longitude)) {
							return 275;
						}
						if ($this->polygons[1572]->contains($latitude, $longitude)) {
							return 275;
						}
						if ($this->polygons[1573]->contains($latitude, $longitude)) {
							return 275;
						}
						if ($this->polygons[1574]->contains($latitude, $longitude)) {
							return 275;
						} else {
							return 399;
						}
					} else if ($latitude < 52.519242) {
						if ($this->polygons[1575]->contains($latitude, $longitude)) {
							return 183;
						}
						if ($this->polygons[1576]->contains($latitude, $longitude)) {
							return 275;
						} else {
							return 399;
						}
					} else {
						if ($this->polygons[1577]->contains($latitude, $longitude)) {
							return 399;
						} else {
							return 183;
						}
					}
				} else if ($longitude < 30.586642) {
					if ($this->polygons[1578]->contains($latitude, $longitude)) {
						return 399;
					} else {
						return 183;
					}
				} else {
					if ($this->polygons[1579]->contains($latitude, $longitude)) {
						return 399;
					} else {
						return 183;
					}
				}
			} else if ($latitude < 53.979597) {
				if ($longitude < 33.664177) {
					if ($this->polygons[1580]->contains($latitude, $longitude)) {
						return 275;
					}
					if ($this->polygons[1581]->contains($latitude, $longitude)) {
						return 399;
					} else {
						return 183;
					}
				} else {
					if ($this->polygons[1582]->contains($latitude, $longitude)) {
						return 275;
					} else {
						return 183;
					}
				}
			} else {
				return 183;
			}
		} else if ($longitude < 35.416372) {
			if ($this->polygons[1583]->contains($latitude, $longitude)) {
				return 275;
			} else {
				return 183;
			}
		} else {
			if ($this->polygons[1584]->contains($latitude, $longitude)) {
				return 99;
			} else {
				return 183;
			}
		}
	}
	
	protected function call28(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 21.254360) {
			if ($latitude < 41.371582) {
				if ($longitude < 16.637009) {
					if ($latitude < 37.543915) {
						if ($longitude < 11.135750) {
							if ($longitude < 8.672028) {
								if ($latitude < 36.824917) {
									if ($this->polygons[1585]->contains($latitude, $longitude)) {
										return 318;
									} else {
										return 380;
									}
								} else {
									if ($this->polygons[1586]->contains($latitude, $longitude)) {
										return 318;
									} else {
										return 380;
									}
								}
							} else {
								return 318;
							}
						} else {
							return 271;
						}
					} else {
						return 271;
					}
				} else if ($latitude < 38.677971) {
					return 152;
				} else if ($longitude < 19.537333) {
					if ($longitude < 18.513445) {
						return 271;
					} else if ($latitude < 39.873859) {
						return 152;
					} else {
						return 75;
					}
				} else if ($latitude < 39.251167) {
					return 152;
				} else if ($longitude < 19.598167) {
					if ($latitude < 40.038214) {
						return 75;
					} else {
						return 152;
					}
				} else if ($latitude < 40.311375) {
					if ($this->polygons[1587]->contains($latitude, $longitude)) {
						return 75;
					} else {
						return 152;
					}
				} else {
					if ($this->polygons[1588]->contains($latitude, $longitude)) {
						return 152;
					}
					if ($this->polygons[1589]->contains($latitude, $longitude)) {
						return 337;
					} else {
						return 75;
					}
				}
			} else if ($longitude < 15.454583) {
				if ($latitude < 44.272278) {
					if ($longitude < 11.115666) {
						if ($longitude < 9.561556) {
							if ($longitude < 8.461638) {
								if ($latitude < 43.769527) {
									if ($this->polygons[1590]->contains($latitude, $longitude)) {
										return 261;
									} else {
										return 297;
									}
								} else {
									if ($this->polygons[1591]->contains($latitude, $longitude)) {
										return 297;
									} else {
										return 271;
									}
								}
							} else if ($latitude < 43.606562) {
								return 271;
							} else {
								return 297;
							}
						} else {
							return 271;
						}
					} else if ($latitude < 43.999805) {
						if ($longitude < 15.228278) {
							if ($longitude < 12.515555) {
								if ($this->polygons[1592]->contains($latitude, $longitude)) {
									return 313;
								} else {
									return 271;
								}
							} else {
								if ($this->polygons[1593]->contains($latitude, $longitude)) {
									return 30;
								}
								if ($this->polygons[1594]->contains($latitude, $longitude)) {
									return 30;
								}
								if ($this->polygons[1595]->contains($latitude, $longitude)) {
									return 30;
								} else {
									return 271;
								}
							}
						} else if ($latitude < 41.926615) {
							return 271;
						} else {
							return 30;
						}
					} else if ($longitude < 12.678526) {
						return 271;
					} else {
						return 30;
					}
				} else if ($longitude < 12.496844) {
					return 271;
				} else {
					return 30;
				}
			} else if ($longitude < 16.283112) {
				if ($latitude < 43.460499) {
					if ($latitude < 42.126751) {
						return 271;
					} else {
						return 30;
					}
				} else if ($latitude < 43.866528) {
					return 30;
				} else {
					if ($this->polygons[1596]->contains($latitude, $longitude)) {
						return 348;
					} else {
						return 30;
					}
				}
			} else if ($longitude < 17.754278) {
				if ($latitude < 42.806278) {
					return 30;
				} else if ($latitude < 43.099861) {
					if ($longitude < 17.201416) {
						return 30;
					} else {
						if ($this->polygons[1597]->contains($latitude, $longitude)) {
							return 348;
						} else {
							return 30;
						}
					}
				} else if ($latitude < 43.236000) {
					if ($longitude < 17.194445) {
						return 30;
					} else {
						if ($this->polygons[1598]->contains($latitude, $longitude)) {
							return 348;
						} else {
							return 30;
						}
					}
				} else {
					if ($this->polygons[1599]->contains($latitude, $longitude)) {
						return 348;
					} else {
						return 30;
					}
				}
			} else if ($longitude < 18.018444) {
				if ($latitude < 42.755833) {
					return 30;
				} else {
					if ($this->polygons[1600]->contains($latitude, $longitude)) {
						return 348;
					} else {
						return 30;
					}
				}
			} else if ($longitude < 19.088497) {
				if ($latitude < 43.558743) {
					if ($latitude < 42.091462) {
						return 212;
					} else if ($latitude < 42.833974) {
						if ($this->polygons[1601]->contains($latitude, $longitude)) {
							return 30;
						}
						if ($this->polygons[1602]->contains($latitude, $longitude)) {
							return 348;
						} else {
							return 212;
						}
					} else {
						if ($this->polygons[1603]->contains($latitude, $longitude)) {
							return 212;
						} else {
							return 348;
						}
					}
				} else {
					if ($this->polygons[1604]->contains($latitude, $longitude)) {
						return 30;
					}
					if ($this->polygons[1605]->contains($latitude, $longitude)) {
						return 209;
					} else {
						return 348;
					}
				}
			} else if ($latitude < 43.128445) {
				if ($longitude < 20.171428) {
					if ($latitude < 42.250013) {
						if ($this->polygons[1606]->contains($latitude, $longitude)) {
							return 212;
						} else {
							return 75;
						}
					} else {
						if ($this->polygons[1607]->contains($latitude, $longitude)) {
							return 75;
						}
						if ($this->polygons[1608]->contains($latitude, $longitude)) {
							return 209;
						}
						if ($this->polygons[1609]->contains($latitude, $longitude)) {
							return 209;
						} else {
							return 212;
						}
					}
				} else if ($latitude < 42.250013) {
					if ($this->polygons[1610]->contains($latitude, $longitude)) {
						return 75;
					}
					if ($this->polygons[1611]->contains($latitude, $longitude)) {
						return 209;
					} else {
						return 337;
					}
				} else {
					if ($this->polygons[1612]->contains($latitude, $longitude)) {
						return 75;
					}
					if ($this->polygons[1613]->contains($latitude, $longitude)) {
						return 212;
					} else {
						return 209;
					}
				}
			} else if ($longitude < 20.171428) {
				if ($latitude < 44.006876) {
					if ($this->polygons[1614]->contains($latitude, $longitude)) {
						return 212;
					}
					if ($this->polygons[1615]->contains($latitude, $longitude)) {
						return 348;
					}
					if ($this->polygons[1616]->contains($latitude, $longitude)) {
						return 348;
					} else {
						return 209;
					}
				} else {
					if ($this->polygons[1617]->contains($latitude, $longitude)) {
						return 209;
					}
					if ($this->polygons[1618]->contains($latitude, $longitude)) {
						return 209;
					} else {
						return 348;
					}
				}
			} else {
				return 209;
			}
		} else if ($longitude < 25.743999) {
			if ($latitude < 40.022305) {
				return 152;
			} else if ($latitude < 40.350529) {
				if ($longitude < 25.432277) {
					return 152;
				} else {
					return 205;
				}
			} else if ($latitude < 40.806194) {
				return 152;
			} else if ($latitude < 41.580002) {
				if ($longitude < 23.499180) {
					if ($this->polygons[1619]->contains($latitude, $longitude)) {
						return 337;
					}
					if ($this->polygons[1620]->contains($latitude, $longitude)) {
						return 340;
					} else {
						return 152;
					}
				} else {
					if ($this->polygons[1621]->contains($latitude, $longitude)) {
						return 340;
					} else {
						return 152;
					}
				}
			} else if ($longitude < 23.499180) {
				if ($latitude < 43.232655) {
					if ($longitude < 22.376770) {
						if ($this->polygons[1622]->contains($latitude, $longitude)) {
							return 337;
						}
						if ($this->polygons[1623]->contains($latitude, $longitude)) {
							return 340;
						} else {
							return 209;
						}
					} else {
						if ($this->polygons[1624]->contains($latitude, $longitude)) {
							return 209;
						}
						if ($this->polygons[1625]->contains($latitude, $longitude)) {
							return 337;
						} else {
							return 340;
						}
					}
				} else if ($longitude < 22.376770) {
					if ($this->polygons[1626]->contains($latitude, $longitude)) {
						return 266;
					}
					if ($this->polygons[1627]->contains($latitude, $longitude)) {
						return 340;
					} else {
						return 209;
					}
				} else if ($latitude < 44.058981) {
					if ($this->polygons[1628]->contains($latitude, $longitude)) {
						return 209;
					}
					if ($this->polygons[1629]->contains($latitude, $longitude)) {
						return 209;
					}
					if ($this->polygons[1630]->contains($latitude, $longitude)) {
						return 266;
					} else {
						return 340;
					}
				} else {
					if ($this->polygons[1631]->contains($latitude, $longitude)) {
						return 209;
					}
					if ($this->polygons[1632]->contains($latitude, $longitude)) {
						return 340;
					} else {
						return 266;
					}
				}
			} else {
				if ($this->polygons[1633]->contains($latitude, $longitude)) {
					return 340;
				} else {
					return 266;
				}
			}
		} else if ($latitude < 37.410751) {
			if ($longitude < 27.176777) {
				return 152;
			} else if ($longitude < 27.874916) {
				if ($latitude < 36.917999) {
					if ($longitude < 27.357195) {
						return 152;
					} else if ($latitude < 36.640251) {
						if ($latitude < 36.533819) {
							return 152;
						} else {
							return 205;
						}
					} else {
						return 205;
					}
				} else if ($longitude < 27.224751) {
					if ($latitude < 37.182851) {
						return 152;
					} else {
						return 205;
					}
				} else {
					return 205;
				}
			} else if ($longitude < 35.659962) {
				return 205;
			} else if ($longitude < 35.722252) {
				return 205;
			} else if ($longitude < 39.460653) {
				if ($this->polygons[1634]->contains($latitude, $longitude)) {
					return 368;
				} else {
					return 205;
				}
			} else {
				if ($this->polygons[1635]->contains($latitude, $longitude)) {
					return 28;
				}
				if ($this->polygons[1636]->contains($latitude, $longitude)) {
					return 368;
				} else {
					return 205;
				}
			}
		} else if ($latitude < 39.399502) {
			if ($latitude < 37.814610) {
				if ($longitude < 26.808306) {
					return 152;
				} else if ($longitude < 27.069723) {
					if ($latitude < 37.476891) {
						return 152;
					} else {
						if ($this->polygons[1637]->contains($latitude, $longitude)) {
							return 205;
						} else {
							return 152;
						}
					}
				} else {
					return 205;
				}
			} else if ($longitude < 26.619278) {
				if ($latitude < 38.682251) {
					if ($longitude < 26.165445) {
						return 152;
					} else if ($longitude < 26.294640) {
						if ($latitude < 38.379166) {
							return 205;
						} else {
							return 152;
						}
					} else {
						return 205;
					}
				} else if ($longitude < 26.603834) {
					if ($longitude < 25.845306) {
						return 152;
					} else if ($latitude < 39.307919) {
						if ($this->polygons[1638]->contains($latitude, $longitude)) {
							return 205;
						} else {
							return 152;
						}
					} else if ($longitude < 26.500569) {
						return 152;
					} else {
						return 205;
					}
				} else if ($latitude < 39.053222) {
					return 152;
				} else {
					return 205;
				}
			} else {
				return 205;
			}
		} else if ($latitude < 40.677166) {
			return 205;
		} else if ($longitude < 29.620806) {
			if ($latitude < 42.107613) {
				if ($longitude < 28.043638) {
					if ($longitude < 26.893819) {
						if ($latitude < 41.392389) {
							if ($this->polygons[1639]->contains($latitude, $longitude)) {
								return 205;
							}
							if ($this->polygons[1640]->contains($latitude, $longitude)) {
								return 340;
							} else {
								return 152;
							}
						} else {
							if ($this->polygons[1641]->contains($latitude, $longitude)) {
								return 152;
							}
							if ($this->polygons[1642]->contains($latitude, $longitude)) {
								return 205;
							} else {
								return 340;
							}
						}
					} else {
						if ($this->polygons[1643]->contains($latitude, $longitude)) {
							return 340;
						} else {
							return 205;
						}
					}
				} else {
					return 205;
				}
			} else if ($longitude < 28.612167) {
				if ($this->polygons[1644]->contains($latitude, $longitude)) {
					return 266;
				} else {
					return 340;
				}
			} else {
				return 266;
			}
		} else if ($longitude < 35.162596) {
			if ($latitude < 43.246111) {
				return 197;
			} else {
				return 205;
			}
		} else if ($longitude < 35.221638) {
			return 205;
		} else if ($latitude < 41.763479) {
			if ($this->polygons[1645]->contains($latitude, $longitude)) {
				return 47;
			} else {
				return 205;
			}
		} else if ($longitude < 40.250756) {
			if ($this->polygons[1646]->contains($latitude, $longitude)) {
				return 47;
			} else {
				return 183;
			}
		} else {
			if ($this->polygons[1647]->contains($latitude, $longitude)) {
				return 183;
			} else {
				return 47;
			}
		}
	}
	
	protected function call29(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 63.393749) {
			if ($longitude < 21.000000) {
				if ($latitude < 60.100693) {
					if ($longitude < 18.507584) {
						if ($longitude < 17.594973) {
							if ($longitude < 10.975583) {
								return 355;
							} else if ($latitude < 58.861279) {
								return 375;
							} else if ($longitude < 11.114695) {
								if ($latitude < 58.967918) {
									return 375;
								} else {
									return 355;
								}
							} else if ($longitude < 12.483325) {
								if ($latitude < 58.893585) {
									if ($longitude < 11.183945) {
										return 375;
									} else {
										if ($this->polygons[1648]->contains($latitude, $longitude)) {
											return 355;
										} else {
											return 375;
										}
									}
								} else if ($longitude < 11.471500) {
									if ($latitude < 58.996334) {
										if ($longitude < 11.169000) {
											return 375;
										} else {
											if ($this->polygons[1649]->contains($latitude, $longitude)) {
												return 355;
											} else {
												return 375;
											}
										}
									} else {
										if ($this->polygons[1650]->contains($latitude, $longitude)) {
											return 375;
										} else {
											return 355;
										}
									}
								} else {
									if ($this->polygons[1651]->contains($latitude, $longitude)) {
										return 375;
									} else {
										return 355;
									}
								}
							} else {
								return 375;
							}
						} else {
							return 375;
						}
					} else if ($longitude < 19.165695) {
						return 375;
					} else if ($longitude < 19.207306) {
						return 375;
					} else {
						return 188;
					}
				} else if ($longitude < 19.480333) {
					if ($longitude < 17.196722) {
						if ($longitude < 9.436603) {
							return 355;
						} else if ($longitude < 12.874028) {
							if ($latitude < 61.360279) {
								if ($this->polygons[1652]->contains($latitude, $longitude)) {
									return 375;
								} else {
									return 355;
								}
							} else {
								if ($this->polygons[1653]->contains($latitude, $longitude)) {
									return 375;
								} else {
									return 355;
								}
							}
						} else {
							return 375;
						}
					} else {
						return 375;
					}
				} else if ($latitude < 60.473862) {
					return 188;
				} else if ($longitude < 20.865360) {
					return 323;
				} else {
					return 188;
				}
			} else if ($longitude < 21.912750) {
				if ($longitude < 21.153862) {
					if ($latitude < 60.560112) {
						return 188;
					} else {
						return 323;
					}
				} else {
					return 323;
				}
			} else if ($longitude < 23.447250) {
				if ($latitude < 59.306194) {
					return 49;
				} else {
					return 323;
				}
			} else if ($longitude < 26.259001) {
				if ($latitude < 59.687946) {
					return 49;
				} else {
					return 323;
				}
			} else if ($longitude < 27.435055) {
				if ($latitude < 60.110668) {
					if ($latitude < 59.586161) {
						return 49;
					} else {
						return 183;
					}
				} else {
					return 323;
				}
			} else if ($longitude < 28.407444) {
				if ($latitude < 60.044083) {
					if ($latitude < 59.470806) {
						if ($this->polygons[1654]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 49;
						}
					} else {
						return 183;
					}
				} else if ($latitude < 60.457390) {
					return 183;
				} else if ($longitude < 27.854750) {
					if ($latitude < 60.525665) {
						if ($longitude < 27.745832) {
							return 323;
						} else {
							return 183;
						}
					} else {
						if ($this->polygons[1655]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 323;
						}
					}
				} else if ($latitude < 60.485054) {
					return 183;
				} else {
					if ($this->polygons[1656]->contains($latitude, $longitude)) {
						return 323;
					} else {
						return 183;
					}
				}
			} else if ($latitude < 60.750500) {
				return 183;
			} else {
				if ($this->polygons[1657]->contains($latitude, $longitude)) {
					return 323;
				} else {
					return 183;
				}
			}
		} else if ($latitude < 66.493835) {
			if ($longitude < 21.873028) {
				if ($longitude < 12.043694) {
					return 355;
				} else if ($latitude < 65.745277) {
					if ($longitude < 20.798334) {
						if ($longitude < 14.575282) {
							if ($longitude < 12.227278) {
								if ($latitude < 63.632717) {
									if ($this->polygons[1658]->contains($latitude, $longitude)) {
										return 375;
									} else {
										return 355;
									}
								} else {
									return 355;
								}
							} else if ($latitude < 65.221085) {
								if ($this->polygons[1659]->contains($latitude, $longitude)) {
									return 375;
								} else {
									return 355;
								}
							} else if ($longitude < 12.453417) {
								return 355;
							} else {
								if ($this->polygons[1660]->contains($latitude, $longitude)) {
									return 375;
								} else {
									return 355;
								}
							}
						} else {
							return 375;
						}
					} else if ($latitude < 63.464695) {
						return 323;
					} else {
						return 375;
					}
				} else if ($longitude < 13.186111) {
					return 355;
				} else {
					if ($this->polygons[1661]->contains($latitude, $longitude)) {
						return 375;
					} else {
						return 355;
					}
				}
			} else if ($longitude < 33.387779) {
				if ($longitude < 22.965139) {
					if ($latitude < 65.340164) {
						if ($longitude < 21.957138) {
							return 375;
						} else {
							return 323;
						}
					} else {
						return 375;
					}
				} else if ($longitude < 24.163279) {
					if ($latitude < 65.677864) {
						if ($latitude < 64.456893) {
							return 323;
						} else {
							return 375;
						}
					} else if ($longitude < 23.574472) {
						return 375;
					} else if ($latitude < 65.717720) {
						return 375;
					} else if ($latitude < 65.759140) {
						if ($longitude < 23.981722) {
							return 323;
						} else {
							return 375;
						}
					} else {
						if ($this->polygons[1662]->contains($latitude, $longitude)) {
							return 323;
						} else {
							return 375;
						}
					}
				} else if ($longitude < 25.360001) {
					return 323;
				} else {
					if ($this->polygons[1663]->contains($latitude, $longitude)) {
						return 183;
					} else {
						return 323;
					}
				}
			} else {
				return 183;
			}
		} else if ($latitude < 69.757027) {
			if ($longitude < 15.314777) {
				return 355;
			} else if ($longitude < 32.329250) {
				if ($longitude < 16.755695) {
					if ($latitude < 67.925449) {
						if ($this->polygons[1664]->contains($latitude, $longitude)) {
							return 375;
						} else {
							return 355;
						}
					} else {
						return 355;
					}
				} else if ($longitude < 18.256083) {
					if ($latitude < 68.558932) {
						if ($this->polygons[1665]->contains($latitude, $longitude)) {
							return 375;
						} else {
							return 355;
						}
					} else {
						return 355;
					}
				} else if ($longitude < 26.171008) {
					if ($longitude < 19.024416) {
						if ($latitude < 68.584389) {
							if ($longitude < 18.417805) {
								if ($this->polygons[1666]->contains($latitude, $longitude)) {
									return 355;
								} else {
									return 375;
								}
							} else {
								if ($this->polygons[1667]->contains($latitude, $longitude)) {
									return 355;
								} else {
									return 375;
								}
							}
						} else {
							return 355;
						}
					} else if ($longitude < 22.597712) {
						if ($longitude < 20.811064) {
							if ($this->polygons[1668]->contains($latitude, $longitude)) {
								return 323;
							}
							if ($this->polygons[1669]->contains($latitude, $longitude)) {
								return 375;
							} else {
								return 355;
							}
						} else {
							if ($this->polygons[1670]->contains($latitude, $longitude)) {
								return 355;
							}
							if ($this->polygons[1671]->contains($latitude, $longitude)) {
								return 375;
							} else {
								return 323;
							}
						}
					} else if ($longitude < 24.384360) {
						if ($this->polygons[1672]->contains($latitude, $longitude)) {
							return 355;
						}
						if ($this->polygons[1673]->contains($latitude, $longitude)) {
							return 375;
						} else {
							return 323;
						}
					} else {
						if ($this->polygons[1674]->contains($latitude, $longitude)) {
							return 355;
						} else {
							return 323;
						}
					}
				} else if ($longitude < 30.945389) {
					if ($longitude < 28.558198) {
						if ($this->polygons[1675]->contains($latitude, $longitude)) {
							return 183;
						}
						if ($this->polygons[1676]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 323;
						}
					} else if ($latitude < 68.125431) {
						if ($this->polygons[1677]->contains($latitude, $longitude)) {
							return 323;
						} else {
							return 183;
						}
					} else {
						if ($this->polygons[1678]->contains($latitude, $longitude)) {
							return 183;
						}
						if ($this->polygons[1679]->contains($latitude, $longitude)) {
							return 183;
						}
						if ($this->polygons[1680]->contains($latitude, $longitude)) {
							return 323;
						}
						if ($this->polygons[1681]->contains($latitude, $longitude)) {
							return 323;
						}
						if ($this->polygons[1682]->contains($latitude, $longitude)) {
							return 323;
						} else {
							return 355;
						}
					}
				} else {
					return 183;
				}
			} else {
				return 183;
			}
		} else if ($latitude < 76.436279) {
			if ($longitude < 21.929611) {
				if ($latitude < 70.395920) {
					return 355;
				} else {
					return 111;
				}
			} else if ($latitude < 70.096054) {
				if ($longitude < 30.098833) {
					if ($longitude < 28.792934) {
						if ($longitude < 22.034249) {
							return 355;
						} else {
							if ($this->polygons[1683]->contains($latitude, $longitude)) {
								return 323;
							} else {
								return 355;
							}
						}
					} else {
						return 355;
					}
				} else if ($longitude < 30.400282) {
					return 355;
				} else if ($longitude < 30.856945) {
					if ($this->polygons[1684]->contains($latitude, $longitude)) {
						return 183;
					} else {
						return 355;
					}
				} else {
					return 183;
				}
			} else {
				return 355;
			}
		} else {
			return 111;
		}
	}
	
	protected function call30(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 11.098028) {
			if ($latitude < 9.890555) {
				if ($latitude < 8.278500) {
					return 270;
				} else if ($longitude < 98.502388) {
					if ($longitude < 98.175087) {
						if ($longitude < 97.912476) {
							return 270;
						} else {
							return 40;
						}
					} else {
						return 270;
					}
				} else if ($longitude < 100.258641) {
					return 270;
				} else {
					return 24;
				}
			} else if ($longitude < 98.470779) {
				return 40;
			} else if ($longitude < 102.955833) {
				if ($longitude < 98.630722) {
					if ($latitude < 10.036747) {
						if ($longitude < 98.503304) {
							if ($latitude < 9.908667) {
								return 270;
							} else {
								return 40;
							}
						} else if ($longitude < 98.551109) {
							return 40;
						} else {
							if ($this->polygons[1685]->contains($latitude, $longitude)) {
								return 40;
							} else {
								return 270;
							}
						}
					} else {
						return 40;
					}
				} else if ($longitude < 99.519447) {
					if ($longitude < 99.223419) {
						if ($latitude < 10.941639) {
							if ($this->polygons[1686]->contains($latitude, $longitude)) {
								return 40;
							}
							if ($this->polygons[1687]->contains($latitude, $longitude)) {
								return 40;
							} else {
								return 270;
							}
						} else if ($longitude < 98.707916) {
							return 40;
						} else {
							if ($this->polygons[1688]->contains($latitude, $longitude)) {
								return 270;
							} else {
								return 40;
							}
						}
					} else {
						return 270;
					}
				} else if ($longitude < 99.855583) {
					return 270;
				} else {
					return 251;
				}
			} else if ($longitude < 103.821335) {
				return 251;
			} else if ($latitude < 10.323584) {
				return 24;
			} else if ($longitude < 104.078867) {
				if ($latitude < 10.498389) {
					return 24;
				} else {
					return 251;
				}
			} else if ($longitude < 104.334137) {
				return 251;
			} else {
				if ($this->polygons[1689]->contains($latitude, $longitude)) {
					return 251;
				} else {
					return 24;
				}
			}
		} else if ($latitude < 12.230139) {
			if ($longitude < 98.681419) {
				return 40;
			} else if ($longitude < 102.919525) {
				if ($longitude < 100.020752) {
					if ($longitude < 98.690804) {
						return 40;
					} else {
						if ($this->polygons[1690]->contains($latitude, $longitude)) {
							return 270;
						} else {
							return 40;
						}
					}
				} else if ($longitude < 102.610809) {
					return 270;
				} else {
					if ($this->polygons[1691]->contains($latitude, $longitude)) {
						return 251;
					} else {
						return 270;
					}
				}
			} else {
				return 251;
			}
		} else if ($latitude < 12.614500) {
			if ($longitude < 98.613220) {
				return 40;
			} else if ($longitude < 100.972930) {
				if ($longitude < 99.497317) {
					if ($this->polygons[1692]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				} else {
					return 270;
				}
			} else if ($longitude < 102.244331) {
				return 270;
			} else {
				if ($this->polygons[1693]->contains($latitude, $longitude)) {
					return 251;
				} else {
					return 270;
				}
			}
		} else if ($longitude < 98.224945) {
			if ($latitude < 14.414500) {
				return 40;
			} else if ($latitude < 16.337936) {
				if ($longitude < 97.888252) {
					return 40;
				} else if ($latitude < 15.008137) {
					if ($this->polygons[1694]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				} else {
					if ($this->polygons[1695]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				}
			} else if ($latitude < 17.826316) {
				if ($latitude < 16.375928) {
					return 40;
				} else {
					if ($this->polygons[1696]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				}
			} else if ($latitude < 18.056516) {
				if ($this->polygons[1697]->contains($latitude, $longitude)) {
					return 40;
				} else {
					return 270;
				}
			} else if ($latitude < 18.916257) {
				if ($this->polygons[1698]->contains($latitude, $longitude)) {
					return 40;
				} else {
					return 270;
				}
			} else {
				if ($this->polygons[1699]->contains($latitude, $longitude)) {
					return 270;
				} else {
					return 40;
				}
			}
		} else if ($longitude < 99.394151) {
			if ($latitude < 12.907416) {
				if ($longitude < 98.699638) {
					return 40;
				} else {
					if ($this->polygons[1700]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				}
			} else if ($latitude < 14.976789) {
				if ($longitude < 98.335114) {
					if ($latitude < 13.213333) {
						return 40;
					} else {
						if ($this->polygons[1701]->contains($latitude, $longitude)) {
							return 270;
						} else {
							return 40;
						}
					}
				} else if ($latitude < 12.936528) {
					if ($longitude < 98.556503) {
						return 40;
					} else {
						if ($this->polygons[1702]->contains($latitude, $longitude)) {
							return 270;
						} else {
							return 40;
						}
					}
				} else {
					if ($this->polygons[1703]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				}
			} else if ($latitude < 15.059563) {
				if ($this->polygons[1704]->contains($latitude, $longitude)) {
					return 40;
				} else {
					return 270;
				}
			} else if ($latitude < 17.224167) {
				if ($latitude < 16.141865) {
					if ($this->polygons[1705]->contains($latitude, $longitude)) {
						return 40;
					} else {
						return 270;
					}
				} else {
					if ($this->polygons[1706]->contains($latitude, $longitude)) {
						return 40;
					} else {
						return 270;
					}
				}
			} else {
				if ($this->polygons[1707]->contains($latitude, $longitude)) {
					return 40;
				} else {
					return 270;
				}
			}
		} else if ($latitude < 14.439500) {
			if ($longitude < 100.822113) {
				return 270;
			} else if ($longitude < 103.662552) {
				if ($this->polygons[1708]->contains($latitude, $longitude)) {
					return 251;
				} else {
					return 270;
				}
			} else {
				if ($this->polygons[1709]->contains($latitude, $longitude)) {
					return 270;
				} else {
					return 251;
				}
			}
		} else if ($latitude < 17.542611) {
			if ($this->polygons[1710]->contains($latitude, $longitude)) {
				return 265;
			}
			if ($this->polygons[1711]->contains($latitude, $longitude)) {
				return 265;
			} else {
				return 270;
			}
		} else if ($longitude < 102.249394) {
			if ($latitude < 19.094166) {
				if ($longitude < 100.821773) {
					return 270;
				} else if ($latitude < 18.318388) {
					if ($this->polygons[1712]->contains($latitude, $longitude)) {
						return 265;
					} else {
						return 270;
					}
				} else {
					if ($this->polygons[1713]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 265;
					}
				}
			} else if ($longitude < 100.821773) {
				if ($this->polygons[1714]->contains($latitude, $longitude)) {
					return 40;
				}
				if ($this->polygons[1715]->contains($latitude, $longitude)) {
					return 265;
				} else {
					return 270;
				}
			} else {
				if ($this->polygons[1716]->contains($latitude, $longitude)) {
					return 270;
				} else {
					return 265;
				}
			}
		} else if ($latitude < 19.094166) {
			if ($longitude < 103.677016) {
				if ($this->polygons[1717]->contains($latitude, $longitude)) {
					return 270;
				} else {
					return 265;
				}
			} else {
				if ($this->polygons[1718]->contains($latitude, $longitude)) {
					return 24;
				}
				if ($this->polygons[1719]->contains($latitude, $longitude)) {
					return 270;
				} else {
					return 265;
				}
			}
		} else if ($longitude < 103.677016) {
			return 265;
		} else if ($latitude < 19.869944) {
			if ($this->polygons[1720]->contains($latitude, $longitude)) {
				return 265;
			} else {
				return 24;
			}
		} else {
			if ($this->polygons[1721]->contains($latitude, $longitude)) {
				return 265;
			} else {
				return 24;
			}
		}
	}
	
	protected function call31(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 55.192631) {
			if ($longitude < 55.123322) {
				if ($latitude < 50.932056) {
					if ($latitude < 47.893608) {
						if ($this->polygons[1722]->contains($latitude, $longitude)) {
							return 240;
						} else {
							return 120;
						}
					} else if ($longitude < 52.374453) {
						if ($this->polygons[1723]->contains($latitude, $longitude)) {
							return 120;
						} else {
							return 115;
						}
					} else if ($latitude < 49.412832) {
						if ($this->polygons[1724]->contains($latitude, $longitude)) {
							return 115;
						}
						if ($this->polygons[1725]->contains($latitude, $longitude)) {
							return 240;
						} else {
							return 120;
						}
					} else {
						if ($this->polygons[1726]->contains($latitude, $longitude)) {
							return 115;
						}
						if ($this->polygons[1727]->contains($latitude, $longitude)) {
							return 178;
						}
						if ($this->polygons[1728]->contains($latitude, $longitude)) {
							return 178;
						} else {
							return 240;
						}
					}
				} else if ($latitude < 52.307041) {
					if ($longitude < 52.374453) {
						if ($longitude < 51.000018) {
							if ($latitude < 51.619549) {
								if ($this->polygons[1729]->contains($latitude, $longitude)) {
									return 99;
								}
								if ($this->polygons[1730]->contains($latitude, $longitude)) {
									return 99;
								} else {
									return 115;
								}
							} else {
								if ($this->polygons[1731]->contains($latitude, $longitude)) {
									return 115;
								}
								if ($this->polygons[1732]->contains($latitude, $longitude)) {
									return 115;
								}
								if ($this->polygons[1733]->contains($latitude, $longitude)) {
									return 157;
								}
								if ($this->polygons[1734]->contains($latitude, $longitude)) {
									return 178;
								} else {
									return 99;
								}
							}
						} else {
							if ($this->polygons[1735]->contains($latitude, $longitude)) {
								return 115;
							}
							if ($this->polygons[1736]->contains($latitude, $longitude)) {
								return 157;
							} else {
								return 178;
							}
						}
					} else {
						if ($this->polygons[1737]->contains($latitude, $longitude)) {
							return 178;
						} else {
							return 115;
						}
					}
				} else if ($longitude < 52.374453) {
					if ($latitude < 53.749836) {
						if ($this->polygons[1738]->contains($latitude, $longitude)) {
							return 99;
						}
						if ($this->polygons[1739]->contains($latitude, $longitude)) {
							return 178;
						} else {
							return 157;
						}
					} else if ($longitude < 51.000018) {
						if ($this->polygons[1740]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 157;
						}
					} else {
						if ($this->polygons[1741]->contains($latitude, $longitude)) {
							return 178;
						}
						if ($this->polygons[1742]->contains($latitude, $longitude)) {
							return 178;
						}
						if ($this->polygons[1743]->contains($latitude, $longitude)) {
							return 178;
						}
						if ($this->polygons[1744]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 157;
						}
					}
				} else if ($latitude < 53.749836) {
					return 178;
				} else if ($longitude < 53.748887) {
					if ($latitude < 54.471233) {
						if ($longitude < 53.061670) {
							if ($this->polygons[1745]->contains($latitude, $longitude)) {
								return 157;
							}
							if ($this->polygons[1746]->contains($latitude, $longitude)) {
								return 157;
							}
							if ($this->polygons[1747]->contains($latitude, $longitude)) {
								return 157;
							}
							if ($this->polygons[1748]->contains($latitude, $longitude)) {
								return 183;
							}
							if ($this->polygons[1749]->contains($latitude, $longitude)) {
								return 183;
							}
							if ($this->polygons[1750]->contains($latitude, $longitude)) {
								return 183;
							} else {
								return 178;
							}
						} else {
							if ($this->polygons[1751]->contains($latitude, $longitude)) {
								return 183;
							} else {
								return 178;
							}
						}
					} else {
						if ($this->polygons[1752]->contains($latitude, $longitude)) {
							return 157;
						}
						if ($this->polygons[1753]->contains($latitude, $longitude)) {
							return 178;
						} else {
							return 183;
						}
					}
				} else {
					return 178;
				}
			} else if ($longitude < 61.844131) {
				if ($latitude < 51.509230) {
					if ($longitude < 58.483727) {
						if ($this->polygons[1754]->contains($latitude, $longitude)) {
							return 240;
						} else {
							return 178;
						}
					} else {
						if ($this->polygons[1755]->contains($latitude, $longitude)) {
							return 239;
						}
						if ($this->polygons[1756]->contains($latitude, $longitude)) {
							return 240;
						} else {
							return 178;
						}
					}
				} else if ($longitude < 58.483727) {
					return 178;
				} else if ($latitude < 53.350930) {
					if ($this->polygons[1757]->contains($latitude, $longitude)) {
						return 239;
					}
					if ($this->polygons[1758]->contains($latitude, $longitude)) {
						return 239;
					} else {
						return 178;
					}
				} else {
					if ($this->polygons[1759]->contains($latitude, $longitude)) {
						return 239;
					} else {
						return 178;
					}
				}
			} else if ($latitude < 51.509230) {
				if ($longitude < 65.204536) {
					if ($latitude < 49.667529) {
						if ($this->polygons[1760]->contains($latitude, $longitude)) {
							return 240;
						}
						if ($this->polygons[1761]->contains($latitude, $longitude)) {
							return 347;
						} else {
							return 239;
						}
					} else {
						if ($this->polygons[1762]->contains($latitude, $longitude)) {
							return 240;
						} else {
							return 239;
						}
					}
				} else {
					if ($this->polygons[1763]->contains($latitude, $longitude)) {
						return 239;
					} else {
						return 347;
					}
				}
			} else if ($longitude < 65.204536) {
				if ($latitude < 53.350930) {
					if ($this->polygons[1764]->contains($latitude, $longitude)) {
						return 178;
					} else {
						return 239;
					}
				} else {
					if ($this->polygons[1765]->contains($latitude, $longitude)) {
						return 239;
					}
					if ($this->polygons[1766]->contains($latitude, $longitude)) {
						return 239;
					} else {
						return 178;
					}
				}
			} else if ($latitude < 53.350930) {
				if ($this->polygons[1767]->contains($latitude, $longitude)) {
					return 347;
				} else {
					return 239;
				}
			} else if ($longitude < 66.884739) {
				if ($this->polygons[1768]->contains($latitude, $longitude)) {
					return 178;
				}
				if ($this->polygons[1769]->contains($latitude, $longitude)) {
					return 178;
				}
				if ($this->polygons[1770]->contains($latitude, $longitude)) {
					return 347;
				} else {
					return 239;
				}
			} else {
				if ($this->polygons[1771]->contains($latitude, $longitude)) {
					return 178;
				} else {
					return 347;
				}
			}
		} else if ($longitude < 59.095263) {
			if ($latitude < 60.730856) {
				if ($longitude < 54.360423) {
					if ($latitude < 57.961743) {
						if ($longitude < 51.993003) {
							if ($latitude < 56.577187) {
								if ($longitude < 50.809294) {
									if ($this->polygons[1772]->contains($latitude, $longitude)) {
										return 99;
									} else {
										return 183;
									}
								} else if ($latitude < 55.884909) {
									if ($this->polygons[1773]->contains($latitude, $longitude)) {
										return 157;
									} else {
										return 183;
									}
								} else if ($longitude < 51.401148) {
									if ($this->polygons[1774]->contains($latitude, $longitude)) {
										return 157;
									}
									if ($this->polygons[1775]->contains($latitude, $longitude)) {
										return 157;
									}
									if ($this->polygons[1776]->contains($latitude, $longitude)) {
										return 157;
									}
									if ($this->polygons[1777]->contains($latitude, $longitude)) {
										return 183;
									} else {
										return 99;
									}
								} else {
									if ($this->polygons[1778]->contains($latitude, $longitude)) {
										return 99;
									}
									if ($this->polygons[1779]->contains($latitude, $longitude)) {
										return 99;
									}
									if ($this->polygons[1780]->contains($latitude, $longitude)) {
										return 183;
									}
									if ($this->polygons[1781]->contains($latitude, $longitude)) {
										return 183;
									}
									if ($this->polygons[1782]->contains($latitude, $longitude)) {
										return 183;
									} else {
										return 157;
									}
								}
							} else if ($longitude < 50.809294) {
								if ($this->polygons[1783]->contains($latitude, $longitude)) {
									return 183;
								} else {
									return 99;
								}
							} else {
								if ($this->polygons[1784]->contains($latitude, $longitude)) {
									return 157;
								} else {
									return 99;
								}
							}
						} else if ($latitude < 56.577187) {
							if ($longitude < 53.176713) {
								if ($latitude < 55.884909) {
									return 183;
								} else if ($longitude < 52.584858) {
									if ($this->polygons[1785]->contains($latitude, $longitude)) {
										return 157;
									} else {
										return 183;
									}
								} else {
									if ($this->polygons[1786]->contains($latitude, $longitude)) {
										return 183;
									} else {
										return 157;
									}
								}
							} else if ($latitude < 55.884909) {
								if ($this->polygons[1787]->contains($latitude, $longitude)) {
									return 157;
								}
								if ($this->polygons[1788]->contains($latitude, $longitude)) {
									return 178;
								} else {
									return 183;
								}
							} else {
								if ($this->polygons[1789]->contains($latitude, $longitude)) {
									return 178;
								}
								if ($this->polygons[1790]->contains($latitude, $longitude)) {
									return 178;
								}
								if ($this->polygons[1791]->contains($latitude, $longitude)) {
									return 183;
								}
								if ($this->polygons[1792]->contains($latitude, $longitude)) {
									return 183;
								} else {
									return 157;
								}
							}
						} else {
							if ($this->polygons[1793]->contains($latitude, $longitude)) {
								return 178;
							}
							if ($this->polygons[1794]->contains($latitude, $longitude)) {
								return 178;
							} else {
								return 157;
							}
						}
					} else if ($longitude < 51.993003) {
						if ($this->polygons[1795]->contains($latitude, $longitude)) {
							return 157;
						}
						if ($this->polygons[1796]->contains($latitude, $longitude)) {
							return 178;
						}
						if ($this->polygons[1797]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 99;
						}
					} else if ($latitude < 59.346300) {
						if ($this->polygons[1798]->contains($latitude, $longitude)) {
							return 157;
						}
						if ($this->polygons[1799]->contains($latitude, $longitude)) {
							return 178;
						} else {
							return 99;
						}
					} else {
						if ($this->polygons[1800]->contains($latitude, $longitude)) {
							return 99;
						}
						if ($this->polygons[1801]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 178;
						}
					}
				} else {
					if ($this->polygons[1802]->contains($latitude, $longitude)) {
						return 157;
					}
					if ($this->polygons[1803]->contains($latitude, $longitude)) {
						return 157;
					} else {
						return 178;
					}
				}
			} else {
				if ($this->polygons[1804]->contains($latitude, $longitude)) {
					return 178;
				} else {
					return 183;
				}
			}
		} else if ($latitude < 60.730856) {
			return 178;
		} else if ($longitude < 63.830102) {
			if ($latitude < 63.499969) {
				if ($this->polygons[1805]->contains($latitude, $longitude)) {
					return 183;
				} else {
					return 178;
				}
			} else {
				if ($this->polygons[1806]->contains($latitude, $longitude)) {
					return 183;
				} else {
					return 178;
				}
			}
		} else {
			return 178;
		}
	}
	
	protected function call32(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 45.945526) {
			if ($latitude < 44.510529) {
				if ($latitude < 42.932393) {
					if ($longitude < 46.362106) {
						if ($longitude < 44.780580) {
							if ($latitude < 41.802489) {
								if ($this->polygons[1807]->contains($latitude, $longitude)) {
									return 47;
								}
								if ($this->polygons[1808]->contains($latitude, $longitude)) {
									return 205;
								} else {
									return 48;
								}
							} else {
								if ($this->polygons[1809]->contains($latitude, $longitude)) {
									return 183;
								} else {
									return 47;
								}
							}
						} else if ($latitude < 41.802489) {
							if ($longitude < 45.571343) {
								if ($this->polygons[1810]->contains($latitude, $longitude)) {
									return 47;
								}
								if ($this->polygons[1811]->contains($latitude, $longitude)) {
									return 48;
								} else {
									return 51;
								}
							} else {
								if ($this->polygons[1812]->contains($latitude, $longitude)) {
									return 47;
								}
								if ($this->polygons[1813]->contains($latitude, $longitude)) {
									return 48;
								} else {
									return 51;
								}
							}
						} else {
							if ($this->polygons[1814]->contains($latitude, $longitude)) {
								return 51;
							}
							if ($this->polygons[1815]->contains($latitude, $longitude)) {
								return 183;
							} else {
								return 47;
							}
						}
					} else if ($longitude < 47.943632) {
						if ($latitude < 41.802489) {
							if ($this->polygons[1816]->contains($latitude, $longitude)) {
								return 47;
							}
							if ($this->polygons[1817]->contains($latitude, $longitude)) {
								return 47;
							}
							if ($this->polygons[1818]->contains($latitude, $longitude)) {
								return 183;
							} else {
								return 51;
							}
						} else {
							if ($this->polygons[1819]->contains($latitude, $longitude)) {
								return 47;
							}
							if ($this->polygons[1820]->contains($latitude, $longitude)) {
								return 51;
							} else {
								return 183;
							}
						}
					} else {
						if ($this->polygons[1821]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 51;
						}
					}
				} else {
					return 183;
				}
			} else if ($longitude < 47.589027) {
				if ($latitude < 45.179359) {
					return 183;
				} else {
					if ($this->polygons[1822]->contains($latitude, $longitude)) {
						return 99;
					} else {
						return 183;
					}
				}
			} else {
				return 99;
			}
		} else if ($latitude < 46.203140) {
			if ($longitude < 49.029415) {
				if ($longitude < 47.174988) {
					if ($this->polygons[1823]->contains($latitude, $longitude)) {
						return 183;
					} else {
						return 99;
					}
				} else {
					return 99;
				}
			} else if ($longitude < 49.248165) {
				return 99;
			} else {
				return 120;
			}
		} else if ($latitude < 51.129581) {
			if ($longitude < 49.420502) {
				if ($latitude < 46.267223) {
					if ($longitude < 49.135693) {
						if ($longitude < 46.866653) {
							if ($latitude < 46.248047) {
								if ($this->polygons[1824]->contains($latitude, $longitude)) {
									return 99;
								} else {
									return 183;
								}
							} else {
								if ($this->polygons[1825]->contains($latitude, $longitude)) {
									return 99;
								} else {
									return 183;
								}
							}
						} else {
							return 99;
						}
					} else if ($longitude < 49.240028) {
						return 99;
					} else {
						return 120;
					}
				} else if ($longitude < 49.216098) {
					if ($longitude < 46.207577) {
						if ($this->polygons[1826]->contains($latitude, $longitude)) {
							return 99;
						} else {
							return 183;
						}
					} else if ($latitude < 48.698402) {
						if ($longitude < 47.711837) {
							if ($this->polygons[1827]->contains($latitude, $longitude)) {
								return 115;
							}
							if ($this->polygons[1828]->contains($latitude, $longitude)) {
								return 120;
							}
							if ($this->polygons[1829]->contains($latitude, $longitude)) {
								return 183;
							} else {
								return 99;
							}
						} else {
							if ($this->polygons[1830]->contains($latitude, $longitude)) {
								return 99;
							}
							if ($this->polygons[1831]->contains($latitude, $longitude)) {
								return 99;
							}
							if ($this->polygons[1832]->contains($latitude, $longitude)) {
								return 115;
							} else {
								return 120;
							}
						}
					} else {
						if ($this->polygons[1833]->contains($latitude, $longitude)) {
							return 99;
						} else {
							return 115;
						}
					}
				} else if ($latitude < 46.433438) {
					if ($latitude < 46.298000) {
						if ($longitude < 49.220917) {
							return 99;
						} else {
							return 120;
						}
					} else {
						return 120;
					}
				} else if ($latitude < 48.018226) {
					if ($this->polygons[1834]->contains($latitude, $longitude)) {
						return 115;
					} else {
						return 120;
					}
				} else {
					if ($this->polygons[1835]->contains($latitude, $longitude)) {
						return 115;
					} else {
						return 99;
					}
				}
			} else if ($latitude < 46.325863) {
				return 120;
			} else if ($latitude < 48.059217) {
				if ($this->polygons[1836]->contains($latitude, $longitude)) {
					return 115;
				} else {
					return 120;
				}
			} else {
				if ($this->polygons[1837]->contains($latitude, $longitude)) {
					return 99;
				} else {
					return 115;
				}
			}
		} else if ($latitude < 53.870827) {
			if ($longitude < 46.412319) {
				if ($this->polygons[1838]->contains($latitude, $longitude)) {
					return 183;
				} else {
					return 99;
				}
			} else if ($longitude < 48.018951) {
				if ($this->polygons[1839]->contains($latitude, $longitude)) {
					return 99;
				}
				if ($this->polygons[1840]->contains($latitude, $longitude)) {
					return 99;
				}
				if ($this->polygons[1841]->contains($latitude, $longitude)) {
					return 157;
				} else {
					return 183;
				}
			} else if ($latitude < 52.500204) {
				if ($this->polygons[1842]->contains($latitude, $longitude)) {
					return 157;
				}
				if ($this->polygons[1843]->contains($latitude, $longitude)) {
					return 157;
				}
				if ($this->polygons[1844]->contains($latitude, $longitude)) {
					return 157;
				} else {
					return 99;
				}
			} else if ($longitude < 48.822268) {
				if ($latitude < 53.185186) {
					if ($this->polygons[1845]->contains($latitude, $longitude)) {
						return 99;
					}
					if ($this->polygons[1846]->contains($latitude, $longitude)) {
						return 157;
					} else {
						return 183;
					}
				} else {
					if ($this->polygons[1847]->contains($latitude, $longitude)) {
						return 157;
					} else {
						return 183;
					}
				}
			} else {
				if ($this->polygons[1848]->contains($latitude, $longitude)) {
					return 99;
				}
				if ($this->polygons[1849]->contains($latitude, $longitude)) {
					return 99;
				}
				if ($this->polygons[1850]->contains($latitude, $longitude)) {
					return 183;
				}
				if ($this->polygons[1851]->contains($latitude, $longitude)) {
					return 183;
				} else {
					return 157;
				}
			}
		} else if ($latitude < 60.069954) {
			if ($longitude < 46.412319) {
				if ($this->polygons[1852]->contains($latitude, $longitude)) {
					return 99;
				} else {
					return 183;
				}
			} else if ($latitude < 56.970390) {
				if ($this->polygons[1853]->contains($latitude, $longitude)) {
					return 99;
				} else {
					return 183;
				}
			} else if ($longitude < 48.018951) {
				if ($latitude < 58.520172) {
					if ($longitude < 47.215635) {
						if ($this->polygons[1854]->contains($latitude, $longitude)) {
							return 99;
						}
						if ($this->polygons[1855]->contains($latitude, $longitude)) {
							return 99;
						} else {
							return 183;
						}
					} else {
						if ($this->polygons[1856]->contains($latitude, $longitude)) {
							return 183;
						}
						if ($this->polygons[1857]->contains($latitude, $longitude)) {
							return 183;
						} else {
							return 99;
						}
					}
				} else {
					if ($this->polygons[1858]->contains($latitude, $longitude)) {
						return 183;
					} else {
						return 99;
					}
				}
			} else {
				if ($this->polygons[1859]->contains($latitude, $longitude)) {
					return 99;
				} else {
					return 183;
				}
			}
		} else {
			if ($this->polygons[1860]->contains($latitude, $longitude)) {
				return 99;
			} else {
				return 183;
			}
		}
	}
	
	protected function call33(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 49.249474) {
			if ($latitude < 30.415028) {
				if ($longitude < 48.575916) {
					if ($longitude < 47.971863) {
						if ($this->polygons[1861]->contains($latitude, $longitude)) {
							return 28;
						}
						if ($this->polygons[1862]->contains($latitude, $longitude)) {
							return 28;
						}
						if ($this->polygons[1863]->contains($latitude, $longitude)) {
							return 163;
						} else {
							return 231;
						}
					} else if ($latitude < 29.472639) {
						if ($latitude < 28.535639) {
							if ($this->polygons[1864]->contains($latitude, $longitude)) {
								return 231;
							} else {
								return 163;
							}
						} else {
							return 231;
						}
					} else if ($latitude < 29.903723) {
						return 231;
					} else if ($longitude < 48.015431) {
						if ($latitude < 29.993876) {
							return 28;
						} else {
							return 231;
						}
					} else {
						if ($this->polygons[1865]->contains($latitude, $longitude)) {
							return 28;
						}
						if ($this->polygons[1866]->contains($latitude, $longitude)) {
							return 55;
						} else {
							return 231;
						}
					}
				} else if ($latitude < 28.263104) {
					return 163;
				} else {
					return 55;
				}
			} else if ($longitude < 49.007973) {
				if ($latitude < 37.350142) {
					if ($longitude < 48.168983) {
						if ($latitude < 33.882585) {
							if ($longitude < 45.684019) {
								if ($this->polygons[1867]->contains($latitude, $longitude)) {
									return 55;
								} else {
									return 28;
								}
							} else if ($latitude < 32.148806) {
								if ($this->polygons[1868]->contains($latitude, $longitude)) {
									return 55;
								} else {
									return 28;
								}
							} else {
								if ($this->polygons[1869]->contains($latitude, $longitude)) {
									return 28;
								} else {
									return 55;
								}
							}
						} else if ($longitude < 45.684019) {
							if ($latitude < 35.616364) {
								if ($this->polygons[1870]->contains($latitude, $longitude)) {
									return 55;
								}
								if ($this->polygons[1871]->contains($latitude, $longitude)) {
									return 55;
								} else {
									return 28;
								}
							} else if ($longitude < 44.441537) {
								if ($this->polygons[1872]->contains($latitude, $longitude)) {
									return 205;
								} else {
									return 28;
								}
							} else if ($latitude < 36.483253) {
								if ($this->polygons[1873]->contains($latitude, $longitude)) {
									return 55;
								} else {
									return 28;
								}
							} else {
								if ($this->polygons[1874]->contains($latitude, $longitude)) {
									return 55;
								}
								if ($this->polygons[1875]->contains($latitude, $longitude)) {
									return 205;
								} else {
									return 28;
								}
							}
						} else if ($latitude < 35.616364) {
							if ($this->polygons[1876]->contains($latitude, $longitude)) {
								return 28;
							}
							if ($this->polygons[1877]->contains($latitude, $longitude)) {
								return 28;
							} else {
								return 55;
							}
						} else {
							if ($this->polygons[1878]->contains($latitude, $longitude)) {
								return 28;
							} else {
								return 55;
							}
						}
					} else {
						return 55;
					}
				} else if ($longitude < 46.103514) {
					if ($latitude < 39.011363) {
						if ($longitude < 44.651284) {
							if ($this->polygons[1879]->contains($latitude, $longitude)) {
								return 55;
							} else {
								return 205;
							}
						} else {
							if ($this->polygons[1880]->contains($latitude, $longitude)) {
								return 51;
							}
							if ($this->polygons[1881]->contains($latitude, $longitude)) {
								return 205;
							} else {
								return 55;
							}
						}
					} else if ($longitude < 44.651284) {
						if ($this->polygons[1882]->contains($latitude, $longitude)) {
							return 48;
						}
						if ($this->polygons[1883]->contains($latitude, $longitude)) {
							return 55;
						} else {
							return 205;
						}
					} else if ($latitude < 39.841974) {
						if ($this->polygons[1884]->contains($latitude, $longitude)) {
							return 48;
						}
						if ($this->polygons[1885]->contains($latitude, $longitude)) {
							return 55;
						}
						if ($this->polygons[1886]->contains($latitude, $longitude)) {
							return 205;
						} else {
							return 51;
						}
					} else {
						if ($this->polygons[1887]->contains($latitude, $longitude)) {
							return 51;
						}
						if ($this->polygons[1888]->contains($latitude, $longitude)) {
							return 51;
						} else {
							return 48;
						}
					}
				} else if ($latitude < 39.011363) {
					if ($this->polygons[1889]->contains($latitude, $longitude)) {
						return 48;
					}
					if ($this->polygons[1890]->contains($latitude, $longitude)) {
						return 51;
					}
					if ($this->polygons[1891]->contains($latitude, $longitude)) {
						return 51;
					}
					if ($this->polygons[1892]->contains($latitude, $longitude)) {
						return 51;
					} else {
						return 55;
					}
				} else if ($longitude < 47.555743) {
					if ($this->polygons[1893]->contains($latitude, $longitude)) {
						return 48;
					}
					if ($this->polygons[1894]->contains($latitude, $longitude)) {
						return 55;
					} else {
						return 51;
					}
				} else {
					if ($this->polygons[1895]->contains($latitude, $longitude)) {
						return 55;
					} else {
						return 51;
					}
				}
			} else if ($latitude < 37.722569) {
				return 55;
			} else {
				return 51;
			}
		} else if ($longitude < 50.639946) {
			if ($latitude < 27.723528) {
				return 163;
			} else if ($latitude < 37.547089) {
				return 55;
			} else {
				return 51;
			}
		} else if ($longitude < 51.467556) {
			return 55;
		} else if ($longitude < 53.649776) {
			if ($latitude < 36.882539) {
				return 55;
			} else {
				return 76;
			}
		} else if ($longitude < 56.605778) {
			if ($latitude < 36.947498) {
				return 55;
			} else {
				if ($this->polygons[1896]->contains($latitude, $longitude)) {
					return 55;
				} else {
					return 76;
				}
			}
		} else if ($latitude < 31.834249) {
			if ($longitude < 68.168892) {
				if ($longitude < 62.387335) {
					if ($this->polygons[1897]->contains($latitude, $longitude)) {
						return 210;
					}
					if ($this->polygons[1898]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 55;
					}
				} else if ($longitude < 65.278113) {
					if ($this->polygons[1899]->contains($latitude, $longitude)) {
						return 55;
					}
					if ($this->polygons[1900]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 210;
					}
				} else {
					if ($this->polygons[1901]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 210;
					}
				}
			} else {
				if ($this->polygons[1902]->contains($latitude, $longitude)) {
					return 366;
				} else {
					return 210;
				}
			}
		} else if ($longitude < 61.278584) {
			if ($latitude < 36.253417) {
				if ($longitude < 58.942181) {
					return 55;
				} else if ($latitude < 34.043833) {
					if ($this->polygons[1903]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 55;
					}
				} else {
					if ($this->polygons[1904]->contains($latitude, $longitude)) {
						return 76;
					}
					if ($this->polygons[1905]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 55;
					}
				}
			} else if ($longitude < 58.942181) {
				if ($this->polygons[1906]->contains($latitude, $longitude)) {
					return 76;
				} else {
					return 55;
				}
			} else {
				if ($this->polygons[1907]->contains($latitude, $longitude)) {
					return 55;
				} else {
					return 76;
				}
			}
		} else if ($latitude < 36.253417) {
			if ($this->polygons[1908]->contains($latitude, $longitude)) {
				return 76;
			} else {
				return 366;
			}
		} else if ($longitude < 64.921762) {
			if ($this->polygons[1909]->contains($latitude, $longitude)) {
				return 167;
			}
			if ($this->polygons[1910]->contains($latitude, $longitude)) {
				return 366;
			} else {
				return 76;
			}
		} else if ($latitude < 38.463001) {
			if ($longitude < 66.743352) {
				if ($this->polygons[1911]->contains($latitude, $longitude)) {
					return 167;
				}
				if ($this->polygons[1912]->contains($latitude, $longitude)) {
					return 366;
				} else {
					return 76;
				}
			} else if ($latitude < 37.358209) {
				if ($this->polygons[1913]->contains($latitude, $longitude)) {
					return 167;
				}
				if ($this->polygons[1914]->contains($latitude, $longitude)) {
					return 167;
				}
				if ($this->polygons[1915]->contains($latitude, $longitude)) {
					return 208;
				} else {
					return 366;
				}
			} else {
				if ($this->polygons[1916]->contains($latitude, $longitude)) {
					return 208;
				}
				if ($this->polygons[1917]->contains($latitude, $longitude)) {
					return 366;
				} else {
					return 167;
				}
			}
		} else if ($longitude < 66.743352) {
			if ($this->polygons[1918]->contains($latitude, $longitude)) {
				return 76;
			}
			if ($this->polygons[1919]->contains($latitude, $longitude)) {
				return 246;
			} else {
				return 167;
			}
		} else if ($latitude < 39.567793) {
			if ($this->polygons[1920]->contains($latitude, $longitude)) {
				return 167;
			}
			if ($this->polygons[1921]->contains($latitude, $longitude)) {
				return 246;
			}
			if ($this->polygons[1922]->contains($latitude, $longitude)) {
				return 246;
			} else {
				return 208;
			}
		} else {
			if ($this->polygons[1923]->contains($latitude, $longitude)) {
				return 167;
			}
			if ($this->polygons[1924]->contains($latitude, $longitude)) {
				return 208;
			}
			if ($this->polygons[1925]->contains($latitude, $longitude)) {
				return 208;
			}
			if ($this->polygons[1926]->contains($latitude, $longitude)) {
				return 208;
			} else {
				return 246;
			}
		}
	}
	
	protected function call34(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 77.840919) {
			if ($latitude < 23.877695) {
				return 371;
			} else if ($latitude < 31.180556) {
				if ($longitude < 73.202930) {
					if ($latitude < 27.529126) {
						if ($longitude < 70.883936) {
							if ($latitude < 25.703410) {
								if ($this->polygons[1927]->contains($latitude, $longitude)) {
									return 210;
								} else {
									return 371;
								}
							} else {
								if ($this->polygons[1928]->contains($latitude, $longitude)) {
									return 371;
								} else {
									return 210;
								}
							}
						} else {
							if ($this->polygons[1929]->contains($latitude, $longitude)) {
								return 210;
							}
							if ($this->polygons[1930]->contains($latitude, $longitude)) {
								return 210;
							} else {
								return 371;
							}
						}
					} else {
						if ($this->polygons[1931]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 210;
						}
					}
				} else {
					if ($this->polygons[1932]->contains($latitude, $longitude)) {
						return 210;
					} else {
						return 371;
					}
				}
			} else if ($longitude < 73.202930) {
				if ($latitude < 34.831987) {
					if ($longitude < 70.883936) {
						if ($latitude < 33.006272) {
							if ($this->polygons[1933]->contains($latitude, $longitude)) {
								return 366;
							}
							if ($this->polygons[1934]->contains($latitude, $longitude)) {
								return 366;
							} else {
								return 210;
							}
						} else {
							if ($this->polygons[1935]->contains($latitude, $longitude)) {
								return 210;
							} else {
								return 366;
							}
						}
					} else {
						if ($this->polygons[1936]->contains($latitude, $longitude)) {
							return 366;
						} else {
							return 210;
						}
					}
				} else if ($longitude < 70.883936) {
					if ($latitude < 36.657702) {
						return 366;
					} else if ($longitude < 69.724439) {
						if ($this->polygons[1937]->contains($latitude, $longitude)) {
							return 366;
						} else {
							return 208;
						}
					} else {
						if ($this->polygons[1938]->contains($latitude, $longitude)) {
							return 366;
						} else {
							return 208;
						}
					}
				} else if ($latitude < 36.657702) {
					if ($this->polygons[1939]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 210;
					}
				} else if ($longitude < 72.043433) {
					if ($this->polygons[1940]->contains($latitude, $longitude)) {
						return 366;
					} else {
						return 208;
					}
				} else {
					if ($this->polygons[1941]->contains($latitude, $longitude)) {
						return 208;
					}
					if ($this->polygons[1942]->contains($latitude, $longitude)) {
						return 210;
					} else {
						return 366;
					}
				}
			} else if ($latitude < 34.831987) {
				if ($longitude < 75.521925) {
					if ($latitude < 33.006272) {
						if ($this->polygons[1943]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 210;
						}
					} else {
						if ($this->polygons[1944]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 210;
						}
					}
				} else {
					if ($this->polygons[1945]->contains($latitude, $longitude)) {
						return 210;
					} else {
						return 371;
					}
				}
			} else if ($longitude < 75.521925) {
				if ($latitude < 36.657702) {
					return 210;
				} else if ($longitude < 74.362428) {
					if ($this->polygons[1946]->contains($latitude, $longitude)) {
						return 208;
					}
					if ($this->polygons[1947]->contains($latitude, $longitude)) {
						return 210;
					} else {
						return 366;
					}
				} else if ($latitude < 37.570560) {
					if ($longitude < 74.942176) {
						if ($latitude < 37.114131) {
							if ($this->polygons[1948]->contains($latitude, $longitude)) {
								return 4;
							}
							if ($this->polygons[1949]->contains($latitude, $longitude)) {
								return 366;
							} else {
								return 210;
							}
						} else {
							if ($this->polygons[1950]->contains($latitude, $longitude)) {
								return 208;
							}
							if ($this->polygons[1951]->contains($latitude, $longitude)) {
								return 366;
							} else {
								return 4;
							}
						}
					} else {
						if ($this->polygons[1952]->contains($latitude, $longitude)) {
							return 208;
						}
						if ($this->polygons[1953]->contains($latitude, $longitude)) {
							return 210;
						} else {
							return 4;
						}
					}
				} else {
					if ($this->polygons[1954]->contains($latitude, $longitude)) {
						return 208;
					} else {
						return 4;
					}
				}
			} else if ($latitude < 36.657702) {
				if ($this->polygons[1955]->contains($latitude, $longitude)) {
					return 4;
				}
				if ($this->polygons[1956]->contains($latitude, $longitude)) {
					return 371;
				} else {
					return 210;
				}
			} else {
				if ($this->polygons[1957]->contains($latitude, $longitude)) {
					return 210;
				} else {
					return 4;
				}
			}
		} else if ($latitude < 25.213472) {
			if ($latitude < 23.874722) {
				if ($longitude < 88.620415) {
					if ($this->polygons[1958]->contains($latitude, $longitude)) {
						return 150;
					} else {
						return 371;
					}
				} else {
					if ($this->polygons[1959]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 150;
					}
				}
			} else {
				if ($this->polygons[1960]->contains($latitude, $longitude)) {
					return 150;
				} else {
					return 371;
				}
			}
		} else if ($latitude < 31.848445) {
			if ($longitude < 83.240298) {
				if ($latitude < 28.530959) {
					if ($this->polygons[1961]->contains($latitude, $longitude)) {
						return 268;
					} else {
						return 371;
					}
				} else if ($longitude < 80.540609) {
					if ($latitude < 30.189702) {
						if ($this->polygons[1962]->contains($latitude, $longitude)) {
							return 268;
						} else {
							return 371;
						}
					} else {
						if ($this->polygons[1963]->contains($latitude, $longitude)) {
							return 4;
						} else {
							return 371;
						}
					}
				} else if ($latitude < 30.189702) {
					if ($this->polygons[1964]->contains($latitude, $longitude)) {
						return 4;
					}
					if ($this->polygons[1965]->contains($latitude, $longitude)) {
						return 371;
					}
					if ($this->polygons[1966]->contains($latitude, $longitude)) {
						return 371;
					}
					if ($this->polygons[1967]->contains($latitude, $longitude)) {
						return 371;
					}
					if ($this->polygons[1968]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 268;
					}
				} else if ($longitude < 81.890454) {
					if ($this->polygons[1969]->contains($latitude, $longitude)) {
						return 268;
					}
					if ($this->polygons[1970]->contains($latitude, $longitude)) {
						return 268;
					}
					if ($this->polygons[1971]->contains($latitude, $longitude)) {
						return 268;
					}
					if ($this->polygons[1972]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 4;
					}
				} else if ($latitude < 31.019073) {
					if ($this->polygons[1973]->contains($latitude, $longitude)) {
						return 4;
					}
					if ($this->polygons[1974]->contains($latitude, $longitude)) {
						return 268;
					} else {
						return 406;
					}
				} else {
					if ($this->polygons[1975]->contains($latitude, $longitude)) {
						return 406;
					}
					if ($this->polygons[1976]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 4;
					}
				}
			} else if ($latitude < 28.530959) {
				if ($longitude < 85.939988) {
					if ($latitude < 26.872216) {
						if ($this->polygons[1977]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 268;
						}
					} else if ($longitude < 84.590143) {
						if ($this->polygons[1978]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 268;
						}
					} else {
						if ($this->polygons[1979]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[1980]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[1981]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[1982]->contains($latitude, $longitude)) {
							return 406;
						} else {
							return 268;
						}
					}
				} else if ($latitude < 26.872216) {
					if ($longitude < 87.289832) {
						if ($this->polygons[1983]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 268;
						}
					} else if ($latitude < 26.042844) {
						if ($this->polygons[1984]->contains($latitude, $longitude)) {
							return 150;
						} else {
							return 371;
						}
					} else {
						if ($this->polygons[1985]->contains($latitude, $longitude)) {
							return 150;
						}
						if ($this->polygons[1986]->contains($latitude, $longitude)) {
							return 268;
						} else {
							return 371;
						}
					}
				} else if ($longitude < 87.289832) {
					if ($this->polygons[1987]->contains($latitude, $longitude)) {
						return 268;
					} else {
						return 406;
					}
				} else if ($latitude < 27.701587) {
					if ($this->polygons[1988]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 268;
					}
				} else {
					if ($this->polygons[1989]->contains($latitude, $longitude)) {
						return 268;
					}
					if ($this->polygons[1990]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 406;
					}
				}
			} else {
				if ($this->polygons[1991]->contains($latitude, $longitude)) {
					return 4;
				}
				if ($this->polygons[1992]->contains($latitude, $longitude)) {
					return 268;
				} else {
					return 406;
				}
			}
		} else if ($longitude < 83.240298) {
			if ($latitude < 35.165931) {
				if ($longitude < 80.540609) {
					if ($latitude < 33.507188) {
						if ($this->polygons[1993]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 4;
						}
					} else {
						if ($this->polygons[1994]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 4;
						}
					}
				} else {
					if ($this->polygons[1995]->contains($latitude, $longitude)) {
						return 406;
					}
					if ($this->polygons[1996]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 4;
					}
				}
			} else {
				if ($this->polygons[1997]->contains($latitude, $longitude)) {
					return 371;
				}
				if ($this->polygons[1998]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 4;
				}
			}
		} else {
			return 406;
		}
	}
	
	protected function call35(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 92.486359) {
			if ($latitude < 24.867944) {
				if ($longitude < 89.429982) {
					if ($longitude < 88.775749) {
						if ($latitude < 23.983778) {
							if ($this->polygons[1999]->contains($latitude, $longitude)) {
								return 150;
							} else {
								return 371;
							}
						} else {
							if ($this->polygons[2000]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 150;
							}
						}
					} else {
						return 150;
					}
				} else if ($longitude < 90.062531) {
					return 150;
				} else {
					if ($this->polygons[2001]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 150;
					}
				}
			} else if ($latitude < 26.461971) {
				if ($longitude < 90.563018) {
					if ($longitude < 89.601347) {
						if ($latitude < 25.664958) {
							if ($this->polygons[2002]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 150;
							}
						} else if ($longitude < 89.120512) {
							if ($this->polygons[2003]->contains($latitude, $longitude)) {
								return 371;
							}
							if ($this->polygons[2004]->contains($latitude, $longitude)) {
								return 371;
							}
							if ($this->polygons[2005]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 150;
							}
						} else {
							if ($this->polygons[2006]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 150;
							}
						}
					} else {
						if ($this->polygons[2007]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[2008]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[2009]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 150;
						}
					}
				} else {
					if ($this->polygons[2010]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 150;
					}
				}
			} else if ($latitude < 32.472694) {
				if ($latitude < 29.467333) {
					if ($longitude < 90.563018) {
						if ($latitude < 27.964652) {
							if ($longitude < 89.601347) {
								if ($this->polygons[2011]->contains($latitude, $longitude)) {
									return 371;
								}
								if ($this->polygons[2012]->contains($latitude, $longitude)) {
									return 406;
								} else {
									return 62;
								}
							} else {
								if ($this->polygons[2013]->contains($latitude, $longitude)) {
									return 371;
								} else {
									return 62;
								}
							}
						} else {
							if ($this->polygons[2014]->contains($latitude, $longitude)) {
								return 62;
							}
							if ($this->polygons[2015]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 406;
							}
						}
					} else if ($latitude < 27.964652) {
						if ($longitude < 91.524688) {
							if ($this->polygons[2016]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 62;
							}
						} else if ($latitude < 27.213312) {
							if ($this->polygons[2017]->contains($latitude, $longitude)) {
								return 62;
							} else {
								return 371;
							}
						} else {
							if ($this->polygons[2018]->contains($latitude, $longitude)) {
								return 62;
							}
							if ($this->polygons[2019]->contains($latitude, $longitude)) {
								return 406;
							} else {
								return 371;
							}
						}
					} else {
						if ($this->polygons[2020]->contains($latitude, $longitude)) {
							return 62;
						} else {
							return 406;
						}
					}
				} else {
					return 406;
				}
			} else {
				return 406;
			}
		} else if ($longitude < 94.108883) {
			if ($latitude < 24.079779) {
				if ($this->polygons[2021]->contains($latitude, $longitude)) {
					return 40;
				} else {
					return 371;
				}
			} else {
				if ($this->polygons[2022]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 371;
				}
			}
		} else if ($latitude < 31.176903) {
			if ($longitude < 99.606760) {
				if ($latitude < 27.523645) {
					if ($longitude < 96.857821) {
						if ($latitude < 25.697017) {
							if ($this->polygons[2023]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 40;
							}
						} else {
							if ($this->polygons[2024]->contains($latitude, $longitude)) {
								return 40;
							} else {
								return 371;
							}
						}
					} else if ($latitude < 25.697017) {
						if ($longitude < 98.232291) {
							if ($this->polygons[2025]->contains($latitude, $longitude)) {
								return 403;
							} else {
								return 40;
							}
						} else {
							if ($this->polygons[2026]->contains($latitude, $longitude)) {
								return 403;
							} else {
								return 40;
							}
						}
					} else {
						if ($this->polygons[2027]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[2028]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 40;
						}
					}
				} else if ($longitude < 96.857821) {
					if ($latitude < 29.350274) {
						if ($longitude < 95.483352) {
							if ($this->polygons[2029]->contains($latitude, $longitude)) {
								return 406;
							} else {
								return 371;
							}
						} else if ($latitude < 28.436960) {
							if ($this->polygons[2030]->contains($latitude, $longitude)) {
								return 406;
							}
							if ($this->polygons[2031]->contains($latitude, $longitude)) {
								return 406;
							} else {
								return 371;
							}
						} else {
							if ($this->polygons[2032]->contains($latitude, $longitude)) {
								return 371;
							}
							if ($this->polygons[2033]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 406;
							}
						}
					} else {
						if ($this->polygons[2034]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 406;
						}
					}
				} else if ($latitude < 29.350274) {
					if ($longitude < 98.232291) {
						if ($latitude < 28.436960) {
							if ($longitude < 97.545056) {
								if ($this->polygons[2035]->contains($latitude, $longitude)) {
									return 371;
								}
								if ($this->polygons[2036]->contains($latitude, $longitude)) {
									return 406;
								} else {
									return 40;
								}
							} else {
								if ($this->polygons[2037]->contains($latitude, $longitude)) {
									return 403;
								}
								if ($this->polygons[2038]->contains($latitude, $longitude)) {
									return 403;
								}
								if ($this->polygons[2039]->contains($latitude, $longitude)) {
									return 406;
								} else {
									return 40;
								}
							}
						} else {
							if ($this->polygons[2040]->contains($latitude, $longitude)) {
								return 40;
							} else {
								return 406;
							}
						}
					} else {
						if ($this->polygons[2041]->contains($latitude, $longitude)) {
							return 40;
						}
						if ($this->polygons[2042]->contains($latitude, $longitude)) {
							return 406;
						}
						if ($this->polygons[2043]->contains($latitude, $longitude)) {
							return 406;
						} else {
							return 403;
						}
					}
				} else {
					if ($this->polygons[2044]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 403;
					}
				}
			} else {
				return 403;
			}
		} else if ($longitude < 99.606760) {
			if ($latitude < 34.830160) {
				if ($longitude < 96.857821) {
					return 406;
				} else if ($latitude < 33.003531) {
					if ($this->polygons[2045]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 403;
					}
				} else if ($longitude < 98.232291) {
					if ($this->polygons[2046]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 406;
					}
				} else {
					if ($this->polygons[2047]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 403;
					}
				}
			} else if ($longitude < 96.857821) {
				return 406;
			} else if ($latitude < 36.656789) {
				if ($this->polygons[2048]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 403;
				}
			} else {
				if ($this->polygons[2049]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 403;
				}
			}
		} else {
			if ($this->polygons[2050]->contains($latitude, $longitude)) {
				return 406;
			}
			if ($this->polygons[2051]->contains($latitude, $longitude)) {
				return 406;
			} else {
				return 403;
			}
		}
	}
	
	protected function call36(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 83.509430) {
			if ($longitude < 76.037186) {
				if ($latitude < 55.768539) {
					if ($longitude < 72.301064) {
						if ($latitude < 53.128227) {
							return 347;
						} else if ($longitude < 70.433002) {
							if ($this->polygons[2052]->contains($latitude, $longitude)) {
								return 178;
							}
							if ($this->polygons[2053]->contains($latitude, $longitude)) {
								return 379;
							} else {
								return 347;
							}
						} else if ($latitude < 54.448383) {
							if ($this->polygons[2054]->contains($latitude, $longitude)) {
								return 379;
							} else {
								return 347;
							}
						} else {
							if ($this->polygons[2055]->contains($latitude, $longitude)) {
								return 178;
							}
							if ($this->polygons[2056]->contains($latitude, $longitude)) {
								return 347;
							} else {
								return 379;
							}
						}
					} else if ($latitude < 53.128227) {
						return 347;
					} else if ($longitude < 74.169125) {
						if ($latitude < 54.448383) {
							if ($longitude < 73.235094) {
								if ($this->polygons[2057]->contains($latitude, $longitude)) {
									return 379;
								} else {
									return 347;
								}
							} else {
								if ($this->polygons[2058]->contains($latitude, $longitude)) {
									return 379;
								} else {
									return 347;
								}
							}
						} else {
							return 379;
						}
					} else if ($latitude < 54.448383) {
						if ($this->polygons[2059]->contains($latitude, $longitude)) {
							return 95;
						}
						if ($this->polygons[2060]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 347;
						}
					} else {
						if ($this->polygons[2061]->contains($latitude, $longitude)) {
							return 379;
						}
						if ($this->polygons[2062]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 95;
						}
					}
				} else if ($longitude < 72.301064) {
					if ($latitude < 58.408852) {
						if ($longitude < 70.433002) {
							if ($this->polygons[2063]->contains($latitude, $longitude)) {
								return 379;
							}
							if ($this->polygons[2064]->contains($latitude, $longitude)) {
								return 379;
							}
							if ($this->polygons[2065]->contains($latitude, $longitude)) {
								return 379;
							} else {
								return 178;
							}
						} else if ($latitude < 57.088696) {
							if ($this->polygons[2066]->contains($latitude, $longitude)) {
								return 379;
							} else {
								return 178;
							}
						} else {
							if ($this->polygons[2067]->contains($latitude, $longitude)) {
								return 379;
							} else {
								return 178;
							}
						}
					} else {
						if ($this->polygons[2068]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 178;
						}
					}
				} else if ($latitude < 58.408852) {
					if ($this->polygons[2069]->contains($latitude, $longitude)) {
						return 95;
					}
					if ($this->polygons[2070]->contains($latitude, $longitude)) {
						return 95;
					}
					if ($this->polygons[2071]->contains($latitude, $longitude)) {
						return 95;
					}
					if ($this->polygons[2072]->contains($latitude, $longitude)) {
						return 95;
					}
					if ($this->polygons[2073]->contains($latitude, $longitude)) {
						return 178;
					} else {
						return 379;
					}
				} else {
					if ($this->polygons[2074]->contains($latitude, $longitude)) {
						return 95;
					}
					if ($this->polygons[2075]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 178;
					}
				}
			} else if ($latitude < 55.768539) {
				if ($longitude < 79.773308) {
					if ($latitude < 53.128227) {
						if ($this->polygons[2076]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 347;
						}
					} else if ($longitude < 77.905247) {
						if ($this->polygons[2077]->contains($latitude, $longitude)) {
							return 347;
						}
						if ($this->polygons[2078]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 95;
						}
					} else {
						if ($this->polygons[2079]->contains($latitude, $longitude)) {
							return 95;
						}
						if ($this->polygons[2080]->contains($latitude, $longitude)) {
							return 347;
						} else {
							return 379;
						}
					}
				} else if ($latitude < 53.128227) {
					if ($longitude < 81.641369) {
						if ($this->polygons[2081]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 347;
						}
					} else {
						if ($this->polygons[2082]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 347;
						}
					}
				} else if ($longitude < 81.641369) {
					if ($this->polygons[2083]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 95;
					}
				} else {
					if ($this->polygons[2084]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 95;
					}
				}
			} else if ($longitude < 79.773308) {
				if ($latitude < 58.408852) {
					if ($this->polygons[2085]->contains($latitude, $longitude)) {
						return 379;
					}
					if ($this->polygons[2086]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 95;
					}
				} else {
					if ($this->polygons[2087]->contains($latitude, $longitude)) {
						return 178;
					} else {
						return 95;
					}
				}
			} else {
				if ($this->polygons[2088]->contains($latitude, $longitude)) {
					return 178;
				} else {
					return 95;
				}
			}
		} else if ($latitude < 50.955069) {
			if ($longitude < 84.233223) {
				if ($latitude < 50.515362) {
					if ($this->polygons[2089]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 347;
					}
				} else {
					if ($this->polygons[2090]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 347;
					}
				}
			} else {
				if ($this->polygons[2091]->contains($latitude, $longitude)) {
					return 379;
				} else {
					return 289;
				}
			}
		} else if ($latitude < 56.002116) {
			if ($longitude < 87.293533) {
				if ($latitude < 53.478593) {
					if ($this->polygons[2092]->contains($latitude, $longitude)) {
						return 87;
					}
					if ($this->polygons[2093]->contains($latitude, $longitude)) {
						return 87;
					} else {
						return 379;
					}
				} else if ($longitude < 85.401482) {
					if ($latitude < 54.740354) {
						if ($this->polygons[2094]->contains($latitude, $longitude)) {
							return 87;
						}
						if ($this->polygons[2095]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 95;
						}
					} else {
						if ($this->polygons[2096]->contains($latitude, $longitude)) {
							return 95;
						} else {
							return 87;
						}
					}
				} else {
					if ($this->polygons[2097]->contains($latitude, $longitude)) {
						return 379;
					}
					if ($this->polygons[2098]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 87;
					}
				}
			} else if ($latitude < 53.478593) {
				if ($longitude < 89.185585) {
					if ($latitude < 52.216831) {
						if ($this->polygons[2099]->contains($latitude, $longitude)) {
							return 87;
						}
						if ($this->polygons[2100]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 379;
						}
					} else {
						if ($this->polygons[2101]->contains($latitude, $longitude)) {
							return 289;
						}
						if ($this->polygons[2102]->contains($latitude, $longitude)) {
							return 289;
						}
						if ($this->polygons[2103]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 87;
						}
					}
				} else {
					if ($this->polygons[2104]->contains($latitude, $longitude)) {
						return 87;
					}
					if ($this->polygons[2105]->contains($latitude, $longitude)) {
						return 379;
					} else {
						return 289;
					}
				}
			} else if ($longitude < 89.185585) {
				if ($latitude < 54.740354) {
					if ($this->polygons[2106]->contains($latitude, $longitude)) {
						return 87;
					} else {
						return 289;
					}
				} else {
					if ($this->polygons[2107]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 87;
					}
				}
			} else {
				if ($this->polygons[2108]->contains($latitude, $longitude)) {
					return 87;
				}
				if ($this->polygons[2109]->contains($latitude, $longitude)) {
					return 87;
				}
				if ($this->polygons[2110]->contains($latitude, $longitude)) {
					return 87;
				}
				if ($this->polygons[2111]->contains($latitude, $longitude)) {
					return 87;
				}
				if ($this->polygons[2112]->contains($latitude, $longitude)) {
					return 87;
				} else {
					return 289;
				}
			}
		} else if ($longitude < 87.293533) {
			if ($latitude < 58.525640) {
				if ($this->polygons[2113]->contains($latitude, $longitude)) {
					return 87;
				} else {
					return 95;
				}
			} else {
				if ($this->polygons[2114]->contains($latitude, $longitude)) {
					return 178;
				}
				if ($this->polygons[2115]->contains($latitude, $longitude)) {
					return 289;
				} else {
					return 95;
				}
			}
		} else if ($latitude < 58.525640) {
			if ($longitude < 89.185585) {
				if ($latitude < 57.263878) {
					if ($this->polygons[2116]->contains($latitude, $longitude)) {
						return 95;
					}
					if ($this->polygons[2117]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 87;
					}
				} else {
					if ($this->polygons[2118]->contains($latitude, $longitude)) {
						return 289;
					}
					if ($this->polygons[2119]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 95;
					}
				}
			} else {
				if ($this->polygons[2120]->contains($latitude, $longitude)) {
					return 87;
				}
				if ($this->polygons[2121]->contains($latitude, $longitude)) {
					return 95;
				} else {
					return 289;
				}
			}
		} else {
			if ($this->polygons[2122]->contains($latitude, $longitude)) {
				return 95;
			} else {
				return 289;
			}
		}
	}
	
	protected function call37(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 81.689583) {
			if ($longitude < 69.014221) {
				if ($latitude < 40.080223) {
					if ($this->polygons[2123]->contains($latitude, $longitude)) {
						return 246;
					} else {
						return 208;
					}
				} else if ($latitude < 40.220528) {
					if ($this->polygons[2124]->contains($latitude, $longitude)) {
						return 208;
					} else {
						return 246;
					}
				} else {
					if ($this->polygons[2125]->contains($latitude, $longitude)) {
						return 347;
					} else {
						return 246;
					}
				}
			} else if ($longitude < 73.132278) {
				if ($latitude < 41.042252) {
					if ($longitude < 70.738670) {
						if ($latitude < 39.902557) {
							if ($this->polygons[2126]->contains($latitude, $longitude)) {
								return 230;
							}
							if ($this->polygons[2127]->contains($latitude, $longitude)) {
								return 230;
							} else {
								return 208;
							}
						} else if ($longitude < 69.876446) {
							if ($this->polygons[2128]->contains($latitude, $longitude)) {
								return 230;
							}
							if ($this->polygons[2129]->contains($latitude, $longitude)) {
								return 230;
							}
							if ($this->polygons[2130]->contains($latitude, $longitude)) {
								return 246;
							} else {
								return 208;
							}
						} else {
							if ($this->polygons[2131]->contains($latitude, $longitude)) {
								return 230;
							}
							if ($this->polygons[2132]->contains($latitude, $longitude)) {
								return 246;
							}
							if ($this->polygons[2133]->contains($latitude, $longitude)) {
								return 246;
							} else {
								return 208;
							}
						}
					} else if ($latitude < 40.228500) {
						if ($longitude < 70.971222) {
							if ($latitude < 39.492379) {
								if ($this->polygons[2134]->contains($latitude, $longitude)) {
									return 230;
								} else {
									return 208;
								}
							} else {
								if ($this->polygons[2135]->contains($latitude, $longitude)) {
									return 208;
								}
								if ($this->polygons[2136]->contains($latitude, $longitude)) {
									return 246;
								} else {
									return 230;
								}
							}
						} else if ($latitude < 39.613609) {
							if ($longitude < 71.498947) {
								if ($this->polygons[2137]->contains($latitude, $longitude)) {
									return 230;
								} else {
									return 208;
								}
							} else {
								if ($this->polygons[2138]->contains($latitude, $longitude)) {
									return 230;
								} else {
									return 208;
								}
							}
						} else if ($longitude < 71.229332) {
							if ($this->polygons[2139]->contains($latitude, $longitude)) {
								return 246;
							} else {
								return 230;
							}
						} else {
							if ($this->polygons[2140]->contains($latitude, $longitude)) {
								return 246;
							}
							if ($this->polygons[2141]->contains($latitude, $longitude)) {
								return 246;
							} else {
								return 230;
							}
						}
					} else if ($longitude < 71.664379) {
						if ($longitude < 70.789665) {
							if ($latitude < 40.725140) {
								if ($this->polygons[2142]->contains($latitude, $longitude)) {
									return 208;
								} else {
									return 246;
								}
							} else {
								if ($this->polygons[2143]->contains($latitude, $longitude)) {
									return 208;
								} else {
									return 246;
								}
							}
						} else if ($longitude < 71.491906) {
							if ($this->polygons[2144]->contains($latitude, $longitude)) {
								return 230;
							} else {
								return 246;
							}
						} else {
							if ($this->polygons[2145]->contains($latitude, $longitude)) {
								return 230;
							} else {
								return 246;
							}
						}
					} else {
						if ($this->polygons[2146]->contains($latitude, $longitude)) {
							return 246;
						} else {
							return 230;
						}
					}
				} else if ($latitude < 43.204445) {
					if ($longitude < 71.073250) {
						if ($latitude < 42.123348) {
							if ($longitude < 70.043736) {
								if ($this->polygons[2147]->contains($latitude, $longitude)) {
									return 246;
								} else {
									return 347;
								}
							} else {
								if ($this->polygons[2148]->contains($latitude, $longitude)) {
									return 230;
								}
								if ($this->polygons[2149]->contains($latitude, $longitude)) {
									return 347;
								}
								if ($this->polygons[2150]->contains($latitude, $longitude)) {
									return 347;
								} else {
									return 246;
								}
							}
						} else {
							if ($this->polygons[2151]->contains($latitude, $longitude)) {
								return 230;
							}
							if ($this->polygons[2152]->contains($latitude, $longitude)) {
								return 230;
							}
							if ($this->polygons[2153]->contains($latitude, $longitude)) {
								return 246;
							}
							if ($this->polygons[2154]->contains($latitude, $longitude)) {
								return 246;
							} else {
								return 347;
							}
						}
					} else if ($latitude < 42.123348) {
						if ($this->polygons[2155]->contains($latitude, $longitude)) {
							return 230;
						} else {
							return 246;
						}
					} else {
						if ($this->polygons[2156]->contains($latitude, $longitude)) {
							return 246;
						}
						if ($this->polygons[2157]->contains($latitude, $longitude)) {
							return 347;
						}
						if ($this->polygons[2158]->contains($latitude, $longitude)) {
							return 347;
						} else {
							return 230;
						}
					}
				} else {
					return 347;
				}
			} else if ($longitude < 77.410931) {
				if ($latitude < 41.925028) {
					if ($longitude < 75.271605) {
						if ($latitude < 40.204223) {
							if ($longitude < 74.201941) {
								if ($this->polygons[2159]->contains($latitude, $longitude)) {
									return 208;
								}
								if ($this->polygons[2160]->contains($latitude, $longitude)) {
									return 230;
								} else {
									return 4;
								}
							} else {
								if ($this->polygons[2161]->contains($latitude, $longitude)) {
									return 208;
								}
								if ($this->polygons[2162]->contains($latitude, $longitude)) {
									return 230;
								} else {
									return 4;
								}
							}
						} else {
							if ($this->polygons[2163]->contains($latitude, $longitude)) {
								return 4;
							} else {
								return 230;
							}
						}
					} else {
						if ($this->polygons[2164]->contains($latitude, $longitude)) {
							return 230;
						} else {
							return 4;
						}
					}
				} else {
					if ($this->polygons[2165]->contains($latitude, $longitude)) {
						return 347;
					} else {
						return 230;
					}
				}
			} else if ($latitude < 41.925028) {
				if ($this->polygons[2166]->contains($latitude, $longitude)) {
					return 230;
				} else {
					return 4;
				}
			} else if ($longitude < 79.550257) {
				if ($this->polygons[2167]->contains($latitude, $longitude)) {
					return 347;
				} else {
					return 230;
				}
			} else if ($latitude < 43.645833) {
				if ($longitude < 80.619920) {
					if ($this->polygons[2168]->contains($latitude, $longitude)) {
						return 4;
					}
					if ($this->polygons[2169]->contains($latitude, $longitude)) {
						return 230;
					} else {
						return 347;
					}
				} else {
					if ($this->polygons[2170]->contains($latitude, $longitude)) {
						return 347;
					} else {
						return 4;
					}
				}
			} else {
				if ($this->polygons[2171]->contains($latitude, $longitude)) {
					return 4;
				} else {
					return 347;
				}
			}
		} else if ($longitude < 84.960781) {
			if ($latitude < 41.925028) {
				if ($this->polygons[2172]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 4;
				}
			} else if ($latitude < 43.645833) {
				if ($longitude < 83.325182) {
					if ($this->polygons[2173]->contains($latitude, $longitude)) {
						return 406;
					}
					if ($this->polygons[2174]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 4;
					}
				} else {
					if ($this->polygons[2175]->contains($latitude, $longitude)) {
						return 4;
					}
					if ($this->polygons[2176]->contains($latitude, $longitude)) {
						return 4;
					} else {
						return 406;
					}
				}
			} else if ($longitude < 83.325182) {
				if ($this->polygons[2177]->contains($latitude, $longitude)) {
					return 347;
				}
				if ($this->polygons[2178]->contains($latitude, $longitude)) {
					return 406;
				}
				if ($this->polygons[2179]->contains($latitude, $longitude)) {
					return 406;
				}
				if ($this->polygons[2180]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 4;
				}
			} else {
				if ($this->polygons[2181]->contains($latitude, $longitude)) {
					return 4;
				} else {
					return 406;
				}
			}
		} else if ($longitude < 95.032709) {
			if ($this->polygons[2182]->contains($latitude, $longitude)) {
				return 121;
			} else {
				return 406;
			}
		} else if ($longitude < 100.068673) {
			if ($latitude < 41.925028) {
				if ($this->polygons[2183]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 403;
				}
			} else {
				if ($this->polygons[2184]->contains($latitude, $longitude)) {
					return 123;
				}
				if ($this->polygons[2185]->contains($latitude, $longitude)) {
					return 403;
				}
				if ($this->polygons[2186]->contains($latitude, $longitude)) {
					return 406;
				} else {
					return 121;
				}
			}
		} else {
			if ($this->polygons[2187]->contains($latitude, $longitude)) {
				return 403;
			} else {
				return 123;
			}
		}
	}
	
	protected function call38(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 23.870388) {
			if ($longitude < 90.252220) {
				if ($longitude < 88.803276) {
					if ($longitude < 68.778862) {
						return 371;
					} else {
						if ($this->polygons[2188]->contains($latitude, $longitude)) {
							return 371;
						}
						if ($this->polygons[2189]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 150;
						}
					}
				} else {
					return 150;
				}
			} else if ($longitude < 90.759941) {
				return 150;
			} else if ($longitude < 93.437553) {
				if ($longitude < 92.333679) {
					if ($longitude < 91.259092) {
						if ($this->polygons[2190]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 150;
						}
					} else {
						if ($this->polygons[2191]->contains($latitude, $longitude)) {
							return 150;
						} else {
							return 371;
						}
					}
				} else if ($latitude < 23.680471) {
					if ($this->polygons[2192]->contains($latitude, $longitude)) {
						return 40;
					} else {
						return 371;
					}
				} else {
					if ($this->polygons[2193]->contains($latitude, $longitude)) {
						return 40;
					} else {
						return 371;
					}
				}
			} else if ($longitude < 94.162030) {
				if ($this->polygons[2194]->contains($latitude, $longitude)) {
					return 371;
				} else {
					return 40;
				}
			} else if ($longitude < 97.683406) {
				if ($this->polygons[2195]->contains($latitude, $longitude)) {
					return 403;
				} else {
					return 40;
				}
			} else {
				if ($this->polygons[2196]->contains($latitude, $longitude)) {
					return 403;
				} else {
					return 40;
				}
			}
		} else if ($latitude < 38.483418) {
			if ($longitude < 88.639677) {
				return $this->call34($latitude, $longitude);
			} else {
				return $this->call35($latitude, $longitude);
			}
		} else if ($latitude < 45.366638) {
			return $this->call37($latitude, $longitude);
		} else if ($longitude < 91.077637) {
			if ($latitude < 50.487915) {
				if ($longitude < 87.312668) {
					if ($longitude < 77.938805) {
						return 347;
					} else if ($longitude < 82.625736) {
						if ($this->polygons[2197]->contains($latitude, $longitude)) {
							return 406;
						} else {
							return 347;
						}
					} else if ($latitude < 47.927277) {
						if ($this->polygons[2198]->contains($latitude, $longitude)) {
							return 406;
						} else {
							return 347;
						}
					} else if ($longitude < 84.969202) {
						if ($this->polygons[2199]->contains($latitude, $longitude)) {
							return 379;
						} else {
							return 347;
						}
					} else if ($latitude < 49.207596) {
						if ($this->polygons[2200]->contains($latitude, $longitude)) {
							return 379;
						}
						if ($this->polygons[2201]->contains($latitude, $longitude)) {
							return 406;
						} else {
							return 347;
						}
					} else {
						if ($this->polygons[2202]->contains($latitude, $longitude)) {
							return 347;
						} else {
							return 379;
						}
					}
				} else if ($latitude < 46.563946) {
					if ($this->polygons[2203]->contains($latitude, $longitude)) {
						return 121;
					} else {
						return 406;
					}
				} else if ($latitude < 48.525930) {
					if ($this->polygons[2204]->contains($latitude, $longitude)) {
						return 406;
					} else {
						return 121;
					}
				} else if ($longitude < 89.195152) {
					if ($latitude < 49.506923) {
						if ($longitude < 88.253910) {
							if ($this->polygons[2205]->contains($latitude, $longitude)) {
								return 379;
							}
							if ($this->polygons[2206]->contains($latitude, $longitude)) {
								return 406;
							}
							if ($this->polygons[2207]->contains($latitude, $longitude)) {
								return 406;
							} else {
								return 121;
							}
						} else {
							if ($this->polygons[2208]->contains($latitude, $longitude)) {
								return 379;
							}
							if ($this->polygons[2209]->contains($latitude, $longitude)) {
								return 379;
							}
							if ($this->polygons[2210]->contains($latitude, $longitude)) {
								return 379;
							}
							if ($this->polygons[2211]->contains($latitude, $longitude)) {
								return 379;
							} else {
								return 121;
							}
						}
					} else {
						if ($this->polygons[2212]->contains($latitude, $longitude)) {
							return 121;
						}
						if ($this->polygons[2213]->contains($latitude, $longitude)) {
							return 121;
						}
						if ($this->polygons[2214]->contains($latitude, $longitude)) {
							return 121;
						}
						if ($this->polygons[2215]->contains($latitude, $longitude)) {
							return 121;
						}
						if ($this->polygons[2216]->contains($latitude, $longitude)) {
							return 121;
						} else {
							return 379;
						}
					}
				} else if ($latitude < 49.506923) {
					return 121;
				} else if ($longitude < 90.136395) {
					if ($this->polygons[2217]->contains($latitude, $longitude)) {
						return 121;
					}
					if ($this->polygons[2218]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 379;
					}
				} else {
					if ($this->polygons[2219]->contains($latitude, $longitude)) {
						return 121;
					} else {
						return 289;
					}
				}
			} else if ($latitude < 61.049164) {
				return $this->call36($latitude, $longitude);
			} else if ($longitude < 72.250832) {
				return 178;
			} else if ($longitude < 81.664234) {
				return 178;
			} else if ($longitude < 86.370935) {
				if ($latitude < 63.659122) {
					if ($longitude < 84.017585) {
						return 178;
					} else if ($latitude < 62.354143) {
						if ($this->polygons[2220]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 178;
						}
					} else {
						if ($this->polygons[2221]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 178;
						}
					}
				} else if ($longitude < 84.017585) {
					if ($this->polygons[2222]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 178;
					}
				} else {
					if ($this->polygons[2223]->contains($latitude, $longitude)) {
						return 178;
					} else {
						return 289;
					}
				}
			} else {
				return 289;
			}
		} else if ($latitude < 59.320831) {
			if ($longitude < 98.091137) {
				if ($latitude < 52.343735) {
					if ($longitude < 94.584387) {
						if ($this->polygons[2224]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 121;
						}
					} else if ($latitude < 48.855186) {
						if ($this->polygons[2225]->contains($latitude, $longitude)) {
							return 123;
						}
						if ($this->polygons[2226]->contains($latitude, $longitude)) {
							return 123;
						} else {
							return 121;
						}
					} else if ($longitude < 96.337762) {
						if ($this->polygons[2227]->contains($latitude, $longitude)) {
							return 121;
						} else {
							return 289;
						}
					} else {
						if ($this->polygons[2228]->contains($latitude, $longitude)) {
							return 121;
						}
						if ($this->polygons[2229]->contains($latitude, $longitude)) {
							return 123;
						}
						if ($this->polygons[2230]->contains($latitude, $longitude)) {
							return 123;
						} else {
							return 289;
						}
					}
				} else if ($longitude < 94.584387) {
					return 289;
				} else if ($latitude < 55.832283) {
					if ($longitude < 96.337762) {
						if ($this->polygons[2231]->contains($latitude, $longitude)) {
							return 144;
						} else {
							return 289;
						}
					} else {
						if ($this->polygons[2232]->contains($latitude, $longitude)) {
							return 144;
						} else {
							return 289;
						}
					}
				} else {
					if ($this->polygons[2233]->contains($latitude, $longitude)) {
						return 144;
					} else {
						return 289;
					}
				}
			} else if ($latitude < 52.343735) {
				if ($longitude < 101.597887) {
					if ($latitude < 48.855186) {
						if ($this->polygons[2234]->contains($latitude, $longitude)) {
							return 123;
						} else {
							return 121;
						}
					} else if ($longitude < 99.844512) {
						if ($this->polygons[2235]->contains($latitude, $longitude)) {
							return 121;
						}
						if ($this->polygons[2236]->contains($latitude, $longitude)) {
							return 144;
						}
						if ($this->polygons[2237]->contains($latitude, $longitude)) {
							return 289;
						}
						if ($this->polygons[2238]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 123;
						}
					} else {
						if ($this->polygons[2239]->contains($latitude, $longitude)) {
							return 123;
						} else {
							return 144;
						}
					}
				} else {
					if ($this->polygons[2240]->contains($latitude, $longitude)) {
						return 144;
					} else {
						return 123;
					}
				}
			} else if ($longitude < 101.597887) {
				if ($latitude < 55.832283) {
					if ($this->polygons[2241]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 144;
					}
				} else {
					if ($this->polygons[2242]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 144;
					}
				}
			} else if ($latitude < 55.832283) {
				return 144;
			} else if ($longitude < 103.351262) {
				if ($this->polygons[2243]->contains($latitude, $longitude)) {
					return 289;
				}
				if ($this->polygons[2244]->contains($latitude, $longitude)) {
					return 289;
				} else {
					return 144;
				}
			} else {
				if ($this->polygons[2245]->contains($latitude, $longitude)) {
					return 144;
				} else {
					return 289;
				}
			}
		} else if ($latitude < 59.849081) {
			if ($this->polygons[2246]->contains($latitude, $longitude)) {
				return 144;
			} else {
				return 289;
			}
		} else {
			if ($this->polygons[2247]->contains($latitude, $longitude)) {
				return 144;
			} else {
				return 289;
			}
		}
	}
	
	protected function call39(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 27.104834) {
			if ($longitude < 55.210827) {
				if ($longitude < 53.523224) {
					if ($longitude < 51.746334) {
						if ($longitude < 50.828693) {
							if ($longitude < 50.664471) {
								if ($longitude < 50.359833) {
									return 163;
								} else if ($latitude < 25.509583) {
									return 163;
								} else {
									return 109;
								}
							} else if ($latitude < 25.615926) {
								if ($latitude < 25.523945) {
									if ($latitude < 24.963544) {
										if ($this->polygons[2248]->contains($latitude, $longitude)) {
											return 100;
										} else {
											return 163;
										}
									} else {
										return 100;
									}
								} else if ($longitude < 50.817749) {
									if ($this->polygons[2249]->contains($latitude, $longitude)) {
										return 100;
									} else {
										return 109;
									}
								} else {
									return 100;
								}
							} else {
								return 109;
							}
						} else if ($latitude < 24.743839) {
							if ($longitude < 51.580971) {
								if ($longitude < 51.478639) {
									if ($this->polygons[2250]->contains($latitude, $longitude)) {
										return 100;
									} else {
										return 163;
									}
								} else if ($longitude < 51.511971) {
									return 163;
								} else if ($latitude < 24.283293) {
									return 163;
								} else {
									return 321;
								}
							} else if ($latitude < 24.239900) {
								if ($this->polygons[2251]->contains($latitude, $longitude)) {
									return 163;
								} else {
									return 321;
								}
							} else {
								return 321;
							}
						} else {
							return 100;
						}
					} else if ($latitude < 24.356861) {
						if ($latitude < 23.924778) {
							if ($this->polygons[2252]->contains($latitude, $longitude)) {
								return 321;
							} else {
								return 163;
							}
						} else {
							return 321;
						}
					} else if ($latitude < 25.154139) {
						return 321;
					} else if ($longitude < 52.427582) {
						return 100;
					} else {
						return 55;
					}
				} else if ($latitude < 24.475027) {
					if ($latitude < 22.826911) {
						if ($this->polygons[2253]->contains($latitude, $longitude)) {
							return 321;
						} else {
							return 163;
						}
					} else {
						return 321;
					}
				} else if ($latitude < 25.246805) {
					return 321;
				} else if ($latitude < 25.897194) {
					if ($longitude < 54.772754) {
						return 55;
					} else {
						return 321;
					}
				} else {
					return 55;
				}
			} else if ($longitude < 66.393387) {
				if ($longitude < 56.537693) {
					if ($latitude < 26.387972) {
						if ($latitude < 25.553473) {
							if ($latitude < 24.983110) {
								if ($this->polygons[2254]->contains($latitude, $longitude)) {
									return 163;
								}
								if ($this->polygons[2255]->contains($latitude, $longitude)) {
									return 321;
								}
								if ($this->polygons[2256]->contains($latitude, $longitude)) {
									return 321;
								} else {
									return 357;
								}
							} else {
								return 321;
							}
						} else if ($latitude < 26.286167) {
							if ($longitude < 55.572693) {
								if ($latitude < 25.918639) {
									return 55;
								} else {
									return 321;
								}
							} else if ($longitude < 55.973804) {
								return 321;
							} else {
								if ($this->polygons[2257]->contains($latitude, $longitude)) {
									return 321;
								} else {
									return 357;
								}
							}
						} else {
							return 357;
						}
					} else {
						return 55;
					}
				} else if ($longitude < 58.490417) {
					if ($latitude < 24.613961) {
						return 357;
					} else {
						return 55;
					}
				} else if ($latitude < 23.643444) {
					return 357;
				} else if ($longitude < 63.281387) {
					if ($longitude < 59.965057) {
						return 55;
					} else if ($latitude < 26.874584) {
						if ($longitude < 61.623222) {
							if ($this->polygons[2258]->contains($latitude, $longitude)) {
								return 210;
							} else {
								return 55;
							}
						} else {
							if ($this->polygons[2259]->contains($latitude, $longitude)) {
								return 55;
							} else {
								return 210;
							}
						}
					} else {
						if ($this->polygons[2260]->contains($latitude, $longitude)) {
							return 210;
						} else {
							return 55;
						}
					}
				} else {
					return 210;
				}
			} else if ($longitude < 67.529053) {
				return 210;
			} else if ($latitude < 23.647362) {
				return 371;
			} else if ($longitude < 68.258080) {
				if ($latitude < 23.653912) {
					return 371;
				} else {
					if ($this->polygons[2261]->contains($latitude, $longitude)) {
						return 371;
					}
					if ($this->polygons[2262]->contains($latitude, $longitude)) {
						return 371;
					}
					if ($this->polygons[2263]->contains($latitude, $longitude)) {
						return 371;
					} else {
						return 210;
					}
				}
			} else if ($latitude < 23.734138) {
				return 371;
			} else {
				if ($this->polygons[2264]->contains($latitude, $longitude)) {
					return 210;
				} else {
					return 371;
				}
			}
		} else if ($latitude < 40.672585) {
			return $this->call33($latitude, $longitude);
		} else if ($longitude < 49.625584) {
			return $this->call32($latitude, $longitude);
		} else if ($latitude < 46.052723) {
			if ($longitude < 52.873138) {
				if ($latitude < 42.038017) {
					if ($latitude < 40.823005) {
						return 76;
					} else {
						if ($this->polygons[2265]->contains($latitude, $longitude)) {
							return 120;
						} else {
							return 76;
						}
					}
				} else {
					return 120;
				}
			} else if ($longitude < 59.666477) {
				if ($latitude < 44.892151) {
					if ($latitude < 44.271465) {
						if ($longitude < 56.269808) {
							if ($this->polygons[2266]->contains($latitude, $longitude)) {
								return 120;
							}
							if ($this->polygons[2267]->contains($latitude, $longitude)) {
								return 167;
							} else {
								return 76;
							}
						} else if ($latitude < 42.472025) {
							if ($this->polygons[2268]->contains($latitude, $longitude)) {
								return 167;
							}
							if ($this->polygons[2269]->contains($latitude, $longitude)) {
								return 167;
							}
							if ($this->polygons[2270]->contains($latitude, $longitude)) {
								return 167;
							} else {
								return 76;
							}
						} else {
							if ($this->polygons[2271]->contains($latitude, $longitude)) {
								return 76;
							}
							if ($this->polygons[2272]->contains($latitude, $longitude)) {
								return 76;
							} else {
								return 167;
							}
						}
					} else if ($longitude < 55.998606) {
						if ($this->polygons[2273]->contains($latitude, $longitude)) {
							return 167;
						} else {
							return 120;
						}
					} else {
						return 167;
					}
				} else if ($longitude < 58.607960) {
					if ($this->polygons[2274]->contains($latitude, $longitude)) {
						return 167;
					}
					if ($this->polygons[2275]->contains($latitude, $longitude)) {
						return 239;
					}
					if ($this->polygons[2276]->contains($latitude, $longitude)) {
						return 240;
					} else {
						return 120;
					}
				} else if ($latitude < 45.436764) {
					if ($longitude < 59.239082) {
						if ($latitude < 44.974435) {
							return 167;
						} else {
							if ($this->polygons[2277]->contains($latitude, $longitude)) {
								return 239;
							} else {
								return 167;
							}
						}
					} else {
						if ($this->polygons[2278]->contains($latitude, $longitude)) {
							return 239;
						} else {
							return 167;
						}
					}
				} else if ($latitude < 45.622234) {
					return 239;
				} else {
					if ($this->polygons[2279]->contains($latitude, $longitude)) {
						return 240;
					} else {
						return 239;
					}
				}
			} else if ($longitude < 62.074552) {
				if ($latitude < 44.584438) {
					if ($latitude < 42.306305) {
						if ($longitude < 59.827972) {
							if ($this->polygons[2280]->contains($latitude, $longitude)) {
								return 167;
							} else {
								return 76;
							}
						} else {
							if ($this->polygons[2281]->contains($latitude, $longitude)) {
								return 167;
							} else {
								return 76;
							}
						}
					} else {
						if ($this->polygons[2282]->contains($latitude, $longitude)) {
							return 239;
						} else {
							return 167;
						}
					}
				} else {
					return 239;
				}
			} else if ($longitude < 65.319747) {
				if ($this->polygons[2283]->contains($latitude, $longitude)) {
					return 239;
				} else {
					return 167;
				}
			} else if ($latitude < 43.362654) {
				if ($longitude < 66.942344) {
					if ($this->polygons[2284]->contains($latitude, $longitude)) {
						return 239;
					}
					if ($this->polygons[2285]->contains($latitude, $longitude)) {
						return 246;
					}
					if ($this->polygons[2286]->contains($latitude, $longitude)) {
						return 347;
					} else {
						return 167;
					}
				} else {
					if ($this->polygons[2287]->contains($latitude, $longitude)) {
						return 239;
					}
					if ($this->polygons[2288]->contains($latitude, $longitude)) {
						return 246;
					} else {
						return 347;
					}
				}
			} else {
				if ($this->polygons[2289]->contains($latitude, $longitude)) {
					return 167;
				}
				if ($this->polygons[2290]->contains($latitude, $longitude)) {
					return 347;
				} else {
					return 239;
				}
			}
		} else if ($latitude < 47.825829) {
			if ($longitude < 53.026917) {
				return 120;
			} else if ($longitude < 61.927216) {
				if ($longitude < 56.525335) {
					if ($this->polygons[2291]->contains($latitude, $longitude)) {
						return 240;
					} else {
						return 120;
					}
				} else {
					if ($this->polygons[2292]->contains($latitude, $longitude)) {
						return 240;
					} else {
						return 239;
					}
				}
			} else {
				if ($this->polygons[2293]->contains($latitude, $longitude)) {
					return 240;
				}
				if ($this->polygons[2294]->contains($latitude, $longitude)) {
					return 347;
				} else {
					return 239;
				}
			}
		} else {
			return $this->call31($latitude, $longitude);
		}
	}
	
	protected function call40(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 6.978889) {
			if ($longitude < 99.459221) {
				if ($latitude < -6.391056) {
					if ($latitude < -38.738110) {
						return 236;
					} else if ($latitude < -13.424148) {
						if ($longitude < 50.483780) {
							return 101;
						} else if ($latitude < -20.856855) {
							if ($longitude < 55.845039) {
								return 274;
							} else {
								return 236;
							}
						} else {
							return 233;
						}
					} else if ($longitude < 48.694023) {
						if ($latitude < -11.362381) {
							if ($longitude < 45.292950) {
								if ($longitude < 44.538223) {
									return 218;
								} else {
									return 351;
								}
							} else {
								return 101;
							}
						} else {
							return 66;
						}
					} else if ($longitude < 50.022717) {
						return 101;
					} else if ($longitude < 56.279507) {
						return 66;
					} else if ($longitude < 72.493164) {
						if ($longitude < 56.632473) {
							return 233;
						} else {
							return 13;
						}
					} else {
						return 97;
					}
				} else if ($longitude < 93.949997) {
					if ($longitude < 73.069031) {
						if ($longitude < 55.880646) {
							if ($longitude < 49.355780) {
								if ($this->polygons[2295]->contains($latitude, $longitude)) {
									return 350;
								} else {
									return 250;
								}
							} else {
								return 66;
							}
						} else if ($longitude < 72.336807) {
							if ($longitude < 55.951393) {
								return 66;
							} else {
								return 13;
							}
						} else {
							return 382;
						}
					} else if ($longitude < 73.637276) {
						return 382;
					} else if ($longitude < 87.800070) {
						return 288;
					} else {
						return 371;
					}
				} else if ($latitude < 5.768278) {
					return 26;
				} else if ($longitude < 95.376556) {
					return 26;
				} else {
					return 270;
				}
			} else if ($latitude < 1.156361) {
				return 26;
			} else if ($latitude < 2.704722) {
				if ($longitude < 103.439392) {
					if ($longitude < 101.424667) {
						return 26;
					} else if ($longitude < 102.513641) {
						if ($latitude < 1.697561) {
							return 26;
						} else if ($longitude < 101.791115) {
							if ($latitude < 2.119222) {
								return 26;
							} else {
								return 327;
							}
						} else {
							return 327;
						}
					} else {
						return 327;
					}
				} else if ($latitude < 1.471278) {
					if ($latitude < 1.256694) {
						if ($longitude < 103.842331) {
							return 316;
						} else {
							return 26;
						}
					} else if ($longitude < 104.009645) {
						if ($longitude < 103.785408) {
							if ($this->polygons[2296]->contains($latitude, $longitude)) {
								return 327;
							} else {
								return 316;
							}
						} else if ($latitude < 1.425806) {
							return 316;
						} else if ($longitude < 103.865644) {
							return 316;
						} else {
							return 327;
						}
					} else {
						if ($this->polygons[2297]->contains($latitude, $longitude)) {
							return 316;
						} else {
							return 327;
						}
					}
				} else {
					return 327;
				}
			} else if ($longitude < 100.075518) {
				if ($latitude < 6.471167) {
					if ($latitude < 3.361025) {
						return 26;
					} else {
						return 327;
					}
				} else {
					return 270;
				}
			} else if ($longitude < 102.092140) {
				if ($latitude < 5.238778) {
					if ($longitude < 100.218333) {
						if ($latitude < 3.966694) {
							return 26;
						} else {
							return 327;
						}
					} else {
						return 327;
					}
				} else if ($latitude < 5.479667) {
					return 327;
				} else if ($latitude < 6.714139) {
					if ($longitude < 100.203247) {
						if ($this->polygons[2298]->contains($latitude, $longitude)) {
							return 327;
						} else {
							return 270;
						}
					} else if ($longitude < 101.147694) {
						if ($this->polygons[2299]->contains($latitude, $longitude)) {
							return 270;
						} else {
							return 327;
						}
					} else {
						if ($this->polygons[2300]->contains($latitude, $longitude)) {
							return 327;
						} else {
							return 270;
						}
					}
				} else {
					return 270;
				}
			} else {
				return 327;
			}
		} else if ($longitude < 97.696892) {
			if ($longitude < 93.273331) {
				if ($longitude < 92.358528) {
					if ($longitude < 72.996170) {
						if ($longitude < 55.883141) {
							if ($latitude < 12.250028) {
								if ($longitude < 51.413029) {
									if ($latitude < 11.523074) {
										if ($latitude < 9.873331) {
											if ($this->polygons[2301]->contains($latitude, $longitude)) {
												return 350;
											} else {
												return 250;
											}
										} else if ($longitude < 43.254696) {
											if ($this->polygons[2302]->contains($latitude, $longitude)) {
												return 311;
											} else {
												return 250;
											}
										} else {
											return 250;
										}
									} else if ($longitude < 43.416973) {
										return 311;
									} else {
										return 250;
									}
								} else {
									return 215;
								}
							} else if ($latitude < 13.289861) {
								if ($latitude < 12.586202) {
									if ($longitude < 48.346151) {
										return 215;
									} else {
										return 311;
									}
								} else {
									return 215;
								}
							} else if ($longitude < 55.215251) {
								if ($longitude < 49.207153) {
									if ($this->polygons[2303]->contains($latitude, $longitude)) {
										return 163;
									}
									if ($this->polygons[2304]->contains($latitude, $longitude)) {
										return 163;
									} else {
										return 215;
									}
								} else {
									if ($this->polygons[2305]->contains($latitude, $longitude)) {
										return 163;
									}
									if ($this->polygons[2306]->contains($latitude, $longitude)) {
										return 357;
									} else {
										return 215;
									}
								}
							} else {
								return 357;
							}
						} else if ($longitude < 58.958778) {
							return 357;
						} else if ($latitude < 7.098361) {
							return 382;
						} else {
							return 371;
						}
					} else if ($longitude < 79.228668) {
						return 371;
					} else if ($latitude < 9.555528) {
						if ($longitude < 79.442337) {
							return 371;
						} else {
							return 288;
						}
					} else if ($latitude < 9.831361) {
						return 288;
					} else if ($longitude < 92.290085) {
						return 371;
					} else {
						return 150;
					}
				} else if ($latitude < 13.618361) {
					return 371;
				} else if ($latitude < 13.678945) {
					return 371;
				} else {
					return 40;
				}
			} else if ($latitude < 19.040861) {
				if ($longitude < 95.210640) {
					if ($latitude < 13.453917) {
						return 371;
					} else {
						return 40;
					}
				} else if ($longitude < 97.278137) {
					return 40;
				} else if ($latitude < 15.588417) {
					if ($latitude < 8.661195) {
						return 270;
					} else {
						return 40;
					}
				} else if ($latitude < 16.618416) {
					return 40;
				} else if ($latitude < 17.923909) {
					if ($this->polygons[2307]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				} else if ($latitude < 18.595112) {
					if ($this->polygons[2308]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				} else {
					if ($this->polygons[2309]->contains($latitude, $longitude)) {
						return 270;
					} else {
						return 40;
					}
				}
			} else {
				return 40;
			}
		} else {
			return $this->call30($latitude, $longitude);
		}
	}
	
	protected function call41(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 66.269081) {
			if ($longitude < 68.564941) {
				return $this->call39($latitude, $longitude);
			} else if ($latitude < 22.532944) {
				if ($longitude < 88.974408) {
					return 371;
				} else if ($longitude < 90.701530) {
					if ($longitude < 89.295280) {
						if ($longitude < 89.106918) {
							if ($this->polygons[2310]->contains($latitude, $longitude)) {
								return 150;
							}
							if ($this->polygons[2311]->contains($latitude, $longitude)) {
								return 150;
							}
							if ($this->polygons[2312]->contains($latitude, $longitude)) {
								return 150;
							} else {
								return 371;
							}
						} else {
							return 150;
						}
					} else {
						return 150;
					}
				} else if ($longitude < 92.143913) {
					return 150;
				} else if ($longitude < 93.198753) {
					if ($longitude < 92.359863) {
						if ($latitude < 20.724388) {
							return 150;
						} else if ($latitude < 20.864358) {
							if ($this->polygons[2313]->contains($latitude, $longitude)) {
								return 150;
							} else {
								return 40;
							}
						} else {
							if ($this->polygons[2314]->contains($latitude, $longitude)) {
								return 150;
							} else {
								return 40;
							}
						}
					} else if ($latitude < 20.758194) {
						return 40;
					} else {
						if ($this->polygons[2315]->contains($latitude, $longitude)) {
							return 150;
						}
						if ($this->polygons[2316]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 40;
						}
					}
				} else if ($longitude < 102.310904) {
					if ($longitude < 97.754829) {
						return 40;
					} else if ($longitude < 100.032866) {
						if ($this->polygons[2317]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 40;
						}
					} else if ($longitude < 101.171885) {
						if ($this->polygons[2318]->contains($latitude, $longitude)) {
							return 265;
						}
						if ($this->polygons[2319]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 40;
						}
					} else if ($latitude < 21.589333) {
						if ($this->polygons[2320]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 265;
						}
					} else {
						if ($this->polygons[2321]->contains($latitude, $longitude)) {
							return 24;
						}
						if ($this->polygons[2322]->contains($latitude, $longitude)) {
							return 40;
						}
						if ($this->polygons[2323]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 265;
						}
					}
				} else if ($latitude < 22.204487) {
					if ($longitude < 103.707771) {
						if ($this->polygons[2324]->contains($latitude, $longitude)) {
							return 24;
						} else {
							return 265;
						}
					} else {
						if ($this->polygons[2325]->contains($latitude, $longitude)) {
							return 265;
						} else {
							return 24;
						}
					}
				} else if ($longitude < 103.136834) {
					if ($this->polygons[2326]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 24;
					}
				} else {
					if ($this->polygons[2327]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 24;
					}
				}
			} else if ($latitude < 23.438555) {
				if ($longitude < 90.524109) {
					if ($longitude < 88.997475) {
						if ($longitude < 70.478226) {
							return 371;
						} else if ($latitude < 23.199751) {
							if ($this->polygons[2328]->contains($latitude, $longitude)) {
								return 150;
							} else {
								return 371;
							}
						} else {
							if ($this->polygons[2329]->contains($latitude, $longitude)) {
								return 150;
							} else {
								return 371;
							}
						}
					} else {
						return 150;
					}
				} else if ($longitude < 91.172333) {
					return 150;
				} else if ($longitude < 91.940453) {
					if ($latitude < 22.756250) {
						return 150;
					} else {
						if ($this->polygons[2330]->contains($latitude, $longitude)) {
							return 371;
						} else {
							return 150;
						}
					}
				} else if ($longitude < 99.563530) {
					if ($longitude < 93.402527) {
						if ($longitude < 92.529763) {
							if ($this->polygons[2331]->contains($latitude, $longitude)) {
								return 371;
							} else {
								return 150;
							}
						} else if ($latitude < 23.386499) {
							if ($this->polygons[2332]->contains($latitude, $longitude)) {
								return 40;
							} else {
								return 371;
							}
						} else {
							if ($this->polygons[2333]->contains($latitude, $longitude)) {
								return 40;
							} else {
								return 371;
							}
						}
					} else {
						if ($this->polygons[2334]->contains($latitude, $longitude)) {
							return 403;
						}
						if ($this->polygons[2335]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 40;
						}
					}
				} else if ($longitude < 102.907940) {
					if ($this->polygons[2336]->contains($latitude, $longitude)) {
						return 24;
					} else {
						return 403;
					}
				} else if ($longitude < 103.916794) {
					if ($this->polygons[2337]->contains($latitude, $longitude)) {
						return 24;
					} else {
						return 403;
					}
				} else {
					if ($this->polygons[2338]->contains($latitude, $longitude)) {
						return 24;
					} else {
						return 403;
					}
				}
			} else {
				return $this->call38($latitude, $longitude);
			}
		} else if ($longitude < 83.435236) {
			if ($longitude < 63.223320) {
				return 183;
			} else if ($longitude < 79.953110) {
				if ($longitude < 71.758553) {
					if ($longitude < 69.184860) {
						if ($latitude < 69.667392) {
							if ($longitude < 66.210541) {
								if ($latitude < 66.326385) {
									if ($this->polygons[2339]->contains($latitude, $longitude)) {
										return 183;
									} else {
										return 178;
									}
								} else if ($latitude < 67.696091) {
									if ($this->polygons[2340]->contains($latitude, $longitude)) {
										return 183;
									} else {
										return 178;
									}
								} else {
									if ($this->polygons[2341]->contains($latitude, $longitude)) {
										return 183;
									} else {
										return 178;
									}
								}
							} else {
								return 178;
							}
						} else if ($latitude < 72.784257) {
							return 178;
						} else {
							return 183;
						}
					} else {
						return 178;
					}
				} else if ($latitude < 69.003365) {
					return 178;
				} else if ($longitude < 76.088142) {
					return 178;
				} else if ($latitude < 72.602837) {
					if ($longitude < 78.340698) {
						return 178;
					} else if ($latitude < 71.623577) {
						if ($latitude < 70.303423) {
							if ($this->polygons[2342]->contains($latitude, $longitude)) {
								return 289;
							} else {
								return 178;
							}
						} else {
							if ($this->polygons[2343]->contains($latitude, $longitude)) {
								return 289;
							} else {
								return 178;
							}
						}
					} else {
						if ($this->polygons[2344]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 178;
						}
					}
				} else if ($longitude < 76.746025) {
					if ($latitude < 73.520027) {
						return 178;
					} else {
						return 289;
					}
				} else {
					return 289;
				}
			} else if ($latitude < 71.978767) {
				if ($latitude < 70.489197) {
					if ($longitude < 82.683777) {
						if ($latitude < 70.098442) {
							if ($latitude < 69.447754) {
								if ($latitude < 68.630057) {
									if ($latitude < 68.286874) {
										if ($this->polygons[2345]->contains($latitude, $longitude)) {
											return 289;
										} else {
											return 178;
										}
									} else {
										if ($this->polygons[2346]->contains($latitude, $longitude)) {
											return 289;
										} else {
											return 178;
										}
									}
								} else if ($longitude < 81.683594) {
									if ($this->polygons[2347]->contains($latitude, $longitude)) {
										return 289;
									} else {
										return 178;
									}
								} else {
									if ($this->polygons[2348]->contains($latitude, $longitude)) {
										return 289;
									} else {
										return 178;
									}
								}
							} else {
								return 289;
							}
						} else if ($longitude < 80.798584) {
							if ($this->polygons[2349]->contains($latitude, $longitude)) {
								return 289;
							}
							if ($this->polygons[2350]->contains($latitude, $longitude)) {
								return 289;
							} else {
								return 178;
							}
						} else {
							return 289;
						}
					} else if ($latitude < 68.798813) {
						if ($latitude < 68.466825) {
							if ($latitude < 67.026181) {
								if ($this->polygons[2351]->contains($latitude, $longitude)) {
									return 289;
								} else {
									return 178;
								}
							} else {
								if ($this->polygons[2352]->contains($latitude, $longitude)) {
									return 178;
								} else {
									return 289;
								}
							}
						} else {
							if ($this->polygons[2353]->contains($latitude, $longitude)) {
								return 178;
							} else {
								return 289;
							}
						}
					} else {
						return 289;
					}
				} else if ($longitude < 80.759369) {
					if ($latitude < 70.654465) {
						if ($this->polygons[2354]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 178;
						}
					} else if ($latitude < 71.133958) {
						if ($this->polygons[2355]->contains($latitude, $longitude)) {
							return 289;
						} else {
							return 178;
						}
					} else {
						if ($this->polygons[2356]->contains($latitude, $longitude)) {
							return 178;
						} else {
							return 289;
						}
					}
				} else {
					return 289;
				}
			} else {
				return 289;
			}
		} else {
			return 289;
		}
	}
	
	protected function call42(float $latitude, float $longitude) : ?int
	{
		if ($latitude < -10.915778) {
			if ($longitude < 152.840439) {
				if ($latitude < -21.024416) {
					if ($latitude < -38.222610) {
						if ($latitude < -40.198944) {
							return 113;
						} else if ($latitude < -39.442554) {
							if ($longitude < 146.662109) {
								if ($longitude < 144.138580) {
									return 43;
								} else {
									return 126;
								}
							} else {
								return 113;
							}
						} else {
							return 126;
						}
					} else if ($longitude < 150.145752) {
						if ($latitude < -28.555558) {
							if ($longitude < 139.718369) {
								return 67;
							} else if ($longitude < 149.977966) {
								if ($latitude < -37.546555) {
									if ($longitude < 140.969055) {
										if ($this->polygons[2357]->contains($latitude, $longitude)) {
											return 126;
										} else {
											return 67;
										}
									} else {
										return 126;
									}
								} else if ($longitude < 144.848167) {
									if ($latitude < -33.051056) {
										if ($longitude < 142.283268) {
											if ($latitude < -35.298805) {
												if ($this->polygons[2358]->contains($latitude, $longitude)) {
													return 126;
												} else {
													return 67;
												}
											} else {
												if ($this->polygons[2359]->contains($latitude, $longitude)) {
													return 67;
												}
												if ($this->polygons[2360]->contains($latitude, $longitude)) {
													return 207;
												} else {
													return 126;
												}
											}
										} else if ($latitude < -35.298805) {
											if ($this->polygons[2361]->contains($latitude, $longitude)) {
												return 207;
											} else {
												return 126;
											}
										} else if ($longitude < 143.565718) {
											if ($latitude < -34.174931) {
												if ($longitude < 142.924493) {
													if ($this->polygons[2362]->contains($latitude, $longitude)) {
														return 207;
													} else {
														return 126;
													}
												} else {
													if ($this->polygons[2363]->contains($latitude, $longitude)) {
														return 207;
													} else {
														return 126;
													}
												}
											} else {
												return 207;
											}
										} else {
											if ($this->polygons[2364]->contains($latitude, $longitude)) {
												return 126;
											} else {
												return 207;
											}
										}
									} else {
										if ($this->polygons[2365]->contains($latitude, $longitude)) {
											return 67;
										}
										if ($this->polygons[2366]->contains($latitude, $longitude)) {
											return 128;
										}
										if ($this->polygons[2367]->contains($latitude, $longitude)) {
											return 235;
										} else {
											return 207;
										}
									}
								} else if ($latitude < -33.051056) {
									if ($longitude < 147.413067) {
										if ($this->polygons[2368]->contains($latitude, $longitude)) {
											return 207;
										} else {
											return 126;
										}
									} else {
										if ($this->polygons[2369]->contains($latitude, $longitude)) {
											return 126;
										} else {
											return 207;
										}
									}
								} else {
									if ($this->polygons[2370]->contains($latitude, $longitude)) {
										return 235;
									} else {
										return 207;
									}
								}
							} else if ($latitude < -35.620555) {
								return 207;
							} else {
								if ($this->polygons[2371]->contains($latitude, $longitude)) {
									return 235;
								} else {
									return 207;
								}
							}
						} else if ($longitude < 141.004157) {
							if ($this->polygons[2372]->contains($latitude, $longitude)) {
								return 67;
							}
							if ($this->polygons[2373]->contains($latitude, $longitude)) {
								return 235;
							} else {
								return 10;
							}
						} else {
							return 235;
						}
					} else if ($latitude < -28.264166) {
						if ($latitude < -32.203251) {
							return 207;
						} else if ($longitude < 152.468948) {
							if ($this->polygons[2374]->contains($latitude, $longitude)) {
								return 235;
							} else {
								return 207;
							}
						} else if ($latitude < -32.180173) {
							return 207;
						} else {
							if ($this->polygons[2375]->contains($latitude, $longitude)) {
								return 235;
							} else {
								return 207;
							}
						}
					} else {
						return 235;
					}
				} else if ($longitude < 136.964493) {
					return 10;
				} else if ($longitude < 146.692200) {
					if ($longitude < 138.000049) {
						if ($longitude < 137.104355) {
							return 10;
						} else {
							if ($this->polygons[2376]->contains($latitude, $longitude)) {
								return 235;
							} else {
								return 10;
							}
						}
					} else {
						return 235;
					}
				} else if ($latitude < -20.460417) {
					return 235;
				} else if ($longitude < 148.871002) {
					return 235;
				} else if ($longitude < 149.111053) {
					if ($latitude < -20.333471) {
						if ($longitude < 148.937225) {
							return 235;
						} else if ($longitude < 149.064468) {
							return 213;
						} else {
							return 235;
						}
					} else if ($longitude < 148.893860) {
						if ($latitude < -20.085666) {
							return 213;
						} else {
							return 235;
						}
					} else {
						return 235;
					}
				} else {
					return 170;
				}
			} else if ($latitude < -21.188667) {
				if ($longitude < 171.450439) {
					if ($longitude < 159.045700) {
						if ($latitude < -28.160110) {
							if ($longitude < 153.483002) {
								if ($latitude < -29.370111) {
									return 207;
								} else {
									if ($this->polygons[2377]->contains($latitude, $longitude)) {
										return 235;
									} else {
										return 207;
									}
								}
							} else if ($longitude < 153.639252) {
								if ($latitude < -28.204887) {
									return 207;
								} else if ($longitude < 153.518413) {
									if ($this->polygons[2378]->contains($latitude, $longitude)) {
										return 235;
									} else {
										return 207;
									}
								} else {
									return 207;
								}
							} else {
								return 60;
							}
						} else {
							return 235;
						}
					} else if ($latitude < -44.594396) {
						return 377;
					} else if ($latitude < -28.992390) {
						if ($latitude < -41.865051) {
							return 377;
						} else if ($longitude < 159.111282) {
							return 3;
						} else {
							return 224;
						}
					} else {
						return 369;
					}
				} else {
					return 377;
				}
			} else if ($longitude < 177.058060) {
				if ($latitude < -16.968111) {
					if ($longitude < 167.830368) {
						return 369;
					} else if ($longitude < 170.234772) {
						return 232;
					} else {
						return 147;
					}
				} else if ($latitude < -12.518985) {
					return 232;
				} else if ($longitude < 154.281662) {
					return 170;
				} else if ($longitude < 168.843506) {
					return 304;
				} else {
					return 147;
				}
			} else {
				return 147;
			}
		} else if ($longitude < 151.356415) {
			if ($longitude < 144.128952) {
				if ($longitude < 140.413481) {
					return 131;
				} else if ($latitude < -9.333750) {
					return 235;
				} else if ($longitude < 142.474640) {
					if ($latitude < -9.182138) {
						if ($longitude < 142.071442) {
							if ($longitude < 141.950039) {
								return 170;
							} else {
								return 235;
							}
						} else if ($longitude < 142.251190) {
							return 235;
						} else if ($latitude < -9.260387) {
							return 235;
						} else {
							if ($this->polygons[2379]->contains($latitude, $longitude)) {
								return 235;
							} else {
								return 170;
							}
						}
					} else if ($longitude < 141.021805) {
						if ($longitude < 140.487747) {
							return 131;
						} else {
							if ($this->polygons[2380]->contains($latitude, $longitude)) {
								return 170;
							} else {
								return 131;
							}
						}
					} else {
						return 170;
					}
				} else {
					return 170;
				}
			} else {
				return 170;
			}
		} else if ($longitude < 158.416245) {
			if ($longitude < 157.126251) {
				if ($longitude < 154.725937) {
					return 170;
				} else if ($latitude < -6.962555) {
					return 304;
				} else if ($longitude < 155.963562) {
					return 170;
				} else if ($latitude < -6.589611) {
					return 304;
				} else {
					return 170;
				}
			} else {
				return 304;
			}
		} else if ($latitude < -8.854750) {
			if ($longitude < 167.145645) {
				return 304;
			} else if ($longitude < 167.233505) {
				return 304;
			} else {
				return 65;
			}
		} else if ($longitude < 173.587646) {
			if ($latitude < -5.449806) {
				return 304;
			} else if ($longitude < 166.945282) {
				if ($latitude < -2.550833) {
					return 170;
				} else {
					return 398;
				}
			} else {
				return 148;
			}
		} else if ($latitude < -5.641972) {
			return 65;
		} else {
			return 148;
		}
	}
	
	protected function call43(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 113.448914) {
			if ($longitude < 108.187553) {
				if ($longitude < 107.273552) {
					if ($latitude < 20.199528) {
						if ($latitude < 18.710368) {
							if ($latitude < 12.303858) {
								if ($this->polygons[2381]->contains($latitude, $longitude)) {
									return 24;
								} else {
									return 251;
								}
							} else if ($latitude < 16.095304) {
								if ($latitude < 14.199581) {
									if ($this->polygons[2382]->contains($latitude, $longitude)) {
										return 265;
									} else {
										return 251;
									}
								} else if ($longitude < 106.189095) {
									if ($latitude < 15.147442) {
										if ($this->polygons[2383]->contains($latitude, $longitude)) {
											return 251;
										}
										if ($this->polygons[2384]->contains($latitude, $longitude)) {
											return 251;
										}
										if ($this->polygons[2385]->contains($latitude, $longitude)) {
											return 270;
										} else {
											return 265;
										}
									} else {
										if ($this->polygons[2386]->contains($latitude, $longitude)) {
											return 270;
										} else {
											return 265;
										}
									}
								} else {
									if ($this->polygons[2387]->contains($latitude, $longitude)) {
										return 24;
									}
									if ($this->polygons[2388]->contains($latitude, $longitude)) {
										return 251;
									} else {
										return 265;
									}
								}
							} else if ($latitude < 17.402836) {
								if ($this->polygons[2389]->contains($latitude, $longitude)) {
									return 265;
								} else {
									return 24;
								}
							} else {
								if ($this->polygons[2390]->contains($latitude, $longitude)) {
									return 265;
								} else {
									return 24;
								}
							}
						} else {
							return 24;
						}
					} else if ($latitude < 21.023890) {
						return 24;
					} else if ($latitude < 23.203362) {
						if ($latitude < 22.113626) {
							if ($this->polygons[2391]->contains($latitude, $longitude)) {
								return 403;
							} else {
								return 24;
							}
						} else {
							if ($this->polygons[2392]->contains($latitude, $longitude)) {
								return 403;
							} else {
								return 24;
							}
						}
					} else {
						if ($this->polygons[2393]->contains($latitude, $longitude)) {
							return 24;
						} else {
							return 403;
						}
					}
				} else if ($latitude < 20.977722) {
					if ($latitude < 16.122683) {
						if ($latitude < 15.680320) {
							if ($latitude < 13.628118) {
								if ($this->polygons[2394]->contains($latitude, $longitude)) {
									return 251;
								} else {
									return 24;
								}
							} else if ($latitude < 14.654219) {
								if ($this->polygons[2395]->contains($latitude, $longitude)) {
									return 24;
								}
								if ($this->polygons[2396]->contains($latitude, $longitude)) {
									return 265;
								} else {
									return 251;
								}
							} else {
								if ($this->polygons[2397]->contains($latitude, $longitude)) {
									return 251;
								}
								if ($this->polygons[2398]->contains($latitude, $longitude)) {
									return 265;
								} else {
									return 24;
								}
							}
						} else {
							if ($this->polygons[2399]->contains($latitude, $longitude)) {
								return 265;
							} else {
								return 24;
							}
						}
					} else {
						return 24;
					}
				} else if ($latitude < 21.495306) {
					return 24;
				} else if ($longitude < 108.035889) {
					if ($this->polygons[2400]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 24;
					}
				} else {
					return 403;
				}
			} else if ($latitude < 21.252361) {
				if ($latitude < 20.156473) {
					if ($latitude < 16.223473) {
						return 24;
					} else {
						return 403;
					}
				} else {
					return 406;
				}
			} else if ($longitude < 113.043556) {
				if ($longitude < 112.198914) {
					if ($longitude < 109.072281) {
						return 403;
					} else if ($latitude < 22.694863) {
						if ($longitude < 111.681794) {
							if ($longitude < 111.101901) {
								if ($longitude < 110.087091) {
									if ($this->polygons[2401]->contains($latitude, $longitude)) {
										return 406;
									} else {
										return 403;
									}
								} else {
									if ($this->polygons[2402]->contains($latitude, $longitude)) {
										return 403;
									} else {
										return 406;
									}
								}
							} else if ($latitude < 21.392139) {
								return 406;
							} else {
								if ($this->polygons[2403]->contains($latitude, $longitude)) {
									return 406;
								} else {
									return 403;
								}
							}
						} else {
							return 403;
						}
					} else if ($latitude < 23.139450) {
						if ($this->polygons[2404]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 403;
						}
					} else if ($longitude < 110.635597) {
						return 403;
					} else if ($latitude < 24.261142) {
						if ($this->polygons[2405]->contains($latitude, $longitude)) {
							return 291;
						}
						if ($this->polygons[2406]->contains($latitude, $longitude)) {
							return 291;
						}
						if ($this->polygons[2407]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 403;
						}
					} else {
						if ($this->polygons[2408]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 291;
						}
					}
				} else if ($latitude < 21.980417) {
					return 403;
				} else if ($latitude < 23.123449) {
					if ($this->polygons[2409]->contains($latitude, $longitude)) {
						return 291;
					}
					if ($this->polygons[2410]->contains($latitude, $longitude)) {
						return 291;
					} else {
						return 403;
					}
				} else if ($latitude < 23.211371) {
					if ($this->polygons[2411]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 291;
					}
				} else if ($latitude < 23.385080) {
					if ($this->polygons[2412]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 291;
					}
				} else {
					if ($this->polygons[2413]->contains($latitude, $longitude)) {
						return 403;
					} else {
						return 291;
					}
				}
			} else {
				return 291;
			}
		} else if ($latitude < 20.697500) {
			return 279;
		} else if ($longitude < 114.403358) {
			if ($longitude < 113.837753) {
				if ($latitude < 22.222334) {
					if ($longitude < 113.591026) {
						if ($longitude < 113.526558) {
							return 291;
						} else if ($latitude < 22.137777) {
							if ($this->polygons[2414]->contains($latitude, $longitude)) {
								return 291;
							} else {
								return 132;
							}
						} else if ($latitude < 22.163389) {
							if ($longitude < 113.541180) {
								return 132;
							} else {
								return 291;
							}
						} else {
							if ($this->polygons[2415]->contains($latitude, $longitude)) {
								return 291;
							} else {
								return 132;
							}
						}
					} else {
						return 291;
					}
				} else {
					return 291;
				}
			} else if ($latitude < 22.253416) {
				if ($latitude < 22.129694) {
					return 291;
				} else {
					return 15;
				}
			} else if ($latitude < 22.374916) {
				return 15;
			} else if ($latitude < 22.481138) {
				if ($longitude < 113.913659) {
					if ($latitude < 22.442740) {
						return 15;
					} else {
						return 291;
					}
				} else {
					return 15;
				}
			} else {
				if ($this->polygons[2416]->contains($latitude, $longitude)) {
					return 291;
				} else {
					return 15;
				}
			}
		} else if ($longitude < 119.324997) {
			if ($longitude < 117.531754) {
				if ($latitude < 20.709833) {
					return 125;
				} else {
					return 291;
				}
			} else if ($longitude < 118.197639) {
				return 291;
			} else if ($latitude < 24.531528) {
				if ($longitude < 118.472969) {
					return 125;
				} else if ($latitude < 23.962000) {
					return 125;
				} else {
					return 291;
				}
			} else {
				return 291;
			}
		} else if ($latitude < 24.179411) {
			return 125;
		} else {
			return 291;
		}
	}
	
	protected function call44(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 120.827698) {
			if ($latitude < 43.386189) {
				if ($longitude < 114.824286) {
					if ($longitude < 109.964462) {
						if ($this->polygons[2417]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 123;
						}
					} else if ($longitude < 112.394374) {
						if ($this->polygons[2418]->contains($latitude, $longitude)) {
							return 123;
						}
						if ($this->polygons[2419]->contains($latitude, $longitude)) {
							return 291;
						}
						if ($this->polygons[2420]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 403;
						}
					} else if ($latitude < 41.384137) {
						if ($this->polygons[2421]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 291;
						}
					} else {
						if ($this->polygons[2422]->contains($latitude, $longitude)) {
							return 403;
						} else {
							return 291;
						}
					}
				} else {
					return 291;
				}
			} else if ($latitude < 53.269103) {
				if ($longitude < 112.966167) {
					if ($latitude < 48.327646) {
						if ($longitude < 109.035402) {
							return 123;
						} else if ($latitude < 45.856918) {
							if ($this->polygons[2423]->contains($latitude, $longitude)) {
								return 123;
							}
							if ($this->polygons[2424]->contains($latitude, $longitude)) {
								return 203;
							} else {
								return 291;
							}
						} else {
							if ($this->polygons[2425]->contains($latitude, $longitude)) {
								return 203;
							} else {
								return 123;
							}
						}
					} else if ($longitude < 109.035402) {
						if ($latitude < 50.798375) {
							if ($longitude < 107.070020) {
								if ($this->polygons[2426]->contains($latitude, $longitude)) {
									return 123;
								} else {
									return 144;
								}
							} else if ($latitude < 49.563011) {
								if ($this->polygons[2427]->contains($latitude, $longitude)) {
									return 141;
								} else {
									return 123;
								}
							} else {
								if ($this->polygons[2428]->contains($latitude, $longitude)) {
									return 123;
								}
								if ($this->polygons[2429]->contains($latitude, $longitude)) {
									return 144;
								} else {
									return 141;
								}
							}
						} else {
							if ($this->polygons[2430]->contains($latitude, $longitude)) {
								return 141;
							} else {
								return 144;
							}
						}
					} else if ($latitude < 50.798375) {
						if ($this->polygons[2431]->contains($latitude, $longitude)) {
							return 141;
						}
						if ($this->polygons[2432]->contains($latitude, $longitude)) {
							return 203;
						} else {
							return 123;
						}
					} else {
						if ($this->polygons[2433]->contains($latitude, $longitude)) {
							return 144;
						} else {
							return 141;
						}
					}
				} else if ($latitude < 48.327646) {
					if ($longitude < 116.896933) {
						if ($this->polygons[2434]->contains($latitude, $longitude)) {
							return 203;
						} else {
							return 291;
						}
					} else if ($latitude < 45.856918) {
						return 291;
					} else if ($longitude < 118.862315) {
						if ($this->polygons[2435]->contains($latitude, $longitude)) {
							return 203;
						} else {
							return 291;
						}
					} else {
						if ($this->polygons[2436]->contains($latitude, $longitude)) {
							return 203;
						} else {
							return 291;
						}
					}
				} else if ($longitude < 116.896933) {
					if ($latitude < 50.798375) {
						if ($this->polygons[2437]->contains($latitude, $longitude)) {
							return 141;
						}
						if ($this->polygons[2438]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 203;
						}
					} else {
						if ($this->polygons[2439]->contains($latitude, $longitude)) {
							return 144;
						} else {
							return 141;
						}
					}
				} else if ($latitude < 50.798375) {
					if ($this->polygons[2440]->contains($latitude, $longitude)) {
						return 141;
					} else {
						return 291;
					}
				} else if ($longitude < 118.862315) {
					return 141;
				} else if ($latitude < 52.033739) {
					if ($this->polygons[2441]->contains($latitude, $longitude)) {
						return 291;
					} else {
						return 141;
					}
				} else {
					if ($this->polygons[2442]->contains($latitude, $longitude)) {
						return 291;
					} else {
						return 141;
					}
				}
			} else if ($longitude < 105.495247) {
				if ($latitude < 59.469437) {
					if ($this->polygons[2443]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 144;
					}
				} else {
					if ($this->polygons[2444]->contains($latitude, $longitude)) {
						return 289;
					} else {
						return 144;
					}
				}
			} else if ($longitude < 113.161472) {
				if ($longitude < 109.328360) {
					if ($this->polygons[2445]->contains($latitude, $longitude)) {
						return 141;
					}
					if ($this->polygons[2446]->contains($latitude, $longitude)) {
						return 141;
					} else {
						return 144;
					}
				} else if ($latitude < 56.783855) {
					return 144;
				} else if ($longitude < 111.244916) {
					if ($this->polygons[2447]->contains($latitude, $longitude)) {
						return 141;
					} else {
						return 144;
					}
				} else {
					if ($this->polygons[2448]->contains($latitude, $longitude)) {
						return 144;
					} else {
						return 141;
					}
				}
			} else if ($longitude < 116.994585) {
				if ($latitude < 56.783855) {
					if ($longitude < 115.078029) {
						if ($this->polygons[2449]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 144;
						}
					} else if ($latitude < 55.026479) {
						if ($this->polygons[2450]->contains($latitude, $longitude)) {
							return 144;
						} else {
							return 141;
						}
					} else {
						if ($this->polygons[2451]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 144;
						}
					}
				} else {
					if ($this->polygons[2452]->contains($latitude, $longitude)) {
						return 144;
					} else {
						return 141;
					}
				}
			} else if ($latitude < 56.783855) {
				if ($this->polygons[2453]->contains($latitude, $longitude)) {
					return 144;
				} else {
					return 141;
				}
			} else if ($longitude < 118.911141) {
				if ($latitude < 58.541231) {
					if ($longitude < 117.952863) {
						if ($this->polygons[2454]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 144;
						}
					} else {
						if ($this->polygons[2455]->contains($latitude, $longitude)) {
							return 144;
						} else {
							return 141;
						}
					}
				} else {
					if ($this->polygons[2456]->contains($latitude, $longitude)) {
						return 144;
					} else {
						return 141;
					}
				}
			} else {
				if ($this->polygons[2457]->contains($latitude, $longitude)) {
					return 144;
				} else {
					return 141;
				}
			}
		} else if ($latitude < 40.943722) {
			return 291;
		} else if ($latitude < 48.188303) {
			if ($latitude < 44.566012) {
				if ($this->polygons[2458]->contains($latitude, $longitude)) {
					return 42;
				} else {
					return 291;
				}
			} else if ($latitude < 46.377158) {
				if ($this->polygons[2459]->contains($latitude, $longitude)) {
					return 291;
				} else {
					return 42;
				}
			} else {
				if ($this->polygons[2460]->contains($latitude, $longitude)) {
					return 42;
				} else {
					return 291;
				}
			}
		} else if ($latitude < 52.939128) {
			if ($this->polygons[2461]->contains($latitude, $longitude)) {
				return 42;
			} else {
				return 291;
			}
		} else {
			if ($this->polygons[2462]->contains($latitude, $longitude)) {
				return 291;
			} else {
				return 141;
			}
		}
	}
	
	protected function call45(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 60.298607) {
			if ($latitude < 38.331139) {
				if ($longitude < 126.114944) {
					if ($longitude < 122.704277) {
						if ($longitude < 110.802727) {
							if ($latitude < 37.663533) {
								if ($this->polygons[2463]->contains($latitude, $longitude)) {
									return 291;
								} else {
									return 403;
								}
							} else {
								if ($this->polygons[2464]->contains($latitude, $longitude)) {
									return 291;
								} else {
									return 403;
								}
							}
						} else {
							return 291;
						}
					} else if ($latitude < 37.284248) {
						return 11;
					} else if ($longitude < 125.197052) {
						if ($longitude < 124.768219) {
							if ($latitude < 37.982666) {
								return 11;
							} else {
								return 151;
							}
						} else {
							return 151;
						}
					} else if ($latitude < 37.678055) {
						if ($longitude < 125.510507) {
							return 11;
						} else {
							return 151;
						}
					} else {
						return 151;
					}
				} else if ($latitude < 37.681999) {
					return 11;
				} else if ($longitude < 126.666692) {
					if ($longitude < 126.167000) {
						return 151;
					} else if ($latitude < 37.749195) {
						return 11;
					} else if ($longitude < 126.336586) {
						if ($latitude < 37.823339) {
							return 11;
						} else {
							return 151;
						}
					} else if ($longitude < 126.516444) {
						if ($this->polygons[2465]->contains($latitude, $longitude)) {
							return 11;
						} else {
							return 151;
						}
					} else {
						if ($this->polygons[2466]->contains($latitude, $longitude)) {
							return 11;
						} else {
							return 151;
						}
					}
				} else if ($longitude < 127.382829) {
					if ($this->polygons[2467]->contains($latitude, $longitude)) {
						return 151;
					} else {
						return 11;
					}
				} else {
					if ($this->polygons[2468]->contains($latitude, $longitude)) {
						return 151;
					} else {
						return 11;
					}
				}
			} else if ($latitude < 39.382084) {
				if ($longitude < 121.710999) {
					if ($longitude < 111.212129) {
						if ($latitude < 39.289394) {
							if ($this->polygons[2469]->contains($latitude, $longitude)) {
								return 291;
							} else {
								return 403;
							}
						} else {
							if ($this->polygons[2470]->contains($latitude, $longitude)) {
								return 291;
							} else {
								return 403;
							}
						}
					} else {
						return 291;
					}
				} else if ($longitude < 123.197807) {
					return 291;
				} else {
					return 151;
				}
			} else if ($longitude < 123.756470) {
				return $this->call44($latitude, $longitude);
			} else if ($latitude < 39.723915) {
				return 151;
			} else if ($latitude < 39.931973) {
				if ($longitude < 124.255466) {
					if ($this->polygons[2471]->contains($latitude, $longitude)) {
						return 151;
					} else {
						return 291;
					}
				} else {
					return 151;
				}
			} else if ($latitude < 43.487705) {
				if ($longitude < 123.811134) {
					if ($this->polygons[2472]->contains($latitude, $longitude)) {
						return 42;
					} else {
						return 291;
					}
				} else if ($longitude < 125.610680) {
					if ($latitude < 41.709839) {
						if ($this->polygons[2473]->contains($latitude, $longitude)) {
							return 42;
						}
						if ($this->polygons[2474]->contains($latitude, $longitude)) {
							return 42;
						}
						if ($this->polygons[2475]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 151;
						}
					} else {
						if ($this->polygons[2476]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 42;
						}
					}
				} else if ($latitude < 41.709839) {
					if ($longitude < 126.510452) {
						if ($this->polygons[2477]->contains($latitude, $longitude)) {
							return 151;
						}
						if ($this->polygons[2478]->contains($latitude, $longitude)) {
							return 151;
						}
						if ($this->polygons[2479]->contains($latitude, $longitude)) {
							return 291;
						}
						if ($this->polygons[2480]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 42;
						}
					} else {
						if ($this->polygons[2481]->contains($latitude, $longitude)) {
							return 151;
						} else {
							return 42;
						}
					}
				} else {
					if ($this->polygons[2482]->contains($latitude, $longitude)) {
						return 151;
					}
					if ($this->polygons[2483]->contains($latitude, $longitude)) {
						return 151;
					} else {
						return 42;
					}
				}
			} else if ($latitude < 51.893156) {
				if ($latitude < 47.690430) {
					return 42;
				} else if ($latitude < 49.791793) {
					if ($this->polygons[2484]->contains($latitude, $longitude)) {
						return 291;
					} else {
						return 42;
					}
				} else if ($longitude < 125.583347) {
					if ($this->polygons[2485]->contains($latitude, $longitude)) {
						return 291;
					} else {
						return 42;
					}
				} else {
					if ($this->polygons[2486]->contains($latitude, $longitude)) {
						return 141;
					}
					if ($this->polygons[2487]->contains($latitude, $longitude)) {
						return 291;
					} else {
						return 42;
					}
				}
			} else if ($latitude < 56.095881) {
				if ($latitude < 53.994519) {
					if ($longitude < 125.583347) {
						if ($this->polygons[2488]->contains($latitude, $longitude)) {
							return 141;
						}
						if ($this->polygons[2489]->contains($latitude, $longitude)) {
							return 291;
						} else {
							return 42;
						}
					} else {
						if ($this->polygons[2490]->contains($latitude, $longitude)) {
							return 42;
						} else {
							return 141;
						}
					}
				} else {
					return 141;
				}
			} else {
				return 141;
			}
		} else if ($longitude < 118.797836) {
			if ($latitude < 75.927002) {
				if ($latitude < 73.209663) {
					if ($latitude < 72.847191) {
						if ($longitude < 112.725800) {
							if ($latitude < 66.572899) {
								if ($longitude < 108.915218) {
									if ($latitude < 63.435753) {
										if ($this->polygons[2491]->contains($latitude, $longitude)) {
											return 289;
										} else {
											return 144;
										}
									} else if ($longitude < 107.009928) {
										if ($latitude < 65.004326) {
											if ($this->polygons[2492]->contains($latitude, $longitude)) {
												return 141;
											}
											if ($this->polygons[2493]->contains($latitude, $longitude)) {
												return 144;
											} else {
												return 289;
											}
										} else {
											if ($this->polygons[2494]->contains($latitude, $longitude)) {
												return 289;
											} else {
												return 141;
											}
										}
									} else if ($latitude < 65.004326) {
										if ($longitude < 107.962573) {
											if ($this->polygons[2495]->contains($latitude, $longitude)) {
												return 141;
											}
											if ($this->polygons[2496]->contains($latitude, $longitude)) {
												return 144;
											} else {
												return 289;
											}
										} else {
											if ($this->polygons[2497]->contains($latitude, $longitude)) {
												return 141;
											}
											if ($this->polygons[2498]->contains($latitude, $longitude)) {
												return 289;
											} else {
												return 144;
											}
										}
									} else {
										return 141;
									}
								} else if ($latitude < 63.435753) {
									if ($longitude < 110.820509) {
										if ($latitude < 61.867180) {
											if ($this->polygons[2499]->contains($latitude, $longitude)) {
												return 144;
											} else {
												return 141;
											}
										} else {
											if ($this->polygons[2500]->contains($latitude, $longitude)) {
												return 144;
											} else {
												return 141;
											}
										}
									} else {
										return 141;
									}
								} else {
									if ($this->polygons[2501]->contains($latitude, $longitude)) {
										return 144;
									} else {
										return 141;
									}
								}
							} else if ($longitude < 108.915218) {
								if ($this->polygons[2502]->contains($latitude, $longitude)) {
									return 141;
								} else {
									return 289;
								}
							} else if ($latitude < 69.710045) {
								return 141;
							} else if ($longitude < 110.820509) {
								if ($this->polygons[2503]->contains($latitude, $longitude)) {
									return 289;
								} else {
									return 141;
								}
							} else {
								if ($this->polygons[2504]->contains($latitude, $longitude)) {
									return 289;
								} else {
									return 141;
								}
							}
						} else {
							if ($this->polygons[2505]->contains($latitude, $longitude)) {
								return 144;
							} else {
								return 141;
							}
						}
					} else if ($longitude < 108.341057) {
						return 289;
					} else {
						if ($this->polygons[2506]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 289;
						}
					}
				} else if ($longitude < 113.919746) {
					if ($longitude < 109.343498) {
						return 289;
					} else if ($latitude < 74.049721) {
						if ($longitude < 111.589165) {
							if ($this->polygons[2507]->contains($latitude, $longitude)) {
								return 141;
							} else {
								return 289;
							}
						} else {
							return 141;
						}
					} else if ($longitude < 111.209999) {
						if ($this->polygons[2508]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 289;
						}
					} else if ($latitude < 74.551941) {
						return 141;
					} else {
						if ($this->polygons[2509]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 289;
						}
					}
				} else {
					return 141;
				}
			} else {
				return 289;
			}
		} else {
			return 141;
		}
	}
	
	protected function call46(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 54.555332) {
			if ($longitude < 141.546310) {
				if ($longitude < 134.959961) {
					if ($longitude < 132.286469) {
						if ($latitude < 52.739679) {
							if ($this->polygons[2510]->contains($latitude, $longitude)) {
								return 37;
							} else {
								return 141;
							}
						} else {
							if ($this->polygons[2511]->contains($latitude, $longitude)) {
								return 37;
							} else {
								return 141;
							}
						}
					} else if ($latitude < 52.739679) {
						if ($this->polygons[2512]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 37;
						}
					} else if ($longitude < 133.623215) {
						if ($this->polygons[2513]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 37;
						}
					} else {
						if ($this->polygons[2514]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 37;
						}
					}
				} else {
					return 37;
				}
			} else {
				return 36;
			}
		} else if ($latitude < 55.194805) {
			if ($longitude < 132.413686) {
				if ($this->polygons[2515]->contains($latitude, $longitude)) {
					return 37;
				} else {
					return 141;
				}
			} else {
				return 37;
			}
		} else if ($latitude < 71.260391) {
			if ($longitude < 139.044365) {
				if ($latitude < 63.227598) {
					if ($longitude < 134.328671) {
						if ($latitude < 59.211202) {
							if ($longitude < 131.970823) {
								if ($latitude < 57.203003) {
									if ($longitude < 130.791900) {
										return 141;
									} else if ($latitude < 56.198904) {
										if ($this->polygons[2516]->contains($latitude, $longitude)) {
											return 37;
										} else {
											return 141;
										}
									} else {
										if ($this->polygons[2517]->contains($latitude, $longitude)) {
											return 141;
										} else {
											return 37;
										}
									}
								} else {
									if ($this->polygons[2518]->contains($latitude, $longitude)) {
										return 37;
									}
									if ($this->polygons[2519]->contains($latitude, $longitude)) {
										return 37;
									}
									if ($this->polygons[2520]->contains($latitude, $longitude)) {
										return 37;
									}
									if ($this->polygons[2521]->contains($latitude, $longitude)) {
										return 104;
									} else {
										return 141;
									}
								}
							} else if ($latitude < 57.203003) {
								if ($this->polygons[2522]->contains($latitude, $longitude)) {
									return 141;
								} else {
									return 37;
								}
							} else if ($longitude < 133.149747) {
								if ($this->polygons[2523]->contains($latitude, $longitude)) {
									return 104;
								}
								if ($this->polygons[2524]->contains($latitude, $longitude)) {
									return 141;
								}
								if ($this->polygons[2525]->contains($latitude, $longitude)) {
									return 141;
								}
								if ($this->polygons[2526]->contains($latitude, $longitude)) {
									return 141;
								} else {
									return 37;
								}
							} else {
								if ($this->polygons[2527]->contains($latitude, $longitude)) {
									return 104;
								}
								if ($this->polygons[2528]->contains($latitude, $longitude)) {
									return 104;
								} else {
									return 37;
								}
							}
						} else {
							if ($this->polygons[2529]->contains($latitude, $longitude)) {
								return 37;
							}
							if ($this->polygons[2530]->contains($latitude, $longitude)) {
								return 141;
							} else {
								return 104;
							}
						}
					} else if ($latitude < 59.211202) {
						if ($this->polygons[2531]->contains($latitude, $longitude)) {
							return 104;
						}
						if ($this->polygons[2532]->contains($latitude, $longitude)) {
							return 104;
						} else {
							return 37;
						}
					} else if ($longitude < 136.686518) {
						if ($this->polygons[2533]->contains($latitude, $longitude)) {
							return 37;
						}
						if ($this->polygons[2534]->contains($latitude, $longitude)) {
							return 37;
						}
						if ($this->polygons[2535]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 104;
						}
					} else if ($latitude < 61.219400) {
						if ($longitude < 137.865441) {
							if ($this->polygons[2536]->contains($latitude, $longitude)) {
								return 104;
							} else {
								return 37;
							}
						} else {
							if ($this->polygons[2537]->contains($latitude, $longitude)) {
								return 104;
							} else {
								return 37;
							}
						}
					} else {
						if ($this->polygons[2538]->contains($latitude, $longitude)) {
							return 37;
						}
						if ($this->polygons[2539]->contains($latitude, $longitude)) {
							return 37;
						} else {
							return 104;
						}
					}
				} else if ($longitude < 134.328671) {
					if ($latitude < 67.243995) {
						if ($longitude < 131.970823) {
							if ($this->polygons[2540]->contains($latitude, $longitude)) {
								return 37;
							} else {
								return 141;
							}
						} else {
							if ($this->polygons[2541]->contains($latitude, $longitude)) {
								return 37;
							}
							if ($this->polygons[2542]->contains($latitude, $longitude)) {
								return 141;
							}
							if ($this->polygons[2543]->contains($latitude, $longitude)) {
								return 141;
							} else {
								return 104;
							}
						}
					} else {
						if ($this->polygons[2544]->contains($latitude, $longitude)) {
							return 37;
						} else {
							return 141;
						}
					}
				} else {
					if ($this->polygons[2545]->contains($latitude, $longitude)) {
						return 46;
					}
					if ($this->polygons[2546]->contains($latitude, $longitude)) {
						return 104;
					} else {
						return 37;
					}
				}
			} else if ($latitude < 64.217725) {
				if ($longitude < 143.760059) {
					if ($latitude < 60.696391) {
						return 37;
					} else if ($longitude < 141.402212) {
						if ($latitude < 62.457058) {
							if ($this->polygons[2547]->contains($latitude, $longitude)) {
								return 104;
							}
							if ($this->polygons[2548]->contains($latitude, $longitude)) {
								return 104;
							}
							if ($this->polygons[2549]->contains($latitude, $longitude)) {
								return 140;
							}
							if ($this->polygons[2550]->contains($latitude, $longitude)) {
								return 140;
							} else {
								return 37;
							}
						} else {
							if ($this->polygons[2551]->contains($latitude, $longitude)) {
								return 37;
							}
							if ($this->polygons[2552]->contains($latitude, $longitude)) {
								return 104;
							} else {
								return 140;
							}
						}
					} else {
						if ($this->polygons[2553]->contains($latitude, $longitude)) {
							return 140;
						} else {
							return 37;
						}
					}
				} else if ($latitude < 61.679001) {
					if ($longitude < 146.117907) {
						if ($this->polygons[2554]->contains($latitude, $longitude)) {
							return 46;
						} else {
							return 37;
						}
					} else if ($latitude < 60.425264) {
						if ($this->polygons[2555]->contains($latitude, $longitude)) {
							return 37;
						} else {
							return 46;
						}
					} else {
						if ($this->polygons[2556]->contains($latitude, $longitude)) {
							return 37;
						} else {
							return 46;
						}
					}
				} else if ($longitude < 146.117907) {
					if ($latitude < 62.948363) {
						if ($longitude < 144.938983) {
							if ($this->polygons[2557]->contains($latitude, $longitude)) {
								return 46;
							}
							if ($this->polygons[2558]->contains($latitude, $longitude)) {
								return 140;
							} else {
								return 37;
							}
						} else {
							if ($this->polygons[2559]->contains($latitude, $longitude)) {
								return 37;
							}
							if ($this->polygons[2560]->contains($latitude, $longitude)) {
								return 140;
							} else {
								return 46;
							}
						}
					} else {
						if ($this->polygons[2561]->contains($latitude, $longitude)) {
							return 46;
						} else {
							return 140;
						}
					}
				} else {
					if ($this->polygons[2562]->contains($latitude, $longitude)) {
						return 37;
					}
					if ($this->polygons[2563]->contains($latitude, $longitude)) {
						return 140;
					} else {
						return 46;
					}
				}
			} else if ($longitude < 143.760059) {
				if ($latitude < 67.739058) {
					if ($longitude < 141.402212) {
						if ($latitude < 65.978391) {
							if ($this->polygons[2564]->contains($latitude, $longitude)) {
								return 37;
							}
							if ($this->polygons[2565]->contains($latitude, $longitude)) {
								return 46;
							}
							if ($this->polygons[2566]->contains($latitude, $longitude)) {
								return 140;
							} else {
								return 104;
							}
						} else {
							if ($this->polygons[2567]->contains($latitude, $longitude)) {
								return 46;
							} else {
								return 37;
							}
						}
					} else {
						if ($this->polygons[2568]->contains($latitude, $longitude)) {
							return 140;
						} else {
							return 46;
						}
					}
				} else {
					if ($this->polygons[2569]->contains($latitude, $longitude)) {
						return 46;
					} else {
						return 37;
					}
				}
			} else {
				if ($this->polygons[2570]->contains($latitude, $longitude)) {
					return 140;
				} else {
					return 46;
				}
			}
		} else if ($longitude < 138.020813) {
			return 37;
		} else {
			if ($this->polygons[2571]->contains($latitude, $longitude)) {
				return 46;
			} else {
				return 37;
			}
		}
	}
	
	protected function call47(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 50.924026) {
			if ($latitude < 35.537945) {
				if ($longitude < 128.948471) {
					return 11;
				} else if ($longitude < 129.456300) {
					if ($latitude < 34.702641) {
						return 280;
					} else {
						return 11;
					}
				} else {
					return 280;
				}
			} else if ($longitude < 140.967285) {
				if ($latitude < 39.235085) {
					if ($longitude < 130.923218) {
						if ($longitude < 128.363785) {
							if ($latitude < 38.612446) {
								if ($this->polygons[2572]->contains($latitude, $longitude)) {
									return 151;
								} else {
									return 11;
								}
							} else {
								return 151;
							}
						} else {
							return 11;
						}
					} else {
						return 280;
					}
				} else if ($longitude < 131.517105) {
					if ($latitude < 40.005638) {
						return 151;
					} else if ($latitude < 45.016474) {
						if ($longitude < 130.936279) {
							if ($longitude < 130.674866) {
								if ($latitude < 42.511056) {
									if ($longitude < 129.042545) {
										if ($this->polygons[2573]->contains($latitude, $longitude)) {
											return 42;
										} else {
											return 151;
										}
									} else {
										if ($this->polygons[2574]->contains($latitude, $longitude)) {
											return 37;
										}
										if ($this->polygons[2575]->contains($latitude, $longitude)) {
											return 42;
										}
										if ($this->polygons[2576]->contains($latitude, $longitude)) {
											return 42;
										} else {
											return 151;
										}
									}
								} else {
									if ($this->polygons[2577]->contains($latitude, $longitude)) {
										return 37;
									}
									if ($this->polygons[2578]->contains($latitude, $longitude)) {
										return 151;
									} else {
										return 42;
									}
								}
							} else if ($latitude < 42.642555) {
								return 37;
							} else {
								if ($this->polygons[2579]->contains($latitude, $longitude)) {
									return 42;
								} else {
									return 37;
								}
							}
						} else if ($latitude < 42.833363) {
							return 37;
						} else {
							if ($this->polygons[2580]->contains($latitude, $longitude)) {
								return 42;
							} else {
								return 37;
							}
						}
					} else if ($latitude < 47.970250) {
						if ($this->polygons[2581]->contains($latitude, $longitude)) {
							return 37;
						} else {
							return 42;
						}
					} else if ($longitude < 129.463665) {
						if ($this->polygons[2582]->contains($latitude, $longitude)) {
							return 42;
						} else {
							return 141;
						}
					} else if ($latitude < 49.447138) {
						if ($longitude < 130.490385) {
							if ($this->polygons[2583]->contains($latitude, $longitude)) {
								return 141;
							} else {
								return 42;
							}
						} else {
							if ($this->polygons[2584]->contains($latitude, $longitude)) {
								return 42;
							}
							if ($this->polygons[2585]->contains($latitude, $longitude)) {
								return 141;
							} else {
								return 37;
							}
						}
					} else {
						if ($this->polygons[2586]->contains($latitude, $longitude)) {
							return 141;
						} else {
							return 37;
						}
					}
				} else if ($latitude < 42.342888) {
					return 280;
				} else if ($longitude < 131.939438) {
					if ($latitude < 43.206934) {
						return 37;
					} else if ($latitude < 45.336029) {
						if ($longitude < 131.891479) {
							if ($this->polygons[2587]->contains($latitude, $longitude)) {
								return 42;
							} else {
								return 37;
							}
						} else {
							if ($this->polygons[2588]->contains($latitude, $longitude)) {
								return 42;
							} else {
								return 37;
							}
						}
					} else {
						if ($this->polygons[2589]->contains($latitude, $longitude)) {
							return 42;
						} else {
							return 37;
						}
					}
				} else if ($longitude < 134.773911) {
					if ($latitude < 42.900028) {
						return 37;
					} else if ($latitude < 46.912027) {
						if ($this->polygons[2590]->contains($latitude, $longitude)) {
							return 42;
						} else {
							return 37;
						}
					} else if ($latitude < 48.918027) {
						if ($longitude < 133.356674) {
							if ($this->polygons[2591]->contains($latitude, $longitude)) {
								return 42;
							} else {
								return 37;
							}
						} else {
							if ($this->polygons[2592]->contains($latitude, $longitude)) {
								return 42;
							} else {
								return 37;
							}
						}
					} else {
						return 37;
					}
				} else {
					if ($this->polygons[2593]->contains($latitude, $longitude)) {
						return 280;
					} else {
						return 37;
					}
				}
			} else if ($longitude < 146.209671) {
				if ($latitude < 43.290001) {
					return 280;
				} else if ($longitude < 145.393784) {
					if ($latitude < 45.523140) {
						return 280;
					} else {
						return 36;
					}
				} else if ($longitude < 145.820892) {
					if ($latitude < 43.521431) {
						return 140;
					} else {
						return 280;
					}
				} else {
					return 140;
				}
			} else if ($longitude < 156.510300) {
				return 140;
			} else {
				return 373;
			}
		} else if ($longitude < 148.475754) {
			if ($longitude < 129.612976) {
				return 141;
			} else if ($latitude < 71.356834) {
				return $this->call46($latitude, $longitude);
			} else if ($latitude < 72.331413) {
				if ($longitude < 137.560638) {
					if ($longitude < 130.047699) {
						return 141;
					} else {
						return 37;
					}
				} else if ($longitude < 138.896896) {
					return 37;
				} else {
					if ($this->polygons[2594]->contains($latitude, $longitude)) {
						return 46;
					} else {
						return 37;
					}
				}
			} else {
				return 37;
			}
		} else if ($longitude < 161.149689) {
			if ($longitude < 152.057312) {
				if ($latitude < 72.314082) {
					return 46;
				} else {
					return 37;
				}
			} else if ($latitude < 69.467075) {
				if ($latitude < 68.347848) {
					if ($longitude < 155.534637) {
						return 46;
					} else if ($latitude < 59.780066) {
						if ($longitude < 155.597702) {
							if ($latitude < 57.468508) {
								return 46;
							} else {
								return 373;
							}
						} else {
							return 373;
						}
					} else if ($latitude < 60.907417) {
						return 46;
					} else if ($latitude < 64.627632) {
						return 46;
					} else if ($longitude < 158.342163) {
						if ($this->polygons[2595]->contains($latitude, $longitude)) {
							return 365;
						} else {
							return 46;
						}
					} else {
						if ($this->polygons[2596]->contains($latitude, $longitude)) {
							return 365;
						} else {
							return 46;
						}
					}
				} else {
					return 46;
				}
			} else if ($latitude < 71.090889) {
				return 46;
			} else {
				return 37;
			}
		} else if ($latitude < 65.153413) {
			if ($latitude < 53.005890) {
				return 158;
			} else if ($latitude < 60.870335) {
				return 373;
			} else if ($longitude < 163.466064) {
				if ($latitude < 64.386932) {
					if ($latitude < 61.465637) {
						if ($longitude < 162.566748) {
							return 46;
						} else {
							return 373;
						}
					} else if ($latitude < 62.926285) {
						if ($this->polygons[2597]->contains($latitude, $longitude)) {
							return 46;
						} else {
							return 373;
						}
					} else {
						if ($this->polygons[2598]->contains($latitude, $longitude)) {
							return 46;
						} else {
							return 373;
						}
					}
				} else {
					if ($this->polygons[2599]->contains($latitude, $longitude)) {
						return 365;
					}
					if ($this->polygons[2600]->contains($latitude, $longitude)) {
						return 373;
					} else {
						return 46;
					}
				}
			} else if ($longitude < 174.513611) {
				if ($latitude < 61.112862) {
					return 373;
				} else if ($longitude < 168.989838) {
					if ($longitude < 166.227951) {
						if ($this->polygons[2601]->contains($latitude, $longitude)) {
							return 365;
						} else {
							return 373;
						}
					} else {
						if ($this->polygons[2602]->contains($latitude, $longitude)) {
							return 373;
						} else {
							return 365;
						}
					}
				} else if ($longitude < 171.751724) {
					if ($latitude < 63.133138) {
						if ($this->polygons[2603]->contains($latitude, $longitude)) {
							return 373;
						} else {
							return 365;
						}
					} else {
						if ($this->polygons[2604]->contains($latitude, $longitude)) {
							return 373;
						} else {
							return 365;
						}
					}
				} else {
					if ($this->polygons[2605]->contains($latitude, $longitude)) {
						return 365;
					} else {
						return 373;
					}
				}
			} else {
				return 365;
			}
		} else if ($longitude < 162.849396) {
			if ($latitude < 69.663055) {
				if ($longitude < 161.655670) {
					if ($latitude < 68.411377) {
						if ($longitude < 161.365784) {
							if ($this->polygons[2606]->contains($latitude, $longitude)) {
								return 46;
							} else {
								return 365;
							}
						} else {
							if ($this->polygons[2607]->contains($latitude, $longitude)) {
								return 46;
							} else {
								return 365;
							}
						}
					} else {
						return 46;
					}
				} else if ($longitude < 161.891998) {
					if ($latitude < 68.378539) {
						if ($this->polygons[2608]->contains($latitude, $longitude)) {
							return 46;
						} else {
							return 365;
						}
					} else {
						return 46;
					}
				} else if ($latitude < 68.869705) {
					if ($this->polygons[2609]->contains($latitude, $longitude)) {
						return 46;
					} else {
						return 365;
					}
				} else if ($longitude < 162.089188) {
					return 46;
				} else {
					if ($this->polygons[2610]->contains($latitude, $longitude)) {
						return 365;
					} else {
						return 46;
					}
				}
			} else {
				return 46;
			}
		} else {
			return 365;
		}
	}
	
	protected function call48(float $latitude, float $longitude) : ?int
	{
		if ($longitude < 120.474747) {
			if ($latitude < 11.575916) {
				if ($latitude < 5.157583) {
					if ($longitude < 108.696526) {
						return 26;
					} else if ($longitude < 118.300781) {
						if ($latitude < 3.061667) {
							if ($longitude < 109.267975) {
								if ($latitude < 1.751361) {
									return 320;
								} else {
									return 26;
								}
							} else if ($longitude < 115.507401) {
								if ($longitude < 111.416031) {
									if ($latitude < 2.083333) {
										if ($this->polygons[2611]->contains($latitude, $longitude)) {
											return 320;
										} else {
											return 286;
										}
									} else {
										return 286;
									}
								} else if ($longitude < 113.461716) {
									if ($this->polygons[2612]->contains($latitude, $longitude)) {
										return 320;
									} else {
										return 286;
									}
								} else if ($latitude < 1.841722) {
									if ($longitude < 114.484558) {
										if ($this->polygons[2613]->contains($latitude, $longitude)) {
											return 286;
										}
										if ($this->polygons[2614]->contains($latitude, $longitude)) {
											return 383;
										} else {
											return 320;
										}
									} else {
										if ($this->polygons[2615]->contains($latitude, $longitude)) {
											return 286;
										}
										if ($this->polygons[2616]->contains($latitude, $longitude)) {
											return 320;
										} else {
											return 383;
										}
									}
								} else {
									if ($this->polygons[2617]->contains($latitude, $longitude)) {
										return 383;
									} else {
										return 286;
									}
								}
							} else {
								return 383;
							}
						} else if ($longitude < 117.507942) {
							if ($latitude < 3.454611) {
								if ($longitude < 115.648697) {
									if ($this->polygons[2618]->contains($latitude, $longitude)) {
										return 383;
									}
									if ($this->polygons[2619]->contains($latitude, $longitude)) {
										return 383;
									} else {
										return 286;
									}
								} else {
									return 383;
								}
							} else if ($longitude < 117.061142) {
								if ($longitude < 115.359444) {
									if ($longitude < 114.294377) {
										if ($this->polygons[2620]->contains($latitude, $longitude)) {
											return 217;
										} else {
											return 286;
										}
									} else if ($latitude < 4.250889) {
										if ($this->polygons[2621]->contains($latitude, $longitude)) {
											return 217;
										}
										if ($this->polygons[2622]->contains($latitude, $longitude)) {
											return 217;
										} else {
											return 286;
										}
									} else if ($longitude < 114.826910) {
										if ($this->polygons[2623]->contains($latitude, $longitude)) {
											return 286;
										}
										if ($this->polygons[2624]->contains($latitude, $longitude)) {
											return 286;
										}
										if ($this->polygons[2625]->contains($latitude, $longitude)) {
											return 286;
										}
										if ($this->polygons[2626]->contains($latitude, $longitude)) {
											return 286;
										} else {
											return 217;
										}
									} else {
										if ($this->polygons[2627]->contains($latitude, $longitude)) {
											return 286;
										}
										if ($this->polygons[2628]->contains($latitude, $longitude)) {
											return 286;
										} else {
											return 217;
										}
									}
								} else {
									if ($this->polygons[2629]->contains($latitude, $longitude)) {
										return 383;
									}
									if ($this->polygons[2630]->contains($latitude, $longitude)) {
										return 383;
									} else {
										return 286;
									}
								}
							} else if ($latitude < 3.628139) {
								return 383;
							} else {
								if ($this->polygons[2631]->contains($latitude, $longitude)) {
									return 286;
								} else {
									return 383;
								}
							}
						} else if ($latitude < 4.147695) {
							return 383;
						} else if ($longitude < 117.585808) {
							if ($this->polygons[2632]->contains($latitude, $longitude)) {
								return 383;
							} else {
								return 286;
							}
						} else {
							if ($this->polygons[2633]->contains($latitude, $longitude)) {
								return 383;
							} else {
								return 286;
							}
						}
					} else if ($longitude < 119.222952) {
						if ($latitude < 2.312556) {
							return 383;
						} else {
							return 286;
						}
					} else if ($latitude < 1.079167) {
						return 383;
					} else {
						return 279;
					}
				} else if ($longitude < 119.272194) {
					if ($latitude < 6.890389) {
						return 286;
					} else if ($longitude < 117.930031) {
						if ($latitude < 7.363417) {
							return 286;
						} else if ($longitude < 109.135417) {
							if ($longitude < 106.207001) {
								if ($this->polygons[2634]->contains($latitude, $longitude)) {
									return 251;
								} else {
									return 24;
								}
							} else {
								return 24;
							}
						} else {
							return 279;
						}
					} else {
						return 279;
					}
				} else {
					return 279;
				}
			} else {
				return $this->call43($latitude, $longitude);
			}
		} else if ($longitude < 124.619637) {
			if ($latitude < 11.415667) {
				if ($latitude < 1.422111) {
					return 383;
				} else {
					return 279;
				}
			} else if ($latitude < 21.103582) {
				return 279;
			} else if ($longitude < 122.000443) {
				if ($latitude < 21.120611) {
					return 279;
				} else {
					return 125;
				}
			} else {
				return 280;
			}
		} else if ($longitude < 129.147415) {
			if ($latitude < 8.397028) {
				if ($longitude < 127.323502) {
					if ($latitude < 2.817055) {
						if ($longitude < 125.467613) {
							return 383;
						} else {
							return 131;
						}
					} else if ($latitude < 4.780778) {
						return 383;
					} else {
						return 279;
					}
				} else {
					return 131;
				}
			} else if ($latitude < 12.690361) {
				return 279;
			} else {
				return 280;
			}
		} else if ($longitude < 163.034882) {
			if ($longitude < 145.852493) {
				if ($longitude < 144.953979) {
					if ($latitude < 7.300587) {
						if ($latitude < 1.072750) {
							return 131;
						} else {
							return 187;
						}
					} else if ($longitude < 139.663284) {
						if ($latitude < 8.092916) {
							return 187;
						} else if ($longitude < 131.193527) {
							return 280;
						} else {
							return 216;
						}
					} else if ($latitude < 10.022223) {
						return 216;
					} else if ($longitude < 141.476913) {
						return 280;
					} else if ($latitude < 17.090556) {
						return 106;
					} else {
						return 389;
					}
				} else {
					return 389;
				}
			} else if ($longitude < 153.821915) {
				if ($longitude < 146.081223) {
					return 389;
				} else {
					return 216;
				}
			} else if ($longitude < 158.336243) {
				if ($longitude < 153.985229) {
					return 280;
				} else {
					return 222;
				}
			} else if ($latitude < 6.857666) {
				if ($longitude < 160.718369) {
					return 222;
				} else {
					return 247;
				}
			} else {
				return 18;
			}
		} else if ($longitude < 170.237549) {
			if ($longitude < 167.775497) {
				if ($longitude < 166.271835) {
					return 18;
				} else if ($longitude < 166.654526) {
					return 135;
				} else if ($longitude < 166.901505) {
					return 18;
				} else {
					return 292;
				}
			} else {
				return 18;
			}
		} else if ($longitude < 172.137970) {
			return 18;
		} else {
			return 148;
		}
	}
	
	protected function call49(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 0.621778) {
			if ($longitude < 135.281830) {
				if ($longitude < 124.870331) {
					if ($latitude < -14.905778) {
						return 35;
					} else if ($longitude < 118.159142) {
						if ($latitude < -5.413084) {
							if ($latitude < -7.231639) {
								if ($longitude < 114.601669) {
									if ($latitude < -8.091222) {
										if ($longitude < 112.714195) {
											if ($longitude < 105.719582) {
												return 124;
											} else {
												return 26;
											}
										} else if ($longitude < 113.425163) {
											return 26;
										} else {
											if ($this->polygons[2635]->contains($latitude, $longitude)) {
												return 383;
											}
											if ($this->polygons[2636]->contains($latitude, $longitude)) {
												return 383;
											} else {
												return 26;
											}
										}
									} else {
										return 26;
									}
								} else {
									return 383;
								}
							} else {
								return 26;
							}
						} else if ($longitude < 108.029915) {
							return 26;
						} else if ($longitude < 115.817696) {
							if ($longitude < 109.185059) {
								if ($latitude < -2.501333) {
									return 26;
								} else {
									return 320;
								}
							} else if ($longitude < 113.424698) {
								return 320;
							} else if ($latitude < -4.363333) {
								return 383;
							} else if ($longitude < 114.026596) {
								if ($this->polygons[2637]->contains($latitude, $longitude)) {
									return 383;
								} else {
									return 320;
								}
							} else if ($latitude < -1.783340) {
								if ($this->polygons[2638]->contains($latitude, $longitude)) {
									return 320;
								} else {
									return 383;
								}
							} else {
								if ($this->polygons[2639]->contains($latitude, $longitude)) {
									return 383;
								}
								if ($this->polygons[2640]->contains($latitude, $longitude)) {
									return 383;
								} else {
									return 320;
								}
							}
						} else {
							return 383;
						}
					} else if ($longitude < 124.036163) {
						return 383;
					} else if ($latitude < -8.119555) {
						if ($latitude < -9.174916) {
							if ($latitude < -14.858306) {
								return 35;
							} else {
								if ($this->polygons[2641]->contains($latitude, $longitude)) {
									return 345;
								} else {
									return 383;
								}
							}
						} else {
							return 383;
						}
					} else if ($latitude < -5.320944) {
						return 383;
					} else if ($latitude < -1.961278) {
						return 131;
					} else if ($latitude < -1.628500) {
						if ($longitude < 124.177025) {
							return 383;
						} else {
							return 131;
						}
					} else if ($latitude < -0.611208) {
						return 131;
					} else {
						return 383;
					}
				} else if ($latitude < -8.137417) {
					if ($longitude < 128.731216) {
						if ($latitude < -14.416805) {
							if ($latitude < -31.300000) {
								if ($this->polygons[2642]->contains($latitude, $longitude)) {
									return 35;
								} else {
									return 79;
								}
							} else {
								return 35;
							}
						} else if ($latitude < -13.734889) {
							return 35;
						} else if ($longitude < 127.345337) {
							if ($longitude < 125.165901) {
								if ($latitude < -8.630452) {
									if ($latitude < -8.964142) {
										if ($latitude < -9.109211) {
											if ($this->polygons[2643]->contains($latitude, $longitude)) {
												return 345;
											} else {
												return 383;
											}
										} else {
											if ($this->polygons[2644]->contains($latitude, $longitude)) {
												return 383;
											} else {
												return 345;
											}
										}
									} else {
										return 345;
									}
								} else {
									return 383;
								}
							} else {
								return 345;
							}
						} else {
							return 131;
						}
					} else if ($latitude < -11.953861) {
						if ($latitude < -14.820723) {
							if ($latitude < -32.235695) {
								return 67;
							} else if ($longitude < 129.259827) {
								if ($latitude < -31.300000) {
									if ($this->polygons[2645]->contains($latitude, $longitude)) {
										return 79;
									} else {
										return 67;
									}
								} else {
									if ($this->polygons[2646]->contains($latitude, $longitude)) {
										return 35;
									}
									if ($this->polygons[2647]->contains($latitude, $longitude)) {
										return 67;
									} else {
										return 10;
									}
								}
							} else if ($latitude < -25.998917) {
								if ($this->polygons[2648]->contains($latitude, $longitude)) {
									return 10;
								} else {
									return 67;
								}
							} else {
								return 10;
							}
						} else {
							return 10;
						}
					} else if ($latitude < -10.902861) {
						return 10;
					} else {
						return 131;
					}
				} else {
					return 131;
				}
			} else {
				return $this->call42($latitude, $longitude);
			}
		} else if ($latitude < 25.382833) {
			return $this->call48($latitude, $longitude);
		} else if ($longitude < 127.410225) {
			if ($latitude < 35.297001) {
				if ($latitude < 30.342751) {
					if ($longitude < 121.602638) {
						if ($longitude < 120.578110) {
							if ($longitude < 119.899170) {
								if ($longitude < 111.484301) {
									if ($longitude < 108.294469) {
										return 403;
									} else if ($latitude < 27.862792) {
										if ($longitude < 109.889385) {
											if ($latitude < 26.622813) {
												if ($this->polygons[2649]->contains($latitude, $longitude)) {
													return 403;
												} else {
													return 291;
												}
											} else {
												if ($this->polygons[2650]->contains($latitude, $longitude)) {
													return 403;
												} else {
													return 291;
												}
											}
										} else {
											if ($this->polygons[2651]->contains($latitude, $longitude)) {
												return 403;
											} else {
												return 291;
											}
										}
									} else if ($longitude < 109.889385) {
										if ($latitude < 29.102771) {
											if ($this->polygons[2652]->contains($latitude, $longitude)) {
												return 403;
											} else {
												return 291;
											}
										} else {
											if ($this->polygons[2653]->contains($latitude, $longitude)) {
												return 403;
											} else {
												return 291;
											}
										}
									} else {
										return 291;
									}
								} else {
									return 291;
								}
							} else if ($latitude < 26.386000) {
								if ($latitude < 26.279583) {
									return 125;
								} else if ($longitude < 120.219345) {
									return 125;
								} else {
									return 291;
								}
							} else {
								return 291;
							}
						} else {
							return 291;
						}
					} else if ($longitude < 123.510361) {
						return 291;
					} else {
						return 280;
					}
				} else if ($longitude < 125.216530) {
					if ($longitude < 121.895668) {
						if ($longitude < 111.023788) {
							if ($latitude < 33.487884) {
								if ($longitude < 108.064213) {
									return 403;
								} else if ($latitude < 31.915317) {
									if ($this->polygons[2654]->contains($latitude, $longitude)) {
										return 403;
									} else {
										return 291;
									}
								} else if ($longitude < 109.544000) {
									if ($this->polygons[2655]->contains($latitude, $longitude)) {
										return 291;
									}
									if ($this->polygons[2656]->contains($latitude, $longitude)) {
										return 291;
									} else {
										return 403;
									}
								} else if ($latitude < 32.701600) {
									if ($this->polygons[2657]->contains($latitude, $longitude)) {
										return 403;
									}
									if ($this->polygons[2658]->contains($latitude, $longitude)) {
										return 403;
									} else {
										return 291;
									}
								} else {
									if ($this->polygons[2659]->contains($latitude, $longitude)) {
										return 291;
									} else {
										return 403;
									}
								}
							} else {
								if ($this->polygons[2660]->contains($latitude, $longitude)) {
									return 291;
								} else {
									return 403;
								}
							}
						} else {
							return 291;
						}
					} else if ($longitude < 122.833557) {
						return 291;
					} else {
						return 11;
					}
				} else {
					return 11;
				}
			} else {
				return $this->call45($latitude, $longitude);
			}
		} else if ($latitude < 34.400917) {
			return 280;
		} else {
			return $this->call47($latitude, $longitude);
		}
	}
	
	protected function call50(float $latitude, float $longitude) : ?int
	{
		if ($latitude < 52.898487) {
			if ($latitude < 20.373875) {
				if ($latitude < -25.156712) {
					if ($latitude < -50.907104) {
						if ($longitude < -72.437805) {
							return 31;
						} else if ($latitude < -54.523746) {
							if ($longitude < -68.613205) {
								return 31;
							} else if ($latitude < -55.351746) {
								if ($longitude < -66.772804) {
									return 31;
								} else {
									return 69;
								}
							} else if ($latitude < -55.121574) {
								return 31;
							} else if ($longitude < -65.110054) {
								if ($latitude < -54.922653) {
									if ($longitude < -67.035919) {
										return 31;
									} else if ($longitude < -66.787865) {
										if ($latitude < -54.971360) {
											return 31;
										} else {
											return 287;
										}
									} else {
										return 287;
									}
								} else if ($longitude < -68.253555) {
									if ($latitude < -54.907707) {
										return 31;
									} else if ($longitude < -68.609608) {
										if ($this->polygons[2661]->contains($latitude, $longitude)) {
											return 287;
										} else {
											return 31;
										}
									} else {
										return 287;
									}
								} else if ($longitude < -67.756295) {
									if ($latitude < -54.893145) {
										return 31;
									} else {
										return 287;
									}
								} else if ($latitude < -54.916042) {
									if ($longitude < -67.298005) {
										return 31;
									} else {
										return 287;
									}
								} else {
									return 287;
								}
							} else if ($longitude < -63.806961) {
								return 287;
							} else {
								return 69;
							}
						} else if ($longitude < -61.327831) {
							if ($longitude < -72.023773) {
								if ($latitude < -51.821801) {
									return 31;
								} else if ($latitude < -51.569118) {
									if ($this->polygons[2662]->contains($latitude, $longitude)) {
										return 85;
									} else {
										return 31;
									}
								} else {
									if ($this->polygons[2663]->contains($latitude, $longitude)) {
										return 31;
									} else {
										return 85;
									}
								}
							} else if ($longitude < -71.377541) {
								if ($latitude < -52.638439) {
									return 31;
								} else {
									if ($this->polygons[2664]->contains($latitude, $longitude)) {
										return 85;
									} else {
										return 31;
									}
								}
							} else if ($latitude < -53.978534) {
								if ($longitude < -69.057579) {
									return 31;
								} else {
									if ($this->polygons[2665]->contains($latitude, $longitude)) {
										return 31;
									} else {
										return 287;
									}
								}
							} else if ($latitude < -52.456120) {
								if ($longitude < -69.544449) {
									return 31;
								} else {
									if ($this->polygons[2666]->contains($latitude, $longitude)) {
										return 31;
									} else {
										return 287;
									}
								}
							} else if ($longitude < -68.368202) {
								if ($this->polygons[2667]->contains($latitude, $longitude)) {
									return 31;
								} else {
									return 85;
								}
							} else {
								return 82;
							}
						} else if ($longitude < -38.240654) {
							return 82;
						} else {
							return 69;
						}
					} else if ($latitude < -44.969273) {
						if ($longitude < -73.589836) {
							return 31;
						} else if ($latitude < -45.399536) {
							if ($longitude < -73.585594) {
								return 31;
							} else if ($longitude < -73.533890) {
								if ($latitude < -49.517205) {
									if ($latitude < -50.669666) {
										return 31;
									} else if ($latitude < -50.072808) {
										if ($latitude < -50.156428) {
											if ($this->polygons[2668]->contains($latitude, $longitude)) {
												return 85;
											} else {
												return 31;
											}
										} else {
											if ($this->polygons[2669]->contains($latitude, $longitude)) {
												return 85;
											} else {
												return 31;
											}
										}
									} else if ($latitude < -49.912819) {
										if ($this->polygons[2670]->contains($latitude, $longitude)) {
											return 85;
										} else {
											return 31;
										}
									} else {
										if ($this->polygons[2671]->contains($latitude, $longitude)) {
											return 85;
										} else {
											return 31;
										}
									}
								} else {
									return 31;
								}
							} else if ($latitude < -49.584360) {
								if ($latitude < -50.092410) {
									if ($longitude < -72.230858) {
										if ($latitude < -50.855255) {
											if ($this->polygons[2672]->contains($latitude, $longitude)) {
												return 85;
											} else {
												return 31;
											}
										} else if ($latitude < -50.312183) {
											if ($this->polygons[2673]->contains($latitude, $longitude)) {
												return 85;
											} else {
												return 31;
											}
										} else {
											if ($this->polygons[2674]->contains($latitude, $longitude)) {
												return 31;
											} else {
												return 85;
											}
										}
									} else {
										return 85;
									}
								} else if ($latitude < -49.953084) {
									if ($longitude < -73.497192) {
										if ($latitude < -50.047192) {
											if ($this->polygons[2675]->contains($latitude, $longitude)) {
												return 31;
											} else {
												return 85;
											}
										} else {
											if ($this->polygons[2676]->contains($latitude, $longitude)) {
												return 85;
											} else {
												return 31;
											}
										}
									} else {
										return 85;
									}
								} else {
									if ($this->polygons[2677]->contains($latitude, $longitude)) {
										return 31;
									} else {
										return 85;
									}
								}
							} else if ($longitude < -67.100245) {
								if ($longitude < -72.887050) {
									if ($latitude < -48.943169) {
										if ($this->polygons[2678]->contains($latitude, $longitude)) {
											return 31;
										} else {
											return 85;
										}
									} else {
										return 31;
									}
								} else if ($longitude < -69.993648) {
									if ($latitude < -47.491948) {
										if ($this->polygons[2679]->contains($latitude, $longitude)) {
											return 31;
										} else {
											return 85;
										}
									} else {
										if ($this->polygons[2680]->contains($latitude, $longitude)) {
											return 85;
										}
										if ($this->polygons[2681]->contains($latitude, $longitude)) {
											return 88;
										} else {
											return 31;
										}
									}
								} else {
									if ($this->polygons[2682]->contains($latitude, $longitude)) {
										return 88;
									} else {
										return 85;
									}
								}
							} else {
								return 85;
							}
						} else if ($longitude < -73.093870) {
							return 31;
						} else if ($longitude < -71.297264) {
							if ($this->polygons[2683]->contains($latitude, $longitude)) {
								return 88;
							} else {
								return 31;
							}
						} else {
							return 88;
						}
					} else if ($latitude < -43.470894) {
						if ($longitude < -73.787636) {
							if ($longitude < -75.012062) {
								if ($longitude < -176.153000) {
									return 59;
								} else {
									return 31;
								}
							} else {
								return 31;
							}
						} else if ($longitude < -72.847519) {
							return 31;
						} else if ($longitude < -72.698524) {
							return 31;
						} else if ($longitude < -71.110161) {
							if ($latitude < -44.523029) {
								if ($this->polygons[2684]->contains($latitude, $longitude)) {
									return 88;
								} else {
									return 31;
								}
							} else {
								if ($this->polygons[2685]->contains($latitude, $longitude)) {
									return 88;
								} else {
									return 31;
								}
							}
						} else {
							return 88;
						}
					} else if ($longitude < -72.622307) {
						if ($longitude < -80.716499) {
							if ($longitude < -177.880646) {
								return 377;
							} else if ($longitude < -144.296722) {
								return 312;
							} else if ($latitude < -30.451663) {
								return 31;
							} else {
								return 263;
							}
						} else {
							return 31;
						}
					} else {
						return $this->call0($latitude, $longitude);
					}
				} else {
					return $this->call6($latitude, $longitude);
				}
			} else {
				return $this->call13($latitude, $longitude);
			}
		} else if ($longitude < -74.961365) {
			if ($longitude < -106.448578) {
				if ($latitude < 60.611965) {
					if ($longitude < -134.793625) {
						if ($longitude < -152.081146) {
							if ($longitude < -162.000000) {
								if ($longitude < -169.662872) {
									if ($latitude < 53.077026) {
										return 158;
									} else {
										return 134;
									}
								} else {
									return 134;
								}
							} else {
								return 370;
							}
						} else if ($longitude < -141.000000) {
							return 370;
						} else if ($latitude < 57.727699) {
							return 23;
						} else if ($latitude < 58.559212) {
							if ($latitude < 58.010578) {
								if ($latitude < 57.768707) {
									return 23;
								} else if ($longitude < -135.902527) {
									if ($this->polygons[2686]->contains($latitude, $longitude)) {
										return 359;
									}
									if ($this->polygons[2687]->contains($latitude, $longitude)) {
										return 359;
									} else {
										return 23;
									}
								} else {
									if ($this->polygons[2688]->contains($latitude, $longitude)) {
										return 23;
									} else {
										return 359;
									}
								}
							} else {
								return 359;
							}
						} else if ($latitude < 58.786423) {
							return 359;
						} else if ($longitude < -139.228378) {
							if ($latitude < 59.995773) {
								return 98;
							} else {
								if ($this->polygons[2689]->contains($latitude, $longitude)) {
									return 324;
								} else {
									return 98;
								}
							}
						} else if ($longitude < -136.475357) {
							if ($latitude < 58.897247) {
								if ($longitude < -137.563436) {
									if ($this->polygons[2690]->contains($latitude, $longitude)) {
										return 98;
									} else {
										return 359;
									}
								} else {
									return 359;
								}
							} else if ($latitude < 60.000000) {
								if ($longitude < -137.492722) {
									if ($latitude < 58.990978) {
										if ($this->polygons[2691]->contains($latitude, $longitude)) {
											return 45;
										}
										if ($this->polygons[2692]->contains($latitude, $longitude)) {
											return 359;
										} else {
											return 98;
										}
									} else {
										if ($this->polygons[2693]->contains($latitude, $longitude)) {
											return 45;
										} else {
											return 98;
										}
									}
								} else if ($latitude < 58.904221) {
									return 359;
								} else {
									if ($this->polygons[2694]->contains($latitude, $longitude)) {
										return 45;
									} else {
										return 359;
									}
								}
							} else {
								if ($this->polygons[2695]->contains($latitude, $longitude)) {
									return 98;
								} else {
									return 324;
								}
							}
						} else if ($latitude < 59.019775) {
							return 359;
						} else if ($latitude < 60.000000) {
							if ($this->polygons[2696]->contains($latitude, $longitude)) {
								return 45;
							} else {
								return 359;
							}
						} else {
							return 324;
						}
					} else {
						return $this->call14($latitude, $longitude);
					}
				} else {
					return $this->call15($latitude, $longitude);
				}
			} else {
				return $this->call17($latitude, $longitude);
			}
		} else {
			return $this->call19($latitude, $longitude);
		}
	}
}
