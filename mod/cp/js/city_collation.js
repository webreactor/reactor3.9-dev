function releaseCity(k)
{
	_rt('#city_collation_'+k).set({disabled:false});
	_rt('#release_'+k).set({style:{display:'none'}});
	return false;